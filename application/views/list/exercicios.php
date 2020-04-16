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
						<h2 style="text-align: left; margin-left: 2%; font-size: 16pt; font-family: Segoe UI; color: #707070">Lista de Exercícios</h2>
					</div>
					<div class="col-md-6">
						<a href="<?=base_url()?>Usuarios/cadastrar">
		                    <button type="button" class="btn btn-primary" style="float: right; margin-top: 3.5%"><span class="fa fa-plus"></span>  Novo item</button>
		                </a>
					</div>
				</div>
				<div class="row">
					<?php if($this->session->flashdata('mensagem')){ ?>
	                    <div class="alert alert-success alert-dismissible" role="alert"  style="margin-top: 1%">
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                        <?php echo $this->session->flashdata('mensagem'); ?>
	                    </div>
	                <?php } ?>
	                <?php if($this->session->flashdata('erro')){ ?>
	                    <div class="alert alert-danger alert-dismissible" role="alert"  style="margin-top: 1%">
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                        <?php echo $this->session->flashdata('erro'); ?>
	                    </div>
	                <?php } ?>
				</div>
				<div class="row">
					<div style="overflow: auto; width: 100%; height: 380px;padding: 1%"> 
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="text-align:left;t">Nome</th>
                                <th scope="col" style="text-align:left;t">Categorias</th>
                                <th scope="col" style="text-align:left;t">Submetidos</th>
                                <th scope="col" style="text-align:left;t">Status</th>
                                <th scope="col" style="text-align:center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                            		<td>1</td>
                            		<td>Exercício 1</td>
                            		<td>S.O. Bovino</td>
                            		<td>142</td>
                            		<td><span class="label label-success">Ativo</span></td>
                            		<td style="text-align:center">
                                        <a href="" title="Detalhes" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>						                		</a>
                                        <a href="" title="Editar Cadastro" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a href="" title="Apagar Cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </td>
                            	</tr>
                            	<tr>
                            		<td>2</td>
                            		<td>Exercício 2</td>
                            		<td>S.O. Bovino</td>
                            		<td>0</td>
                            		<td><span class="label label-danger">Inativo</span></td>
                            		<td style="text-align:center">
                                        <a href="" title="Detalhes" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>						                		</a>
                                        <a href="" title="Editar Cadastro" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a href="" title="Apagar Cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </td>
                            	</tr>
                            	<tr>
                            		<td>3</td>
                            		<td>Exercício 3</td>
                            		<td>S.O. Bovino</td>
                            		<td>0</td>
                            		<td><span class="label label-warning">Em Análise</span></td>
                            		<td style="text-align:center">
                                        <a href="" title="Detalhes" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>						                		</a>
                                        <a href="" title="Editar Cadastro" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a href="" title="Apagar Cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </td>
                            	</tr>
                            	
                            </tbody>
                        </table>
                    </div>
				</div>

			</div>
		</div>
	</div>
</body>
