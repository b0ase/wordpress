<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main id="contact-page">
    <section class="contact-hero" style="background: linear-gradient(rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1920&q=80') center/cover; padding: 4rem 0; color: white;">
        <div class="container">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Let's Build Your WordPress Website</h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9);">Professional WordPress solutions from London</p>
        </div>
    </section>

    <section class="contact-content" style="padding: 4rem 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; max-width: 1000px; margin: 0 auto;">
                <div class="contact-form">
                    <h2 style="margin-bottom: 2rem;">Send Us a Message</h2>
                    
                    <?php if (shortcode_exists('contact-form-7')) : ?>
                        <?php echo do_shortcode('[contact-form-7 title="Contact Form"]'); ?>
                    <?php else : ?>
                        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" style="display: flex; flex-direction: column; gap: 1.5rem;">
                            <input type="hidden" name="action" value="contact_form">
                            <?php wp_nonce_field('contact_form_nonce'); ?>
                            
                            <div>
                                <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Your Name *</label>
                                <input type="text" id="name" name="name" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            
                            <div>
                                <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email Address *</label>
                                <input type="email" id="email" name="email" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            
                            <div>
                                <label for="phone" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Phone Number</label>
                                <input type="tel" id="phone" name="phone" style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            
                            <div>
                                <label for="service" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Service Interested In</label>
                                <select id="service" name="service" style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 6px;">
                                    <option value="">Select a service</option>
                                    <option value="wordpress-website">New WordPress Website</option>
                                    <option value="woocommerce">WooCommerce Store</option>
                                    <option value="website-redesign">Website Redesign</option>
                                    <option value="maintenance">Maintenance & Support</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Your Message *</label>
                                <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 6px;"></textarea>
                            </div>
                            
                            <button type="submit" style="background: #667eea; color: white; padding: 1rem 2rem; border: none; border-radius: 6px; font-size: 1rem; font-weight: 500; cursor: pointer;">
                                Send Message
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
                
                <div class="contact-info">
                    <h2 style="margin-bottom: 2rem;">Contact Information</h2>
                    
                    <div style="margin-bottom: 2rem;">
                        <h3 style="color: #667eea; margin-bottom: 0.5rem;">Location</h3>
                        <p style="color: #6b7280;">
                            London, United Kingdom<br>
                            <em>Serving UK & international clients</em><br>
                            <em>Remote consultations available</em>
                        </p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h3 style="color: #667eea; margin-bottom: 0.5rem;">Phone</h3>
                        <p style="color: #6b7280;">
                            UK: +44 07412 922 288<br>
                            WhatsApp Available
                        </p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h3 style="color: #667eea; margin-bottom: 0.5rem;">Email</h3>
                        <p style="color: #6b7280;">
                            Email: richardwboas@gmail.com<br>
                            Quick response guaranteed<br>
                            Free initial consultation
                        </p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h3 style="color: #667eea; margin-bottom: 0.5rem;">Response Time</h3>
                        <p style="color: #6b7280;">
                            Monday - Friday: 9:00 AM - 6:00 PM GMT<br>
                            Typical response: Within 2-4 hours<br>
                            Weekend support for urgent issues
                        </p>
                    </div>
                    
                    <div>
                        <h3 style="color: #667eea; margin-bottom: 1rem;">Follow Us</h3>
                        <div style="display: flex; gap: 1rem;">
                            <a href="#" style="padding: 0.5rem 1rem; background: #f3f4f6; border-radius: 6px; text-decoration: none; color: #4b5563;">LinkedIn</a>
                            <a href="#" style="padding: 0.5rem 1rem; background: #f3f4f6; border-radius: 6px; text-decoration: none; color: #4b5563;">Twitter</a>
                            <a href="#" style="padding: 0.5rem 1rem; background: #f3f4f6; border-radius: 6px; text-decoration: none; color: #4b5563;">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>