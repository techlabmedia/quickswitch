<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="/imgs/QUICK.png">

    <title>Quick Switch</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <style>
    body {
    font-family: 'PT Sans', sans-serif;
    font-size: 13px;
    font-weight: 400;
    color: black;
    position: relative;
  background: #082335;
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
    background-color:skyblue;
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
    

  }
  
  nav {
    margin-top: 0px;
    box-shadow: 5px 4px 5px #000;
    position:relative;
    z-index:1000;
    background-color:blue;
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
  background: white;
  max-width:98%;
  margin-left:auto;
  margin-right:auto;
}

.header ul>li>a{
  display:inline;
  padding-left:10px;
  list-style:none;

}
    </style>
  </head>

  <body>
  <div id="iefix">
  <div class="body-wrap">
  
    <div class="header" style="color:black" >
      <img src="imgs/QUICK.png"  width="20%" style="background:transparent"/>
      <h2 class="card-header display-4 text-center"><i class="ion-person"></i>QUICKSWITCH COMPANY LTD </h2>
    
    </div >
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">QuickSwich</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">QuickSwich </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="color:black">
          <ul class="nav navbar-nav">
           <li> <a href="/contact">CONTACT US</a> </li>
           <li> <a href="/about">ABOUT</a> </li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">BUILDINGS <b class="caret"></b></a>
              <ul class="dropdown-menu">
              @foreach($categories->slice(1,3) as $link)
                    <li><a href="posts/{{$link->id}}">{{ $link->name}}</a></li>
              @endforeach
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">INTERTEINMENT<b class="caret"></b></a>
              <ul class="dropdown-menu">
              @foreach($categories->slice(4,3) as $link)
                    <li><a href="posts/{{$link->id}}">{{ $link->name}}</a></li>
              @endforeach
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">VEHICLE/TRANSPORT<b class="caret"></b></a>
              <ul class="dropdown-menu" style="color:black">
            @foreach($categories->slice(8,9)  as $link)
                <li><a href="posts/{{$link->id}}">{{ $link->name}}</a></li>
            @endforeach
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">MACHINERY & EQUIPMENT<b class="caret"></b></a>
              <ul class="dropdown-menu">
            @foreach($categories->slice(18,4)  as $link)
                <li><a href="posts/{{$link->id}}">{{ $link->name}}</a></li>
            @endforeach
              </ul>
            </li>

            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAND<b class="caret"></b></a>
              <ul class="dropdown-menu">
              @foreach($categories->slice(23,2)  as $link)
                <li><a href="posts/{{$link->id}}">{{ $link->name}}</a></li>
              @endforeach
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          <li><a href="/admin">Admin</a></li>
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
  

  </div>
</div>
<div class="container">
@yield('content')

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
