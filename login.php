<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

$conn = mysqli_connect('fdb28.awardspace.net', '3649120_bancodedados', 'abcd12345', '3649120_bancodedados') or die
 ("Sem conexão com o servidor");
 mysqli_select_db ( $conn, '3649120_bancodedados') or die('Sem acesso ao Banco de Dados');


// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios


$result = mysqli_query($conn, "SELECT * FROM Cadastro WHERE Email = '$login' AND Senha= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */


if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
echo 'Você acessou o banco!';

}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  echo 'Tente novamente, vai que...';
  }
?>
