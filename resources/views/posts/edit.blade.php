<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Edit Post</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Edit Post</a>
		</nav>

		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card shadow-sm">
						<div class="card-header bg-warning text-dark">
							Update Post
						</div>
						<div class="card-body">
							<form method="POST" action="#">
								@csrf
								@method('PUT')

								<div class="form-group">
									<label for="title">Title</label>
									<input
										type="text"
										class="form-control"
										id="title"
										name="title"
										value="{{ old('title', data_get($post, 'title')) }}"
									>
								</div>

								<div class="form-group">
									<label for="author">Author</label>
									<input
										type="text"
										class="form-control"
										id="author"
										name="author"
										value="{{ old('author', data_get($post, 'author')) }}"
									>
								</div>

								<div class="form-group">
									<label for="content">Content</label>
									<textarea
										class="form-control"
										id="content"
										name="content"
										rows="6"
									>{{ old('content', data_get($post, 'content')) }}</textarea>
								</div>

								<div class="d-flex justify-content-between">
									<a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
									<button type="submit" class="btn btn-warning">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
