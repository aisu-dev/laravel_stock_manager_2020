<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layout.layout')
    @include('sweet::alert')
        <div class="content">
            @yield('content')
        </div>
    @include('layouts.partials.footer')
</body>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';

    if(exist){
        swal(msg, "", "success");
    }
</script>
</html>
