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
   $( "#btn6" ).click(function() {
        $("#img").attr("src", "img/tec-emissao-nfe.png");
   });
});

// Change Value
$('#uf-rn').click(function(){
    $('#form_assunto').val('Rio Grande do Norte');
    $('#uf').text('Rio Grande do Norte');
});

$('#uf-pe').click(function(){
    $('#form_assunto').val('Pernambuco');
    $('#uf').text('Pernambuco');
});

$('#uf-ce').click(function(){
    $('#form_assunto').val('Ceará');
    $('#uf').text('Ceará');
});

$('#uf-pb').click(function(){
    $('#form_assunto').val('Paraíba');
    $('#uf').text('Paraíba');
});

$('#uf-al').click(function(){
    $('#form_assunto').val('Alagoas');
    $('#uf').text('Alagoas');
});

$('#uf-pi').click(function(){
    $('#form_assunto').val('Piauí');
    $('#uf').text('Piauí');
});

$('#uf-ma').click(function(){
    $('#form_assunto').val('Maranhão');
    $('#uf').text('Maranhão');
});

$('#uf-df').click(function(){
    $('#form_assunto').val('Distrito Federal');
    $('#uf').text('Distrito Federal');
});

$('#uf-to').click(function(){
    $('#form_assunto').val('Cotação para o estado de Tocantins');
    $('#uf').text('Cotação para o estado de Tocantins');
});

$('#uf-se').click(function(){
    $('#form_assunto').val('Sergipe');
    $('#uf').text('Sergipe');
});

$('#uf-ba').click(function(){
    $('#form_assunto').val('Bahia');
    $('#uf').text('Bahia');
});

$('#uf-go').click(function(){
    $('#form_assunto').val('Goiás');
    $('#uf').text('Goiás');
});

$('#uf-es').click(function(){
    $('#form_assunto').val('Espírito Santo');
    $('#uf').text('Espírito Santo');
});

$('#uf-mg').click(function(){
    $('#form_assunto').val('Minas Gerais');
    $('#uf').text('Minas Gerais');
});

$('#uf-rj').click(function(){
    $('#form_assunto').val('Rio de Janeiro');
    $('#uf').text('Rio de Janeiro');
});

$('#uf-sp').click(function(){
    $('#form_assunto').val('São Paulo');
    $('#uf').text('São Paulo');
});

$('#uf-pr').click(function(){
    $('#form_assunto').val('Paraná');
    $('#uf').text('Paraná');
});

$('#uf-sc').click(function(){
    $('#form_assunto').val('Santa Catarina');
    $('#uf').text('Santa Catarina');
});

$('#uf-rs').click(function(){
    $('#form_assunto').val('Rio Grande do Sul');
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
    $('#panel-1').click(function(e) {
        $("#tab-1").delay(100).fadeIn(100);
        $("#tab-2").fadeOut(100);
        $('.panel-shadow').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#panel-2').click(function(e) {
        $("#tab-2").delay(100).fadeIn(100);
        $("#tab-1").fadeOut(100);
        $('.panel-shadow').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});

// Trabalhe conosco
function validateForm(formId) {
    //Messages
    var warnings = {
        text: 'Esse campo é obrigatório',
        textarea: 'Esse campo é obrigatório',
        select: 'Select an option',
        file: 'Esse campo é obrigatório',
        image: 'Arquivo inválido (formatos aceitos: .doc .docx .pdf)'
    };
    //Init
    var validate = true;
    //Remove old warnings
    $("#" + formId + " .required-label").remove();
    $("#" + formId + " .field-required").each(function () {
        var myself = $(this);
        if (myself.prop("type").toLowerCase() === 'file' && myself.val() === '') {
            myself.after('<div class="required-label">' + warnings.file + '</div>');
            validate = false;
        }
        if (myself.prop("type").toLowerCase() === 'text' && myself.val() === '') {
            myself.after('<div class="required-label">' + warnings.text + '</div>');
            validate = false;
        }
        if (myself.prop("type").toLowerCase() === 'textarea' && myself.val() === '') {
            myself.after('<div class="required-label">' + warnings.textarea + '</div>');
            validate = false;
        }
        if (myself.prop("type").toLowerCase() === 'select-one' && myself.val() === '') {
            myself.after('<div class="required-label">' + warnings.select + '</div>');
            validate = false;
        }
    });
    $("#" + formId + " .image-file-validation").each(function () {
        var myself = $(this);
        if (myself.val() != '') {
            var ext = myself.val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['doc', 'docx', 'pdf']) == -1) {
                myself.after('<div class="required-label">' + warnings.image + '</div>');
                validate = false;
            }
        }
    });
    return validate;
}
function submitContactContent1() {
    $('#submit').addClass('disabled');
    $('.message').hide();
    $('#submit').attr('disabled', 'disabled');
    if (validateForm('contact-form-1')) {
        $('.loading').show();
        var formData = new FormData($('#contact-form-1')[0]);
        $.ajax({
            url: 'envia.php',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                $('.message').show();
                if (response.flag == '1') {
                    $('.message').text(response.massage);
                } else {
                    $('.message').html('<span class="error">'+response.massage+'</span>');
                }
                $('.loading').hide();
            }
        });
    } else {
        console.log("The form is invalid !");
    }
    $('#submit').removeClass('disabled');
    $('#submit').removeAttr('disabled');
    return false;
}

function submitContactContent2() {
    $('#submit').addClass('disabled');
    $('.message').hide();
    $('#submit').attr('disabled', 'disabled');
    if (validateForm('contact-form-2')) {
        $('.loading').show();
        var formData = new FormData($('#contact-form-2')[0]);
        $.ajax({
            url: 'envia.php',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                $('.message').show();
                if (response.flag == '1') {
                    $('.message').text(response.massage);
                } else {
                    $('.message').html('<span class="error">'+response.massage+'</span>');
                }
                $('.loading').hide();
            }
        });
    } else {
        console.log("The form is invalid !");
    }
    $('#submit').removeClass('disabled');
    $('#submit').removeAttr('disabled');
    return false;
}


// Adiconar class ativa
$(document).ready(function() {
    $(".btn-rastr").click(function () {
        $(".btn-rastr").removeClass("active");
        $(this).addClass("active");     
    });
});

// File upload validator