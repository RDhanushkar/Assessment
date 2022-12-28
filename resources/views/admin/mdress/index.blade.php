@extends('admin.layout')
@section('adminlayout')

<div>
    <h3 style="text-align:center;">Men's Dresses</h3>
</div>

<div>
    <a href="{{url('create-dress')}}">
        <button type="button" class="btn btn-success">Add Item</button>
    </a>
</div>

<div style="margin-top:1%; width:60%; margin-left: auto; margin-right: auto;">
    @if(session('status'))
        <h6 class="alert alert-danger">{{session('status')}}</h6>
    @endif
</div>

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
    @foreach($menDress as $menDress)
    <tr>
        <td>{{++$i}}</td>
        <td><img src="/image/{{$menDress->photo}}" width="50px" alt=""></td>
        <td>{{$menDress->name}}</td>
        <td>{{$menDress->price}}</td>
        <td>{{$menDress->detail}}</td>
        <td>
            <form action="" method="post">
                
                <a href="{{url('edit-dress/'.$menDress -> id)}}" class="btn btn-info" style="width:40%">Edit</a>
               
                <a href="{{url('delete-dress/'.$menDress -> id)}}" class="btn btn-danger" style="width:40%">Delete</a>     
            </form>
        </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection