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
            Edit Unit
          </div>

          <div class="card-body">
            <form action="{{ url('/units/'.$unit->id) }}" method="post">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label for="fld1">Block No</label>
                <input value="{{ $unit->blockNo }}" type="text" name="blockNo" class="form-control" id="fld1" placeholder="Enter block no">
              </div>

              <div class="form-group">
                <label for="fld2">Unit No</label>
                <input value="{{ $unit->unitNo }}" type="text" name="unitNo" class="form-control" id="fld2" placeholder="Enter unit no">
              </div>

              <div class="form-group">
                <label for="fld3">Occupant Name</label>
                <input value="{{ $unit->occupantName }}" type="text" name="occupantName" class="form-control" id="fld3" placeholder="Enter occupant name">
              </div>

              <div class="form-group">
                <label for="fld4">Contact No</label>
                <input value="{{ $unit->contactNumber }}" type="text" name="contactNumber" class="form-control" id="fld4" placeholder="Enter contact number">
              </div>

              <input type="submit" class="btn btn-info" value="Update Unit">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>
          </div>

        </div>
      </section>
    </div>
  </div>
@endsection
