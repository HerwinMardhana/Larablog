@extends('layout.main')

@section('title', '| Edit Page')

@section('content')

<div class="row">
	{!! Form::model($post, ['route'=> ['post.update', $post->id], 'method'=> 'PUT']) !!}
		<div class ="col-md-8">
			{{ Form::label('title', 'Title')}}	
			{{ Form::text('title', null , ['class' => 'form-control input-lg']) }}

			{{ Form::label('slug','Slug',['class'=>'form-spacing-top'])}}
			{{ Form::text('slug',null, ['class'=>'form-control'])}}

			{{ Form::label('body', 'Body', ['class' => 'form-spacing-top'])}}
		 	{{ Form::textarea('body', null , ['class' => 'form-control']) }}
	 	</div>

	 	<div class="col-md-4">
	 		<div class="well">
	 			<dl class="dl-horizontal">
	 				<dt>Created At:</dt>
	 				<dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
	 			</dl>
	 			<dl class="dl-horizontal">
	 				<dt>Last Updated At:</dt>
	 				<dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
	 			</dl>
	 			<hr>
	 			<div class="row">
	 				<div class="col-md-6">
	 					
	 					<a href="{{ route('post.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a>
	 				
	 				</div>
	 				<div class="col-md-6">
	 					
	 					{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 {!! Form::close()!!}<!--end of form-->
</div><!--end of row-->


@stop