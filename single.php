<?php get_header(); ?>
    <section class="populaire">
        <div class="global">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire_article">
               
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>
                <?php
                // if (has_post_thumbnail()) {
                    // permet d'afficher la petite image associé à l'article (image mise en avant)
                    the_post_thumbnail('thumbnail');
                // ?>
                <p>Température minimum&nbsp;<?php echo the_field ('temperature_minimum'); ?>&#xB0;</p>
                <p>Température maximum&nbsp;<?php echo the_field ('temperature_maximum'); ?>&#xB0;</p>
                <p>Température moyenne&nbsp;<?php echo the_field ('temperature_moyenne'); ?>&#xB0;</p>

                <!-- Afficher toutes les catégories -->
            </article>
            
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>
