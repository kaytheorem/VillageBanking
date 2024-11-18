


<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Village Bank</title>
        @include('auth.inc.head')

    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default">

        <!-- Begin page -->
        <div id="app-layout">


            <!-- Topbar Start -->
            @include('auth.inc.topbar')
            <!-- end Topbar -->

            <!-- Left Sidebar Start -->
            <div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    @include('auth.inc.sidebar')
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-xxl">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                            </div>
                        </div>

                        <!-- start row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="row g-3">
                                    <!-- My Groups -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">My Groups</div>
                                                </div>
                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">{{ $totalGroups }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total Loans Amount -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">Total Loans Amount</div>
                                                </div>
                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">ZMW {{ number_format($totalLoanAmount, 2) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total Savings Amount -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">Total Savings Amount</div>
                                                </div>
                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">ZMW {{ number_format($totalSavingsAmount, 2) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total Profits -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">Total Profits</div>
                                                </div>
                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">ZMW {{ number_format($totalProfits, 2) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end totals section -->
                        </div>

                         <!-- end row -->




                    </div> <!-- container-fluid -->
                </div> <!-- content -->

                <!-- Footer Start -->
                @include('auth.inc.footer')
                <!-- end Footer -->

            </div>

        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
    @include('auth.inc.js')

    </body>

</html>

