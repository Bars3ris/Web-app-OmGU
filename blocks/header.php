<header class="p-3 bg-dark ">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <img src ="./img/logo/IMIT.jpg" class="bi me-2" width="35" height="35" role="img" aria-label="Bootstrap">
     		 </img>
        		</a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/index.php" class="nav-link px-2 link-dark text-white lng-nav1">Главная</a></li>
          <li><a href="#partners" class="nav-link px-2 link-dark text-white lng-nav2">Партнеры</a></li>
          <li><a href="#project" class="nav-link px-2 link-dark text-white lng-nav3">Проекты</a></li>
          <li><a href="#contacts" class="nav-link px-2 link-dark text-white lng-nav4">Контакты</a></li>
          <li class="dropdown">
              <button class="btn text-warning dropdown-toggle lng-language1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Язык
              </button>
              <ul class="dropdown-menu lang df" aria-labelledby="dropdownMenuButton1">
                <li><button value="ru" class="btn active text-dark" id="lang-ru">ru</button></li>
                <li><button value="kz" class="btn text-dark" id="lang-kz">kz</button></li>
                <li><button value="en" class="btn text-dark" id="lang-en">en</button></li>
              </ul>
          </li>
        </ul>
        
        <?php
        if($_COOKIE['user'] == ''):
          ?>
          <button type="button" class="btn btn-warning me-2 lng-login" data-bs-toggle="modal" data-bs-target="#exampleModal">Вход</button>

          
          <button type="button" class="btn btn-warning me-2 lng-register" data-bs-toggle="modal" data-bs-target="#exampleModaltwo">Регистрация</a>
        </div>

        <?php else: ?>

          <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./img/logo/IMIT.jpg" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item lng-navtext1" href="#">Профиль</a></li>
            <li><a class="dropdown-item lng-navtext2" href="#">Настройки</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item lng-navtext3" href="exitauth.php">Выйти</a></li>
          </ul>
        </div>
      <?php endif; ?>



      </div>
    </div>
  </header>