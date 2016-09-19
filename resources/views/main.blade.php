<!DOCTYPE html>
<html>
@include('partials._head')


<body>
	@include('partials._nav')

	<div class="container">
		@yield('content')
		@include('partials._footer')
		<button class="btn btn-primary">Primary Button</button>
	</div>

	@include('partials._scripts')
	@yield('additional_scripts')
</body>


</html>