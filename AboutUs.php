<!DOCTYPE html>
<html lang="en">
<?php
require './componets/head.php';
?>

<body id="body">

    <!--==========================
    Top Bar
  ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a
                    href="mailto:info@Commercial-it-services.com">info@Commercial-it-services.com</a>
                <i class="fa fa-phone"></i> +26 097 35058
            </div>
            <div class="social-links float-right">
                <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>-->
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!--==========================
    Header
  ============================-->
    <?php
  require './componets/header.php';
  ?>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->


    <main id="main">

        <!--==========================
      About Section
    ============================-->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="asset/img/about-img.png" alt="">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>About Us</h2>
                        <h3>CITS is a wholly Zambian owned company incorp orated in Zambia in the year 2007. It was
                            established to provide
                            international standards in IT consulting, integration, advisory and audit services. The
                            company has been established by
                            highly qualified young and dynamic Zambians who have identified a niche in the IT industry.
                        </h3>

                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> <strong>Innovation:</strong> CITS often
                                value innovation and strive to stay at the forefront of technological advancements.
                                Making sure our customers get the best Solutions the market has to offer.</li>
                            <li><i class="ion-android-checkmark-circle"></i> <strong>Quality:</strong> Delivering
                                high-quality products and services is a common value in CITS, as technology is expected
                                to work reliably and efficiently.</li>
                            <li><i class="ion-android-checkmark-circle"></i> <strong>Customer-Centricity:</strong> We
                                focus on understanding and meeting the needs of customers. Providing excellent customer
                                service and building long-term relationships Which is one of our core values.</li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- #about -->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <p>CITS allows business enterprises, to become more productive, more efficient, and effective
                        through better utilization
                        of Information Technology. CITS believes that only by partnering and understanding the business
                        objectives of an
                        enterprise can we truly assist the organization to come up with the best technology plan,
                        architecture, infrastructure
                        and direction.
                        CITS assists organizations to align IT with the core business objectives to gain maximum benefit
                        from the technology
                        in place and also lower the total cost of ownership (TCO).</p></br>
                    <h2>Company Standards</h2>
                    <p>In order to deliver the best services for our clients, CITS has adopted stringent industry
                        standards and manufacturer
                        approved methodologies for ICT infrastructures. CITS has adopted leading ICT standards
                        including:</p>
                    <div class="content">

                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i>Control Objectives for ICT (CObIT). <a
                                href="http://www.cobit.com">www.cobit.com.</a></li>
                        <li><i class="ion-android-checkmark-circle"></i>IT Service Management Framework. <a
                                    href="http://www.itil.com">www.itil.com.</a></li>
                        <li><i class="ion-android-checkmark-circle"></i>Microsoft Solutions Framework. <a
                                    href="http://www.mof.com">www.mof.com.</a></li>
                        <li><i class="ion-android-checkmark-circle"></i>Industry and Vendor Certifications for engineers as
                                well as continuing professional education
                                for the value added management of the Information Systems Lifecycle.</li>
                    </ul>
                    </div>
                    
<p>These methodologies have been developed over a prolonged period and have been proven to deliver
                    the best results
                    from information technology infrastructures. By adopting these methodologies and applying our
                    vast hands on field
                    experience, we ensure that we provide clients with all round services to help them move in the
                    right direction and ensure
                    maximum usage and returns from any technology investment.</p>
                    
                </div>
            </div>
        </section>

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>Have questions or need assistance? Contact us today for expert IT support and solutions. Your
                        success is our priority.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>No. 5 Mungulube Road, Northmead, Lusaka, Zambia</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+26 097 3505885</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@commercial-it-services.com">info@commercial-it-services.com</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->

    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="asset/js/main.js"></script>




</body>

</html>