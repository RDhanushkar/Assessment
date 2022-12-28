@extends('admin.layout')
@section('adminlayout')

<div>
    <a href="{{url('dress')}}">
        <button type="button" class="btn btn-success">Back</button>
    </a>
</div>

<div style="margin-top:1%; width:60%; margin-left: auto; margin-right: auto;">
    @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif
</div>

<div class="card" style="margin-top:1%; width:60%;">
  <div class="card-body">
    <form  method="POST" action="{{url('update-dress/'.$menDress ->id)}} " enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <h1>Edit new item</h1>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$menDress->name}}" placeholder="name">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
            <input type="file" class="form-control" aria-label="file example" name="photo" placeholder="photo">
            <img src="/image/{{$menDress->photo}}" width="5%" alt="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price(LKR)</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price" value="{{$menDress->price}}" placeholder="price">
        </div>


        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Details</label>
            <textarea class="form-control"  placeholder="Required example textarea"  name="detail"  placeholder="detail">{{$menDress->detail}}</textarea>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
  </div>
</div>

@endsection