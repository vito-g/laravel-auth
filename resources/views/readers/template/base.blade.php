<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <script src="{{asset ('js/app.js')}}" defer></script>
    <title>Readers - @yield('title')</title>
  </head>
  <body>

    <div class="container">

      <main>
        @yield('content')
      </main>

    </div>

  </body>
</html>
