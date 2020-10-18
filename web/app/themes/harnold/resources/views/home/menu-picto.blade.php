
<div id="crumbs" class="wrapper">
    <h2>Composer votre panier<img class="picto-title" src="@asset('images/picto-crew-tomat.svg')" alt="picto menu"></h2>
    <ul>
        <li class="tablinks" data-cityname="Legumes">
            <a href="#1">
                <img class="hero-bg" src="@asset('images/legumes.svg')" alt="picto menu">
                Légumes
            </a>   
        </li>

        <li class="tablinks" data-cityname="Fruits">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/fruits.svg')" alt="picto menu">
            Fruits
        </a>
        </li>
        <li class="tablinks" data-cityname="Cagette">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/cagette.svg')" alt="picto menu">
            cagettes
        </a>
        </li>
        <li class="tablinks" data-cityname="Promotions">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/promotion.svg')" alt="picto menu">
            promotions
        </a>
        </li>
    </ul>
</div>
 
  <div class="sub-menu-picto wrapper " id="Legumes">
        @include('home.product.card-product')
       
  </div>
  <div class="sub-menu-picto wrapper" id="Fruits">
    
    @include('home.product.card-product')
   
</div>  
<div class="sub-menu-picto wrapper" id="Cagette">
    
    @include('home.product.card-product')
</div>
<div class="sub-menu-picto wrapper" id="Promotions">
    
    @include('home.product.card-product')
</div>
