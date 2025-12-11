@extends(view: 'layout.app')


@section(section:'title')

@section(section:'content')
  <div class="d-flex justify-content-end mb-3">
    <a href="#" class="btn btn-success">Create</a>
  </div>

  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Posted By</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <th scope="row">{{ $post['id'] }}</th>
          <td>{{ $post['title'] }}</td>
          <td>{{ $post['author'] }}</td>
          <td>{{ $post['created_at'] }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Post actions">
              <a href="{{ url('posts/'.$post['id']) }}" class="btn btn-primary btn-sm">View</a>
              <a href="{{ url('posts/'.$post['id'].'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
