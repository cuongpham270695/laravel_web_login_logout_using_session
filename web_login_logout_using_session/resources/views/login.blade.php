@extends('layouts.master')
@section('content')
    <div class="title m-b-md">Login</div>
    <div class="form-login">
        @if(Session::has('login-fail'))
            <div class="login-fail">
                <p class="text-danger">{{Session::get('login-fail')}}</p>
            </div>
        @endif
        @if(Session::has('not-login'))
            <div class="not-login">
                <p class="text-danger">{{Session::get('not-login')}}</p>
            </div>
        @endif
        <form action="{{route('user.login')}}" class="text-left" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputUsername">User name
                    <input type="text" class="form-control" id="inputUsername" name="inputUsername"
                           placeholder="Enter user name" required>
                </label>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword"
                           placeholder="password" required>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
