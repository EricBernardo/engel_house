<section>
    <div class="home_products">
        <div class="home_products__items">
            @foreach ($home_products as $item)
                <div class="home_product_item" style="background-image: url('{{ url('storage/' . (isMobile() && $item['image_mobile'] ? $item['image_mobile'] : $item['image']))}}')">
                    <a href="{{ $item['url'] }}">
                        <div class="home_product_item__shadow"></div>
                        <h2 class="home_product_item__title">{{ $item['title'] }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
