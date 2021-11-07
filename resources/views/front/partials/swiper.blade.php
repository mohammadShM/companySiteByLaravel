<section class="product">
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @forelse ($sliders as $item)
                <div class="swiper-slide">
                    <section>
                        <h1>{{$item->caption}}</h1>
                    </section>
                    <img src="{{asset('images/slider/'.$item->image)}}" alt="{{$item->caption}}">
                </div>
            @empty
                <div class="swiper-slide">
                    <section>
                        <h1>This is caption</h1>
                    </section>
                    <img src="{{asset('assets/images/1.jpg')}}" alt="">
                </div>
            @endforelse
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
