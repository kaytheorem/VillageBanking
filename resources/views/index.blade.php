<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Village Bank</title>
    @include('auth.inc.head')

    <style>
        .clickable-card {
            text-decoration: none;
            /* Remove underline from link */
            transition: transform 0.2s;
            /* Smooth transition for hover effect */
        }

        .clickable-card:hover {
            transform: scale(1.02);
            /* Slightly scale the card on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add a shadow effect */
        }
    </style>
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
                            <h4 class="fs-18 fw-semibold m-0">My Groups</h4>
                        </div>
                    </div>

                    <!-- start row -->


                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="row g-3">

                                @foreach ($groups as $group)
                                    <div class="col-md-6 col-xl-3">
                                        <a href="{{ route('group.show', $group->id) }}" class="card clickable-card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">{{ $group->name }}</div>
                                                    <!-- Group name dynamically -->
                                                </div>
                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">
                                                        {{ $group->users()->count() }}</div>
                                                    <div class="me-auto">
                                                        <span class="text-muted">Members</span>
                                                    </div>
                                                </div>
                                                <div class="text-muted">
                                                    <span>Created: {{ $group->created_at->format('m/d/Y') }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach


                            </div>
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

</body>

</html>
