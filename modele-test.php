<?php
/*
Template Name: Modele Test
*/
get_header();
?>
<div class="evenement">
    <h1><?php the_title(); ?></h1>
    <p>Contenu spécifique à votre événement.</p>
    <p>Moment : <?php the_field('Temps'); ?></p>
</div>
