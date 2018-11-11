<?php
/**
 * This is the front page code
 * Template Name: Contato
 */
get_header();
?>
<section class="section custom-banner-3 custom-submenu-infs woocommerce" style="padding: 10px;">
    <div class=" custom-infs custom-logos wc-products" style="padding:25px;">
        <div class="ak-container clearfix">                        
            <h3 class="custom-contato">CONTATO</h3>
        </div>    
    </div>    
</section>

<section class="section" style="padding-top: 35px; padding-bottom: 25px;">
    <div class="row ak-container">           
        <div class="col-md-4">
            <div class="row">
                <div class="col">
                    <?php echo do_shortcode( '[contact-form-7 id="931" title="Formulário de contacto 1"]' ); ?>
                </div>
            </div>
        </div>   
        <div class="col-md-3">
        </div>
        <div class="col-md-5">
            <div class="contact-info contact-info-block custom-contato">
                <ul class="contact-details">
                    <li>
                        <i class="fa fa-map-marker"></i> 
                        <strong>Localização:</strong> <br>
                        <span>MARTIN PESCADOR, 390 (7,55 km) - Joinville</span>
                    </li>                
                    <li>
                        <i class="fa fa-phone"></i> 
                        <strong>Telefone:</strong> <br>
                        <span>(47) 3467-7079 / (47) 8848-5920</span>
                    </li>               
                    <li>
                        <i class="fa fa-envelope"></i> 
                        <strong>E-mail:</strong> <br>
                        <span>
                            <a href="mailto:enprodutos@gmail.com">enprodutos@gmail.com</a>
                        </span>
                    </li>                
                    <li>
                        <i class="fa fa-clock-o"></i> 
                        <strong>HORÁRIO DE ATENDIMENTO:</strong> <br>
                        <span>24 horas </span>
                    </li>            
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); 
