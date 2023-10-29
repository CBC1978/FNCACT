<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
    @yield('head')
</head>
<body class="layout-boxed">

    @include('layouts.partials.navbar')

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('layouts.partials.sidebar')

        <div id="content" class="main-content">

            @yield('content')
            @include('layouts.partials.footer')

        </div>

    </div>
    @include('layouts.partials.scripts')
    @yield('script')

</body>
</html>
