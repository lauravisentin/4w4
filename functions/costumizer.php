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


//////////////////////////////////////////////////////// Section footer

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


//////////////////////////////////////////////////////// Section 404

$wp_customize->add_section('erreur_section', array(
  'title'    => __('Page Erreur', 'theme_31w'),
  'priority' => 30,
));


////////////////////////////////////////////////// couleur des icones 404
$wp_customize->add_setting('hero_icones', array(
  'default'           => '#fff',
  'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_icones', array(
  'label'   => __('Couleur des icones', 'theme_31w'),
  'section' => 'erreur_section',
)));
////////////////////////////////////////////////// couleur du texte de la zone 404
$wp_customize->add_setting('erreur_message', array(
  'default'           => __('Désolé, la page que vous recherchez n\'existe pas.', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('erreur_message', array(
  'label'   => __('Message d\'erreur', 'theme_31w'),
  'section' => 'erreur_section',
  'type'    => 'textarea',
));


}
add_action('customize_register', 'theme_31w_customize_register');