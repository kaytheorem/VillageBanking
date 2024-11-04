

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
                                <h4 class="fs-18 fw-semibold m-0">My Groups</h4>
                            </div>
                        </div>

                        <!-- start row -->


                        <div class="geex-content__wrapper">
                            <div class="geex-content__section-wrapper">

                                @foreach ($groups as $group)
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <!-- single contact grid area start -->
                                        <a href="{{ route('group.show', $group->id) }}"
                                            class="single-contact-grid-area clickable-card">
                                            <div class="details-area">
                                                <h4 class="name">{{ $group->name }}</h4> <!-- Group name dynamically -->
                                                <span class="designation">Created: {{ $group->created_at->format('m/d/Y') }}</span>
                                                <!-- Display creation date -->
                                                <div class="contact-wrapper">
                                                    <p><strong>Members:</strong> {{ $group->users()->count() }}</p>
                                                    <!-- Display member count -->
                                                </div>
                                            </div>
                                        </a>
                                        <!-- single contact grid area end -->
                                    </div>
                                @endforeach







                                <style>
                                    .single-contact-grid-area {
                                        border: 1px solid #ddd;
                                        /* Optional: Add a border for better visibility */
                                        border-radius: 8px;
                                        /* Optional: Rounded corners */
                                        transition: box-shadow 0.3s ease;
                                        /* Smooth transition for shadow */
                                        background: linear-gradient(135deg, #a8e6cf, #dcedc1);
                                        /* Light green gradient */
                                        padding: 20px;
                                        /* Add some padding for better click area */
                                        text-decoration: none;
                                        /* Remove underline from links */
                                        color: inherit;
                                        /* Inherit text color */
                                        display: block;
                                        /* Ensure it behaves like a block element */
                                    }

                                    .single-contact-grid-area:hover {
                                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                                        /* Shadow effect on hover */
                                    }

                                    .clickable-card {
                                        display: block;
                                        /* Make sure the link behaves like a block element */
                                    }

                                    .clickable-card:hover {
                                        background-color: rgba(255, 255, 255, 0.2);
                                        /* Optional: Change background color on hover */
                                    }
                                </style>
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


