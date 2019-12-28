
	<div class="container" style="box-shadow: 0px 3px 6px #C2C2C2;background-color: #FBFBFB">
		<div style="margin-left: 2%">
			<h2 style="font-family: Segoe UI; color: #2E720D">Categorias <img style="margin-top: -1.5%" src="<?=base_url()?>media/imagens/lupa_cat.png" ></h2>
			<hr style="border: 1px solid green; margin-right: 2%; margin-top: -0.5%">
		</div>
		<div style="margin-left: 0.6%; margin-top: -0.6%">
			<?php if($this->session->flashdata('mensagem')){ ?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#myModal').modal('show');
					});
				</script>
				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"></button>
				        <h4 class="modal-title"><?php echo $this->session->flashdata('mensagem'); ?></h4>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				      </div>
				    </div>
				  </div>
				</div>
			<?php } ?>
			<div class="col-md-4">
				<a href="<?=base_url()?>problemas/sistema_osseo_Bovino">
					<div class="caixaPro" style="box-shadow: 0px 3px 6px #C2C2C2;">
						<div style="margin-top: 1%" class="col-md-4">
							<img src="<?=base_url()?>media/imagens/bs.png">
						</div>
						<div class="col-md-1">
							<div class="barrinha" ></div>
						</div>
						<div class="col-md-6" style="margin-top: 5%; color: #666666">
							<h4 style="font-family: Segoe UI">Sistema ósseo</h4>
							<h4 style="font-family: Segoe UI"><strong>Bovino</strong></h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4" style="margin-left: -0.35%">
				<a href="<?=base_url()?>problemas/listar_todos">
					<div class="caixaPro" style="box-shadow: 0px 3px 6px #C2C2C2;">
						<div style="margin-top: 2.5%" class="col-md-4">
							<img src="<?=base_url()?>media/imagens/pt.png">
						</div>
						<div class="col-md-1">
							<div class="barrinha" ></div>
						</div>
						<div class="col-md-6" style="margin-top: 5%; color: #666666">
							<h4 style="font-family: Segoe UI">Listar</h4>
							<h4 style="font-family: Segoe UI"><strong>Todos</strong></h4>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>