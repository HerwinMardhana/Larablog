@extends('layout.main')

@section('title','| All Post')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Post </h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('post.create') }}" class="btn btn-lg btn-primary btn-block btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>	
		<hr>
	</div><!--end of row -->


	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)
						
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td>
								<a href="{{ route('post.show', $post->id) }}" class="btn btn-default btn-sm">View</a> 
								<a href="{{ route('post.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
							</td>
						</tr>

					@endforeach
					
				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>

@endsection