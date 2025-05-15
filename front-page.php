<?php get_header(); ?>

<?php get_template_part("gabarit/hero"); ?>

<!-- //////////////////////////////////// section destination REST-API -->
<?php categorie_par_destination("Populaire"); ?>

<section class="destination">
    <div class="destination__list"></div>
</section>

<?php get_footer(); ?>
