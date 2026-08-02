<?php get_header();

while (have_posts()) {
    the_post(); ?>
    <main class="book-tour-page">
        <section class="book-tour-hero" data-node-id="385:1484" data-name="Header">
            <div class="container book-tour-page-grid">
                <div class="book-tour-page-copy">
                    <h1>Book a Tour</h1>
                    <p>Come explore our classrooms, meet our educators, and discover how Bright Future U can support your child's
                        learning and development.</p>
                    <div class="book-tour-highlights" aria-label="Tour highlights">
                        <div>
                            <span class="book-tour-highlight-icon">
                                <i class="ri-school-line" aria-hidden="true"></i>
                            </span>
                            <p>Tour our centre</p>
                        </div>
                        <div>
                            <span class="book-tour-highlight-icon book-tour-highlight-orange">
                                <i class="ri-parent-line"
                                    aria-hidden="true">
                                </i>
                            </span>
                            <p>Meet our educators</p>
                        </div>
                        <div>
                            <span class="book-tour-highlight-icon book-tour-highlight-teal">
                                <i class="ri-question-answer-line"
                                    aria-hidden="true"></i>
                                </span>
                            <p>Ask questions</p>
                        </div>
                        <div>
                            <span class="book-tour-highlight-icon book-tour-highlight-yellow">
                                <i class="ri-book-open-line"
                                    aria-hidden="true"></i>
                                </span>
                            <p>Explore our programs</p>
                        </div>
                    </div>
                </div>

                <div class="program-hero-media" aria-hidden="true">
                    <picture>
                        <source media="(max-width: 700px)" srcset="assets/book-tour-hero-m.jpg" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/book-tour-hero-d.jpg')) ?>" alt="" />
                    </picture>
                </div>
            </div>
        </section>


        <section class="book-tour-section" id="schedule" aria-labelledby="schedule-title">
            <div class="container">
                <div class="book-tour-card">
                    <div class="book-tour-form-area">
                        <header class="book-tour-form-header">
                            <h2 id="schedule-title">Schedule Your Visit</h2>
                            <p>Tell us a little about your family and preferred tour date. Our team will contact you to confirm your
                                visit.</p>
                        </header>

                        <div class="book-tour-contact-form">
                            <?php
                            $contact_form_page = get_page_by_path('contact-form') ?: get_page_by_path('contact-us') ?: get_page_by_path('contact');

                            if ($contact_form_page) {
                                echo apply_filters('the_content', $contact_form_page->post_content);
                            } else {
                                the_content();
                            }
                            ?>
                        </div>
                    </div>

                    <aside class="book-tour-sidebar" aria-labelledby="expect-title">
                        <h2 id="expect-title">What to Expect During Your Tour</h2>
                        <ul class="book-tour-expect-list">
                            <li>
                                <span class="book-tour-sidebar-icon"><i class="ri-school-line" aria-hidden="true"></i></span>
                                <p>Explore our classrooms and learning spaces</p>
                            </li>
                            <li>
                                <span class="book-tour-sidebar-icon book-tour-sidebar-orange"><i class="ri-team-line"
                                        aria-hidden="true"></i></span>
                                <p>Meet our caring educators</p>
                            </li>
                            <li>
                                <span class="book-tour-sidebar-icon book-tour-sidebar-teal"><i class="ri-user-settings-line"
                                        aria-hidden="true"></i></span>
                                <p>Learn about our programs and daily routines</p>
                            </li>
                            <li>
                                <span class="book-tour-sidebar-icon book-tour-sidebar-yellow"><i class="ri-gamepad-line"
                                        aria-hidden="true"></i></span>
                                <p>Ask questions about enrollment and availability</p>
                            </li>
                        </ul>
                        <div class="book-tour-sidebar-contact">
                            <h3>Have questions?</h3>
                            <a href="tel:8254384482">
                                <i class="ri-smartphone-line" aria-hidden="true"></i>
                                (825) 438-4482</a>
                            <a href="mailto:hello@brightfutureu.com">
                                <i class="ri-mail-line" aria-hidden="true"></i>
                                hello@brightfutureu.com
                            </a>
                        </div>
                        <div class="book-tour-sun" aria-hidden="true">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/sunrise.png')); ?>" />
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

<?php }
get_footer();  ?>
