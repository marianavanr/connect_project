<?php

         echo '<script> alert ("E-mail enviado!")</script>';
         
if (isset($_POST['BTEnvia'])){

    
 
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
     //====================================================
    $email_remetente = $_POST['email']; // deve ser um email do seu dominio (ex: suaconta@seudominio.com.br)
    //====================================================
 
 
    //Configurações do email, ajustar conforme necessidade
    //====================================================
    $email_destinatario = 'mariana.vanrossum@uni9.edu.br'; // qualquer email pode receber os dados
    $email_reply = $_POST['email'];
    $email_assunto = $_POST['assunto'];
    //====================================================
    
    //Variaveis de POST, Alterar somente se necessário
    //====================================================
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['campo-digite'];
    //====================================================
 
    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = 'Nome = '.$nome.' \n';
    $email_conteudo .= 'Email = '.$email.' \n';
    $email_conteudo .=  'Telefone = '.$telefone.' \n';
    $email_conteudo .=  'Mensagem = '.$mensagem.' \n';
     //====================================================
 
    //Seta os Headers (Alterar somente caso necessário)
    //====================================================
    $email_headers = implode ( '\n',array ( 'From: $email_remetente', 'Reply-To: $email_reply', 'Subject: $email_assunto','Return-Path:  $email_remetente','MIME-Version: 1.0','X-Priority: 3','Content-Type: text/html; charset=UTF-8' ) );
    //====================================================
         
 
    //Enviando o email
    //====================================================
    if (mail ($email_destinatario, $email_assunto, $email_conteudo, $email_headers)){
        echo '<script>alert ("E-mail enviado!")</script>';
        echo '</b>E-Mail enviado com sucesso!</b>';
    }
      else{
        echo '</b>Falha no envio do E-Mail!</b>';
    }
    //====================================================
}   
?>