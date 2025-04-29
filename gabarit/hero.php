<?php

$hero_couleur = get_theme_mod('hero_couleur', '#fff');
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$hero_background = get_theme_mod('hero_background', 'Default Title'); 
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title'); 


?>

<?php
$hero_background = [];
for ($k = 0; $k < 3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, ''); 
}
?>

<style>
.hero__couleur{
    color: <?php echo $hero_couleur; ?>;
}
</style>


<section class="hero">
        
<div class="hero__carrousel hero__carrousel--active" style="background-image: url(<?php echo $hero_background[0]; ?>)"></div>
<div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1]; ?>)"></div>
<div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2]; ?>)"></div>

    <div class="hero__radio">
        <input  class="hero__radio__input" data-id_radio="0"   type="radio" name="carroussel"  checked="checked">
        <input  class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
        <input  class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
    </div>
    <div class="hero__contenu global">
        <h1 class="hero__titre hero__couleur" >
            <?php  bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
        <?php  bloginfo('description'); ?>
        </p>
        <a href="" class="hero__courriel">
            <?php echo $hero_courriel;  ?>
        </a>
        <button class="hero__bouton">
            Inscription
        </button>
        <?php get_template_part("gabarit/icones"); ?>
        <p>Auteur: <?php echo $hero_auteur;  ?></p>
    </div>
    </section>