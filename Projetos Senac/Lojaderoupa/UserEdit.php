<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet</title>
    <style>
   * {
       box-sizing: border-box;
    }
    </style>
</head>
<body>

<header> <img class="bannersup" src="img/banner7.webp"> </header>

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
<h2>Menu de Usuário</h2>


 <a href="novo-usuario.php">       <img  src="img/newusersuit.png"> </a> 
<a href="listar-usuarios.php">    <img src="img/editusersuit.png"> </a>

<br>

<div id="carouselExampleAutoplaying" class="carousel slide w-auto" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner6.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/banner8.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/banner9.jpg" class="d-block w-100" alt="...">
          </div>
<div>

  <div> </div>

</div>



        
       </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     






<!--<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner4.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner6.webp" class="d-block w-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->








</Div>
  <!-- Coluna da Direita-->
<Div class="menu">
 <img class="bannerlat" src="img/bannerlat1.png">
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














    

       
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>                    

          


</body>
</html>