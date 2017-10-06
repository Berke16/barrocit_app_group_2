<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>development</title>

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
                    <a class="navbar-brand">Home: Development</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Customers</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                </div>
                <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th class="col-sm-3">Klanten nr.</th>
                            <th class="col-sm-3">Name</th>
                            <th class="col-sm-3">Contact Person</th>
                            <th class="col-sm-3">Latest Cotntact</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="danger">
                            <td>0002</td>
                            <td>Barroc IT.</td>
                            <td>Jean-Pierre Slimmen</td>
                            <td>12-07-2017</td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>Barroc IT.</td>
                            <td>SM Wolfi</td>
                            <td>12-07-2017</td>
                        </tr>
                        <tr>
                            <td>0022</td>
                            <td>Baadadarroc IT.</td>
                            <td>Pierre Slimmen</td>
                            <td>12-02-2017</td>
                        </tr>
                        <tr>
                            <td>0012</td>
                            <td>Barrocsdasd IT.</td>
                            <td>Jean Slimmen</td>
                            <td>12-08-2017</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Projects</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#projects-table" placeholder="Filter Projects" />
                </div>
                <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover text-center" id="projects-table">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr  data-href="http://google.com" class="danger">
                            <td>Barroc IT.</td>
                        </tr>
                        <tr>
                            <td>Barroc IT.</td>
                        </tr>
                        <tr>
                            <td>Barroc IT.</td>
                        </tr>
                        <tr>
                            <td>Barroc IT.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>