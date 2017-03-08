@extends('layouts.pages')

@section('content')
	<div class="container">
          <div class="project-section text-center">
            <div class="project-intro">
              <div class="col-md-6 col-md-offset-3">
                <h1 class="wow fadeInUp" data-wow-delay="1.2s">Contests &amp; Giveaways</h1>
                <p class="wow fadeInUp" data-wow-delay="1.3s">
                  You want to give your fans and future fans something extra? That’s really nice! And we fully support it.
                </p>
              </div>
            </div>
            <div class="project wow fadeInDown" data-wow-delay="1.4s">
              <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel">
          				<div class="pt-portfolio-item item">
          					<img class="img-responsive" src="images/service-contest-color.jpg" alt=" " />
          				</div>
                </div>

               	<div class="services-box text-center">
               		<div class="col-md-6 wow fadeInDown" data-wow-delay=".3s">
                    	<div class="services-icon">
                        	{{-- <i class="ion-social-buffer"></i> --}}
                    	</div>
                    	<div class="services-text">
                        	<h1>Host A Campaign Website </h1>
                        	<p>
                           Do you want to host a contest to give away tickets to your upcoming show? Give away a free download as a thank you? Or make fans happy with some new merchandise? In the near future it’s possible to host a campaign website with your branding and call to action. The perfect way to engage with your future fans.
                          </p>
                    	</div>
                	</div>
	                <div class="col-md-6 wow fadeInDown" data-wow-delay=".4s">
	                    <div class="services-icon">
	                        {{-- <i class="ion-social-dropbox"></i> --}}
	                    </div>
	                    <div class="services-text">
	                        <h1>And Collect Data!</h1>
	                        <p>
	                            Your future fans would really love to enter your contest or download your give way. And in return they probably won’t mind to share some data. So, if you want to, we make sure with every entry, the future fan will be connected. With this connection we can retrieve the right data and get new insights.
	                        </p>
	                    </div>
	                </div>
            	</div>

            	<div class="cta text-center">
	                <div class="inner">
	                    <h1 class="wow fadeInDown" data-wow-delay=".2s">Interested in working with us? <br class="hidden-xs"> Don't hesitate, reach out!</h1>
	                    <a class="btn btn-action wow fadeInDown" data-wow-delay=".3s" href="contact">Contact</a>
	                </div>
	            </div>

                <div class="project-nav">
                  <div class="left-nav">
                    <a href="google"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Google</span></a>
                  </div>
                  <div class="right-nav">
                    <a href="spotify"><span>Spotify</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>







          </div><!-- Project Single -->
        </div>
@endsection
