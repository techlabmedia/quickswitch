@extends('layouts.layoutA')

@section('content')
<div>
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
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
        <img src="imgs/1.jpg" alt="..." />
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
        <img src="imgs/2.jpg" alt="..." />
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="imgs/3.jpg" alt="..." />
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
        <img src="imgs/3.jpg" alt="..." />
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
        <img src="imgs/mach.jpg" alt="..." />
            <div class="carousel-caption"></div>
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
<hr>
<div class="sizi" style="background: white; padding:15px;">
    
		
   

@foreach($posts as $post)
        <div class="row"> 
                <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="/post/{{ $post->slug }}" class="thumbnail">
                        <img src="{{ Voyager::image( $post->image ) }}"  class="img-responsive img-box img-thumbnail"> 
                    </a>
                </div> 
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <div class="list-group">
                        <div class="list-group-item">
                            
                            <div class="row-content">
                                <div class="list-group-item-heading">
                                    <a href="#" title="sintret">
                                        <small></small>
                                    </a>
                                </div>
                                <small>
                                    <i class="glyphicon glyphicon-time"></i> {{ $post->created_at}}<span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="https://twitter.com/sintret" alt="sintret" title="sintret">@baiganaki</a></span>
                                    <br>
                                    <span class="explore"><i class="glyphicon glyphicon-th"></i><a href="#"> Published </a></span>
                                </small>
                            </div>
                        </div>
                    </div>
                    <h4><a href="/post/{{ $post->slug }}">{{ $post->title}}</a></h4>
                    {!! $post->body !!}
                </div> 
            </div>
            <hr>
@endforeach


<!-- <div class="row p-2">
     @foreach($posts as $post)
<div class="panel-body">
    <div class="col-sm-4">
      
        <img style="width:100%">
        </a>
        <h3>Comments</h3>
        <form action="" method="post">
                        @foreach($post->comments as $comment)
            | <i class="fa fa-comment"> {{ $comment->content}} &nbsp; &nbsp;{{ $comment->created_at}}</i><br>
              @endforeach
                       
            </form>
      </div>
    
    <p><a class="btn btn-sm btn-success" href="/post/{{ $post->slug }}">Read More</a></p>
    <div class="col PostTitle">
        <h4><a href=><span>{{ $post->title }}</span></h4>
        <div class="PostDate"><i class="fa fa-calendar">{{$post->created_at}}</div>
      </div>
    </div>
    <div class="row">
      
  </div>
  <hr>
     @endforeach
</div> -->

</div>
<div class="container">
{{ $posts->links() }}
</div>
<hr>

  <div class="clearfix"> </div>
    <h5 class="text-center">Copyright © 2018 - Quickswitch</h5>
    
 
@endsection