<?php get_header(); ?>

<main id="portfolio-archive">
    <section class="portfolio-hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 4rem 0; color: white;">
        <div class="container">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Our Portfolio</h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9);">Showcasing our best work and successful projects</p>
        </div>
    </section>

    <section class="portfolio-grid" style="padding: 4rem 0;">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="portfolio-item" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s;">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['style' => 'width: 100%; height: 250px; object-fit: cover;']); ?>
                                </a>
                            <?php endif; ?>
                            
                            <div style="padding: 1.5rem;">
                                <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">
                                    <a href="<?php the_permalink(); ?>" style="color: #1f2937; text-decoration: none;">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <?php if (has_excerpt()) : ?>
                                    <div style="color: #6b7280; line-height: 1.6;">
                                        <?php the_excerpt(); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <a href="<?php the_permalink(); ?>" style="color: #667eea; text-decoration: none; font-weight: 500; display: inline-block; margin-top: 1rem;">
                                    View Project →
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <div style="margin-top: 3rem; text-align: center;">
                    <?php the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    )); ?>
                </div>
            <?php else : ?>
                <p style="text-align: center; font-size: 1.125rem; color: #6b7280;">No portfolio items found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>