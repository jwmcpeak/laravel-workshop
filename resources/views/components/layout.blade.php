<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="dark" />
    @vite(['resources/css/app.css', 'resource/js/app.js'])
    <title>PIXL</title>
  </head>
  <body
    class="bg-pixl-dark text-pixl-light flex gap-8 px-4 sm:h-dvh sm:overflow-clip xl:gap-16"
  >

  {{ $slot }}

   </body>
</html>
