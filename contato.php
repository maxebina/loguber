    <?php $thisPage="Contato"; ?>
    <?php $your_meta_description="Descrição aqui"; ?>
    <?php include("header.php"); ?>
    <div class="page">
        <div class="banner-page banner-loguber">
            <h1>CONTATO</h1>
        </div>
		<section>
			<form id="contact-form" method="post" action="contact.php" role="form">

                <div class="messages"></div>

                <div class="controls">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_estado">Assunto *</label>
                                <input id="form_estado" type="text" name="estado" class="form-control" placeholder="Preencha o assunto *" required="required" data-error="Assunto é um campo obrigatório.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Mensagem *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Escreva sua mensagem *" rows="4" required="required" data-error="Mensagem é um campo obrigatório."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Enviar mensagem">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mt-20"><strong>*</strong> Campos obrigatórios.</p>
                        </div>
                    </div>
                </div>

            </form>
		</section>
    </div>
    <?php include("footer.php"); ?>