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
									<input type="text" class="form-control" name="nome" placeholder="Nome">
								</div>
								<div class="form-group col-md-4">
									<label for="categoria">Categoria</label>
									<select name="categoria" class="form-control">
	                                    <option value="">...</option>
	                                    <?php foreach ($cat_exercicios as $cat_exercicio) { ?>
		                                    <option value="<?= $cat_exercicio->Cod_Cate ?>"><?= $cat_exercicio->Sig_Cate ?></option>
		                                <?php } ?>
	                                </select>
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-md-12">
									<label for="descricao">Descrição</label>
									<textarea name="descricao"></textarea>
					                <script>
					                        CKEDITOR.replace( 'descricao' );
					                </script>
								</div>
							</div>
							<?php if($flag == 0){ ?>
								<div class="row">
									<div class="form-group col-md-12">
										<label for="resp_correta">Resposta Correta</label>
										<input type="text" class="form-control" name="resp_correta" placeholder="Resposta Correta">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="op_1">Alternativa 1</label>
										<input type="text" class="form-control" name="Op_1" placeholder="Alternativa 1">
										<label for="op_2">Alternativa 2</label>
										<input type="text" class="form-control" name="Op_2" placeholder="Alternativa 2">
										<label for="op_3">Alternativa 3</label>
										<input type="text" class="form-control" name="Op_3" placeholder="Alternativa 3">
									</div>
									<div class="form-group col-md-6">
										<label for="op_1">Alternativa 1</label>
										<input type="text" class="form-control" name="Op_4" placeholder="Alternativa 1">
										<label for="op_2">Alternativa 2</label>
										<input type="text" class="form-control" name="Op_5" placeholder="Alternativa 2">
										<label for="op_3">Alternativa 3</label>
										<input type="text" class="form-control" name="Op_6" placeholder="Alternativa 3">
									</div>
									<input type="hidden" name="Dis_Exe" value="0" > 	 
								</div>
							<?php } else{
								echo '<input type="hidden" name="Dis_Exe" value="1" >'; 
							 }?>
							<button style="float: right; margin-right: 2%" type="submit" class="btn btn-success">Cadastrar</button>
							<a href="<?=base_url()?>exercicios" style="float: right; margin-right: 1%" type="button" class="btn btn-primary">Voltar</a>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
