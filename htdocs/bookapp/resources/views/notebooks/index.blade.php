
@extends('layouts.base')
@section('content')
<div class="row">
<div class="col-md-6">
<h1 >
your notebooks
</h1>
</div>
<div class="col-md-6">

<a class="btn btn-primary" href="#" role="button" style="float: right;">
new notebook 
</a>
</div>

<div class="clearfix">
</div>
<br>
</div><!-- r -->
<div class="row">
@foreach($books as $notebook)

<div class="col-md-3 borde">
<div class="card">
<div class="card-block">
<a href="#">
<h4 class="card-title">
{{$notebook->name}}
</h4>
</a>

</div><!-- b -->
<a href="#">
<img  alt="Responsive image" class="img-fluid" src="https://sp.yimg.com/ib/th?id=OIP.tniFm8rVXc3x2OYxQU8chgDwEs&pid=15.1&w=74&h=91&p=0" width="70%">
</a>

<div class="card-block">
<a class="card-link" href="{{ route('notebooks.edit',$notebook->id)}}">
Edit Notebook
</a>

&nbsp;&nbsp;&nbsp;
<form action="#"  method="POST" style="display:inline;">
<input class="btn btn-sm btn-danger" type="submit" value="Delete">
</form>
</div><!-- b -->



</div><!-- c -->
</div><!-- 3 -->



@endforeach


</div><!-- r -->


@endsection




