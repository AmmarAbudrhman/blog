<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Edit Post</title>
	</head>
	<body>
		
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card shadow-sm">

						<div class="card-body">
							<form method="POST" action="{{ route('posts.update', $post['id']) }}">
								@csrf
								@method('PUT')
								<input type="hidden" name="id" value="{{ data_get($post, 'id') }}">
								<div class="form-group">
									<label for="title">Title</label>
									<input
										type="text"
										class="form-control"
										id="title"
										name="title"
										value="{{ $post->Title }}"
									>
								</div>

								<div class="form-group">
									<label for="description">Description</label>
									<textarea
										class="form-control"
										id="description"
										name="description"
										rows="6"
									>{{ $post->description }}</textarea>
								</div>

									<div class="form-group">
									<label for="post_creator">Post Creator</label>
									<select class="form-control" id="post_creator" name="post_creator">
										<option value="">-- Select a creator --</option>
													
										@foreach($users as $user)
										<option @selected($post->user_id==$user->id) value="{{ $user->id }}">{{ $user->name }}</option> 
										@endforeach
									</select>
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
