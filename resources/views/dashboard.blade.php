@extends('app')

@section('content')

    <div>
        <div class="card mb-3 bg-light">
            <div class="card-body" >
              <h5 class="card-text">Welcome to our rss reader, web app with opinion free social network component</h5>
            </div>
        </div>
        <div class="card mb-3 bg-light">
            <div class="card-body">
              <h6 class="card-text">Read articles from your favorite sources via RSS without the noise of soial media. This is an open alpha version of the platform, so it has a very simple 3-step setup process.</h6>
            </div>
        </div>
        <div class="card mb-3 bg-light">
            <div class="card-body">
                <h5 class="card-title">Step 1. Authorization</h5>
                <p class="card-text">We don't store any of your personal data on our servers, only keep a reference to your account.</p>
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully logged into your account. Feel free to explore the rs reader and choose the content that you wish to read.</p>                        </div>
                        <a class="nav-link text-success" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
            
                </ul>
            </div>
        </div>
    </div>

    

@endsection