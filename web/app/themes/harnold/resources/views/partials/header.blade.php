<section class="header-harnold @if(is_page_template('views/template-pro.blade.php')) pro-header @endif">
    <div class="header-harnold__main wrapper">
        <div class="logo_header">
            <img class="" src="@asset('images/logo2.svg')" alt="Logo-Harnold" >
        </div>
            <nav class="menu">
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Concept</a></li>
                    <li><a href="">Livraison</a></li>
                </ul>
                <div class="bag-picto">
                    <p>Commander</p>
                    <img class="" src="@asset('images/bag.svg')" alt="">
                </div>
                <div class="bag-picto">
                    <p>Mon compte</p>
                    <img class="" src="@asset('images/user.svg')" alt="">
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



