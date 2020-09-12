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
                <a href="">Zone de livraison</a>
                <div class="bag-picto">
                    <p>Mon Panier</p>
                    <img class="" src="@asset('images/bag.svg')" alt="">
                    <a href="#" class="link-bag js-cart-click" href=""></a>
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



