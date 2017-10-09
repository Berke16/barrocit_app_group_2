
@extends('layout.master')
@section('location')
    Add customer
@endsection
@section('content')

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

@endsection