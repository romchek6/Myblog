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
    <!-- carousel -->
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
   <!-- carousel end -->

    <!-- main -->
    <div class="container">
        <div class="content row">
            <!-- main  -->
            <div class="main-content col-md-9 col-12">
                <h2>Последние публикации</h2>

                <div class="post row">
                    <div class="post_img col-12 col-md-4">
                        <img src="images/Screenshot_1.png" alt="post" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статья по эйфилеву башню</a>
                        </h3>
                        <i class="fa fa-user"> Автор</i>
                        <i class="fa-regular fa-calendar-days"> Дата</i>
                        <p class="preview-text">
                            струна, приют, принц, аккомпанемент, ртуть,
                            лицо, строгий, образование, отступать, японец
                            ложить, колун, гнев, высочество, исправлять
                            компетентный, негатив, престол, изменять, консилиум
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="post_img col-12 col-md-4">
                        <img src="images/image2carousel.jpg" alt="post" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статья по эйфилеву башню</a>
                        </h3>
                        <i class="fa fa-user"> Автор</i>
                        <i class="fa-regular fa-calendar-days"> Дата</i>
                        <p class="preview-text">
                            струна, приют, принц, аккомпанемент, ртуть,
                            лицо, строгий, образование, отступать, японец
                            ложить, колун, гнев, высочество, исправлять
                            компетентный, негатив, престол, изменять, консилиум
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="post_img col-12 col-md-4">
                        <img src="images/image2carousel.jpg" alt="post" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статья по эйфилеву башню</a>
                        </h3>
                        <i class="fa fa-user"> Автор</i>
                        <i class="fa-regular fa-calendar-days"> Дата</i>
                        <p class="preview-text">
                            струна, приют, принц, аккомпанемент, ртуть,
                            лицо, строгий, образование, отступать, японец
                            ложить, колун, гнев, высочество, исправлять
                            компетентный, негатив, престол, изменять, консилиум
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="post_img col-12 col-md-4">
                        <img src="images/image2carousel.jpg" alt="post" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статья по эйфилеву башню</a>
                        </h3>
                        <i class="fa fa-user"> Автор</i>
                        <i class="fa-regular fa-calendar-days"> Дата</i>
                        <p class="preview-text">
                            струна, приют, принц, аккомпанемент, ртуть,
                            лицо, строгий, образование, отступать, японец
                            ложить, колун, гнев, высочество, исправлять
                            компетентный, негатив, престол, изменять, консилиум
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="post_img col-12 col-md-4">
                        <img src="images/image2carousel.jpg" alt="post" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статья по эйфилеву башню</a>
                        </h3>
                        <i class="fa fa-user"> Автор</i>
                        <i class="fa-regular fa-calendar-days"> Дата</i>
                        <p class="preview-text">
                            струна, приют, принц, аккомпанемент, ртуть,
                            лицо, строгий, образование, отступать, японец
                            ложить, колун, гнев, высочество, исправлять
                            компетентный, негатив, престол, изменять, консилиум
                        </p>
                    </div>
                </div>

            </div>
            <!-- sidebar -->
            <div class="sidebar col-md-3 col-12">
                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="поиск...">
                    </form>
                </div>

                <div class="section topics">
                    <h3>Темы</h3>
                    <ul>
                        <li><a href="#">Мотивация</a></li>
                        <li><a href="#">Наука</a></li>
                        <li><a href="#">Биография</a></li>
                        <li><a href="#">Факты</a></li>
                        <li><a href="#">Програмирование</a></li>
                        <li><a href="#">Компьютеры</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main end -->
    <!-- footer -->
    <div class="footer container-fluid">
        <div class="footer-content container">
            <div class="row">
                <div class="section about col-md-4 cpl-12">
                    <h3 class="logo-text">My blog</h3>
                    <p>
                        Мой блог - это лучший в мире блог струна, приют, принц, аккомпанемент, ртуть,
                        лицо, строгий, образование, отступать, японец
                        ложить, колун, гнев, высочество, исправлять
                    </p>
                    <div class="contact">
                        <span><i class="fa-solid fa-phone"></i> 8-951-888-78-88</span>
                        <span><i class="fa-solid fa-envelope"></i> 8-951-888-78-88</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-vk"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="section links col-md-4 cpl-12">
                    <h3>Быстрые ссылки</h3>
                    <br>
                    <ul>
                        <a href="">
                            <li>55</li>
                        </a>
                        <a href="">
                            <li>55</li>
                        </a>
                        <a href="">
                            <li>55</li>
                        </a>
                        <a href="">
                            <li>55</li>
                        </a>
                    </ul>
                </div>
                <div class="section contact-form col-md-4 cpl-12">
                    <h3>Контакты</h3>
                    <br>
                    <form action="index.php" method="post">
                        <input type="email" name="email" class="text-input contact-input" placeholder="Ваш email адрес...">
                        <textarea name="message" rows="4" class="text-input contact-input"  placeholder="Ваше сообщение..."></textarea>
                        <button type="submit" class="btn-big contact-btn">
                            <i class="fa-solid fa-envelope"></i>
                            Отправить
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            &copy; myblog.com | designed by romchek6
        </div>
    </div>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>-->
</body>
</html>