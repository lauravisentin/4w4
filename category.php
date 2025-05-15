<?php get_header(); ?>

<section class="categorie">
    <div class="boiteflex global">
        <div class="categorie__header">
            <h1><?php single_cat_title(); ?></h1>
            <p><?php echo category_description(); ?></p>
        </div>

        <!-- Affichage du menu des sous-catégories sans "Populaire" -->
        <div class="categorie__menu">
            <?php 
                // Appel de la fonction pour afficher les sous-catégories sans "Populaire"
                categorie_par_destination("Populaire"); 
            ?>
        </div>

        <!-- Affichage des articles de la catégorie actuelle -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part("gabarit/carte"); ?>
            <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
