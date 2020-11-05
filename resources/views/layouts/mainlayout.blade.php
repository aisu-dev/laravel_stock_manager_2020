<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.nav')
    @include('sweet::alert')

        <div class="content">

            @yield('content')

        </div>
    @include('layouts.partials.footer')


</body>
</html>