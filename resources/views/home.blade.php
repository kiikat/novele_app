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


        <!-- Styles -->
        
    </head>
    <body>
        <nav class="navbar">
              <img src="{{ asset('img/logo_small.png') }}" alt="Novele hotel logo">
        <div class="phone">
          <i class="fa-solid fa-phone"></i>
          <p> +371 22222222 </p>
        </div>
        <div class=navbar-book>
          <a class="navbar-brand" href="">@lang('messages.book_now')</a>
        </div>
        </nav>
        <div class="navbarLower">
          <ul class="nav no-search">
            <li class="nav-item"><a href="">@lang('messages.rooms')</a></li>
            <li class="nav-item"><a href="">@lang('messages.events')</a></li>
            <li class="nav-item"><a href="">@lang('messages.about_us')</a></li>
            <li class="nav-item"><a href="">@lang('messages.contact_us')</a></li>
          </ul>
        </div>
        <div class="languageSwitch">
          <ul class=dropdown-menu>
            <a class="dropdown-item" href="locale/en"><p>English</p>
            <a class="dropdown-item" href="locale/lv"><p>Latviešu</p>
          </ul>
        </div>
        <div class="container">
          <h1>@lang('messages.greeting')</h1>
        </div>
    </body>
</html>
