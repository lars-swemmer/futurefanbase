@extends('layouts.pages')

@include('layouts.hero-nav')

@section('content')
  <div class="blog-post-hero" style="background-image: url(images/about-hero.jpg)">
    <div class="container">
      <h1 class="animated fadeInUp">
        About Future Fanbase
      </h1>
    </div>
  </div>

  <div class="blog-post-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-10 post">
          <div class="content">
            <h3>This Is: Future Fanbase</h3>
            <p>
              Future Fanbase is an online marketing agency that will help you to reach your goals by implementing and creating the right strategy for your online marketing campaign. With these three ingredients: data, online advertising and strategy, we are able to succeed in meeting your online marketing objectives.
            </p>
            <p>
              <h4>Data</h4>
              Future Fanbase focusses on developing products to generate data of your fans. Data provides powerful insights and is important in analyzing and optimizing all of your online marketing activities. By using our products you’ll always have access to your own database where you can track results and retrieve insights, while we are able to further fine tune your online campaign.
            </p>
            <p>
              By using our products we are able to fine tune your online marketing campaign by creating fan profiles, custom audiences, lookalike audiences and make use of specific remarketing and conversion tools.
            </p>
            <p>
              <h4>Online Advertising</h4>
              Whether it’s to increase following, branding, promote your music or sell new products. With the right combination of online advertising platforms, formats and targeting, we will promote your marketing message to the right audience in order to reach your objectives.
            </p>
            <p>
              <h4>Strategy</h4>
              To reach your long term goals we can advise you on your overall advertising and/or content strategy. Next to data and online advertising: timing, frequency and content creation are important factors in the success of your online presence.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 post">
          <div class="content">
            <h3>These Are: The Founders</h3>
            <p>
              Future Fanbase is founded by two music passionates named Boneca and Lars. With years of experience in the music industry they decided it was time to combine their powers: online marketing x technical development.
            </p>
          </div>
         </div>
        </div>
          <div class="row">
            <div class="content" style="font-size: 15px; line-height: 30px; color: #454545">
              <div class="col-md-5 col-md-offset-1"> 
                <img class="img-responsive" src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-1/15109530_10207966692588470_6194946528084313786_n.jpg?oh=d5cd54f9400a523196a7dcc5984cd9cc&oe=597533FE">
                <h3>Boneca Verhagen</h3>
                <p>
                  Communication science (University of Amsterdam), worked at Spinnin’ Records, now co-founder and Managing Director of Future Fanbase, favorite music genres: dance pop, indie poptimism, indietronica and house.
                </p>
                <h6 style="color: #3C92C5">Specialties</h6>
                <ul>
                  <li>Online Advertising</li>
                  <li>Marketing Strategy</li>
                  <li>Channel Management</li>
                  <li>Analytics</li>
                </ul>
                <h6 style="color: #3C92C5">Certifications</h6>
                <ul>
                  <li>Google Adwords</li>
                  <li>YouTube Content Strategy</li>
                  <li>YouTube Audience Growth</li>
                </ul>
              </div>
              <div class="col-md-5">
                <img class="img-responsive" src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/12743971_993697550676580_7739028443288921080_n.jpg?oh=097a094057f0d189a43a277e1f9f688e&oe=597BCD1F">
                <h3>Lars Swemmer</h3>
                <p>
                  Communication and Multimedia Design (Rotterdam University of Applied Sciences), worked at Spinnin’ Records, now co-founder of Future Fanbase and Head of Data at Martin Garrix, favorite music genres: techno and deep house.
                </p>
                <h6 style="color: #3C92C5">Specialties</h6>
                <ul>
                  <li>Data Engineering</li>
                  <li>Back-End Development</li>
                  <li>API Development</li>
                  <li>Growth Hacking</li>
                </ul>
                <h6 style="color: #3C92C5">Certification</h6>
                <ul>
                  <li>YouTube: API</li>
                </ul>
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
@endsection
