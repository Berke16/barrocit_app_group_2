<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add-costumer</title>

    <!-- Bootstrap CSS served from a CDN -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Barroc IT.</a>
                <a class="navbar-brand">Add Customer</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add Customer</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container well">
    <form action="" class="">
        <div class="form-group col-lg-4">
            <label for="comapnyName">Company name:</label>
            <input type="text" class="form-control" id="comapnyName" name="comapnyName">
        </div>
        <div class="form-group col-lg-3">
            <label for="contactpersonName">Firstname:</label>
            <input type="text" class="form-control" id="contactpersonName" name="contactpersonName">
        </div>
        <div class="form-group col-lg-2">
            <label for="contactpersonInsertion">Insertion:</label>
            <input type="text" class="form-control" id="contactpersonInsertion" name="contactpersonInsertion">
        </div>
        <div class="form-group col-lg-3">
            <label for="contactpersonLastname">Lastname:</label>
            <input type="text" class="form-control" id="contactpersonLastname" name="contactpersonLastname">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Residence:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-2">
            <label for="">Zipcode:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Street:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-2">
            <label for="">Huisnumer:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Residence 2:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-2">
            <label for="">Zipcode 2:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Street 2:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-2">
            <label for="">Huisnumer 2:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">E-mail:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Telefonnummber:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Fax-nummber:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">Banknummber:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">BTW-code:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group col-lg-4">
            <label for="">KVK-number:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group pull-right col-lg-2">
            <input type="submit" class="btn btn-primary col-lg-12" value="Add Customer">
        </div>
    </form>
</div>



<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>