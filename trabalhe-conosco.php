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

                        <form id="contact-form" method="post" action="contact.php" role="form">

                            <div class="messages"></div>

                            <div class="controls">
                                <div class="dn">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_estado" type="text" name="estado" class="form-control" value="Quero fazer parte da LOGUBER">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="form_name">Nome *</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Preencha o seu nome *" required="required" data-error="Nome é um campo obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Preencha o seu email *" required="required" data-error="Preencha com um email válido.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="form_telefone">Telefone *</label>
                                            <input id="form_telefone" type="text" name="telefone" class="form-control" placeholder="Preencha o seu telefone *" required="required" data-error="Preencha o telefone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group form-group-file">
                                            <label for="form_arquivo">Currículo *</label>
                                            <input type="file" class="form-control" id="form_arquivo" name="arquivo" required data-filesize="5242880" data-filesize-error="Max 5MB" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf" data-error="Somente arquivos word ou pdf são aceito">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="form_message">Mensagem *</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Escreva sua mensagem *" rows="4" required="required" data-error="Mensagem é um campo obrigatório."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input type="submit" class="btn btn-primary btn-send fr" value="Enviar mensagem">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <p class="mt-20 fr"><strong>*</strong> Campos obrigatórios.</p>
                                    </div>
                                </div>
                            </div>

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