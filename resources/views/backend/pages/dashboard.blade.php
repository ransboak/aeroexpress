@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>AAERO XPRESS Dashboard</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{asset('backend/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">Henry Price</h5>
                            <p class="text-muted mb-0 text-truncate">Admin</p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Orders</p>
                                    <h4 class="mb-0">1,235</h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Revenue</p>
                                    <h4 class="mb-0">$35, 723</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Average Price</p>
                                    <h4 class="mb-0">$16.2</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        {{-- <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Activity</h4>
                    <ul class="verti-timeline list-unstyled">
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="mr-3">
                                    <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Responded to need “Volunteer Activities
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="mr-3">
                                    <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Everyone realizes why a new common language would be desirable... <a href="index.html#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list active">
                            <div class="event-timeline-dot">
                                <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                            </div>
                            <div class="media">
                                <div class="mr-3">
                                    <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Joined the group “Boardsmanship Forum”
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="mr-3">
                                    <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Responded to need “In-Kind Opportunity”
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center mt-4"><a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ml-1"></i></a></div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Billing Name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Payment Method</th>
                                    <th>View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a> </td>
                                    <td>Neal Matthews</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2541</a> </td>
                                    <td>Jamal Burnett</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $380
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa mr-1"></i> Visa
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2542</a> </td>
                                    <td>Juan Mitchell</td>
                                    <td>
                                        06 Oct, 2019
                                    </td>
                                    <td>
                                        $384
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2543</a> </td>
                                    <td>Barry Dick</td>
                                    <td>
                                        05 Oct, 2019
                                    </td>
                                    <td>
                                        $412
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2544</a> </td>
                                    <td>Ronald Taylor</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $404
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa mr-1"></i> Visa
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2545</a> </td>
                                    <td>Jacob Hunter</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $392
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- end row -->
</div>
<!-- Modal -->
<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="{{asset('backend/assets/images/product/img-7.png')}}" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                    </div>
                                </td>
                                <td>$ 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="{{asset('backend/assets/images/product/img-4.png')}}" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                    </div>
                                </td>
                                <td>$ 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
@endsection