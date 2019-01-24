<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
        <title>TOdolist</title>
        <!-- Fonts -->

<style>
*{
  box-sizing: border-box;
}
.logo{
  display: block;
  margin: 20px auto;
  height: 75px;
}
</style>
    </head>
    <body>

        <div id="app" class="container">
          <img src="logo.png" class="logo">
          <example-component></example-component>
        </div>
    </body>
    <script src="{{ url('js/app.js') }}"></script>

</html>
