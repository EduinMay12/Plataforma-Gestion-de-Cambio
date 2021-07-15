@section('menu')
<div class="container-fluid">
        <!-- Body y Cards-->
        <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="total-revenue-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                                <p class="text-muted mb-0">Total Revenue</p>
                            </div>
                            <p class="text-muted mt-3 mb-0"><span class="text-success me-1">2.65%</span> since last week
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="orders-chart"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1">$<span data-plugin="counterup">5,643</span></h4>
                                <p class="text-muted mb-0">Orders</p>
                            </div>
                            <p class="text-muted mt-3 mb-0"><span class="text-danger me-1">0.82%</span> since last week
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->
        </div>
    </div> <!-- content -->
</div>
@stop
