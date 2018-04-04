
@extends('layouts.app')


@section('content')
<div clas="container">
<section class="about" id="about">
    <div class="container text-center">
      <h2>
          About Quick Switch
        </h2>

      <p>
       Welcome to Quick switch company LTD where we give you a convinient way to get what you are looking for. 
      </p>
    </div>
  </section>

  <section id="contact">
      <center><h2>OUR SERVICES</h2>
      <div class="row">
            <div class="col-md-4">
              <img class="circle" src="imgs/QUICK.png" width="40%">
              <p>number onegjtlkltjghljtlrtrhgjoghiujtoi<br>
              ktjhlkjhgltrkjhitlgujilj4lthreitguoeutgoiu<br>
            </b>
            </div>
        <div class="col-md-4">
            <img class="circle" src="imgs/QUICK.png" width="40%">
            <p>number one</b>
        </div>
              <div class="col-md-4">
                  <img class="circle" src="imgs/QUICK.png" width="40%">
                  <p>number one</b>
              </div>
      </div>
    </center>
      <div class="row">

      </div>
  </section>

  <section id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section-title">Contact Us</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Makumbusho <br>Dar es Salaam, DSM-Tanzania</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@quickswitch.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+255 682 646 849</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="errormessage"></div>
            <form action="/contact" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <input class="btn btn-primary" type="submit" value="Send Message" />
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
<section id="contact">
  <center>
  <h2>portifolio</h2>
  <div class="row">
  @foreach($postz as $imgs)
    <div class="col-md-3">
        <a href="/post/{{ $imgs->slug}}" class="thumbnail">
          <img src="{{ Voyager::image( $imgs->image ) }}"  class="img-responsive img-box img-thumbnail"> 
      </a>
    </div>
  
  @endforeach
</div>
</center>
</section>

  </div>

  @endsection