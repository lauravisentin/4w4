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
    <!-- //////////////////////////////////////////////////////// destination REST-API -->
     <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>
    <?php get_footer(); ?>
</body>
</html>