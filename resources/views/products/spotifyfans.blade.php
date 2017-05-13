@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="features-tabs-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-8 col-md-offset-2">
          <h3><i style=" color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i> Spotify Fans</h3>
          <p>This product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. You will get a dedicated branded page on a separately hosted server. With the Connect &amp; Follow button it’s easier for people to follow and they’re only one click away to become your next fan. XXx - This will generate data, which is always accessible in your own database. In the easy to read dashboard you will also find detailed insights and real time results. </p>
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
          <h3>Subscription Service</h3>
          <p>Choose the subscription that fits your needs.</p>
        </div>
      </div>

      <div class="row charts">
        <div class="col-md-4">
          <div class="chart first" style="padding: 20px;">
            <div class="plan-name">Basic</div>
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">499</span>
              <span class="period">/month</span>
            </div>
            <div class="specs">
              <div class="spec" style="font-size: 13px;">
                {{-- <span class="variable">1</span> --}}
                Playlist follow
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">1</span>
                playlist switch per month 
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Fan data</span>
                name, mail, age, country
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Insights</span>
                fans 
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Measures</span>
                followers
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Design</span>
                artist branded
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">5%</span>
                discount on a Spotify campaign
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Pixel</span>
                remarketing &amp; conversion
              </div>
            </div>
            <a class="btn-signup button-clear" href="MAILTO:hello@futurefanse.com">
              <span>Contact us</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="chart featured" style="padding: 20px 20px 40px 20px;">
            <img src="/images/ribbon.png" class="popular" alt="ribbon" />
            <div class="plan-name">Advanced</div>
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">799</span>
              <span class="period">/month</span>
            </div>            
            <div class="specs">
              <div class="spec" style="font-size: 13px;">
                {{-- <span class="variable">1</span> --}}
                Playlist and artist follow
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">1</span>
                playlist switch per month 
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Fan data</span>
                name, mail, age, country
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Insights</span>
                top 10 artists, fans
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Measures</span>
                followers
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Design</span>
                artist branded
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">7.5%</span>
                discount on a Spotify campaign
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Pixel</span>
                remarketing &amp; conversion
              </div>
            </div>
            <a class="btn-signup button-clear" href="MAILTO:hello@futurefanse.com">
              <span>Contact us</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="chart last" style="padding: 20px;">
            <div class="plan-name">Premium</div>
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">1199</span>
              <span class="period">/month</span>
            </div>
            <div class="specs">
              <div class="spec" style="font-size: 13px;">
                {{-- <span class="variable">1</span> --}}
                Playlist and artist follow
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">3</span>
                playlist switch per month 
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Fan data</span>
                name, mail, age, country
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Insights</span>
                top artists, fans
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Measures</span>
                followers, playlists, popularity
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Design</span>
                artist branded, custom options
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">10%</span>
                discount on a Spotify campaign
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Pixel</span>
                remarketing &amp; conversion
              </div>
            </div>
            <a class="btn-signup button-clear" href="MAILTO:hello@futurefanse.com">
              <span>Contact us</span>
            </a>
          </div>
        </div>        
      </div>
      <div class="row message">
        <p>
          All of our subscriptions come with a 1 month free when signing for a year.
        </p>
      </div>
      
      <div class="features-grid-section">
        <div class="container">
          <div class="row header">
            <h3>Sum of benefits</h3>
            <p>These are the reasons why you can’t miss out! </p>
          </div>
          <div class="row">
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/creditcard.png" alt="creditcard" />
              <strong>Generate your own data </strong>
              <p>Your data stays your own and will only be used to serve your own benefits.</p>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/dev.png" alt="dev" />
              <strong>Clear fan insights &amp; results  </strong>
              <p>In the easy to read dashboard you will find clear fan insights and results. </p>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/globe.png" alt="globe" />
              <strong>Less steps: easier to follow </strong>
              <p>The future fan has to take less actions to become your follower on Spotify. </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/support.png" alt="support" />
              <strong>Pixels: remarketing &amp; conversion </strong>
              <p>With this pixel we can retarget your fans and measure conversion of the campaign.</p>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/mail.png" alt="mail" />
              <strong>Separate server &amp; your branding</strong>
              <p>This product will run on your own server and with your branding only.</p>
            </div>
            <div class="col-md-4 feature">
              <img src="/images/circle-icons/one-color/locked.png" alt="locked" />
              <strong>Optimized online marketing</strong>
              <p>With the generated data we can continually optimize all of your online marketing activities.</p>
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