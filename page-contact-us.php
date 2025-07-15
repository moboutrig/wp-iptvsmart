<?php
/**
 * Template Name: Contact Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iptvsmart
 */

get_header();
?>

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <h3>Ready to get started?</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone Number *</label>
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" required data-error="Please enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Message *</label>
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p>We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.</p>

                        <ul class="contact-list">
                            <li><i class="ri-map-pin-line"></i> 121 King St, Melbourne VIC 3000, Australia</li>
                            <li><i class="ri-phone-line"></i> <a href="tel:1-541-754-3010">1-541-754-3010</a></li>
                            <li><i class="ri-mail-line"></i> <a href="mailto:hello@pakap.com">hello@pakap.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

<?php
get_footer();
