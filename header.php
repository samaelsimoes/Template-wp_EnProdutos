<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccessPress Store
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/css/bootstrap-grid.css">
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <?php wp_head(); ?>

    <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'uT1lgDA5cH';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
        </script>
    <!-- {/literal} END JIVOSITE CODE -->

<!-- Codigo facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</head>
<body <?php body_class(); ?>>
<section class="custom-banner-1">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row custom-banner-1-img-1">
                    <div class="col col-md-3">
                        <img  src="<?php echo get_template_directory_uri(); ?>/assets/contato-telefone.svg">
                    </div>
                    <div class="col-md-9">
                        (47) 3467-7079
                    </div>
                </div>	
            </div>
            <div class="col-md-3 ">
                <div class="row custom-banner-1-img-2">
                    <div class="col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp.png">
                    </div>
                    <div class="col-md-9">
                        (47) 98847-2903
                    </div>
                </div>	
            </div> 
        </div>						
    </div>
</section>
<div id="page" class="hfeed site">

<?php
    $header_layout = esc_attr( get_theme_mod( 'accesspress_header_layout_type', 'headertwo' ) );
    if( $header_layout == 'headerone' ){
        get_template_part('header/header', 'one');
    }else{
        get_template_part('header/header', 'two');
    }
?>
<div id="content" class="site-content">

