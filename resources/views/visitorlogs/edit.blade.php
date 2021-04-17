@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-7">
        @include("visitorlogs.visitorloglist")
      </section>
      <section class="col">
        <div class="card">
          <div class="card-header">
            Visitor Detail
          </div>
          <div class="card-body">
            <h5 class="card-title">Name: {{ $visitorlog->visitor->visitorName }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">NRIC: xxxxxx{{ $visitorlog->visitor->nric }}</h6>
            <p class="card-text">Contact No: {{ $visitorlog->visitor->contactNo }}</p>
          </div>
        </div>

        <div class="card mt-5">
          <div class="card-header">
            Date Entries
          </div>
          <div class="card-body">

            <form action="{{ url('/visitorlogs/'.$visitorlog->id) }}" method="post">
              @csrf
              @method('PUT')

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fld4">Entry Date</label>
                  <input value="{{ str_replace('/', '-', $visitorlog->entryDate) }}" type="date" name="entryDate" class="form-control" id="fld6" placeholder="Enter entry date">
                </div>
                <div class="form-group col-md-6">
                  <label for="fld4">Exit Date</label>
                  <input value="{{ str_replace('/', '-', $visitorlog->exitDate) }}" type="date" name="exitDate" class="form-control" id="fld7" placeholder="Enter exit date">
                </div>
              </div>

              <input type="submit" class="btn btn-info" value="Update Record">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>

          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
