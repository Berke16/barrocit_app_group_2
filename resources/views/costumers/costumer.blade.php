<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>costumer</title>

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
                <a class="navbar-brand">Customer: {{"palceholder"}} </a>
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
                    <th>Company Name:</th>
                    <td>Kaczka</td>
                </tr>
                <tr>
                    <th>Faxnumbr:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Telephonenumber:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Telephonenumber2:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Adress:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Zipcode</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Resident:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Housnummber</th>
                    <td>PlaceHolder</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Adress 2:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Zipcode 2:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Resident 2:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Housnummber 2:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Contactperson:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Email::</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Initials:</th>
                    <td>PlaceHolder</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Rekening:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Salod:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Limit:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Grootboekingscode:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>BTW-code:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>BKR:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Credityworthy:</th>
                    <td>PlaceHolder</td>
                </tr>
                <tr>
                    <th>Pospect:</th>
                    <td>PlaceHolder</td>
                </tr>
            </table>
        </section>
    </div>
</div>
<div class="container">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Projects</h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addprojectmodal">Add Project</button>
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
    <div class="col-md-9">
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
    <section class="col-md-6" style="padding: 0;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Latest contact</h3>
                </div>
                <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover text-center" id="invoices-table">
                        <thead>
                        <tr>
                            <th class="text-center col-md-3">Date</th>
                            <th class="text-center col-md-9">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>21-08-2017</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut illo neque nesciunt, nihil obcaecati quo unde. Animi, cum enim eveniet fuga minus temporibus. Error impedit placeat quidem sit temporibus.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Offer's</h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addoffermodal">Add Acction</button>
                </div>
            </div>
            <div style="height: 200px; overflow: scroll; overflow-x: hidden ;">
                <table class="table table-hover text-center" id="invoices-table">
                    <thead>
                    <tr>
                        <th class="text-center col-md-6">Offernubers</th>
                        <th class="text-center col-md-6">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td><span class="label label-default">Inactive</span></td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td><span class="label label-success">Active</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Action's</h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addacctionmodal">Add Action</button>
                </div>
            </div>
            <div style="height: 460px; overflow: scroll; overflow-x: hidden;">
                <table class="table table-hover text-center" id="invoices-table">
                    <thead>
                    <tr>
                        <th class="text-center col-md-3">Date</th>
                        <th class="text-center col-md-9">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>21-08-2017</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut illo neque nesciunt, nihil obcaecati quo unde. Animi, cum enim eveniet fuga minus temporibus. Error impedit placeat quidem sit temporibus.</td>
                    </tr>
                    <tr>
                        <td>21-08-2017</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut illo neque nesciunt, nihil obcaecati quo unde. Animi, cum enim eveniet fuga minus temporibus. Error impedit placeat quidem sit temporibus.</td>
                    </tr>
                    <tr>
                        <td>21-08-2017</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut illo neque nesciunt, nihil obcaecati quo unde. Animi, cum enim eveniet fuga minus temporibus. Error impedit placeat quidem sit temporibus.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="addoffermodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Offer</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <h4 class="text-center">{{"company name"}}</h4>
                    <div class="form-group">
                        <label for="offernumber">Offer number</label>
                        <input class="form-control" type="text" id="offernumber" name="offernumber">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn pull-right">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div id="addacctionmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Action</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <h4 class="text-center">{{"company name"}}</h4>
                    <div class="form-group">
                        <label for="action">Action</label>
                        <select name="action" id="action" class="form-control">
                            <option value="action">Next acction</option>
                            <option value="action">Action</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn pull-right">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
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