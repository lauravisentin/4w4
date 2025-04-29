<?php
$hero_couleur = get_theme_mod('hero_couleur', '#fff');
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');  

// Nombre d’images défini dans le customizer
$hero_background_count = get_theme_mod('hero_background_count', 3); 

// Tableau des images de fond
$hero_background = [];
for ($k = 0; $k < $hero_background_count; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, ''); 
}
?>
<style>
.hero__couleur {
    color: <?php echo esc_attr($hero_couleur); ?>;
}
</style>

<section class="hero">
    <?php for ($i = 0; $i < $hero_background_count; $i++): ?>
        <div class="hero__carrousel <?php echo $i === 0 ? 'hero__carrousel--active' : ''; ?>" 
             style="background-image: url(<?php echo esc_url($hero_background[$i]); ?>)">
        </div>
    <?php endfor; ?>

    <div class="hero__radio">
        <?php for ($i = 0; $i < $hero_background_count; $i++): ?>
            <input class="hero__radio__input" 
                   data-id_radio="<?php echo $i; ?>" 
                   type="radio" 
                   name="carroussel" 
                   <?php echo $i === 0 ? 'checked="checked"' : ''; ?>>
        <?php endfor; ?>
    </div>

    <div class="hero__contenu global">
        <h1 class="hero__titre hero__couleur"><?php bloginfo('name'); ?></h1>
        <p class="hero__description"><?php bloginfo('description'); ?></p>
        <a href="" class="hero__courriel"><?php echo esc_html($hero_courriel); ?></a>
        <button class="hero__bouton">Inscription</button>
        <?php get_template_part("gabarit/icones"); ?>
        <p>Auteur: <?php echo esc_html($hero_auteur); ?></p>
    </div>
</section>
