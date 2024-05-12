<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/logo.jpg" />
    <title>Home Steak Annisa</title>
    @include('layouts.partial.link')
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-[#FFFFF0] text-slate-500">
    @include('layouts.partial.header')

      @yield('content')

    @include('layouts.partial.footer')
  </body>
  @include('layouts.partial.script')
</html>
