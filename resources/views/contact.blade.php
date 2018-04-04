@extends('layouts.app')
  
<style>
	td{
		font-weight:bold;
		font-color: blue;
	}
</style>

@section('content')
<div class="container" style="background:gray">
 <div class="container-fluid">

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
			<textarea type="text" class="form-control luna-message" id="message" col="4" row="10" placeholder="Type your messages here" name="message" required></textarea>
		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary" value="Send">Send</button>
			</div>
		</form>
	</div>
      <br><br>

    <div class="col-12 col-md-6" style="color:white">
     <table>
     <thead>
     <th><h3>QUICKSWITCH COMPANY LTD</h3></th>
     </thead>
     <tr>
     <td>Location: &nbsp; Makumbusho</td>
     </tr>
     <tr>
	 <td>Mob: 1.CALL: &nbsp; +255 682 646 849</td>
	 </tr>
	 <tr>
	 <td>Mob: 2.WHATSAPP: &nbsp; +255 712 442 660</td>
     </tr>
     <tr>
     <td></td> <td></td>
     </tr>
	 </table>
	 <h1>We are here</h1>

	 <div id="map" style="width:400px;height:400px;background:yellow"></div>
	 
	 <script>
	 function myMap() {
	 var mapOptions = {
		 center: new google.maps.LatLng(-6.7718211,39.2298283),
		 zoom: 100,
		 mapTypeId: google.maps.MapTypeId.HYBRID
	 }
	 var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	 }
	 </script>
	 
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo5hUTRqUpMspFtA3Hfio2EReSplUjq_U&callback=myMap"></script>

	</div>
    </div>
    <hr>
 </div> <!-- /container -->
@endsection