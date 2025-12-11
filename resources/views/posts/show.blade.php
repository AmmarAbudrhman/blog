<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Post Details</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Post Details</a>
		</nav>

		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card shadow-sm">
						<div class="card-header bg-primary text-white">
							{{ data_get($post, 'title', 'Untitled Post') }}
						</div>
						<div class="card-body">
							<p class="mb-2"><strong>Author:</strong> {{ data_get($post, 'author', 'Unknown author') }}</p>
							<p class="mb-4"><strong>Created:</strong> {{ data_get($post, 'created_at', 'Not specified') }}</p>
							<p class="mb-0">{{ data_get($post, 'body', 'No content available for this post.') }}</p>
						</div>
					</div>
					<div class="mt-4 d-flex justify-content-between">
						<a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
						<div>
							<button type="button" class="btn btn-warning">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
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
