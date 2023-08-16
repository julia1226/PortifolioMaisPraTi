<?php
    switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}' )";

        $res = $conexao->query($sql);

        if($res==true){
            print "<script>alert('Usuário cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else  {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        
        break;
    case "editar":

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET 
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_nasc='{$data_nasc}'
                
                WHERE
                    id=".$_REQUEST["id"];
                
                

        $res = $conexao->query($sql);

        if($res==true){
            print "<script>alert('Usuário editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else  {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
    case "excluir":

        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conexao->query($sql);

        if($res==true){
            print "<script>alert('Usuário excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else  {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }


        break;
            

    }
