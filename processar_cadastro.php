<?php
// Recebe os dados do formulário
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

// Define as informações do e-mail
$to = "contato@estudefoc.com.br";
$subject = "LP Pos-graduacao";
$message = "Nome: $name\n";
$message .= "Sobrenome: $surname\n";
$message .= "E-mail: $email\n";
$message .= "Telefone: $phone\n";
$message .= "Curso de interesse: $course\n";
$headers = "From: $email";

// Envia o e-mail
if (mail($to, $subject, $message, $headers)) {
  echo "Obrigado pelo cadastro! Em breve entraremos em contato.";
} else {
  echo "Desculpe, ocorreu um erro ao enviar o cadastro. Tente novamente mais tarde.";
}
?>
