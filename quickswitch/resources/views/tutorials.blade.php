@extends('layouts.pages')



@section('content')
<div>
@foreach($post->categories as $category)
{{ category->name}}
@endforeach

</div>
@endsection