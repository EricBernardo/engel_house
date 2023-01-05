@if(count($products))
    <section>
        <div class="carousel">
            <div class="carousel--title"><span>{{$title}}</span></div>
            <div class="carousel--products owl-carousel">

                @foreach($products as $i => $item)
                    <div class="carousel--product">
                        <a href="{{ url('p/' . $item['slug'])}}">
                            <div class="carousel--product-img">
                                <img src="{{ URL::asset('storage/' . (isMobile() ? $item['image_mobile'] : $item['image']))}}" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
                            </div>
                            <p class="carousel--product-title" title="{{$item['title']}}">{{$item['title']}}</p>
                            <p class="carousel--product-price">
                                @if($setting['show_prices'])
                                    R$ {{ formatMoney($item['price']) }}
                                @endif
                            </p>
                            <p class="carousel--product-see-more">Veja Mais</p>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif
