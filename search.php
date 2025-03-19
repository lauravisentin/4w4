<?php get_header(); ?>

<h1>Résultats de recherche pour : "<?php echo get_search_query(); ?>"</h1>

<section class="populaire">
    <div class="boiteflex global">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- Affiche le modèle de carte pour tous les articles trouvés -->
                <?php get_template_part("gabarit/carte"); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé pour votre recherche.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>