	<div class="container">
		<div class="col-md-3">
			<div class="well" style="background-color: #EFEFEF">
				<div class="row">
					<img style="border-radius:90%;width:200px;margin-left: 15%;margin-right: 15%;margin-bottom: 3%" src="<?=base_url()?>media/imagens/user.jpg">
					<h3 style="text-align: center; font-family: Segoe UI; color: #707070"><?php echo $this->session->userdata('nome').' '.$this->session->userdata('sobrenome'); ?><h3>
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-left: 20%; font-family: Segoe UI; color: #707070">Ranking</h4>
						</div>
						<div class="col-md-6">
							<!-- AQUI A TRETA VAI ACONTECER -->
							<h4 style="margin-right: 20%; text-align: right;font-family: Segoe UI; color: #707070">
								<?php foreach ($usuarios as $usuario): ?>
									
									<?php if($usuario->Cod_Usu != $this->session->userdata('codigo')){ ?>
										<?php next($usuarios) ?>
																		
									<?php }else{ ?>
										<?php $val = key($usuarios) + 1; ?>
										<?php echo $val.'º'; ?>
									<?php } ?>
								<?php endforeach ?>
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-left: 20%; font-family: Segoe UI; color: #707070">Acertos</h4>
						</div>
						<div class="col-md-6">
							<h4 style="margin-right: 27%; text-align: right;font-family: Segoe UI; color: #707070"><?php echo $campos->Acer_Usu; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-left: 20%; font-family: Segoe UI; color: #707070">Tetativas</h4>
						</div>
						<div class="col-md-6">
							<h4 style="margin-right: 27%; text-align: right;font-family: Segoe UI; color: #707070"><?php echo $campos->Tent_Usu; ?></h4>
						</div>
					</div>
					<br>
					<div class="row">
						<a href="#">
							<button type="button" class="botao_barra_usuario1">Ranking Geral</button>
						</a>
						<a href="#">
							<button type="button" class="botao_barra_usuario2">Trocar Senha</button>
						</a>
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="well" style="background-color: #EFEFEF">
				<div style="overflow: auto; width: 100%; height: 526px;padding: 1%"> 
				    <table class="table table-hover" style="width:750px">
				        <thead>
				            <tr>
				                <th>Problema</th>
				                <th>Categoria</th>
				                <th>Data Conclusão</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach ($tbl_exer_res as $exercicio):  ?>
				            <tr>
			            	<?php 
			            		$cod = $this->session->userdata('codigo');
			            		if($cod == $exercicio['Alu_ER'] && $exercicio['Sta_ER'] == 1){ 
			            	?>
				                <td><a href="<?=base_url()?>problemas/exercicio/<?= $exercicio['Cod_Exe'] ?>" style="text-decoration: none; color: inherit;" title="Ver <?= $exercicio['Nom_ER'] ?>"><?= $exercicio['Nom_ER'] ?><a href=""></td>
				                <td><?= $exercicio['Cat_ER'] ?></td>
				                <td><?= $exercicio['Dat_ER'] ?></td>
				            <?php } ?>
				            </tr>
				            <?php endforeach ?>      
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</div>
</body>
