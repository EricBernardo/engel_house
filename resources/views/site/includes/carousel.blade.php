<section>
    <div class="carousel">
        <div class="carousel--title"><span>{{$title}}</span></div>
        <div class="carousel--products owl-carousel">

            @foreach($products as $i => $item)
                @for ($i = 0; $i < 10; $i++)
                    <div class="carousel--product">
                        <a href="{{ url('produtos/' . $item['slug'])}}">
                            <img class="carousel--product-img" src="{{ URL::asset('storage/' . (isMobile() ? $item['image_mobile'] : $item['image']))}}" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
                            <p class="carousel--product-title">{{$item['title']}}</p>
                            <p class="carousel--product-price">R$ {{$i}}2,90</p>
                            <p class="carousel--product-see-more">Veja Mais</p>
                        </a>
                    </div>
                @endfor
            @endforeach

        </div>
    </div>
</section>
