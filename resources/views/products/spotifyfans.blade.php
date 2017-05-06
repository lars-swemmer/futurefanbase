@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="features-tabs-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-8 col-md-offset-2">
          <h3><i style=" color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i> Spotify Fans</h3>
          <p>This unique product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. You will get a dedicated branded page on a separately hosted server. With the Connect &amp; Follow button it’s easier for people to follow and they’re only one click away to become your fan</p>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-section" style="margin-top: -40px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 slide-wrapper">
          <div class="slideshow">
            <div class="btn-nav prev"></div>
            <div class="btn-nav next"></div>
            <div class="slide active">
              <img src="/images/slider/slide3.png" alt="slide" />
            </div>
            <div class="slide">
              <img src="/images/slider/slide4.png" alt="slide" />
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

<div class="pricing-3-options-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3>Different plans for everyone</h3>
          <p>Choose the pricing that fits your business needs</p>
        </div>
      </div>

      <div class="row charts">
        <div class="col-md-4">
          <div class="chart first">
            <div class="plan-name">Freelance</div>
            <div class="quantity">
              <span class="dollar">$</span>
              <span class="price">29</span>
              <span class="period">/month</span>
            </div>
            <div class="specs">
              <div class="spec">
                <span class="variable">5</span>
                team members
              </div>
              <div class="spec">
                <span class="variable">Digital</span>
                recurring billing
              </div>
              <div class="spec">
                <span class="variable">Virtual</span>
                online terminal
              </div>
              <div class="spec">
                <span class="variable">10</span>
                total products
              </div>
              <div class="spec">
                <span class="variable">1.0%</span>
                Transaction fee
              </div>
            </div>
            <a class="btn-signup button-clear" href="signup.html">
              <span>Start free trial</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="chart featured">
            <img src="/images/ribbon.png" class="popular" alt="ribbon" />
            <div class="plan-name">Profesional</div>
            <div class="quantity">
              <span class="dollar">$</span>
              <span class="price">79</span>
              <span class="period">/month</span>
            </div>            
            <div class="specs">
              <div class="spec">
                <span class="variable">15</span>
                team members
              </div>
              <div class="spec">
                <span class="variable">Digital</span>
                recurring billing
              </div>
              <div class="spec">
                <span class="variable">Virtual</span>
                online terminal
              </div>
              <div class="spec">
                <span class="variable">15</span>
                total products
              </div>
              <div class="spec">
                <span class="variable">0.5%</span>
                Transaction fee
              </div>
            </div>
            <a class="btn-signup button-clear" href="signup.html">
              <span>Start free trial</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="chart last">
            <div class="plan-name">Premium</div>
            <div class="quantity">
              <span class="dollar">$</span>
              <span class="price">119</span>
              <span class="period">/month</span>
            </div>
            <div class="specs">
              <div class="spec">
                <span class="variable">Unlimited</span>
                team members
              </div>
              <div class="spec">
                <span class="variable">Digital</span>
                recurring billing
              </div>
              <div class="spec">
                <span class="variable">Virtual</span>
                online terminal
              </div>
              <div class="spec">
                <span class="variable">25</span>
                total products
              </div>
              <div class="spec">
                <span class="variable">No</span>
                Transaction fee
              </div>
            </div>
            <a class="btn-signup button-clear" href="signup.html">
              <span>Start free trial</span>
            </a>
          </div>
        </div>        
      </div>
      <div class="row message">
        <p>
          All of our plans come with a 1 month free when signing for a year.
        </p>
      </div>
      
      <div class="features-grid-section">
        <div class="container">
          <div class="row header">
            <h3>Sum of benefits</h3>
          </div>
          <div class="row">
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/creditcard.png" alt="creditcard" />
              <strong>Generate your own data </strong>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/dev.png" alt="dev" />
              <strong>Clear fan insights &amp; results  </strong>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/globe.png" alt="globe" />
              <strong>Less steps: easier to follow </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/support.png" alt="support" />
              <strong>Pixels: remarketing and conversion </strong>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/mail.png" alt="mail" />
              <strong>Separate server: your branding only</strong>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/locked.png" alt="locked" />
              <strong>Optimized online marketing</strong>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 40px;">
        <div class="col-md-12">
          <div class="sections">
            <div class="section active">
              <h4>Continually optimize all marketing activities </h4>
              <p style="font-size: 15px; color: #6C7279; line-height: 30px;">
                Promoting this product through Future Fanbase has a big advantage when you want to fine tune your online marketing activities. By the generated data and the implementation of the remarketing and conversion pixel, we can keep optimizing your campaign and measure real results. 
              </p>
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