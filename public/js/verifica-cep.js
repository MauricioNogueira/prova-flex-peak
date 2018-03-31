function verificaCep(){
	var cep = $('#cep').val();

	if(cep.length == 8){
		$.ajax({
			url: 'http://api.postmon.com.br/v1/cep/'+cep,
			type: 'get',
			dataType: 'json',

			beforeSend : function(){
				alert("Buscando CEP, aguarde...");
			},

			success : function(dados){
				desabilitaCampos(dados);
			},

			error : function(dados){
				alert("CEP não encontrado ou inválido");
			}
		});
	}
}

function desabilitaCampos(cep){
	$('#logradouro').removeAttr('disabled', true);
	$('#numero').removeAttr('disabled', true);
	$('#bairro').removeAttr('disabled', true);
	$('#cidade').removeAttr('disabled', true);
	$('#estado').removeAttr('disabled', true);

	$('#logradouro').val(cep.logradouro);
	$('#bairro').val(cep.bairro);
	$('#cidade').val(cep.cidade);
	$('#estado').val(cep.estado_info.nome);
}