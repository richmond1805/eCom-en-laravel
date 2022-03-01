@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-4">
         <a href="#"></a>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($products as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['picture']}}">
              <div class="">
                <h2>{{$item['name']}}</h2>
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection