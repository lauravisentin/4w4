<?php
function pays_liste($parent_slug){
    $parent_category = get_category_by_slug($parent_slug);
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        $sous_categories = get_categories(array(
            'parent' => $parent_id,
            'hide_empty' => true,
        ));

        if (!empty($sous_categories)) {
            echo '<ul class="categorie__list">';
            foreach ($sous_categories as $categorie) {
                echo '<li data-category_id="' . esc_html($categorie->term_id) . '" class="categorie__item">' . esc_html($categorie->name) . '</li>';
            }
            echo '</ul>';
        }
    }
}
?>
