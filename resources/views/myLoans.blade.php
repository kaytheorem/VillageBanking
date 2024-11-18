


<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Village Bank</title>
        @include('auth.inc.head')
        <link href="html/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="html/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
            type="text/css" />
        <link href="html/assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet"
            type="text/css" />
        <link href="html/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
            type="text/css" />
        <link href="html/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet"
            type="text/css" />

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
                                <h4 class="fs-18 fw-semibold m-0">My Loans</h4>
                            </div>
                        </div>

                        <!-- start row -->
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('my.groups') }}'">
                                Get A Loan
                            </button>
                        </div>

                        <br><br>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Count</th>
                                        <th>Group Name</th>
                                        <th>Cycle Name</th>
                                        <th>Loan Amount</th>
                                        <th>Return Amount</th>
                                        <th>Status</th>
                                        <th>Interest</th>
                                        <th>Loan Taken Date</th>
                                        <th>Expected Return Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($loans as $loan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> <!-- Count (1, 2, 3, ...) -->
                                            <td>{{ $loan->cycle->group->name ?? 'N/A' }}</td> <!-- Group Name (from Cycle model) -->
                                            <td>{{ $loan->cycle->name ?? 'N/A' }}</td> <!-- Group Name (from Cycle model) -->
                                            <td>ZMW {{ number_format($loan->amount, 2) }}</td> <!-- Loan Amount -->
                                            <td>ZMW {{ number_format($loan->return_amount, 2) }}</td> <!-- Return Amount -->
                                            <td>{{ ucfirst($loan->status) }}</td> <!-- Status -->
                                            <td>ZMW {{ number_format($loan->interest, 2) }}</td> <!-- Interest -->
                                            <td>{{ $loan->created_at ? $loan->created_at->format('d/m/Y') : 'N/A' }}</td> <!-- Loan Taken Date -->
                                            <td>{{ $loan->return_date ? $loan->return_date->format('d/m/Y') : 'N/A' }}</td> <!-- Expected Return Date -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>





                    </div> <!-- container-fluid -->
                </div> <!-- content -->

                <!-- Footer Start -->
                @include('auth.inc.footer')
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
    @include('auth.inc.js')
    <script src="html/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>

    <!-- dataTables.bootstrap5 -->
    <script src="html/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="html/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

    <!-- buttons.colVis -->
    <script src="html/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="html/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="html/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="html/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>

    <!-- buttons.bootstrap5 -->
    <script src="html/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>

    <!-- dataTables.keyTable -->
    <script src="html/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>

    <!-- dataTable.responsive -->
    <script src="html/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="html/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

    <!-- dataTables.select -->
    <script src="html/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="html/assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>

    <!-- Datatable Demo App Js -->
    <script src="html/assets/js/pages/datatable.init.js"></script>
    </body>

</html>

