<?php get_header() ?>
<div class="boiteflex global erreur">
    <h1 class="erreur__titre">Oops, vous avez échoué sur l'île 404 !</h1>
    <p class="erreur__message">
        <?php 
        echo get_theme_mod('erreur_message', __('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur \'Accueil\' pour découvrir à nouveau nos voyages d\'exception !', 'theme_31w')); 
        ?>
    </p>

    <btn class="erreur__bouton__Accueil">
        <a href="<?php echo site_url('/'); ?>" class="erreur__lien">Retour à l'accueil</a>
    </btn>
    <?php wp_nav_menu(array(
        "menu" => "destinations",
        "container" => "nav",
        "container_class" => "erreur__destinations"
    )); ?>

    <?php get_template_part("gabarit/icones"); ?>
</div>