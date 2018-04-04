<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <style>
    body {
    font-family: 'PT Sans', sans-serif;
    font-size: 13px;
    font-weight: 400;
    color: #4f5d6e;
    position: relative;
    background: rgb(26, 49, 95);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(26, 49, 95, 1)), color-stop(10%, rgba(26, 49, 95, 1)), color-stop(24%, rgba(29, 108, 141, 1)), color-stop(37%, rgba(41, 136, 151, 1)), color-stop(77%, rgba(39, 45, 100, 1)), color-stop(90%, rgba(26, 49, 95, 1)), color-stop(100%, rgba(26, 49, 95, 1)));
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#1a315f', endColorstr='#1a315f', GradientType=0);
  }
  
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
    background: linear-gradient(to bottom, rgba(26, 49, 95, 0) 0%, rgba(26, 49, 95, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#001a315f', endColorstr='#1a315f', GradientType=0);
  }
  
  nav {
    margin-top: 60px;
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
    </style>
  </head>

  <body>
  <div id="iefix">
  <div class="body-wrap">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">QuickSwich </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
           <li> <a href="/contact">Contact Us</a> </li>
                       <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">BUILDINGS <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">House</a></li>
                <li><a href="#">Appartment</a></li>
                <li><a href="#">Offices & Frames</a></li>
                <li><a href="#">Lodge & Hotel</a></li>
                <li><a href="#">Hall & Recreation</a></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">Hostels</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">VEHICLES/TRANSPORT<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Cars</a></li>
                <li><a href="#">Buses</a></li>
                <li><a href="#">Town Van</a></li>
                <li><a href="#">Rolly</a></li>
                <li><a href="#">Truck</a></li>
                <li><a href="#">Motorcycle</a></li>
                <li><a href="#">Boats</a></li>
                <li class="divider"></li>
                <li><a href="#">Amburance</a></li>
                <li class="divider"></li>
                <li><a href="#">plane</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">MACHINERY & EQUIPMENT<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Engineering Machinery</a></li>
                <li><a href="#">Agriculture Machinery</a></li>
                <li><a href="#">Equipments</a></li>
                <li class="divider"></li>
                <li><a href="#">Manufacturing Machinery</a></li>
                              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAND<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">BUY</a></li>
                <li><a href="#">RENT</a></li>
                             </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="/admin">Admin</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">userName<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Settings</a></li>
                                <li class="divider"></li>
                <li><a href="#" class="glyphicon glyphicon-user">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
</div>
<div class="container">
<div class="container-fluid">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="imgs/4.jpg" alt="..." />
            <div class="carousel-caption">This is caption</div>
        </div>
        <div class="item">
        <img src="imgs/1.jpg" alt="..." />
            <div class="carousel-caption">This is caption</div>
        </div>
        <div class="item">
        <img src="imgs/2.jpg" alt="..." />
            <div class="carousel-caption">This is caption</div>
        </div>
        <div class="item">
            <img src="imgs/3.jpg" alt="..." />
            <div class="carousel-caption">This is caption</div>
        </div>
        <div class="item">
        <img src="imgs/tr.png" alt="..." />
            <div class="carousel-caption">This is caption</div>
        </div>
        <div class="item">
        <img src="imgs/mach.jpg" alt="..." />
            <div class="carousel-caption">This is caption</div>
        </div>
    </div> <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@yield('content')
</div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <link href="{{asset('js/app.js')}}" type="javascript" />
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('js/app.js')}}"></script>
    <script>
    
    </script>
  </body>
</html>
