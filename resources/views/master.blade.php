<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multitodo | eStore</title>
	<style>
		.custom-login{
			height: 500px;
			padding-top: 100px;
		}
	</style>
	<!---Bootstrap CSS--->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>

	<!----dependency injection binding---->
	{{ View::make('header') }}

	<!---add the yield directive--->
	@yield('content')	

	<!----dependency injection binding---->
	{{ View::make('footer') }}

	<!---Bootstrap JS--->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>


	
</body>
</html>


<!-------developed by edwar "eddiemonster" vilchez to multitodo nov2020-------->