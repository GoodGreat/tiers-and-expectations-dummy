@extends('layout.web-layout')

@section('content')

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 my-4">
		<div class="float-start">
			<h4>View Post</h4>
		</div>
		<div class="float-end">
			<a class="btn btn-sm btn-warning" href="{{ route('posts.index') }}"><i class="fa fa-chevron-left"></i> Back</a>
		</div>
	</div>
	<div class="col-lg-2"></div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">

			<div class="mb-3">
				<h6>Title:</h6>
				<p>{{ $post->title }}</p>
			</div>

			<div class="mb-3">
				<h6>Description:</h6>
				<p>{{ $post->description }}</p>
			</div>

	</div>
	<div class="col-lg-2"></div>
</div>

@endsection