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
            Unit Details
          </div>
          <div class="card-body">
            <h5 class="card-title">Unit: {{ $visitorlog->unit->unitNo }} Block: {{ $visitorlog->unit->blockNo }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Occupant/Tenant: {{ $visitorlog->unit->occupantName }}</h6>
            <h6 class="card-subtitle mb-4 text-muted">Contact No: {{ $visitorlog->unit->contactNumber }}</h6>
            <div style="display: flex; align-items: baseline;">
              <p class="card-text">Visitor Count: {{ $visitorcount }}</p>
              @if($visitorcount == 8)
                <span style="color: #fff;" class="badge rounded-pill bg-danger">Maximum number of visitors reached.</span>
              @endif
            </div>
          </div>
        </div>

        <div class="card mt-5">
          <div class="card-header">
            Unit Visitors
          </div>
          <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Visitor Name</th>
                  <th scope="col">Contact No</th>
                  <th scope="col">Entry Date</th>
                  <th scope="col">Exit Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($visitors as $v)
                <tr>
                  <td>{{ $v->visitor->visitorName }}</td>
                  <td>{{ $v->visitor->contactNo }}</td>
                  <td>{{ $v->entryDate }}</td>
                  <td>{{ $v->exitDate }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>



      </section>
    </div>
  </div>
@endsection
