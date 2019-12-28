<?php
$_SESSION['osso']="";
$_SESSION['visao']="";

function teste(){


	if(!empty($_POST)){

		$_SESSION['osso']=$_POST['slct3'];
		$_SESSION['visao']=$_POST['visao'];
	}

}

teste();

?>
	<script type="text/javascript">
		function populate(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "";
			if(s1.value == "Esqueleto_Axial"){
				var optionArray = ["|","cabeca|Cabeça","vertebras_cervicais|Vértebras Cervicais","vertebras_toracicas|Vértebras_Torácicas","vertebras_lombares|Vértebras Lombares","vertebras_coccigeas|Vértebras Coccígeas","costelas|Costelas"];
			}else if(s1.value == "Esqueleto_Apendicular"){
				var optionArray = ["|","membros_toracicos|Membros Torácicos","membros_pelvicos|Membros Pélvicos"];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("Option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}
		}

		function populate2(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "";
			if(s1.value == "cabeca"){
				var optionArray = ["|","cranio|Crânio","mandibula|Mandíbula"];
			}else if(s1.value == "vertebras_cervicais"){
				var optionArray = ["|","atlas|Atlas","axis|Áxis","3_a_7_vertebras_cervicais|3° a 7° vértebras cervicais"];
			}else if(s1.value == "membros_toracicos"){
				var optionArray = ["|","escapula|Escápula","radioeulna|Rádio e Ulna","umero|Úmero","carpo|Carpo","metacarpo|MetaCarpo","falange_proximal|Falange Proximal","falange_media|Falange Média","falange_distal|Falange Distal"];
			}else if(s1.value == "membros_pelvicos"){
				var optionArray = ["|","patela|Patela","metatarso|Metatarso","coxal|Coxal","tarso|Tarso","tibiaefibula|Tíbia e Fíbula","femur|Fêmur","falange_proximal|Falange Proximal","falange_media|Falange Média","falange_distal|Falange Distal"];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("Option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}
		}
		function populate3(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "";
			if(s1.value == "escapula"){
				var optionArray = ["|","lateral|Lateral","medial|Medial"];
			}else if(s1.value == "umeroeradio"){
				var optionArray = ["|","lateral|Lateral","medial|Medial","caudal|Caudal","cranial|Cranial"];
			}else if(s1.value == "carpo"){
				var optionArray = ["|","dorsal|Dorsal","lateral|Lateral","palmar|Palmar"];
			}else if(s1.value == "metacarpo"){
				var optionArray = ["|","dorsal|Dorsal","palmar|Palmar"];
			}else if(s1.value == "radioeulna"){
				var optionArray = ["|","caudal|Caudal","cranial|Cranial","lateral|Lateral","medial|Medial"];
			}else if(s1.value == "umero"){
				var optionArray = ["|","caudal|Caudal","cranial|Cranial","lateral|Lateral","medial|Medial"];
			}else if(s1.value == "falange_distal"){
				var optionArray = ["|","abaxial|Abaxial","axial|Axial","solear|Solear"];
			}else if(s1.value == "falange_media"){
				var optionArray = ["|","dorsal|Dorsal","palmar|Palmar"];
			}else if(s1.value == "falange_proximal"){
				var optionArray = ["|","dorsal|Dorsal","palmar|Palmar"];
			}else if(s1.value == "tibiaefibula"){
				var optionArray = ["|","dorsal|Dorsal","caudal|Caudal","cranial|Cranial","lateral|Lateral","medial|Medial"];
			}else if(s1.value == "patela"){
				var optionArray = ["|","caudal|Caudal","cranial|Cranial"];
			}else if(s1.value == "metatarso"){
				var optionArray = ["|","dorsal|Dorsal","plantar|Plantar"];
			}else if(s1.value == "coxal"){
				var optionArray = ["|","dorsal|Dorsal","lateral|Lateral","medial|Medial","ventral|Ventral"];
			}else if(s1.value == "tarso"){
				var optionArray = ["|","dorsal|Dorsal","lateral|Lateral","plantar|Plantar"];
			}else if(s1.value == "femur"){
				var optionArray = ["|","caudal|Caudal","cranial|Cranial","lateral|Lateral","medial|Medial"];
			}

			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("Option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}
		}



	</script>
</head>
<body style="background: url('<?=base_url()?>media/imagens/what-the-hex.png');color: white;">
	<?php
  //include_once "menu_novo.php";
	?>
	<div style="background-color: #555;height: 10px;margin-top: 125px;"></div>
	<div class="container-fluid text-center container_conteudo2">
		<div class="row content">
			<div class="col-md-12s" >

				<p class="Conteudo2">Preencha os campos abaixo adequadamente para encontrar o que deseja:</p>
				<form method="post" action="<?=base_url()?>padrao/ossos" class="form_espaco_cima">
					<div class="row content">
						<div class="col-md-3">              
							<p>Esqueleto:</p>
							<select style="color: black;width: 80%;" class="select_ossos" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
								<option value=""></option>
								<option value="Esqueleto_Axial">Esqueleto_Axial</option>
								<option value="Esqueleto_Apendicular">Esqueleto_Apendicular</option>
							</select>
						</div>
						<div class="col-md-3">
							<p>Região:</p>
							<select style="color: black;width: 80%;" class="select_ossos" id="slct2" name="slct2" onchange="populate2(this.id,'slct3')">
							</select>
						</div>
						<div class="col-md-3">
							<p>Osso:</p>
							<select style="color: black;width: 80%;" class="select_ossos" id="slct3" name="slct3" onchange="populate3(this.id,'visao')"></select>
						</div>
						<div class="col-md-3">
							<p>Vista:</p>
							<select style="color: black;width: 80%;" class="select_ossos" id="visao" name="visao">
								<option value=""></option>
								<option value="Medial">Visão Medial</option>
								<option value="Lateral">Visão Lateral</option>
								<option value="Cranial">Visão Cranial</option>
								<option value="Caudal">Visão Caudal</option>
							</select>
						</div>
					</div>
					<div class="row content" style="margin-top: 25px;">
						<div class="col-md-12">
							<button class="botao_conf_ossos" type="submit">Prosseguir</button>
						</form>
						<br>
						<br>
						<a href="<?=base_url()?>padrao/sair">Voltar</a> | <a href="<?=base_url()?>padrao/cadastrar_osso">Cadastrar</a>
					</div>
				</div>

			</div>

			
			



			<div class="row content">
				<div class="col-md-6 nova_img" > 

					<?php 
					$a =1;
					foreach ($div as $key => $value): ?>

						<?php if ($a==1): ?>
							<img class="img_ossos img-fluid" id="BD" src="<?=base_url()?>media/img_ossos/<?=$value->Oss_Ori_Div?>">
						</div>
						<div class="col-md-5">


							<div class=" container-fluid info_ossos">
								<div class="content row">
									<h4 class="titulo_ossos">
										<?=$value->Oss_Div?> bovina <br/>
										Visão <?=$value->Vis_Div?>
									</h4>
									<div class="opcoes">
										<a imagem="<?=base_url()?>media/img_ossos/<?=$value->Oss_Ori_Div?>" info="" tit="" class="botao">-x- Nenhum -x-</a>
									<br/>
										<?php 
										$a=0;
									endif ?>
									<a imagem="<?=base_url()?>media/img_ossos/<?=$value->Img_Div?>" info="<?=$value->Inf_Div?>" tit="<?=$value->Nom_Div?> (<?=$value->Nom_Cie_Div?>)" class="botao"><?=$value->Nom_Div?></a>
									<br/>



								<?php endforeach ?>
							</div>
							<div style="margin-top:30px;" class="aba_info_ossos">
								<h4 class="titulo">Informações</h4>
								<p class="Conteudo">Selecione um osso para exibir as informações do osso Escolhido</p>
							</div>

						</div>
					</div>



				</div>

			</div>	
		</div>  
	</div>
</div>
</div>
<div style="background-color: #555;height: 10px;margin-bottom: 150px;"></div>
<footer class="container-fluid text-center">
	<p>Laboratório de Anatomia Virtual &#169; 2018 - Todos os direitos reservados ao IFSuldeMinas - Campus Muzambinho</p>
</footer>
</body>
<script type="text/javascript">
	$(".botao").click(function(){
		var img = $( this ).attr( "imagem" );
		var inf = $( this ).attr( "info" );
		var tit = $( this ).attr( "tit" );
		$( ".nova_img" ).html( "<img class='img_ossos img_esp' src='"+img+"'>");
		$( ".Conteudo" ).html( inf );
		$( ".titulo" ).html( tit );
		console.log(img);
	});

</script>


</html>