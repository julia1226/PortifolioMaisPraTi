<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	       
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>          
<link rel="stylesheet" href="Estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/flame-outline.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>

<section class="h-100 gradient-form" style="background-color: black">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo1.avif"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nós somos a Dark Sports</h4>
                </div>

                <form method="POST" action="valida.php">
				<div class="alerta"><?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

                  <p>Por favor, faça login com a sua conta.</p>

                  <div class="form-outline mb-4">
                    <input type="text" name="usuario" id="form2Example11" class="form-control" />
                    <label class="form-label" for="form2Example11">Nome de Usuário</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="senha" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Senha</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">

                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="btnLogin" value="Acessar">Entrar</button>

                    <a class="text-muted" href="#!">Esqueceu a senha?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Não possui uma conta?</p>
                   <a href="novo-usuario.php"> <button type="button" class="btn btn-outline-danger">Cadastre-se</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	







	
	
</body>
</html>