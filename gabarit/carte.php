<?php
/**
 * Gabarit permettant d'afficher une carte
*/
?>
<article class="carte carte--grande">
    <figure class="carte__image">
        <img src="images/img1.jpg" alt="Image de voyage">
    </figure>
    <div class="carte__contenu">
        <?php
        if (has_post_thumbnail()) {
            // permet d'afficher la petite image associé à l'article (image mise en avant)
            the_post_thumbnail('thumbnail'); }
        ?>
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
        <a class="carte__bouton carte__bouton--actif"  href="<?php the_permalink(); ?>">Suite</a>
            <?php the_category() ?>
        <p>Température minimum&nbsp;<?php  echo the_field ('temperature_minimum'); ?>&#xB0;C</p>
        <p>Température maximum&nbsp;<?php echo the_field ('temperature_maximum'); ?>&#xB0;C</p>
        <p>Température moyenne&nbsp;<?php echo the_field ('temperature_moyenne'); ?>&#xB0;C</p>
    </div>
</article>