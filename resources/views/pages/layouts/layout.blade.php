<!DOCTYPE html>
<html>
	@include('pages.layouts.blocks._head')

	@include('pages.layouts.blocks._header')
	
	<div class="content" id="content">
		@yield('content')
	</div>

	@include('pages.layouts.blocks._footer')

	@include('pages.layouts.blocks._scripts')
</html>