@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="services-showcase-section">
    <div class="container">
      <div class="row header" style="padding-top: 0; border-top: none;">
        <div class="col-md-12">
          <h3>Campaign Types </h3>
          <p>
            Grow fans, increase views, drive sales or generate traffic with these four campaign types.
          </p>
          <a href="/online-advertising/campaign-types">Read more</a>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-6 feature">
          <img src="images/circle-icons/full-color/globe.png" alt="globe" />
          <div class="info">
            <strong>Social &amp; Channel Growth</strong>
            <p>Grow your fanbase on your social, music or video channel. </p>
          </div>
        </div>
        <div class="col-md-6 feature">
          <img src="images/circle-icons/full-color/location.png" alt="location" />
          <div class="info">
            <strong>Youtube View Booster</strong>
            <p>Let your view counter reach the highest heights.</p>
          </div>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-6 feature">
          <img src="images/circle-icons/full-color/smartphone.png" alt="smartphone" />
          <div class="info">
            <strong>Music, Events &amp; More</strong>
            <p>Promote and reach the targets you desire.</p>
          </div>
        </div>
        <div class="col-md-6 feature">
          <img src="images/circle-icons/full-color/support.png" alt="support" />
          <div class="info">
            <strong>Special: DJ MAG TOP 100 - 2017</strong>
            <p>Increase awareness, generate traffic and let your fans vote! </p>
          </div>
        </div>
      </div>

      <div class="row header">
        <div class="col-md-12">
          <h3>Advertising Platforms</h3>
          <p>
            Future Fanbases uses several promotion tools to reach your marketing objectives.
          </p>
          <a href="online-advertising/advertising-platforms">Read more</a>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-4 feature">
          
          <div class="info" style="margin-left: 0;">
            <strong>Platform Types</strong>
            <p>There’re several advertising platforms we use to promote your message.</p>
          </div>
        </div>
        <div class="col-md-4 feature">
          
          <div class="info" style="margin-left: 0;">
            <strong>Formates &amp; Targeting</strong>
            <p>Every platform has it’s own audience, unique format options and targeting tools.</p>
          </div>
        </div>
        <div class="col-md-4 feature">
          
          <div class="info" style="margin-left: 0;">
            <strong>Pricing</strong>
            <p>We have a clear pricing policy. Our fees are based on a responsibility fee plus an implementation fee. </p>
          </div>
        </div>
      </div>

  <div class="services-intro" style="border-top: 1px solid #E6E6E8; padding-top: 80px;">
    <div class="container">
      <div class="row" style="overflow:hidden;">
        <div class="col-md-6 image">
          <img src="images/services1.png" class="img-responsive animated fadeInUp" alt="services1">
        </div>
        <div class="col-md-6 info">
          <h3>Custom Solutions</h3>
          <p>
            Didn’t find the campaign or advertising platform you were looking for? Check out our custom solutions!
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
