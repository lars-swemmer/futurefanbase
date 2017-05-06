@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="portfolio-showcase">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3>Products</h3>
          <p style="width: 100%">Future Fanbase focusses on developing products to generate data of your fans. This data is always accessible in your own database. In the easy to read dashboard you will also find detailed insights and real time results.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="project">
            <h3><i style=" color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i> Spotify Fans</h3>
            <div class="screen">
              <img src="images/portfolio1.png" class="img-responsive" alt="portfolio1" />
            </div>
            <p class="description">
              This unique product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. You will get a dedicated branded page on a separately hosted server. With the Connect &amp; Follow button it’s easier for people to follow and they’re only one click away to become your fan.
            </p>
            <div class="divider"></div>
            <div class="visit">
              <a class="btn-shadow btn-shadow-primary" href="/products/spotify-fans">
                View Product Page
              </a>
            </div>
          </div>

          <div class="project">
            <h3>Coming Soon: Unlocks</h3>
            <div class="screen">
              <img src="images/portfolio1.png" class="img-responsive" alt="portfolio1" />
            </div>
            <p class="description text-center">
              T.B.A.
            </p>
            <div class="divider"></div>
            <div class="visit">
              <button style="background: grey" disabled class="btn-shadow btn-shadow-primary" href="portfolio-item.html">
                Be Patient...
              </button>
            </div>
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