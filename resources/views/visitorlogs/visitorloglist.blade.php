<div class="card">
  <div class="card-header">
    Visitor Logs
  </div>
  <div style="overflow: scroll; height: 80vh;" class="card-body">
    <div style="display: flex; align-items: flex-start; justify-content: space-between">
      <div style="width: 18rem;" class="input-group mb-3">
        <form style="display: inline-flex;" action="{{ url('/visitorlogs/search/unitno') }}" method="GET" role="search">
          {{ csrf_field() }}
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
          <a class="dropdown-item" href="{{ url('/visitorlogs?view=all') }}">All</a>
          <a class="dropdown-item" href="{{ url('/visitorlogs?view=3mo') }}">Last 3 months</a>
        </div>
      </div>
    </div>

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Visitor Name</th>
          <th scope="col">Unit No</th>
          <th scope="col">Block No</th>
          <th scope="col">Tenant/Room</th>
          <th scope="col">Entry Date</th>
          <th scope="col">Exit Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($visitorlogs as $visitor)
        <tr>
          <td>{{ $visitor->visitor->visitorName }}</td>
          <td>{{ $visitor->unit->unitNo }}</td>
          <td>{{ $visitor->unit->blockNo }}</td>
          <td>{{ $visitor->unit->occupantName }}</td>
          <td>{{ $visitor->entryDate }}</td>
          <td>{{ $visitor->exitDate }}</td>

          <td>
            <div style="display: flex;">
              <a style="margin-right: 5px;" href="{{ url('/visitorlogs/'.$visitor->id) }}" class="btn btn-sm btn-info">Details</a>
              <a style="margin-right: 5px;" href="{{ url('/visitorlogs/'.$visitor->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="/visitorlogs/{{ $visitor->id }}" method="POST">
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
  </div>
</div>
