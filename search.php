<?php get_header(); ?>

<section class="populaire">
    <div class="global">
        <h1>Résultats de recherche pour : "<?php echo get_search_query(); ?>"</h1>

        <!-- Nombre de résultats -->
        <p><?php echo $wp_query->found_posts; ?> Résultat(s) trouvé(s)</p>

        <!-- Boucle des résultats de recherche -->
        <?php if (have_posts()) : ?>
            <div class="destination-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="populaire_article">
                        <h2 class="populaire__titre">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="populaire__contenu">
                            <?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pages -->
            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
        <?php else : ?>
            <p>Aucun résultat trouvé pour votre recherche.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
