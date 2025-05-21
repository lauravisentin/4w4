<?php
/**
 * Génère une liste de catégories en excluant une catégorie spécifique
 * @param string $cat_a_retirer Le nom (ou slug) de la catégorie à exclure (insensible à la casse)
 */
function categories_liste($parent_slug){
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        // Récupérer les sous-catégories de "destination"
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
    ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__list">';
        foreach ($sous_categories as $categorie) {
            // Afficher le nom de chaque sous-catégorie
            echo '<li  data-category_id="' . esc_html($categorie->term_id) . '" class="categorie__item">' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
        }
    }
}