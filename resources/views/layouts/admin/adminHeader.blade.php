<!-- Carousel wrapper -->
<div
    id="carouselBasicExample"
    class="carousel slide carousel-fade"
    data-mdb-ride="carousel"
>
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="3"
            aria-label="Slide 4"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="4"
            aria-label="Slide 5"
        ></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -1st -->
        <div class="carousel-item active">
            <img
                src="{{asset('img/banner_img/web_development_banner.jpg')}}"
                class="d-block w-100"
                height="350px"
                alt="Sunset Over the City"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -2nd -->
        <div class="carousel-item">
            <img
                src="{{asset('img/banner_img/lara_banner.jpg')}}"
                class="d-block w-100"
                height="350px"
                alt="Canyon at Nigh"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Single item -3rd -->
        <div class="carousel-item">
            <img
                src="{{asset('img/banner_img/android_banner.jpg')}}"
                class="d-block w-100"
                height="350px"
                alt="Cliff Above a Stormy Sea"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>

        <!-- Single item -4th-->
        <div class="carousel-item">
            <img
                src="{{asset('img/banner_img/flutter_banner.jpg')}}"
                class="d-block w-100"
                height="350px"
                alt="Cliff Above a Stormy Sea"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>

        <!-- Single item -5th -->
        <div class="carousel-item">
            <img
                src="{{asset('img/banner_img/angular_banner.jpg')}}"
                class="d-block w-100"
                height="350px"
                alt="Cliff Above a Stormy Sea"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button
        class="carousel-control-prev"
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->
