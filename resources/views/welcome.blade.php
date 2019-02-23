@extends('main')

@section('content')
<main role="main">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval=5000>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleControls" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide d-block img-fluid" src="https://cdn.cnn.com/cnnnext/dam/assets/140108115144-winter-luxury-bighorn.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-top">
                <h1>Welcome to Frosty's</h1>
                <p></p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-fluid d-none d-sm-block" src="https://pixabay.com/get/e830b40a2bf0093ed1534705fb094797e575e2d311b60c4090f5c170a3e8b6bbde/gleise-1555348_1920.jpg" alt="Second slide">
              <img class="second-slide img-fluid d-sm-none" src="https://pixabay.com/get/e830b40a2bf0093ed1534705fb094797e575e2d311b60c4090f5c170a3e8b6bbde/gleise-1555348_1920.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-top">
                <h1>Enjoy Long Train Rides!</h1>
                <p></p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide img-fluid d-none d-sm-block" src="https://static.pexels.com/photos/248880/pexels-photo-248880.jpeg" alt="Second slide">
              <img class="second-slide img-fluid d-sm-none" src="https://static.pexels.com/photos/248880/pexels-photo-248880.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Fresh From The Farm!!</h1>
                <p></p>
                <p></p>
              </div>
            </div>
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
    </main>
  @stop
      