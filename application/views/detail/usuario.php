	<div class="container">
		<div class="col-md-3">
			<div class="well" style="background-color: #EFEFEF">
				<div class="row">
					<img style="border-radius:90%;width:200px;margin-left: 15%;margin-right: 15%;margin-bottom: 3%" src="<?=base_url()?>media/imagens/user.jpg">
					<h3 style="text-align: center; font-family: Segoe UI; color: #707070; margin-bottom: -6%"><?php echo $usuarios->Nom_Usu.' '.$usuarios->Sob_Usu ?><h3>
					<h4 style="text-align: center; font-family: Segoe UI; color: #707070"> 
						<?php 
							if($usuarios->Tip_Usu == 0){ 
								echo 'Administrador';
							}else if($usuarios->Tip_Usu == 1){
								echo 'Aluno';
							}else if($usuarios->Tip_Usu == 2){
								echo 'Professor';
							}else if($usuarios->Tip_Usu == 3){
								echo 'Monitor';
							}
						?>
					</h4>
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-left: 20%; font-family: Segoe UI; color: #707070">Ranking</h4>
						</div>
						<div class="col-md-6">
							<!-- AQUI A TRETA VAI ACONTECER -->
							<h4 style="margin-right: 20%; text-align: right;font-family: Segoe UI; color: #707070">
								<?php echo $usuarios->Rank_Usu.'º'?>
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-left: 20%; font-family: Segoe UI; color: #707070">Acertos</h4>
						</div>
						<div class="col-md-6">
							<h4 style="margin-right: 27%; text-align: right;font-family: Segoe UI; color: #707070"><?php echo $usuarios->Acer_Usu; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-left: 20%; font-family: Segoe UI; color: #707070">Tetativas</h4>
						</div>
						<div class="col-md-6">
							<h4 style="margin-right: 27%; text-align: right;font-family: Segoe UI; color: #707070"><?php echo $usuarios->Tent_Usu; ?></h4>
						</div>
					</div>
					<br>
					<div class="row">
						<a href="#">
							<button type="button" class="botao_barra_usuario1">Ranking Geral</button>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="well" style="background-color: #EFEFEF">
				<div style="overflow: auto; width: 100%; height: 526px;padding: 1%">
					<a href="<?=base_url()?>usuarios" style="margin-right: 1%" type="button" class="btn btn-primary">Voltar</a> 
				    <table class="table table-hover" style="width:750px">
				        <thead>
				            <tr>
				                <th>Problema</th>
				                <th>Categoria</th>
				                <th>Data Conclusão</th>
				            </tr>
				        </thead>
				        <tbody>
				        	     
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</div>
</body>
