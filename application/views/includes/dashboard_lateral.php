<div class="row">
	<h3 style="text-align: center; font-family: Segoe UI; color: #707070">Painel Administrativo<h3>
	<div class="row">
		<a href="<?=base_url()?>dashboard">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Painel</h4>
		</a>
		
	</div>
	<div class="row">
		<a href="<?=base_url()?>usuarios">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuários</h4>
			
		</a>
	</div>
	<div class="row">
		<a href="<?=base_url()?>exercicios">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Exercícios</h4>
		</a>
	</div>
	<?php $tipo = $this->session->userdata('tipo'); ?>
    <?php if($tipo == 2 || $tipo == 0){ ?>
		<div class="row">
			<a href="<?=base_url()?>aprovacao_exercicios">
				<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Aprovar Exercício</h4>
			</a>
		</div>
	<?php } ?>
	<div class="row">
		<a href="<?=base_url()?>painel/exercicios_corrigir">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070 "><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Correções</h4>
		</a>
	</div>
	<div class="row">
		<a href="#">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Ossos</h4>
		</a>
	</div>
	<div class="row">
		<a href="<?=base_url()?>painel/rankging_geral">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #707070"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Ranking Geral</h4>
		</a>
	</div>
	<hr style="border: 1px solid green; margin-right: 2%;  margin-left: 2%; margin-top: 0.5%; margin-bottom: -1%">
	<div class="row">
		
		<a href="<?=base_url()?>painel/exercicios_corridos">
			<h4 style="margin-left: 13%; font-family: Segoe UI; color: #3F803D"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Exercícios Corrigidos</h4>
		</a>
	</div>
</div>