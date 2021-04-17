<div class="card">
  <div class="card-header">
    Units
  </div>
  <div class="card-body">

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Block No</th>
          <th scope="col">Unit No</th>
          <th scope="col">Occupant Name</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($units as $unit)
        <tr>
          <td>{{ $unit->blockNo }}</td>
          <td>{{ $unit->unitNo }}</td>
          <td>{{ $unit->occupantName }}</td>
          <td>{{ $unit->contactNumber }}</td>
          <td>
            <div style="display: flex;">
              <a style="margin-right: 5px;" href="{{ url('/units/'.$unit->id) }}" class="btn btn-sm btn-info">Details</a>
              <a style="margin-right: 5px;" href="{{ url('/units/'.$unit->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="/units/{{ $unit->id }}" method="POST">
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
    <a style="margin-top: 10px;" href="{{ url('/units/create') }}" class="btn btn-sm btn-info">Add Unit</a>

  </div>
</div>
