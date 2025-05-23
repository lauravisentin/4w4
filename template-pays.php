<?php
/*
Template Name: Modele Pays
*/
get_header();
?>
<div class="boiteflex global pays">
    <h1><?php the_title(); ?></h1>
    <p>Moment : <?php the_field('Temps'); ?></p>
    <?php pays_liste('pays'); ?>
    <div class="destination__list"></div>
 
</div>
