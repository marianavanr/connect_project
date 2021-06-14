<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$confirme_senha=$_POST['confirme_senha'];
$sexo=$_POST['sexo'];

$servername = 'fdb28.awardspace.net';
$username = '3649120_bancodedados';
$database = '3649120_bancodedados';
$password = 'abcd12345';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo 'Aguarde um momento, estamos verificando seus dados... <br>';
 
$sql = "INSERT INTO 3649120_bancodedados.Cadastro (Nome,Sobrenome,Telefone,Email,Senha,Sexo) VALUES ('$nome','$sobrenome','$telefone','$email','$senha','$sexo')";
if (mysqli_query($conn, $sql)){
      echo "Obrigado por cadastrar seus dados!";
} else {
      echo "Aconteceu algum problema com o seu cadastro";
}
mysqli_close($conn);
?>