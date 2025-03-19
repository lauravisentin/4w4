<?php
/**
 * Gabarit permettant d'afficher une carte
*/
?>
<article class="carte carte--grande">
    <div class="carte__contenu">
        <div class="carte__image">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium'); }
            ?>
        </div>
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
        <a class="carte__bouton carte__bouton--actif"  href="<?php the_permalink(); ?>">Suite</a>
        
        <?php if (!is_category()) : ?>
            <div class="carte__categories">
                <?php the_category(); ?>
            </div>
        <?php endif; ?>
        
    </div>
</article>