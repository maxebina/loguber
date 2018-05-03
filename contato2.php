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
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name.." class="field-required">

                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" placeholder="Your last name.." class="field-required">

                            <label for="country">Country</label>
                            <select id="country" name="country" class="field-required">
                                <option value="">---</option>
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                                <option value="vn">Vietnam</option>
                            </select>

                            <label for="ypicture">Your picture</label>
                            <input type="file" id="ypicture" name="ypicture" placeholder="Your picture.." class="field-required image-file-validation">

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." class="field-required"></textarea>

                            <input type="submit" value="Submit" name="submit" class="submit" id="submit">
                            <img src="/images/loading.gif" class="loading" />
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
                text: 'This text field is required',
                textarea: 'This textarea is required',
                select: 'Select an option',
                file: 'Select a file',
                image: 'Image invalid (Accepting format .gif .png .jpg .jpeg)'
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
                    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
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
                padding: 12px;
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
            .submit {
                margin-top: 10px;
            }
            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                width: 1170px;
                margin: 0 auto;
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
            .loading {
                width: 16px;
                padding-left: 15px;
                display: none;
            }
            #contact-form .disabled {
                color: white;
                background: gray;
            }
            @media(max-width: 1169px) {
                .container {
                    width: 80%;
                }
            }
        </style>