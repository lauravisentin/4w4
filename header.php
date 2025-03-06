<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <?php wp_head() ?>
</head>
<body>
<header>

    <div class="entete">
        <figure class="entete__logo">
            <?php echo get_custom_logo()?>
        </figure>
        <div class="entete__navigation">
            <?php get_template_part("gabarit/menu"); ?>
            
            <form class="recherche">
                <input type="search" placeholder="Rechercher" class="recherche__input">
                <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
            </form>
        </div>
    </div>


</header>