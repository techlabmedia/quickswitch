@extends('layouts.layoutA')

@section('content')
<div class="container">
 <div class="container-fluid">
 {{ $MyNavBar->asUl() }}
	<h1 class="mb-2 text-center">Contact Us</h1>
	
	@if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif
	
	<div class="col-12 col-md-6">
		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }} 
			<div class="form-group">
			<label for="Name">Name: </label>
			<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">Email: </label>
			<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
		</div>

		<div class="form-group">
			<label for="message">message: </label>
			<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary" value="Send">Send</button>
			</div>
		</form>
	</div>


    <div class="col-12 col-md-6" style="color:white">
     <table>
     <thead>
     <th>QUICKSWITCH COMPANY LTD</th>
     </thead>
     <tr>
     <td>Location:</td> <td> Makumbusho juu</td>
     </tr>
     <tr>
     <td>Mob:</td> <td> +022 255 431 678</td>
     </tr>
     <tr>
     <td></td> <td></td>
     </tr>
     </table>
	</div>
    </div>
    <hr>
 </div> <!-- /container -->
@endsection