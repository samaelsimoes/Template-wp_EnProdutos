<?php
/**
 * This is the front page code
 * Template Name: HomePage
 */
get_header();
?>

<?php
//load slider
do_action('accesspress_slickslider');
?>
<?php echo do_shortcode("[smartslider3 slider=2]"); ?>

<section class="section custom-banner-3 custom-submenu-infs woocommerce" style="padding: 10px;">
    <div class=" custom-infs custom-logos wc-products" style="padding-top:25px;">
        <div class="ak-container clearfix">                        
            <div class="custom-inf-menu-3 custom-infs-loja">
                <div class="custom-sub-infs1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/bolaSinuca.png">
                </div>
                <div class="custom-sub-infs2">     
                    <h3>Parcelamento em até 12 x no cartão de crédito </h3>
                </div>
            </div>
            <div class="custom-inf-menu-2 custom-infs-loja">
                <div class="custom-sub-infs1">                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/tacoEbolinha.png">
                </div>
                <div class="custom-sub-infs2">
                    <h3> Pagamento Seguro </h3>
                    <p> Compre sua mesa e pague somente na entrega </p>
                </div>  
            </div>
            <div class="custom-inf-menu-1 custom-infs-loja">
                <div class="custom-sub-infs1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mesasinuca.png">
                </div>
                <div class="custom-sub-infs2">
                    <h3>Frete Grátis para Regiões </h3>                        
                    <p> PR - SC - RS - SP - MS - MG - GO | Válido para Mesas </p>                    
                </span>    
            </div>
        </div>    
    </div>
</section>
   
<?php 
    global $paged;
    $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

    // The WP_Query
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 25,
        'paged'          => $paged
    );
    $loop  = new WP_Query( $args );
?>
<section style='padding-bottom: 15px; padding-top: 20px;'>
    <div class='row ak-container'>
        <?php
            if( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                        
                    $link    	= get_the_permalink($post_id);
                    //$image   	= wp_get_attachment_image_src( get_post_thumbnail_id() );// get_the_post_thumbnail($post_id);
                    $image   = get_post_thumbnail_id();
                    $image      = wp_get_attachment_image_src($image,'img-polaroid');
                    $image      = $image[0];
                    $parcela 	= get_field("parcela");
                    $parcela    = (float)$parcela;
                    $parcela    = number_format($parcela, 2, ',', '.');
                    $qt_parcela = get_field("qt_parcela");
                    $avista  	= get_field("a_vista");
                    $avista  	= (float)$avista;
                    $avista 	= number_format($avista, 2, ',', '.');

                    $title   	= get_the_title( $post_title['post_id']);
                    $currency   = get_woocommerce_currency_symbol();
                    $price      = get_post_meta( get_the_ID(), '_regular_price', true);
                    $formatado  = (float)$price;
                    $valor 		= number_format($formatado, 2, ',', '.');
        ?>
                    <div class="col-md-3 custom-img-post custom-height-product ">
                        <div class="row">
                            <div class="col">
                                <a href="<?=$link?>">
                                    <img src="<?php echo $image ?>" class="">
                                </a>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col custom-title-product text-center custom-value">
                                <div class="row">
                                    <div class="col">
                                        <a href="<?php echo $link?>">
                                            <h3 class='custom-title-product' style="padding: 10px;"><?= $title ?></h3>
                                        </a>	                                   

                                        <span>								
                                            <?php echo $currency. $valor ?>
                                        </span>

                                        <div class="row"> 
                                            <div class="col">                                      
                                                <span class='custom-inf-parcela ' style="display: inline;"> ou em até  <?php echo $qt_parcela ?> x de </span> 
                                                <span class='custom-valor-parcela' style="display: inline;">  R$ <?php echo $parcela ?> </span>
                                                <span class='custom-inf-parcela '> na entrega </span>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="col">  
                                                <span class='custom-inf-parcela '  style="display: inline;"> ou apenas </span>
                                                <span class='custom-valor-parcela' style="display: inline;"> R$ <?php echo $avista ?> </span>
                                                <span class='custom-inf-parcela '  style="display: inline;"> à vista na entrega <span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                           

                <?php endwhile; 
            } else {?>
                Nenhum produto cadastrado 
        <?php } ?>
    </div>
    <div class="row ak-container ">
        <div class="col">
            <div class='custom-shortcode wc-products'>
                <div class='ak-container products pagination custom-bottom'>
                    <div class="col">
                        <div class="custom-buttom-paged-right">
                            <?= 
                                next_posts_link( 'Proximá página &raquo;', $loop->max_num_pages)
                            ?>
                        </div>
                        <div class="custom-buttom-paged-left">
                            <?=  
                                previous_posts_link( '&laquo; Voltar', $loop->max_num_pages)
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata() ?>
    </div>
</section>

<?php if (is_active_sidebar('promo-widget-1')): ?>
    <section id="promo-section1">
        <div class="ak-container">
            <div class="promo-wrap1">
                <div class="promo-product1 clearfix">
                    <?php dynamic_sidebar('promo-widget-1'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (is_active_sidebar('product-widget-1')): ?>
    <!-- This is Product 1 Section  Aqui é o produto!-->
    <section id="product1" class="prod1-slider">
        <div class='ak-container'>
            <?php dynamic_sidebar('product-widget-1'); ?>            
        </div>
    </section>
<?php endif; ?>

<section id="promo-section2">
    <div class="ak-container">
        <div class="promo-wrap2">
            <?php if (is_active_sidebar('promo-widget-2')): ?>
                <div class="promo-product2">
                    <?php dynamic_sidebar('promo-widget-2'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('product-widget-2')): ?>
    <!-- This is Product 2 Section !-->
    <section id="product2" class="prod2-slider">
        <div class="ak-container">
            <?php dynamic_sidebar('product-widget-2'); ?>
        </div>
    </section>
<?php endif; ?>

<?php if (is_active_sidebar('cta-video')): ?>
    <section id="ap-cta-video" class="cta-video-section-wrap">
        <div class="cta-overlay">
            <div class="ak-container">
                <div class="cta-vid-wrap">
                    <?php dynamic_sidebar('cta-video') ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (is_active_sidebar('product-widget-3')): ?>
    <section class="ap-cat-list clear">
        <div class="ak-container">
            <div class="cat-list-wrap">
                <?php dynamic_sidebar('product-widget-3') ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (is_active_sidebar('promo-widget-3')): ?>
    <section id="promo-section3">
        <div class="ak-container">
            <div class="promo-wrap3">
                <div class="promo-product2">
                    <?php dynamic_sidebar('promo-widget-3'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; 

get_footer();