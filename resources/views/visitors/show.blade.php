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
            <h6 class="card-subtitle mb-2 text-muted">NRIC: xxxxxx{{ $visitor->nric }}</h6>
            <p class="card-text">Block: {{ $visitor->blockNo }} Unit: {{ $visitor->unitNo }}</p>
            <p class="card-text">Contact No: {{ $visitor->contactNo }}</p>
          </div>
        </div>


        <div class="card mt-5">
          <div class="card-header">
            Visiting History
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>



      </section>
    </div>
  </div>
@endsection
