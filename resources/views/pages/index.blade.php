@extends('layouts.pages')

@section('content')
    <div class="container nopadding">
        <div class="intro">
            <div class="col-md-8">
                <h1 class="wow fadeInLeft" data-wow-delay="1.2s">Master your online marketing campaign</h1>
                <p class="wow fadeInLeft" data-wow-delay="1.3s">
                    Hello, nice to meet you. Let me introduce myself! I am Future Fanbase. Founded by two music passionates. With years of experience in the music industry my founders decided it was time to combine their powers: online marketing x technical development. And that’s how I was born…
                </p>
            </div>
        </div>

        <div class="portfolio">
            <div class="portfolio-grid">
                {{-- <div class="col-md-12">
                    <nav class="categories">
                        <ul class="portfolio-filter wow fadeInLeft" data-wow-delay="1.1s">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".spotify">Spotify</a></li>
                            <li><a href="" data-filter=".youtube">YouTube</a></li>
                            <li><a href="" data-filter=".facebook">Facebook</a></li>
                            <li><a href="" data-filter=".instagram">Instagram</a></li>
                            <li><a href="" data-filter=".google">Google</a></li>
                            <li><a href="" data-filter=".contest">Contests &amp; give aways</a></li>
                        </ul>
                    </nav>
                </div> --}}

                <div class="col-md-12">
                    <div class="row portfolio-container nopadding text-center">
                        <!-- aria item -->
                        <div class="col-md-4 nopadding spotify">
                            <a href="spotify" class="portfolio_item wow fadeInDown" data-wow-delay= "1.3s">
                                <img src="{{asset('images/home-spotify-color.jpg')}}" alt="image" class="img-responsive" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-items">
                                        <h2>Spotify</h2>
                                        <p>Increase following, generate data and insights</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- aria item end -->

                        <!-- aria item -->
                        <div class="col-md-4 nopadding youtube">
                            <a href="youtube" class="portfolio_item wow fadeInDown" data-wow-delay="1.4s">
                                <img src="{{asset('images/home-youtube-color.jpg')}}" alt="image" class="img-responsive" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-items">
                                        <h2>YouTube</h2>
                                        <p>Reach future fans, promote videos and increase views</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- aria item end -->

                        <!-- aria item -->
                        <div class="col-md-4 nopadding facebook">
                            <a href="facebook" class="portfolio_item wow fadeInDown" data-wow-delay="1.5s">
                                <img src="{{asset('images/home-facebook-color.jpg')}}" alt="image" class="img-responsive" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-items">
                                        <h2>Facebook</h2>
                                        <p>Turn future fans into followers, reach bigger audiences</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <!-- aria item end -->

                        <!-- aria item -->
                        <div class="col-md-4 nopadding instagram">
                            <a href="instagram" class="portfolio_item wow fadeInDown" data-wow-delay=".5s">
                                <img src="{{asset('images/home-instagram-color.jpg')}}" alt="image" class="img-responsive" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-items">
                                        <h2>Instagram</h2>
                                        <p>Promote your profile, generate more reach</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- aria item end -->

                        <!-- aria item -->
                        <div class="col-md-4 nopadding google">
                            <a href="google" class="portfolio_item wow fadeInDown" data-wow-delay=".5s">
                                <img src="{{asset('images/home-google-color.jpg')}}" alt="image" class="img-responsive" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-items">
                                        <h2>Google</h2>
                                        <p>Use the Google network to spread your message, for example to promote your new release and or video!</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- aria item end -->

                        <!-- aria item -->
                        <div class="col-md-4 nopadding contest">
                            <a href="contest-and-giveaways" class="portfolio_item wow fadeInDown" data-wow-delay=".8s">
                                <img src="{{asset('images/home-contest-color.jpg')}}" alt="image" class="img-responsive" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-items">
                                        <h2>Contests &amp; Give Aways</h2>
                                        <p>Host a campaign website, collect data of future fans</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- aria item end -->

                    </div> <!-- Portfolio End -->
                </div> <!--  col-md-12 -->
            </div> <!-- portfolio grid -->
        </div><!-- Portfolio (2e) -->

        <div class="cta text-center">
            <div class="inner">
                <h1 class="wow fadeInDown" data-wow-delay=".1s">Master your online marketing campaign<br />to grow your future fanbase!</h1>
                <a class="btn btn-action wow fadeInDown" data-wow-delay=".2s" href="/about">About Us</a>
            </div>
        </div>
    </div> <!-- container -->
@endsection
