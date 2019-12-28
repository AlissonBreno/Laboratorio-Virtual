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
					<h2 style="text-align: left; margin-left: 2%; font-size: 16pt; font-family: Segoe UI; color: #707070">Acesso rápido:</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div style="background-color: #E4E4E4" class="well">
							<h3 style="text-align: center;margin-top: -4%; font-family: Segoe UI; color: #707070">Ossos</h3>
							<h2 style="text-align: center; font-family: Segoe UI; color: #2E720D">Escápula</h2>
							<a href="#"><h5 style="text-align: center; margin-top: 8%; font-family: Segoe UI; color: #707070">Saiba Mais</h5></a>
						</div>
					</div>
					<div class="col-md-6">
						<div style="background-color: #E4E4E4" class="well">
							<h3 style="text-align: center;margin-top: -4%; font-family: Segoe UI; color: #707070">Rank 1</h3>
							<h2 style="text-align: center; font-family: Segoe UI; color: #2E720D">Alisson Breno</h2>
							<a href="#"><h5 style="text-align: center;margin-top: 8%; font-family: Segoe UI; color: #707070">Saiba Mais</h5></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div style="background-color: #E4E4E4" class="well">
							<h3 style="text-align: center;margin-top: -1%; font-family: Segoe UI; color: #707070">Exercícios mais resolvidos</h3>
							<div style="padding: 1%"> 
							    <table class="table" style="font-size: 12pt ;font-family: Segoe UI; color: #707070">
							        <thead>
							            <tr>
							                <th>Problema</th>
							                <th>Categoria</th>
							                <th>Acertos</th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td>Nomeação de Ossos</td>
							                <td>Sistema Ósseo Bovino</td>
							                <td>13</td>
							            </tr> 
							            <tr>
							                <td>Escápula</td>
							                <td>Sistema Ósseo Bovino</td>
							                <td>3</td>
							            </tr>
							            <tr>
							                <td>Exercício em Construção</td>
							                <td>Sistema Ósseo Bovino</td>
							                <td>0</td>
							            </tr>  
							        </tbody>
							    </table>
							</div>
							<a href="<?=base_url()?>padrao/problemas">
								<h5 style="text-align: center;margin-top: -1%; font-family: Segoe UI; color: #2E720D">Ver todos</h5>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
