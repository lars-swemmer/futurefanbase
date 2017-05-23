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
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-line-chart" aria-hidden="true"></i>
          <div class="info">
            <strong>Social &amp; Channel Growth</strong>
            <p>Grow your fanbase on your social, music or video channel. </p>
          </div>
        </div>
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-youtube" aria-hidden="true"></i>
          <div class="info">
            <strong>YouTube View Booster</strong>
            <p>Let your view counter reach the highest heights.</p>
          </div>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-users" aria-hidden="true"></i>
          <div class="info">
            <strong>Music, Events &amp; More</strong>
            <p>Promote and reach the targets you desire.</p>
          </div>
        </div>
        <div class="col-md-6 feature">
          <i style="float:left; font-size: 40px; color: #555;" class="fa fa-trophy" aria-hidden="true"></i>
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
            Future Fanbase uses several promotion tools to reach your marketing objectives.
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
            <p>Every platform has its own audience, unique format options and targeting tools. </p>
          </div>
        </div>
        <div class="col-md-4 feature">
          
          <div class="info" style="margin-left: 0;">
            <strong>Pricing</strong>
            <p>Our prices are based on a responsibility and implementation fee.</p>
          </div>
        </div>
      </div>

  <div class="services-intro" style="border-top: 1px solid #E6E6E8; padding-top: 80px;">
    <div class="container">
      <div class="row" style="overflow:hidden;">
        <div class="col-md-6 image">
          <img src="images/services1.png" class="img-responsive img-rounded animated fadeInUp" alt="services1">
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

@endsection
