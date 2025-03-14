<?php

$hero_couleur = get_theme_mod('hero_couleur', '#fff');
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$hero_background = get_theme_mod('hero_background', 'Default Title'); 
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title'); 


?>

<style>
.hero__couleur{
    color: <?php echo $hero_couleur; ?>;
}
</style>`


<section class="hero" style="background-image: url('<?php echo $hero_background ?>'); background-repeat: no-repeat" >
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