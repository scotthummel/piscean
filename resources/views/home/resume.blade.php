@extends('layouts.master')

@section('title', 'Scott Hummel\'s R&eacute;sum&eacute;')

@section('content')

    <h2>R&eacute;sum&eacute;</h2>

    <h1>Scott Hummel • <a href="mailto:scott@piscean.com">scott@piscean.com</a> • 602.330.8090</h1><br />

    <dl class="dl-horizontal">
        <dt>Objective:</dt>
        <dd>To obtain a career-oriented, full-time position as a back-end web developer for PHP/MySQL frameworks, with a chance to learn various APIs and languages.</dd>

        <dt>Education:</dt>
        <dd>Michigan State University, Bachelor of Arts, Journalism, 1983–1987.<br />
            Michigan State University, Post-Graduate work, Journalism, 1987–1988.<br />
            Art Institute of Phoenix, Web Design and Interactive Media, 2007– 2010.<br />
            Interface Technical Training, jQuery, iOS classes, 2011–2013.
        </dd>

        <dt>Honors:</dt>
        <dd>
            Alpha Beta Kappa honor society (gold key holder)<br />
            3.9 grade-point average (Art Institute of Phoenix, with highest honors)<br />
            Art Institute of Phoenix best portfolio award, 2010<br />
            Founder, Larazona Laravel meetup<br />
            Nomination for Student Success Stories (national Art Institutes recognition)<br />
        </dd>

        <dt>Skills:</dt>
        <dd>HTML/CSS, HTML5/CSS3, PHP/MySQL, CodeIgniter, Laravel, Zend Framework, Foundation, Twitter Bootstrap, jQuery/jQueryUI, jQueryMobile, VueJS, Redis, Google Maps, Google Places, Git, Subversion, Photoshop, Illustrator.  Proven ability to quickly become proficient in any framework, API or language.  Daily viewer of Laracasts.com.</dd>

        <dt>Experience:</dt>
        <dd>
            <ul class="experience">
                <li>
                    <h5>Spear Education</h5>
                    <h6><a href="http://www.speareducation.com" target="_blank">www.speareducation.com</a> • April 2013 – Present</h6>
                    <p>Worked on various aspects of several company websites.  Wrote controller actions and methods.  Wrote raw SQL queries.  Modeled data in ORM-like Zend syntax.  Performed a wide variety of back-end and some front-end tasks.  Responsible for debugging and refining senior developers' code.  Sites include:</p>
                    <ul>
                        <li>Spear Education, company flagship product.  Developed various enhancements throughout the rest of the Zend Framework 1.12 website. Developed order tracking system for dental learning modules.  Wrote various administrative components to manage consumer-facing assets.  Wrote HTML5/CSS3 markup.  Most code worked synchronously and asynchronously.  Heavy jQuery usage throughout site.  Helped write parts of content management system. Skinned with Twitter Bootstrap.</li>
                        <li>Sole developer of company intranet, writing raw SQL queries, constructing object-oriented methods and modeling data. Skinned intranet with Twitter Bootstrap.  Integrated into rest of website.</li>
                        <li>Led development of The Winter Laboratory site, in coordination with marketing department.  Implemented various comps into design of website.</li>
                        <li>Assisted in development of CEREC Doctors website.  Rewrote Google Maps methods for faster loading of large number of data markers. Coded various comps into page layouts for marketing pieces. Wrote a number of controller methods and database queries.</li>
                    </ul>
                </li>

                <li>
                    <h5>Universal Laser Systems</h5>
                    <h6><a href="http://www.ulsinc.com" target="_blank">www.ulsinc.com</a> • July 2010 – March 2013</h6>
                    <p> Developed multiple websites and web applications, including consumer-facing brand website, integrating a number of different APIs.  Designed and managed multiple databases. Wrote data models and controllers. Sites include:</p>
                    <ul>
                        <li>Global website, developed in CodeIgniter.  Site is available in 13 different languages and with dynamic maps.  Allows a customer to learn about products, configure them and contact a local channel partner through a customized sub-website.  Features dynamically generated Google Maps.</li>
                        <li>OEM Division website, developed in CodeIgniter, which comes with a “laser configurator” written in jQuery.</li>
                        <li>Digital marketing tools, developed in CodeIgniter.  Web application that allows company channel partners to perform a variety of tasks to market their companies on the web.  Also includes a full-featured email campaign web application built from the Campaign Monitor API.</li>
                        <li>Lead viewer, AMD-style web application developed in Laravel/Backbone with Require.js.  Wrote mini-CRM that pulls leads from database and allows staff to validate leads.</li>
                    </ul>
                </li>

                <!--<li>
                    <h5>Purple Lizard Boutique (Part-time)</h5>
                    <h6><a href="http://www.purplelizardboutique.com" target="_blank">www.purplelizardboutique.com</a> • July 2015 – Present</h6>
                    <p>Built a Paypal-driven online store for a local gift boutique in Laravel 5 (PHP/MySQL) and Twitter Bootstrap.  Site features a back-end so that boutique owners can manage the site menus and products.  Admin allows the creation, updating editing and deletion of menu items, store inventory and product photos.</p>
                </li>-->

                <li>
                    <h5>Lambda Phoenix Center (Part-time)</h5>
                    <h6><a href="http://www.lambdaphx.org" target="_blank">www.lambdaphx.org</a> • August 2007 – October 2010, September 2012 – Present</h6>
                    <p> Built a Laravel (PHP/MySQL) website for a local civic organization, using custom Stripe e-commerce system to register members.  Used Foundation for responsive web design to benefit mobile and desktop users. Built custom content management system to manage membership.  Developed user management system.  At its core is a custom, object-oriented sub-framework that drives the rest of the framework.</p>
                </li>

                <li>
                    <h5>Spring Break, Inc. (Part-time)</h5>
                    <h6><a href="http://www.azspringbreak.org" target="_blank">www.azspringbreak.org</a> • July 2006 – July 2011, October 2012 – April 2014</h6>
                    <p>Built a Laravel (PHP/MySQL) website for a local events-oriented organization.  Used Foundation for responsive web design.  Built a content management system to administer site.  At its core is a custom, object-oriented sub-framework that drives the rest of the framework.</p>
                </li>

                <li>
                    <h5> iTheatre Collaborative (Part-time)</h5>
                    <h6><a href="http://www.itheatreaz.org" target="_blank">www.itheatreaz.org</a> • January 2009 – Present</h6>
                    <p>Developed object-oriented Laravel website for a local theatre company.  Compiled LESS into CSS stylesheets.  Interface design with Twitter Bootstrap.  Recently ported to Laravel 5.  Hosted on Forge.  Next phase of development will include user accounts and online ticket sales through Stripe.  At its core is a custom, object-oriented sub-framework that drives the rest of the framework.</p>
                </li>

                <li>
                    <h5>Restoration Bodywork and Massage Therapy (Part-time)</h5>
                    <h6><a href="http://www.restorationbodyworkaz.com" target="_blank">www.restorationbodyworkaz.com</a> • March 2009 – Present</h6>
                    <p>Developed a Laravel website for a local massage therapist using the VueJS, Vue Router and Vue Resource frameworks.  Skinned in Twitter Bootstrap. At its core is a custom, object-oriented sub-framework that drives the rest of the framework.</p>
                </li>
            </ul>
        </dd>

        <dt>References:</dt>
        <dd>Available on request.</dd>
    </dl>

@stop