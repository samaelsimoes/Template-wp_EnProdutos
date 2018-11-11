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

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/jquery/dist/jquery.js"></script>


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js?=<?php echo time() ?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/events.js?v=<?php echo time() ?>"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php wp_head(); ?>
<!-- Start of enprodutos Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=4268a104-582b-48a8-b8eb-7f91bd4882a9"> </script>
<!-- End of enprodutos Zendesk Widget script -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127380305-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127380305-1');
</script>


<!-- Codigo facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<body <?php body_class(); ?> id="bodyInicio">
<section class="custom-banner-1 ">
    <div class="ak-container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="row">
                    <div class="col-md-6"> 
                        <label class="custom-banner-1-img-1">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/contato-telefone.svg">
                        </label>
                        <span>
                            (47) 3467-7079
                        </span>      
                    </div>
                    <div class="col-md-6">     
                        <label class="custom-banner-1-img-2">
                            <a href="https://bit.ly/2PBWef1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp.png">
                            </a>
                        </label>
                        <span>
                            (47) 98847-2903
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-8 custom-inf-menu1 align-items-center">                      
                <label class="custom-truck"> 
                    <i class="fas fa-truck"></i>
                </label>
                <span>
                    Compra segura, pagamento na entrega, entrega por nossa equipe!
                </span>                             
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

