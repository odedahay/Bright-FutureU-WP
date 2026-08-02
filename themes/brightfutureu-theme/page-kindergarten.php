<?php get_header();

while (have_posts()) {
    the_post(); ?>

    <main class="program-page program-page-kindergarten">
        <section class="program-hero" data-node-id="385:1484" data-name="Header">
            <div class="container program-hero-grid">
                <div class="program-hero-copy">
                    <div class="program-age-row">
                        <span class="program-icon-bubble kindergarten-bubble">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/toy_kindergarten.svg')); ?>" alt="" />
                        </span>
                        <span class="program-age-pill">4.5 up to 6 years</span>
                    </div>
                    <h1><span>Kindergarten</span> Program</h1>
                    <p>A dynamic, play-based learning environment where children build confidence, strengthen literacy and numeracy skills, develop independence, and prepare for a successful transition to elementary school.</p>
                </div>
                <div class="program-hero-media" aria-hidden="true">
                    <picture>
                        <source media="(max-width: 700px)" srcset="assets/program-banner-preschool-m.jpg" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/program-banner-kindergarten-d.jpg')); ?>" alt="" />
                    </picture>
                </div>
            </div>
        </section>

        <section class="section-brand" aria-label="Program highlights">
            <div class="brand-item">
                <span><img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-care.svg')); ?>" alt="" /></span>
                <p>Licensed Alberta Child Care</p>
            </div>
            <div class="brand-item">
                <span><img src="<?php echo esc_url(get_theme_file_uri('/assets/align-justify.svg')); ?>" alt="" /></span>
                <p>Full-day Program</p>
            </div>
            <div class="brand-item">
                <span><img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-ratio.svg')); ?>" alt="" /></span>
                <p>Low Teacher-to-Child Ratio</p>
            </div>
            <div class="brand-item">
                <span><img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-playground.svg')); ?>" alt="" /></span>
                <p>Flexible Full &amp; Part-Time Programs</p>
            </div>
        </section>

        <section class="program-focus" data-node-id="385:1534" data-name="Seaction - Programs">
            <div class="container program-focus-grid">
                <div>
                    <h2>Key Developmental Focus</h2>
                    <div class="focus-card-grid">
                        <article class="focus-card focus-card-purple">
                            <span class="focus-icon">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/emotional-icon.svg')); ?>" />
                            </span>
                            <h3>Emotional regulation and self-control</h3>
                            <p>Building confidence and emotional resilience</p>
                        </article>
                        <article class="focus-card focus-card-orange">
                            <span class="focus-icon">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/social-icon.svg')); ?>" />
                            </span>
                            <h3>Social interactions and conflict resolution</h3>
                            <p>Developing teamwork and problem-solving skills</p>
                        </article>
                        <article class="focus-card focus-card-teal">
                            <span class="focus-icon">

                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/readiness-icon.svg')); ?>" />
                            </span>
                            <h3>Independence and school readiness</h3>
                            <p>Preparing for confident, independent learning</p>
                        </article>
                        <article class="focus-card focus-card-yellow">
                            <span class="focus-icon ">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/advanced-literacy-numeracy.svg')); ?>" />
                            </span>
                            <h3>Advanced literacy and numeracy</h3>
                            <p>Strengthening reading, writing, and math</p>
                        </article>
                    </div>
                </div>
                <aside class="program-cta-panel">
                    <h2>Give Your Child a Caring Start</h2>
                    <p>Don't miss out on the opportunity to provide your child with a high-quality early childhood education. Enroll them in Bright Future U Early Learning Academy Child Care today and watch them thrive!</p>
                    <h3>Ready to Visit Bright Future U?</h3>
                    <p>Visit our classrooms and discover how our Kindergarten Program builds confidence, independence, and school readiness through play.</p>
                    <div class="program-panel-actions">
                        <a class="button" href="index.html#tour">Book a Tour <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                        <a class="button button-outline" href="#contact">Contact Us <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                    </div>
                </aside>
            </div>
        </section>

        <section class="program-why" data-node-id="385:1576" data-name="Seaction - Programs">
            <div class="container program-why-grid">
                <div class="program-why-copy">
                    <h2>Why This Program</h2>
                    <p>Kindergarten is a full-day program that prepares children for the academic world by strengthening their literacy, numeracy, and social skills. These activities not only reinforce academic concepts but also teach independence, problem-solving, and emotional management, which are essential for future learning and social interactions.</p>
                    <h3>A Day in Our Toddlers Classroom</h3>
                    <ul class="program-check-grid">
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Morning Welcome</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Circle Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Literacy Activities</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Numeracy & Discovery</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Creative Play</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Values-Based Story & Reflection</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Snack Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Nap Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Outdoor Exploration</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Story Time </li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Science Experiment </li>
                    </ul>
                </div>
                <img class="program-why-image" src="<?php echo esc_url(get_theme_file_uri('/assets/why-this-program-kindergarten.jpg')); ?>" alt="Toddlers learning through guided play in a classroom" />
            </div>
        </section>

        <section class="program-awards" data-node-id="385:1611" data-name="Section-Marketing">
            <div class="container awards-card">
                <div class="award-item">
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/about-award.png')); ?>" alt="Consumer Choice Award 2026 Southern Alberta" />
                    <div>
                        <h2>Consumer<br />Choice Award 2026</h2>
                        <p>Proud recipient of the 2026 Consumer Choice Award for Child Care in Southern Alberta</p>
                    </div>
                </div>
                <div class="award-item license-item">
                    <span class="icon-bubble"><img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-shield-check.svg')); ?>" alt="" /></span>
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