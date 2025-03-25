<?php get_header() ?>

<div class="boiteflex global erreur">
    
    <h1 class="erreur__titre">Erreur 404</h1>
    <p class="erreur__message">Désolé, la page que vous recherchez n'existe pas.</p>

    <nav class="erreur__navigation">
        <ul>
            <li>
                <a href="accueil" class="navigation__lien">Accueil</a>
            </li>
        </ul>
    </nav>
    <?php get_template_part("gabarit/icones"); ?>
</div>

<?php get_footer() ?>
