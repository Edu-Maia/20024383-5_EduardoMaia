<?php 
	include "dados/array.php";
?>
<h1 class="text-center"><i>Caseirinho Doces Artesanais</i></h1>

<div class="row">
    <h3 class="text-center mb-3">Conheça nossas delícias..</h3>
    <section>
       <div class="row">
	   <?php foreach($produtos as $item): ?>
			<div class="col-sm-3">
				<div class="card" >
					<a href="?pg=pages/produto.php&id=<?php echo $item['id'];?>" class="text-dark text-decoration-none">
						<img src="images/<?php echo $item['img'];?>" class="img-fluid" alt="Produto">
							<div class="card-body">	
								<p class="card-text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; text-align:center">
									<b><font color="#8B4513"><?php echo mb_strtoupper($item['produto'] , 'UTF-8');?></font></b><br>
									<?php echo $item['descricao'];?>
								</p>
								<b>R$ <?php echo $item['valor'];?></b><br>																							
								<button class="btn btn-sm btn-secondary btn-block mb-2" type="submit">SAIBA MAIS</button>
							</div>
					</a>
				</div>
				<br>
			</div>
        <?php endforeach; ?>
		</div>
    </section>
</div>
