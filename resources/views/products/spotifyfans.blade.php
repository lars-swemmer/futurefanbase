@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="features-tabs-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-8 col-md-offset-2">
          <h3><i style=" color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i> Spotify Fans</h3>
          <p>This product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. You will get a dedicated branded page including your own call to action. With the Connect &amp; Follow button it’s easier for people to follow and they’re only one click away to become your next fan. The data of your fans is always accessible in your own database where you will also find detailed insights and real time results.</p>
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
            <div class="slide">
              <img src="/images/slider/slide5.png" alt="slide" />
            </div>
            <div class="slide">
              <img src="/images/slider/slide6.png" alt="slide" />
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
              <span class="price">399</span>
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
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Server</span>
                Future Fanbase
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
              <span class="price">599</span>
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
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Server</span>
                Future Fanbase
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
              <span class="price">899</span>
              <span class="period">/month</span>
            </div>
            <div class="specs">
              <div class="spec" style="font-size: 13px;">
                {{-- <span class="variable">1</span> --}}
                Playlist and artist follow
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">3</span>
                playlist switches per month 
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
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Server</span>
                Your own server
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
              <i style="font-size: 40px; color: #555;" class="fa fa-database" aria-hidden="true"></i>
              <strong>Generate your own data </strong>
              <p>Your data stays your own and will only be used to serve your own benefits.</p>
            </div>
            <div class="col-md-4 feature">
              <i style="font-size: 40px; color: #555;" class="fa fa-area-chart" aria-hidden="true"></i>
              <strong>Clear fan insights &amp; results  </strong>
              <p>In the easy to read dashboard you will find clear fan insights and results. </p>
            </div>
            <div class="col-md-4 feature">
              <i style="font-size: 40px; color: #555;" class="fa fa-users" aria-hidden="true"></i>
              <strong>Less steps: easier to follow </strong>
              <p>The future fan has to take less actions to become your follower on Spotify. </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 feature">
              <i style="font-size: 40px; color: #555;" class="fa fa-desktop" aria-hidden="true"></i>
              <strong>Pixels: remarketing &amp; conversion </strong>
              <p>With this pixel we can retarget your fans and measure conversion of the campaign.</p>
            </div>
            <div class="col-md-4 feature">
              <i style="font-size: 40px; color: #555;" class="fa fa-bullhorn" aria-hidden="true"></i>
              <strong>Branding &amp; call to action</strong>
              <p>Include your own call to action, like 'Follow to Win' or 'Follow to hear my new music'.</p>
            </div>
            <div class="col-md-4 feature">
              <i style="font-size: 40px; color: #555;" class="fa fa-line-chart" aria-hidden="true"></i>
              <strong>Optimized online marketing</strong>
              <p>With the generated data we can continually optimize all of your online marketing activities.</p>
            </div>
          </div>
        </div>
      </div>
     
  </div>

@endsection