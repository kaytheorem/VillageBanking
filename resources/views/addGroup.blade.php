






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
            <div class="topbar-custom">
                <div class="container-xxl">
                    <div class="d-flex justify-content-between">
                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                            <li>
                                <button class="button-toggle-menu nav-link ps-0">
                                    <i data-feather="menu" class="noti-icon"></i>
                                </button>
                            </li>

                        </ul>

                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                            <li class="d-none d-sm-flex">
                                <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                    <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                                </button>
                            </li>



                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="html/assets/images/users/user-11.jpg" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ms-1">
                                        Christian <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a class='dropdown-item notify-item' href='pages-profile.html'>
                                        <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a class='dropdown-item notify-item' href='auth-lock-screen.html'>
                                        <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a class='dropdown-item notify-item' href='auth-logout.html'>
                                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
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
                                <h4 class="fs-18 fw-semibold m-0">Add New Group</h4>
                            </div>
                        </div>

                        <!-- start row -->


                        <div class="geex-content">


                            <div class="geex-content__wrapper">
                                <div class="geex-content__section-wrapper">
                                    <div class="geex-content__summary">
                                        <form id="groupForm" action="{{ route('group.store') }}" method="POST">
                                            @csrf

                                            <!-- Step 1: Group Details -->
                                            <div class="form-step active" id="step-1">
                                                <h2>Group Details</h2>
                                                </br> </br>
                                                <div class="geex-content__form__single__box">
                                                    <div class="input-wrapper input-icon">
                                                        <label for="group_name" class="input-label">Group Name</label>
                                                        <input type="text" id="group_name" name="group_name"
                                                            placeholder="Enter group name" class="form-control" required>
                                                        <i class="uil uil-users-alt"></i>
                                                    </div>
                                                </div>

                                                <!-- Navigation Button to Next Step -->
                                                <button type="button" onclick="nextStep()"
                                                    class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                            </div>

                                            <!-- Step 2: Constitution Details -->
                                            <div class="form-step" id="step-2">
                                                <h2>Group Constitution</h2>
                                                </br> </br>

                                                <div class="geex-content__form__single__box">
                                                    <div class="input-wrapper input-icon">
                                                        <label for="cycle_duration" class="input-label">Cycle Duration(Weeks)</label>
                                                        <input type="number" id="cycle_duration" name="cycle_duration"
                                                            placeholder="Enter cycle duration" class="form-control" required>
                                                        <i class="uil uil-calendar-alt"></i>
                                                    </div>

                                                    <div class="input-wrapper input-icon">
                                                        <label for="minimum_savings" class="input-label">Minimum Savings</label>
                                                        <input type="number" id="minimum_savings" name="minimum_savings"
                                                            placeholder="Enter minimum savings" class="form-control" step="0.01"
                                                            required>
                                                        <i class="uil uil-dollar-alt"></i>
                                                    </div>

                                                    <div class="input-wrapper input-icon">
                                                        <label for="initial_contribution" class="input-label">Initial
                                                            Contribution</label>
                                                        <input type="number" id="initial_contribution" name="initial_contribution"
                                                            placeholder="Enter initial contribution" class="form-control"
                                                            step="0.01" required>
                                                        <i class="uil uil-moneybag"></i>
                                                    </div>

                                                    <div class="input-wrapper input-icon">
                                                        <label for="loan_term" class="input-label">Loan Term(Weeks)</label>
                                                        <input type="number" id="loan_term" name="loan_term"
                                                            placeholder="Enter loan term" class="form-control" required>
                                                        <i class="uil uil-schedule"></i>
                                                    </div>

                                                    <div class="input-wrapper input-icon">
                                                        <label for="meeting_frequency" class="input-label">Meeting Frequency</label>
                                                        <select id="meeting_frequency" name="meeting_frequency" class="form-control"
                                                            required>
                                                            <option value="" disabled selected>Select meeting frequency</option>
                                                            <option value="weekly">Weekly</option>
                                                            <option value="monthly">Monthly</option>
                                                            <option value="2 months">2 Months</option>
                                                        </select>
                                                        <i class="uil uil-calendar-alt"></i>
                                                    </div>



                                                    <div class="input-wrapper input-icon">
                                                        <label for="late_payment_fee" class="input-label">Late Payment
                                                            Percentage</label>
                                                        <input type="number" id="late_payment_fee" name="late_payment_fee"
                                                            placeholder="Enter late payment percentage" class="form-control"
                                                            step="0.01" required>
                                                        <i class="uil uil-dollar-alt"></i>
                                                    </div>
                                                </div>

                                                <!-- Navigation Buttons for Previous and Submit -->
                                                <button type="button" onclick="prevStep()"
                                                    class="btn btn-secondary">Previous</button>
                                                <button type="submit" class="btn btn-success">Create Group</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript for Tab Navigation -->
                            <script>
                                function nextStep() {
                                    document.getElementById("step-1").classList.remove("active");
                                    document.getElementById("step-2").classList.add("active");
                                }

                                function prevStep() {
                                    document.getElementById("step-2").classList.remove("active");
                                    document.getElementById("step-1").classList.add("active");
                                }
                            </script>

                            <style>
                                /* Hide inactive form steps */
                                .form-step {
                                    display: none;
                                }

                                .form-step.active {
                                    display: block;
                                }

                                /* Basic styling for button positioning */
                                .btn {
                                    margin-top: 15px;
                                }

                                .btn-primary,
                                .btn-secondary,
                                .btn-success {
                                    padding: 10px 15px 15px 15px;
                                    border: none;
                                    cursor: pointer;
                                    margin: 15px;
                                }

                                .btn-primary {
                                    background-color: #007bff;
                                    color: white;
                                }

                                .btn-secondary {
                                    background-color: #6c757d;
                                    color: white;
                                }

                                .btn-success {
                                    background-color: #28a745;
                                    color: white;
                                }

                                /* General styling for input-wrapper */
                                .input-wrapper {
                                    position: relative;
                                    margin-bottom: 15px;
                                }

                                /* Style for the select element to match the form-control */
                                .form-control {
                                    width: 100%;
                                    padding: 10px 40px 10px 15px;
                                    /* Padding for icon positioning */
                                    font-size: 16px;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                    appearance: none;
                                    /* Remove default dropdown arrow */
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                }

                                /* Dropdown arrow styling */
                                .form-control select {
                                    background-color: transparent;
                                }

                                /* Icon positioning */
                                .input-icon i {
                                    position: absolute;
                                    right: 15px;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    color: #888;
                                    pointer-events: none;
                                    /* Make icon unclickable */
                                }

                                /* Adjust icon for select elements */
                                .input-wrapper.select-wrapper {
                                    display: flex;
                                    align-items: center;
                                }

                                /* Custom arrow for select dropdowns */
                                .select-wrapper::after {
                                    content: '\25BC';
                                    /* Unicode for downward arrow */
                                    font-size: 12px;
                                    position: absolute;
                                    right: 15px;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    color: #888;
                                    pointer-events: none;
                                }
                            </style>

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


