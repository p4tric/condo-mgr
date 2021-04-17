@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-7">
        @include("units.unitlist")
      </section>
      <section class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Occupant: {{ $unit->occupantName }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Unit: {{ $unit->unitNo }} Block: {{ $unit->blockNo }}</h6>
            <p class="card-text">Contact No: {{ $unit->contactNumber }}</p>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
