	<?php $thisPage="Tecnologia"; ?>
  <?php $your_meta_description="Descrição aqui"; ?>
	<?php include("header.php"); ?>
		<div class="page">
  		<div class="banner-page banner-tecnologia">
  			<h1>TECNOLOGIA</h1>
  		</div>
  		<section>
        <div class="row">
          <div class="col-md-8">
            <h2>CONHEÇA A TECNOLOGIA QUE A <div class="duas-cores">LOG<span>UBER<span></div> UTILIZA:</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="btn1" value="Click">
                      SISTEMA
                    </a>
                  </h3>

                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p>
                      Operação com o mais moderno e completo Software TMS do país, permitindo o cliente à consultar o status de sua mercadoria a qualquer moemnto.
                    </p>
                    <a href="" class="btn btn-primary fr cb" role="button" data-toggle="modal" data-target="#myModal">
                      Clique aqui para ampliar <i class="fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h3 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="btn2" value="Click">
                      ACOMPANHAMENTO
                    </a>
                  </h3>

                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p>
                      Ocorrências via e-mail - Envio automático de informações de ocorrências com a mercadoria ao cliente, via e-mail, disparados automáticamente.
                    </p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h3 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="btn3" value="Click">
                      RASTREABILIDADE
                    </a>
                  </h3>

                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p>
                      Rastreamento de cargas pela internet - Clientes localizam suas mercadorias em todas as fases do transporte, em tempo real pelo nosso site.
                    </p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h3 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="btn4" value="Click">
                      ACESSO AO SISTEMA
                    </a>
                  </h3>

                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <p>
                      Acesso direto ao sistema - Possiblidade de liberação do acesso ao sistema, proporcionando integração total com a transportadora.
                    </p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h3 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" id="btn5" value="Click">
                      EDI
                    </a>
                  </h3>

                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <p>
                      Troca arquivos EDI (Notas Fiscais, embarcados, ocorrências, pré-faturas, etc.) com qualquer de nossos clientes, via e-mail, FTP ou webservice. O disparo de arquivos, pode ocorrer automaticamente.
                    </p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h3 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" id="btn6" value="Click">
                      ARQUIVOS ELETRÔNICOS
                    </a>
                  </h3>

                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    <p>
                      Possibilidade de importação de arquivos XML de NF-e para geração automática de CTRC e CT-e.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="img-change">
              <img src="img/tec-comprovantes.png" id="img"/>
              <div class="baseboard">
                  <div class="item">
                    <span class="left-t hidden-sm hidden-md hidden-lg"></span>
                    <span class="right-t"></span>
                  </div>
              </div>
            </div>
          </div>
        </div>          
      </section>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Comprovante de Entrega</h3>
          </div>
          <div class="modal-body tac">              
            <img src="img/tec-comprovantes.png"/>
          </div>
        </div>

      </div>
    </div>

	<?php include("footer.php"); ?>