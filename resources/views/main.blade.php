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

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

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
                    <div id="templatemo_logo">
                        {{--<h1><a href="#">Феодосия</a></h1>--}}
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-6 col-xs-6">
                    <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    <div class="main-menu">
                        <ul>
                            <li><a href="#news">Тест тест</a></li>
                            <li><a href="#products">Предприятия</a></li>
                            <li><a href="#jek">МУП ЖКХ</a></li>
                            <li><a href="#contact">Контакты</a></li>
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-8 col-sm-6 col-xs-8 text-right" id="authButtons">
                    @if(!Auth::check())
                        <a href="auth/login">Войти</a>
                        <a href="auth/register">Регистрация</a>
                    @else
                        {{ Auth::user()->name}}

                    <a href="auth/logout">Выйти</a>
                    <a href="admin" style="color:red;">Админ</a>
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
            <img src="images/photos/1.jpg" alt="slider image 1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="slider-caption">
                            <h2>Богом данная</h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="images/photos/2.jpg" alt="slider image 2">
            <div class="container caption-wrapper">
                <div class="slider-caption">
                    <h2>Новости</h2>
                </div>
            </div>
        </li>
        <li>
            <img src="images/photos/3.jpg" alt="slider image 3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="slider-caption">
                            <h2>Объявления</h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="images/photos/4.jpg" alt="slider image 4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="slider-caption">
                            <h2>Лучшее</h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul> <!-- /.bxslider -->
    {{--<div class="bx-thumbnail-wrapper">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div id="bx-pager">--}}
                        {{--<a data-slide-index="0" href=""><img src="images/slider/thumb1.jpg" alt="image 1" /></a>--}}
                        {{--<a data-slide-index="1" href=""><img src="images/slider/thumb2.jpg" alt="image 2" /></a>--}}
                        {{--<a data-slide-index="2" href=""><img src="images/slider/thumb3.jpg" alt="image 3" /></a>--}}
                        {{--<a data-slide-index="3" href=""><img src="images/slider/thumb4.jpg" alt="image 4" /></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div> <!-- /.site-slider -->

<div id="services" class="content-section">
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="service-item">--}}
                    {{--<span class="service-icon first"></span>--}}
                    {{--<h3>Easy Customization</h3>--}}
                    {{--<p>Cras congue orci at diam condimentum, in dignissim tellus elementum. Praesent id mauris eu urna vehicula rutrum sed in elit. Sed sed urna porta, viverra lacus in.</p>--}}
                {{--</div> <!-- /.service-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="service-item">--}}
                    {{--<span class="service-icon second"></span>--}}
                    {{--<h3>Web Design</h3>--}}
                    {{--<p>Nulla in nunc elit. Etiam porttitor nibh et felis molestie fermentum. Ut quis diam porttitor, dictum dolor in, volutpat nulla. Phasellus egestas eu lacus eu pharetra.</p>--}}
                {{--</div> <!-- /.service-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="service-item">--}}
                    {{--<span class="service-icon third"></span>--}}
                    {{--<h3>High Quality</h3>--}}
                    {{--<p>Sprint is free responsive website template using HTML5 CSS3 and Bootstrap framework. Feel free to download, edit and use it for your websites.</p>--}}
                {{--</div> <!-- /.service-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="service-item">--}}
                    {{--<span class="service-icon fourth"></span>--}}
                    {{--<h3>Professional Design</h3>--}}
                    {{--<p>Morbi id nisi enim. Ut congue interdum pharetra facilisi. Aenean consectetur pellentesque mauris nec ornare. Nam tortor justo, rutrum ut condimentum.</p>--}}
                {{--</div> <!-- /.service-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
        {{--</div> <!-- /.row -->--}}
    {{--</div> <!-- /.container -->--}}
</div> <!-- /#services -->

<div id="news" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-title">Новости</h1>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#product-promotion -->

<div id="products" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-title">Предприятия</h1>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_1.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product1.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Nunc Consectetur</h3>--}}
                    {{--<span>Price: <em class="text-muted">$260.00</em> - <em class="price">$180.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_3.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product2.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Donec Vitae Massa</h3>--}}
                    {{--<span>Price: <em class="text-muted">$320.00</em> - <em class="price">$240.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_2.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product3.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Fusce Dignissim Neque</h3>--}}
                    {{--<span>Price: <em class="text-muted">$480.00</em> - <em class="price">$340.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_1.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product4.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Mauris Adipiscing Enim</h3>--}}
                    {{--<span>Price: <em class="text-muted">$260.00</em> - <em class="price">$140.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_3.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product5.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Quisque Tincidunt</h3>--}}
                    {{--<span>Price: <em class="text-muted">$350.00</em> - <em class="price">$220.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_1.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product6.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Aliquam Malesuada</h3>--}}
                    {{--<span>Price: <em class="text-muted">$470.00</em> - <em class="price">$330.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_2.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product7.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Sed Eleifend Tortor</h3>--}}
                    {{--<span>Price: <em class="text-muted">$620.00</em> - <em class="price">$460.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<div class="product-item">--}}
                    {{--<div class="item-thumb">--}}
                        {{--<span class="note"><img src="images/small_logo_3.png" alt=""></span>--}}
                        {{--<div class="overlay">--}}
                            {{--<div class="overlay-inner">--}}
                                {{--<a href="#nogo" class="view-detail">Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.overlay -->--}}
                        {{--<img src="images/products/product8.jpg" alt="">--}}
                    {{--</div> <!-- /.item-thumb -->--}}
                    {{--<h3>Integer tincidunt</h3>--}}
                    {{--<span>Price: <em class="text-muted">$840.00</em> - <em class="price">$720.00</em></span>--}}
                {{--</div> <!-- /.product-item -->--}}
            {{--</div> <!-- /.col-md-3 -->--}}
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#products -->
<div id="jek" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-title">МУП ЖКХ</h1>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#product-promotion -->

<div id="contact" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-title">Наши контакты</h1>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center bigger-text">
            </div>
            <div class="col-md-6 col-sm-6">
                {{--<div id="map">--}}
                {{--</div>--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5639.490346441263!2d35.38147678465577!3d45.03009821927149!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40eb85f385944043%3A0x4060a0ecd2dbe50e!2z0YHRgtCw0L3RhtC40Y8g0KTQtdC-0LTQvtGB0LjRjw!5e0!3m2!1sru!2s!4v1449446555861" width="555" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                {{-- Карта города Феодосия--}}
                {{--<script type="text/javascript" charset="utf-8"--}}
                        {{--src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=OAau7AYtMs54Sg4dGUhEsCnihgSqvFeM&width=500&height=400&lang=ru_RU&sourceType=constructor">--}}
                {{--</script>--}}
            </div> <!-- /.col-md-6 -->
            <div class="col-md-6 col-sm-6">

                <div class="row contact-form">

                    <fieldset class="col-md-6 col-sm-6">
                        <input id="name" type="text" name="name" placeholder="ФИО" value="@if(Auth::check()){{Auth::user()->name}}@endif">
                    </fieldset>
                    <fieldset class="col-md-6 col-sm-6">
                        <input type="email" name="email" id="email" placeholder="Email" value="@if(Auth::check()){{Auth::user()->email}}@endif">
                    </fieldset>
                    <fieldset class="col-md-12">
                        <input type="text" name="subject" id="subject" placeholder="Тема сообщения">
                    </fieldset>
                    <fieldset class="col-md-12">
                        <textarea name="comments" id="comments" placeholder="Сообщение"></textarea>
                    </fieldset>
                    <fieldset class="col-md-12  col-xs-offset-4 col-sm-offset-4 col-md-offset-4" >
                            <input type="submit" name="send" value="Отправить сообщение" id="submit" class="button">
                    </fieldset>

                </div> <!-- /.contact-form -->

            </div> <!-- /.col-md-6 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#products -->

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


<script src="js/vendor/jquery-1.10.1.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<!-- templatemo 401 sprint -->
</body>
</html>