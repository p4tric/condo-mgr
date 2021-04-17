<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Founded</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cars as $car)
    <tr>
      <td><a href="{{ url('/cars/'.$car->id) }}">{{ $car->name }}</a></td>
      <td>{{ $car->founded }}</td>
      <td>{{ $car->description }}</td>
      <td style="display: flex;">
        <a style="margin-right: 5px;" href="{{ url('/cars/'.$car->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="/cars/{{ $car->id }}" method="POST">
          @csrf
          @method('DELETE')
          <button
            type="submit"
            class="btn btn-sm btn-danger">
            Delete
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
