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
    <div class="table_style">
        <table class="table table-hover text-center" id="projects-table">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr data-href="../project/{{$project->id}}">
                        <td>{{$project->name}}</td>
                        <td>
                            @switch($project->status())
                                @case(0)
                                <span class="label label-default ">Normal</span>
                                @break
                                @case(1)
                                <span class="label label-danger">RedTube</span>
                                @break
                                @case(2)
                                <span class="label label-success">Finished</span>
                                @break
                            @endswitch
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
