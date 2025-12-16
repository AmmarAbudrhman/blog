@extends('layout.app')

@section('title', 'All Posts')

@section('content')
  <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
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
          <th scope="row">{{ $post->id}}</th>
          <td>{{ $post->Title }}</td>
          <td>{{ $post->user->name ?? 'No Author' }}</td>
          <td>{{ $post->created_at->format('Y-m-d') }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Post actions">
              <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">View</a>
              <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
