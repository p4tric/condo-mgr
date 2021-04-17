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
            Visitor Details
          </div>
          <div class="card-body">
            <h5 class="card-title">Name: {{ $visitor->visitorName }}</h5>
            <h6 class="card-subtitle mb-1 text-muted">NRIC: xxxxxx{{ $visitor->nric }}</h6>
            <h6 class="card-subtitle mb-1 text-muted">Contact No: {{ $visitor->contactNo }}</h6>
          </div>
        </div>

        <div class="card mt-5">
          <div class="card-header">
            Visiting History
          </div>
          <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Tenant/Room</th>
                  <th scope="col">Unit No</th>
                  <th scope="col">Block No</th>
                  <th scope="col">Entry Date</th>
                  <th scope="col">Exit Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($visitorlogs as $visitorlog)
                <tr>
                  <td>{{ $visitorlog->unit->occupantName }}</td>
                  <td>{{ $visitorlog->unit->unitNo }}</td>
                  <td>{{ $visitorlog->unit->blockNo }}</td>
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
