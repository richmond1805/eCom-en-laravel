<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
  {
    $total= ProductController::cartItem();
  }

?>
<nav class="navbar navbar-expand-lg navbar-light bg-muted">
  <div class="container-fluid">
    <div class="navbar-header">
    <strong><a class="navbar-brand" href="/">Bake It</a></strong>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <strong><a class="nav-link" href="/">Home</a></strong>
      </li>
      <li class="nav-item">
        <strong><a class="nav-link" href="/myorders">Orders</a></strong>
      </li>
      <li class="nav-item">
      <strong><a class="nav-link" href="/cartlist">Cart({{$total}})</a></strong>
        @if(Session::has('user'))
    </ul>
    
    <form action="/search" class="form-inline my-2 my-lg-0" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-outline-secondary">Search</button>
        </form>
    <li class="dropdown" class="navbar-form navbar-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><strong><a href="/logout">Logout</a></strong></li>
        </ul>
      </li>
      @else
      <a class="nav-link" href="/login">Login</a>
      <a class="nav-link" href="/register">Register</a>
      @endif
  </div>
</div>
</nav>