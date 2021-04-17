@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-7">
        @include("visitorlogs.visitorloglist")
      </section>
      <section class="col">

      </section>
    </div>
  </div>
@endsection
