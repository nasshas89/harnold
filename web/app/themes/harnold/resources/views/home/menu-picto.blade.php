
<div id="crumbs" class="wrapper">
    <h2>Composer votre panier<img class="picto-title" src="@asset('images/picto-crew-tomat.svg')" alt="picto menu"></h2>
    <ul>
        <li class="tablinks" onclick="openCity(event, 'London')">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/legumes.svg')" alt="picto menu">
            Légumes
        </a>   
        </li>

        <li class="tablinks" onclick="openCity(event, 'Paris')">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/fruits.svg')" alt="picto menu">
            Fruits
        </a>
        </li>
        <li class="tablinks" onclick="openCity(event, 'Tokyo')">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/cagette.svg')" alt="picto menu">
            cagettes
        </a>
        </li>
        <li class="tablinks" onclick="openCity(event, 'Dubai')">
        <a href="#1">
            <img class="hero-bg" src="@asset('images/promotion.svg')" alt="picto menu">
            promotions
        </a>
        </li>
    </ul>
</div>
 
  <div class="sub-menu-picto wrapper " id="London">
        @include('home.product.card-product')
  </div>
  <div class="sub-menu-picto wrapper" id="Paris">
    @include('home.product.card-product')
</div>  
<div class="sub-menu-picto wrapper" id="Tokyo">
    @include('home.product.card-product')
</div>
<div class="sub-menu-picto wrapper" id="Dubai">
    @include('home.product.card-product')
</div>

<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("sub-menu-picto");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>