@extends('site.layouts.master')

@section('content')
<?php /*
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
    </section>
@endif
*/ ?>

<section>
    <div class="product">
        <div class="shoeBackground">
            <div class="gradients">
                <div class="gradient second" color="blue"></div>
                <div class="gradient" color="red"></div>
                <div class="gradient" color="green"></div>
                <div class="gradient" color="orange"></div>
                <div class="gradient" color="black"></div>
            </div>
            <img src="{{url('/images/blue.png')}}" alt="" class="shoe show" color="blue">
            <img src="{{url('/images/red.png')}}" alt="" class="shoe" color="red">
            <img src="{{url('/images/green.png')}}" alt="" class="shoe" color="green">
            <img src="{{url('/images/orange.png')}}" alt="" class="shoe" color="orange">
            <img src="{{url('/images/black.png')}}" alt="" class="shoe" color="black">

        </div>
        <div class="info">
            <div class="shoeName">
                <div>
                    <h1 class="big">Nike Zoom KD 12</h1>
                    <span class="new">new</span>
                </div>
                <h3 class="small">Men's running shoes</h3>
            </div>
            <div class="description">
                <h3 class="title">Informações</h3>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
            </div>
            <div class="color-container">
                <div class="colors">
                    <span class="color active" primary="#2175f5" color="blue"></span>
                    <span class="color" primary="#f84848" color="red"></span>
                    <span class="color" primary="#29b864" color="green"></span>
                    <span class="color" primary="#ff5521" color="orange"></span>
                    <span class="color" primary="#444" color="black"></span>
                </div>
            </div>
            <div class="size-container">
                <h3 class="title">Quantidade</h3>
                <div class="sizes">
                    <span class="size">7</span>
                    <span class="size">8</span>
                    <span class="size">10</span>
                    <span class="size">11</span>
                </div>
            </div>
            <div class="buy-price">
                <a href="#" class="buy"><i class="fas fa-shopping-cart"></i>Adicionar</a>
                <div class="price">
                    <h1>R$ 189.99</h1>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
