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
        <div class="carte__texte">
            <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
            <a class="carte__bouton carte__bouton--actif"  href="<?php the_permalink(); ?>">Suite</a>
        </div>
        <?php if (!is_category()) : ?>
            <div class="carte__categories">
                <ul class="post-categories">
                    <?php
                    $categories = get_the_category();
                    $destination = get_category_by_slug('destination');
                    if ($destination) {
                        foreach ($categories as $cat) {
                            if ($cat->category_parent === $destination->term_id && $cat->slug !== 'populaire') {
                                echo '<li><a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>

        <?php endif; ?>
        
    </div>
</article>