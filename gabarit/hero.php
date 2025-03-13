<?php

$couleur = substr(get_theme_mod('hero_icone', '#fff'), 0, 7);
$hero_bg = get_theme_mod('hero_background_image');
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 

?>

<style>
    .hero__couleur{
        color: #ff0000;
    }
</style>`


<section class="hero" style="background-image: url('<?php echo $hero_background ?>'); background-repeat: no-repeat" >
        <div class="hero__contenu global">
            <h1 class="hero__titre hero__couleur">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <?php get_template_part("gabarit/icones"); ?>
            <p>Auteur:<?php echo $hero_auteur;  ?></p>
        </div>
    </section>