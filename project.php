<?php

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

if(!empty($_POST)){
    debug($_POST);
    $fields = load($fields);
    debug($fields);
    if($errors = validate($fields)){
        debug($errors);
    }else{
        echo 'OK';
        // mail
    }
}
?>

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
    <title>PHP научная деятельность</title>
</head>

<body>
    <?php require "blocks/modalwindows.php"?>
    <?php require "blocks/header.php"?>

    <!-----Block-start------->

    <div class="position-relative overflow-hidden p-3 text-center bg-warning">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <img src="./img/partners/5.svg" width="100%"></img>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <!---------Block-project---------->
    <div class="projectdate">
        <div class="container">
            <div class="row featurette mt-5 mb-5">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1 mb-3 lng-projectdate1">Тема проекта:</h2>
                    <p class="lead lng-projectdatetext1">Библиотеки для работы с пространственными данными на языке программирования C#.</p>
                    <h2 class="featurette-heading fw-normal lh-1 mb-3 lng-projectdate2">Организация, ведущая проект:</h2>
                    <p class="lead">OOO Gems Development</p>
                    <h2 class="featurette-heading fw-normal lh-1 mb-3 lng-projectdate3">Аннотация проекта:</h2>
                    <p class="lead lng-projectdatetext3">Цель проекта – создание Open Source решения для работы с пространственными данными (Геометрические объекты на местности). Потребуется погружение в предметную область ГИС (геоинформационные технологии): линии, полилинии, мультиполигоны, системы координат геодезические, математические, проектные, глобальные и местные, "пятисотки", геодезия, топология.</p>
                    <h2 class="featurette-heading fw-normal lh-1 mb-3 lng-projectdate4">Сайт компании:</h2>
                    <p class="lead">Gems development</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="./img/project/1.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"></img>
                </div>
            </div>
        </div>
    </div>
    <!-------Block-info---------->
    <div class="blockprojectinfo">
        <div class="container" id="featured-3">
            <h2 class="pb-2 text-center"></h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                        <img src="./img/project/2.png" width="60"></img>
                    </div>
                    <h3 class="mb-4 lng-row">Планируемые сроки реализации проекта</h3>
                    <p class="lng-rowtext1"> &#8226; Знакомство с инфраструктурой и базовой разработкой. Реализация базовых алгоритмов по работе с пространственными данными (2 семестра).</p>
                    <p class="lng-rowtext2"> &#8226; Реализация алгоритмов, связанных системами координат (1 семестр).</p>
                    <p class="lng-rowtext3"> &#8226; Оптимизация производительности (скорость, память, структуры данных) и учет погрешностей для работы алгоритмов (2 семестра).</p>
                    <p class="lng-rowtext4"> &#8226; Исследования по новым задачам/алгоритмам, для практического применения.</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                        <img src="./img/project/3.png" width="60"></img>
                    </div>
                    <h3 class="mb-4 lng-row1">Количество студентов в команде</h3>
                    <p class="lng-row1text1"> &#8226; Разработчки - 3-8 человек. Написание кода, Unit-тестов. Тестирование и отладка.</p>
                    <p class="lng-row1text2"> &#8226; Системный аналитик - изучение и транслирование понимания геоинформационных систем, изучение алгоритмов и их комбинаций для решения практических задач в области градостроительства.</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
                        <img src="./img/project/4.png" width="60"></img>
                    </div>
                    <h3 class="mb-4 lng-row2">Уровень подготовки, необходимый для работы в проекте</h3>
                    <p class="lng-row2text1"> &#8226; Базовые знания языка C#, базовые знания алгоритмов. Желание погрузиться в предметную область ГИС</p>
                    <p class="lng-row2text2"> &#8226; Для аналитика - желание погружаться в предметную область, читать много документации из открытых источников на предмет поиска подходящих под задачи алгоритмов.</p>
                </div>
            </div>
        </div>
    </div>


    <!-------block-form---------->
    <div class="blockoneform">
        <div class="container">
            <div class="p-5 rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold lng-blockoneform">Записаться на проект</h1>
                    <p class="col-md-8 fs-4 lng-blockoneformtext">Если ты готов узнать что-то новое и показать на что ты способен, то скорее нажимай на кнопку!</p>
                    <button type="button" class="mt-2 btn btn-warning me-2 lng-blockoneformbutton" data-bs-toggle="modal" data-bs-target="#exampleModalthree">Кнопка</button>
                </div>
            </div>
        </div>
    </div>
    <!-------Contacts------>


    <div class="contacts">
        <div class="basicblock">
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
                        <h5 class="mb-1m lng-address">Адрес</h4>
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

    <!-------Scroll-to-top----->
    <a id="back2Top" title="Наверх" class="btn" href="#">&#10148;</a>


    <?php require "blocks/footer.php"?>
    <?php require "blocks/script.php"?>

</body>

</html>