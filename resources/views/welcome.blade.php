@extends('layouts.master')

@section('title')
    Welcome People!
@endsection

@section('content')
    <div class="row">
    <div class="col-md-4">
        <h3>Sign up</h3>
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="first" id="first">
            </div>
            <div class="form-group">
                <label for="first_name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
    <div class="col-md-4">
        <h3>Sign in</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="first" id="first">
            </div>
            <div class="form-group">
                <label for="first_name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn-primary">Submit</button>
    </form>
    </div>
    </div>
@endsection