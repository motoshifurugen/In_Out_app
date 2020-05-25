<html>
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @component('components.header2')
    @endcomponent
    <div class="container pt-5 pb-5">
        @yield('content')
    </div>
    @component('components.footer2')
    @endcomponent

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>