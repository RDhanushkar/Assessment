@extends('admin.layout')
@section('adminlayout')

<div>
    <h3 style="text-align:center;">Men's Shoes</h3>
</div>

<div>
    <a href="/createShoes">
        <button type="button" class="btn btn-success">Add Item</button>
    </a>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<div class="card" style="margin-top:1%; width:80%;">
  <table class="table table-bordered" style="text-align:center;"|>
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Detail</th>
        <th>Action</th>
    </tr>
    @foreach($menShoes as $menShoes)
    <tr>
        <td>{{++$i}}</td>
        <td><img src="/image/{{$menShoes->photo}}" width="50px" alt=""></td>
        <td>{{$menShoes->name}}</td>
        <td>{{$menShoes->price}}</td>
        <td>{{$menShoes->detail}}</td>
        <td>
            <form action="" method="post">
                
                <a href="/edit/{{$menShoes -> id}}" class="btn btn-info" style="width:40%">Edit</a>
                @csrf
                @method('DELETE')
                <a href="/delete/{{$menShoes -> id}}" class="btn btn-danger" style="width:40%">Delete</a>     
            </form>
        </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection