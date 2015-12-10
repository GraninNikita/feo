
<!DOCTYPE html>
    <!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>Информационный сайт г. Феодосия</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/normalize.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/templatemo_misc.css">
        <link rel="stylesheet" href="../css/templatemo_style.css">

        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <a href="/">
                            <div id="templatemo_logo">
                            </div> <!-- /.logo -->
                        </a>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                                <li><a href="#news">Новости</a></li>
                                <li><a href="#products">Предприятия</a></li>
                                <li><a href="#jek">МУП ЖКХ</a></li>
                                <li><a href="#complaints">Отзывы</a></li>
                                <li><a href="#contact">Контакты</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                    <div class="col-md-8 col-sm-6 col-xs-8 text-right" id="authButtons">
                        @if(!Auth::check())
                            <a href="auth/login">Войти/</a>
                            <a href="auth/register">Регистрация</a>
                        @else
                            {{ Auth::user()->name}}
                            <a href="admin" style="color:red;">Админ/</a>
                            <a href="auth/logout">Выйти</a>

                        @endif

                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#news">Новости</a></li>
                                    <li><a href="#products">Предприятия</a></li>
                                    <li><a href="#jek">МУП ЖКХ</a></li>
                                    <li><a href="#complaints">Отзывы</a></li>
                                    <li><a href="#contact">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    <div class="site-slider">
        <ul class="bxslider">
            <li>
                <img src="../images/photos/1.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Феодосия - «Богом данная».</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="../images/photos/2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Основана в VI веке до н. э.</h2>
                    </div>
                </div>
            </li>
            <li>
                <img src="../images/photos/3.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Город воинской славы</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="../images/photos/4.jpg" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Самый красивый город</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
    </div> <!-- /.site-slider -->

    <div class='row'>


        <h3 class="text-center">{{ $news->header }}</h3>

        {{--<div class="col-sm-10">--}}
            <div class="detail_news">
                <p>{!! $news->text !!}</p>
            </div>
        {{--</div>--}}
        <p class='small text-center'>{{ $news->created_at }}</p>
        <h2 class="text-center"><a href="/">Вернуться на главную</a></h2>
    </div>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <span>
                    	Copyright &copy; 2015 <a href="#">Granin N.A.</a>
                        <!--
                        | Design: <a rel="nofollow" href="http://www.templatemo.com/tm-401-sprint" target="_parent">Sprint</a>
                        -->
                    </span>

                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-6">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->


    <script src="../js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="../js/jquery.easing-1.3.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <!-- templatemo 401 sprint -->
    </body>
    </html>