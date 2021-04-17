@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include("visitors.visitorlist")
      </section>
      <section class="col">
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
            <label for="fld3">Unit Number</label>
            <input value="{{ $visitor->unitNo }}" type="text" name="unitNo" class="form-control" id="fld3" placeholder="Enter unit number">
          </div>

          <div class="form-group">
            <label for="fld4">Block Number</label>
            <input value="{{ $visitor->blockNo }}" type="text" name="blockNo" class="form-control" id="fld4" placeholder="Enter block number">
          </div>

          <div class="form-group">
            <label for="fld4">NRIC (Last 3 digits)</label>
            <input value="{{ $visitor->nric }}" type="text" name="nric" class="form-control" id="fld5" placeholder="Enter last 3 digits of nric">
          </div>

          <div class="form-group">
            <label for="fld4">Entry Date</label>
            <input value="{{ $visitor->entryDate }}" type="date" name="entryDate" class="form-control" id="fld6" placeholder="Enter entry date">
          </div>

          <div class="form-group">
            <label for="fld4">Exit Date</label>
            <input value="{{ $visitor->exitDate }}" type="date" name="exitDate" class="form-control" id="fld7" placeholder="Enter exit date">
          </div>

          <input type="submit" class="btn btn-info" value="Update Car">
          <input type="reset" class="btn btn-warning" value="Reset">
        </form>
      </section>
    </div>
  </div>
@endsection
