@extends('layouts.pages')

@section('content')
    <div class="container nopadding">
          <div class="about">
            <div class="about-intro">
              <div class="col-md-8">
                <h1 class="wow fadeInDown" data-wow-delay="1.2s">Founded by two<br />music passionates.</h1>
                <p class="wow fadeInDown" data-wow-delay="1.3s">
                  With years of experience in the music industry my founders decided it was time to combine their powers: online marketing x technical development. And that’s how I was born…
                </p>
              </div>
            </div>


            <div class="team-section">
              <div class="col-md-4 col-sm-12">
                <div class="team-intro">
                  <div class="col-lg-12 col-sm-7 nopadding">
                    <h4 class="wow fadeInDown" data-wow-delay="1.4s">Online marketing X technical development</h4>
                    <h1 class="wow fadeInDown" data-wow-delay="1.4s">The Team</h1>
                    {{-- <p class="wow fadeInDown" data-wow-delay="1.5s">
                      When you have the army with guts and strength, numbers doesn't matter. Because at the end of the day
                      you'll win anyway.
                    </p> --}}
                  </div>
                </div>
              </div>
              <div class="col-md-10 col-sm-12">
                <div class="team">
                  <div class="col-sm-3 col-xs-6 nopadding text-center wow fadeInDown" data-wow-delay=".1s">
                    <div class="team-image">
                      <img class="img-circle" src="/images/bo.jpg" height="140" width="140" alt="Team Member" />
                    </div>
                    <div class="team-name">
                      <h2>Boneca V.</h2>
                      <p>
                        Online Marketing
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-3 col-xs-6 nopadding text-center  wow fadeInDown" data-wow-delay=".1s">
                    <div class="team-image">
                      <img class="img-circle" src="/images/lars.jpg" height="140" width="140" alt="Team Member" />
                    </div>
                    <div class="team-name">
                      <h2>Lars S.</h2>
                      <p>
                        Technical Development
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-box text-">
              {{-- <div class="col-md-12 text-">
              <div class="box-intro">
                <h1 class=" wow fadeInDown" data-wow-delay=".1s">Our Work process and culture</h1>
                <p class=" wow fadeInDown" data-wow-delay=".2s">
                  Just write something about how you deal with your clients and projects briefly in a line or two.
                  Anything other than that would make nothing but mess.
                </p>
              </div>
            </div>
              <div class="col-md-6 col-sm-6  wow fadeInDown" data-wow-delay=".1s">
                <div class="details">
                  <h1>Ideation and Testing</h1>
                  <p>
                    We at Route spend more time to test the idea than on the real project. Because, when we get to know the
                    what stuff, it gives us the best of it.
                  </p>
                  <a href="services.html" class="btn-hyper">Know More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6  wow fadeInDown" data-wow-delay=".1s">
                <div class="details">
                  <h1>Testing and Feedback</h1>
                  <p>
                    We at Route spend more time to test the idea than on the real project. Because, when we get to know the
                    what stuff, it gives us the best of it.
                  </p>
                  <a href="services.html" class="btn-hyper">Know More</a>
                </div>
              </div> --}}
            </div>

            <div class="cta text-center">
              <div class="inner">
                <h1 class=" wow fadeInDown" data-wow-delay=".1s">What can we do for you?
                </h1>
                <a class="btn btn-action  wow fadeInDown" data-wow-delay=".2s" href="services">Services</a>
              </div>
            </div>


          </div><!-- About -->
        </div> <!-- container -->


@endsection
