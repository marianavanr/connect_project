<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente = $_POST['nome'];
$emailremetente = trim($_POST['email']);
$emaildestinatario = 'mariana.vanrossum@gmail.com';// Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto = $_POST['assunto'];
$mensagem = $_POST['digite'];
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
<strong>Formulário de Contato</strong> 
<p><b>Nome:</b> '.$nomeremetente.' <p>
<b>E-Mail:</b> '.$emailremetente.' <p>
<b>Assunto:</b> '.$assunto.' <p>
<b>Mensagem:</b> '.$mensagem.'</p>
<hr>';
 
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n";
// remetente
$headers .= "Return-Path: $emaildestinatario \r\n";
// return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
if($envio)
echo '<html>
  <head>
  </head>
  <body>
  <script>
function enviar_email()
{
alert("E-mail enviado!");
 window.location.href = "http://connectproject.mygamesonline.org/index.html";
}
</script>;
 </body>
</html>';
// Página que será redirecionada
?>

