<?php get_header(); ?>
<section class="global single">
    <div class="populaire">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="populaire_article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            
            <div class="populaire__contenu">
                <!-- Image -->
                <div class="populaire__image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    }
                    ?>
                </div>

                <!-- Description -->
                <div class="populaire__description">
                    <?php the_content(); ?>
                </div>

                <!-- Section Températures -->
                
                <div class="populaire__temp">
                    <h3 class="populaire__temp-title">Températures</h3>
                    <p><strong>Minimum :</strong> <?php echo esc_html(get_field('temperature_minimum')); ?>°</p>
                    <p><strong>Maximum :</strong> <?php echo esc_html(get_field('temperature_maximum')); ?>°</p>
                    <p><strong>Moyenne :</strong> <?php echo esc_html(get_field('temperature_moyenne')); ?>°</p>
                </div>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
