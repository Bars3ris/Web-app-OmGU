<!---------Projectmodal--------->

<div class="windowproject">
<div class="modal fade" id="exampleModalthree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0 ">Запись на проект</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="post">
          <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group mb-3">
            <label for="address">Адрес</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <div class="form-group mb-3">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group mb-3">
            <label for="comment">Комментарий</label>
            <textarea name="comment" id="comment" rows="3" class="form-control"></textarea>
          </div>
          <div class="form-group mb-3 form-check">
            <input name="agree" type="checkbox" class="form-check-input" id="agree">
            <label class="form-check-label" for="agree">Соглашаюсь с обработкой персональных данных</label>
          </div>
          <button type="submit" class="btn btn-warning mt-3 mb-3 w-100">Отправить</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-----------Login-modal--------->

<div class="windowlogin">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0 lgn-login">Вход</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form action="settingauth.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="login" id="login" placeholder="Введите Логин">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" name="pass" id="pass" placeholder="Введите пароль">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-warning lgn-login2" type="submit">Войти</button>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Войти через сеть</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#vk.com"></use></svg>
            Войти через VK
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!--------register-modal----->

<div class="windowregister">
<div class="modal fade" id="exampleModaltwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0 ">Регистация</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form action="setting.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="login" id="login" placeholder="Введите Логин">
            <label for="floatingInput">Enter email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="name" id="name" placeholder="Введите Имя">
            <label for="floatingInput">Enter Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" name="pass" id="pass" placeholder="Введите пароль">
            <label for="floatingPassword">Create a password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-warning" type="submit">Зарегистрироваться</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-----end---->
