@extends('master')
@section('content')

<!---Form from Bootstrap--->
<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" required>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

</div>


@endsection




















<!-------developed by edwar "eddiemonster" vilchez to multitodo nov2020-------->