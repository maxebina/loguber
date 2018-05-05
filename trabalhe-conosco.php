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
                            <a href="https://www.linkedin.com/company/loguber/" target="_blank">
                                <i class="fa fa-linkedin-square fa-5x"></i>
                            </a>
                        </div>                        
                    </div>
                </div>
                
            </section>
        </div>
    <?php include("footer.php"); ?>