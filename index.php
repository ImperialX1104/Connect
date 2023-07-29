    <?php
    include('header.php');
    ?>
    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">
        <div class="wave">
            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Connect-App</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Find Love Amongst Friends: Connecting Hearts
                                with 'Connect'.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="features.html" class="btn btn-outline-white">Explore</a></p>
                        </div>
                        <div class="col-lg-4 iphone-wrap">
                            <img src="assets/img/phone_1.png" alt="MockUpImage1" class="phone-1" data-aos="fade-right">
                            <img src="assets/img/phone_2.png" alt="MockUpImage2" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Home Section ======= -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Features</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-chat"></i>
                            </div>
                            <h3 class="mb-3">Golbal Chat</h3>
                            <p>Engage in a global chat, connecting with people from all corners of the world.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="mb-3">Nearby Users</h3>
                            <p>Find and connect with users in your vicinity for exciting dating opportunities and
                                real-life
                                connections.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-lock"></i>
                            </div>
                            <h3 class="mb-3">End to End Encryption</h3>
                            <p> Data securely encrypted from sender to recipient, ensuring privacy and protection against unauthorized access.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section">

            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade">
                    <div class="col-md-6 mb-5">
                        <img src="assets/img/undraw_svg_1.svg" alt="Easy Steps to use the app" class="img-fluid">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">01</span>
                            <h3>Sign Up</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">02</span>
                            <h3>Create Profile</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">03</span>
                            <h3>Enjoy the app</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 me-auto">
                        <h2 class="mb-4">Seamlessly Communicate</h2>
                        <p class="mb-4"> Experience our dating app's seamless communication, effortlessly connecting you
                            with
                            potential matches to forge meaningful relationships and kindle lasting love and happiness.
                        </p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="assets/img/undraw_svg_2.svg" alt="Seamless Communication Feature" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <?php
        include('testimonial_section.php');
        include('cta_section.php');
        ?>

    </main><!-- End #main -->

    <?php
    include('footer.php');
    ?>