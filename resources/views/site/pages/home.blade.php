@extends('site.layouts.master')

@section('title', 'Home')

@section('content')

    @include('site/includes/banner')

    @include('site/includes/carousel', ['title' => 'Produtos Mais Vendidos'])

    @include('site/includes/carousel', ['title' => 'Produtos Recomendados'])

    @include('site/includes/carousel', ['title' => 'Produtos Recentes'])

@stop
