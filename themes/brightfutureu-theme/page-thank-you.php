<?php get_header();

while (have_posts()) {
    the_post(); ?>

 <main class="contact-page">
      <section class="contact-hero" aria-labelledby="contact-title">
        <div class="container contact-hero-grid">
          <div class="contact-hero-copy">
            <h1 id="contact-title">Thank You!</h1>
            <p>
              Have questions about our programs, enrollment, or childcare services? Our team is happy to help. Get in
              touch with Bright Future U Early Learning Academy, and we'll respond as soon as possible.
            </p>
            <a class="button" href="<?php echo esc_url(home_url('/')); ?>">
              Back to Homepage
              <i class="ri-arrow-right-line" aria-hidden="true"></i>
            </a>
          </div>
          <div class="contact-hero-media" aria-hidden="true">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/contact-hero.jpg')); ?>" alt="" />
          </div>
        </div>
      </section>

      <section class="contact-main" aria-labelledby="contact-form-title">
        <div class="container contact-card">
          <div class="contact-form-area">
            <header class="contact-form-header">
              <h2 id="contact-form-title">Get in Touch</h2>
              <p>
                Whether you're looking for more information about our programs, have questions about enrollment, or
                simply want to learn more about Bright Future U, send us a message and our team will be happy to assist
                you.
              </p>
            </header>
            <div class="contact-info-list-thank-you">
              <div class="contact-info-item">
                <span class="contact-info-icon"><i class="ri-map-pin-line" aria-hidden="true"></i></span>
                <div>
                  <h3>Visit Us</h3>
                  <p>505 4 Ave SW<br />Calgary, AB T2P 0J8</p>
                </div>
              </div>
              <div class="contact-info-item">
                <span class="contact-info-icon contact-info-orange"><i class="ri-phone-line" aria-hidden="true"></i></span>
                <div>
                  <h3>Call Us</h3>
                  <a href="tel:8254384482">(825) 438-4482</a>
                </div>
              </div>
              <div class="contact-info-item">
                <span class="contact-info-icon contact-info-teal"><i class="ri-mail-line" aria-hidden="true"></i></span>
                <div>
                  <h3>Email Us</h3>
                  <a href="mailto:hello@bfuacademy.ca">hello@bfuacademy.ca</a>
                </div>
              </div>
              <div class="contact-info-item">
                <span class="contact-info-icon contact-info-yellow"><i class="ri-time-line" aria-hidden="true"></i></span>
                <div>
                  <h3>Hours of Operation</h3>
                  <p>Monday - Friday<br />06:30 AM - 06:00 PM</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
<!-- 
      <section class="contact-location" aria-labelledby="location-title">
        <div class="container contact-location-card">
          <div class="contact-location-copy">
            <h2 id="location-title">Find Bright Future U</h2>
            <p>
              Conveniently located in downtown Calgary, Bright Future U Early Learning Academy provides a welcoming and
              accessible environment for children and families.
            </p>
            <a class="button button-outline" href="https://maps.google.com/?q=505+4th+Ave+SW,+Calgary,+AB+T2P+0J8" target="_blank" rel="noreferrer">
              Get Directions
              <i class="ri-arrow-right-line" aria-hidden="true"></i>
            </a>
          </div>
          <img class="contact-map" src="<?php echo esc_url(get_theme_file_uri('/assets/contact-map.jpg')); ?>" alt="Map showing Bright Future U location in downtown Calgary" />
        </div>
      </section> -->

      <section class="contact-tour-cta" aria-labelledby="tour-cta-title">
        <div class="container contact-tour-card">
          <div class="contact-tour-top">
            <div>
              <h2 id="tour-cta-title">Ready to Visit Bright Future U?</h2>
              <p>Schedule a Tour Today</p>
            </div>
            <div class="contact-tour-actions">
              <a class="button" href="book-a-tour.html">Book a Tour <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
              <a class="button button-outline" href="tel:8254384482">
                Call Us <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
            </div>
          </div>
          <ul class="contact-tour-checks">
            <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>No obligation</li>
            <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Meet our Teachers</li>
            <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>Ask Questions</li>
            <li><i class="ri-checkbox-circle-fill" aria-hidden="true"></i>See our classrooms</li>
          </ul>
        </div>
      </section>
    </main>

<?php }
get_footer();  ?>
