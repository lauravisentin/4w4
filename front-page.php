<?php get_header(); ?>

<?php get_template_part("gabarit/hero"); ?>

<!-- //////////////////////////////////// section destination REST-API -->
<?php categories_liste("destination");?>

<section class="destination">
    <div class="destination__list"></div>
</section>

<?php get_footer(); ?>
