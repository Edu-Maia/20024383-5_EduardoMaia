<?php 
	include "dados/array.php";	
	$id 	= 	$_GET['id'];
	$nova_array =  $produtos[$id];
?>
<body style="background-color:#FDDFD3;">	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-lg-12 ">	
			<div class="col-md-12 col-lg-12">
				<div class="card bg-faded">
					<div class="container-fluid"><br>
								<p>
								<img class="img-fluid rounded" src="images/<?php print_r ($nova_array['img']);?>" width="50%" heigth="50%" align="left" style="padding:10px">
								<br>
								<h2><font color="#442413"><b><?php print_r ($nova_array['produto']);?></b></font></h2>             								
								
									<font color="#442413"><b>Descrição:</b></font><br>
									<?php print_r ($nova_array['descricao']);?>
									<br>
									<br>
									
									<font color="#442413"><b>Por R$:&nbsp;<?php print_r ($nova_array['valor']);?></b></font><br></font>
									<br>
									<form target="pagseguro" action="" method="post">
										<button type="submit" class="btn btn-secondary btn-block">
											<span class="fas fa-shopping-cart"></span>
											<font size="4"><b><i>&nbsp;&nbsp;Comprar com</i></b></font>
											<img src="https://files.readme.io/554b477-branco2_copy.png">
										</button>
									</form>
								</p>																														
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>