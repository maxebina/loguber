	<?php $thisPage="Rastreamento"; ?>
    <?php $your_meta_description="Descrição aqui"; ?>
	<?php include("header.php"); ?>
		<div class="page">
    		<div class="banner-page banner-loguber">
    			<h1>RASTREAMENTO</h1>
    		</div>

    		<section id=rastr>
                <div class="row">
                    <div class="col-md-4">
                        <h2>
                            <a onclick="
                                document.getElementById('RastreDestinatario').style.display='';
                                document.getElementById('RastreRemetente').style.display='none';
                                document.getElementById('RastrePagador').style.display='none';

                                document.getElementById('iFramePagador').style.display='none';
                                document.getElementById('iFrameDestinatario').style.display='none';
                                document.getElementById('iFrameRemetente').style.display='none';
                                " class="btn-rastr BtRastreamentoDestinatario active">
                                Destino
                            </a>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <h2>
                            <a onclick="
                            document.getElementById('RastreDestinatario').style.display='none';
                            document.getElementById('RastreRemetente').style.display='';
                            document.getElementById('RastrePagador').style.display='none';

                            document.getElementById('iFramePagador').style.display='none';
                            document.getElementById('iFrameDestinatario').style.display='none';
                            document.getElementById('iFrameRemetente').style.display='none';
                            " class="btn-rastr BtRastreamentoRemetente">
                                Remetente
                            </a>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <h2>
                            <a onclick="
                            document.getElementById('RastreDestinatario').style.display='none';
                            document.getElementById('RastreRemetente').style.display='none';
                            document.getElementById('RastrePagador').style.display='';

                            document.getElementById('iFramePagador').style.display='none';
                            document.getElementById('iFrameDestinatario').style.display='none';
                            document.getElementById('iFrameRemetente').style.display='none';
                            " class="btn-rastr BtRastreamentoPagador">
                                Pagador
                            </a>
                        </h2>
                    </div>
                </div>
                
                <div class="BgFormRastreamento" id="RastreDestinatario">
                    <div class="Clear_Both"></div>
                    <p>
                        Para CNPJ (só números) informe a SENHA que deve ser obtida com a transportadora.
                    </p>
                    <p>
                        Para CPF a SENHA não é necessária. As informações ficam disponíveis até 30 dias após entrega no destinatário.
                    </p>
                    <div class="Clear_Both"></div>

                    <!--<form action="http://www.ssw.inf.br/ssw_resultSSW_dest.asp" method="post" name="Form1" target="iFrameDes" class="fonte04" id="Form1">-->
                        <form name="form3" action="http://www.ssw.inf.br/2/ssw_resultSSW_dest" method="POST" target="iFrameDes">

                            <div class="NomeCampoRastreamento">CNPJ - CPF / Destinatário</div>
                            <input name="cnpjdest" type="text" class="Campo_Formulario_Rastreio" id="cnpjdest" value="" maxlength="14">
                            <div class="Clear_Both"></div>

                            <div class="NomeCampoRastreamento">Senha</div>
                            <input name="senha" type="password" class="Campo_Formulario_Rastreio" id="senha" value="">
                            <div class="Clear_Both mb-20"></div>

                            <input value="Localizar" type="button" class="BtLocalizar btn btn-primary" onclick="Vai2_DEST();
                            document.getElementById('iFrameDestinatario').style.display='';
                            document.getElementById('iFrameRemetente').style.display='none';
                            document.getElementById('iFramePagador').style.display='none';
                            ">
                            <input type="hidden" name="urlori" value="http://www.ssw.inf.br/ajuda/rastreamentodest.html">
                            <input type="hidden" name="sigla_emp" value="FAV">
                        </form>

                    </div>

                    <div class="BgFormRastreamento" id="RastreRemetente" style="display: none;">
                        <div class="Clear_Both"></div>
                        <p>
                            Entre com Notas Fiscais e o CNPJ/CPF (só números) do remetente da carga a ser rastreada.
                        </p>
                        <p>
                            Deve ser informada uma Nota Fiscal por linha. As informações ficam disponíveis até 30 dias após entrega no destinatário.
                        </p>
                        <form action="http://www.ssw.inf.br/ssw_resultSSW.asp" method="POST" name="Form1_REMETENTE" target="iFrameRem" class="fonte04">

                            <div class="NomeCampoRastreamento">Notas fiscais</div>
                            <textarea name="NR" cols="40" class="Campo_Formulario_Rastreio" rows="4"></textarea>
                            <div class="Clear_Both"></div>

                            <div class="NomeCampoRastreamento">CNPJ - CPF / Remetente</div>
                            <input name="cnpj" type="text" class="Campo_Formulario_Rastreio" value="" size="40" maxlength="14">
                            <div class="Clear_Both mb-20"></div>

                            <input value="Localizar" type="button" class="BtLocalizar btn btn-primary" onclick="javascript:Vai1_REMETENTE();
                            document.getElementById('iFrameRemetente').style.display='';
                            document.getElementById('iFrameDestinatario').style.display='none';
                            document.getElementById('iFramePagador').style.display='none';
                            ">

                            <input type="hidden" name="urlori" value="http://www.ssw.inf.br/ajuda/rastreamento.html">
                            <input type="hidden" name="sigla_emp" value="FAV">

                        </form>

                    </div>

                    <div class="BgFormRastreamento" id="RastrePagador" style="display: none;">
                        <div class="Clear_Both"></div>
                        <p>Entre com o CNPJ/CPF (só números) do remetente da carga a ser rastreada e informe sua senha.</p>



                        <!--<form action="http://www.ssw.inf.br/2/resultSSW_pag" method="POST" name="Form1" target="iFramePag" class="fonte04">-->
                            <form name="form2" action="http://www.ssw.inf.br/ssw_resultSSW_pag.asp" method="POST" target="iFramePag">

                                <div class="NomeCampoRastreamento">CNPJ - CPF / Remetente</div>
                                <!--<input name="cnpjpag" type="text" id="cnpjpag" value="" size="40" maxlength="14" />-->
                                <input type="text" maxlength="14" name="cnpjpag" value="" class="Campo_Formulario_Rastreio">
                                <div class="Clear_Both"></div>

                                <div class="NomeCampoRastreamento">Senha</div>
                                <!--<input name="senha" type="password" class="Campo_Formulario_Rastreio" id="senha" value="" size="40" maxlength="14" />-->
                                <input type="password" maxlength="8" name="senha" value="" class="Campo_Formulario_Rastreio">
                                <div class="Clear_Both mb-20"></div>

                                <input type="button" value="Localizar" class="BtLocalizar btn btn-primary" onclick="javascript:Vai2();
                                document.getElementById('iFramePagador').style.display='';
                                document.getElementById('iFrameDestinatario').style.display='none';
                                document.getElementById('iFrameRemetente').style.display='none';
                                ">

                                <input type="hidden" name="sigla_emp" value="FAV">
                            </form>

                        </div>


                <div id="iFrameDestinatario" style="margin-top: 30px; display: none;">
                    <iframe name="iFrameDes" id="iFrameDes" src="http://www.ssw.inf.br/ssw_resultSSW_dest.asp" frameborder="0" style="overflow:auto; width:1000px; height:400px;" allowtransparency="true" scrolling="no"></iframe>
                </div>

                <div id="iFrameRemetente" style="display:none; margin-top:30px;">
                    <iframe name="iFrameRem" id="iFrameRem" src="http://www.ssw.inf.br/resultSSW.asp" frameborder="0" style="overflow:auto; width:1000px; height:400px;" allowtransparency="true"></iframe>
                </div>

                <div id="iFramePagador" style="display:none; margin-top:30px;">
                    <iframe name="iFramePag" id="iFramePag" src="http://www.ssw.inf.br/2/resultSSW_pag" frameborder="0" style="overflow-y:hidden; overflow-x:auto; width:1000px; height:400px;" allowtransparency="true"></iframe>
                </div>

    		</section>
	    </div>
        <style type="text/css">
            #iframe-holder {
                width:1000px;
                margin:auto;
                overflow:hidden;
            }
            #iframe-holder iframe {
                width:1000px;
                height:400px;
                margin:-130px 0 0 0px;
            }


            #iframe-holder2 {
                width:1000px;
                margin:auto;
                overflow:hidden;
            }
            #iframe-holder2 iframe {
                width:1000px;
                height:400px;
                margin:-10px 0 0 0px;
            }
        </style>
        <script language="JavaScript">
            function Limpar2_DEST()
            {
                document.form3.reset();
                document.form3.cnpjdest.focus();
            }

            function Vai2_DEST()
            {
                if (document.form3.cnpjdest.value == "")
                {
                    alert("Informe o CNPJ do destinatário.");
                    return;
                }
                if ((document.form3.cnpjdest.value.length > 11) && (document.form3.senha.value == ""))
                {
                    alert("Informe a Senha.");
                    return;
                }
                document.form3.submit();
            }
            function Limpar1_REMETENTE() {
                document.Form1_REMETENTE.reset();
                document.Form1_REMETENTE.NR.focus();
            }

            function Vai1_REMETENTE() {
                if (document.Form1_REMETENTE.cnpj.value == "") {
                    alert("Informe o CNPJ do remetente.");
                    return;
                }
                if (document.Form1_REMETENTE.NR.value == "") {
                    alert("Informe pelo menos uma Nota Fiscal.");
                    return;
                }
                document.Form1_REMETENTE.submit();
            }

            function Limpar2() {
                document.form2.reset();
                document.form2.cnpjpag.focus();
            }

            function Vai2() {
                if (document.form2.cnpjpag.value == "") {
                    alert("Informe o CNPJ do pagador");
                    return;
                }

                if ((document.form2.cnpjpag.value.length > 11) && (document.form2.senha.value == "")) {
                    alert("Informe a Senha.");
                    return;
                }

                document.form2.submit();

            }

        </script>
        <?php include("footer.php"); ?>