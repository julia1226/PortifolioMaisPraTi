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
<div class="caixa1">
<h2 class="menutext1"><a href="index.php">Menu Principal</a></h2>
</div>


    
</div>

<div style="overflow:auto">

    <!-- Coluna da Esqueda-->   
<Div class="menu"> <img class="bannerlat" src="img/bannerlat1.png"/> </Div>

    <!-- Página central Main -->
<Div class="main">
<h1> Novo Usuário <h1>
<h3> </h3>

<form action="salvar-usuario.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Nome Pessoal</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome de Usuário</label>
        <input type="text" name="usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-Mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit" >Enviar</button>
    </div>
</form>





    
   

</Div>
  <!-- Coluna da Direita-->
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