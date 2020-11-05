<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>IDK</title>
</head>
<body>
    <nav>
        <div class="topnav">
            <nav class="navbar">
                <ul style="list-style-type: none;">
                    <a class="navbar-brand" href="/">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Wikisource-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Stock management
                    </a>
                    <li>
                        <a href="/">STOCK</a>
                    </li>
			        @if (Cookie::get('_uid'))
                    	@if (Cookie::get('_posid')==1)
                        	<li ><a href="/admin/manage_emp">Manage-Emp</a></li>
                     	@endif
                         <a href="{{url('/emp/edit')}}">EDIT</a>
                         <li style="margin-left:550px;"><a href="/signout">SIGN OUT</a></li>
                	@else
                    	<li style="margin-left:750px;"><a href="/signin">SIGN IN</a></li>
                	@endif
                </ul>
            </nav>
        </div>
    </nav>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
