<?php

header('Content-Type: text/html; charset=utf-8');
require 'class.phpmailer.php';



$nome = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];


$mail_to = 'contato@estudefoc.com.br';

$subject = 'Oswaldo - Curso DESIGN '.$nome;

$body_message = 'De: '.$nome."\n";

$body_message .= 'Sobrenome: '.$surname."\n";

$body_message .= 'Telefone: '.$phone."\n";

$body_message .= 'E-mail: '.$email."\n";

$body_message .= 'Mensagem: '.$description;

$headers = 'From: '.$email."\r\n";

$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
alert("Sua mensagem foi enviada com sucesso.");
window.location = 'https://estudefoc.com.br/design';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert("Mensagem não enviada");
window.location = 'https://estudefoc.com.br/design';
</script>
<?php
}
?>