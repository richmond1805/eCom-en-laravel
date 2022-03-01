@extends('master')
@section("content")

<div class="custom-product">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <!---- Wrapper for slides ---->
    <div class="carousel-inner">
        @foreach ($products as $item)
          <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['picture']}}">
                <div class="carousel-caption d-none d-md-block slider-text">
              <h5>{{$item['name']}}</h5>
            </div>
          </a>
        </div>

        @endforeach
    </div>

    <!----- Left and Right controls ---->
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
        <div class="trending-wrapper">
            <h3>Products</h3>
            @foreach($products as $item)
                <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['picture']}}">
                    <div class="">
                    <h5>{{$item['name']}}</h5>
                    </div>
                  </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection