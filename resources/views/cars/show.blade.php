@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include("cars.carlist")
      </section>
      <section class="col">

        <div class="card">
          <div class="card-header">
            Car Details
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $car->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $car->founded }}</h6>
            <p class="card-text">{{ $car->description }}</p>


            @foreach($carmodels as $model)
              <p class="card-text">{{ $model->model_name }}</p>
            @endforeach

            @foreach($engines as $eng)
              <p class="card-text">{{ $eng->engine_name }}</p>
            @endforeach
          </div>
        </div>

      </section>
    </div>
  </div>
@endsection
