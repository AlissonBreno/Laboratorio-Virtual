	<div class="container">
		<div class="col-md-3">
			<div class="well" style="background-color: #EFEFEF; height: 570px">
				<?php 
					$this->load->view('includes/dashboard_lateral');
				?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="well" style="background-color: #EFEFEF; height: 570px">
				<div class="row">
					<div class="col-md-12" style="float:left;">
						<h2 style="text-align: left; margin-left: 2%; font-size: 16pt; font-family: Segoe UI; color: #707070">Lista de Exercícios a corrigir</h2>
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
                                <th scope="col" style="text-align:left;t">Tipo</th>
                                <th scope="col" style="text-align:left;t">Status</th>
                                <th scope="col" style="text-align:center">Avaliar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($exercicios as $exercicio) { ?>
                                	<tr>
                                		<td><?= $exercicio->Cod_Exe ?></td>
                                		<td id="titulo_<?php echo $exercicio->Cod_Exe; ?>"><?= $exercicio->Nom_Exe ?></td>
                                        <?php foreach ($cat_exercicios as $cat_exercicio) { ?>
                                		    <?php if($exercicio->Cat_Exe == $cat_exercicio->Cod_Cate){ ?>  
                                                <td><?= $cat_exercicio->Sig_Cate ?></td>
                                            <?php } ?>
                                		<?php } 
                                        if($exercicio->Dis_Exe == 1){?>
                                            <td>Dissertativo</td>
                                		<?php }else{ ?>
                                            <td>Múltipla Escolha</td>
                                        <?php } ?>
                                        <td>
                                            <?php if($exercicio->Status_Exe == 0){ ?>
                                                <span class="label label-warning">Em Análise</span>
                                            <?php } 
                                            else if($exercicio->Status_Exe == 1){?>
                                                <span class="label label-success">Ativo</span>
                                            <?php } 
                                            else if($exercicio->Status_Exe == 2){ ?>
                                                <span class="label label-danger">Inativo</span>
                                            <?php } ?>    
                                        </td>
                                		<td style="text-align:center">
                                            <a  onclick="analise('<?php echo $exercicio->Cod_Exe; ?>')" title="Analisar Resposta" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                                        </td>
                                        <input type="hidden" id="descricao_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Desc_Exe ?>"/>
                                        <input type="hidden" id="RespC_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->RespC_Exe ?>">
                                        <input type="hidden" id="Op1_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Op1_Exe ?>">
                                        <input type="hidden" id="Op2_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Op2_Exe ?>">
                                        <input type="hidden" id="Op3_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Op3_Exe ?>">
                                        <input type="hidden" id="Op4_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Op4_Exe ?>">
                                        <input type="hidden" id="Op5_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Op5_Exe ?>">
                                        <input type="hidden" id="Op6_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Op6_Exe ?>">
                                        <input type="hidden" id="Dis_<?php echo $exercicio->Cod_Exe; ?>" value="<?php echo $exercicio->Dis_Exe ?>">
                                	</tr>
                                <?php }  ?>                            	
                            </tbody>
                        </table>
                    </div>
				</div>

			</div>
		</div>
	</div>
<script src="<?=base_url()?>assets/js/exercicio.js"></script>
