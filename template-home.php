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

<section class="section custom-banner-3 custom-submenu-infs">
    <div class="container">
        <div class="row custom-infs custom-logos" style="padding-top:25px;">
            <div class="col-md-4">
                <div class="row custom-inf-menu1">
                    <div class="col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/mesasinuca.png">
                    </div>
                    <div class="col-md-9" style="padding-left: 35px;">
                        <h3>Frete Grátis para Regiões </h3>                        
                        <p> PR - SC - RS - SP - MS - MG - GO | Válido para Mesas </p>
                       
                    </div>    
                </div>            
            </div>
            <div class="col-md-4">
                <div class="row custom-inf-menu2">
                    <div class="col-md-3">                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tacoEbolinha.png">
                    </div>
                    <div class="col-md-9">
                        <h3> Pagamento Seguro </h3>
                        <p> Compre sua mesa e pague somente na entrega </p>
                    </div>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="row custom-inf-menu3">
                    <div class="col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/bolaSinuca.png">
                    </div>
                    <div class="col-md-9" style="padding-left: 25px;">     
                        <h3>Parcelamento em até 12 x no cartão de crédito </h3>
                    </div>
                </div>                   
            </div>
        </div>
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
    <!-- This is Product 1 Section !-->
    <section id="product1" class="prod1-slider">
        <div class="ak-container">
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