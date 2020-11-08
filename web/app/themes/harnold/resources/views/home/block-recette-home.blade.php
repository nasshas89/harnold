<section class="recette">
   
    <div class="wrapper recette__title">
        <h3>Fière de notre communauté</h3>
        <h2>Elle nous partage leur recette de saison</h2>
    </div>   
    <div class="wrapper recette__slick">
        @foreach ($post_recette_home as $item)
            <div>
                <div class="recette__slick__card">
                    <div class="recette__slick__card__img">
                        <img  src="{{$item['image_card_recette']['url']}}" alt="Recette Harnold">
                        <a href="#" class="blog-type" style="background-color:{{$item['color']}}"> {{$item['name_cat_recette']}}</a>
                        <a href="#" class="blog-date" style="background-color:{{$item['color']}}">{{$item['date']}}</a>
                    </div>   
                    <div class="recette__slick__card__content">
                        <p class="title-card-content js-height">{{$item['title']}}</p>
                        <div class="autor-card-content">
                            <div class="autor-card-content__img">
                                <img src="{{$item['image_autor']['url']}}" alt="auteur blog bio">
                            </div>
                            <p>{{$item['name_autor']}}</p>
                        </div>    
                    </div>
                    <a class="link-recette" href="{{$item['permalink']}}"></a>      
                </div>
            </div>
        @endforeach 
    </div>
    
    <div class=" recette__end">
        <a href="">Voir toutes les recettes</a>
    </div>
</section>