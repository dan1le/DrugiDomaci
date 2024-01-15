@extends("layout")
@section("titl")
Main Page
@endsection
@section("sadrzajStranice")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page">Trentutno vreme je </a>
        </li>
      </ul>
      <a class="navbar-brand disabled">{{date("h:i:s")}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </div>
</nav>
@endsection