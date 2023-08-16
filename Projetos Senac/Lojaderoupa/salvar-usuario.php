<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
   * {
       box-sizing: border-box;
    }
    </style>
</head>
<body>

<header> <img class="bannersup" src="img/banner7.webp">



</header>

<body>
    <header>
        <!-- Cabeçalho-->
        <div style="background-color:#000000;padding:15px;">
            <div class="row">
                <div class="col-md-2">
                    <h2 class="menutext"><a href="Outlet.html">Outlet</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"><a href="Serviços.html">Serviços</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"><a href="Contato.html">Contato</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"><a href="login.php">Cadastro</a></h2>
                </div>

                <div class="col-md-2"> 
                    <h2 class="menutext"> <a href="UserEdit.php">Edição de Usuário</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"> <a href="Preços.html">Preços</a></h2>
                </div>


            </div>  
            
        </div>
</header>
<div class="caixa1">
<h2 class="menutext1"><a href="index.php">Menu Principal</a></h2>
</div>


    
</div>

<div style="overflow:auto">

    <!-- Coluna da Esqueda-->   
<Div class="menu"> <img class="bannerlat" src="img/bannerlat1.png"/> </Div>

    <!-- Página central Main -->
<Div class="main">
<?php
    include("config.php");

    /* Switch estabelecendo condições */
    switch($_REQUEST["acao"]){
    case 'cadastrar':
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
echo "<script>alert ('".$msg."'); location.href='login.php';</script>";
    
        
        break;
    case "editar":

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
       
        

        $sql = "UPDATE tb_usuario SET 
                nome='{$nome}',
                usuario='{$usuario}',
                email='{$email}',
                senha='{$senha},
            
                
                WHERE
                    id=".$id;
                
                

        $res = $conexao->query($sql);

        if($res==true){
            print "<script>alert('Usuário editado com sucesso');</script>";
            print "<script>location.href='UserEdit.php';</script>";
        }else  {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
    case "excluir":

        $sql = "DELETE FROM tb_usuario WHERE id=".$_REQUEST["id"];

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
?>





    
   

</Div>

  <!--Coluna da Direita-->

<Div class="menu">
 <img class="bannerlat" src="img/bannerlat1.png">
   </div>

   <footer>
    <!-- Rodapé-->
    <div style="background-color:#ffffff;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> <span
            id="data"></span>

        <!-- Exibe a data atual-->
        <script language=javascript type="text/javascript">
            now = new Date
            var mes = now.getMonth();
            switch (mes) {// Array sempre inicia com 0
                case 9: mes = "Outubro";
                    break;
                case 10: mes = "Novembro";
                    break;
                case 11: mes = "Dezembro";
                    break;
                    
            }
    // faz a saída com os parâmetros da data diretamente na linha que o scripr é executado
            document.write("Hoje é "+ now.getDate() + " de " + mes + " de " + now.getFullYear())
        </script> - Criado por Matheus Martins <a href="https://github.com/lucasrm1981/" target="_blank">Git Hub</a>
    </div>
 
</footer>

</div>















    

       
                      

          


</body>
</html>