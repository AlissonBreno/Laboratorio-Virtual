<div class="container" style="box-shadow: 0px 3px 6px #C2C2C2;background-color: #FBFBFB;">
	<div style="margin-left: 2%; margin-bottom: 5% ">
		<ol class="breadcrumb" style="margin-right: 2%; margin-top: 1%">
			<li><a href="<?=base_url()?>padrao/problemas">Problemas</a></li>
			<li><a href="<?=base_url()?>problemas/listar_todos">Listar Todos</a></li>
			<li class="active" style="background-color: #f5f5f5"><?php echo $exercicios->Nom_Exe ?></li>
		</ol>
		<h2 style="font-family: Segoe UI; color: #2E720D; text-align: center"><?php echo $exercicios->Nom_Exe ?></h2>
		<hr style="border: 1px solid green; margin-right: 2%; margin-top: -0.5%">
		<?php foreach ($usuarios as $usuario): ?>
			<?php if($exercicios->Aut_Exe == $usuario->Cod_Usu){ ?>
				<h4 style="font-family: Segoe UI; color: #666666;margin-top: -1%; text-align: center"><?php echo $usuario->Nom_Usu ?></h4>
			<?php } ?>
		<?php endforeach ?>
		<div style="margin-left: 2%;font-size: 11.5pt;margin-right: 4%;text-align: justify; margin-bottom: 5%; color: #707070;margin-top: 3%">
			<?php echo $exercicios->Des_Exe ?>
		</div>

		<h4 style="margin-left: 2%;font-family: Segoe UI; color: #2E720D;">Responda:</h4>

		<form style="margin-left: 1%; font-family: Segoe UI; color: #707070" action="<?=base_url()?>problemas/enviar_resposta_Diss" name="form_add" method="post">
			<div class="form-row" >
			    <div class="form-group col-md-12">
			      	<textarea name="resposta" id="enunciado"></textarea>
			      	<script>
	                    CKEDITOR.replace( 'enunciado' );
	                </script>
			    </div>
			</div>
			<hr style="border: 1px solid green; margin-right: 2%; margin-top: -0.5%">
			<input type="hidden" name="id" value="<?php echo $exercicios->Cod_Exe ?>">
			<input type="hidden" name="env" value="<?php echo $exercicios->Env_Exe ?>">
			<input type="hidden" name="nome" value="<?php echo $exercicios->Nom_Exe ?>">
			<input type="hidden" name="assunto" value="<?php echo $exercicios->Ass_Exe ?>">
			<input type="hidden" name="tentativas" value="<?php echo $campos->Tent_Usu ?>">
			<button style="margin-left: 2%" type="submit" class="btn btn-success btn-lg">Enviar</button>
			<a href="<?=base_url()?>problemas/listar_todos" title="Voltar" class="btn btn-primary btn-lg">Voltar</a>
		</form>
	</div>
</div>