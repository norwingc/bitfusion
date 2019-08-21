<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Bitfusion Exchange - @yield('page_title')</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        @yield('css')
    </head>
    <body>
		@include('template._nav')
		<main id="app">
			@yield('content')
		</main>
        @include('template._footer')
        <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
        @yield('js')
        @stack('scripts')
    </body>
</html>
