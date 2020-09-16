@extends('site.layouts.master')

@section('content')

@if($product)
    <section>
        <div class="product_details">
            <div class="product_details__images">
                <div class="product_details__main-image">
                    <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                </div>
            </div>
            <div class="product_details__info">
                <p class="product_details__info--breadcrumb">Home / {{ $product->subcategory->category['title'] }} / {{ $product->subcategory['title'] }}</p>
                <h1 class="product_details__info--title">{{ $product['title'] }}</h1>
                <p class="product_details__info--category"><span>Categoria:</span> {{ $product->subcategory->category['title'] }}</p>
                <p class="product_details__info--price">R$ {{ formatMoney($product['price']) }}</p>
                <p class="product_details__info--parcels">até 3x de R$ {{ formatMoney($product['price'] / 3) }} sem juros</p>
                <p class="product_details__info--descriptions">{!! nl2br($product['description']) !!}</p>
            </div>
        </div>
    </section>

    @include('site/includes/carousel', ['title' => 'Produtos Relacionados', 'products' => $related_products])

    @include('site/includes/form', ['class' => 'form-product'])

@endif

@stop
