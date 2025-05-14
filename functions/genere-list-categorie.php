<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categorie_par_destination($cat_a_retirer) {
    // On cherche la catégorie parente "destination"
    $categorie_parent = get_category_by_slug('destination');

    if ($categorie_parent) {
        // On récupère ses sous-catégories
        $sous_categories = get_categories(array(
            'parent' => $categorie_parent->term_id,
            'hide_empty' => true,
        ));

        // Si on a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__list">';

            foreach ($sous_categories as $cat) {
                if (strtolower($cat->name) !== strtolower($cat_a_retirer)) {
                    echo '<li class="categorie__item"><a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a></li>';
                }
            }

            echo '</ul>';
        }
    }
}
