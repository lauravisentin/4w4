<?php get_header(); ?>

<?php 
$erreur_background = get_theme_mod('erreur_background', ''); 
?>

<div class="boiteflex global erreur" style="background-image: url('<?php echo esc_url($erreur_background); ?>'); background-repeat: no-repeat;">
    <div class="erreur__titre">
        <h1>Oops, vous avez échoué sur l'île 404 !</h1>
    </div>
    <div class="erreur__message">
        <p>
            <?php echo get_theme_mod('erreur_message', __('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur \'Accueil\' pour découvrir à nouveau nos voyages d\'exception !', 'theme_31w')); ?>
        </p>
    </div>
    <a href="<?php echo site_url('/'); ?>" class="erreur__accueil">Retour à l'accueil</a>

    <?php wp_nav_menu(array(
        "menu" => "destinations",
        "container" => "nav",
        "container_class" => "erreur__destinations"
    )); ?>

    <form class="erreur__recherche">
        <?php get_search_form(); ?>
    </form>

    <?php get_template_part("gabarit/icones"); ?>
</div>
