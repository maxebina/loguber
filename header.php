<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $your_meta_description ?>" />
    <title>LOGUBER - <?php echo $thisPage ?></title>

    <link href="css/nosass.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">

    <link rel="icon" href="img/favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <!-- Navbar Starts -->
        <header id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Container Starts -->
            <div class="secondary-menu">
                <ul>
                    <li<?php if ($thisPage=="Transportantado para todos") echo " id=\"currentpage\""; ?>>
                        <a href="index">Home</a>
                    </li>
                    <li<?php if ($thisPage=="Responsabilidade Social") echo " id=\"currentpage\""; ?>>
                        <a href="responsabilidade-social">Responsabilidade Social</a>
                    </li>
                    <li<?php if ($thisPage=="Trabalhe Conosco") echo " id=\"currentpage\""; ?>>
                        <a href="trabalhe-conosco">Trabalhe Conosco</a>
                    </li>
                </ul>
            </div>
            <div class="main-menu">
                <!-- Navbar Header Starts -->
                <ul class="social-menu">
                    <li><a href=""><span class="fa fa-facebook-square fa-lg"></span></a></li>
                    <li><a href=""><span class="fa fa-linkedin-square fa-lg"></span></a></li>
                </ul>
                <div class="navbar-header">
                    <!-- Collapse Button Starts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collapse Button Ends -->
                    <!-- Logo Starts -->
                    <a href="index" class="navbar-brand">
                        <img class="img-responsive" src="img/logo-loguber.png" alt="Logo LOGUBER">
                    </a>
                    <!-- Logo Ends -->
                </div>
                <!-- Navbar Header Ends -->
                <!-- Navbar Collapse Starts -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li<?php if ($thisPage=="LOGUBER") echo " id=\"currentpage\""; ?>>
    				        <a href="loguber">Loguber</a>
    				    </li>
                        <li<?php if ($thisPage=="Serviços") echo " id=\"currentpage\""; ?>>
    				        <a href="servicos">Serviços</a>
    				    </li>
                        <li<?php if ($thisPage=="Rastreamento") echo " id=\"currentpage\""; ?>>
                            <a href="rastreamento">Rastreamento</a>
                        </li>
                        <li<?php if ($thisPage=="Tecnologia") echo " id=\"currentpage\""; ?> class="dropdown">
                            <a href="tecnologia">Tecnologia</a>
                        </li>
                        
                        <li<?php if ($thisPage=="Franquia") echo " id=\"currentpage\""; ?> class="dropdown">
                            <a href="franquia">Franquia</a>
                        </li>
                        <li<?php if ($thisPage=="Notícias") echo " id=\"currentpage\""; ?> class="dropdown">
                            <a href="noticias">Notícias</a>
                        </li>
                        <li<?php if ($thisPage=="Motoristas") echo " id=\"currentpage\""; ?> class="dropdown">
                            <a href="motoristas">Motoristas
                        </li>

                        <li<?php if ($thisPage=="Contato") echo " id=\"currentpage\""; ?>>
    				        <a href="contato" class="pr-0">Contato</a>
    				    </li>
                    </ul>
                </div>
                <!-- Navbar Collapse Ends -->
            </div>
            <!-- Container Ends -->
        </header>
        <!-- Navbar Ends -->