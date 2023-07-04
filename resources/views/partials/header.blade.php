<header>
    <div id="nav_wrapper" class="d-flex">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="nav_left">
                <a href="/"> <img id="nav_logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </a>
            </div>
            <div class="nav_right">
                <ul class="d-flex list-unstyled">
                    @foreach ($someLinks as $link)
                        <a class="link p-1" href="">
                            <li>{{ $link['text'] }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div id="jumbo">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel_img d-block w-100" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="carousel_img d-block w-100"
                        src="https://www.hollywoodreporter.com/wp-content/uploads/2015/05/gallerychar_1900x900_justiceleague_52ab8e54d0a6f0.42170553.jpg?w=3000"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="carousel_img d-block w-100"
                        src="https://hips.hearstapps.com/hmg-prod/images/dc-movies-in-order-05-justice-league-1608143609.jpg"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>
