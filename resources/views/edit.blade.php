@extends('layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h1>Edit image</h1>
				<img src="/{{$imagesInView->image}}" alt="" class="img-thumbnail">
				<form action="/update/{{$imagesInView->id}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-control">
						<input type="file" name="image">
					</div>
					<button type="submit" class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@endsection