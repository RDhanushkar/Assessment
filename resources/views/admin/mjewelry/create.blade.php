@extends('admin.layout')
@section('adminlayout')

<div>
    <a href="/jewelry">
        <button type="button" class="btn btn-success">Back</button>
    </a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops</strong>There were some problems with your input. <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card" style="margin-top:1%; width:60%;">
  <div class="card-body">
    <form  method="POST" action="/storeJewelry" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <h1>Add new item</h1>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
            <input type="file" class="form-control" aria-label="file example" name="photo">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price(LKR)</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price">
        </div>


        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Details</label>
            <textarea class="form-control"  placeholder="Required example textarea"  name="detail"></textarea>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
  </div>
</div>

@endsection