    <?php $thisPage="Trabalhe Conosco"; ?>
    <?php $your_meta_description="Descrição aqui"; ?>
    <?php include("header.php"); ?>
        <div class="page">
            <div class="banner-page banner-trabalhe">
                <h1>TRABALHE CONOSCO</h1>
            </div>
            <div class="dark-blue-strip">
                <i class="fa fa-briefcase"></i>
                <h2>
                    FAÇA PARTE DO NOSSO TIME
                </h2>
                <h3>
                    Investimos em nossos colaboradores e parceiros
                </h3>
            </div>
            <section>
                <div class="row">
                    <div class="col-md-7">
                        <h4 class="tac">
                            Se tiver interesse em fazer parte da LOGUBER preencha o formulário abaixo: 
                        </h4>

                        <form method="POST" id="contact-form" enctype="multipart/form-data" onsubmit="return submitContactContent();">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="fname">Nome *</label>
                                    <input type="text" id="fname" name="firstname" placeholder="Preencha o seu nome *" class="field-required">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="email">E-mail *</label>
                                    <input type="text" id="email" name="email" placeholder="Preencha o seu email *" class="field-required">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="tel">Telefone *</label>
                                    <input type="text" id="tel" name="tel" placeholder="Preencha o seu telefone *" class="field-required">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="ypicture">Currículo *</label>
                                    <input type="file" id="ypicture" name="ypicture" placeholder="Anexe o seu currículo *" class="field-required image-file-validation">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="subject">Assunto *</label>
                                    <textarea id="subject" name="subject" placeholder="Escreva uma mensagem *" class="field-required"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <input type="submit" value="Enviar mensagem" name="submit" class="btn btn-primary btn-send fr" id="submit">
                                </div>
                            </div>

                            <div class="message"></div>
                        </form>

                    </div>
                    <div class="col-md-5">
                        <div class="panel-shadow tc-panel">
                            <h5>
                                Fique por dentro de todas as oportunidades e dicas profissionais da LOGUBER. 
                            </h5>
                            <a href="javascript:void(0)">
                                <i class="fa fa-linkedin-square fa-5x"></i>
                            </a>
                        </div>                        
                    </div>
                </div>
                
            </section>
        </div>
    <?php include("footer.php"); ?>

    <script>
        function validateForm(formId) {
            //Messages
            var warnings = {
                text: 'Esse campo é obrigatório',
                textarea: 'Esse campo é obrigatório',
                select: 'Select an option',
                file: 'Esse campo é obrigatório',
                image: 'Arquivo inválido (formatos aceitos: .doc .pdf)'
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
                    if ($.inArray(ext, ['doc', 'pdf']) == -1) {
                        myself.after('<div class="required-label">' + warnings.image + '</div>');
                        validate = false;
                    }
                }
            });
            return validate;
        }
        function submitContactContent() {
            $('#submit').addClass('disabled');
            $('.message').hide();
            $('#submit').attr('disabled', 'disabled');
            if (validateForm('contact-form')) {
                $('.loading').show();
                var formData = new FormData($('#contact-form')[0]);
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
    </script>
    <style>
            input[type=text], select, textarea {
                width: 100%;
                padding: 7px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                resize: vertical;
            }
            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            label {
                margin-top: 16px;
                display: block;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            textarea {
                height:200px;
            }
            .required-label {
                font-size: 13px;
                color: red;
                margin-top: 5px;
            }
            .message {
                color: green;
                margin-top: 15px;
            }
            .message .error {
                color: red;
            }
        </style>