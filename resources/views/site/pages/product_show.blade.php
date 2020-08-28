@extends('site.layouts.master')

@section('content')

@if($product)
    <section>
        <div class="products">
            <h1 class="products__title">{{ $product['title'] }}</h1>
            <div class="products__items">
                <div class="product_item">
                    <div class="product_item__image">
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div class="product_item__info">
                        <h2 class="product_item__description">{!! nl2br($product['description']) !!}</h2>
                    </div>
                </div>
            </div>
        </div>
        @include('site/includes/form', ['class' => 'form-product'])
    </section>
@endif

@stop
