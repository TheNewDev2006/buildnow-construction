<!-- Footer-section Start -->
<?php require_once dirname(__FILE__) . '/../config/Personalization.php'; ?>
<footer class="footer-section-5 bg-cover" style="background-image: url(assets/img/home-5/footer-bg.jpg);">
    <div class="right-shape">
        <img src="assets/img/home-5/piler-2.png" alt="img">
    </div>
    <div class="container">
        <div class="footer-wrapper style-3">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <a href="index.php" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;color:#fff;">
                                <span style="display:inline-flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:50%;background-color:<?php echo htmlspecialchars(Personalization::get('primary_color'), ENT_QUOTES, 'UTF-8'); ?>;color:#fff;font-weight:700;letter-spacing:1px;line-height:1;"><?php echo htmlspecialchars(Personalization::getBusinessInitials(), ENT_QUOTES, 'UTF-8'); ?></span>
                                <span style="font-size:16px;font-weight:700;letter-spacing:0.5px;text-transform:uppercase;color:#fff;"><?php echo htmlspecialchars(Personalization::get('business_name'), ENT_QUOTES, 'UTF-8'); ?></span>
                            </a>
                        </div>
                        <div class="footer-contact">
                            <p>
                                <?php echo htmlspecialchars(Personalization::get('about_description'), ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                            <h5>Follow Us:</h5>
                            <div class="social-list-3">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-light fa-basketball"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h4>About Us</h4>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="contact.php">
                                    Support Centre
                                </a>
                            </li>
                            <li>
                                <a href="team.details.php">
                                    Our Team
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    Our Solutions
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    Why Choose Us
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h4>Our Services</h4>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="service-details.php">
                                    Architecture Design
                                </a>
                            </li>
                            <li>
                                <a href="service-details.php">
                                    Building Renovation
                                </a>
                            </li>
                            <li>
                                <a href="service-details.php">
                                    Building Construction
                                </a>
                            </li>
                            <li>
                                <a href="service-details.php">
                                    Flooring & Roofing
                                </a>
                            </li>
                            <li>
                                <a href="service-details.php">
                                    General Contracting
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 ps-xxl-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="footer-widget-items footer-contact-form">
                        <div class="footer-shape">
                            <img src="assets/img/home-5/footer-shape.png" alt="img">
                        </div>
                        <div class="footer-shape-2">
                            <img src="assets/img/home-5/footer-shape-2.png" alt="img">
                        </div>
                        <div class="icon">
                            <img src="assets/img/home-5/icon/09.svg" alt="img">
                        </div>
                        <h3>Sign Up to Our Newsletter</h3>
                        <p>
                            Subscribe to our Newsletter and Event right now to be updated
                        </p>
                        <form action="#">
                            <input type="text" placeholder="Your email">
                            <button class="theme-btn-2" type="submit">
                                Subscribe Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-5">
        <div class="container">
            <div class="footer-wrapper-5">
                <p class="wow fadeInUp" data-wow-delay=".3s">
                    Copyright © 2026 <?php echo htmlspecialchars(Personalization::get('business_name'), ENT_QUOTES, 'UTF-8'); ?>. All Rights Reserved.
                </p>
                <img src="assets/img/home-5/group-shape.png" alt="img" class="wow fadeInUp" data-wow-delay=".5s">
            </div>
        </div>
    </div>
</footer>