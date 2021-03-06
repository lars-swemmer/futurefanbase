@extends('layouts.pages')

@section('content')

@include('layouts.hero-nav')

  <div class="index-hero">
    <div class="container">
        <h1 class="hero-text animated fadeInDown">
            Master your online <br />
            marketing campaign
        </h1>
        <p class="sub-text animated fadeInDown">
            With years of experience in the music industry we know what’s important to artists and entertainment brands.
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
          <p>Data provides powerful insights and is important in optimizing all of your online marketing activities.</p>
        </div>
      </div>
      <div class="row feature">
        <div class="col-md-6 info">
          <h4>Gather data in your own database</h4>
          <p>
            Data provides powerful fan insights, improves your online marketing campaign and creates the opportunity to generate more future fans. With the products of Future Fanbase you can generate fan data and see real time results in your own database environment.
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="images/react/feature1.png" class="img-responsive" alt="feature1" />
        </div>
      </div>
      <div class="divider"></div>
      <div class="row feature backwards">
        <div class="col-md-6 info">
          <h4>We take online marketing to the next level</h4>
          <p>
            We innovate every day looking for the best way to spread your message and increase awareness in the digital world.
          </p>
          <p>
            Together we will set your goals and match them with the preferable budget. In result we will create the perfect campaign, with the right targeting and the best combination of advertising tools. 
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="images/react/feature2.png" class="img-responsive" alt="feature2" />
        </div>
      </div>
    </div>
  </div>




  <div class="services-showcase-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3 style="color: #3B88B6; font-weight: normal; font-size: 19px;">Campaign Types </h3>
          <p style="font-size: 14px; color: #6C7279;">
            Here are some examples of different campaign types you can run through Future Fanbase.
          </p>
          <a href="/online-advertising/campaign-types">Read more</a>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-line-chart" aria-hidden="true"></i>
          <div class="info">
            <strong style="color: #3B88B6">Social &amp; Channel Growth</strong>
            <p>Grow your fanbase on your social, music or video channel. </p>
          </div>
        </div>
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-youtube" aria-hidden="true"></i>
          <div class="info">
            <strong style="color: #3B88B6">YouTube View Booster</strong>
            <p>Let your view counter reach the highest heights.</p>
          </div>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-users" aria-hidden="true"></i>
          <div class="info">
            <strong style="color: #3B88B6">Music, Events &amp; More</strong>
            <p>Promote and reach the targets you desire.</p>
          </div>
        </div>
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-trophy" aria-hidden="true"></i>
          <div class="info">
            <strong style="color: #3B88B6">Special: DJ MAG TOP 100 - 2017</strong>
            <p>Increase awareness, generate traffic and let your fans vote! </p>
          </div>
        </div>
      </div>     
  </div>
</div>





  <div class="pricing-dark-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3>Start gathering Spotify fans, data and insights</h3>
          <p>This unique product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. With our subscription service you can access this data in your own database and see real time results. </p>
          <p style="font-weight: bold; font-size: 14px; color: #ecf0f1">Get 1 month free when signing for a year.</p>
        </div>
      </div>
      <div class="row charts">
        <div class="col-md-5 col-md-offset-1">
          <div class="chart first" style="padding: 20px;">
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">499</span>
              <span class="period">/month</span>
            </div>
            <div class="plan-name">Basic</div>
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
                <span class="variable">Extra insights</span>
                top artists
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Measures</span>
                new followers
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Design</span>
                artist branded, standard
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
            <a class="btn-signup button-clear" href="/products/spotify-fans">
              <span>See More</span>
            </a>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="chart featured" style="padding: 20px;">
          <div class="popular">Most popular</div>
            <div class="quantity">
              <span class="dollar">€</span>
              <span class="price">899</span>
              <span class="period">/month</span>
            </div>
            <div class="plan-name">Premium</div>
            <div class="specs">
              <div class="spec" style="font-size: 13px;">
                {{-- <span class="variable">1</span> --}}
                Playlist and artist follow
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">2</span>
                playlist switches per month 
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Fan data</span>
                name, mail, age, country
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Extra insights</span>
                top artists
              </div>
              <div class="spec" style="font-size: 13px;">
                <span class="variable">Measures</span>
                new followers
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
                Own hosting
              </div>
            </div>
            <a class="btn-signup button-clear" href="/products/spotify-fans">
              <span>See More</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>




{{-- <div class="features-tabs-section">
    <div class="container">
      <div class="row header">
        <h3>Social &amp; Channel Growth</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="row">
        <div class="col-md-12 tabs-wrapper">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#facebook" data-toggle="tab">Facebook</a></li>
            <li><a href="#instagram" data-toggle="tab">Instagram</a></li>
            <li><a href="#twitter" data-toggle="tab">Twitter</a></li>
            <li><a href="#youtube" data-toggle="tab">YouTube</a></li>
            <li><a href="#spotify" data-toggle="tab">Spotify</a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade in active" id="facebook">
              <div class="col-md-6 info">
                <h4>Facebook</h4>
                <p>
                  Facebook is a great way to connect with your fans. With over a billon active users it has become the world’s largest social medium and a essential marketing platform.</p>
                  <p>Future Fanbase is able to grow your following, increase reach and raise awareness on this medium. By using the right type of advertisements and targeting tools we will find you the most engaging fans at the best rate. 
                </p>
              </div>
              <div class="col-md-6 image">
                <img src="/images/tabs/pic1.png" class="img-responsive" alt="picture1" />
              </div>
            </div>
            <div class="tab-pane fade" id="instagram">
              <div class="col-md-6 image">
                <img src="/images/portfolioitem1.png" class="img-responsive" alt="picture2" />
              </div>
              <div class="col-md-6 info">
                <h4>Instagram</h4>
                <p>
                  Instagram has the most engaging audience of all social media and with it’s 700 million users, this platform can’t be missed in your social strategy.</p>
                  <p>
                  On Instagram visual content is key. By implementing the right campaign with specific targeting, Future Fanbase can help you generate higher reach, attract more fans and keep them involved.
                </p>
              </div>                
            </div>
            <div class="tab-pane fade" id="twitter">
              <div class="col-md-6 info">
                <h4>Twitter</h4>
                <p>
                  Twitter is a platform for up to date observations and viral trends. With it’s 300 million active users the conversation is still ongoing.</p>
                  <p>Whether it’s to increase following or promote tweets, Future Fanbase will optimize your campaign to make sure to reach the most conversational and interactive fans.
                </p>
              </div>
              <div class="col-md-6 image">
                <img src="/images/tabs/pic2.png" class="img-responsive" style="position: relative;top: 15px;" alt="picture3" />
              </div>
            </div>
            <div class="tab-pane fade" id="youtube">
              <div class="col-md-6 image">
                <img src="/images/tabs/pic1.png" class="img-responsive" alt="picture4" />
              </div>
              <div class="col-md-6 info">
                <h4>YouTube</h4>
                <p>
                 YouTube has over a billion users, and every day, people watch hundreds of millions of videos. To make sure your channel is being discovered and watched, it’s important to build a solid fanbase.</p>
                 <p>Fans are the first to see your videos and share them with the rest of the world. With the right advertisements and call to actions we can make sure people are watching your videos and hitting that subscribe button as well. 
                </p>
              </div>
            </div>
            <div class="tab-pane fade" id="spotify">
              <div class="col-md-6 info">
                <h4>Spotify</h4>
                <p>
                 Spotify has the largest paid user-base in the music streaming industry and has a total of 100 million users. The key to getting your releases in front of fans, is make sure they follow your profile and playlists.</p>
                 <p>Fans who follow you will see your new music in their Release Radar, through notifications and mail outs. Future Fanbase has a unique service where we can promote your profile and playlists at the same time, while generating data.
                </p>
              </div>
              <div class="col-md-6 image">
                <img src="/images/tabs/pic2.png" class="img-responsive" style="position: relative;top: 15px;" alt="picture3" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="features-grid-section testimonials-section"> <!-- testimonials section is quick hack, dit een juiste class geven -->
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
            <h3 style="font-size: 23px; color: #55565d; font-weight: 500; margin-bottom: 10px;">Advertising Platforms</h3>
            <p style="font-size: 16px; font-weight: 400; color:#888; width: 75%; margin: 0 auto;">These are the main online advertising platforms Future Fanbase uses to promote your profile, channel, music, event, merchandise or any other marketing objective.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i>
          <strong>Spotify</strong>
          <p>Advertising within the Spotify platform allows you to target music lovers by their listening behaviors.</p>
        </div>
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(196, 48, 43);" class="fa fa-youtube-play" aria-hidden="true"></i>
          <strong>YouTube</strong>
          <p>YouTube is one the most powerful online advertising platforms. Reach out a significant audience and turn viewers into fans.</p>
        </div>
        <div class="col-md-4 feature">
          <i style="font-size: 40px; color: rgb(59, 89, 152)" class="fa fa-google" aria-hidden="true"></i>
          <strong>Google Adwords</strong>
          <p>Google Adwords is the largest online advertising tool and helps you to reach out to a specific audience, across millions of websites.</p>
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

  {{-- <div class="testimonials-section">
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
  </div> --}}

 {{--  <div class="cta-section">
    <p>
      Start mastering your online marketing!
    </p>
    <a href="/contact">
      Contact us
    </a>
  </div> --}}

  {{-- <div class="clients-section">
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
  </div> --}}

@endsection
