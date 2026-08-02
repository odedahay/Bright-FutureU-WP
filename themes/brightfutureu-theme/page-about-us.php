<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

    <main class="about-page">
        <!-- <section class="hero about-hero" style="--hero-image: url('<?php //echo esc_url(get_theme_file_uri('/assets/about-intro.png')); ?>');">
            <div class="hero-copy">
                <p class="eyebrow"><?php //the_title(); ?></p>
                <h1>Building Brighter Futures <span>Together</span></h1>
                <p>Learn more about our Christian-based childcare centre, our caring educators, and the play-based learning environment we create for children in Calgary.</p>
                <div class="hero-actions">
                    <a class="button" href="<?php //echo esc_url(site_url('/book-a-tour')); ?>">Book a Tour</a>
                    <a class="button button-outline" href="<?php //echo esc_url(site_url('/#programs')); ?>">View Programs</a>
                </div>
            </div>
        </section> -->

        <section class="about-intro section-band" data-node-id="348:731" data-name="Section - About Us">
            <div class="container two-col">
                <div>
                    <h2 class="about-section-title">Why Parent Choose<br />Bright Future U</h2>

                    <ul class="check-list about-check-list">
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Play-Based Learning</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Quality Christian-Based Childcare Centre</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Safe &amp; Nurturing Environment</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Small Class Sizes</li>
                        <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Flexible Care Options</li>
                    </ul>
                    <p class="about-intro-copy">At Bright Future U Early Learning Academy, we offer high-quality early education
                        and care for children ages 1 to 6.</p>
                </div>
                <img class="about-rounded-media" src="<?php echo esc_url(get_theme_file_uri('/assets/about-intro.png')); ?>" 
                alt="Child smiling in a yellow toy car" />
            </div>
        </section>

        <section class="about-story" data-node-id="321:223" data-name="About Us Content">
            <div class="container">
                <p class="eyebrow">About Bright Future U</p>
                <h2 class="about-hero-title">Building Brighter Futures <span>Together</span></h2>
                <div class="about-story-grid">
                    <img class="about-story-image" src="<?php echo esc_url(get_theme_file_uri('/assets/about-story.png')); ?>"
                        alt="Teacher guiding children as they play with colorful blocks" />
                    <div class="about-story-copy">
                        <p>Bright Future U Early Learning Academy is a Christian-based quality childcare center located in the heart
                            of downtown Calgary. Our mission is to support local communities and working families by providing
                            high-quality care and early education for children aged 1 to 6 years. We combine a team of dedicated,
                            professional staff with a purpose-built learning environment and a comprehensive, interest-based and
                            play-based curriculum.</p>
                        <p>We foster a nurturing environment where each child is given a strong foundation for future learning and
                            development. Our state-of-the-art facilities are designed to offer children a wide range of activities in
                            spacious, safe, and sustainable spaces.</p>
                        <p>At Bright Future U, we deliver an interest-based and play-based curriculum that focuses on each child's
                            mental, physical, emotional, and spiritual development. While incorporating basic Christian principles and
                            values, our programs are tailored to meet the needs of all age groups, from infants to preschoolers. Led
                            by experienced and qualified staff, we are committed to supporting the individual needs and interests of
                            every child under our care.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vision-mission" data-node-id="352:764" data-name="Our Mission Content">
            <div class="container">
                <h2 class="about-hero-title">Our Vision and Mission</h2>
                <div class="vision-grid">
                    <article class="vision-card">
                        <img class="vision-image" src="<?php echo esc_url(get_theme_file_uri('/assets/about-vision.jpg')); ?>" alt="Teacher smiling with a young child" />
                        <div class="vision-content">
                            <span class="icon-bubble">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-tree.svg')); ?>" alt="" /></span>
                            <div>
                                <h3>Our Vision</h3>
                                <p>To be a center of excellence in early childhood education, where children thrive in a nurturing
                                    environment rooted in Christian values, preparing them for a successful future.</p>
                            </div>
                        </div>
                    </article>
                    <article class="vision-card">
                        <img class="vision-image" src="<?php echo esc_url(get_theme_file_uri('/assets/about-mission.jpg')); ?>" alt="Children listening during circle time" />
                        <div class="vision-content">
                            <span class="icon-bubble">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-heart.svg')); ?>" alt="" /></span>
                            <div>
                                <h3>Our Mission</h3>
                                <p>To provide a nurturing, inclusive, and faith-based environment where each child is treated with love,
                                    respect and dignity. We aim to support the holistic development of every child - socially,
                                    emotionally, physically, intellectually and spiritually - through engaging play, Christian teachings,
                                    and strong partnerships with families.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <article class="mission-core-card">
                    <h3>Our Core Values</h3>
                    <p>At Bright Future U Early Learning Academy, we believe every child is uniquely created with the potential to
                        learn, grow, and thrive. We nurture each child's unique potential through play-based learning in a safe,
                        caring, and inclusive environment. We inspire curiosity, confidence, and creativity while gently guiding
                        children with Christian values that encourage kindness, respect, and strong character. Together with
                        families, we help build a strong foundation for lifelong learning and a bright future.</p>
                    <blockquote>"Train up a child in the way he should go, and when he is old he will not depart from it." &mdash;
                        Proverbs 22:6</blockquote>
                </article>
            </div>
        </section>

        <section class="about-banner" data-node-id="357:196" data-name="Section - Banner" style="padding: 0;">
            <div class="container">
                <img class="about-banner-image" src="<?php echo esc_url(get_theme_file_uri('/assets/about-banner.png')); ?>"
                    alt="Illustration of Bright Future U childcare building with rainbow and playground" />
            </div>
        </section>

        <section class="about-thrive">
            <div class="container thrive-grid">
                <div>
                    <h2>A Place Where Children Can Thrive</h2>
                    <p>Our bright and welcoming classrooms are designed to spark curiosity and creativity. With age-appropriate
                        resources, engaging outdoor play areas, and caring guidance, children feel safe, supported, and excited to
                        learn every day.</p>
                    <div class="hero-actions">
                        <a class="button" href="index.html#tour">Book a Tour <i class="ri-arrow-right-line"
                                aria-hidden="true"></i></a>
                        <a class="button button-outline" href="index.html#programs">View Our Programs <i class="ri-arrow-right-line"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/about-thrive.jpg'))?>" alt="Children playing with a classroom felt activity" />
            </div>
        </section>

        <section class="about-awards">
            <div class="container awards-card">
                <div class="award-item">
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/about-award.png'))?>" alt="Consumer Choice Award 2026 Southern Alberta" />
                    <div>
                        <h2>Consumer<br />Choice Award 2026</h2>
                        <p>Proud recipient of the 2026 Consumer Choice Award for Child Care in Southern Alberta</p>
                    </div>
                </div>
                <div class="award-item license-item">
                    <span class="icon-bubble">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/icon-shield-check.svg')); ?>" alt="Licensed Child Care" /></span>
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
