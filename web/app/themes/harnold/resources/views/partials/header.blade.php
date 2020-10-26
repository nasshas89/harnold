<section class="header-harnold @if(is_page_template('views/template-pro.blade.php')) pro-header @endif">
    <div class="header-harnold__main wrapper">
        <div class="logo_header">
            <img class="" src="@asset('images/logo2.svg')" alt="Logo-Harnold" >
            <a class ="link-logo-header" href=""></a>
        </div>
            <nav class="menu">
                <a href="">Accueil</a>
                <a href="">Concept</a>
                <a href="">Livraison</a>
                <?php global $woocommerce; ?>
<a class="your-class-name" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
title="<?php _e('Cart View', 'woothemes'); ?>">
<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
$woocommerce->cart->cart_contents_count);?>  -
<?php echo $woocommerce->cart->get_cart_total(); ?>
</a>
                <div class="bag-picto">
                    <p>Mon Panier</p>
                    <img class="" src="@asset('images/bag.svg')" alt="">
                    <a href="#" class="link-bag js-cart-click" id="mySidenav" href=""></a>
                </div>
               
            </nav>
            


        @if(is_page_template('views/template-pro.blade.php'))
            <nav class="menu-pro">
                <ul>
                    <li><a href="">Manifest</a></li>
                    <li><a href="">La boutique</a></li>
                    <li><a href="">Candidature</a></li>
                </ul>
            </nav>
       @endif             
    </div>    
</section> 
@include('home.modal-cart')



