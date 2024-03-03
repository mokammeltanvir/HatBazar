<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 d-none d-lg-flex">
@include('frontend.home.sections.sidebar-category')
            </div>
            <div class="col-lg-10">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-5 dot-style-1 dot-style-1-position-2">
                @foreach ($sliders as $slider)
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{$slider->banner}})">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                    {{$slider->title}}
                                </h1>
                                <p class="mb-65">{{$slider->subtitle}}</p>
                                    <a href="{{$slider->btn_url}}" class="btn" type="submit">Shop Now</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>

            </div>
        </div>
    </div>
</section>
