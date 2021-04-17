<div class="card">
  <div class="card-header">
    Visitors
  </div>
  <div class="card-body">
    <!--
    <div style="display: flex; align-items: flex-start; justify-content: space-between">
      <div style="width: 18rem;" class="input-group mb-3">
        <form style="display: inline-flex;" action="/visitors/search" method="GET" role="search">
          <input type="text" name="searchUnitNo" class="form-control" placeholder="Search by Unit No" aria-label="Search by Unit No" aria-describedby="search-btn">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="btn-search">Search</button>
          </div>
        </form>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View Options
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">All</a>
          <a class="dropdown-item" href="#">Last 3 months</a>
        </div>
      </div>
    </div>
    -->

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Visitor Name</th>
          <th scope="col">Contact No</th>
          <th scope="col">NRIC</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($visitors as $visitor)
        <tr>
          <td>{{ $visitor->visitorName }}</td>
          <td>{{ $visitor->contactNo }}</td>
          <td>xxxxxx{{ $visitor->nric }}</td>

          <td>
            <div style="display: flex;">
              <a style="margin-right: 5px;" href="{{ url('/visitors/'.$visitor->id) }}" class="btn btn-sm btn-info">Details</a>
              <a style="margin-right: 5px;" href="{{ url('/visitors/'.$visitor->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="/visitors/{{ $visitor->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button
                  type="submit"
                  class="btn btn-sm btn-danger">
                  Delete
                </button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!--
    <a style="margin-top: 10px;" href="{{ url('/visitors/create') }}" class="btn btn-sm btn-info">Add Visitor</a>
    -->
  </div>
</div>
