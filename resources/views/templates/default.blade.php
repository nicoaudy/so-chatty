<!DOCTYPE html>
<html>
<head>
	<title>Chatty</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	@include('templates.partials.navigation')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>