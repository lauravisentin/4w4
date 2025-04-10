<?php get_header(); ?>
<section class="global single">
    <div class="populaire">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="populaire_article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            
            <div class="populaire__contenu">
                <div class="populaire__image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    }
                    ?>
                </div>
                <div class="populaire__description">
                    <?php the_content(); ?>
                </div>
                <div class="populaire__temp">
                    <p>Température minimum&nbsp;<?php echo the_field('temperature_minimum'); ?>&#xB0;</p>
                    <p>Température maximum&nbsp;<?php echo the_field('temperature_maximum'); ?>&#xB0;</p>
                    <p>Température moyenne&nbsp;<?php echo the_field('temperature_moyenne'); ?>&#xB0;</p>
                </div>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
