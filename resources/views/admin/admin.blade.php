<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head');
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Администрация</a>

            <a class="navbar-brand" href="/">На главную</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li {{ Request::is('admin/news') ? "class=active" : "" }}><a href='/admin/news'>Новости</a></li>
                <li {{ Request::is('admin/businesses') ? "class=active" : "" }}><a href='/admin/businesses'>Предприятия</a></li>
                <li {{ Request::is('admin/contacts') ? "class=active" : "" }}><a href='/admin/contacts'>Контакты</a></li>
                <li {{ Request::is('admin/complaints') ? "class=active" : "" }}><a href='/admin/complaints'>Жалобы</a></li>
            </ul>
        </div>
        {{--<div class="col-sm-9 col-md-2"> @yield('content')</div>--}}
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     @yield('content')
        </div>
</div>
{{--@if(Auth::check())--}}


{{--@endif--}}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../js/bootstrap.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
{{--<script src="../js/vendor/holder.min.js"></script>--}}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}
</body>
</html>
