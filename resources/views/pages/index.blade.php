@extends('layouts.pages')

@include('layouts.hero-nav')

@section('content')

  <div class="index-hero">
    <div class="container">
        <h1 class="hero-text animated fadeInDown">
            Master your online <br />
            marketing campaign.
        </h1>
        <p class="sub-text animated fadeInDown">
            With years of experience in the music industry we know what’s important to artists and music brands.
        </p>
        <div class="cta animated fadeInDown">
            <a href="/products" class="button-outline">See products</a>
            <a href="/contact" class="button">Contact us</a>
        </div>
        <div class="img"></div>
    </div>
</div>

  <div class="features-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h2>"When it comes to music marketing, data is power" - <i>Forbes</i></h2>
          <p>Data will give you insights on your fanbase and will improve your next marketing campaign.</p>
        </div>
      </div>
      <div class="row feature">
        <div class="col-md-6 info">
          <h4>Gather data in your own database</h4>
          <p>
            Data will give you insights on your fanbase, will improve your next online marketing campaign and the opportunity to generate more future fans. With the products of Future Fanbase you can generate data and see real time results in your own database.
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="images/react/feature1.png" class="img-responsive" alt="feature1" />
        </div>
      </div>
      <div class="divider"></div>
      <div class="row feature backwards">
        <div class="col-md-6 info">
          <h4>We can take online marketing to the next level</h4>
          <p>
            We are always looking for the best and new ways to spread your message and increase awareness in the digital world.
          </p>
          <p>
            Together we will set your goals and match them with the preferable budget. In result we will create the right campaign, with the right targeting and the best combination of advertising tools.
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="images/react/feature2.png" class="img-responsive" alt="feature2" />
        </div>
      </div>
    </div>
  </div>

  <div class="pricing-dark-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3>Start gathering Spotify followers, data and insights</h3>
          <p>This unique product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. With our subscription service you can access this data in your own database and see real time results. </p>
          <p>Get 1 month free when signing for a year.</p>
        </div>
      </div>
      <div class="row charts">
        <div class="col-md-4">
          <div class="chart first">
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">499</span>
              <span class="period">/month</span>
            </div>
            <div class="plan-name">Basic</div>
            <div class="specs">
              <div class="spec">
                {{-- <span class="variable">1</span> --}}
                Playlist follow
              </div>
              <div class="spec">
                <span class="variable">1</span>
                playlist switch per month 
              </div>
              <div class="spec">
                <span class="variable">Fan data</span>
                name, mail, age, country
              </div>
              <div class="spec">
                <span class="variable">Insights</span>
                fans 
              </div>
              <div class="spec">
                <span class="variable">Pixel</span>
                remarketing &amp; conversion
              </div>
            </div>
            <a class="btn-signup button-clear" href="/online-advertising/advertising-platforms">
              <span>See More</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="chart featured">
            <div class="popular">Most popular</div>
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">799</span>
              <span class="period">/month</span>
            </div>
            <div class="plan-name">Advanced</div>
            <div class="specs">
              <div class="spec">
                {{-- <span class="variable">15</span> --}}
                Playlist and Artist follow
              </div>
              <div class="spec">
                <span class="variable">1</span>
                Playlist switch per month 
              </div>
              <div class="spec">
                <span class="variable">Fan data</span>
                name, mail, age, country,  top artists 
              </div>
              <div class="spec">
                <span class="variable">Insights</span>
                top 10 artists, fans
              </div>
              <div class="spec">
                <span class="variable">Design</span>
                artist branded 
              </div>
              <div class="spec">
                <span class="variable">5%</span>
                discount on Spotify marketing
              </div>
              <div class="spec">
                <span class="variable">Pixel</span>
                remarketing &amp; conversion
              </div>
            </div>
            <a class="btn-signup button-clear" href="/online-advertising/advertising-platforms">
              <span>See More</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="chart last">
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">1199</span>
              <span class="period">/month</span>
            </div>
            <div class="plan-name">Premium</div>
            <div class="specs">
              <div class="spec">
                {{-- <span class="variable">Unlimited</span> --}}
                Playlist and artist follow 
              </div>
              <div class="spec">
                <span class="variable">4</span>
                playlist switches per month
              </div>
              <div class="spec">
                <span class="variable">Fan data</span>
                name, mail, age, country, top artists
              </div>
              <div class="spec">
                <span class="variable">Insights</span>
                playlists, top artists and fans 
              </div>
              <div class="spec">
                <span class="variable">Extra insights</span>
                popularity measures
              </div>
              <div class="spec">
                <span class="variable">Design</span>
                artist branded/custom options
              </div>
              <div class="spec">
                <span class="variable">10%</span>
                discount on Spotify marketing 
              </div>
              <div class="spec">
                <span class="variable">Pixel</span>
                remarketing &amp; conversion
              </div>
            </div>
            <a class="btn-signup button-clear" href="/online-advertising/advertising-platforms">
              <span>See More</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features-grid-section testimonials-section"> <!-- testimonials section is quick hack, dit een juiste class geven -->
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
            <h3>Advertising Platforms</h3>
            <p>These are the main online advertising platforms Future Fanbases uses to promote your profile, channel, music, event, merchandise or any other marketing objective.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i>
          <strong>Spotify</strong>
          <p>Advertising within the Spotify platform allows you to target music lovers by their listening behaviors</p>
        </div>
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(196, 48, 43);" class="fa fa-youtube-play" aria-hidden="true"></i>
          <strong>YouTube</strong>
          <p>Youtube is one the most powerful online advertising platforms. Reach out a significant audience and turn viewers into fans.</p>
        </div>
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(59, 89, 152)" class="fa fa-google" aria-hidden="true"></i>
          <strong>Google Adwords</strong>
          <p>Google Adwords is the largest online advertising tool and helps you to reach out to a very specific audience, across millions of websites or apps.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: #0057e7" class="fa fa-facebook-official" aria-hidden="true"></i>
          <strong>Facebook</strong>
          <p>Advertising on Facebook is very effective when it comes to generate engagement from the audience.</p>
        </div>
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(195, 42, 163)" class="fa fa-instagram" aria-hidden="true"></i>
          <strong>Instagram</strong>
          <p>Reach out to a highly interactive audience and promote your message on the Instagram timeline or on Instagram Stories.  </p>
        </div>
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(00, 172, 237);" class="fa fa-twitter" aria-hidden="true"></i>
          <strong>Twitter</strong>
          <p>With Twitter advertising you can join the discussion and reach out to a very conversational audience.  </p>
        </div>
      </div>
      <div class="row text-center">
        <a class="btn-signup button-clear" href="/online-advertising/advertising-platforms">
              <span>See More</span>
            </a>
      </div>
    </div>
  </div>

  <div class="testimonials-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3>Trusted by a lot of businesses around the world:</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="testimonial pull-right">
            <div class="quote">
              I am just quoting some stuff but I am seriously happy about this product. Has a lot of powerful
              features and is so easy to set up, I could stay customizing it day and night, it's just so much fun!
              <div class="arrow-down">
                <div class="arrow"></div>
                <div class="arrow-border"></div>
              </div>
            </div>
            <div class="author">
              <img src="https://pbs.twimg.com/profile_images/813065746934808576/iTLDxVWC.jpg" class="pic" alt="testimonial3" />
              <div class="name">Martin Garrix</div>
              <div class="company">DJ/Producer</div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="testimonial">
            <div class="quote">
              This thing is one of those tools that everybody should be using. I really like it and with this ease to use, you can kickstart your projects and apps and just focus on your business!
              <div class="arrow-down">
                <div class="arrow"></div>
                <div class="arrow-border"></div>
              </div>
            </div>
            <div class="author">
              <img src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/17190484_962024797268321_6517362087697524675_n.jpg?oh=82035a19c0aaed8f7c3953e23d83edbe&oe=5953BE09" class="pic" alt="testimonial2" />
              <div class="name">Oliver Heldens</div>
              <div class="company">DJ/Producer</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cta-section">
    <p>
      Start mastering your online marketing!
    </p>
    <a href="/contact">
      Contact us
    </a>
  </div>

  <div class="clients-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Our Customers</h3>
          <p>
            These are some of our customers who are gathering their own future fanbase.
          </p>
          <div class="logos">
            <img src="images/react/logos/martin-garrix.png">
            <img src="images/react/logos/stmpd-rcrds.png">
            <img src="images/react/logos/hi-lo.png">
            <img src="images/react/logos/r3hab.png">
            <img src="images/react/logos/florian-picasso.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-footer main-footer--white">
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
            <img src="images/react/social/social-tw.png" alt="twitter" />
          </a>
          <a href="#">
            <img src="images/react/social/social-dbl.png" alt="dribbble" />
          </a>
        </div>
      </div>
      <div class="row credits">
        <div class="col-md-12">
          Copyright © 2017. Future Fanbase
        </div>
      </div>
    </div>
  </div>
@endsection
