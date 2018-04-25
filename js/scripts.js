// Tecnologia
$(document).ready(function () {
    $( "#btn1" ).click(function() {
        $("#img").attr("src", "img/tec-comprovantes.png");
   });
   $( "#btn2" ).click(function() {
        $("#img").attr("src", "img/tec-tec-da-inf.png");
   });
   $( "#btn3" ).click(function() {
        $("#img").attr("src", "img/tec-interacao.png");
   });
   $( "#btn4" ).click(function() {
        $("#img").attr("src", "img/tec-emissao-cte.png");
   });
   $( "#btn5" ).click(function() {
        $("#img").attr("src", "img/tec-satelite-caminhao.png");
   });
});

// Change Value
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

// Animated Header
$(function(){
  var shrinkHeader = 75;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
    if ( scroll >= shrinkHeader ) {
      $('header').addClass('shrink');
    }
    else {
      $('header').removeClass('shrink');
    }
  });
  function getCurrentScroll() {
    return window.pageYOffset;
  }
});

// Franquia
$(function() {
    $('#panel-motorista').click(function(e) {
        $("#tab-motorista").delay(100).fadeIn(100);
        $("#tab-vendedor").fadeOut(100);
        $('.panel-shadow').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#panel-vendedor').click(function(e) {
        $("#tab-vendedor").delay(100).fadeIn(100);
        $("#tab-motorista").fadeOut(100);
        $('.panel-shadow').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});