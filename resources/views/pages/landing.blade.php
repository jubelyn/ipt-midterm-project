@extends('layouts.app')

@section('content')

    <div class="bg-primary custom">

        <h1 class="menu text-white"nav-items" ">Main Menu</h1>
        <hr>
        <div class="container">
            <ul class="menu-ul">
                <li class="li-menu"><a class="nav-items text-decoration-none" href="{{url('/')}}">Home</a></li>
                <li class="li-menu"><a class="nav-items text-decoration-none" href="{{url('/users')}}">Users</a></li>
                <li class="li-menu"><a class="nav-items text-decoration-none" href="{{url('/accounts')}}">Accounts</a></li>
            </ul>

        </div>
    </div>
@endsection
