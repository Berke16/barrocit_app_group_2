
@extends('layout.master')
@section('location')
    Add customer
@endsection
@section('content')
    <!-- This is a form that an employee needs to fill to create a customer. This "new" customer can't get a project immediately, a finance employee needs to do a BCR check first to see if the customer is worth to get a project. -->
    <div class="container well">
        <form action="{{action('CustomersController@store')}}" class="" method="post">
            {{ csrf_field() }}
            <div class="form-group col-lg-4">
                <label for="companyName">*Company name:</label>
                <input type="text" class="form-control" id="companyName" name="companyName" required>
            </div>
            <div class="form-group col-lg-3">
                <label for="Name">*Firstname:</label>
                <input type="text" class="form-control" id="Name" name="Name">
            </div>
            <div class="form-group col-lg-2">
                <label for="Insertion">*Insertion:</label>
                <input type="text" class="form-control" id="Insertion" name="Insertion">
            </div>
            <div class="form-group col-lg-3">
                <label for="Lastname">*Lastname:</label>
                <input type="text" class="form-control" id="Lastname" name="Lastname" >
            </div>
            <div class="form-group col-lg-3">
                <label for="Email">*E-mail:</label>
                <input type="text" name="Email" id="Email" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label for="Telephonenumber">*Telephonenumber:</label>
                <input type="text" name="Telephonenumber" id="Telephonenumber" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label for="Telephonenumber2">*Telephonenumber 2:</label>
                <input type="text" name="Telephonenumber2" id="Telephonenumber2" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label for="FaxNumber">Faxnumber:</label>
                <input type="text" name="FaxNumber" id="FaxNumber" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="Street">*Street:</label>
                <input type="text" name="Street" id="Street" class="form-control">
            </div>
            <div class="form-group col-lg-2">
                <label for="Zipcode">*Zipcode:</label>
                <input type="text" name="Zipcode" id="Zipcode" class="form-control">
            </div>
            <div class="form-group col-lg-2">
                <label for=Housenumber>*Housenumber:</label>
                <input type="text" name="Housenumber" id="Housenumber" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="Residence">*Residence:</label>
                <input type="text" name="Residence" id="Residence" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="Street2">Street 2:</label>
                <input type="text" name="Street2" id="Street2" class="form-control">
            </div>
            <div class="form-group col-lg-2">
                <label for="Zipcode2">Zipcode 2:</label>
                <input type="text" name="Zipcode2" id="Zipcode2" class="form-control">
            </div>
            <div class="form-group col-lg-2">
                <label for="Housenumber2">Housenumber 2:</label>
                <input type="text" name="Housenumber2" id="Housenumber2" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="Residence2">Residence 2:</label>
                <input type="text" name="Residence2" id="Residence2" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="Banknumber">*Banknumber:</label>
                <input type="text" name="Banknumber" id="Banknumber" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="VATCode">*VAT-code:</label>
                <input type="text" name="VATCode" id="VATCode" class="form-control">
            </div>
            <div class="form-group pull-right col-lg-2">
                <input type="submit" class="btn btn-primary col-lg-12" value="Add customer">
            </div>
        </form>
    </div>
@endsection