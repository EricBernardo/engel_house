@extends('site.layouts.master')

@section('title', 'Quem somos')

@section('content')

@if($about)
    <section>
        <div class="abouts">
            <h1 class="abouts__title">Quem somos</h1>
            <div class="abouts__items">
                <div class="about_item">
                    <div class="about_item__image">
                        <img src="{{ URL::asset('storage/' . (isMobile() && $about['image_mobile'] ? $about['image_mobile'] : $about['image'])) }}" alt="Quem somos" title="Quem somos" />
                    </div>
                    <div class="about_item__info">
                        <h2 class="about_item__description">{!! nl2br($about['description']) !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="videos">
            <h2 class="videos__title">Veja nossa entrevista no Destaque Brasil.</h2>
            <div class="videos__item">
                <iframe type="text/html" frameborder="0" src="{{ $about['link_youtube'] }}"></iframe>
            </div>
        </div>
    </section>

@endif

@stop
