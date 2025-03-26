<?php get_header() ?>

<div class="boiteflex global erreur">
    <h1 class="erreur__titre">Erreur 404</h1>
    <p class="erreur__message">
        <?php 
        echo get_theme_mod('erreur_message', __('Désolé, la page que vous recherchez n\'existe pas.', 'theme_31w')); 
        ?>
    </p>

    <nav class="erreur__navigation">
        <ul>
            <li>
                <a href="<?php echo site_url('/'); ?>" class="navigation__lien">Accueil</a>
            </li>
            <li>
                <a href="<?php echo get_category_link(10); ?>" class="navigation__lien">Populaire</a>
            </li>
        </ul>
    </nav>
    <?php get_template_part("gabarit/icones"); ?>
</div>

<?php get_footer() ?>
