
    @extends('layout.master')
    @section('location')
        Add project
    @endsection

    @section('content')

    <div class="container well">
        <form action="" class="" method="post">
            {{ csrf_field() }}
            <section class="col-md-4">
                <div class="form-group">
                    <label for="">*Project name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">*Description</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">*Start date</label>
                    <input type="date"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">*Deadline</label>
                    <input type="date" class="form-control" required>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">*Maintain Contract</label>
                </div>
            </section>
            <section class="col-md-4">
                <div class="form-group">
                    <label for="">*Operating system</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">*Applications</label>
                    <textarea class="form-control noresize" name="" id="" rows="3" required>CSV (app,app,...)</textarea>
                </div>
                <div class="form-group">
                    <label for="">*Hardware</label>
                    <textarea class="form-control noresize" name="" id="" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">*Appointments</label>
                    <textarea class="form-control noresize" name="" id="" rows="3" required></textarea>
                </div>
            </section>
            <section class="col-md-4">
                <div class="form-group">
                    <label for="">*Total project price</label>
                    <div class="input-group">
                        <span class="input-group-addon">€</span>
                        <input type="text" class="form-control" aria-label="amount" required>
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">*Amount terms</label>
                    <input type="number"class="form-control" min="1" value="1" required>
                </div>
                <div class="form-group">
                    <label for="">*Kind of terms</label>
                    <select name="" id="" class="form-control" required>
                        <option value="1">Monthly</option>
                        <option value="2">2 Months</option>
                        <option value="3">Quarters</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">*First pay day</label>
                    <input type="date" class="form-control" name="" id="" required>
                </div>
                <input type="submit" class="pull-right" value="Add project">
            </section>
        </form>
    </div>
    @endsection