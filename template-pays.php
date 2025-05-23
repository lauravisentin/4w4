<?php
/*
Template Name: Modele Pays
*/
get_header();

$rose = '#DEB6DB';
$orange= '#E4AE63';

genere_vague($rose, 'vague-haut', '1400px');
genere_vague($orange, 'vague-bas', '900px');

?>
<div class="boiteflex global pays">
    <h1><?php the_title(); ?></h1>
    <section class="gallery">
        <?php the_content(); ?>
    </section>
    <?php pays_liste('pays'); ?>
    <div class="destination__list"></div>
</div>

<?php get_footer(); ?>
