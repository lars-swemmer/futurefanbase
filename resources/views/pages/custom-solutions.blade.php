@extends('layouts.pages')

@include('layouts.default-nav')

@section('content')

<div class="services-showcase-section">
    <div class="container">
      <div class="row header" style="padding-top: 0; border: none">
        <div class="col-md-12">
          <h3>Custom Solutions</h3>
          <p style="width: 100%;">
            Do your marketing objectives require special needs? We can offer you custom made solutions when it comes to data needs, website development, content creation or new campaign types. Let us know your wishes and together we can create something unique.
          </p>
        </div>
      </div>
      <hr>
      <div class="row features">
        <div class="col-md-12 feature">
          <img src="images/circle-icons/full-color/globe.png" alt="globe" />
          <div class="info">
            <strong>Data & Website Solutions </strong>
            <p>With our in-house data and website skills we can offer custom made solutions when it comes to development. For bigger projects we can team up with other developers within our network. If you you have some specific data, product or website wishes, let us know what it is you’re looking for. </p>
          </div>
        </div>
        <div class="col-md-12 feature">
          <img src="images/circle-icons/full-color/location.png" alt="location" />
          <div class="info">
            <strong>Content Creation</strong>
            <p>We have a large network consisting designers, video directors, video editors and website designers. When you’re in need of unique and specific content, we can build a special team and add real value to your online marketing campaign.</p>
          </div>
        </div>
      </div>
      <div class="row features">
        <div class="col-md-12 feature">
          <img src="images/circle-icons/full-color/smartphone.png" alt="smartphone" />
          <div class="info">
            <strong>Campaign Types </strong>
            <p>Future Fanbase uses several platforms in order to grow your fanbase and market your message. If you have other channels you want to promote, or promote your message on. Let us know so we can advise you on whether or not to add certain platform and campaign types to your marketing mix. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection