function analise(Cod_Exe){
	var descricao = document.getElementById('descricao_' + Cod_Exe);
	var titulo = document.getElementById('titulo_' + Cod_Exe).innerText;

	var respostaCerta = document.getElementById('RespC_' + Cod_Exe);
	var Dis_Exe = document.getElementById('Dis_' + Cod_Exe);
	var Op1 = document.getElementById('Op1_' + Cod_Exe);
	var Op2 = document.getElementById('Op2_' + Cod_Exe);
	var Op3 = document.getElementById('Op3_' + Cod_Exe);
	var Op4 = document.getElementById('Op4_' + Cod_Exe);
	var Op5 = document.getElementById('Op5_' + Cod_Exe);
	var Op6 = document.getElementById('Op6_' + Cod_Exe);

	console.log(Dis_Exe.value);

	if(Dis_Exe.value == 1){
		$('#respostas').hide();	
	}

	$('#titulo_exercicio').html(titulo);
	$('#descricao_exercicio').html(descricao.value);
	$('#titulo_exercicio1').html(titulo);
	$('#descricao_exercicio1').html(descricao.value);
	$('#resposta_correta').html(respostaCerta.value);
	$('#Op1').html(Op1.value);
	$('#Op2').html(Op2.value);
	$('#Op3').html(Op3.value);
	$('#Op4').html(Op4.value);
	$('#Op5').html(Op5.value);
	$('#Op6').html(Op6.value);

	$('.id').val(Cod_Exe);

	$('#modal_analise').modal('show');
}

function cadastrar_exercicio(){
	$('#modal_cadastro').modal('show');
}