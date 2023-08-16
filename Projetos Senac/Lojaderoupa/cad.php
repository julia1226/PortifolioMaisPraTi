<?php

// Executa a conexao com o mysql e selecionar a base
include_once 'config.php';

//Recupera os dados enviados via POST
// recebe o Nome

$nome = $_POST["nome"];
// recebe o Email
$email = $_POST["email"];
// recebe a senha Digitada
$usuario = $_POST["usuario"];
// recebe o perfil do usuario
$senha = PASSWORD_HASH($_POST["senha"], PASSWORD_DEFAULT);



//montar a query sql de gravação recebendo as variaveis via post

$sql = "INSERT INTO tb_usuario values (null,'$nome', '$email', '$usuario', '$senha')";


//Faz a conexao e executa a instrucao carregada na varivael $sql e os envia para o banco mysql.
if (mysqli_query($conexao, $sql)){
    // Caso a conexao esteja correta cria o retorno do cadastro
    $msg = "Cadastrado com sucesso!";
}else{
    // Caso a conexao nao seja realizada cria o retorno do cadastro com erro
    $msg = "Erro ao Cadastrar";
}
// Encerra a conexão com o banco
mysqli_close($conexao);
// Cria um alert javascript carrega o conteúdo da variável $msg e redireciona para o index
echo "<script>alert ('".$msg."'); location.href='login.php';</script>"


?>