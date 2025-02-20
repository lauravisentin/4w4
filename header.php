<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head() ?>
</head>
<body>
<header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="images/logo.png" alt="logo voyage" width="120">
            </figure>

            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            
            <label for="menu-toggle" class="entete__burger">
                <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/menu--v6.png" alt="menu"/>
            </label>
    
            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li"><a class="menu__a" href="#">Sport</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Pleine nature</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Croisière</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Aventure</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Culturel</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Repos</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Zen</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Économique</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Favorite</a></li>
                        <li class="menu__li"><a class="menu__a" href="#">Pays</a></li>
                    </ul>
                </nav>
            </div>
            <div class="entete__recherche">
                <form  class="recherche">
                    <input type="text" class="recherche__input">
                    <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                </form>
            </div>
        </div>
    </header>