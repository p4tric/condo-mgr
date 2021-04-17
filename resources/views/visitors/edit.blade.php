@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-7">
        @include("visitors.visitorlist")
      </section>
      <section class="col">

        <div class="card">
          <div class="card-header">
            Edit Visitor
          </div>
          <div class="card-body">

            <form action="{{ url('/visitors/'.$visitor->id) }}" method="post">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label for="fld1">Visitor Name</label>
                <input value="{{ $visitor->visitorName }}" type="text" name="visitorName" class="form-control" id="fld1" placeholder="Enter visitor name">
              </div>

              <div class="form-group">
                <label for="fld2">Contact Number</label>
                <input value="{{ $visitor->contactNo }}" type="text" name="contactNo" class="form-control" id="fld2" placeholder="Enter contact number">
              </div>

              <div class="form-group">
                <label for="fld4">NRIC (Last 3 digits)</label>
                <input value="{{ $visitor->nric }}" type="text" name="nric" class="form-control" id="fld5" placeholder="Enter last 3 digits of nric">
              </div>

              <input type="submit" class="btn btn-info" value="Update Visitor">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>

          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
