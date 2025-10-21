<?php
include './assets/src/header.php'

?>
<head>   <link rel="stylesheet" href="./assets/src/style.css"></head>
<div class="container-wrap">
        <div id="officeCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#officeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#officeCarousel" data-slide-to="1"></li>
                <li data-target="#officeCarousel" data-slide-to="2"></li>
                <li data-target="#officeCarousel" data-slide-to="3"></li>
                <li data-target="#officeCarousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="./assets/images/chicago.jpg" class="d-block w-100" alt="Office 4">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/images/sandiego.jpg" class="d-block w-100" alt="Office 1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/images/sarasota.jpg" class="d-block w-100" alt="Office 2">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/images/seattle.jpg" class="d-block w-100" alt="Office 3">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/images/Newyork.jpg" class="d-block w-100" alt="Office 5">
                </div>
            </div>

            <a class="carousel-control-prev" href="#officeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#officeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<?php
include './assets/src/footer.php'

?>
