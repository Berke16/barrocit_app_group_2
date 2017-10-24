@extends('layouts.master')
@section('location')
Edit customer
@endsection
@section('content')
<div class="container well">

    <form action="{{action('CustomersController@update', $customer->id)}}" method="post">
        {{csrf_field()}}

        {{method_field('PUT')}}
        {{--sales can change this--}}
        @if(Auth::user()->type == 'sales' || Auth::user()->type == 'finance' || Auth::user()->type == 'admin')
        <div class="form-group col-lg-4">
            <label for="company_name">Company name:<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="company_name" name="company_name" value="{{old('company_name', $customer->name)}}" required>
        </div>

        <div class="form-group col-lg-3">
            <label for="name">Firstname:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name',$customer->cp_name )}}">
        </div>

        <div class="form-group col-lg-2">
            <label for="insertion">Insertion:</label>
            <input type="text" class="form-control" id="insertion" name="insertion" value="{{old('insertion', $customer->cp_insetion)}}">
        </div>

        <div class="form-group col-lg-3">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname', $customer->cp_lastname)}}">
        </div>

        <div class="form-group col-lg-3">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control" value="{{old('email', $customer->mail)}}">
        </div>

        <div class="form-group col-lg-3">
            <label for="telephonenumber">Telephonenumber:<span style="color: red">*</span></label>
            <input type="text" name="telephonenumber" id="telephonenumber" class="form-control" value="{{old('telephonenumber', $customer->tele)}}" required>
        </div>

        <div class="form-group col-lg-3">
            <label for="telephonenumber2">Telephonenumber 2:</label>
            <input type="text" name="telephonenumber2" id="telephonenumber2" value="{{old('telephonenumber2',$customer->tele2)}}" class="form-control">
        </div>

        <div class="form-group col-lg-3">
            <label for="fax_number">Faxnumber:</label>
            <input type="text" name="fax_number" id="fax_number" class="form-control" value="{{old('fax_number', $customer->fax_number)}}">
        </div>

        <div class="form-group col-lg-4">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{{old('street',$customer->street)}}">
        </div>

        <div class="form-group col-lg-4">
            <label for="street2">Street 2:</label>
            <input type="text" name="street2" id="street2" class="form-control" value="{{old('street2', $customer->street2)}}">
        </div>

        <div class="form-group col-lg-2">
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{old('zipcode', $customer->zip_code)}}">
        </div>

        <div class="form-group col-lg-2">
            <label for="zipcode2">Zipcode 2:</label>
            <input type="text" name="zipcode2" id="zipcode2" class="form-control" value="{{old('zipcode2',$customer->zip_code2 )}}">
        </div>

        <div class="form-group col-lg-2">
            <label for="housenumber">Housenumber:</label>
            <input type="text" name="housenumber" id="housenumber" class="form-control" value="{{old('housenumber', $customer->housenumber)}}">
        </div>

        <div class="form-group col-lg-2">
            <label for="housenumber2">Housenumber 2:</label>
            <input type="text" name="housenumber2" id="housenumber2" class="form-control" value="{{old('housenumber2',$customer->housenumber2)}}">
        </div>

        <div class="form-group col-lg-4">
            <label for="residence">Residence:</label>
            <input type="text" name="residence" id="residence" class="form-control" value="{{old('residence', $customer->residence)}}">
        </div>

        <div class="form-group col-lg-4">
            <label for="residence2">Residence 2:</label>
            <input type="text" name="residence2" id="residence2" class="form-control" value="{{old('residence2',$customer->residence2 )}}">
        </div>
        @endif
        @if(Auth::user()->type == 'development')
        <div class="form-group col-lg-4">
           <label for="company_name">Company name:<span style="color: red">*</span></label>
           <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $customer->name)}}" required>
       </div>

       <div class="form-group col-lg-3">
           <label for="name">Firstname:</label>
           <input type="text" class="form-control" id="name" name="name" value="{{old('name', $customer->cp_name)}}">
       </div>

       <div class="form-group col-lg-2">
        <label for="insertion">Insertion:</label>
        <input type="text" class="form-control" id="insertion" name="insertion" value="{{old('insertion', $customer->cp_insetion)}}">
    </div>

    <div class="form-group col-lg-3">
       <label for="lastname">Lastname:</label>
       <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname', $customer->cp_lastname) }}">
   </div>

   <div class="form-group col-lg-3">
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" class="form-control" value="{{old('email',$customer->mail )}}">
</div>

<div class="form-group col-lg-3">
    <label for="telephonenumber">Telephonenumber:<span style="color: red">*</span></label>
    <input type="text" name="telephonenumber" id="telephonenumber" class="form-control" value="{{old('telephonenumber', $customer->tele)}}" required>
</div>

<div class="form-group col-lg-3">
    <label for="fax_number">Faxnumber:</label>
    <input type="text" name="fax_number" id="fax_number" class="form-control" value="{{old('fax_number', $customer->fax_number)}}">
</div>

<div class="form-group col-lg-4">
    <label for="street">Street:</label>
    <input type="text" name="street" id="street" class="form-control" value="{{old('street', $customer->street)}}">
</div>

<div class="form-group col-lg-2">
    <label for="zipcode">Zipcode:</label>
    <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{old('zipcode',$customer->zip_code) }}">
</div>

<div class="form-group col-lg-2">
    <label for="housenumber">Housenumber:</label>
    <input type="text" name="housenumber" id="housenumber" class="form-control" value="{{old('housenumber',$customer->housenumber)}}">
</div>

<div class="form-group col-lg-4">
    <label for="residence">Residence:</label>
    <input type="text" name="residence" id="residence" class="form-control" value="{{old('residence',$customer->residence )}}">
</div>
@endif

@if(Auth::user()->type == 'finance' || Auth::user()->type == 'admin')
<div class="form-group col-lg-4">
    <label for="banknumber">Banknumber:</label>
    <input type="text" name="banknumber" id="banknumber" class="form-control" value="{{old('banknumber',$customer->banknumber)}}">
</div>

<div class="form-group col-lg-4">
    <label for="vat_code">VAT-code:</label>
    <input type="text" name="vat_code" id="vat_code" class="form-control" value="{{old('vat_code',$customer->vat_code)}}">
</div>

<div class="form-group col-lg-2">
    <label for="limit">Limit:</label>
    <input type="number" name="limit" id="limit" class="form-control" value="{{old( 'limit',$customer->limit )}}" min="0" max="10000">
</div>
    <div class="form-group">
        <label for="bcr">Bcr:</label>
        <select name="bcr" id="bcr">
            @switch(old('bcr', $customer->bcr))
                @case(false)
                <option value="0">No</option>
                <option value="1">Yes</option>
                @break
                @case(true)
                <option value="1">Yes</option>
                <option value="0">No</option>
                @break
                @endswitch
        </select>
    </div>
    <div class="form-group">
        <label for="creditworthy">Creditworthy:</label>
        <select name="creditworthy" id="creditworthy">
            @switch(old('creditworthy', $customer->creditworthy))
                @case(false)
                <option value="0">No</option>
                <option value="1">Yes</option>
                @break
                @case(true)
                <option value="1">Yes</option>
                <option value="0">No</option>
                @break
            @endswitch
        </select>
    </div>
@endif
<div class="form-group pull-right col-lg-2">
    <input type="submit" class="btn btn-primary col-lg-12" value="Edit customer">
</div>
</form>
</div>
@endsection