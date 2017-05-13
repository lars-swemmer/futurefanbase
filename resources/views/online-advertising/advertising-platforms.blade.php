@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="pricing-comparison-section" style="margin-top: 80px;">
        <div class="container">
          <div class="row header">
            <div class="col-md-8 col-md-offset-2">
              <h3>Platform Types</h3>
              <p> These are the main platforms Future Fanbases uses to promote your profile, channel, music, event, merchandise or any other marketing objective.</p>
            </div>
          </div>
        </div>
      </div>

    <div class="features-grid-section"> <!-- testimonials section is quick hack, dit een juiste class geven -->

	    <div class="container">
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
	          <p>Google Adwords is the largest online advertising tool and helps you to reach out to a specific audience, across millions of websites. </p>
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
	    </div>
  </div>

  <div class="pricing-comparison-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><div class="divider"></div></div>
      </div>
      <div class="row header col-md-offset-2 col-md-8">
        <h3>Formats &amp; Targeting</h3>
        <p>
          Every platform has it’s own audience, unique format options and targeting tools. Using multiple platforms to market your message can strengthen your campaign. See  the summary of options below.
        </p>
      </div>
    </div>
    <div class="container" style="margin-top: 40px;">
      <div class="clearfix"></div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
          </tr>
        </tbody>
      </table>

      <div class="row message">
        <p>
          Want to see the full list of formats and targeting options?
          <a href="signup.html">Contact us now.</a>
        </p>
      </div>  
    </div>
  </div>

    <div class="pricing-comparison-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><div class="divider"></div></div>
      </div>
      <div class="row header col-md-offset-2 col-md-8">
        <h3>Pricing</h3>
        <p>
          We have a very clear pricing policy. Our fees are based on a small percentage of the campaign budget (responsibility fee) and on platform type plus
the number of ad groups and formats (implementation fee).
        </p>
        <p><a href="">See our policy </a>.</p>
      </div>
      
    </div>
  </div>

@endsection
