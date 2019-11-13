<?php
    $args = array(
        'post_type' => 'regnodidavid_type',
        'posts_per_page' => 1,
        'orderby' => 'rand', //Afficher aléatoirement pour la page accueil
    );

    # On dit à WP de faire la requête
    $loop = new WP_Query($args);
    #On vérifie si il y a des résultats
    if ($loop->have_posts()){

        #on les parcours
        while($loop->have_posts()){
            $loop->the_post();//Charge  les contenus des articles de literation en cours dans WP
            
            echo '<section id="article" class="row">';
            echo '<div class="col-md-6">';
            echo '<aside>';
            echo    get_the_post_thumbnail( $id, 'rdd-size' );
            echo '</aside>';    
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<article>';
            echo '<h2 class="mt-0 mb-2 text-uppercase"><u>' . get_the_title() . '</u></h2>'; 
            echo '<p class="mt-4">'; 
            echo    the_content();
            echo '</p>'; 
            echo ' </article>';
            echo '</div>'; 
            echo '</section>'; 


        }#fin du while

    }#fin du have_posts
?>

