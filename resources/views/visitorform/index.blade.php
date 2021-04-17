@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">

        <div class="card">
          <div class="card-header">
            Visit Form
          </div>
          <div class="card-body">

            <form action="{{ url('visitorform') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="fld1">Visitor Name</label>
                <input type="text" name="visitorName" class="form-control" id="fld1" placeholder="Enter visitor name">
              </div>

              <div class="form-group">
                <label for="fld2">Contact Number</label>
                <input type="text" name="contactNo" class="form-control" id="fld2" placeholder="Enter contact number">
              </div>

              <div class="form-group">
                <label for="fld3">Unit Number</label>
                <input type="text" name="unitNo" class="form-control" id="fld3" placeholder="Enter unit number">
              </div>

              <div class="form-group">
                <label for="fld4">Block Number</label>
                <input type="text" name="blockNo" class="form-control" id="fld4" placeholder="Enter block number">
              </div>

              <div class="form-group">
                <label for="fld4">NRIC (Last 3 digits)</label>
                <input type="text" name="nric" class="form-control" id="fld5" placeholder="Enter last 3 digits of nric">
              </div>

              <div class="form-group">
                <label for="fld4">Entry Date</label>
                <input type="date" name="entryDate" class="form-control" id="fld6" placeholder="Enter entry date">
              </div>

              <div class="form-group">
                <label for="fld4">Exit Date</label>
                <input type="date" name="exitDate" class="form-control" id="fld7" placeholder="Enter exit date">
              </div>


              <input type="submit" class="btn btn-info" value="Save Record">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>

            @if ($errors->any())
              <div style="color: maroon; margin-top: 10px;">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </div>
            @endif


          </div>
        </div>
      </section>
      <section class="col" />      
    </div>
  </div>
@endsection
