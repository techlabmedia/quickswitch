@extends('layouts.pages')

@section('content')
<div>

<hr>
<div class="sizi" style="background: white; padding:15px;">
    <h2 class="card-header display-4 text-center"><i class="ion-person"></i>QUICKSWITCH COMPANY LTD </h2>
		<span class="display-6 text-center text-muted">Diseño tomado de "Blog posts with by <a href="https://bootsnipp.com/msurguy" target="_blank">msurguy</a>", adaptado a bootstrap 4 y rediseñado</span>
   
 <div class="row p-2">
     @foreach($posts as $post)
  <div class="col-sm-6 contpost">
    <div class="row">
      <div class="col PostTitle">
        <h4><a href="/post/{{ $post->slug }}"><span>{{ $post->title }}</span></h4>
        <div class="PostDate"><i class="fa fa-calendar">{{$post->created_at}}</div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a href="/post/{{ $post->slug }}" class="thumbnail">
        <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
        </a>
      </div>
      <div class="col-sm-6">      
        <p>
          {!! $post->body !!}
        </p>
        <p><a class="btn btn-sm btn-success" href="/post/{{ $post->slug }}">Read More</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center small p-2">
        <p>
          <i class="fa fa-user-circle"></i> by <a href="#">Miguel92</a> 
          | <i class="fa fa-comment"></i> <a href="#">3 Comments</a>
          | <i class="fa fa-share"></i> <a href="#">39 Shares</a>
          | <i class="fa fa-tags"></i> Tags : <a href="#"><span class="badge badge-info">Snipp</span></a> 
          <a href="#"><span class="badge badge-info">Bootstrap</span></a> 
          <a href="#"><span class="badge badge-info">UI</span></a> 
          <a href="#"><span class="badge badge-info">growth</span></a>
        </p>
      </div>
    </div>
  </div>
     @endforeach
</div>

</div>
<hr>
  <div class="clearfix"> </div>
    <h5 class="text-center">Copyright © 2018 - Quickswitch</h5>
    
 
@endsection