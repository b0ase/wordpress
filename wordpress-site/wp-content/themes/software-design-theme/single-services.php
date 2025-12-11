<?php get_header(); ?>

<main id="service-single">
    <?php while (have_posts()) : the_post(); ?>
        <section class="service-hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 4rem 0; color: white;">
            <div class="container">
                <h1 style="font-size: 2.5rem; margin-bottom: 1rem;"><?php the_title(); ?></h1>
                <div style="max-width: 800px;">
                    <?php if (has_excerpt()) : ?>
                        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9);"><?php the_excerpt(); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="service-content" style="padding: 4rem 0;">
            <div class="container">
                <div style="max-width: 900px; margin: 0 auto;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin-bottom: 3rem;">
                            <?php the_post_thumbnail('large', ['style' => 'width: 100%; height: auto; border-radius: 12px;']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="service-details" style="font-size: 1.125rem; line-height: 1.8; color: #374151;">
                        <?php the_content(); ?>
                    </div>

                    <div style="margin-top: 4rem; padding: 2rem; background: #f3f4f6; border-radius: 12px;">
                        <h3 style="margin-bottom: 1rem;">Ready to Get Started?</h3>
                        <p style="margin-bottom: 1.5rem;">Let's discuss how this service can help your business grow.</p>
                        <a href="#contact" class="btn" style="background: #667eea; color: white; padding: 0.75rem 2rem; display: inline-block; border-radius: 6px; text-decoration: none;">Request a Quote</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="other-services" style="padding: 3rem 0; background: #f9fafb;">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 3rem;">Other Services</h2>
                <div class="services-grid">
                    <?php
                    $other_services = new WP_Query(array(
                        'post_type' => 'services',
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID())
                    ));
                    
                    if ($other_services->have_posts()) :
                        while ($other_services->have_posts()) : $other_services->the_post(); ?>
                            <div class="service-card">
                                <h3><a href="<?php the_permalink(); ?>" style="color: #667eea; text-decoration: none;"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>