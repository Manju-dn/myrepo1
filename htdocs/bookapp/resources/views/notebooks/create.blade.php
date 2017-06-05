@extends('layouts.base')
@section('content')
<div class="container">
<h2>Create Notebook</h2>

<form action="/notebooks" method="POST">
{{csrf_field()}}
<div class="form-group">
<lable for="name">
Notebook Name
</lable>
<input type="text" name="name" class="form-control">
</div>
<input type="submit" name="" class="btn btn-primary" value="submit">
	
</form>
</div>
@endsection