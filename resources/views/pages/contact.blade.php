@extends('layouts.pages')

@section('content')
    <div class="container nopadding">
          <div class="contact">
            <div class="contact-intro">
              <div class="col-md-6">
                <h1 class="wow fadeInDown" data-wow-delay="1.2s">You know how to reach us. Don't you? </h1>
                <p class="wow fadeInDown" data-wow-delay="1.3s">
                  With the right techniques and targeting we are able to find your Future Fans. Let us know where and how you want us to find them, and we will make sure you do!
                </p>
                <a class="btn btn-action wow fadeInDown" data-wow-delay=".3s" href="mailto:hello@futurefanbase.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> Let's talk</a>
              </div>
            </div>
            <div class="col-md-8">
              {{-- <form class="wow fadeIn" data-wow-delay="1.4s" id="contact-form" method="post" action="assets/php/contact.php">
                <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="form_name">Firstname</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname " required="required">
                      <div class="help-block with-errors"></div>
                    </div>
                                <div class="col-md-6">
                                        <label for="form_lastname">Lastname</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Your lastname" required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                                <div class="col-md-6">
                                        <label for="form_email">Email</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email " required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                                <div class="col-md-6">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone number">
                        <div class="help-block with-errors"></div>
                    </div>
                                <div class="col-md-12">
                                        <label for="form_message">Message</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message " rows="4" required="required"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                                <div class="col-md-12">
                                        <input type="submit" class="btn btn-send" value="Send message">
                                </div>
                                <div class="col-md-12">
                                        <p class="text-muted"><strong>*</strong> Required.</p>
                                </div>
                            </div>
                        </div>
                      </form> --}}
            </div>
            <div class="col-md-12">
              <div class="contact-details text-center">
                <i class="fa fa-home" aria-hidden="true"></i>
                <hr>
                {{-- <div class="col-sm-4 wow fadeInDown" data-wow-delay=".1s">
                  <h1>Landstraat 154, 1401 ET <br>
                      Bussum, the Netherlands
                  </h1>
                </div> --}}
                <div class="col-sm-offset-4 col-sm-4 wow fadeInDown" data-wow-delay=".2s">
                  <h1>+31-614442666</h1>
                  <h1>hello@futurefanbase.com</h1>
                </div>
                {{-- <div class="col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                  <h1>24/7 client support</h1>
                  <h1>support@futurefanbase.com</h1>
                </div> --}}
              </div>
            </div>

          </div><!-- Contact -->
        </div>
@endsection
