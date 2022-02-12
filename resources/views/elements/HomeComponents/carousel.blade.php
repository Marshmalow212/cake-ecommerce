

<!-- carousel begin -->
<section id=carouselHome>
    <!--carousel-->
    <div id="homepageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            @php
                $_active='active';
            @endphp
            @foreach ($sliders as $slider)
            <div class="carousel-item {{$_active}}">
                <img src="{{asset('storage/uploads/'.$slider->picture)}}" class="d-block w-100" alt="{{$slider->picture}}">
            </div>
            @php
                $_active='';
            @endphp
            @endforeach

        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#homepageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next z-index-3" type="button" data-bs-target="#homepageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--scripts for slide interval -->
    <script>
        var homepageCarousel = document.querySelector('#homepageCarousel');
        var carousel = new bootstrap.Carousel(homepageCarousel,{interval:2000,wrap:true});
    </script>

</section>
<!-- carousel end  -->
