@extends('layouts.layoutA')

@section('contents')

<div class="container">
    <div class="container-fluid">
        {{$post->comments}}
        <form action="" method="POST" >
        <input type="hidden" name="iden" value="$post->id" />
        </form>
       </div>
</div>

@endsection