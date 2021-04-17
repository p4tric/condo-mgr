<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Specialty</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{ $student->cne }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->specialty }}</td>
      <td>
        <a href="#" class="btn btn-sm btn-info">Show</a>
        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <a href="#" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
