<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Project office</title>
</head>

<body>
    <?php require "blocks/modalwindows.php"?>
    <?php require "blocks/header.php"?>

    <!---------Start--------->
    <div class="start">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/wallpaper.jpg" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 class="lng-start1">Проектный офис</h1>
                            <p class="lng-start1-text">Факультета математики & информационных технологий</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/wallpaper.jpg" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="lng-start2">Обучение и командообразование</h1>
                            <p class="lng-start2-text">Поможем подготовиться, создать или найти свой проект</p>
                            <p><a class="btn btn-lg btn-warning lng-start2-text-button" href="#blockinfopart2">Читать больше</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/wallpaper.jpg" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 class="lng-start3">Стажировка и работа в лучших компаниях</h1>
                            <p class="lng-start3-text">Возможность найти работу и предложить свое решение</p>
                            <p><a class="btn btn-lg btn-warning lng-start3-text-button" href="#project">Проекты</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!------Block-info----->
    <div class="infoblock">
        <div class="container marketing ">

            <h3 class="mt-5 text-center lng-blockinfo">Об Math&IT</h3>
            <h5 class="mb-5 text-center lng-blockinfotext">Принципы организации Math&IT</h5>
            <div class="rules">
                <div class="row mt-5 text-center">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./img/infoblock/group.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                        <h4 class="mb-2 lng-blockinfo1">Команды студентов</h4>
                        <p class="mb-5 lng-blockinfotext1">4 - 6 человек формируются под проект</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./img/infoblock/help.png" help role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                        <h4 class="mb-2 lng-blockinfo2">Проектное задание от предприятия</h4>
                        <p class="mb-5 lng-blockinfotext2">Реальная задача для студентов</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./img/infoblock/hand.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                        <h4 class="mb-2 lng-blockinfo3">Готовый проект</h4>
                        <p class="mb-5 lng-blockinfotext3">Проектная команда, имеющая опыт</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----------Partners-Block-------------------->
    <div id="partners">
        <div class="basicblock">
            <h6 class="text-center text-warning lng-partnersblock">Наши партнеры</h5>
                <h2 class="text-center lng-partnersblocktext">Список Партнеров</h3>
                    <h2 class="text-center text-warning">&#8213;</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <?php
      for($i = 0; $i < 5; $i++):
    ?>
            <div class="item">
                <img src="./img/partners/<?php echo ($i + 1) ?>.svg"></img>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <!----------info-block2------>

    <div id="blockinfopart2">
        <div class="blockpart">
            <div class="container px-4 py-5" id="featured-3">
                <h2 class="pb-2 text-center lng-blockinfopart">Участники программы получат</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                            <img src="./img/contacts/7.png" width="60"></img>
                        </div>
                        <h3 class="lng-blockinfopart1">Стажировку или работу в лучших компаниях</h3>
                        <p class="lng-blockinfopart1text">Возможность найти работу и предложить свое решение</p>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                            <img src="./img/contacts/8.png" width="60"></img>
                        </div>
                        <h3 class="lng-blockinfopart2">Обучение и командообразование</h3>
                        <p class="lng-blockinfopart2text">Поможем подготовиться, создать или найти свой проект</p>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                            <img src="./img/contacts/9.png" width="60"></img>
                        </div>
                        <h3 class="lng-blockinfopart3">Возможность развития на международных рынках</h3>
                        <p class="lng-blockinfopart3text">Контакты с международными заказчиками</p>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                            <img src="./img/contacts/10.png" width="60"></img>
                        </div>
                        <h3 class="lng-blockinfopart4">Продажа решения под бизнес-задачи корпораций</h3>
                        <p class="lng-blockinfopart4text">Поможем создать, подготовить и продать решение проекта</p>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                            <img src="./img/contacts/11.png" width="60"></img>
                        </div>
                        <h3 class="lng-blockinfopart5">Рекомендации и сертификаты</h3>
                        <p class="lng-blockinfopart5text">Дадим рекомендации и международный сертификат</p>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                            <img src="./img/contacts/12.png" width="60"></img>
                        </div>
                        <h3 class="lng-blockinfopart6">Прямые контакты</h3>
                        <p class="lng-blockinfopart6text">Подготовим презентации и личные встречи с основателями компаний и топ-менеджментом корпораций</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------Project--------->
    <div id="project">
        <div class="basicblock ">
            <h6 class="text-center text-warning lng-project">Наши проекты</h5>
                <h2 class="text-center lng-projecttext">Список Проектов</h3>
                    <h2 class="text-center text-warning">&#8213;</h2>
        </div>


        <div class="projectinfo">
            <div class="container marketing ">
                <div class="row text-center">
                    <div class="col-lg-4 mt-3">
                        <img width="50" src="./img/contacts/4.png" class="mt-3"></img>
                        <h4 class="mb-4 mt-1 lng-projectinfotext">Научное и инженерное отделение</h4>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <img width="50" src="./img/contacts/5.png" class="mt-3"></img>
                        <h4 class="mb-4 mt-1 lng-projectinfotext1">IT отделение</h4>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <img width="50" src="./img/contacts/6.png" class="mt-3"></img>
                        <h4 class="mb-4 mt-1 lng-projectinfotext2">Отделение образовательных методик</h4>

                    </div>
                </div>
            </div>
        </div>

        <!------>

        <div class="album py-5">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
                    <?php for($i = 0; $i < 9; $i++): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./img/partners/5.svg" class="bd-placeholder-img card-img-top" width="100%" height="205" role="img"></img>
                            <div class="card-body">
                                <p class="card-text ">Данный проект представляет из себя полноценную работу и тут надо сделать алгоритм</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="project.php" type="button" class="btn btn-warning col-6 ">Записаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>


    <!-------Contacts------>
    <div id="contacts">
        <div class="basicblock mt-5">
            <h6 class="text-center text-warning lng-contacts">Наши контакты</h5>
                <h2 class="text-center lng-contactstext">Список Контактов</h3>
                    <h2 class="text-center text-warning">&#8213;</h2>
        </div>


        <div class="projectinfo">
            <div class="container marketing">
                <div class="row text-center">
                    <div class="col-lg-4 mt-3 mb-3">
                        <span><a href=”tel:+3812644238”><img width="50" src="./img/contacts/1.png" class="mt-3"></img></a></span>
                        <h5 class="mb-2 lng-phone"><span><a href=”tel:+3812644238”>Телефон</a></span></h4>
                            <p class="mb-3"><span><a href=”tel:+3812644238”>(3812)64-42-38</a></span></p>
                    </div>
                    <div class="col-lg-4 mt-3 mb-3">
                        <img width="50" src="./img/contacts/2.png" class="mt-3"></img>
                        <h5 class="mb-1 lng-address">Адрес</h4>
                            <p class="mb-3 lng-addresstext">644077, г. Омск, пр. Мира 55а, первый корпус ОмГУ</p>
                    </div>
                    <div class="col-lg-4 mt-3 mb-3">
                        <a href="mailto:IM@omsu.ru"><img width="50" src="./img/contacts/3.png" class="mt-3"></img></a>
                        <h5 class="mb-1"><a href="mailto:IM@omsu.ru">Email</h4>
                            <p class="mb-3"><a href="mailto:IM@omsu.ru">IM@omsu.ru</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-------Scroll----to---top-->
    <a id="back2Top" title="Наверх" class="btn" href="#">&#10148;</a>

    <?php require "blocks/footer.php"?>
    <?php require "blocks/script.php"?>



</body>

</html>