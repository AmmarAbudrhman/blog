@extends('layout.app')

@section('title', data_get($post, 'title', 'Post Details'))

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          {{ data_get($post, 'title', 'Untitled Post') }}
        </div>
        <div class="card-body">
          <p class="mb-2"><strong>Author:</strong> {{ data_get($post, 'author', 'Unknown author') }}</p>
          <p class="mb-4"><strong>Created:</strong> {{ data_get($post, 'created_at', 'Not specified') }}</p>
          <p class="mb-0">{{ data_get($post, 'content', 'No content available for this post.') }}</p>
        </div>
      </div>
      <div class="mt-4 d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
        <div>
          <a href="{{ url('posts/'.$post['id'].'/edit') }}" class="btn btn-warning">Edit</a>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
@endsection
