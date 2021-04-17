@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row justify-content-md-center">
      <section class="col-4">
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


              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fld2">NRIC (Last 3 digits)</label>
                  <input type="text" maxlength="3" name="nric" class="form-control" id="fld2" placeholder="Enter last 3 digits of NRIC">
                </div>
                <div class="form-group col-md-6">
                  <label for="fld3">Contact Number</label>
                  <input type="text" pattern="\d*" maxlength="8" name="contactNo" class="form-control" id="fld3" placeholder="Enter contact number">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fld4">Unit Number</label>
                  <input type="text" name="unitNo" class="form-control" id="fld4" placeholder="Enter unit number">
                </div>
                <div class="form-group col-md-6">
                  <label for="fld5">Block Number</label>
                  <input type="text" name="blockNo" class="form-control" id="fld5" placeholder="Enter block number">
                </div>
              </div>


              <div class="form-check mb-5">
                <input type="checkbox" name="functionRoom" class="form-check-input" id="fld6">
                <label class="form-check-label" for="fld6">Attending event in function room</label>
              </div>

              <!--
              <div class="form-row mt-4">
                <div class="form-group col-md-6">
                  <label for="fld7">Entry Date</label>
                  <input type="date" name="entryDate" class="form-control" id="fld7" placeholder="Enter entry date">
                </div>
                <div class="form-group col-md-6">
                  <label for="fld8">Exit Date</label>
                  <input type="date" name="exitDate" class="form-control" id="fld8" placeholder="Enter exit date">
                </div>
              </div>
              -->

              <input type="submit" class="btn btn-info" value="Save Entry Record">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>

            <script>
              document.getElementById('fld6').onchange = function() {
                document.getElementById('fld4').disabled = this.checked;
                document.getElementById('fld5').disabled = this.checked;
              };
            </script>



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

      <section class="col-4">
        <div class="card">
          <div class="card-header">
            Message
          </div>
          <div class="card-body">
            <p class="card-text">Welcome! Please fill up the form and wait to be notified of entry. Thank you.</p>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
