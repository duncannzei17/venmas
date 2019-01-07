@extends('layouts.app')

@section('content')
<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <!-- Card start -->
        <div class="card">
                <div class="card-header">Inventory</div>
                    <div class="card-body p-5">
                            <div class="table-responsive">
                                    <table class="table table-hover m-0">
                                        <thead>
                                            <tr>
                                                <th>Item number</th>
                                                <th>Item category</th>
                                                <th>Item brand</th>
                                                <th>Quantity</th>
                                                <th>Buying price</th>
                                                <th>Selling price</th>
                                                <th>Expiry</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>The Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                            
                    </div>
        </div>
    </div>
</div>


@endsection