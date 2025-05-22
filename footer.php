<footer>
    <?php
        $footer_mission = get_theme_mod('footer_mission', 'Default Title');
        $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
        $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
        $footer_couleur = get_theme_mod('footer_couleur', '#81d4ff');


        // Appelle la fonction pour afficher la vague
        $bleu = "#81d4ff"; 
        genere_vague($bleu);

    ?>

    <!-- <div class="piedpage global"> -->
    <div class="piedpage">
        <section class="piedpage__s1">
            <h3>Liens externes</h3>
            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
                "container_class" => "piedpage__s1__externe"
            )); ?>
            <?php get_template_part("gabarit/icones");  ?>

            <?php   $piedpage_image = get_theme_mod('footer_image');
                if($piedpage_image){
                    echo '<div class="piedpage__s1__image">';
                    echo '<img src="' . esc_url($piedpage_image) . '" alt="Image de destination">';
                    echo '</div>';
                }
            ?>
        </section>

        <section class="piedpage__s2">
            <div class="piedpage__s2__adresse">
                <h3>Addresse et recherche</h3>
                <div class="piedpage__s2__adresse__coord">
                    <?php echo $footer_adresse; ?>
                </div>
                <div class="piedpage__s2__adresse__tel">
                <?php echo $footer_telephone; ?>
                </div>
                <div class="piedpage__s2__adresse__recherche">
                    <?php get_search_form();  ?>
                </div>
            </div>
        </section>

        <section class="piedpage__s3">
            <h3>Mission</h3>
            <div class="piedpage__s3__description">
                <?php echo $footer_mission; ?>
            </div>
            <div class="piedpage__s3__menu">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer() ?>