<section class="header-harnold @if(is_page_template('views/template-pro.blade.php')) pro-header @endif">
    @include('partials.header-up')
    <div class="header-harnold__main wrapper">
        <div class="logo_header">
            <img class="" src="@asset('images/harnold-logo-rose-horizontale.svg')" alt="Logo-Harnold" >
            <a class ="link-logo-header" href=""></a>
        </div>
            <nav class="menu">
                <ul>
                    <li><a href="">Concept</a></li>
                    <li><a href="">Livraison</a></li>
                    <li><a href="">Recette/témoignage</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href=""><img  src="@asset('images/user.svg')" alt="Logo-Harnold" >Mon Compte</a></li>
                    <li><a href="#" class="js-cart-click" href=""><img  src="@asset('images/shopping-cart.svg')" alt="Logo-Harnold" >Panier</a></li>
                </ul>
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



