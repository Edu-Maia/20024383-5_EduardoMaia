<?php   include "conexao.php";

session_start();
		
	if(  isset($_GET['pg'])  ) {
		$pagina = $_GET['pg'];
	} else  {
		$pagina = "pages/home.php";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <title>Caseirinho</title>
</head>
<body>
<!-- NAV FIXED -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FDDFD3;">
  <div class="container">
    <a href="#" class="navbar-brand text-secondary">
      <img src="./images/logo_topo.png" >
    </a>
    <div style="text-align: right;">
    <div id="menu" class="collapse navbar-collapse">
      <ul class="navbar-nav text-light nav-menu">
        <li class="nav-item">
          <a href="?pg=pages/home.php" class="nav-link text-secondary">Home</a>
        </li>
        <li class="nav-item">
          <a href="?pg=pages/sobre.html" class="nav-link text-secondary">Quem Somos</a>
        </li>
        <li class="nav-item">
          <a href="?pg=pages/contato.php" class="nav-link text-secondary">Contato</a>
        </li>
        <li class="nav-item">
          <a href="?pg=pages/localizacao.php" class="nav-link text-secondary">Localização</a>
        </li>		
      </ul>
    </div></div>
  </div>
</nav>		
		
<div id="corpo"><?php include $pagina; ?></div>		
		
		
       
<!-- Start Footer -->
    <footer style="background-color:#FDDFD3;" id="rodape" >
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-secondary border-bottom pb-3 border-dark logo">Caseirinho Doce´s</h2>
                    <ul class="list-unstyled text-secondary footer-link-list">
                        <li>Virso Floresta Doces LTDA</li>
						<li>CNPJ 01.234.567/0008-90</li>
						<li><i class="bi bi-shield-check"></i>  Site Protegido!</li>

                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-secondary border-bottom pb-3 border-dark">Atendimento</h2>
                    <ul class="list-unstyled text-secondary footer-link-list">
						<li>Horário de atendimento:<br>Somente via WhatsApp ou pelo fale conosco.<br>Segunda a Sexta-feira das 9 às 18h.</li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-secondary border-bottom pb-3 border-dark">Privacidade</h2>
                    <ul class="list-unstyled text-seconadary footer-link-list">
						<li><a class="text-secondary text-decoration-none" href="?pg=contato.html"> Fale conosco</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Termos de uso</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Dúvidas frequentes</a></li>
                        <li><a class="text-secondary text-decoration-none" href="#">Política de troca</a></li>
                    </ul>
                </div>
            </div>
        </div>
	
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
					<center>
					<ul class="list-inline footer-icons">
                        <li class="list-inline-item text-center">
                            <a class="text-secondary text-decoration-none" target="_blank" href="#"><i class="bi bi-facebook" style="font-size: 2rem; "></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a class="text-secondary text-decoration-none" target="_blank" href="#"><i class="bi bi-instagram" style="font-size: 2rem; "></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a class="text-secondary text-decoration-none" target="_blank" href="#"><i class="bi bi-youtube" style="font-size: 2rem; "></i></a>
                        </li>
						<li class="list-inline-item text-center">
                            <a class="text-secondary text-decoration-none" target="_blank" href="#" ><i class="bi bi-whatsapp" style="font-size: 2rem; "></i></a>
                        </li>
                    </ul>
					</center>
                        <p class="text-center text-secondary">
							Caseirinho &copy; Copyright 2009 - <?php echo date('Y') ?><br>
                        </p>
						<hr>
						<center><b>ALUNO:</b> EDUARDO MAIA - RA 20024383-5 <b>CURSO: </b>SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</center>
                    </div>
                </div>
            </div>
        </div>

    </footer> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/new_scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		<script src="../ADMIN/assets/vendor/fontawesome5/js/solid.min.js"></script>
		<script src="../ADMIN/assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    </body>
</html>
