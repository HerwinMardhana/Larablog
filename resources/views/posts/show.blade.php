@extends('layout.main')

@section('title','| View Post')

@section('content')
	
	<div class="row">
		<div class ="col-md-8">	
			<h1>{{ $post->title }}</h1>

		 	<p class="lead text-justify">{{ $post->body }}</p>
	 	</div>

	 	<div class="col-md-4">
	 		<div class="well">
	 			<dl class="dl-horizontal">
	 				<label>Url:</label>
	 				<p><a href="{{ url($post->slug) }}">{{ url($post->slug)}}</a></p>
	 			</dl>
	 			<dl class="dl-horizontal">
	 				<label>Created At:</label>
	 				<p>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</p>
	 			</dl>
	 			<dl class="dl-horizontal">
	 				<label>Last Updated At:</label>
	 				<p>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</p>
	 			</dl>
	 			<hr>
	 			<div class="row">
	 				<div class="col-md-6">
	 					<a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
	 				
	 				</div>
	 				<div class="col-md-6">
	 					{!! Form::open(['route'=>['post.destroy', $post->id],'method'=>'DELETE']) !!}
	 					{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
	 					{!! Form::close() !!}
	 				</div>
	 			</div><!--end of row-->
	 			<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('post.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>
	 		</div>
	 	</div>
	 </div><!--end of row-->
@endsection

<!-- Html::LinkRoute
	penggunaaan html helper, 4 parameter. 
	 param 1 = route, 
	 param 2 = nama tag, 
	 param 3 = id variabel(url pada Route:list), 
	 param 4 = class css yg digunakan


	Form
	 param 1 = routing url
	 param 2 = array post id
	 param 3 = method http
	 param 4 = class tambahan bootstrap class

!!>