<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ammar Bawaizr Blog Post </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <a class="navbar-brand" href="#">  All Posts </a>


      </ul>

    </div>
  </nav>
  <div class="mt-5">
    <div class="text-center" >
      <button type="button" class="btn btn-success">Create</button>

    </div>
      </tbody>
  <table class="table mt-4" >
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
              <a href="{{ url(path: 'posts/'.$post['id'].'/delete') }}" class="btn btn-danger btn-sm">Delete</a>
            </div>
          </td>
        </tr>
      @endforeach
    
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>