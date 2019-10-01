@extends('backend.layouts.app')
@section('title') {{ 'Cart | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Cart'])
@endsection

@push('before-css')
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
            <div class="col-md-9 col-lg-9">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5 class="m-b-0 text-white">Your Cart (4 items)</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product info</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th style="text-align:center">Total</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td width="150"><img src="https://via.placeholder.com/288x355?text=Product" alt="iMac"
                                                         width="80"></td>
                                    <td width="550">
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration
                                            in some form, by injected humour, or randomised words which
                                            don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td width="70">
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td width="150" align="center" class="font-500">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse"
                                                          title="" data-toggle="tooltip" data-original-title="Delete"><i
                                                    class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/288x355?text=Product" alt="iMac" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration
                                            in some form, by injected humour, or randomised words which
                                            don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td class="font-500" align="center">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse"
                                                          title="" data-toggle="tooltip" data-original-title="Delete"><i
                                                    class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/288x355?text=Product" alt="iMac" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration
                                            in some form, by injected humour, or randomised words which
                                            don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td class="font-500" align="center">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse"
                                                          title="" data-toggle="tooltip" data-original-title="Delete"><i
                                                    class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/288x355?text=Product" alt="iMac" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration
                                            in some form, by injected humour, or randomised words which
                                            don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td class="font-500" align="center">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse"
                                                          title="" data-toggle="tooltip" data-original-title="Delete"><i
                                                    class="ti-trash text-dark"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="d-flex no-block align-items-center">
                                <button class="btn btn-dark btn-outline"><i class="fas fa-arrow-left"></i>
                                    Continue shopping</button>
                                <div class="ml-auto">
                                    <button class="btn btn-danger"><i class="fa fa fa-shopping-cart"></i>
                                        Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CART SUMMARY</h5>
                        <hr>
                        <small>Total Price</small>
                        <h2>$612</h2>
                        <hr>
                        <button class="btn btn-success">Checkout</button>
                        <button class="btn btn-secondary btn-outline">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">For Any Support</h5>
                        <hr>
                        <h4><i class="ti-mobile"></i> 9998979695 (Toll Free)</h4> <small>Please contact with us
                            if you have any questions. We are avalible 24h.</small>
                    </div>
                </div>
            </div>
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
    <script src="{{asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/libs/magnific-popup/meg.init.js')}}"></script>
@endpush
