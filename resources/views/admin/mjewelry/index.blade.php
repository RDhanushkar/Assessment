@extends('admin.layout')
@section('adminlayout')

<div>
    <h3 style="text-align:center;">Men's Jewelry</h3>
</div>
<div>
    <a href="/createJewelry">
        <button type="button" class="btn btn-success">Add Item</button>
    </a>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<div class="card" style="margin-top:1%; width:80%;">
  <table class="table table-bordered" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Detail</th>
        <th>Action</th>
    </tr>
    @foreach($menJewelry as $menJewelry)
    <tr>
        <td>{{++$i}}</td>
        <td><img src="/image/{{$menJewelry->photo}}" width="50px" alt=""></td>
        <td>{{$menJewelry->name}}</td>
        <td>{{$menJewelry->price}}</td>
        <td>{{$menJewelry->detail}}</td>
        <td>
            <form action="" method="post">
                
                <a href="/edit/{{$menJewelry -> id}}" class="btn btn-info" style="width:40%">Edit</a>
                @csrf
                @method('DELETE')
                <a href="/delete/{{$menJewelry -> id}}" class="btn btn-danger" style="width:40%">Delete</a>     
            </form>
        </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection