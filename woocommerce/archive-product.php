<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.4.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

get_header( 'shop' );


$breadcrumb = intval( get_theme_mod( 'breadcrumb_options', '1' ) );
$archive_bread = esc_url( get_theme_mod( 'breadcrumb_archive_image' ) );
if ( $archive_bread ) {
    $bread_archive = $archive_bread;
} else {
    $bread_archive = esc_url( get_template_directory_uri() . '/images/about-us-bg.jpg' );
}

if ( $breadcrumb == '1' ) :
    ?>
    <header id="title_bread_wrap" class="entry-header" style="background:url('<?php echo esc_url($bread_archive); ?>') no-repeat center; background-size: cover;">
        <div class="ak-container">     
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h1 class="entry-title ak-container"><?php woocommerce_page_title(); ?></h1>
            <?php
            endif;
            /**
             * Hook: woocommerce_before_main_content.
             *
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             * @hooked WC_Structured_Data::generate_website_data() - 30
             */
            do_action( 'woocommerce_before_main_content' );

            /**
             * Hook: woocommerce_archive_description.
             *
             * @hooked woocommerce_taxonomy_archive_description - 10
             * @hooked woocommerce_product_archive_description - 10
             */
            do_action( 'woocommerce_archive_description' );
            ?>
        </div>
    </header>
<?php endif; ?>

<div class="inner">
    <div class="row ak-container left-sidebar"> 
        <div id="secondary" class="col-md-3 widget-area secondary-left sidebar">
            <?php
            /**
             * Hook: woocommerce_sidebar.
             *
             * @hooked woocommerce_get_sidebar - 10
             */
            do_action( 'woocommerce_sidebar' );
            ?>
        </div>
        
        <div id="primary" class="col-md-9 content-area clearfix">
            <?php 
                $category    = get_the_terms( $post->ID, 'product_cat' );
                $id_category = $terms[0]->term_id;
                $name        = $terms[0]->name;
                $slug        = $terms[0]->slug;              

                $args = array( 'post_type'       => 'product', 
                                'product_cat'    => $name, 
                                'post_status'    => 'publish',
                                'posts_per_page' => 2,
                                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                                'tax_query' => array( array(
                                    'taxonomy'         => 'product_cat',
                                    'field'            => 'slug', 
                                    'terms'            => get_query_var( 'product_cat' )
                                )),
                                'orderby' => 'rand'
                            );
                $loop = new WP_Query( $args );              
            ?>
            <div class="row content-inner">
                <?php
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                        $link    	= get_the_permalink($post_id);
                        $image      = get_post_thumbnail_id();
                        $image      = wp_get_attachment_image_src($image,'img-polaroid');
                        $image      = $image[0];
                        $parcela 	= get_field("parcela");
                        $parcela    = (float)$parcela;
                        $parcela    = number_format($parcela, 2, ',', '.');
                        $qt_parcela = get_field("qt_parcela");
                        $avista  	= get_field("a_vista");
                        $avista  	= (float)$avista;
                        $avista 	= number_format($avista, 2, ',', '.');

                        $title   	= get_the_title( $post_title['post_title']);
                        $currency   = get_woocommerce_currency_symbol();
                        $price      = get_post_meta( get_the_ID(), '_regular_price', true);
                        $formatado  = (float)$price;
                        $valor 		= number_format($formatado, 2, ',', '.');
            ?>
                        <div class="col-md-4 custom-img-post custom-height-product ">
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
                    <?php   
                    endwhile;                         
                } else { ?>
                    Nenhum produto cadastrado 
          <?php } ?>
            </div>  
            <div class="row ">
                <div class="col">
                    <div class='custom-shortcode wc-products custom-altura-botao-categoria'>
                        <div class='products pagination custom-bottom'>
                            <div class="col">
                                <?php 
                                    echo paginate_links( array(
                                        'base' => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $loop->max_num_pages,
                                        'prev_next' => true,
                                        'prev_text' => 'Página Anterior',
                                        'next_text' => 'Próxima Página',
                                        'before_page_number' => '-',
                                        'after_page_number' => '>',
                                        'show_all' => false,
                                        'mid_size' => 3,
                                        'end_size' => 1
                                     ));
                                     wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                              
        </div>
    </div>
</div>
<?php
get_footer( 'shop' );
