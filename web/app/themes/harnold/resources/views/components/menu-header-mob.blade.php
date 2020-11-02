<div class="header_mob">
        <div class="header_mob__burger" id="js-open-burger">
             <a href="#"><img class="header_mob__burger" src="@asset('images/menu-mobil.svg')" alt="menu Burger Harnold" ></a>
        </div>
         <div class="header_mob__logo">
             <img class="" src="{{$header_menu->logo_header->url}}" alt="Logo-Harnold" >
             <a class ="header_mob__logo__link" href=""></a>
         </div>
         <div class="header_mob__picto">
             <a href=""><img  src="@asset('images/user.svg')" alt="Mon compte Harnold" ></a>
             <a href="#" class="js-cart-click" ><img  src="@asset('images/shopping-cart.svg')" alt="Panier harnold" ></a>
         </div>
 </div> 
 @include('components.modal-menu-burger')