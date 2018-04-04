@extends('layouts.app')

@section('content')
<div>

<hr>
<div class="sizi" style="background: ; color:black; padding:15px;">
    <h2 class="card-header display-4 text-center"><i class="ion-person"></i>QUICKSWITCH COMPANY LTD </h2>
 <div class="row p-2" style="background: gray">
    
    @foreach($records as $post)
    @if($records!=[])
  <div class="col-sm-6 contpost">
    <div class="row">
      <div class="col PostTitle">
        <h3><span>{{ $post->title }}</span></h3>
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
          
        </p>
      </div>
    </div>
  </div>
  @else
  <p>No posts for this category</p>
  @endif
     @endforeach
    
</div>

</div>
<hr>
  <div class="clearfix"> </div>
    <h5 class="text-center">Copyright © 2018 - Quickswitch</h5>
    
 
@endsection