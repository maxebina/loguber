    <?php $thisPage="Transportantado para todos"; ?>
    <?php $your_meta_description="Descrição aqui"; ?>
    <?php include("header.php"); ?>
	
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="thumbnail">                        
                    <div class="carousel-caption">
                        <h2>LOGUBER</h2>                            
                        <p>Uma empresa constituída para atender uma nova forma de gestão em transportes de cargas no mercado.</p>
                        <a href="loguber" class="btn btn-primary float-right" role="button">Saiba mais <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <img src="img/slide-loguber-loguber.jpg" alt="Slide LOGUBER">
                </div>
            </div>
            <div class="item">
                <div class="thumbnail">
                    <div class="carousel-caption">
                        <div class="poly">
                            <h2>Tecnologia</h2>
                            <p>As soluções tecnológicas, que a Loguber gestão em transportes disponibiliza aos seus clientes, garantem integração com todo o processo.</p>
                            <a href="tecnologia" class="btn btn-primary float-right" role="button">Saiba mais <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <img src="img/slide-loguber-tecnologia.jpg" alt="Slide Tecnologia">
                </div>
            </div>
            <div class="item">
                <div class="thumbnail">
                    <div class="carousel-caption">
                        <div class="poly">
                            <h2>Franquia</h2>
                            <p>Entenda o modelo de franquia para motoristas e vendedores.</p>
                            <a href="franquia" class="btn btn-primary float-right" role="button">Saiba mais <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <img src="img/slide-loguber-franquia.jpg" alt="Slide Franquia">
                </div>
            </div>
        </div><!-- End Carousel Inner -->
        <div class="carousel-controls">
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div><!-- /.carousel -->

    <div class="newsletter-section">
        <h3>NEWSLETTER</h3>
        <p>
            Receba nossas novidades por e-mail
        </p>
        <div class="row">
            <form action="">
                <div class="col-md-3 col-md-offset-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="#" class="btn btn-primary" role="button">Assinar <i class="fa fa-arrow-right"></i></a>
                </div>
            </form>
        </div>
    </div>

    <div class="acompanhe-carga-section">
        <h3>ACOMPANHE SUA CARGA</h3>
        <p>
            Localize sua carga em tempo real
        </p>
        <a href="rastreamento" class="btn btn-primary" role="button">Rastrear <i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="featured-section">
        <div class="row">
            <div class="col-md-6">
                <a href="motoristas">
                    <div class="featured-motoristas">
                        <span></span>
                        <h4>MOTORISTAS</h4>
                        <p>Entenda como trabalhamos com os nossos motoristas</p>
                        <div class="row-featured-btn">
                            <button class="btn">Saiba mais</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="noticias">
                    <div class="featured-noticias">
                        <span></span>
                        <h4>NOTÍCIAS</h4>
                        <p>Tudo sobre o mundo da logística, transporte e cargas</p>
                        <div class="row-featured-btn">
                            <button class="btn">Leia todas</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>