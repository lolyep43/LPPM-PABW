<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PeTaL</title>
	<!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/logen.css') }}">
</head>	
<body>
<div class="container" id="container">

	<div class="form-container sign-in-container">
		<form method="POST" action="{{ url('/postlogin') }}"">
			@csrf
			<div>
				<x-input id="email" type="email" name="email" placeholder="Masukkan email" />
			</div>
			<div>
			<x-input id="password"
                                type="password"
                                name="password"
                                placeholder="Password" />
			</div>
			<x-button class="ml-3">
				{{ __('Log in') }}
			</x-button>
			<a href="{{ route('password.request')}}">Forgot your password?</a>
		</form>
	</div>
</div>

<!-- custom js file link  -->
<script src="{{ asset('js/logen.js') }}"></script>
</body>


