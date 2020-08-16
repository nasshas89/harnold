<section class="header-harnold @if(is_page_template('views/template-pro.blade.php')) pro-header @endif">
    <div class="header-harnold__main wrapper">
        <div class="logo_header">
            <img class="" src="@asset('images/empty.jpg')" alt="Logo-Harnold" >
        </div>
            <nav class="menu">
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Concept</a></li>
                    <li><a href="">Livraison</a></li>
                    <li><a href="">Commander</a></li>
                    <li><a href="">Mon compte</a></li>
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



