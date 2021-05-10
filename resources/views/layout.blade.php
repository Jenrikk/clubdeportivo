
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>
	<style>
		/*lo llevamos a resources/sass/app.scss*/
		/*.active a {
			color:green;
			text-decoration: none;
		}*/

	</style>
	<title>@yield('title')</title>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials/nav')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name')}} | Copyright @ {{ date('Y')}}
		</footer>

	</div>
</body>
</html>