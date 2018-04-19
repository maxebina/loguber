$('#uf-rn').click(function(){
    $('#form_estado').val('Rio Grande do Norte');
    $('#uf').text('Rio Grande do Norte');
});

$('#uf-pe').click(function(){
    $('#form_estado').val('Pernambuco');
    $('#uf').text('Pernambuco');
});

$('#uf-ce').click(function(){
    $('#form_estado').val('Ceará');
    $('#uf').text('Ceará');
});

$('#uf-pb').click(function(){
    $('#form_estado').val('Paraíba');
    $('#uf').text('Paraíba');
});

$('#uf-al').click(function(){
    $('#form_estado').val('Alagoas');
    $('#uf').text('Alagoas');
});

$('#uf-pi').click(function(){
    $('#form_estado').val('Piauí');
    $('#uf').text('Piauí');
});

$('#uf-ma').click(function(){
    $('#form_estado').val('Maranhão');
    $('#uf').text('Maranhão');
});

$('#uf-df').click(function(){
    $('#form_estado').val('Distrito Federal');
    $('#uf').text('Distrito Federal');
});

$('#uf-to').click(function(){
    $('#form_estado').val('Cotação para o estado de Tocantins');
    $('#uf').text('Cotação para o estado de Tocantins');
});

$('#uf-se').click(function(){
    $('#form_estado').val('Sergipe');
    $('#uf').text('Sergipe');
});

$('#uf-ba').click(function(){
    $('#form_estado').val('Bahia');
    $('#uf').text('Bahia');
});

$('#uf-go').click(function(){
    $('#form_estado').val('Goiás');
    $('#uf').text('Goiás');
});

$('#uf-es').click(function(){
    $('#form_estado').val('Espírito Santo');
    $('#uf').text('Espírito Santo');
});

$('#uf-mg').click(function(){
    $('#form_estado').val('Minas Gerais');
    $('#uf').text('Minas Gerais');
});

$('#uf-rj').click(function(){
    $('#form_estado').val('Rio de Janeiro');
    $('#uf').text('Rio de Janeiro');
});

$('#uf-sp').click(function(){
    $('#form_estado').val('São Paulo');
    $('#uf').text('São Paulo');
});

$('#uf-pr').click(function(){
    $('#form_estado').val('Paraná');
    $('#uf').text('Paraná');
});

$('#uf-sc').click(function(){
    $('#form_estado').val('Santa Catarina');
    $('#uf').text('Santa Catarina');
});

$('#uf-rs').click(function(){
    $('#form_estado').val('Rio Grande do Sul');
    $('#uf').text('Rio Grande do Sul');
});

$('#modal-estados').on('hidden.bs.modal', function() {
	$(this).find('form')[0].reset();
});