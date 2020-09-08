<section>
    <div class="carousel">
    <div class="carousel--title"><span>{{$title}}</span></div>
        <div class="carousel--products owl-carousel owl-theme">
            @for($i = 0; $i < 10; $i++)
            <div class="carousel--product">
                <a href="#">
                    <img class="carousel--product-img" src="https://demo.shopperwp.io/shopperpro/wp-content/uploads/2013/06/cd_6_angle-300x300.jpg" alt="">
                    <p class="carousel--product-title">Woo Album #{{$i}}</p>
                    <p class="carousel--product-price">R$ {{$i}}2,90</p>
                </a>
            </div>
            @endfor
        </div>
    </div>
</section>
