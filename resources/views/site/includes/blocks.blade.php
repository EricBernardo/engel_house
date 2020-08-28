<section>
    <div class="blocks">
        @if(Request::is('/'))
            <h2 class="blocks__title">{{ $title }}</h2>
        @else
        <h1 class="blocks__title">{{ $title }}</h1>
        @endif

        <div class="blocks__items">
            @foreach ($results as $item)
                <div class="block_item">
                    <div class="block_item__image">
                        <img src="{{ URL::asset('storage/' . (isMobile() && $item['image_mobile'] ? $item['image_mobile'] : $item['image']))}}" alt="{{ $item['title'] }}" title="{{ $item['title'] }}" />
                    </div>
                    <div class="block_item__info">
                        <h2 class="block_item__title">{{ $item['title'] }}</h2>
                        @if(isset($item['slug']) && $item['slug'])
                            <p class="block_item__description">{!! nl2br(summarizeText($item['description'])) !!}</p>
                            <a href="{{ url('/produtos/' . $item['slug']) }}">
                                Mais Detalhes
                            </a>
                        @else
                            <p class="block_item__description">{!! nl2br($item['description']) !!}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
