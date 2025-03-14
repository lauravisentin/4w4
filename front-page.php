<?php get_header(); ?>

    <?php get_template_part("gabarit/hero"); ?>
    
    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>

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
    <?php get_footer(); ?>
</body>
</html>