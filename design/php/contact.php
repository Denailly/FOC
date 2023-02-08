<?php

header('Content-Type: text/html; charset=utf-8');
require 'class.phpmailer.php';

$mail = new PHPMailer(true);

try
{
    $nome = addslashes($_POST['name']);
    $surname = addslashes($_POST['surname']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $description = addslashes($_POST['description']);

    //Server settings
    $mail->SMTPDebug = 1;
    $mail->isSMTP();
    $mail->Host = 'mail.estudefoc.com.br';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@estudefoc.com.br';
    $mail->Password = 'W%TUPzU{j)E?';
    // $mail->SMTPSecure = 'tls'; //<---- THIS is the problem
    $mail->Port = 25;
            

    //Recipients
    $mail->setFrom('contato@estudefoc.com.br', 'Oswaldo - Curso DESIGN');
    $mail->addAddress('contato@estudefoc.com.br', 'Oswaldo - Curso DESIGN');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Contato landingpage - Curso DESIGN - ' . date("H:i") . '-' . date("d/m/Y");
    
    $mail->Body    = "Dados do contato"."<br><br>".
    "Nome: ".$nome."<br>"
    ."Sobrenome: ".$surname."<br>"
    ."Telefone: ".$phone."<br><br>"
    ."Mensagem: ".$description;

    if (!$mail->Send()) 
    {
        echo "Mensagem não enviada. Tente novamente.";
        echo "Erro: " . $mailer->ErrorInfo;
        exit;
    }
    else 
    {
    ?>
<script>
alert("Sua mensagem foi enviada com sucesso.");
window.location = "https://estudefoc.com.br/design/";
</script>
<?php }


}
catch(Exception $e)
{
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>