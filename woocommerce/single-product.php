<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header('shop');
$breadcrumb = intval( get_theme_mod('breadcrumb_options_single','1') );
$archive_bread = esc_url( get_theme_mod('breadcrumb_single_image') );
if($archive_bread){
    $bread_archive = $archive_bread;
}else{
  $bread_archive = esc_url( get_template_directory_uri().'/images/about-us-bg.jpg' );
}
if($breadcrumb == '1') :
?>
<header id="title_bread_wrap" class="entry-header" style="background:url('<?php echo esc_url($bread_archive); ?>') no-repeat center; background-size: cover;">
    <div class="ak-container"> 
        <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
            <h1 class="entry-title ak-container"><?php woocommerce_page_title(); ?></h1>
        <?php endif; ?>
        <?php
        /**
         * woocommerce_before_main_content hook
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         */
        do_action('woocommerce_before_main_content');
        ?>
        
        <?php do_action('woocommerce_archive_description'); ?>
    </div>
</header>
<?php endif; ?>
<div class="inner"> 
    <div class="ak-container">
        <div id="primary" class="content-area">
            <div class="content-inner clearfix">

                <?php while (have_posts()) : the_post(); ?>
                <?php wc_get_template_part('content', 'single-product'); ?>
               
                <?php endwhile; // end of the loop.  ?>

                <?php
                /**
                 * woocommerce_after_main_content hook
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action('woocommerce_after_main_content');
                ?>
            </div>
        </div>
        <div id="secondary" class="widget-area secondary-right sidebar custom-i">
            <div class="ak-container clearfix"> 
                <div class="custom-sidebar-right1">
                    <i class="fas fa-truck" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading vc_custom_1532013813593 align-left">ENTREGA POR NOSSA CONTA</h6>
                </div>
            </div>
            <hr class="separator-line  vc_custom_1489801899317 align_center solid" style="background-color:#dee5e8;">
            <div class="ak-container clearfix"> 
                <div class="custom-sidebar-right1" style="padding-right: 12px;">
                    <i class="fas fa-wrench" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading vc_custom_1525795034881 align-left">INSTALAÇÃO INCLUSA</h6>
                </div>
            </div>
            <hr class="separator-line  vc_custom_1489801899317 align_center solid" style="background-color:#dee5e8;">
            <div class="ak-container clearfix" > 
                <div class="custom-sidebar-right1" style="padding-right: 33px;">
                    <i class="fas fa-dollar-sign" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading m-b-md vc_custom_1525795056278 align-left">PREÇO JUSTO</h6>
                </div>
            </div>
            <hr class="separator-line  vc_custom_1489801899317 align_center solid" style="background-color:#dee5e8;">
            <div class="ak-container clearfix"> 
                <div class="custom-sidebar-right1" style="padding-right: 7px;">
                    <i class="fas fa-star" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading m-b-md vc_custom_1525795075752 align-left">GARANTIA INCLUSA</h6>
                </div>
            </div>
            <hr class="separator-line  vc_custom_1489801899317 align_center solid" style="background-color:#dee5e8;">
            <div class="ak-container clearfix"> 
                <div class="custom-sidebar-right1" style="padding-right: 11px;">
                    <i class="fas fa-heart" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading m-b-md vc_custom_1525795092681 align-left">ESCOLHA O MATERIAL</h6>
                </div>
            </div>
            <hr class="separator-line  vc_custom_1489801899317 align_center solid" style="background-color:#dee5e8;">
            <div class="ak-container clearfix"> 
                <div class="custom-sidebar-right1" style="padding-right: 11px;">
                    <i class="fas fa-gift" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading m-b-md vc_custom_1525795270023 align-left">PAGUE EM ATÉ 12X SEM JUROS</h6>
                </div>
            </div>
            <hr class="separator-line  vc_custom_1489801899317 align_center solid" style="background-color:#dee5e8;">
            <div class="ak-container clearfix"> 
                <div class="custom-sidebar-right1" style="padding-right: 16px;">
                    <i class="fab fa-whatsapp" style="font-size:40px"></i>
                </div>
                <div class="custom-sidebar-right2">
                    <h6 style="color: #6b7a83" class="vc_custom_heading m-b-md vc_custom_1525795280537 align-left">CHAMA NO WHATS (47) 98847-2903</h6>
                </div>
            </div>
            <?php
            /**
             * woocommerce_sidebar hook
             *
             * @hooked woocommerce_get_sidebar - 10
            */
            do_action('woocommerce_sidebar');
            ?>
        </div>
    </div>
</div>
<?php get_footer('shop');