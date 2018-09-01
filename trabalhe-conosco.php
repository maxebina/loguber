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

                        <div id="tab-1">
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

                        <div id="tab-2">
                            <form id="contact-form" method="post" action="contact.php" role="form">

                                <div class="messages"></div>
                                
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
                                            <input id="form_telefone" type="text" name="telefone" class="form-control" placeholder="Preencha o seu telefone *" required="required" data-error="Telefone é um campo obrigatório." maxlength="15">
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

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_estado">Estado *</label>
                                            <input id="form_estado" type="text" name="estado" class="form-control" placeholder="Preencha o seu Estado *" required="required" data-error="Estado é um campo obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_cidade">Cidade *</label>
                                            <input id="form_cidade" type="cidade" name="cidade" class="form-control" placeholder="Preencha a cidade *" required="required" data-error="Cidade é um campo obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_regiao">Região Atendida *</label>
                                            <input id="form_regiao" type="text" name="regiao" class="form-control" placeholder="Preencha a Região Atendida *" required="required" data-error="Região Atendida é um campo obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label for="form_funcionarios">Nº de funcionários *</label>

                                            <select name="funcionarios" id="form_funcionarios" class="form-control chosen" data-placeholder="[Nº de funcionários]" data-error="Selecione uma opção" required>
                                                <option value="">Selecione uma opção</option>
                                                <option value="Até 5 funcionários">Até 5 funcionários</option>
                                                <option value="de 5 a 10 funcionários">de 5 a 10 funcionários</option>
                                                <option value="de 10 a 30 funcionários">de 10 a 30 funcionários</option>
                                                <option value="Mais de 30 funcionários">Mais de 30 funcionários</option>
                                                </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <div><strong>Possui Cadastro na ANTT ? *</strong></div>
    
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="antt" id="form_antt" data-error="Escolha uma das duas opções" required>
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="antt" id="form_antt" data-error="Escolha uma das duas opções" required>
                                                    Não
                                                </label>
                                            </div>
                                            <div class="help-block with-errors cb"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div><strong>Informações sobre os veículos</strong></div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="3x4" id="form_veiculos">
                                            3x4
                                        </label>
                                        <label>
                                            <input type="checkbox" name="carreta" id="form_veiculos">
                                            Carreta
                                        </label>
                                        <label>
                                            <input type="checkbox" name="passeio" id="form_veiculos">
                                            Carro de passeio
                                        </label>
                                        <label>
                                            <input type="checkbox" name="fiorino" id="form_veiculos">
                                            Fiorino
                                        </label>
                                        <label>
                                            <input type="checkbox" name="kombi" id="form_veiculos">
                                            Kombi
                                        </label>
                                        <label>
                                            <input type="checkbox" name="moto" id="form_veiculos">
                                            Moto
                                        </label>
                                        <label>
                                            <input type="checkbox" name="toco" id="form_veiculos">
                                            Toco
                                        </label>
                                        <label>
                                            <input type="checkbox" name="truck" id="form_veiculos">
                                            Truck
                                        </label>
                                        <label>
                                            <input type="checkbox" name="vuchr" id="form_veiculos">
                                            VUC HR
                                        </label>
                                        <label>
                                            <input type="checkbox" name="vuciveco" id="form_veiculos">
                                            VUC Iveco
                                        </label>
                                        <label>
                                            <input type="checkbox" name="vuc" id="form_veiculos">
                                            VUC
                                        </label>
                                        <label>
                                            <input type="checkbox" name="van" id="form_veiculos">
                                            Van
                                        </label>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_outros_veiculos">Outros veículos</label>
                                            <textarea id="form_outros_veiculos" name="outros_veiculos" class="form-control" rows="4" ></textarea> 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div><strong>Estou interessado em:</strong></div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ate30" id="form_interesse">
                                            Entrega de pedidos leves (até 30kg)
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="+30" id="form_interesse">
                                            Entrega de pedidos pesados (+30kg)
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="armazenagem" id="form_interesse">
                                            Serviços de armazenagem
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="leveate30" id="form_interesse">
                                            Coleta de pedidos leves (até 30kg)
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pesado+30" id="form_interesse">
                                            Coleta de pedidos pesados (+30kg)
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="transferencias" id="form_interesse">
                                            Transferências e Abastecimento
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="operacoes" id="form_interesse">
                                            Operações Especiais
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-20"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_outras-informacoes">Outras informações</label>
                                            <textarea id="form_outras_informacoes" name="outras_informacoes" class="form-control" rows="4" ></textarea> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary btn-send fr" value="Enviar mensagem">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="mt-20 fr"><strong>*</strong> Campos obrigatórios.</p>
                                    </div>
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