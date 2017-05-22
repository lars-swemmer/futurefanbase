@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

<div class="pricing-3-options-section">
    <div class="container">
      <div class="row header">
        <div class="col-md-8 col-md-offset-2">
          <h3>Pricing</h3>
          <p>Future Fanbase has a clear pricing policy. Our prices are based on a responsibility and implementation fee. We work on a ‘pay per campaign’ level. For long term agreements we can offer special discounts. <br /><br />See the summary.</p>
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
            <th>Summary Future Fanbase Fee</th>
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
            <td>Minimum spend</td>
            <td>€3500</td>
            <td>€1 p/d</td>
            <td>€1 p/d</td>
            <td>€5 p/d</td>
            <td>€5 p/d</td>
            <td>€1 p/d</td>
          </tr>
          <tr>
            <td>Responsibility fee</td>
            <td><strong>5%</strong></td>
            <td><strong>5%</strong></td>
            <td><strong>5%</strong></td>
            <td><strong>5%</strong></td>
            <td><strong>5%</strong></td>
            <td><strong>5%</strong></td>
          </tr>
          <tr>
            <td>Basic campaign</td>
            <td><strong>€175</strong></td>
            <td><strong>€135</strong></td>
            <td><strong>€125</strong></td>
            <td><strong>€95</strong></td>
            <td><strong>€95</strong></td>
            <td><strong>€85</strong></td>
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
            <td><strong>Extra narrowing</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>- add per extra 5 placements</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€8.50</td>
            <td>€8.50</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>- add per extra 5 interests/groups</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
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
            <td><strong>Extra ad group Basic</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Per extra ad group: Country</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>on request</td>
            <td>on request</td>
            <td>€19.50</td>
            <td>€19.50</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>- add per 5 countries</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
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
            <td><strong>Extra ad group Advanced</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Per extra ad group: interests</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€22.50</td>
            <td>€22.50</td>
            <td>€19.50</td>
            <td>€19.50</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>- add per 5 interests</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td>€7.50</td>
            <td><i class="fa fa-times" aria-hidden="true"></i></td>
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
            <td><strong>Per extra month</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Basic Campaign</td>
            <td>€25</td>
            <td>€50</td>
            <td>€50</td>
            <td>€45</td>
            <td>€45</td>
            <td>€35</td>
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
            <span class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
          </div>
          <div class="hexagon">
            <span class="icon"><i class="fa fa-archive" aria-hidden="true"></i></span>
          </div>
          <div class="hexagon">
            <span class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
          </div>
          <div class="hexagon">
            <span class="icon"><i class="fa fa-calculator" aria-hidden="true"></i></span>
          </div>
          <div class="hexagon">
            <span class="icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span>
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
              <h4>More options, extra’s and discount offers</h4>
              <p>Are on request, here are some examples: </p>
              	<ul>
              		<li>More targeting options/ad groups</li>
              		<li> Data implementation </li>
              		<li> Set up of remarketing lists </li>
              		<li>A/B testing </li>
              		<li>Conversion Measures</li>
              		<li>Audience creation (custom/lookalike)</li>
              		<li>Long term discounts </li>
              	</ul>
            </div>
            <div class="section">
              <h4>Basic Campaign Implementation</h4>
              <p>A basic campaign includes:</p>
              <ul>
                <li>1 campaign type/format</li>
                <li>1 set of basic targeting tools (age; countries; gender; languages*)</li>
                <li>1 advanced targeting option (narrow by: interests, remarketing and others*) </li>
                <li>1 basic ad type (can include multiple advertisements*)</li>
                <li>1 report</li>
                <li>Running for 1-30 days</li>
              </ul>
              <p>You pay additional prices when you need more specific tools than what’s included in the basic campaign. </p>
              <p>*Contact us to see detailed specifics.</p>
            </div>
            <div class="section">
              <h4>Reporting</h4>
              <p>
                When you run a campaign through Future Fanbase you will receive a monthly report. This will give you detailed insights on your budget, performance and achieved objectives. If you’re too eager and can’t wait to see the results, you can always ask us for updates in the mean time. 
              </p>
            </div>
            <div class="section">
              <h4>Fee Calculation</h4>
              <p>
               Together we decide on the right strategy to reach your objectives. After determining the campaign type, platforms and formats, we can calculate our fee.
              </p>
              <p>
                For example:<br />
                Objective: Facebook Growth <br />
                Advertising Platform: Facebook <br />
                Budget: €4000; Basic Campaign; 6 months <br />
                <br />
                 Responsibility percentage: €200 <br />
                Basic campaign Facebook: €95 <br />
                Extra five months: €225 <br />
                Total fee: €520<br />
              </p>
            </div>
            <div class="section">
              <h4>Future Fanbase Subscriptions</h4>
              <p>
               Clients of Future Fanbase receive a discount on the campaign fee. Depending on the marketing objective and the subscription service you have, your discount can go up to 10%.  
              </p>
              <p>
                Also, there are no additional costs for our subscribers when it comes to data implementation and conversion measures. 
              </p>
            </div>
            <div class="section">
              <h4>Custom Offers </h4>
              <p>
                Does your marketing objective require special needs? We offer custom made solutions. Custom made solutions require custom pricing. Let’s talk about what it is you are looking for so we can send you a suitable offer. 
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