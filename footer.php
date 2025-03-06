<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <h3>Liens externes</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
                <?php get_template_part("gabarit/icones"); ?>

            </div>
            <div class="piedpage__s1__adresse">
                <h3>Addresse et recherche</h3>
                <div class="piedpage__s1__adresse__coord">
                    3800, Sherbrooke est, Montréal, Québec, H1x 2A2 
                </div>
                <div class="piedpage__s1__adresse__tel">
                    Tel: (514) 254-7131
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h3>Mission du club</h3>
                Partez à l'aventure en toute sérénité.
                Des voyages sur mesure pour des souvenirs inoubliables.
                <?php get_template_part("gabarit/menu"); ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>