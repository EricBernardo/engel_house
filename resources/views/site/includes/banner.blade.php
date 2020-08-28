@if($banner)
    <section>
        <div class="banner">
            <img class="banner__img" src="{{ URL::asset('storage/' . (isMobile() ? $banner['image_mobile'] : $banner['image']))}}" alt="{{ $banner['title'] }}" title="{{ $banner['title'] }}">
            <div class="banner__text">
                <h1 class="banner__title">{{ $banner['title'] }}</h1>
                <h2 class="banner__subtitle">{{ $banner['subtitle'] }}</h2>
            </div>
        </div>
    </section>
@endif
