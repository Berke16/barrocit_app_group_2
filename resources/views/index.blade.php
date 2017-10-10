
@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="text-muted">Login Barroc IT.</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="********">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="s"> <label for="s" >Stay logged-in</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection