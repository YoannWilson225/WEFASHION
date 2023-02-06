<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>{{$category->name}}</h2>
          </div>
        </div>
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="product-item">
                <a href="{{route('viewProduct',['id'=>$product->id])}}"><img src=" {{asset('assets/uploads/'.$product->image)}}" class="w-100" alt="Article image"></a>
                <div class="down-content">
                  <a href="{{route('viewProduct',['id'=>$product->id])}}"><h4>{{$product->name}}</h4></a>
                  <h6>{{$product->prix}}€</h6>
                  <p>{{$product->description}}</p>
                </div>
              </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
