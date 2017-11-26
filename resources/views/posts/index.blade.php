@extends('layouts.app')


@section('content')

	@foreach($posts1 as $post)
		<div class = "row">
					<div class="col-md-12" align="center">
						<h2><a href="{{route('post_path',['post' => $post->id])}}">
							{{$post->title}}</a></h2>
						
						<p>Posted {{$post->created_at->diffForHumans() }} </p>		


				</div>
	@endforeach	

		</div>


@endsection
