@extends('backend.layouts.app')
@section('title') {{ 'Orders | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Orders'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-overview v-middle" id="zero_config">
                                <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Order ID</th>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Steave Jobs</td>
                                    <td>#85457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="iMac" width="80">
                                    </td>
                                    <td>Rounded Chair</td>
                                    <td>20</td>
                                    <td>10-7-2017</td>
                                    <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Varun Dhavan</td>
                                    <td>#95457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="iPhone"
                                              width="80"> </td>
                                    <td>Wooden Chair</td>
                                    <td>25</td>
                                    <td>09-7-2017</td>
                                    <td> <span class="label label-warning font-weight-100">Pending</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Ritesh Desh</td>
                                    <td>#68457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="apple_watch"
                                              width="80"> </td>
                                    <td>Gray Chair</td>
                                    <td>12</td>
                                    <td>08-7-2017</td>
                                    <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Hrithik</td>
                                    <td>#45457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="mac_mouse"
                                              width="80"> </td>
                                    <td>Pure Wooden chair</td>
                                    <td>18</td>
                                    <td>02-7-2017</td>
                                    <td> <span class="label label-danger font-weight-100">Failed</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Genelia Jobs</td>
                                    <td>#65257898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="iMac" width="80">
                                    </td>
                                    <td>Globe Rounded Chair</td>
                                    <td>25</td>
                                    <td>08-7-2017</td>
                                    <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Sonu Nigam</td>
                                    <td>#15457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="iPhone"
                                              width="80"> </td>
                                    <td>Gold Wooden Chair</td>
                                    <td>15</td>
                                    <td>06-7-2017</td>
                                    <td> <span class="label label-warning font-weight-100">Pending</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Pawan Trivedi</td>
                                    <td>#56457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="apple_watch"
                                              width="80"> </td>
                                    <td>Still Gray Chair</td>
                                    <td>11</td>
                                    <td>05-7-2017</td>
                                    <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Ranbir kapoor</td>
                                    <td>#35457898</td>
                                    <td> <img src="https://via.placeholder.com/288x355?text=Product" alt="mac_mouse"
                                              width="80"> </td>
                                    <td>Comfirtable chair</td>
                                    <td>28</td>
                                    <td>01-7-2017</td>
                                    <td> <span class="label label-danger font-weight-100">Failed</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10"
                                           data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                           data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
@endpush
