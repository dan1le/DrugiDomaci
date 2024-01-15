<!DOCTYPE html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/bootstrap-5.3.2/dist/css/bootstrap.css" rel="stylesheet">
<script src="/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
    <title>
      @yield("titl")
    </title>
  </head>
  <body>
    @include("navigation")
    @yield("sadrzajStranice")
    @include("footer")
  </body>
</html>