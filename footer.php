<footer>
    <?php
        $footer_mission = get_theme_mod('footer_mission', 'Default Title');
        $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
        $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');

    ?>

    <div class="piedpage global">
        <section class="piedpage__s1">
                <h3>Liens externes</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>

                <?php get_template_part("gabarit/icones"); ?>

            <div class="piedpage__s1__adresse">
                <h3>Addresse et recherche</h3>
                <div class="piedpage__s1__adresse__coord">
                    <?php echo $footer_adresse; ?>
                </div>
                <div class="piedpage__s1__adresse__tel">
                <?php echo $footer_telephone; ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();  ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
            </div>
            <?php get_template_part("gabarit/menu"); ?>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>

    </div>
</footer>
<?php wp_footer() ?>