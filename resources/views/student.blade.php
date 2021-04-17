<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Condominium Management System</title>
  </head>
  <body>
    @include('navbar')

    @if($layout == 'index')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("studentlist")
          </section>
          <section class="col">

          </section>
        </div>
      </div>
    @elseif($layout == 'create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("studentlist")
          </section>
          <section class="col">
            <form action="{{ url('/store') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="fld1">CNE</label>
                <input type="text" name="cne" class="form-control" id="fld1" placeholder="Enter CNE">
              </div>

              <div class="form-group">
                <label for="fld2">First Name</label>
                <input type="text" name="firstName" class="form-control" id="fld2" placeholder="Enter first name">
              </div>

              <div class="form-group">
                <label for="fld3">Second Name</label>
                <input type="text" name="secondName" class="form-control" id="fld3" placeholder="Enter second name">
              </div>

              <div class="form-group">
                <label for="fld4">Age</label>
                <input type="text" name="age" class="form-control" id="fld4" placeholder="Enter age">
              </div>

              <div class="form-group">
                <label for="fld5">Specialty</label>
                <input type="text" name="specialty" class="form-control" id="fld5" placeholder="Enter specialty">
              </div>

              <input type="submit" class="btn btn-info" value="Save">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>
          </section>
        </div>
      </div>
    @elseif($layout == 'show')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("studentlist")
          </section>
          <section class="col">

          </section>
        </div>
      </div>
    @elseif($layout == 'edit')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("studentlist")
          </section>
          <section class="col">
            <form action="{{ url('/update/'.$student->id) }}" method="post">
              @csrf
              <div class="form-group">
                <label for="fld1">CNE</label>
                <input value="{{ $student->cne }}" type="text" name="cne" class="form-control" id="fld1" placeholder="Enter CNE">
              </div>

              <div class="form-group">
                <label for="fld2">First Name</label>
                <input value="{{ $student->firstName }}" type="text" name="firstName" class="form-control" id="fld2" placeholder="Enter first name">
              </div>

              <div class="form-group">
                <label for="fld3">Second Name</label>
                <input value="{{ $student->secondName }}" type="text" name="secondName" class="form-control" id="fld3" placeholder="Enter second name">
              </div>

              <div class="form-group">
                <label for="fld4">Age</label>
                <input value="{{ $student->age }}" type="text" name="age" class="form-control" id="fld4" placeholder="Enter age">
              </div>

              <div class="form-group">
                <label for="fld5">Specialty</label>
                <input value="{{ $student->specialty }}" type="text" name="specialty" class="form-control" id="fld5" placeholder="Enter specialty">
              </div>

              <input type="submit" class="btn btn-info" value="Update">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>
          </section>
        </div>
      </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
