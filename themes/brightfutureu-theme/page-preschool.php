<?php get_header();

while (have_posts()) {
    the_post(); ?>

    <main class="program-page program-page-preschool">
        <section class="program-hero" data-node-id="385:1484" data-name="Header">
            <div class="container program-hero-grid">
                <div class="program-hero-copy">
                    <div class="program-age-row">
                        <span class="program-icon-bubble preschool-bubble">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/program-preschool-icon.svg')); ?>" alt="" />
                        </span>
                        <span class="program-age-pill">3-4.5 years</span>
                    </div>
                    <h1><span>Preschool</span> Program</h1>
                    <p>A stimulating, play-based environment where preschoolers develop confidence, creativity, problem-solving skills, and a lifelong love of learning.</p>
                </div>
                <div class="program-hero-media" aria-hidden="true">
                    <picture>
                        <source media="(max-width: 700px)" srcset="<?php echo esc_url(get_theme_file_uri('/assets/program-banner-preschool-m.jpg')) ?>" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/program-banner-preschool-d.jpg')); ?>" alt="" />
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
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/brain.svg')); ?>" />
                            </span>
                            <h3>Cognitive Skills </h3>
                            <p>Building early thinking and problem-solving</p>
                        </article>
                        <article class="focus-card focus-card-orange">
                            <span class="focus-icon">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/service-line.svg')); ?>" />
                            </span>
                            <h3>Social Skills</h3>
                            <p>Learning teamwork, sharing, and empathy</p>
                        </article>
                        <article class="focus-card focus-card-teal">
                            <span class="focus-icon">

                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/brush-line.svg')); ?>" />
                            </span>
                            <h3>Creativity and imagination</h3>
                            <p>Expressing ideas through creative play</p>
                        </article>
                        <article class="focus-card focus-card-yellow">
                            <span class="focus-icon">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/book-open-line.svg')); ?>" />
                            </span>
                            <h3>Early literacy and numeracy</h3>
                            <p>Exploring letters, numbers, and patterns</p>
                        </article>
                    </div>
                </div>
                <aside class="program-cta-panel">
                    <h2>Give Your Child a Caring Start</h2>
                    <p>Don't miss out on the opportunity to provide your child with a high-quality early childhood education. Enroll them in Bright Future U Early Learning Academy Child Care today and watch them thrive!</p>
                    <h3>Ready to Visit Bright Future U?</h3>
                    <p>Explore our engaging classrooms and see how we inspire curiosity, creativity, and confidence while preparing preschoolers for their next learning adventure.</p>
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
                    <p>Preschoolers begin to grasp concepts like numbers, shapes, and letters, so activities are designed to foster learning through play. These programs also support language development, cognitive skills, and socialization as children learn to work together, share, and express themselves creatively.</p>
                    <h3>A Day in Our Toddlers Classroom</h3>
                    <ul class="program-check-grid">
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Morning Welcome</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Circle Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Literacy Activities</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Numeracy & Discovery</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Values-Based Story & Reflection</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Snack Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Nap Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Story Time</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Creative Play</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Science Experiment </li>
                    </ul>
                </div>
                <img class="program-why-image" src="<?php echo esc_url(get_theme_file_uri('/assets/why-this-program-preschool.jpg')); ?>" alt="Toddlers learning through guided play in a classroom" />
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
                    <span class="icon-bubble"><img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-shield-check.svg'));?>" alt="" /></span>
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