
<!--==========================
  Hero Section
============================-->

<section id="hero">
    <div class="hero-container">
        <div class="row container-fluid">
            <div class="col-md-7" style="margin-top: 50px;">
                <h1>Welcome to PetEx</h1>
                <h2>Pet Express an <strong>Adoption System</strong><br> for <strong>PAWS</strong></h2>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <img src="<?= $this->config->base_url() ?>images/logo/icon.png" style="height:50px;" alt="" />
                        <br><br>
                        <h4> <i class="fa fa-sign-in fa-lg"></i> Sign in to PetEx</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input class="form-control" type="text" placeholder="Username">
                            </div><br>
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                <input class="form-control" type="password" placeholder="Password">
                            </div><br>

                        </form>
                    </div> 
                    <div class="card-footer">
                        <center> 
                            <a class="btn btn-primary pull-left" href="#">
                                <i class="fa fa-refresh fa-lg"></i> Reset Password</a>
                            <a class="btn btn-success pull-right" href="#">
                                <i class="fa fa-send fa-lg"></i> Login</a>
                        </center>
                    </div>
                </div>
            </div>

        </div><br>
        <a href="#about" class="btn-get-started">Get Started</a>
    </div>
</section><!-- #hero -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <h2 class="title">Few Words About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Facts</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row counters">

                <div class="col-lg-4 col-6 text-center">
                    <span data-toggle="counter-up">232</span>
                    <p>Customers</p>
                </div>

                <div class="col-lg-4 col-6 text-center">
                    <span data-toggle="counter-up">521</span>
                    <p>Pets</p>
                </div>

                <div class="col-lg-4 col-6 text-center">
                    <span data-toggle="counter-up">521</span>
                    <p>Transactions</p>
                </div>

            </div>

        </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Services</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href="#services"><i class="fa fa-paw"></i></a></div>
                        <h4 class="title">Pet Adoption</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><a href="#services"><i class="fa fa-line-chart"></i></a></div>
                        <h4 class="title">My Progress</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon"><a href="#services"><i class="fa fa-cog"></i></a></div>
                        <h4 class="title">Manage your Pet</h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <h3 class="cta-title">PetEx Pet Manager</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5 text-center">
                    <img src="<?= $this->config->base_url() ?>images/logo/mobilePrev2.png" alt="" />
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Adoptables</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>


        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Team</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url() ?>images/team/jcMatFinal.png" alt=""></div>
                        <h4>Juan Carlo Valencia</h4>
                        <span>Project Manager</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url() ?>images/team/markusMatFinal.png" alt=""></div>
                        <h4>Angelo Markus Zaguirre</h4>
                        <span>Webmaster</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url() ?>images/team/allenMatFinal.png" alt=""></div>
                        <h4>Allen Torres</h4>
                        <span>Quality Assurance</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url() ?>images/team/joshMatFinal.png" alt=""></div>
                        <h4>Joshua Vitug</h4>
                        <span>Writer And Editor</span>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Contact</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
        </div>

        <div id="google-map" data-latitude="14.6041612" data-longitude="120.9864179"></div>

        <div class="container wow fadeInUp">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>