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
            Unit Details
          </div>
          <div class="card-body">

            <h5 class="card-title">Unit: {{ $unit->unitNo }} Block: {{ $unit->blockNo }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Occupant/Tenant: {{ $unit->occupantName }}</h6>
            <h6 class="card-subtitle mb-1 text-muted">Contact No: {{ $unit->contactNumber }}</h6>
          </div>
        </div>

        <div class="card mt-5">
          <div class="card-header">
            Visiting History
          </div>
          <div style="overflow: scroll; height: 55vh;" class="card-body">
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
                @foreach($visitorlogs as $visitorlog)
                <tr>
                  <td>{{ $visitorlog->visitor->visitorName }}</td>
                  <td>{{ $visitorlog->visitor->contactNo }}</td>
                  <td>{{ $visitorlog->entryDate }}</td>
                  <td>{{ $visitorlog->exitDate }}</td>
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
