<?php
function genere_vague($couleur = '#008fcc', $hauteur = '320px', $position = 'top', $opacite = 0.6) {
    $transform = ($position === 'bottom') ? 'scaleY(-1)' : 'none';
    ?>
    <svg viewBox="0 0 1440 320"
         preserveAspectRatio="none"
         xmlns="http://www.w3.org/2000/svg"
         style="position: absolute; <?= $position ?>: 0; left: 0; width: 100%; height: <?= $hauteur ?>; z-index: 0; transform: <?= $transform ?>;">
        <defs>
            <linearGradient id="gradient" x1="95%" y1="28%" x2="5%" y2="72%">
                <stop offset="5%" stop-color="<?= esc_attr($couleur) ?>" />
                <stop offset="95%" stop-color="#ffffff" />
            </linearGradient>
        </defs>
        <path fill="url(#gradient)" fill-opacity="<?= $opacite ?>"
              d="M0,160 C360,260 1080,60 1440,160 L1440,320 L0,320 Z">
            <animate attributeName="d" dur="6s" repeatCount="indefinite"
                values="
                M0,160 C360,260 1080,60 1440,160 L1440,320 L0,320 Z;
                M0,180 C400,120 1040,220 1440,140 L1440,320 L0,320 Z;
                M0,160 C360,260 1080,60 1440,160 L1440,320 L0,320 Z
                " />
        </path>
    </svg>
    <?php
}
?>
