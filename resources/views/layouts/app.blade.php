<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('title', 'quickswitch') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
     .body-wrap {
        position:relative;
         z-index:1000;
      }
      
      .body-wrap {
        position: relative;
        z-index: 0;
      }
      
      .body-wrap:before,
      .body-wrap:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: -1;
        color:black;
        height:auto;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(26, 49, 95, 1)), color-stop(100%, rgba(26, 49, 95, 0)));
        background: linear-gradient(to bottom, rgba(26, 49, 95, 1) 0%, rgba(26, 49, 95, 0) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#1a315f', endColorstr='#001a315f', GradientType=0);
      }
    
      .sizi{
        width:100%;
      }
      
      .body-wrap:after {
        position:relative;
        z-index:1000;
        top: auto;
        bottom: 0;
        color:black;
        background: linear-gradient(to bottom, rgba(26, 49, 95, 0) 0%, rgba(26, 49, 95, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#001a315f', endColorstr='#1a315f', GradientType=0);
      }
      
      nav {
        margin-top: 20px;
        box-shadow: 5px 4px 5px #000;
        position:relative;
        z-index:1000;
      }
    
      #iefix {
    position:relative;
    z-index:1000;
    }
    
    .contpost {
        margin-top: 10px;
    }
    .PostTitle {
        padding: 5px;
    }
    .PostDate {
        float: right;
        font-size: 14px;
        margin-top: -26px;
        margin-right: 10px;
    }
    .header{
        padding:0;
        max-width:10%;
    }
      
    </style>
</head>
<body>
    <div class="header">
                <img src="/imgs/QUICK.png" class="circle" width="100%" style="background:transparent"/><br>
      </div >
      <center><h2>QUICK SWITCH COMPANY LTD</h2></center>
<div id="iefix">
    <div id="app body-wrap">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('lebo', 'quickswitch') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <li><a href="/contact" >Contact Us</a></li>
                      <li><a href="/about" >About Us</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
