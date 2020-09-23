@extends('site.layouts.master')

@section('title', 'Home')

@section('content')

    @include('site/includes/banner')

    @include('site/includes/home_products')

    @include('site/includes/carousel', ['title' => 'Lançamentos', 'products' => $products_news])

    @include('site/includes/carousel', ['title' => 'Produtos Mais Visualizados', 'products' => $products_most_viewed])

    @include('site/includes/carousel', ['title' => 'Destaques', 'products' => $products_featured])

    @include('site/includes/form', ['class' => 'form-contact'])

@stop
