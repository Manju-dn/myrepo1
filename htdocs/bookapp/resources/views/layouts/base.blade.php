<!DOCTYPE html>
<html>
<head>
 
	<title>notebook</title>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-dark bg-primary">

<div class="collapse navbar-toggleable-xs" id="navbar-header">
<a class="nvbar-brand" href="#">BookApp</a>


</div>

</nav>
@yield('content')

</div><!-- c-f -->





<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/npm.js')}}"></script>


</body>
</html>