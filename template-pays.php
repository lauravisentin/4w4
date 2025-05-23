<?php
/*
Template Name: Modele Pays
*/
get_header();
?>
<div class="boiteflex global pays">
    <h1><?php the_title(); ?></h1>
    <?php pays_liste('pays'); ?>
    <section class="destination">
        <div class="destination__list"></div>
    </section>
    <section class="gallery">
        <?php the_content(); ?>
    </section>
 
</div>
