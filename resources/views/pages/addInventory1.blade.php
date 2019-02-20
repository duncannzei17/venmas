@extends('layouts.app')

@section('content')

    <!-- Row start -->
    <div class="card">
        <div class="card-header">Add Inventory</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Item number</label>
                    <input type="text" class="form-control" placeholder="Name address">
                </div>
                <div class="form-group">
                    <label>Item category</label>
                    <input type="text" class="form-control" placeholder="Name address">
                </div>
                <div class="form-group">
                    <label>Item brand</label>
                    <input type="text" class="form-control" placeholder="Name address">
                </div>
                <div class="form-group">
                    <label>Units</label>
                    <select class="form-control" name="school">
                        <option hidden>Select metrics</option>
                            <option value="quantity">Quantity(units)</option>
                            <option value="mass">Mass(Kilograms)</option>
                            <option value="volume">Volume(Litres)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Unit values</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="units" placeholder="Eg. 0.5kg , 2l">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" id="add-unit-button">Add</button>
                        </div>
                        <div class="units-list col-sm-6">

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

@endsection
