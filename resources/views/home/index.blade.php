@extends('layouts.home')

@section('title', 'Welcome')

@section('content')

    <div class="text-center cover">
        <!--<img class="img-responsive" src="{{ url('images/cover.jpg') }}" alt="Piscean at work" />-->
        <div class="get-started">
            <span class="hidden-xs">
                <p>Creativity and code, <br />our design for your solution.</p>
            </span>
            <a class="btn btn-primary btn-lg" href="/about">Get Started</a>
        </div>
    </div>

    <div class="aspects">
        <div class="row text-center top20">
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-industry home-icon"></i>
                <h3>Industry Standards</h3>
                <p>Keeping up with the latest standards and trends in the ever-changing web-development industry.</p>
            </div>
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-anchor home-icon"></i>
                <h3>Established</h3>
                <p>Established in the Phoenix area since 2006, working with a variety of non-profit and professional clients.</p>
            </div>

            <br clear="both" class="visible-xs"/>

            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-database home-icon"></i>
                <h3>Database-Driven</h3>
                <p>Building database-driven, dynamic web applications, so clients can edit copy on their own websites.</p>
            </div>
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-send home-icon"></i>
                <h3>Always Available</h3>
                <p>Always available to answer client questions and concerns by email or phone. Ask anything!</p>
            </div>
        </div>

        <div class="row text-center top20 clearfix">
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-share-alt home-icon"></i>
                <h3>Social Media</h3>
                <p>Social-media savvy, using writing skills to manage Facebook and Twitter accounts for several clients.</p>
            </div>
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-shopping-cart home-icon"></i>
                <h3>E-commerce</h3>
                <p>With Stripe and Paypal, integrating online stores and interactive shopping carts into web applications of any size.</p>
            </div>

            <br clear="both" class="visible-xs"/>

            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-sitemap home-icon"></i>
                <h3>SEO Optimized</h3>
                <p>All web applications are built with search-engine optimization in mind, so people can find you on the web.</p>
            </div>
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-tasks home-icon"></i>
                <h3>On Time/Budget</h3>
                <p>Well-organized so that projects are completed on-time and within budget to client specifications.</p>
            </div>
        </div>

        <div class="row text-center top20">
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-wrench home-icon"></i>
                <h3>Bug Fixes</h3>
                <p>Always willing to address issues that come up pre- and post-production. Fixes done promptly.</p>
            </div>
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-university home-icon"></i>
                <h3>College-Educated</h3>
                <p>College-educated, with two bachelor's degrees (one in web design and one in journalism).</p>
            </div>

            <br clear="both" class="visible-xs"/>

            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-thumbs-up home-icon"></i>
                <h3>Testimonials</h3>
                <p><a href="/testimonials">View testimonials</a> from several long-time clients and, of course, references are available.</p>
            </div>
            <div class="col-sm-3 col-xs-6">
                <i class="fa fa-rocket home-icon"></i>
                <h3>Client-focused</h3>
                <p>Committed to a client from initial meetings to launch, and throughout the maintenance phase.</p>
            </div>
        </div>
    </div>

@stop
