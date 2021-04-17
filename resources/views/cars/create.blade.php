@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include("cars.carlist")
      </section>
      <section class="col">
        <form action="{{ url('cars') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="fld1">Name</label>
            <input type="text" name="name" class="form-control" id="fld1" placeholder="Enter name">
          </div>

          <div class="form-group">
            <label for="fld2">Founded</label>
            <input type="text" name="founded" class="form-control" id="fld2" placeholder="Enter founded">
          </div>

          <div class="form-group">
            <label for="fld3">Description</label>
            <input type="text" name="description" class="form-control" id="fld3" placeholder="Enter description">
          </div>

          <input type="submit" class="btn btn-info" value="Save Car">
          <input type="reset" class="btn btn-warning" value="Reset">
        </form>

        @if ($errors->any())
          <div style="color: maroon; margin-top: 10px;">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </div>
        @endif
      </section>
    </div>
  </div>
@endsection
