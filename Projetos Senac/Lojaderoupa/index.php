
<?php
session_start();
session_destroy();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
        }

        .menuitem {
            padding: 8px;
            margin-top: 7px;
            border-bottom: 1px solid #f1f1f1;
        }

        .main {
            float: left;
            width: 60%;
            padding: 0 20px;
            overflow: hidden;
        }


        @media only screen and (max-width:800px) {

            /* For tablets: */
            .main {
                width: 80%;
                padding: 0;
            }

            .right {
                width: 100%;
            }
        }

        @media only screen and (max-width:500px) {

            /* Para exibição de dispositivos com resolução máxima de 500 pixels */
            .menu,
            .main,
            .right {
                width: 100%;
            }
        }

        .image-text {
            float: left;
            border: transparent thin solid;
            padding: 5px;
            margin: 0px 10px 10px 0;
            max-width: 186px;
        }
    </style>
</head>

<div style="background-color:#000000;padding:15px;">
    <div class="row">
        
    <div class="col-md-6">
     <p class="menusuperior">Não possui uma conta? </p>
    <a class="btn btn-outline-warning" type="button" href="novo-usuario.php">Cadastre-se </a>
    <a class="btn btn-outline-success" type="button" href="Login.php">Login </a>

    <?php
                if(!empty($_SESSION['id'])){
                    echo "Olá ".$_SESSION['nome'].", Bem vindo";
                    echo "<a href='index.php'>Sair</a>";
                }else{
                    $_SESSION['msg'] = "Área restrita";
                   
                }

                ?>



          
        </div>


    </div>  
    
</div>

<header> <img class="bannersup" src="img/banner7.webp"> </header>

<body style="font-family:Verdana;">
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
                    <h2 class="menutext"><a href="Login.php">Login</a></h2>
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
    <div style="overflow:auto">
        <!-- Coluna da Esqueda-->
        <div class="menu">
            <img src="img/bannerlat1.png" class="bannerlat">
        </div>

        <div class="main">

            
            <!-- Página central Main -->
            <h2>Promoções do Dia</h2>
            <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="img/roupa1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Camisa Feminina Morcego</h5>
                    <p class="card-text">R$50,00</p>
                    <p class="card-text"><small class="text-muted">Promoção válida até 00h</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/roupa3.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Camisa Feminina Ursinho</h5>
                    <p class="card-text">R$40,00</p>
                    <p class="card-text"><small class="text-muted">Promoção válida até 00h</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="IMG/roupa4.jfif" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Camisa Feminina BabyMetal</h5>
                    <p class="card-text">R$45,00</p>
                    <p class="card-text"><small class="text-muted">Promoção válida até 00h</small></p>
                  </div>
                </div>
              </div>

              <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="img/sobretudo.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Sobretudo Masculino</h5>
                    <p class="card-text">R$120,00</p>
                    <p class="card-text"><small class="text-muted">Promoção válida até 00h</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/terno2.jfif" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Terno Formal Masculino</h5>
                    <p class="card-text">R$500,00</p>
                    <p class="card-text"><small class="text-muted">Promoção válida até 00h</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/jaqueta1.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Jaqueta de Couro Masculina</h5>
                    <p class="card-text">R$250,00</p>
                    <p class="card-text"><small class="text-muted">Promoção válida até 00h</small></p>
                  </div>
                </div>
              </div>
            
        </div>

        <div class="menu">
            <!-- Coluna da Direita-->
            <img src="img/bannerlat1.png" class="bannerlat">
        </div>
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
</body>

</html>
