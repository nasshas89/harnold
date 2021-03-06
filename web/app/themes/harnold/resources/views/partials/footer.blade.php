<footer class="footer">
    <div class="container footer__up">
      @foreach ($footer['picto_repeater'] as $item)
        <div class="footer__up__item">
            <div class="footer__up__item__image">
              <img src="{{$item['picto_image_reassurance']['url']}}" alt="">
            </div>
            <p class="footer__up__item__title js-egalizeHeight">{{$item['text_image_reassurance']}}</p>
        </div>
      @endforeach
    </div>
    <div class="footer__down">
      <div class="container footer__down__content">
        <div class="content__logo">
          <img src="@asset('images/logo2.svg')" alt="">
        </div>
        <nav class="content__menu">
          <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">Concept</a></li>
            <li><a href="">Commander</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        </nav>
        <div class="content__citation">
            <h2>" Rendre le bio abordable pour tous "</h2>
        </div>
        <div class="content__social">
          <div class="content__social__item">
            <img src="@asset('images/linkedin.svg')" alt="">
          </div>
          <div class="content__social__item">
            <img src="@asset('images/fb.svg')" alt="">
          </div>
          <div class="content__social__item">
            <img src="@asset('images/youtube.svg')" alt="">
          </div>
        </div>
        <div class="content__cgu">
          <ul>
            <li>&#169;2020 Tous droit réservé. Copyright Harnold</li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </div>
        
      </div>
    </div>
  </footer> 
