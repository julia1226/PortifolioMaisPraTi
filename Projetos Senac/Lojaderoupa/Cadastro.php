<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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

<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$username = $_POST['username'];
$nickname = $_POST['nickname'];
$complement = $_POST ['complement'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$email = $_POST['email'];
$emailrec = $_POST['emailrec'];
$birthday = $_POST['birthday'];
$naturalcity = $_POST['naturalcity'];
$naturaldistrict = $_POST['naturaldistrict'];
$CPF = $_POST['CPF'];
$RG = $_POST['RG'];
$RGdate = $_POST['RGdate'];
$Street = $_POST['Street'];
$Streetnumber = $_POST['Streetnumber'];
$district = $_POST['district'];
$city = $_POST['city'];
$CEP = $_POST['CEP'];
$password = $_POST['password'];
$job = $_POST['job'];
$schooling = $_POST['schooling'];
$civilstate = $_POST['civilstate'];
$height = $_POST['height'];
$weight = $_POST['weight'];


;

$result = mysqli_query($conexao, "INSERT INTO user( CPF,username,nickname,tel1,tel2,email,emailrec,birthday,naturalcity,naturaldistrict,RG,RGdate,Street,Streetnumber,complement,district,city,CEP,password,job, schooling,civilstate,height,weight) values('$CPF','$username','$nickname','$tel1','$tel2','$email','$emailrec','$birthday','$naturalcity','$naturaldistrict','$RG','$RGdate','$Street','$Streetnumber','$complement','$district','$city','$CEP','$password','$job','$schooling','$civilstate','$height','$weight')");

}

?>

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
                    <h2 class="menutext"><a href="Cadastro.php">Cadastro</a></h2>
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
<h1>Criação de conta</h1>
<h3>Junte-se à nossa comunidade!</h2>
    <form action="Cadastro.php" method="POST">

 <!-- Input de Emails-->
 
 <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="nameCliente">Email e Recuperação</span>
    </div>
<input type="email" class="form-control" placeholder="Email Primário" name="email">
<input type="email" class="form-control" placeholder="Email de Recuperação" name="emailrec">
    </div>

    <br>

           
    <!-- Input de Nome Duplo-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">Identificação:</span>
        </div>
<input type="text" class="form-control" placeholder="Digite seu Nome" name="username">
<input type="text" class="form-control" placeholder="Digite seu Nome de Usuário" name="nickname">
        </div>



         <!-- Input de Senha-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">Senha:</span>
        </div>
<input type="password" class="form-control" placeholder="Digite sua senha" name="password">

        </div>




<br>
        <!--Input Telefones-->
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">Telefones de Contato:</span>
        </div>
<input type="text" class="form-control" placeholder="Fixo" name="tel1">
<input type="text" class="form-control" placeholder="Celular" name="tel2">
        </div>

        <br>
        <!-- Input de Endereço-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">Endereço</span>
        </div>
<input type="text" class="form-control" placeholder="Rua" name="Street">
<input type="number" class="form-control" placeholder="Número" name="Streetnumber">
<input type="text" class="form-control" placeholder="Complemento" name="complement">
<input type="text" class="form-control" placeholder="Bairro" name="district">
<input type="text" class="form-control" placeholder="Cidade" name="city">
<input type="number" class="form-control" placeholder="CEP" name="CEP">
<br>
<input type="text" class="form-control" placeholder="Bairro Nascimento" name="naturaldistrict">
<input type="text" class="form-control" placeholder="Cidade Nascimento" name="naturalcity">
        </div>

       

<br>
              <!-- Input de CPF-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">CPF:</span>
        </div>
<input type="number" class="form-control" placeholder="Digite seu CPF" name="CPF">

        </div>

             <br>

               <!-- Input de RG-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">RG e data de Emissão:</span>
        </div>
<input type="number" class="form-control" placeholder="Digite seu RG" name="RG">
<input type="date" class="form-control" placeholder="Data de Emissão" id="rgdate" name="RGdate">
        </div>

             

                    <!-- Input de Nascimento-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">Data de Nascimento</span>
        </div>
<input type="date" class="form-control" placeholder="Digite sua data de Nascimento" name="birthday">

        </div>

                   <br>

                           <!-- Input Informações pessoais-->
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nameCliente">Informações Pessoais:</span>
        </div>
<input type="text" class="form-control" placeholder="Profissão" name="job">
<input type="float" class="form-control" placeholder="Altura em Metros" name="height">
<input type="float" class="form-control" placeholder="Peso em KG" name="weight">

        </div>

                  

             <!-- Input de  Escolaridade-->
             <div class="input-group mb-0">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="assuntoCliente">Escolaridade</label>
                </div>
                <select class="custom-select" id="schooling" name="schooling" >
                  <option selected>Selecione...</option>
                  <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                  <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                  <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                  <option value="Ensino Médio Completo">Ensino Médio Completo</option>
                  <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                  <option value="Ensino Superior Completo">Ensino Superior Completo</option>
                </select>
              </div>

                <!-- Input de Estado Civil-->
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text"  for="assuntoCliente">Estado Civil</label>
                </div>
                <select class="custom-select" id="civilstate" name="civilstate">
                  <option selected>Selecione...</option>
                  <option value="Solteiro">Solteiro</option>
                  <option value="União Estável">União Estável</option>
                  <option value="Casado">Casado</option>
                  <option value="Divorciado">Divorciado</option>
                 
                </select>
              </div>
              
 



            

   <!-- Input Checkbox-->
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Marque para confirmar</label>
            </div>

  

               <!-- Botão Enviar-->
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
           
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