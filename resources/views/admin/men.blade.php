@extends('admin.layout')
@section('adminlayout')

<div class="container text-center">
<div>
    <h1 style="text-align:center; margin-bottom:0%;">Select the catagory</h1>
</div>
  <div class="row row-cols-3" style="margin-top:5%">
    <div class="col">
        <div class="card" style="width: 20rem;">
            <img src="https://media.istockphoto.com/id/1189091313/photo/handsome-man-shopping-for-new-clothes-in-store.jpg?s=612x612&w=0&k=20&c=TxJ4B339e64K70sFgw3RU1xDsi7N0LDBZyT9pB29H64=" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Dresses</h5>
                <a href="/dress" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 20rem;">
            <img src="https://img.freepik.com/free-photo/young-handsome-man-choosing-shoes-shop_1303-19707.jpg?auto=format&h=200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Shoes</h5>
                <a href="/shoes" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 20rem;">
            <img src="https://cdn.shopify.com/s/files/1/1173/5876/products/ArrowFeatherTurquoise_73e18774-fcb7-4a06-9f7d-fb7ba5637209_2000x.jpg?v=1541462665" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jewelry</h5>
                <a href="/jewelry" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    
  </div>
</div>
@endsection