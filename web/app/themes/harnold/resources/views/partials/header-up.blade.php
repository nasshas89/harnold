<div class="header-up">
    <div class="header-up__content wrapper">
        <div class="header-up__content__delivery">
            <p><span>{{$header_menu->info_1_header_up}}</span> {{$header_menu->text_1_header_up}}</p>
        </div>
        <div class="header-up__content__social">
            <p>{{$header_menu->text_2_header_up}}</p>
            @foreach ($header_menu->picto_repeater as $picto)
                <div class="header-up__content__social__picto">
                        <img src="{{$picto['picto_image_social']['url']}}" alt="">
                        <a class="header-up__content__social__picto__link" href="{{$picto['link_social']}}"></a>
                </div>
            @endforeach
            
        </div>
    </div>
</div>