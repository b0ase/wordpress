<?php get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Professional WordPress Design Services</h1>
            <p>Beautiful, Fast WordPress Websites from London</p>
            <a href="#contact" class="btn">Get Started Today</a>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Custom WordPress Development</h3>
                    <p>Bespoke WordPress websites designed and built specifically for your business needs.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Custom Theme Development</li>
                        <li>Plugin Development</li>
                        <li>Responsive Design</li>
                        <li>SEO Optimization</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <h3>WooCommerce Development</h3>
                    <p>Complete e-commerce solutions with WooCommerce for selling products and services online.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Online Store Setup</li>
                        <li>Payment Integration</li>
                        <li>Product Management</li>
                        <li>Checkout Optimization</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <h3>WordPress Maintenance</h3>
                    <p>Keep your WordPress site secure, updated and running smoothly with ongoing support.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Security Updates</li>
                        <li>Regular Backups</li>
                        <li>Performance Monitoring</li>
                        <li>Content Updates</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php if (have_posts()) : ?>
        <section class="blog-posts" style="padding: 3rem 0;">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 2rem;">Latest Blog Posts</h2>
                <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> style="padding: 1.5rem; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                            <h3><a href="<?php the_permalink(); ?>" style="color: var(--primary-color); text-decoration: none;"><?php the_title(); ?></a></h3>
                            <div class="post-meta" style="color: #6b7280; font-size: 0.9rem; margin: 0.5rem 0;">
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>