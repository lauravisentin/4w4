<?php
function theme_31w_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
));
//////////////////////////////////////////////////////// l'auteur
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Laura Visentin', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));

//////////////////////////////////////////////////////// Le courriel
$wp_customize->add_setting('hero_courriel', array(
  'default' => __('info@cmaisonneuve.qc.ca', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_courriel', array(
  'label' => __('Courriel', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));

//////////////////////////////////////////////////////// L'adresse'
$wp_customize->add_setting('hero_adresse', array(
  'default' => __('3800 R. Sherbrooke E, Montréal, QC H1X 2A2', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_adresse', array(
  'label' => __('Adresse', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));

//////////////////////////////////////////////////////// Téléphone
$wp_customize->add_setting('hero_telephone', array(
  'default' => __('(514) 254-7131', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_telephone', array(
  'label' => __('Téléphone', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));


////////////////////////////////////////////////// image en background de la zone hero
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Image en background', 'theme_31w'),
  'section' => 'hero_section',
)));
////////////////////////////////////////////////// couleur du texte de la zone hero
$wp_customize->add_setting('hero_couleur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
  'label' => __('Couleur du texte', 'theme_31w'),
  'section' => 'hero_section',
)));

////////////////////////////////////////////////// couleur des icones hero
$wp_customize->add_setting('hero_icones', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_icones', array(
  'label' => __('Couleur des icones', 'theme_31w'),
  'section' => 'hero_section',
)));


//////////////////////////////////////////////////////// Nouvelle section footer

  $wp_customize->add_section('footer_section', array(
    'title' => __('Section pied de page', 'theme_31w'),
    'priority' => 30,
));
////////////////////////////////////////////////////////// Champ mission
$wp_customize->add_setting('footer_mission', array(
  'default' => __('Mission du club de voyage', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'textarea',
));

////////////////////////////////////////////////////////// Adresse
$wp_customize->add_setting('footer_adresse', array(
  'default' => __('Adresse du club de voyage', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_adresse', array(
  'label' => __('Adresse', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'textarea',
));

////////////////////////////////////////////////////////// Téléphone
$wp_customize->add_setting('footer_telephone', array(
  'default' => __('Numéro de téléphone du club de voyage', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_telephone', array(
  'label' => __('Telephone', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'tel',
));

}

add_action('customize_register', 'theme_31w_customize_register');

/**
 * Pour l'ajout d'options à notre thème
 */
function mon_theme_supports() {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'height'     => 300,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
  ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );


function theme_4w4_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');  
wp_enqueue_style('mon-style-style', get_stylesheet_uri()); 
} 
/* 
*/
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');

/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */


function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );


?>