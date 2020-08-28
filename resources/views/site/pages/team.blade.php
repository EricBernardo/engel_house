@extends('site.layouts.master')

@section('title', 'Equipe')

@section('content')

<section>
    <div class="teams">
        <h1 class="teams__title">Conheça nossa equipe</h1>
        <div class="teams__items">
            @foreach ($teams as $item)
                <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{ URL::asset('storage/' . (isMobile() && $item['image_mobile'] ? $item['image_mobile'] : $item['image'])) }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" />
                    </div>
                    <div class="team_item__info">
                        <h2 class="team_item__title">{{ $item['name'] }}</h2>
                        <p class="team_item__description">{{ $item['role'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@stop
