
    <!-- Leftmenu -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Панель администратора</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Страницы</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="{{route('admin')}}">Главная</a>
           <a class="dropdown-item" href="{{route('company')}}">Компания</a>
           <a class="dropdown-item" href="{{route('portfolyo')}}">Портфолио</a>
           <a class="dropdown-item" href="{{route('uslugi remont')}}">Услуги ремонт</a>
           <a class="dropdown-item" href="{{route('uslugi dizaynera')}}">Услуги дизайнера</a>
           <a class="dropdown-item " href="{{route('uslugi dastavka')}}">Услуги  доставка<br> материалов</a>
           <a class="dropdown-item" href="{{route('price list')}}">Прайс-Лист</a>
           <a class="dropdown-item" href="{{route('action')}}">Акции</a>
           <a class="dropdown-item" href="{{route('otziv')}}">Отзывы</a>
           <a class="dropdown-item" href="{{route('contact')}}">Контакты</a>
           <a class="dropdown-item" href="{{route('vapros')}}">Вопросы</a>
           <a class="dropdown-item" href="{{route('contract')}}">Соглашение</a>
           @if (Route::has('register'))
          <a class="dropdown-item" href="{{ route('register') }}" target="_blank">{{ __('Регистрация') }}</a>
           @endif
          <a class="dropdown-item" href="{{ route('show user') }}">Список <br> пользователей</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

      
      