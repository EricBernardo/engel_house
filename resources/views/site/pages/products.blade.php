@extends('site.layouts.master')

@section('title', 'Produtos')

@section('content')

@include('site/includes/blocks', ['title' => 'Produtos', 'results' => $products])
@include('site/includes/form', ['class' => 'form-product'])

@stop
