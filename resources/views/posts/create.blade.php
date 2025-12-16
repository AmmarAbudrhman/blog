@extends('layout.app')

@section('title', 'Create Post')

@section('content')
    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <div class="row justify-content-center">

        <div class="card-body">
          <form method="POST" action="{{ route('posts.store') }}">

            @csrf

            <div class="form-group">
              <label for="title" aria-required="true">Title</label>
              <input
              required
                type="text"
                class="form-control"
                id="title"
                name="title"
                value="{{ old('title') }}"
              >
            </div>

            <div class="form-group">
              <label for="description" aria-required="true">Description</label>
              <textarea
              required
                class="form-control"
                id="description"
                name="description"
                rows="6"
              >{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
              <label for="post_creator" aria-required="true">Post Creator</label>
              <select class="form-control" id="post_creator" name="post_creator">
                <option value="">-- Select a creator --</option>
                               
                @foreach($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option> 
                  
                @endforeach
              </select>
            </div>

            <div class="d-flex justify-content-between">
              <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
              <button type="submit" class="btn btn-success">Create Post</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
