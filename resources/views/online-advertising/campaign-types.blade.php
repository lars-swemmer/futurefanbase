@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="features-tabs-section">
    <div class="container">
      <div class="row header">
        <h3>Social &amp; Channel Growth</h3>
        <p>Grow your fanbase on the medium you desire.</p>
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
                <img src="/images/ct-facebook.jpg" class="img-responsive img-rounded" alt="picture1" />
              </div>
            </div>
            <div class="tab-pane fade" id="instagram">
              <div class="col-md-6 image">
                <img src="/images/ct-instagram.jpg" class="img-responsive img-rounded" alt="picture1" />
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
                <img src="/images/ct-twitter.jpg" class="img-responsive img-rounded" alt="picture1" />
              </div>
            </div>
            <div class="tab-pane fade" id="youtube">
              <div class="col-md-6 image">
                <img src="/images/ct-youtube.jpg" class="img-responsive img-rounded" alt="picture1" />
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
                <img src="/images/ct-spotify.jpg" class="img-responsive img-rounded" alt="picture1" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features-section features-section--margin">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h2 style="color: #55565d; font-size: 23px; font-weight: 500;">Spread the message!</h2>
          <p style="color: #888; font-size: 16px;">Boost views, drive sales, increase awareness or generate traffic with the following campaign types. </p>
        </div>
      </div>
      <div class="row feature">
        <div class="col-md-6 info">
          <h4>Youtube Views</h4>
          <p>
           More views on your video means more reach, more potential fans, and thereby it’s a great marketing and PR tool. By using the Future Fanbase View Booster you can generate more views on your video, while reaching out to lots of potential new fans.  
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="/images/feature1.png" class="img-responsive" alt="feature1" />
        </div>
      </div>
      <div class="row feature backwards">
        <div class="col-md-6 info">
          <h4>Music, Events &amp; More </h4>
          <p>
           Promote your music, event, merchandise or any other special activity. We can advise on using the right type of content, advertising tools, targeting and the required budget to reach your desired goal.
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="/images/feature2.png" class="img-responsive" alt="feature2" />
        </div>
      </div>
      <div class="row feature last">
        <div class="col-md-6 info">
          <h4>Special: DJ MAG TOP 100 - 2017 </h4>
          <p>
           Increase awareness, drive traffic and let your fans vote! With the right tools we can create a top of mind campaign so fans won’t forget about you when they’re voting for their top dj’s.
          </p>
        </div>
        <div class="col-md-6 image">
          <img src="/images/ct-djmag.png" class="img-responsive" alt="feature3" />
        </div>
      </div>
    </div>
  </div>

@endsection 
