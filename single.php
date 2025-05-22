<?php get_header(); ?>
<section class="global single">
    <div class="populaire">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="populaire_article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            
            <p class="populaire__auteur">
                Par <strong><?php the_author(); ?></strong>, publié le <span><?php echo get_the_date(); ?></span>
            </p> 

            <p class="populaire__categories">
                Catégories : <?php the_category(', '); ?>
            </p>

            <div class="populaire__contenu">
                <div class="populaire__image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/background_MondoVoyage.jpg" alt="Image par défaut" style="width: 100%; height: auto; object-fit: cover;">';
                    }
                    ?>
                </div>

                <div class="populaire__description">
                    <?php the_content(); ?>
                </div>

                <div class="populaire__temp">
                    <p>Température minimum&nbsp;<?php the_field('temperature_minimum'); ?>&#xB0;</p>
                    <p>Température maximum&nbsp;<?php the_field('temperature_maximum'); ?>&#xB0;</p>
                    <p>Température moyenne&nbsp;<?php the_field('temperature_moyenne'); ?>&#xB0;</p>
                </div>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?> 
