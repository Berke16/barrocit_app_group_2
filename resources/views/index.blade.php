<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>

    <!-- Bootstrap CSS served from a CDN -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container" style="">
        <div class="row">
            <div class="col-lg-4">
            </div>
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
                        <input type="checkbox" id="s"> <label for="s" >Stay loged in</label >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>