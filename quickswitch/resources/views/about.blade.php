
@extends('layouts.layoutA')


@section('content')
<div clas="container">
<section class="about" id="about">
    <div class="container text-center">
      <h2>
          About Bell Theme
        </h2>

      <p>
        Voluptua scripserit per ad, laudem viderer sit ex. Ex alia corrumpit voluptatibus usu, sed unum convenire id. Ut cum nisl moderatius, per nihil dicant commodo an. Eum tacimates erroribus ad. Atqui feugiat euripidis ea pri, sed veniam tacimates ex. Menandri
        temporibus an duo.
      </p>

      <div class="row stats-row">
        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">232</span> Satisfied Customers
          </div>
        </div>

        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">79</span> Released Projects
          </div>
        </div>

        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">1,463</span> Hours Of Support
          </div>
        </div>

        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">15</span> Hard Workers
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
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
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


  </div>

  @endsection