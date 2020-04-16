<?php $tipo = $this->session->userdata('tipo'); ?>
	<div class="container">
		<div class="col-md-3">
			<div class="well" style="background-color: #EFEFEF; height: 570px">
				<?php 
					$this->load->view('includes/dashboard_lateral');
				?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="well" style="background-color: #EFEFEF">
				<div class="row">
					<div class="col-md-6" style="float:left;">
						<h2 style="text-align: left; margin-left: 2%; font-size: 16pt; font-family: Segoe UI; color: #707070">Edição de Usuáro</h2>
					</div>
					
				</div>
				<div class="row">
					<div style="padding: 1%">
						<form action="<?=base_url()?>Usuarios/salvar" name="form_add" method="post">
							<div class="form-group col-md-6">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" value="<?php echo $usuarios->Nom_Usu ?>" placeholder="Nome">
							</div>
							<div class="form-group col-md-6">
								<label for="sobrnome">Sobrenome</label>
								<input type="text" class="form-control" name="sobrenome" value="<?php echo $usuarios->Sob_Usu ?>" placeholder="Sobrenome">
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" value="<?php echo $usuarios->Ema_Usu ?>" placeholder="Email">
							</div>
							<div class="form-group col-md-6">
								<label for="senha">Senha (Padrão)</label>
								<?php if($tipo == 0) {?>
									<input type="text" class="form-control" name="senha" value="<?php echo $usuarios->Sen_Usu ?>" placeholder="senha">
								<?php }else{ ?>
									<input disabled type="password" class="form-control" value="******" placeholder="senha">
								<?php } ?>
							</div>
							<div class="form-group col-md-6">
								<label for="categoria">Categoria</label>
								<select name="tipo" class="form-control">
                                    <option value=""></option>
                                    <option value="1">Aluno</option>
                                    <?php if($tipo == 2 || $tipo == 0){ ?>
                                    	<option value="3">Monitor</option>
                                    <?php } ?>
                                    <?php if($tipo == 0){ ?>
                                    	<option value="2">Professor</option>
                                    	<option value="0">Administrador</option>
                                    <?php } ?>
                                </select>
							</div>
							<div class="form-group col-md-2">
								<label for="ranking">Ranking</label>
								<input disabled type="text" class="form-control" value="<?php echo $usuarios->Rank_Usu ?>" placeholder="-">
							</div>
							<div class="form-group col-md-2">
								<label for="exampleInputEmail1">Acertos</label>
								<input disabled type="text" class="form-control" value="<?php echo $usuarios->Acer_Usu ?>" placeholder="0">
							</div>
							<div class="form-group col-md-2">
								<label for="exampleInputEmail1">Tentativas</label>
								<input disabled type="text" class="form-control" value="<?php echo $usuarios->Tent_Usu ?>" placeholder="0">
							</div>
							<input type="hidden" name="id" value="<?php echo $usuarios->Cod_Usu ?>">

							<button style="float: right; margin-right: 2%" type="submit" class="btn btn-success">Editar</button>
							<a href="<?=base_url()?>usuarios" style="float: right; margin-right: 1%" type="button" class="btn btn-primary">Voltar</a>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
