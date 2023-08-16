<?php
session_start();
include("config.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	//echo "$usuario - $password";
	if((!empty($usuario)) AND (!empty($password))){
		//Gerar a password criptografa
		//echo password_hash($password, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, username, email, usuario, password , birthday , tel1 , CPF , CEP FROM user WHERE email='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conexao, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($password, $row_usuario['password'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['username'] = $row_usuario['username'];
				$_SESSION['email'] = $row_usuario['email'];
				$_SESSION['CEP'] = $row_usuario['CEP'];
				$_SESSION['password'] = $row_usuario['password'];
                $_SESSION['birthday'] = $row_usuario['birthday'];
                $_SESSION['tel1'] = $row_usuario['tel1'];
                $_SESSION['CPF'] = $row_usuario['CPF'];
             
				header("Location: index.php");
			}else{
				$_SESSION['msg'] = "Login ou password incorreto!";
				header("Location: index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login ou password incorreto!";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: Login.php");
}