
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Royaume Di David, Canne Corso, Elevage chien Guadeloupe</title>

    <link rel="icon"  href="<?= get_template_directory_uri() ?>/favicon.ico"/>
    <?php wp_head();?>
   
</head>
<body <?php body_class(); ?>> <!-- Mettre couelur d'arrière plan-->

    <div class="container">
        <!-- CITATION -->
        <p class="accroche ml-3 mt-2">
        <I>  
            <?php bloginfo('name');?>
                <?php bloginfo('description');?>
        </I></p>
  
       
        <header>
            <div id=#menusecondaire class="bg-yellow text-dark text-right mb-2 pr-2 py-2">           
            
                <a class="nav-item m-4 text-dark" href="<?= wp_login_url();?>">Connexion</a>
                <a class="nav-item m-4 borderleft pl-4 text-dark" href=".<?= wp_registration_url();?>">Inscription</a>

             </div>

            
            <div class=" bg-darkM borderBottomYellow">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-dark"  >
                            <?php
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    if ( has_custom_logo() ) {
                                        the_custom_logo();
                                    } else {
                                        echo '<img id="logo" src="'. get_template_directory_uri() .'/assets/img/logo/RDD_Logo.png" alt="logo">';
                                    }
                                }
                            ?>
                             <!-- <a class="navbar-brand" href="index.php"> <img src="<?//= get_template_directory_uri() ?>/assets/img/logo/RDD_Logo.png" alt="logo">  </a> -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuprincipal" aria-controls="menuprincipal"  aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                             </button>
                                
                        <div class="collapse navbar-collapse justify-content-end" id="menuprincipal">
                            <?php wp_nav_menu( array( 'theme_location' => 'regnodidavid-menu' ) ); ?>
                        </div>
                 </div>
            </div>

        </header>    
    </div> <!-- Fin div container--> 


 <!-- Image Header--> 
    <div class="container-fluid pl-0 pr-0 mt-2" id="projecteur">   
    <?php if(has_header_image()) { ?>
        <img src="<?php header_image();?>" class="rdd__slider" alt=" <?php bloginfo('name');?>">
     <?php } else  {?>
        <img class="img-fluid rdd__slider" src="<?= get_template_directory_uri() ?>/assets/img/accueil/projecteur.jpg" alt=" <?php bloginfo('name');?>">
    <?php }?>  
    </div> <!-- Image Header-->   
    <div class="container"> 
        <section id="howItWorks" class="row my-2 align-items-center py-2 bg-white grayscale">
                <div class="col-md-4 text-center">
                    <a href="#"><img class="img-fluid "  src="<?= get_template_directory_uri() ?>/assets/img/accueil/search.png" alt="rechercher"></a>
                    <h3 class="text-dark">Choisir</h3>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#"><img class="img-fluid "  src="<?= get_template_directory_uri() ?>/assets/img/accueil/booking.png" alt="réserver"></a>
                    <h3 class="text-dark">Réserver</h3>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#"><img class="img-fluid "  src="<?= get_template_directory_uri() ?>/assets/img/accueil/pay.png" alt="payer"></a>
                    <h3 class="text-dark">Payer</h3>
                </div>      
        </section> <!-- Fin div section1-->
        <!-- SECTION ARTICLE-->
      
        <?php get_template_part ('content', 'rdd') ?>

        <!-- SECTION PARTENAIRE -->
        <?php dynamic_sidebar('partner') ?>
        
         <!-- Fin div section3 partenaire-->


</div> <!-- Fin div container-->


    <footer class="container-fluid bg-yellow mt-4">
            <div class="container borderTopYellow">
                <div class="row bg-darkM  text-center py-2 align-items-center">
                    <div class="col-md-4 col-sm-12 mx-auto" id="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.012596077081!2d-61.64338314909295!3d16.271124938261135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c13416e110a6659%3A0x574d87ed9469e764!2sLamentin%2C%20Guadeloupe!5e0!3m2!1sfr!2sfr!4v1573564137210!5m2!1sfr!2sfr" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12" id="newsletterDiv">
                        <h5><u>S'abonner à la newsletter</u></h5>
                        <form id="newsletter" novalidate action="newsletter.php" method="post" class="mt-3">
                            <div class="form-goup">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre adresse email..">
                            </div>
                            <button type="submit" class="btn bg-yellow mt-2">S'ABONNER</button> 
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-12 mx-auto" id="contactEntreprise">
                        <h5><u>Regno Di David</u></h5>
                        <ul class="text-left ml-2 mt-3 ">
                            <li class="fas fa-home mr-2"> 10 lotissement La Verdure</li>
                            <li class="ml-4">97129 LE LAMENTIN</li>
                            <li><i class="fas fa-phone mr-2"></i>0690 340 255</li>
                            <li><i class="fas fa-envelope mr-2"></i>contact@regnodidavid.com</li>
                            <li id="socialMedia">
                            <!-- Social buttons -->
                                <ul class="list-unstyled list-inline text-center">
                                    <li class="list-inline-item pr-2">
                                        <a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li class="list-inline-item pr-2">
                                        <a href="http://www.twitter.com"> <i class="fab fa-twitter-square"></i> </a>
                                    </li>
                                    <li class="list-inline-item pr-2">
                                        <a href="http://www.googleplus.com"><i class="fab fa-google-plus-square"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="http://www.linkedin.com pr-2"> <i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                        <!-- Social buttons -->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2 ">
                    <p class="text-center text-dark">&copy; RegnoDiDavid 2019</p>
                    </div>
                </div>
            </div>
    </footer>


  <!-- Permet de charger les scripts -->
  <?php wp_footer();?>
</body>
</html>

