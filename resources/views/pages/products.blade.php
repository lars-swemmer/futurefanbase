@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

  <div class="portfolio-showcase">
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h3>Products</h3>
          <p style="width: 100%">Future Fanbase focusses on developing products to generate data of your fans. This data is always accessible in your own database. In the easy to read dashboard you will also find detailed insights and real time results.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="project">
            <h3><i style=" color: rgb(30, 215, 96);" class="fa fa-spotify" aria-hidden="true"></i> Spotify Fans</h3>
            <div class="screen">
              <img src="images/portfolio1.png" class="img-responsive" alt="portfolio1" />
            </div>
            <p class="description">
              This product of Future Fanbase allows you to gather following on Spotify while collecting data of your fans. You will get a dedicated branded page on a separately hosted server. With the Connect &amp; Follow button it’s easier for people to follow and they’re only one click away to become your next fan. 
            </p>
            <div class="divider"></div>
            <div class="visit">
              <a class="btn-shadow btn-shadow-primary" href="/products/spotify-fans">
                View Product Page
              </a>
            </div>
          </div>

          <div class="project">
            <h3>Coming Soon: Reveals</h3>
            <div class="screen">
              <img src="images/portfolio1.png" class="img-responsive" alt="portfolio1" />
            </div>
            <p class="description text-center">
              Do you have some exclusive content to reveal to your fans? This product will drive traffic and generate data. More to be announced… 
            </p>
            <div class="divider"></div>
            <div class="visit">
              <button style="background: grey" disabled class="btn-shadow btn-shadow-primary" href="portfolio-item.html">
                Be Patient...
              </button>
            </div>
          </div>
          <div class="project">
            <h3>Coming Soon: Add to playlist </h3>
            <div class="screen">
              <img src="images/portfolio1.png" class="img-responsive" alt="portfolio1" />
            </div>
            <p class="description text-center">
              Let fans add your new release directly to their favorite Spotify playlist. More to be announced…
            </p>
            <div class="divider"></div>
            <div class="visit">
              <button style="background: grey" disabled class="btn-shadow btn-shadow-primary" href="portfolio-item.html">
                Be Patient...
              </button>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

@endsection
