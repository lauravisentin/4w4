<?php
/*
Template Name: Modele Pays
*/
get_header();

$bleu = '#00A3E0';
$orange= '#FF6A13';

genere_vague($orange, 'vague-haut');
genere_vague($bleu, 'vague-bas');

?>
<div class="boiteflex global pays">
    <h1><?php the_title(); ?></h1>
    <section class="gallery">
        <?php the_content(); ?>
    </section>
    <?php pays_liste('pays'); ?>
    <div class="destination__list"></div>

 
</div>
