@extends('site.layouts.master')

@section('content')

    <section>
        <div class="categories">
            <div class="categories--sidebar">
                <ul class="categories--list">
                    @foreach($categories as $i => $category)
                        <li class="categories--item {{ $category_slug == $category['slug'] ? 'active' : null }}">
                            <a href="{{ url('c/' . $category['slug'])}}">
                                ➤ {{ $category['title'] }}
                            </a>
                        </li>
                        @foreach($category->subcategories as $i => $subcategory)
                            <li class="categories--subitem {{ $subcategory_slug == $subcategory['slug'] ? 'active' : null }}">
                                <a href="{{ url('c/' . $category['slug'] . '/' . $subcategory['slug'])}}">
                                    ○ {{ $subcategory['title'] }}
                                </a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
            <div class="categories--products">
                @foreach($products as $i => $item)
                    <div class="carousel--product">
                        <a href="{{ url('p/' . $item['slug'])}}">
                            <div class="carousel--product-img">
                                <img src="{{ URL::asset('storage/' . (isMobile() ? $item['image_mobile'] : $item['image']))}}" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
                            </div>
                            <p class="carousel--product-title" title="{{$item['title']}}">{{$item['title']}}</p>
                            <p class="carousel--product-price">R$ {{ formatMoney($item['price']) }}</p>
                            <p class="carousel--product-see-more">Veja Mais</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('site/includes/form', ['class' => 'form-product'])

@stop
