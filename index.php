<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <!--    icons-->
    <script src="https://kit.fontawesome.com/1fe27e3f18.js" crossorigin="anonymous"></script>
    <!--    Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--    fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--    css-->
    <link rel="stylesheet" href="css/css.css">


</head>
<body>
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>
                        <a href="/">My blog</a>
                    </h1>
                </div>
                <nav class="col-8">
                    <ul class="">
                        <li><a href="#"><i class="fa-solid fa-house-chimney"></i> Главная</a></li>
                        <li><a href="#"><i class="fa-solid fa-address-card"></i> О нас</a></li>
                        <li><a href="#"><i class="fa-brands fa-servicestack"></i> Услуги</a></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Кабинет
                            </a>
                            <ul>
                                <li><a href="#">Админ панель</a></li>
                                <li><a href="#">Выход</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- carousel  -->
    <div class="container">
        <div class="row">
            <h2 class="carousel_title">Карусель</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
<!--        <div class="carousel-indicators">-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
<!--        </div>-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1carousel.jpg" class="d-block w-100" height="400"  alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">111</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/image2carousel.jpg" class="d-block w-100" height="400"  alt="...">
                <div class="carousel-caption-hack  carousel-caption d-none d-md-block">
                    <h5><a href="#">111</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/image3carousel.jpeg" class="d-block w-100" height="400"  alt="...">
                <div class="carousel-caption-hack  carousel-caption d-none d-md-block">
                    <h5><a href="#">111</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
   <!--carousel end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>-->
</body>
</html>