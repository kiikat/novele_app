<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Novele</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/home.css') }}"/> 
        <script src="https://kit.fontawesome.com/5676f6a45d.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('js/app.js') }}"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


        <!-- Styles -->
        
    </head>
    <body>
      <div class="container-navbar">
        <nav class="navbar">
          <div class="logo">
            <img src="{{ asset('img/logo_small_2.png') }}" alt="Novele hotel logo">
          </div>
        <div class="phone">
          <i class="fa-solid fa-phone"></i>
          <p> +371 22222222 </p>
        </div>
        <div class=navbar-book>
          <button class="book-now" href="">@lang('messages.book_now')</button>
        </div>
        <div class="language-switch-dropdown">
          <button class="dropdown-btn">Valoda ▼</button>
          <div class="dropdown-content">
              <a class="dropdown-item" href="locale/lv">
                  <img src="{{ asset('img/lv.png') }}" alt="Latviešu">
                  Latviešu
              </a>
              <a class="dropdown-item" href="locale/en">
                  <img src="{{ asset('img/en.png') }}" alt="English">
                  English
              </a>
          </div>
      </div>
        </nav>
      </div>
      <div class="container-navbar-lower">
        <nav class="navbar-lower">
          <ul>
            <li class="nav-item"><a href="">@lang('messages.rooms')</a></li>
            <li class="nav-item"><a href="">@lang('messages.events')</a></li>
            <li class="nav-item"><a href="">@lang('messages.about_us')</a></li>
            <li class="nav-item"><a href="">@lang('messages.contact_us')</a></li>
          </ul>
        </nav>
        <div class="image-main">
          <img src="{{ asset('img/main_small.jpg') }}" alt="Novele hotel lobby">
        </div>
      <div class="container-greeting">
        <h1>@lang('messages.greeting')</h1>
      </div>
    </body>
</html>
