@extends('site.layouts.master')

@section('title', 'Home')

@section('content')

    @include('site/includes/banner')

    @include('site/includes/home_products')

    @include('site/includes/carousel', ['title' => 'Lançamentos')

    @include('site/includes/carousel', ['title' => 'Produtos Mais Visualizados')

    @include('site/includes/carousel', ['title' => 'Destaques')

    @include('site/includes/form', ['class' => 'form-contact'])

@stop
