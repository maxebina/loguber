$('#uf-sp').click(function(){
    $('#form_estado').val('São Paulo');
    $('#uf').text('São Paulo');
});

$('#uf-rs').click(function(){
    $('#form_estado').val('Rio Grande do Sul');
    $('#uf').text('Rio Grande do Sul');
});

$('#modal-estados').on('hidden.bs.modal', function (e) {           
    location.reload();
    $('#modal-estados').show();
})