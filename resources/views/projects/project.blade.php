<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>project</title>

    <!-- Bootstrap CSS served from a CDN -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

</head>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Barroc IT.</a>
                <a class="navbar-brand">Project: {{"placeholder"}}</a>
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
<div class="container-fluid well">
    <div class="container">
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Project name:</th>
                    <td>Placeholder</td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Start date:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Deadline:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Mentained contract:</th>
                    <td>PlaceHolder</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Applications:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Hardware:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Operating system:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Appointments:</th>
                    <td>PlaceHolder</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Company name:</th>
                    <td><a href="">PlaceHolder</a></td>
                </tr>
                <tr>
                    <th>Internal contact person:</th>
                    <td>PlaceHolder</td>
                </tr>
            </table>
        </section>
    </div>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Invoices</h3>
            <div class="pull-right">
                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                        <i class="glyphicon glyphicon-filter"></i>
                    </span>
            </div>
        </div>
        <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#invoices-table" placeholder="Invoces Table" />
        </div>
        <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
            <table class="table table-hover text-center" id="invoices-table">
                <thead>
                <tr>
                    <th class="text-center">Project</th>
                    <th class="text-center">Invoice Nr.</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Totaal</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-success">Active</span></td>
                </tr>
                <tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-danger">Banned</span></td>
                </tr>
                <tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-default">Inactive</span></td>
                </tr>
                <tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-default">Inactive</span></td>
                </tr>
                <tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-default">Inactive</span></td>
                </tr><tr>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td>Barroc IT.</td>
                    <td><span class="label label-default">Inactive</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
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
<body>

</body>
</html>