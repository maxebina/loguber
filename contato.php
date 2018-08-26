    <?php $thisPage="Contato"; ?>
    <?php $your_meta_keywords="LOGUBER, Contato, Transportando para todos, Cargas, Tecnologia, Franquia, Rastreamento, Motoristas, Notícias, Empresa, Atender, Gestão, Transportes, Vendedores, Frete, Localize, Logística, Notícias, Serviços, Novidades"; ?>
    <?php $your_meta_description="Entre em contato com a LOGUBER"; ?>
    <?php include("header.php"); ?>
    <div class="page">
        <div class="banner-page banner-contato">
            <h1>CONTATO</h1>
        </div>        
        <section>
            <h2>ENTRE EM CONTATO COM A <div class="duas-cores">LOG<span>UBER<span></div></h2>
        </section>
        <div class="blue-strip contato">
    		<section>
    			<form id="contact-form" method="post" action="contact.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    <label for="form_name">Nome *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Preencha o seu nome *" required="required" data-error="Nome é um campo obrigatório.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Preencha o seu email *" required="required" data-error="Preencha com um email válido.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    <label for="form_telefone">Telefone *</label>
                                    <input id="form_telefone" type="text" name="telefone" class="form-control" placeholder="Preencha o seu telefone *" required="required" data-error="Preencha o telefone" maxlength="15">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="form_estado">Assunto *</label>
                                    <input id="form_estado" type="text" name="estado" class="form-control" placeholder="Preencha o assunto *" required="required" data-error="Assunto é um campo obrigatório.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label for="form_message">Mensagem *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Escreva sua mensagem *" rows="4" required="required" data-error="Mensagem é um campo obrigatório."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="submit" class="btn btn-primary btn-send fr" value="Enviar mensagem">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p class="mt-20 fr"><strong>*</strong> Campos obrigatórios.</p>
                            </div>
                        </div>
                    </div>

                </form>
    		</section>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.198246070766!2d-46.712026084478886!3d-23.525371084700744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8883d4dc039%3A0xde849eed513b3932!2sR.+Bar%C3%A3o+de+Jundia%C3%AD%2C+523+-+Lapa%2C+S%C3%A3o+Paulo+-+SP%2C+05073-010!5e0!3m2!1spt-BR!2sbr!4v1524310767726" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="adress-box tac">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3>LOG<span>UBER</span></h3>
                    <p>
                        Rua Barão de Jundiaí, 523
                        <br>
                        Lapa - São Paulo - SP
                        <br>
                        CEP: 05073-101
                    </p>
                    <p>
                        Tels:
                        <br>
                        11 99013-3541
                        <br>
                        11 99013-4336 | 11 3090-6599
                    </p>
                    <p>
                        comercial@loguber.com.br
                    </p>
                    <p>
                        Em breve mais uma filial em São Paulo.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>