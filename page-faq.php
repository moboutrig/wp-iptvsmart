<?php
/**
 * Template Name: FAQ
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
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start FAQ Area -->
    <div class="faq-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="faq-accordion accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is IPTV?
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>IPTV stands for Internet Protocol Television. It is a system through which television services are delivered using the Internet protocol suite over a packet-switched network such as a LAN or the Internet, instead of being delivered through traditional terrestrial, satellite signal, and cable television formats.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What do I need to use IPTV?
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>To use IPTV, you need a high-speed internet connection and a device to watch it on, such as a smart TV, a computer, a smartphone, a tablet, or a dedicated IPTV box.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What channels can I watch?
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>We offer over 10,000 channels from all over the world, including sports, movies, news, and more. You can see a full list of our channels on our website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I watch on multiple devices?
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes, you can watch on up to 5 devices at the same time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->

<?php
get_footer();
