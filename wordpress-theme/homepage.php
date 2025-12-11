<?php
/**
 * Template Name: Homepage
 */
get_header(); ?>

<main id="homepage">
    <section class="hero" style="background: linear-gradient(rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9)), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1920&q=80') center/cover; padding: 6rem 0; position: relative;">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center; padding: 2rem;">
                <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem; color: white; font-weight: 700;">Professional WordPress Design Services</h1>
                <p style="font-size: 1.5rem; margin-bottom: 2rem; color: rgba(255,255,255,0.9);">Beautiful, fast WordPress websites that grow your business</p>
                <div style="display: flex; gap: 1rem; justify-content: center;">
                    <a href="#services" class="btn btn-modern" style="background: white; color: #667eea; padding: 1rem 2.5rem; font-weight: bold; border-radius: 5px; margin: 0 0.5rem; text-decoration: none;">Our Services</a>
                    <a href="#contact" class="btn btn-modern" style="background: transparent; color: white; border: 2px solid white; padding: 1rem 2.5rem; border-radius: 5px; margin: 0 0.5rem; text-decoration: none;">Get Quote</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services" style="padding: 5rem 0; background: #f8f9fa;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: #1f2937;">What We Offer</h2>
                <p style="font-size: 1.125rem; color: #6b7280; max-width: 600px; margin: 0 auto;">Comprehensive digital solutions tailored to your business needs</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card hover-lift" style="background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.07);">
                    <div style="width: 60px; height: 60px; background: #667eea; border-radius: 12px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 2rem;">💻</span>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f2937;">Custom WordPress Development</h3>
                    <p style="color: #6b7280; line-height: 1.7; margin-bottom: 1.5rem;">Bespoke WordPress websites tailored to your brand and business goals, built with performance and conversion in mind.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Custom theme development</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Responsive mobile-first design</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Page builder integration</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Speed optimization</li>
                    </ul>
                </div>

                <div class="service-card hover-lift" style="background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.07);">
                    <div style="width: 60px; height: 60px; background: #764ba2; border-radius: 12px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 2rem;">🛒</span>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f2937;">WooCommerce & E-Commerce</h3>
                    <p style="color: #6b7280; line-height: 1.7; margin-bottom: 1.5rem;">Complete online store solutions with WooCommerce. From product catalogs to complex marketplaces, we build stores that sell.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ WooCommerce setup & customization</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Payment gateway integration</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Product management systems</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Conversion optimization</li>
                    </ul>
                </div>

                <div class="service-card hover-lift" style="background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.07);">
                    <div style="width: 60px; height: 60px; background: #f59e0b; border-radius: 12px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 2rem;">🔧</span>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f2937;">WordPress Maintenance & Support</h3>
                    <p style="color: #6b7280; line-height: 1.7; margin-bottom: 1.5rem;">Keep your WordPress site secure, updated, and running smoothly with our comprehensive maintenance packages.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Regular updates & backups</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Security monitoring</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ Performance optimization</li>
                        <li style="padding: 0.5rem 0; color: #4b5563;">✓ 24/7 uptime monitoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="process" style="padding: 5rem 0; background: linear-gradient(rgba(255,255,255,0.92), rgba(255,255,255,0.92)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&q=80') center/cover;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #1f2937;">Our Process</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3rem;">
                <div style="text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">1</div>
                    <h3 style="color: #667eea; margin-bottom: 1rem;">Discovery</h3>
                    <p style="color: #6b7280;">Understanding your business goals and technical requirements</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">2</div>
                    <h3 style="color: #667eea; margin-bottom: 1rem;">Design</h3>
                    <p style="color: #6b7280;">Creating wireframes and prototypes for your approval</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">3</div>
                    <h3 style="color: #667eea; margin-bottom: 1rem;">Development</h3>
                    <p style="color: #6b7280;">Building your solution with clean, maintainable code</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">4</div>
                    <h3 style="color: #667eea; margin-bottom: 1rem;">Launch & Support</h3>
                    <p style="color: #6b7280;">Deploying your project and providing ongoing maintenance</p>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio" style="padding: 5rem 0; background: white;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem; color: #1f2937;">Recent Projects</h2>
            <p style="text-align: center; font-size: 1.125rem; color: #6b7280; max-width: 600px; margin: 0 auto 3rem;">WordPress websites we've designed for London businesses</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=800&q=80" alt="Portfolio 1" style="width: 100%; height: 250px; object-fit: cover;">
                    <div style="padding: 1.5rem; background: white;">
                        <h3 style="margin-bottom: 0.5rem; color: #1f2937;">E-Commerce Fashion Store</h3>
                        <p style="color: #6b7280;">WooCommerce store with custom product filters and checkout optimization</p>
                    </div>
                </div>
                <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80" alt="Portfolio 2" style="width: 100%; height: 250px; object-fit: cover;">
                    <div style="padding: 1.5rem; background: white;">
                        <h3 style="margin-bottom: 0.5rem; color: #1f2937;">Law Firm Website</h3>
                        <p style="color: #6b7280;">Professional WordPress site with appointment booking and case management</p>
                    </div>
                </div>
                <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80" alt="Portfolio 3" style="width: 100%; height: 250px; object-fit: cover;">
                    <div style="padding: 1.5rem; background: white;">
                        <h3 style="margin-bottom: 0.5rem; color: #1f2937;">Restaurant & Booking</h3>
                        <p style="color: #6b7280;">Restaurant website with online menu, reservations, and delivery integration</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" style="padding: 5rem 0; background: #f8f9fa;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #1f2937;">What Our Clients Say</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto;">
                <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" alt="Client 1" style="width: 60px; height: 60px; border-radius: 50%; margin-right: 1rem;">
                        <div>
                            <h4 style="margin: 0; color: #1f2937;">James Mitchell</h4>
                            <p style="margin: 0; color: #6b7280; font-size: 0.9rem;">CEO, TechStart London</p>
                        </div>
                    </div>
                    <p style="color: #4b5563; line-height: 1.6;">"Exceptional WordPress development! Our new site looks professional and loads incredibly fast. Richard's attention to detail is outstanding."</p>
                    <div style="color: #f59e0b;">★★★★★</div>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" alt="Client 2" style="width: 60px; height: 60px; border-radius: 50%; margin-right: 1rem;">
                        <div>
                            <h4 style="margin: 0; color: #1f2937;">Sarah Thompson</h4>
                            <p style="margin: 0; color: #6b7280; font-size: 0.9rem;">Owner, Boutique Fashion</p>
                        </div>
                    </div>
                    <p style="color: #4b5563; line-height: 1.6;">"Our WooCommerce store exceeded expectations. Sales increased by 40% after the redesign. Highly recommend for any e-commerce project!"</p>
                    <div style="color: #f59e0b;">★★★★★</div>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" alt="Client 3" style="width: 60px; height: 60px; border-radius: 50%; margin-right: 1rem;">
                        <div>
                            <h4 style="margin: 0; color: #1f2937;">David Chen</h4>
                            <p style="margin: 0; color: #6b7280; font-size: 0.9rem;">Director, Legal Associates</p>
                        </div>
                    </div>
                    <p style="color: #4b5563; line-height: 1.6;">"Professional, responsive, and delivered on time. Our law firm's website now ranks #1 in local searches. Excellent ongoing support too."</p>
                    <div style="color: #f59e0b;">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact" style="padding: 5rem 0; background: linear-gradient(135deg, rgba(102, 126, 234, 0.95), rgba(118, 75, 162, 0.95)), url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1920&q=80') center/cover;">
        <div class="container">
            <div style="max-width: 600px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: white;">Ready to Start Your Project?</h2>
                <p style="font-size: 1.125rem; margin-bottom: 2rem; color: rgba(255,255,255,0.9);">Let's discuss how we can help transform your ideas into reality</p>
                <div>
                    <a href="mailto:richardwboas@gmail.com" class="btn" style="background: white; color: #667eea; padding: 1rem 2.5rem; font-weight: bold; display: inline-block;">Start Your Project</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>