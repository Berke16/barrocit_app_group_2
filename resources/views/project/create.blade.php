
@extends('layout.master')
@section('location')
    Add project
@endsection

@section('content')



    <div class="container well">
        <form action="" class="">
            <section class="col-md-4">
                <div class="form-group">
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
            </section>
        </form>
    </div>


@endsection