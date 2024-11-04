<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <base href="/public">

    <meta charset="utf-8" />
    <title>Dashboard | Village Bank</title>
    @include('auth.inc.head')

    <!-- Datatables css -->

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
                            <h4 class="fs-18 fw-semibold m-0">Group Name</h4>
                        </div>
                    </div>

                    <!-- start row -->

                    <div class="geex-content">


                        <div class="geex-content__wrapper">
                            <div class="geex-content__section-wrapper">
                                <!-- First Row -->
                                <div class="top-row">
                                    <div class="cycle-select">
                                        <label for="cycleDropdown">Select Cycle:</label>
                                        <select id="cycleDropdown">
                                            <option value="cycle1">Cycle 1</option>
                                            <option value="cycle2">Cycle 2</option>
                                            <option value="cycle3">Cycle 3</option>
                                        </select>
                                        <button class="geex-btn geex-btn--transparent"><i class="uil-plus"></i> Update
                                            Data</button>
                                    </div>
                                    <div class="cycle-info">
                                        <p><strong>Current Cycle:</strong></p>
                                        <p>Name: Cycle 1</p>
                                        <p>Start: 1 Jan 2024</p>
                                        <p>End: 31 Dec 2024</p>
                                        <p><strong>Next Meeting:</strong> 3 days</p>
                                    </div>
                                </div>

                                <!-- Tabs Section -->
                                <div class="tabs-container">
                                    <button class="tab-button" onclick="showTab('members')">Members</button>
                                    <button class="tab-button" onclick="showTab('savings')">Savings</button>
                                    <button class="tab-button" onclick="showTab('loans')">Loans</button>
                                    <button class="tab-button" onclick="showTab('balance')">Balance</button>
                                    <button class="tab-button" onclick="showTab('constitution')">Constitution</button>
                                </div>

                                <!-- Tab Content -->
                                <div id="members" class="tab-content">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">

                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Group Members</h5>
                                                </div><!-- end card header -->


                                                <div class="card-body">
                                                    <table id="datatable"
                                                        class="table table-bordered dt-responsive table-responsive nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Username</th>
                                                                <th>Date Joined</th>
                                                                <th>email</th>
                                                                <th>Total Saved</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Lwanga Martine</td>
                                                                <td>Shield01</td>
                                                                <td>17/06/2001</td>
                                                                <td>mpangehlwanga99@gmail.com</td>
                                                                <td>ZMW 110,000</td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div id="savings" class="tab-content" style="display:none;">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">

                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Group Savings Records</h5>
                                                </div><!-- end card header -->

                                                <div class="col-xl-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#depositModal">
                                                                    Deposit Saving
                                                                </button>
                                                            </div>

                                                            <!-- Deposit Saving Modal -->
                                                            <div class="modal fade" id="depositModal"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="depositModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="depositModalLabel">Deposit Saving
                                                                            </h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body" id="modalBody">
                                                                            <!-- Deposit form -->
                                                                            <form id="depositForm"
                                                                                onsubmit="return confirmDeposit()">
                                                                                <div class="mb-3">
                                                                                    <label for="amount"
                                                                                        class="form-label">Amount
                                                                                        (ZMW)</label>
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        id="amount" name="amount"
                                                                                        required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="network"
                                                                                        class="form-label">Network</label>
                                                                                    <select class="form-select"
                                                                                        id="network" name="network"
                                                                                        required>
                                                                                        <option value="">Select a
                                                                                            network</option>
                                                                                        <option value="MTN">MTN
                                                                                        </option>
                                                                                        <option value="Airtel">Airtel
                                                                                        </option>
                                                                                        <option value="Zamtel">Zamtel
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="phone_number"
                                                                                        class="form-label">Phone
                                                                                        Number</label>
                                                                                    <input type="tel"
                                                                                        class="form-control"
                                                                                        id="phone_number"
                                                                                        name="phone_number" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="password"
                                                                                        class="form-label">Password
                                                                                        Confirmation</label>
                                                                                    <input type="password"
                                                                                        class="form-control"
                                                                                        id="password" name="password"
                                                                                        required>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-light"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Submit
                                                                                        Deposit</button>
                                                                                </div>
                                                                            </form>

                                                                            <!-- Confirmation Message -->
                                                                            <div id="confirmationMessage"
                                                                                class="alert alert-success mt-3 d-none"
                                                                                role="alert">
                                                                                <i class="bi bi-check-circle-fill"></i>
                                                                                Your deposit is in progress. Please
                                                                                enter your PIN.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end card-body -->
                                                    </div> <!-- end card -->
                                                </div>

                                                <script>
                                                    function confirmDeposit() {
                                                        // Prevent form submission
                                                        event.preventDefault();

                                                        // Hide the form and show the confirmation message
                                                        const modalBody = document.getElementById('modalBody');
                                                        const depositForm = document.getElementById('depositForm');
                                                        const confirmationMessage = document.getElementById('confirmationMessage');

                                                        depositForm.classList.add('d-none'); // Hide the form
                                                        confirmationMessage.classList.remove('d-none'); // Show the confirmation message

                                                        return false; // Prevent actual form submission
                                                    }
                                                </script>

                                                <div class="card-body">
                                                    <table id="datatable-savings"
                                                        class="table table-bordered dt-responsive table-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Amount</th>
                                                                <th>Network</th>
                                                                <th>Cycle</th>
                                                                <th>Date saved</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Lwanga Martine</td>
                                                                <td>ZMW 500</td>
                                                                <td>MTN momo</td>
                                                                <td>April</td>
                                                                <td>03/*11/2024</td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div id="loans" class="tab-content" style="display:none;">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">

                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Group Loans Records</h5>
                                                </div><!-- end card header -->


                                                <div class="col-xl-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal" data-bs-target="#modal1">
                                                                    Get A Loan
                                                                </button>
                                                            </div>

                                                            <!-- Modal 1 -->
                                                            <div class="modal fade" id="modal1"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="modal1Label"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="modal1Label">Apply for a Loan</h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- Loan application form -->
                                                                            <form action="/submit-loan" method="POST"
                                                                                onsubmit="return confirmSubmission()">
                                                                                <!-- CSRF Token for security (in Laravel) -->
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label for="amount"
                                                                                        class="form-label">Loan Amount
                                                                                        (ZMW)</label>
                                                                                    <input type="number"
                                                                                        step="0.01"
                                                                                        class="form-control"
                                                                                        id="amount" name="amount"
                                                                                        required
                                                                                        oninput="calculateReturn()">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Estimated
                                                                                        Return Amount (ZMW)</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="estimated_return" readonly>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="password"
                                                                                        class="form-label">Password
                                                                                        Confirmation</label>
                                                                                    <input type="password"
                                                                                        class="form-control"
                                                                                        id="password" name="password"
                                                                                        required>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-light"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Submit
                                                                                        Loan</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end card-body -->
                                                    </div> <!-- end card -->
                                                </div>

                                                <script>
                                                    function calculateReturn() {
                                                        const amount = parseFloat(document.getElementById('amount').value);
                                                        const interestRate = 5; // Fixed 5% interest

                                                        if (!isNaN(amount)) {
                                                            const estimatedReturn = amount + (amount * interestRate / 100);
                                                            document.getElementById('estimated_return').value = estimatedReturn.toFixed(2);
                                                        } else {
                                                            document.getElementById('estimated_return').value = '';
                                                        }
                                                    }
                                                </script>


                                                <div class="card-body">
                                                    <table id="datatable-loans"
                                                        class="table table-bordered dt-responsive table-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Loan Amount</th>
                                                                <th>Return Amount</th>
                                                                <th>Status</th>
                                                                <th>Interest</th>
                                                                <th>Loan Taken Date</th>
                                                                <th>Expected Return Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Lwanga Martine</td>
                                                                <td>ZMW 500</td>
                                                                <td>600</td>
                                                                <td>Active</td>
                                                                <td>100</td>
                                                                <td>03/*11/2024</td>
                                                                <td>03/*11/2024</td>

                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="balance" class="tab-content" style="display:none;">The Current Balance For
                                    This Cycle is ZMW80000
                                </div>
                                <div id="constitution" class="tab-content" style="display:none;">Constitution content
                                    goes here.
                                </div>
                            </div>
                        </div>

                        <style>
                            .top-row {
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                margin-bottom: 20px;
                            }

                            .cycle-select {
                                display: flex;
                                align-items: center;
                            }

                            .cycle-select label,
                            .cycle-select select,
                            .cycle-select button {
                                margin-right: 10px;
                            }

                            .cycle-info {
                                text-align: right;
                            }

                            .tabs-container {
                                display: flex;
                                gap: 10px;
                                margin-bottom: 20px;
                            }

                            .tab-button {
                                padding: 10px 20px;
                                border: 1px solid #ccc;
                                background-color: #f1f1f1;
                                cursor: pointer;
                            }

                            .tab-button:hover {
                                background-color: #45a049;
                            }

                            .tab-content {
                                padding: 20px;
                                border: 1px solid #ccc;
                                background-color: #fff;
                            }

                            .cycle-select {
                                display: flex;
                                align-items: center;
                                /* Center items vertically */
                                margin: 20px 0;
                                /* Add some margin */
                            }

                            .cycle-select label {
                                margin-right: 10px;
                                /* Space between label and dropdown */
                                font-weight: bold;
                                /* Make label bold */
                            }

                            .styled-dropdown {
                                padding: 10px;
                                /* Padding inside the dropdown */
                                border: 1px solid #ddd;
                                /* Border color */
                                border-radius: 5px;
                                /* Rounded corners */
                                background-color: #f9f9f9;
                                /* Light background color */
                                appearance: none;
                                /* Remove default styling */
                                -webkit-appearance: none;
                                /* Remove default styling for Safari */
                                -moz-appearance: none;
                                /* Remove default styling for Firefox */
                                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABfklEQVR42mJkAETkPwGF3vKpD0bUt9vP0QEA1McwFxGmAbxKg+gOSpFQmQjDJ8HEGSMghxYQAAcXmy60S4nY4vSY8u8AAAAAElFTkSuQmCC');
                                /* Custom dropdown arrow */
                                background-repeat: no-repeat;
                                /* Prevent image from repeating */
                                background-position: right 10px center;
                                /* Position the arrow */
                            }

                            .styled-dropdown:focus {
                                outline: none;
                                /* Remove default outline */
                                border-color: #4CAF50;
                                /* Change border color on focus */
                            }

                            .geex-btn {
                                margin-left: 10px;
                                /* Space between dropdown and button */
                                padding: 10px 15px;
                                /* Padding for button */
                                border-radius: 5px;
                                /* Rounded corners for button */
                                cursor: pointer;
                                /* Change cursor to pointer on hover */
                            }

                            .geex-btn:hover {
                                background-color: #45a049;
                                /* Darker green on hover */
                            }
                        </style>

                        <script>
                            function showTab(tabId) {
                                const tabs = document.querySelectorAll('.tab-content');
                                tabs.forEach(tab => {
                                    tab.style.display = tab.id === tabId ? 'block' : 'none';
                                });
                            }
                        </script>

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
    <!-- Datatables js -->
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

    <script>
        $(document).ready(function() {
            $('#datatable-savings').DataTable();
            $('#datatable-loans').DataTable();
        });
    </script>


</body>

</html>
