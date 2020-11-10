@extends('layouts.mainlayout')
@section('title', 'Stock Management System')
@section('content')
<div class="contentarea">
    <h1>Stock Management System</h1>
    <hr>
    <div class="row">
        @if (Cookie::get('_uid'))
            @if (Cookie::get('_posid')==1)
                <div class="homeitems col">
                    <a href="/product">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/685/685388.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Products</h2>
                    </a>
                </div>
                <div class="homeitems col">
                    <a href="/admin/manage_emp">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/2666/2666505.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Manage Accounts</h2>
                    </a>
                </div>
                <div class="homeitems col">
                    <a href="{{url('/emp/edit')}}">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/2921/2921222.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Edit Profile</h2>
                    </a>
                </div>
                <div class="homeitems col">
                    <a href="/signout">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/1828/1828490.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Sign Out</h2>
                    </a>
                </div>
            @else
                <div class="homeitems col">
                    <a href="/product">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/685/685388.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Products</h2>
                    </a>
                </div>
                <div class="homeitems col">
                    <a href="{{url('/emp/edit')}}">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/2921/2921222.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Edit Profile</h2>
                    </a>
                </div>
                <div class="homeitems col">
                    <a href="/signout">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/1828/1828490.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Sign Out</h2>
                    </a>
                </div>
            @endif
        @else
        <div class="homeitems col">
            <a href="/product">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/685/685388.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                    <h2>Products</h2>
            </a>
        </div>
        <div class="homeitems col">
            <a href="/signin">
                <img src="https://www.flaticon.com/svg/static/icons/svg/747/747376.svg" width="110" height="110" class="d-inline-block align-top" alt="">
                <h2>Sign In</h2>
            </a>
        </div>
        @endif
    </div>

</div>
@endsection
