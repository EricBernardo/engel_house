@extends('site.layouts.master')

@section('content')

    <section>
        <div class="categories">
            <div class="categories--sidebar">
                @if(request()->get('q'))
                    <p><b>Buscar por:</b> {{ request()->get('q') }}</p>
                @endif
                <ul class="categories--list">
                    @foreach($categories as $i => $category)
                        <li class="categories--item {{ request()->get('category') == $category['slug'] ? 'active' : null }}">
                            <a href="{{ url('produtos?category=' . $category['slug'] . '&q=' . request()->get('q'))}}">
                                ➤ {{ $category['title'] }}
                            </a>
                        </li>
                        @foreach($category->subcategories as $i => $subcategory)
                            <li class="categories--subitem {{ request()->get('subcategory') == $subcategory['slug'] ? 'active' : null }}">
                                <a href="{{ url('produtos?category=' . $category['slug'] . '&subcategory=' . $subcategory['slug'] . '&q=' . request()->get('q'))}}">
                                    ○ {{ $subcategory['title'] }}
                                </a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
            <div class="categories--products">
                @if(count($products))
                    @foreach($products as $i => $item)
                    <div class="carousel--product">
                        <a href="{{ url('p/' . $item['slug'])}}">
                            <div class="carousel--product-img">
                                <img src="{{ URL::asset('storage/' . (isMobile() ? $item['image_mobile'] : $item['image']))}}" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
                            </div>
                            <p class="carousel--product-title" title="{{$item['title']}}">{{$item['title']}}</p>
                            @if($setting['show_prices'])
                                <p class="carousel--product-price">R$ {{ formatMoney($item['price']) }}</p>
                            @endif
                            <p class="carousel--product-see-more">Veja Mais</p>
                        </a>
                    </div>
                    @endforeach
                    <?php echo $products->render(); ?>
                @else
                    <div class="categories-message">
                        Resultado não encontrado.
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('site/includes/form', ['class' => 'form-product'])

@stop
