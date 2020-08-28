@extends('site.layouts.master')

@section('title', 'Home')

@section('content')

    @include('site/includes/banner', ['banner' => $banner])

    @include('site/includes/home_products')

    @include('site/includes/blocks', ['title' => 'Nossos serviços', 'results' => $services])

    @include('site/includes/form', ['class' => 'form-home'])

@stop
