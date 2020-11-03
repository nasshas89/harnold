<div class="modal-menu-mobile">
    <div class="modal-menu-mobile__content">
        <div class="modal-menu-mobile__content__logo">
            <a href="#"><img class="" src="@asset('images/harnold-logo-blanc.png')" alt="menu Burger Harnold"></a>
        </div>
        <div class="modal-menu-mobile__content__account">
            <a href=""><img src="@asset('images/account-white.svg')" alt="Mon compte Harnold">Mon compte</a>
            <a href="#" class="js-cart-click"><img src="@asset('images/cart-white.svg')" alt="Panier harnold">Panier</a>
        </div>
        <nav class="modal-menu-mobile__content__nav">
            <ul class="modal-menu-mobile__content__nav__list">
                @foreach ($header_mob as $item)
                    <li><a href="{{$item['url']}}">{{$item['title']}}</a></li>
                @endforeach
            </ul>
        </nav>
        <div class="modal-menu-mobile__content__social">
            @foreach ($header_menu->picto_repeater as $picto)
                <div class="modal-menu-mobile__content__social__picto">
                    <img src="{{ $picto['picto_image_social']['url'] }}" alt="">
                    <a class="modal-menu-mobile__content__social__link" href="{{ $picto['link_social'] }}"></a>
                </div>
            @endforeach
        </div>
        <a href="#" class="close-button"><img src="@asset('images/close.svg')" alt="Panier harnold">Fermer</a>
    </div>
</div>
