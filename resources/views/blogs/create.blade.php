@extends('layouts.app')
@section('content')
<form action="{{ route('store_blog_path')}}" method="POST">
@csrf
<div class="form-group">
	<label for="title">TItle</label>
	<input type="text" name="title" class="form-control">
</div>
<div class="form-group">
		<label for="content">Content</label>
	<textarea name="content" rows="18" class="form-control"></textarea>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-outline-primary">Add Blog Posts</button>
</div>
</form>

@endsection