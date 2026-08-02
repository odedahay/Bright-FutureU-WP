<?php get_header();

while (have_posts()) {
    the_post(); ?>


    <main class="program-page">
        <section class="program-hero" data-node-id="385:769" data-name="Header">
            <div class="container program-hero-grid">
                <div class="program-hero-copy">
                    <div class="program-age-row">
                        <span class="program-icon-bubble">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/pediatrics_32dp_1F1F1F_FILL0_wght400_GRAD0_opsz40.svg')); ?>" />
                        </span>
                        <span class="program-age-pill">12-18 months</span>
                    </div>
                    <h1><span>Infant</span> Program</h1>
                    <p>A warm, safe, and nurturing environment where infants begin to explore the world through sensory play, gentle routines, and caring relationships.</p>
                </div>
                <div class="program-hero-media" aria-hidden="true">
                    <picture>
                        <source media="(max-width: 700px)" srcset="<?php echo esc_url(get_theme_file_uri('/assets/infant-banner-mobile.jpg')); ?>" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/infant-banner.jpg')); ?>" alt="" />
                    </picture>
                </div>
            </div>
        </section>

        <section class="section-brand" aria-label="Program highlights">
            <div class="brand-item">
                <span>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-care.svg'))?>" alt="" />
                </span>
                <p>Licensed Alberta Child Care</p>
            </div>
            <div class="brand-item">
                <span>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/align-justify.svg')) ?>" alt="" />
                </span>
                <p>Full-day Program</p>
            </div>
            <div class="brand-item">
                <span>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-ratio.svg')); ?>" alt="" />
                </span>
                <p>Low Teacher-to-Child Ratio</p>
            </div>
            <div class="brand-item">
                <span><img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-playground.svg')); ?>" alt="" /></span>
                <p>Flexible Full &amp; Part-Time Programs</p>
            </div>
        </section>

        <section class="program-focus" data-node-id="385:814" data-name="Seaction - Programs">
            <div class="container program-focus-grid">
                <div>
                    <h2>Key Developmental Focus</h2>
                    <div class="focus-card-grid">
                        <article class="focus-card focus-card-purple">
                            <span class="focus-icon"><i class="ri-eye-line" aria-hidden="true"></i></span>
                            <h3>Sensory Exploration</h3>
                            <p>Stimulating curiosity through sensory play</p>
                        </article>
                        <article class="focus-card focus-card-orange">
                            <span class="focus-icon"><i class="ri-group-line" aria-hidden="true"></i></span>
                            <h3>Bonding &amp; Attachment</h3>
                            <p>Building trust through nurturing relationships</p>
                        </article>
                        <article class="focus-card focus-card-teal">
                            <span class="focus-icon">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/foot-print.svg')); ?>" />
                            </span>
                            <h3>Physical Development</h3>
                            <p>Developing strength through early movement</p>
                        </article>
                        <article class="focus-card focus-card-yellow">
                            <span class="focus-icon"><i class="ri-chat-smile-2-line" aria-hidden="true"></i></span>
                            <h3>Early Language Acquisition</h3>
                            <p>Developing communication through play and songs</p>
                        </article>
                    </div>
                </div>
                <aside class="program-cta-panel">
                    <h2>Give Your Child a Caring Start</h2>
                    <p>Don't miss out on the opportunity to provide your child with a high-quality early childhood education. Enroll them in Bright Future U Early Learning Academy today and watch them thrive!</p>
                    <h3>Ready to Visit Bright Future U?</h3>
                    <p>Come see our classrooms, meet our educators, and discover how we help little learners grow with confidence.</p>
                    <div class="program-panel-actions">
                        <a class="button" href="index.html#tour">Book a Tour <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                        <a class="button button-outline" href="#contact">Contact Us <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                    </div>
                </aside>
            </div>
        </section>

        <section class="program-why" data-node-id="385:852" data-name="Seaction - Programs">
            <div class="container program-why-grid">
                <div class="program-why-copy">
                    <h2>Why This Program</h2>
                    <p>Our Infant Program supports early brain development through age-appropriate activities, responsive care, and meaningful interaction. Children are encouraged to explore safely while building trust, confidence, and early communication skills.</p>
                    <h3>A Day in Our Infant Classroom</h3>
                    <ul class="program-check-grid">
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Morning Welcome</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Sensory Play</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Snack &amp; Feeding</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Nap Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Story Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Outdoor Exploration</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Music &amp; Movement</li>
                    </ul>
                </div>
                <img class="program-why-image" src="<?php echo esc_url(get_theme_file_uri('/assets/infant.jpg')); ?>" alt="Infant exploring a colorful classroom play mat" />
            </div>
        </section>

        <section class="program-awards" data-node-id="385:884" data-name="Section-Marketing">
            <div class="container awards-card">
                <div class="award-item">
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/about-award.png')); ?>" alt="Consumer Choice Award 2026 Southern Alberta" />
                    <div>
                        <h2>Consumer<br />Choice Award 2026</h2>
                        <p>Proud recipient of the 2026 Consumer Choice Award for Child Care in Southern Alberta</p>
                    </div>
                </div>
                <div class="award-item license-item">
                    <span class="icon-bubble">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-shield-check.svg')) ?>" alt="" />
                    </span>
                    <div>
                        <h2>Licensed Child Care</h2>
                        <p>Bright Future U is licensed and approved by Alberta Child Care</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php }
get_footer();  ?>