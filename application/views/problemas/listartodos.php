<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="box-shadow: 0px 3px 6px #C2C2C2;background-color: #FBFBFB">
	<div style="margin-left: 2% ">
		<h2 style="font-family: Segoe UI; color: #2E720D">Listar <strong style="font-family: Segoe UI">Todos</strong></h2>
		<hr style="border: 1px solid green; margin-right: 2%; margin-top: -0.5%">
		<ol class="breadcrumb" style="margin-right: 2%">
			<li><a href="<?=base_url()?>padrao/problemas">Problemas</a></li>
			<li class="active" style="background-color: #f5f5f5">Listar Todos</li>
		</ol>

		<div style="margin-right: 2%">
			<div style="overflow: auto; height: 826px; margin-bottom: 2%"> 
				<table class="table table-hover">
					<thead>
					    <tr style="background-color: #C2C2C2">
						    <th scope="col">n°</th>
						    <th scope="col" style="color: transparent;">°</th>
						    <th scope="col">Problema</th>
						    <th scope="col">Assunto</th>
						    <th scope="col">Autor</th>
						    <th scope="col">Envios</th>
					    </tr>
					</thead>
					<tbody>
						<?php foreach ($exercicios as $exercicio): ?>
					    	<tr>
						    	<td><?= $exercicio->Cod_Exe ?></td>
						    	<td><?php foreach ($eresolvidos as $eresolvido): ?>
				                	<?php if($exercicio->Cod_Exe == $eresolvido->Cod_Exe && $eresolvido->Alu_ER == $this->session->userdata('codigo')){ ?>
				                		<?php if($eresolvido->Sta_ER == 0){ ?>
				                			<span class="glyphicon glyphicon-remove" title="Tente novamente." style="color: #FF594D;"></span>
				                		<?php }else if($eresolvido->Sta_ER == 1){ ?>
				                			<span class="glyphicon glyphicon-ok" title="Correto" style="color: green;"></span>
				                		<?php }else if($eresolvido->Sta_ER == 2){ ?>
				                			<span class="glyphicon glyphicon-exclamation-sign" title="Aguarde a avaliação." style="color: #FFD44D;"></span>
				                		<?php } ?>	
				                	<?php } ?>
				                <?php endforeach ?></td>
							    <td><a href="<?=base_url()?>problemas/exercicio/<?= $exercicio->Cod_Exe?>" style="text-decoration: none; color: inherit;"><?= $exercicio->Nom_Exe ?><a href=""></td>
							    <?php if($exercicio->Ass_Exe == 1){ ?>
					                <td>Sistema Ósseo Bovino</td>
					            <?php } ?>
					            <?php foreach ($usuarios as $usuario): ?>
				                	<?php if($exercicio->Aut_Exe == $usuario->Cod_Usu){ ?>
				                		<td><?= $usuario->Nom_Usu ?></td>
				                	<?php } ?>
				                <?php endforeach ?>
							    <td><?= $exercicio->Env_Exe ?></td>
						    </tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>