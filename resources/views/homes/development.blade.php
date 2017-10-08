
@extends('layout.master')
@section('location')
    Home: Development
@endsection
@section('content')

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

@endsection