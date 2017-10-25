@extends('layouts.master')
@section('location')
Edit project
@endsection
@section('content')
<div class="container well">
    <form action="{{ action('ProjectsController@update', $project->id)}}" class="" method="post">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <section class="col-md-4">

            <div class="form-group">
                <label for="name">Project name<span style="color: red">*</span></label>
                <input type="text" id="name" class="form-control" name="name" value="{{old('name', $project->name)}}" required>
            </div>

            <div class="form-group">
                <label for="description">Description<span style="color: red">*</span></label>
                <input type="text" id="description" class="form-control" name="description" value="{{old('description', $project->description)}}" required>
            </div>

            <div class="form-group">
                <label for="start_date">Start date<span style="color: red">*</span></label>
                <input type="date" id="start_date" class="form-control" name="start_date" value="{{old('start_date',$project->start_date )}}" required>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline<span style="color: red">*</span></label>
                <input type="date" id="deadline" class="form-control" name="deadline" value="{{old('deadline',$project->deadline )}}" required>
            </div>

            <div class="form-group">
                <label for="maintained_contract">Maintain Contract<span style="color: red">*</span></label>
                <select name="maintained_contract" id="maintained_contract" class="form-control" required>
                    @if($project->maintained_contract == 0)
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                    @else
                    <option value="0">No</option>
                        <option value="1">Yes</option>
                    @endif
                </select>
            </div>

        </section>
        <section class="col-md-7">
            <div class="form-group">
                <label for="operating_system">Operating system<span style="color: red">*</span></label>
                <input type="text" id="operating_system" class="form-control" name="operating_system" value="{{old('operating_system', $project->operating_system)}}" required>
            </div>

            <div class="form-group">
                <label for="applications">Applications<span style="color: red">*</span></label>
                <textarea class="form-control noresize" name="applications" id="applications" rows="3"  required>{{old('applications',$project->applications )}}</textarea>
            </div>

            <div class="form-group">
                <label for="hardware">Hardware<span style="color: red">*</span></label>
                <textarea class="form-control noresize"  name="hardware" id="hardware" rows="3" required>{{old('hardware', $project->hardware)}}</textarea>
            </div>

        </section>
        <section class="col-md-12">
            <div class="form-group">
                <input type="submit" class="btn btn-primary pull-right" value="Edit project">
            </div>
        </section>
    </form>
</div>
@endsection