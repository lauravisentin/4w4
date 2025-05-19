<?php
/**
 * Génère une liste de catégories en excluant une catégorie spécifique
 * @param string $cat_a_retirer Le nom (ou slug) de la catégorie à exclure (insensible à la casse)
 */
function categorie_par_destination($cat_a_retirer) {
    // Récupère toutes les catégories visibles avec au moins un article
    $categories = get_categories(array(
        'hide_empty' => true,
    ));

    if (!empty($categories)) {
        echo '<ul class="categorie__list">';
        foreach ($categories as $cat) {
            if (!$cat_a_retirer || strtolower($cat->name) !== strtolower($cat_a_retirer)) {
                echo '<li class="categorie__item" data-id="' . esc_attr($cat->term_id) . '">';
                if (is_front_page()) {
                    echo '<span class="categorie__item-link" data-id="' . esc_attr($cat->term_id) . '">' . esc_html($cat->name) . '</span>';
                } else {
                    echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
                }
                echo '</li>';
            }
        }
        echo '</ul>';
    }
}
