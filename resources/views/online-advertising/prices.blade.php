@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

<div class="pricing-3-options-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-8 col-md-offset-2">
          <h3>Pricing</h3>
          <p>We have a clear pricing policy. Our fees are based on a small percentage of the campaign budget (responsibility fee) and on the combination of platform types x targeting methods x the number of ad groups and formats (implementation fee).<br />See the summary.</p>
        </div>
      </div>

      <style type="text/css">
        .fa-times {
          font-size: 10px;
          color: #333;
        }
      </style>

      <div class="row" style="margin-top: 40px;">
      	<div class="col-md-12">
      		<table class="table table-responsive" style="font-size: 12px; border: 1px solid #ddd;">
        <thead>
          <tr>
            <th>Future Fanbase Fee per platform type</th>
            <th>Spotify</th>
            <th>YouTube</th>
            <th>Google Adwords</th>
            <th>Facebook</th>
            <th>Instagram</th>
            <th>Twitter</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Responsibility fee: Campaign budget*</td>
            <td>5%</td>
            <td>5%</td>
            <td>5%</td>
            <td>5%</td>
            <td>5%</td>
            <td>5%</td>
          </tr>
          <tr>
            <td>Minimum spend</td>
            <td>High >4000</td>
            <td>Low >1 p/d</td>
            <td>Low >1 p/d</td>
            <td>Low >5 p/d</td>
            <td>Low >5 p/d</td>
            <td>Low >1 p/d</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><strong>Implementation per platform</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Basic implementation fee*</td>
            <td>€200</td>
            <td>€150</td>
            <td>€150</td>
            <td>€100</td>
            <td>€100</td>
            <td>€100</td>
          </tr>
          <tr>
            <td>Per extra advanced targeting (narrow)</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€30</td>
            <td>€30</td>
            <td>€20</td>
            <td>€20</td>
            <td>€25</td>
          </tr>
          <tr>
            <td>Per extra ad group (advanced targeting)</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€35</td>
            <td>€35</td>
            <td>€25</td>
            <td>€25</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Per extra ad type</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€35</td>
            <td>€30</td>
            <td>€25</td>
            <td>€25</td>
            <td>€20</td>
          </tr>
          <tr>
            <td>Per extra month (reporting/optimizing)</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€50</td>
            <td>€50</td>
            <td>€40</td>
            <td>€40</td>
            <td>€25</td>
          </tr>
          <tr>
            <td>Implementation data*</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€25</td>
            <td>€25</td>
            <td>€30</td>
            <td>€30</td>
            <td>€20</td>
          </tr>
          <tr>
            <td>A/B Testing</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
          </tr>
          <tr>
            <td>Conversion Measures</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
          </tr>
          <tr>
            <td>In- exclusion specific audiences</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
          </tr>
          <tr>
            <td>Set up: Remarketing lists/audiences</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
            <td>on request</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><strong>More options</strong></td>
            <td><a href="mailto:hello@futurefanbase.com">Contact us</a></td>
            <td><a href="mailto:hello@futurefanbase.com">Contact us</a></td>
            <td><a href="mailto:hello@futurefanbase.com">Contact us</a></td>
            <td><a href="mailto:hello@futurefanbase.com">Contact us</a></td>
            <td><a href="mailto:hello@futurefanbase.com">Contact us</a></td>
            <td><a href="mailto:hello@futurefanbase.com">Contact us</a></td>
          </tr>
        </tbody>
      </table>
      	</div>
      </div>

    </div>
</div>

<div class="services-tabs">
    <div class="container">
      <div class="row">
        <div class="col-md-12 hexagons">
          <div class="hexagon active">
            <span class="icon brankic-monitor"></span>
          </div>
          <div class="hexagon">
            <span class="icon brankic-phone"></span>
          </div>
          <div class="hexagon">
            <span class="icon brankic-lamp3"></span>
          </div>
          <div class="hexagon">
            <span class="icon brankic-pictures3"></span>
          </div>
          <div class="hexagon">
            <span class="icon brankic-upload2"></span>
          </div>
          <div class="hexagon">
            <span class="icon brankic-tools"></span>
          </div>
        </div>        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="sections">
            <div class="section active">
              <h4>Marketing objective: A social growth campaign on Facebook</h4>
              	<ul>
              		<li>Platform: Facebook </li>
              		<li> Implementation: Basic</li>
              		<li> Budget: 1000</li>
              		<li></li>
              		<li>Responsibility fee of 5%: 50</li>
              		<li>Basic implementation: 100</li>
              		<li></li>
              		<li>Campaign budget: 1000</li>
              		<li>Future Fanbase fee: 150</li>
              	</ul>
            </div>
            <div class="section">
              <h4>Frontend development</h4>
              <p>
                I love making the stuff, that’s sort of the core of it. I love creating the stuff. It’s so satisfying to get from the beginning to the end, from a shaky nothing idea to something that’s well formed and the audience really likes. It’s like a drug: You keep trying to do it again and again and again. I’ve learned from experience that if you work harder at it, and apply more energy and time to it, and more consistency, you get a better result. It comes from the work.
                <br />
                This thing will work on any device, it has a very easy to understand documentation and is made with SASS.
              </p>
            </div>
            <div class="section">
              <h4>Responsive web design</h4>
              <p>
                We're always happy to offer support if you happen to have any doubts about anything, if you need some new stuff contact us.
              </p>
              <p>
                You have to roll up your sleeves and be a stonecutter before you can become a sculptor – command of craft always precedes art: apprentice, journeyman, master. <br />
                It doesn’t matter one damn bit whether fashion is art or not. You don’t question whether an incredible chef is an artist or not – his cakes are delicious and that’s all that matters.
              </p>
            </div>
            <div class="section">
              <h4>HTML & CSS Development</h4>
              <p>
                Well you’re in your little room and you’re working on something good but if it’s really good you’re gonna need a bigger room and when you’re in the bigger room you might not know what to do you might have to think of how you got started sitting in your little room.
              </p>
              <p>
                We're always happy to offer support if you happen to have any doubts about anything, if you need some new stuff contact us.
              </p>
            </div>
            <div class="section">
              <h4>Photoshop Mockups</h4>
              <p>
                I want everything we do to be beautiful. I don’t give a damn whether the client understands that that’s worth anything, or that the client thinks it’s worth anything, or whether it is worth anything. It’s worth it to me. It’s the way I want to live my life. I want to make beautiful things, even if nobody cares.
              </p>
              <p>
                We'll be adding some new stuff to make it even more awesome, if you have any idea please let us know.
              </p>
            </div>
            <div class="section">
              <h4>Retina display</h4>
              <p>
                Functionality is so over-valued in design, and we’ve kept design very small in that way. Functionality is the sheer minimum. If your house burns down, what do you take? The cat in the window that you got from your mother, or the chair you have?
              </p>
              <p>
                Simply are looking to sell digital goods or are interested in drop shipping — React has a complete solution in this.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="pricing-3-options-section">
    <div class="container">
<div class="row contact">
        <div class="col-md-12">
          <div class="wrapper clearfix">
            <h4>
              <a href="/contact">Contact us</a> to see the full list of possibilities, their corresponding prices and available discount offers.
            </h4>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection