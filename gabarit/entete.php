<div class="entete">
    <figure class="entete__logo">
        <?php echo get_custom_logo()?>
    </figure>
    <div class="entete__navigation">
        <?php wp_nav_menu(array(
            'menu' => 'principal',
            'container' => 'nav',
            'container_class' => 'entete__externe'
        )); ?>
        
        <form class="recherche">
            <input type="search" placeholder="Rechercher" class="recherche__input">
            <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
        </form>
    </div>
</div>