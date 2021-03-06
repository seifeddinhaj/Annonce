<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" name="token" content="{ { csrf_token() } }">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{asset('css/admin/style.css')}}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body>


<div id="wrapper" class="active">
    <!-- Sidebar -->
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
            <li><a href="{{URL('administrateur')}}">All ads<span class="sub_icon glyphicon glyphicon-link"></span></a></li>

                <li><a href="{{URL('categories')}}">Categori<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a href="{{URL('subcategories')}}">SubCate<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a href="{{URL('user')}}">Users<span class="sub_icon glyphicon glyphicon-link"></span></a></li>


        </ul>
    </div>

    <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">

                        <div class="container">
                            <div class="well lead">
                                    @guest


                                            <a class="float-right" href="{{ route('login') }}">{{ __('Login') }}</a>



                                            <a  class="float-right" href="{{ route('register') }}">{{ __('Register') }}</a>

                                    @else


                                                {{ Auth::user()->name }} <span class="caret"></span>




                                                <a  href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>


                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>


                                    @endguest


                        </div>

                    @yield('sub')</div>




                </div> <!-- fim div da direita -->

                @yield('content')
            </div> <!-- fim div da esquerda -->

        </div>

    </div>

</div>

</body>
</html>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script>