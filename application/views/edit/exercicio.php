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
						<h2 style="text-align: left; margin-left: 2%; font-size: 16pt; font-family: Segoe UI; color: #707070">Cadastro de Exercício</h2>
					</div>
					
				</div>
				<div class="row">
					<div style="padding: 1%">
						<form action="<?=base_url()?>Exercicios/salvar" name="form_add" method="post">
							<div class="row">
								<div class="form-group col-md-8">
									<label for="nome">Nome</label>
									<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $exercicios->Nom_Exe; ?>">
								</div>
								<div class="form-group col-md-4">
									<label for="categoria">Categoria</label>
									<select name="categoria" class="form-control" required>
	                                    <option value="0">...</option>
	                                    <?php foreach ($cat_exercicios as $cat_exercicio) { ?>
		                                    <option value="<?= $cat_exercicio->Cod_Cate ?>"><?= $cat_exercicio->Sig_Cate ?></option>
		                                <?php } ?>
	                                </select>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<textarea name="descricao"><?php echo $exercicios->Desc_Exe; ?></textarea>
					                <script>
					                        CKEDITOR.replace( 'descricao' );
					                </script>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label for="resp_correta">Resposta Correta</label>
									<input type="text" class="form-control" name="resp_correta" value="<?php echo $exercicios->RespC_Exe; ?>" placeholder="Resposta Correta">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="op_1">Alternativa 1</label>
									<input type="text" class="form-control" name="Op_1" value="<?php echo $exercicios->Op1_Exe; ?>" placeholder="Alternativa 1">
									<label for="op_2">Alternativa 2</label>
									<input type="text" class="form-control" name="Op_2" value="<?php echo $exercicios->Op2_Exe; ?>" placeholder="Alternativa 2">
									<label for="op_3">Alternativa 3</label>
									<input type="text" class="form-control" name="Op_3" value="<?php echo $exercicios->Op3_Exe; ?>" placeholder="Alternativa 3">
								</div>
								<div class="form-group col-md-6">
									<label for="op_1">Alternativa 1</label> 
									<input type="text" class="form-control" name="Op_4" value="<?php echo $exercicios->Op4_Exe; ?>" placeholder="Alternativa 1">
									<label for="op_2">Alternativa 2</label>
									<input type="text" class="form-control" name="Op_5" value="<?php echo $exercicios->Op5_Exe; ?>" placeholder="Alternativa 2">
									<label for="op_3">Alternativa 3</label>
									<input type="text" class="form-control" name="Op_6" value="<?php echo $exercicios->Op6_Exe; ?>" placeholder="Alternativa 3">
								</div> 	 
							</div>
							<input type="hidden" name="id" value="<?php echo $exercicios->Cod_Exe; ?>">

							<button style="float: right; margin-right: 2%" type="submit" class="btn btn-success">Salvar Edição</button>
							<a href="<?=base_url()?>exercicios" style="float: right; margin-right: 1%" type="button" class="btn btn-primary">Voltar</a>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
