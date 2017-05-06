<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>Future Fanbase - Master Your Online Marketing Campaign</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/react/compiled/theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/react/vendor/animate.css')}}">

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="{{asset('js/react/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/react/theme.js')}}"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  </head>
<body >
  <header class="navbar navbar-inverse hero" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html" class="navbar-brand">Future Fanbase</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav navbar-right">

          <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>

          <li class="active"><a href="#">About</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Products <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Spotify Following</a></li>
              <li><a href="#">Spotify Add Release</a></li>
              <li><a href="#">Unlocks</a></li>
              <li><a href="#">More In Development</a></li>
              <li><a href="#">Product Adds: Social &amp; Channel Stats</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Online Advertising <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Campaign Types</a></li>
              <li><a href="#">Advertising Platforms</a></li>
              <li><a href="#">Formats &amp; Targeting</a></li>
              <li><a href="#">Pricing </a></li>
              <li><a href="#">Reporting</a></li>
              <li><a href="#">Full Campaign Creation</a></li>
              <li><a href="#">Specials</a></li>
            </ul>
          </li>

          <li class="active"><a href="#">Contact</a></li>
          
        </ul>
      </nav>
    </div>
  </header>

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
            We  would love to hear from you!<br />  Mail or give us a call.
          </p>
          <form role="form" id="contact-form" method="post">
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
          </form>
        </div>
        <div class="col-md-4 contact">
          <div class="address">
            <h3>Our Address</h3>
            <p>
              Landstraat 154, <br />
              Bussum, 1401ET<br />
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
          <div class="social">
            <a href="#" class="fb"><img src="/images/social/fb.png" alt="facebook" /></a>
            <a href="#" class="tw"><img src="/images/social/tw.png" alt="twitter" /></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 menu">
          <h3>Overview</h3>
          <ul>
            <li>
              <a href="features.html">Features</a>
            </li>
            <li>
              <a href="services.html">Services</a>
            </li>
            <li>
              <a href="pricing.html">Pricing</a>
            </li>
            <li>
              <a href="support.html">Support</a>
            </li>
            <li>
              <a href="blog.html">Blog</a>
            </li>
            <li>
              <a href="blog.html">Coming soon</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 menu">
          <h3>Menu</h3>
          <ul>
            <li>
              <a href="features.html">About us</a>
            </li>
            <li>
              <a href="services.html">Contact us</a>
            </li>
            <li>
              <a href="aboutus.html">Jobs</a>
              <a href="aboutus.html" class="hiring">
                We're hiring!
              </a>
            </li>
            <li>
              <a href="support.html">Portfolio</a>
            </li>
            <li>
              <a href="blog.html">Status</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2 menu">
          <h3>Social</h3>
          <ul>
            <li>
              <a href="features.html">Youtube</a>
            </li>
            <li>
              <a href="services.html">Facebook</a>
            </li>
            <li>
              <a href="pricing.html">Twitter</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4 newsletter">
          <div class="signup clearfix">
            <p>
              Sign up for the newsletter and we'll inform you of updates, offers and more.
            </p>
            <form>
              <input type="text" name="email" class="form-control" placeholder="Your email address" />
              <input type="submit" value="Sign up" />
            </form>
          </div>
          <a href="#">
            <img src="images/social/social-tw.png" alt="twitter" />
          </a>
          <a href="#">
            <img src="images/social/social-dbl.png" alt="dribbble" />
          </a>
        </div>
      </div>
      <div class="row credits">
        <div class="col-md-12">
          Copyright © 2019. React
        </div>
      </div>
    </div>
  </div>

</body>
</html>