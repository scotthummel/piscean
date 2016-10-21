<div id="outer-wrap">

    <div id="inner-wrap">

        <div id="wrap">

            <header id="navigation">

                <div class="container">

                    <a class="nav-btn" href="#nav" id="nav-open-btn"><span class="glyphicon glyphicon-align-justify"></span></a>

                    <!-- PISCEAN LOGO -->

                    <a href="/" class="brand"><img class="nav-logo" src="/images/piscean_logo.png" style="width: 110px; margin-top: 10px;" alt="Piscean" /></a>

                    <!-- NAVIGATION -->

                    <nav id="nav" role="navigation">

                        <div class="block">

                            <ul class="nav-primary">
                                <li>
                                    <a {{ (Request::is('about')) ? 'class=active' : '' }} href="/about">About</a>
                                </li>
                                <li>
                                    <a {{ (Request::is('portfolio/*')) ? 'class=active' : '' }} href="/portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a {{ (Request::is('resume')) ? 'class=active' : '' }} href="/resume">R&eacute;sum&eacute;</a>
                                </li>
                                <li>
                                    <a {{ (Request::is('testimonials')) ? 'class=active' : '' }} href="/testimonials">Testimonials</a>
                                </li>
                                <!--<li>
                                    <a href="/blog">Blog</a>
                                </li>-->
                                <li>
                                    <a {{ (Request::is('news')) ? 'class=active' : '' }} href="/news">News</a>
                                </li>
                                <li>
                                    <a {{ (Request::is('contact')) ? 'class=active' : '' }} href="/contact">Contact</a>
                                </li>
                            </ul>

                            <!-- CLOSE BUTTON -->

                            <a class="close-btn" id="nav-close-btn" href="#top">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>

                        </div>

                    </nav>

                    <div class="pull-right hidden-xs">

                        <a href="http://www.github.com/scotthummel" target="_blank"><img class="pull-right social-media" src="/images/github.png" alt="GitHub" /></a>

                        <a href="http://www.linkedin.com/in/scottehummel" target="_blank"><img class="pull-right social-media" src="/images/linkedin.gif" alt="LinkedIn" /></a>

                        <a href="http://www.twitter.com/piscean_digital" target="_blank"><img class="pull-right social-media" src="/images/twitter.png" alt="Twitter" /></a>

                        <a href="http://www.facebook.com/piscean.digital" target="_blank"><img class="pull-right social-media" src="/images/facebook.png" alt="Facebook" /></a>

                    </div>

                </div>

            </header>
