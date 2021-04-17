@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-7">
        @include("units.unitlist")
      </section>
      <section class="col">

        <div class="card">

          <div class="card-header">
            Add Unit
          </div>

          <div class="card-body">
            <form action="{{ url('units') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="fld1">Block No</label>
                <input type="text" name="blockNo" class="form-control" id="fld1" placeholder="Enter block no">
              </div>

              <div class="form-group">
                <label for="fld2">Unit No</label>
                <input type="text" name="unitNo" class="form-control" id="fld2" placeholder="Enter unit no">
              </div>

              <div class="form-group">
                <label for="fld3">Occupant Name</label>
                <input type="text" name="occupantName" class="form-control" id="fld3" placeholder="Enter occupant name">
              </div>

              <div class="form-group">
                <label for="fld4">Contact Number</label>
                <input type="tel" name="contactNumber" class="form-control" id="fld4" placeholder="Enter contact number">
              </div>

              <input type="submit" class="btn btn-info" value="Save Unit">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>
          </div>

          @if ($errors->any())
            <div style="color: maroon; margin-top: 10px;">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </div>
          @endif

        </div>


      </section>
    </div>
  </div>
@endsection
