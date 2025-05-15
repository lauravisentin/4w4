<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categorie_par_destination($cat_a_retirer) {
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
                // On vérifie si la catégorie n'est pas celle à retirer (par exemple "Populaire")
                if (strtolower($cat->name) !== strtolower($cat_a_retirer)) {
                    echo '<li class="categorie__item" data-id="' . esc_attr($cat->term_id) . '">';
                    if (is_front_page()) {
                        // Comportement dynamique dans front-page.php
                        echo '<span class="categorie__item-link" data-id="' . esc_attr($cat->term_id) . '">' . esc_html($cat->name) . '</span>';
                    } else {
                        // Lien vers la page de la sous-catégorie dans category.php
                        echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
                    }
                    echo '</li>';
                }
            }

            echo '</ul>';
        }
    }
}

