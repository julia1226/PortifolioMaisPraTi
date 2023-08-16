<?php
session_start();
include_once("config.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //echo "$usuario - $senha";
    if((!empty($usuario)) AND (!empty($senha))){
        //Gerar a senha criptografa
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuário no BD
        $result_usuario = "SELECT id, nome, email, usuario, senha   FROM tb_usuario WHERE usuario='$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        if($resultado_usuario){
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if(password_verify($senha, $row_usuario['senha'])){
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                $_SESSION['senha'] = $row_usuario['senha'];
                $_SESSION['usuario'] = $row_usuario['usuario'];

                header("Location: index.php");
            }else{
                $_SESSION['msg'] = "Login ou senha incorreto!";
                header("Location:UserEdit.php");
            }
        }
    }else{
        $_SESSION['msg'] = "Login ou senha incorreto!";
        header("Location: login.php");
    }
}else{
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: UserEdit.php");
}

?>