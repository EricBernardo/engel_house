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
                <p class="product_details__info--breadcrumb">Home / Luminária</p>
                <h1 class="product_details__info--title">{{ $product['title'] }}</h1>
                <p class="product_details__info--category"><span>Categoria:</span> Luminária</p>
                <p class="product_details__info--price">R$ 789,00</p>
                <p class="product_details__info--parcels">até 3x de R$ 263,00 sem juros</p>
                <p class="product_details__info--descriptions">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    Nisi ut voluptatibus dolorum hic eligendi beatae, dolorem ipsam quo ullam autem suscipit ipsum. Suscipit earum tenetur in voluptates nisi, quos deserunt.
                </p>
            </div>
        </div>
    </section>

    @include('site/includes/carousel', ['title' => 'Produtos Relacionados'])

    @include('site/includes/form', ['class' => 'form-product'])

@endif

@stop
