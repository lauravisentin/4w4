<?php
function genere_vague($couleur, $classe = '') {
    echo '
    <div class="' . $classe . '">
        <svg class="vague" width="100%" height="100%" viewBox="0 0 1440 690" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,700 L 0,262 C 169.73,295.87 339.47,329.73 517,297 C 694.53,264.27 879.87,164.93 1035,148 C 1190.13,131.07 1315.07,196.53 1440,262 L 1440,700 L 0,700 Z" fill="' . $couleur . '" />
        </svg>
    </div>';
}
?>