@extends('layouts.pages')

@section('content')

@include('layouts.hero-nav')

  <div class="blog-post-hero" style="background-image: url(images/contact-hero.jpg)">
    <div class="container">
      <h1 class="animated fadeInUp">
        You know how to reach us.<br />Don't you?
      </h1>
    </div>
  </div>

  <div class="contact-us-info">
    <div class="container">
      <div class="row">
        <div class="col-md-8 message">
          <h3>Send us a message</h3>
          <p>
            We  would love to hear from you!<br />  
          </p>
          {{-- <form role="form" id="contact-form" method="post">
            <div class="form-group">
              <label for="name">Your name</label>
              <input type="text" name="name" class="form-control" id="name" />
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" />
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" name="phone" class="form-control" id="phone" />
            </div>
            <div class="form-group">
              <label for="message">Your message</label>
              <textarea name="message" class="form-control" id="message" rows="6"></textarea>
            </div>
            <div class="submit">
              <input type="submit" class="button button-small" value="Send" />
            </div>
          </form> --}}
        </div>
        <div class="col-md-4 contact">
          <div class="address">
            <h3>Our Address</h3>
            <p>
              Landstraat, 154<br />
              1401 ET, Bussum<br />
              Netherlands
            </p>
          </div>
          <div class="address">
            <h3>Our Email</h3>
            <p>
              <a href="MAILTO:hello@futurefanbase.com">hello@futurefanbase.com</a>
            </p>
          </div>
          <div class="phone">
            <h3>By Phone</h3>
            <p>
              Boneca Verhagen<br />
              +31 6 1444 2666
            </p>
          </div>
          {{-- <div class="social">
            <a href="#" class="fb"><img src="/images/social/fb.png" alt="facebook" /></a>
            <a href="#" class="tw"><img src="/images/social/tw.png" alt="twitter" /></a>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

@endsection
 