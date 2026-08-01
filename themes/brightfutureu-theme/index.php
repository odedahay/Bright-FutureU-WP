<?php get_header(); ?>

<main>
    <section class="hero home-hero" style="--hero-image: url('<?php echo esc_url(get_theme_file_uri('/assets/header.png')); ?>');">
        <div class="hero-copy">
            <h1>Helping Little Minds <span>Grow With Confidence</span></h1>
            <p>Nurturing, play-based learning in a safe and caring environment for infants, toddlers, preschool and
                kindergarten children in Calgary.</p>
            <div class="hero-actions">
                <a class="button" href="#tour">Book a Tour</a>
                <a class="button button-outline" href="#programs">View Programs</a>
            </div>
            <div class="award">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/award.png')); ?>" alt="Consumer Choice Award 2026" />
                <div>
                    <strong>Consumer Choice Award 2026</strong>
                    <span>Southern Alberta</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section-brand" aria-label="Program highlights">
        <div class="brand-item">
            <span><img src="<?php echo get_theme_file_uri('/assets/icon-care.svg') ?>" alt="" /></span>
            <p>Licensed Alberta Child Care</p>
        </div>
        <div class="brand-item">
            <span><img src="<?php echo get_theme_file_uri('/assets/align-justify.svg') ?>" alt="" /></span>
            <p>Full-day Program</p>
        </div>
        <div class="brand-item">
            <span><img src="<?php echo get_theme_file_uri('/assets/icon-ratio.svg') ?>" alt="" /></span>
            <p>Low Teacher-to-Child Ratio</p>
        </div>
        <div class="brand-item">
            <span><img src="<?php echo get_theme_file_uri('/assets/icon-playground.svg') ?>" alt="" /></span>
            <p>Flexible Full &amp; Part-Time Programs</p>
        </div>
    </section>

    <section class="about section-band" id="about">
        <div class="container two-col">
            <div>
                <p class="eyebrow">About Bright Future U</p>
                <h2>Why Parents Choose Bright Future U</h2>
                <ul class="check-list">
                    <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Play-Based Learning</li>
                    <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Quality Christian-Based Childcare Centre</li>
                    <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Safe &amp; Nurturing Environment</li>
                    <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Small Class Sizes</li>
                    <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Flexible Care Options</li>
                </ul>
                <p class="muted">At Bright Future U Early Learning, we offer high-quality early education and care for
                    children ages 0 to 6.</p>
            </div>
            <img class="rounded-media" src="<?php echo get_theme_file_uri('/assets/about-intro.png') ?>" alt="Child playing in a bright classroom tunnel" />
        </div>
    </section>

    <section class="video-feature" id="tour">
        <div class="container feature-card">
            <div>
                <h2>See Bright Future U in Action</h2>
                <p>Take a look inside our classrooms, activities, and nurturing learning environment.</p>
                <a class="button" href="#contact">Virtual Tour</a>
            </div>
            <div class="video-thumb">
                <img src="<?php echo get_theme_file_uri('/assets/video.jpg') ?>" alt="Teacher working with children at a classroom table" />
                <button class="video-play" type="button" aria-label="Play virtual tour video"
                    data-video-url="https://www.youtube.com/embed/qvI9dQvm3SU?si=iwsRa55Yt_b7j004">
                    <span></span>
                </button>
            </div>
        </div>
    </section>

    <section class="programs" id="programs">
        <div class="container">
            <div class="section-heading">
                <h2>Our Programs</h2>
                <p>Discover a lifetime of learning at Bright Future U Early Learning Academy Child Care.</p>
            </div>
            <div class="program-grid">
                <article class="program-card">
                    <img src="<?php echo get_theme_file_uri('/assets/program-infant.svg') ?>" alt="" />
                    <h3>Infant</h3>
                    <p>0-19 months old</p>
                    <a class="program-cta" href="program-infant.html">Learn more <i class="ri-arrow-right-line"
                            aria-hidden="true"></i></a>
                </article>
                <article class="program-card">
                    <img src="<?php echo get_theme_file_uri('/assets/program-toddler.svg') ?>" alt="" />
                    <h3>Toddler</h3>
                    <p>19 months - 3 years old</p>
                    <a class="program-cta" href="program-toddler.html">Learn more <i class="ri-arrow-right-line"
                            aria-hidden="true"></i></a>
                </article>
                <article class="program-card">
                    <img src="<?php echo get_theme_file_uri('/assets/program-preschool.svg') ?>" alt="" />
                    <h3>Preschool</h3>
                    <p>3-5 years old</p>
                    <a class="program-cta" href="#">Learn more <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                </article>
                <article class="program-card">
                    <img src="<?php echo get_theme_file_uri('/assets/program-kindergarten.svg') ?>" alt="" />
                    <h3>Kindergarten</h3>
                    <p>Ages 5 and up</p>
                    <a class="program-cta" href="#">Learn more <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                </article>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container cta-card">
            <div>
                <h2>Ready to Visit Bright Future U?</h2>
                <p>Schedule a tour today.</p>
            </div>
            <div class="cta-actions">
                <a class="button" href="#contact">Book a Tour</a>
                <a class="button button-light" href="tel:8254384482">Call Us</a>
            </div>
            <ul>
                <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>No obligation</li>
                <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Meet our Teachers</li>
                <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Ask Questions</li>
                <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>See our classrooms</li>
            </ul>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-heading">
                <h2>What Parents Say</h2>
                <p>Hear from families who have experienced the LittleMinds difference.</p>
            </div>
            <div class="testimonial-grid">
                <!-- Elfsight Google Reviews | BFU Google Reviews -->
                <script src="https://static.elfsight.com/platform/platform.js" async></script>
                <div class="elfsight-app-52872b35-2120-4747-91c0-fca02c038962" data-elfsight-app-lazy></div>
            </div>
        </div>
    </section>

    <section class="events section-band" id="events">
        <div class="container">
            <div class="row-heading">
                <h2>Events &amp; Announcement</h2><a href="events.html">View All Articles <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="event-grid">
                <article class="event-card"><time><b>Jan</b>15</time>
                    <div>
                        <h3>Open House</h3>
                        <p class="mb-20">Join us for a school tour and information session.</p><a href="#">Learn more <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </article>
                <article class="event-card"><time><b>Jan</b>15</time>
                    <div>
                        <h3>Summer Camp</h3>
                        <p class="mb-20">Join us for a school tour and information session.</p><a href="#">Learn more <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </article>
                <article class="event-card"><time><b>Jan</b>15</time>
                    <div>
                        <h3>Parent Workshop</h3>
                        <p class="mb-20">Join us for a school tour and information session.</p><a href="#">Learn more <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="container">
            <div class="row-heading">
                <h2>Blog</h2><a href="#">View All Articles <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="<?php echo get_theme_file_uri('/assets/blog-1.jpg')?>" alt="" />
                    <div>
                        <h3>5 Ways Play Builds Early Literacy</h3>
                        <p class="mb-20">Foundational skills for reading, writing, and much more.</p>
                        <a class="blog-cta" href="#">Learn More <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                    </div>
                </article>
                <article class="blog-card"><img src="<?php echo get_theme_file_uri('/assets/blog-2.jpg') ?>" alt="" />
                    <div>
                        <h3>Preparing Your Child for Kindergarten</h3>
                        <p class="mb-20">Practical skills for routines, confidence, and school day steps.</p><a class="blog-cta"
                            href="#">Learn More <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                    </div>
                </article>
                <article class="blog-card"><img src="<?php echo get_theme_file_uri('/assets/blog-3.jpg') ?>" alt="" />
                    <div>
                        <h3>Choosing the Right Preschool</h3>
                        <p class="mb-20">What to look for when choosing a nurturing early learning program.</p><a class="blog-cta"
                            href="#">Learn More <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="faq-map">
        <div class="container faq-map-grid">
            <div>
                <div class="section-heading">
                    <h2>Frequently Asked Questions</h2>
                    <p>Find answers to common questions about our program and services.</p>
                </div>
                <div class="accordion">

                    <button type="button">
                        <span class="accordion-question">What are your hours of operation?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">We are open Monday through Friday from 6:30am to 6:00pm.</span>
                    </button>

                    <button type="button">
                        <span class="accordion-question">What age range of children do you care for?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">We care for children from 12 months to 6 years old.</span>
                    </button>
                    <button type="button" class="is-open_">
                        <span class="accordion-question">Do you offer part-time care?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">Yes, we offer part-time care options for families who need it.</span>
                    </button>
                    <button type="button">
                        <span class="accordion-question">What is the monthly tuition rate?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">
                            Full-time students: $326.25 (flat rate)<br>
                            Part-time students: $230 (flat rate)
                        </span>
                    </button>
                    <button type="button">
                        <span class="accordion-question">Are there any additional fees?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">
                            Yes, the following fees apply:<br>
                            Registration Fee: $100 (one-time fee)<br>
                            Deposit: $250
                        </span>
                    </button>
                    <button type="button">
                        <span class="accordion-question">Are meals provided?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">
                            No, meals are not provided. Parents are asked to pack healthy snacks and lunch for their child each day.
                        </span>
                    </button>
                    <button type="button">
                        <span class="accordion-question">How do you communicate with parents?</span>
                        <i class="ri-arrow-down-s-line" aria-hidden="true"></i>
                        <span class="accordion-answer">
                            We use the Brightwheel app to send updates and communicate with parents throughout the day.
                        </span>
                    </button>
                </div>
            </div>
            <div>
                <div class="section-heading">
                    <h2>Our Locations</h2>
                    <p>Get directions</p>
                </div>
                <iframe class="map" title="Google map showing Bright Future U location in Calgary"
                    src="https://www.google.com/maps?q=505%204th%20Ave%20SW%2C%20Calgary%2C%20AB%20T2P%200J8%2C%20Canada&output=embed"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>

<div class="video-modal" id="video-modal" aria-hidden="true">
    <div class="video-modal-backdrop" data-video-close></div>
    <div class="video-modal-dialog" role="dialog" aria-modal="true" aria-label="Bright Future U virtual tour video">
        <button class="video-modal-close" type="button" aria-label="Close video" data-video-close>
            <i class="ri-close-line" aria-hidden="true"></i>
        </button>
        <div class="video-modal-frame" data-video-frame></div>
    </div>
</div>


<?php get_footer(); ?>
