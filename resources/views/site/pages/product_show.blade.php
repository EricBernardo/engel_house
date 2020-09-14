@extends('site.layouts.master')

@section('content')

@if($product)
    <section>
        <div class="product_details">
            <div class="product_details__images">
                <div class="product_details__main-image">
                    <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                </div>
                <div class="product_details__carousel owl-carousel">
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>
                    <div>
                        <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}" alt="{{ $product['title'] }}" title="{{ $product['title'] }}" />
                    </div>

                </div>
            </div>
            <div class="product_details__info">
                <h1 class="product__info--title">{{ $product['title'] }}</h1>
            </div>
        </div>
    </section>
@endif

@stop
