
@extends('layouts.app')	

@section('content') 
<div class="container">
<div class="col-sm-6 " style="background: gray; margin: auto;" >
	<a href="/" class="btn btn-primary">Back</a>
 <div class="panel-body">
	<title>{{ $post->title }}</title>
	<div class="col-sm-6">
			<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
	</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $post->title }}</h1>
				
				<p>{!! $post->body !!}</p>

			</div>
	</div>
</div>
<div class="row">
	<h4><i>Comments</i></h4>
        <div class="col text-center small p-2">
         	<div class="row" style="text-align:left;">
				<div class="col-md-8 col-md-offset-2">
					@foreach($post->comments as $comment)
						<div class="comment">
							<p><strong>Name:</strong> {{ $comment->name }}</p>
							<p><strong>Comment:</strong><br/>{{ $comment->content }}</p><br>
						</div>
					@endforeach
			<form class="form-group">
				<input type="text" name="comment" placeholder="Write Your Comment......" class="form-control"/>
			</form>
		</div>
	</div>
						
		<div class="row">
								
							</div>
						
            | <i class="fa fa-share"></i> <a href="#">Tags</a>
            | <i class="fa fa-tags"></i> Tags : <a href="#"><span class="badge badge-info">Snipp</span></a> 
            <a href="#"><span class="badge badge-info">Related</span></a> 
            <a href="#"><span class="badge badge-info">POST-ITEM</span></a> 
            <a href="#"><span class="badge badge-info">Comments</span></a>
		  </p>
		  <a href="/contact" class="btn btn-primary pull-right" >Contact Us</a>
		</div>
		
  </div>

</div>
</div>
@endsection