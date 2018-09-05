@extends('layout.main')

@section('title', '| Homepage')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to Laravel Blog</h1>
            <p class="lead">Welcome to laravel blog, Thanks for Visiting, this blog is create with laravel framework and bootstrap.css</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div><!--end of header .row-->

      <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)

                  <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p class = "text-justify">{{ substr($post->body, 0, 300) }}{{ strlen($post->body) >300 ? "..." : ""}}</p>
                    <a href="#" class="btn btn-primary" >Read More</a>
                  </div>
              <hr>

          @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
      </div><!-- end of row -->
    @endsection
    