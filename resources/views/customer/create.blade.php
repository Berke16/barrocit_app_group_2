
    @extends('layout.master')
    @section('location')
        Add customer
        @endsection
    @section('content')
        <!-- This is a form that an employee needs to fill to create a customer. This "new" customer can't get a project immediately, a finance employee needs to do a BCR check first to see if the customer is worth to get a project. -->
        <div class="container well">
            <form action="" class="" method="post">
                {{ csrf_field() }}
                <div class="form-group col-lg-4">
                    <label for="comapnyName">*Company name:</label>
                    <input type="text" class="form-control" id="comapnyName" name="comapnyName" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="cpName">*Firstname:</label>
                    <input type="text" class="form-control" id="cpName" name="cpName"required>
                </div>
                <div class="form-group col-lg-2">
                    <label for="cpInsertion">*Insertion:</label>
                    <input type="text" class="form-control" id="cpInsertion" name="cpInsertion">
                </div>
                <div class="form-group col-lg-3">
                    <label for="cpLastname">*Lastname:</label>
                    <input type="text" class="form-control" id="cpLastname" name="cpLastname" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpEmail">*E-mail:</label>
                    <input type="text" name="cpEmail" id="cpEmail" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpTelephonenumber">*Telephonenumber:</label>
                    <input type="text" name="cpTelephonenumber" id="cpTelephonenumber" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpFaxNumber">Faxnumber:</label>
                    <input type="text" name="cpFaxNumber" id="cpFaxNumber" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpStreet">*Street:</label>
                    <input type="text" name="cpStreet" id="cpStreet" class="form-control" required>
                </div>
                <div class="form-group col-lg-2">
                    <label for="cpZipcode">*Zipcode:</label>
                    <input type="text" name="cpZipcode" id="cpZipcode" class="form-control" required>
                </div>
                <div class="form-group col-lg-2">
                    <label for=cpHousenumber>*Housenumber:</label>
                    <input type="text" name="cpHousenumber" id="cpHousenumber" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpResidence">*Residence:</label>
                    <input type="text" name="cpResidence" id="cpResidence" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpStreet2">Street 2:</label>
                    <input type="text" name="cpStreet2" id="cpStreet2" class="form-control">
                </div>
                <div class="form-group col-lg-2">
                    <label for="cpZipcode2">Zipcode 2:</label>
                    <input type="text" name="cpZipcode2" id="cpZipcode2" class="form-control">
                </div>
                <div class="form-group col-lg-2">
                    <label for="">Housenumber 2:</label>
                    <input type="text" name="cpHousenumber2" id="cpHousenumber2" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpResidence2">Residence 2:</label>
                    <input type="text" name="cpResidence2" id="cpResidence2" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpBanknumber">*Banknumber:</label>
                    <input type="text" name="cpBanknumber" id="cpBanknumber" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="cpVATCode">*VAT-code:</label>
                    <input type="text" name="cpVATCode" id="cpVATCode" class="form-control" required>
                </div>
                <div class="form-group pull-right col-lg-2">
                    <input type="submit" class="btn btn-primary col-lg-12" value="Add customer">
                </div>
            </form>
        </div>
    @endsection