<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add-project</title>

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
                <a class="navbar-brand">Customer: {{"placeholder"}}</a>
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
<!--            <div class="form-group col-md-12">-->
<!--                <label for="">asdasdas</label>-->
<!--                <input type="text" class="form-control">-->
<!--            </div>-->
<div class="container well">
    <form action="" class="">
        <section class="col-md-4">
            <!--
            Project name
            Description
            Status
            Start date
            Deadline
            Metaines cointract
            -->         <div class="form-group">
                <label for="">Project-name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Start date</label>
                <input type="date"class="form-control">
            </div>
            <div class="form-group">
                <label for="">Deadline</label>
                <input type="date" class="form-control">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="">Metainse Contrackt</label>
            </div>
        </section>
        <section class="col-md-4">
            <!--
            Applications
            Hardware
            Operating system
            Appointments
            -->
            <div class="form-group">
                <label for="">Opereting system</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Applications</label>
                <textarea class="form-control noresize" name="" id="" rows="3" >CSV (app,app,...)</textarea>
            </div>
            <div class="form-group">
                <label for="">Hardwere</label>
                <textarea class="form-control noresize" name="" id="" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Appointmets</label>
                <textarea class="form-control noresize" name="" id="" rows="3" ></textarea>
            </div>
        </section>
        <section class="col-md-4">
            <div class="form-group">
                <label for="">Total project price</label>
                <div class="input-group">
                    <span class="input-group-addon">€</span>
                    <input type="text" class="form-control" aria-label="amount">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>

            <div class="form-group">
                <label for="">amount terms</label>
                <input type="number"class="form-control" min="1" value="1">
            </div>
            <div class="form-group">
                <label for="">tems per month</label>
                <select name="" id="" class="form-control">
                    <option value="1">Month</option>
                    <option value="2">2 Month's</option>
                    <option value="3">Kwatral</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Firt Pay Day2 xDDDD</label>
                <input type="date" class="form-control" name="" id="">
            </div>
            <input type="submit" class="pull-right" value="Add Project">
            <!--
            Aantal termijnen
            Totaal Project prijs
            Termijnen Per (maand, 2 manden, kwartaal)
            Datum eerste betaling

            -->
        </section>
    </form>
</div>

















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tabel_filter.js"></script>
<script>
    $(function(){
        $('*[data-href]').click(function(){
            window.location = $(this).data('href');
            return false;
        });
    });
</script>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>