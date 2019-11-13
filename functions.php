<?php 
/*
 * Ce fichier permet d'activer des fonctionnalités aux thèmes
 * 
 */
//         ##################################################
//         #                                                #
// ##########            Styles CSS et Scripts JS          ##########
//         #                                                #
//         ##################################################

/**
 * Permet d'activer les thèmes du thème
 */
function regnodidavid_enqueue_style() {
    // -- Bootstrap CSS
    wp_enqueue_style('bootstrap-cdn','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',false,'4.3.1');

    // -- Style WP | get_template_directory_uri() pointe vers le dossier du thème
    wp_enqueue_style( 'my-theme', get_template_directory_uri().'/style.css', false );
    //wp_enqueue_style( 'my-theme', get_stylesheet_uri(), false );


    // -- Google Font
    wp_enqueue_style('google-font','//fonts.googleapis.com/css?family=Handlee|Neuton|Roboto+Slab|Roboto&display=swap',false);

    // -- FontAwesome
    wp_enqueue_style('fontawesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css',false);
  
}

/**
 * Permet der charger les scripts du thème
 * enqueue_script Permet de declarer un JS dans le thème pour WP
 */
function regnodidavid_enqueue_script() {
    // -- jQuery | wp_enqueue_script permet de déclarer un fichier JS pour notre thème dans WP.
    wp_enqueue_script( 'jquery-slim', '//code.jquery.com/jquery-3.3.1.slim.min.js', false, '3.3.1' );

    // -- Popper JS
    wp_enqueue_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, '1.14.7' );

    // -- Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false, '4.3.1' );

  // --  FontAwesome JS
  wp_enqueue_script( ' fontAwesome-js', '//kit.fontawesome.com/5f670c8172.js', false);
 
}


//         ##################################################
//         #                                                #
// ##########            FONCTIONNALITES DU THEME          ##########
//         #                                                #
//         ##################################################


//------ LOGO -------//
add_action( 'wp_enqueue_scripts', 'regnodidavid_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'regnodidavid_enqueue_script' );

add_theme_support( 'custom-logo', array(
	'height'      => 155,
	'width'       => 160,
	'flex-height' => false,
	'flex-width'  => false,
	'header-text' => array( 'site-title', 'site-description' ),
) );

//------ Activation Menu-------//
function register_regnodidavid_menu() {
    register_nav_menu('regnodidavid-menu',__( 'RegnoDiDavid Menu' ));
    register_nav_menu('top-menu',__( 'Top Menu' ));
  }
  add_action( 'init', 'register_regnodidavid_menu' );
  

//------ Personnalisation Image du HEADER------//
$args = array(
	'width'         => 1670,
	'height'        => 350,
	'default-image' => get_template_directory_uri() . '/assets/img/accueil/projecteur.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

//----- Custum Background --------//
add_theme_support( 'custom-background');

//----- Création d'un CUSTOM POST TYPE--------//
#https://wordpress.org/support/article/post-types/
#https://gist.gitub.com/creativembers/6577149
add_action('init','create_regnodidavid_type');
function create_regnodidavid_type(){
    register_post_type('regnodidavid_type', array(
        'labels'=>array(
            'name'=> 'RDD Posts',
            'singular_name'=> 'RDD Post' //singular_name permet de mettre au singulier si il y a un seul article
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-quote', //Permet de changer l'icone 
        'has_archive' => false, // si on veut archiver mettre true
        'supports' => array(
            'title','editor', 'thumbnail')
    ));
}
add_theme_support('post-thumbnails');
add_image_size('rdd-size', 540, 324, true);


//         ##################################################
//         #                                                #
// ##########           POSITIONS POUR LES WIDGETS         ##########
//         #                                                #
//         ##################################################


add_action( 'widgets_init', 'rdd_widgets_init' );
function rdd_widgets_init() {

    register_sidebar( array(
        'name' => 'Partenaires',
        'id' => 'partner',
        'description' => 'Widget pour le placement des logos partenaires',
        'before_widget' => '<section id=" %1$s partenaires" class=" %2$s row my-2 align-items-center py-2 bg-white grayscale">',
        'after_widget' => '</section>',
        'before_title' => '',
        'after_title' => '',
    ) );

}