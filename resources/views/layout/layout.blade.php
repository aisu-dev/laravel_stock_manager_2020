<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
            @if (Cookie::get('_uid'))
            <div class="navbar">
                <a href="/">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/25/25694.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Home</a>
                    <a href="/product">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/685/685388.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Product List</a>
                    @if (Cookie::get('_posid')==1)
                        <a href="/admin/manage_emp">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/2666/2666505.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                        Manage Accounts</a>
                    @endif
                        <a href="{{url('/emp/edit')}}">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/2921/2921222.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                        Edit Profile</a>
                        <div class="navbar-nav ml-auto">
                        <a href="/signout">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/1828/1828490.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                        Sign Out</a>
                        </div>
            </div>
            @else
            <div class="navbar">
                <a href="/">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/25/25694.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Home</a>
                <a href="/product">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/685/685388.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Product List</a>
                <div class="navbar-nav ml-auto">
                    <a href="/signin">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/747/747376.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Sign In</a>
                </div>
            </div>
            @endif

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
