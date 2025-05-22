<?php 
// Récupère la couleur des icônes depuis le Customizer
$couleur_icones = get_theme_mod('hero_icones', '#ffffff'); 

// Définir un tableau des réseaux sociaux à afficher
$icones = array('behance', 'linkedin', 'github');

// Affichage des icônes sous forme de liste non ordonnée
echo '<ul class="hero__icones">';

foreach ($icones as $social) {
    // Récupère l'URL de l'icône et l'image associée
    $url = get_theme_mod("icone_{$social}_url");
    $icon = get_theme_mod("icone_{$social}_icon");

    // Vérifie que l'URL et l'image sont définis avant d'afficher l'icône
    if ($url && $icon) {
        echo '<li>';
        echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer">';
        
        // Affichage de l'image de l'icône
        echo '<img src="' . esc_url($icon) . '" alt="' . esc_attr($social) . ' icon" class="hero__icones__icon">';
        
        echo '</a>';
        echo '</li>';
    }
}

// Fermeture de la liste
echo '</ul>';
?>
