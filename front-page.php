<?php get_header(); ?>

    <?php get_template_part("gabarit/hero"); ?>


    <section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')){
                the_content();
            } else { ?>         
            <?php get_template_part("gabarit/carte"); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <!-- //////////////////////////////////// section destination REST-API -->
<?php categorie_par_destination("Populaire"); ?>
    <section class="destination">
        <div class="destination__list"></div>
    </section>
    <?php get_footer(); ?>
</body>
</html>