    <?php $thisPage="Trabalhe Conosco"; ?>
    <?php $your_meta_keywords="LOGUBER, Trabalhe conosco, Parte, Nosso, Time, Colaboradores, Parceiros, Interesse, Contato, Formulário, Currículo, Oportunidades, Profissionais, Fique por dentro, Linkedin"; ?>
    <?php $your_meta_description="Faça parte do nosso time - Investimos em nossos colaboradores e parceiros"; ?>
    <?php include("header.php"); ?>
        <div class="page">
            <div class="banner-page banner-trabalhe">
                <h1>TRABALHE CONOSCO</h1>
            </div>
            <div class="dark-blue-strip">
                <i class="fa fa-briefcase"></i>
                <h2>
                    Investimos em nossos colaboradores e parceiros
                </h2>
            </div>
            <section>
                <div class="row">
                    <div class="col-md-7">

                        <div class="panel-tc">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel-shadow active" id="panel-1">
                                        <a href="">
                                            <h3>
                                                FAÇA PARTE DO NOSSO TIME
                                            </h3>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel-shadow" id="panel-2">
                                        <a href="">
                                            <h3>
                                                CADASTRO DE MOTORISTA AUTÔNOMO
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab-2">
                            <form method="POST" id="contact-form-1" enctype="multipart/form-data" onsubmit="return submitContactContent1();">
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
                                        <label for="subject">Mensagem *</label>
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

                        <div id="tab-1">
                            <form id="contact-form" method="post" action="contact.php" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nome *</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Preencha o seu nome *" required="required" data-error="Nome é um campo obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Preencha o seu email *" required="required" data-error="Preencha com um email válido.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_telefone">Telefone *</label>
                                            <input id="form_telefone" type="text" name="telefone" class="form-control" placeholder="Preencha o seu telefone *" required="required" data-error="Telefone é um campo obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_endereco">Endereço *</label>
                                            <input id="form_endereco" type="endereco" name="endereco" class="form-control" placeholder="Preencha o Endereço *" required="required" data-error="Preencha o Endereço.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="form-group">

                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                                        Check yourself
                                        </label>
                                        <label>
                                        <input type="checkbox" id="terms2" data-error="Before you wreck yourself" required>
                                        Check yourself
                                        </label>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>                        

                    </div>
                    <div class="col-md-5">
                        <div class="panel-shadow tc-panel">
                            <h5>
                                Fique por dentro de todas as oportunidades e dicas profissionais da <div class="duas-cores">LOG<span>UBER<span></div>. 
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