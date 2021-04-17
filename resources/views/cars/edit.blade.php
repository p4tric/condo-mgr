@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include("cars.carlist")
      </section>
      <section class="col">
        <form action="{{ url('/cars/'.$car->id) }}" method="post">

          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="fld1">Name</label>
            <input value="{{ $car->name }}" type="text" name="name" class="form-control" id="fld1" placeholder="Enter name">
          </div>

          <div class="form-group">
            <label for="fld2">Founded</label>
            <input value="{{ $car->founded }}" type="text" name="founded" class="form-control" id="fld2" placeholder="Enter founded">
          </div>

          <div class="form-group">
            <label for="fld3">Description</label>
            <input value="{{ $car->description }}" type="text" name="description" class="form-control" id="fld3" placeholder="Enter description">
          </div>

          <input type="submit" class="btn btn-info" value="Update Car">
          <input type="reset" class="btn btn-warning" value="Reset">
        </form>
      </section>
    </div>
  </div>
@endsection
