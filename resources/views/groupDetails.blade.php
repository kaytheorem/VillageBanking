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
                                <div class="top-row d-flex justify-content-between align-items-center">
                                    <!-- Cycle Information Section -->
                                    <div class="cycle-info">
                                        @if ($activeCycle)
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center"><strong>Current Cycle
                                                                Details</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Name:</strong></td>
                                                        <td>{{ $activeCycle->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Start Date:</strong></td>
                                                        <td>{{ \Carbon\Carbon::parse($activeCycle->start_date)->format('d M Y') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>End Date:</strong></td>
                                                        <td>{{ \Carbon\Carbon::parse($activeCycle->end_date)->format('d M Y') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Interest Rate:</strong></td>
                                                        <td>{{ number_format($activeCycle->interest_rate, 2) }}%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Balance:</strong></td>
                                                        <td>ZMW {{ number_format($totalBalance, 2) }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        @else
                                            <p><strong>No Active Cycle</strong></p>
                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#activateCycleModal">
                                                Activate New Cycle
                                            </button>
                                        @endif
                                    </div>


                                    <div class="cycle-select d-flex align-items-center mb-2">
                                        <div class="col-md-6 me-2">
                                            <select class="form-select" id="cycleDropdown" required>
                                                <option selected disabled value="">Choose Cycle</option>
                                                @foreach ($cycles as $cycle)
                                                    <option value="{{ $cycle->id }}">{{ $cycle->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Update Data</button>
                                        </div>
                                    </div>

                                    <!-- Note informing the user about changing the cycle -->
                                    <div class="cycle-info-note">
                                        <small class="text-muted">
                                            <strong>Note:</strong> Changing the cycle will update the data throughout the table to reflect the selected cycle's information.
                                        </small>
                                    </div>

                                </div>


                                <!-- Modal for Activating a New Cycle -->
                                <div class="modal fade" id="activateCycleModal" tabindex="-1"
                                    aria-labelledby="activateCycleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="activateCycleModalLabel">Activate New Cycle
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form for activating a new cycle -->
                                                <form action="{{ route('add.cycle') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="cycleName" class="form-label">Cycle Name</label>
                                                        <input type="text" name="name" id="cycleName"
                                                            class="form-control" required>
                                                    </div>
                                                    <input type="hidden" name="group_id" value="{{ $group->id }}">
                                                    <div class="mb-3">
                                                        <label for="startDate" class="form-label">Start Date</label>
                                                        <input type="date" name="start_date" id="startDate"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="endDate" class="form-label">End Date</label>
                                                        <input type="date" name="end_date" id="endDate"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="interestRate" class="form-label">Interest Rate
                                                            (%)</label>
                                                        <input type="number" step="0.01" name="interest_rate"
                                                            id="interestRate" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="balance" class="form-label">Initial
                                                            Balance</label>
                                                        <input type="number" class="form-control" id="balance"
                                                            name="balance" step="0.01" value="0.00" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Activate
                                                        Cycle</button>
                                                </form>
                                            </div>
                                        </div>
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

                                                    @if ($activeCycle)
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="generateInviteLink({{ $group->id }})">
                                                            Invite Member
                                                        </button>
                                                    </div>
                                                    @endif


                                                    <!-- Modal to show invite link -->
                                                    <div class="modal fade" id="modal1" tabindex="-1"
                                                        aria-labelledby="inviteLinkModal" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="inviteLinkModal">
                                                                        Invite Link</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Copy this link and share it with the member you
                                                                        want to invite:</p>
                                                                    <input type="text" id="inviteLink"
                                                                        class="form-control" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br><br>
                                                    <table id="datatable"
                                                        class="table table-bordered dt-responsive table-responsive nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Count</th>
                                                                <th>Name</th>
                                                                <th>Username</th>
                                                                <th>Date Joined</th>
                                                                <th>Email</th>
                                                                <th>Total Saved</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($group->users as $member)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <!-- Display the current iteration count -->
                                                                    <td>{{ $member->name }}</td>
                                                                    <!-- Assuming 'name' is the field for member's name -->
                                                                    <td>{{ $member->Username }}</td>
                                                                    <!-- Assuming 'username' is the field for member's username -->
                                                                    <td>{{ $member->created_at->format('d/m/Y') }}</td>
                                                                    <!-- Date joined formatted -->
                                                                    <td>{{ $member->email }}</td> <!-- Email field -->
                                                                    <td>ZMW
                                                                        {{ number_format($member->total_saved, 2) }}
                                                                    </td>
                                                                    <!-- Total saved, assuming you have this field -->
                                                                </tr>
                                                            @endforeach
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

                                                        @if ($activeCycle)
                                                        <div class="d-flex flex-wrap gap-2">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#depositModal">
                                                                    Deposit Saving
                                                                </button>
                                                            </div>
                                                        @endif


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
                                                                                action="{{ route('savings.store') }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label for="amount"
                                                                                        class="form-label">Amount
                                                                                        (ZMW)</label>
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        id="amount" name="amount"
                                                                                        value="{{ old('amount', $group->constitution->minimum_savings) }}"
                                                                                        min="{{ $group->constitution->minimum_savings }}"
                                                                                        required>
                                                                                    @error('amount')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="network"
                                                                                        class="form-label">Network</label>
                                                                                    <select class="form-select"
                                                                                        id="network" name="network"
                                                                                        required>
                                                                                        <option value="">Select a
                                                                                            network</option>
                                                                                        <option value="MTN"
                                                                                            {{ old('network') == 'MTN' ? 'selected' : '' }}>
                                                                                            MTN</option>
                                                                                        <option value="Airtel"
                                                                                            {{ old('network') == 'Airtel' ? 'selected' : '' }}>
                                                                                            Airtel</option>
                                                                                        <option value="Zamtel"
                                                                                            {{ old('network') == 'Zamtel' ? 'selected' : '' }}>
                                                                                            Zamtel</option>
                                                                                    </select>
                                                                                    @error('network')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="phone_number"
                                                                                        class="form-label">Phone
                                                                                        Number</label>
                                                                                    <input type="tel"
                                                                                        class="form-control"
                                                                                        id="phone_number"
                                                                                        name="phone_number"
                                                                                        value="{{ old('phone_number') }}"
                                                                                        required>
                                                                                    @error('phone_number')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}</div>
                                                                                    @enderror
                                                                                </div>

                                                                                <input type="hidden" name="group_id"
                                                                                    value="{{ $group->id }}">
                                                                                <div class="mb-3">
                                                                                    <label for="password"
                                                                                        class="form-label">Password
                                                                                        Confirmation</label>
                                                                                    <input type="password"
                                                                                        class="form-control"
                                                                                        id="password" name="password"
                                                                                        required>
                                                                                    @error('password')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-light"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        id="submitButton"
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
                                                            @foreach ($savings as $saving)
                                                                <tr>
                                                                    <td>{{ $saving->user->name }}</td>
                                                                    <!-- Assuming there's a user relationship in Savings -->
                                                                    <td>ZMW {{ number_format($saving->amount, 2) }}
                                                                    </td> <!-- Format the amount -->
                                                                    <td>{{ $saving->network }}</td>
                                                                    <!-- Network field -->
                                                                    <td>{{ $saving->cycle->name }}</td>
                                                                    <!-- Access cycle name if needed -->
                                                                    <td>{{ $saving->created_at->format('d/m/Y') }}</td>
                                                                    <!-- Date saved formatted -->
                                                                </tr>
                                                            @endforeach

                                                            @if ($savings->isEmpty())
                                                                <tr>
                                                                    <td colspan="5" class="text-center">No savings
                                                                        recorded for the active cycle.</td>
                                                                </tr>
                                                            @endif
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


                                                        @if ($activeCycle)
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#loanModal">
                                                                    Get A Loan
                                                                </button>
                                                            </div>
                                                        @endif


                                                            <!-- Loan Modal -->
                                                            <div class="modal fade" id="loanModal" tabindex="-1"
                                                                aria-labelledby="loanModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="loanModalLabel">Apply for a Loan
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form id="loanForm" action="/submit-loan"
                                                                                method="POST">
                                                                                @csrf
                                                                                <!-- Loan Amount -->
                                                                                <div class="mb-3">
                                                                                    <label for="amount"
                                                                                        class="form-label">Loan Amount
                                                                                        (ZMW)</label>
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        id="amount" name="amount"
                                                                                        required>
                                                                                </div>

                                                                                <!-- Hidden Group ID Field -->
                                                                                <input type="hidden" id="group_id"
                                                                                    name="group_id"
                                                                                    value="{{ $group->id }}">

                                                                                <!-- Password Confirmation -->
                                                                                <div class="mb-3">
                                                                                    <label for="password"
                                                                                        class="form-label">Password
                                                                                        Confirmation</label>
                                                                                    <input type="password"
                                                                                        class="form-control"
                                                                                        id="password" name="password"
                                                                                        required>
                                                                                </div>

                                                                                <!-- Modal Footer with Buttons -->
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Submit
                                                                                        Loan</button>
                                                                                </div>
                                                                            </form>

                                                                            <!-- Success Message -->
                                                                            <div id="loanSuccessMessage"
                                                                                class="alert alert-success mt-3 d-none"
                                                                                role="alert">
                                                                                <i class="bi bi-check-circle-fill"></i>
                                                                                Your loan application has been submitted
                                                                                successfully.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div> <!-- end card-body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <script>
                                                    
                                                    const interestRate = {{ $activeCycle ? $activeCycle->interest_rate / 100 : 0 }}; // Handle null activeCycle

                                                    function calculateReturn() {
                                                        const amount = parseFloat(document.getElementById("amount").value) || 0;
                                                        const returnAmount = amount + (amount * interestRate);
                                                        document.getElementById("estimated_return").value = returnAmount.toFixed(2);
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
                                                            @foreach ($loans as $loan)
                                                                <tr>
                                                                    <td>{{ $loan->user->name }}</td>
                                                                    <!-- Assuming there's a user relationship in Loan -->
                                                                    <td>ZMW {{ number_format($loan->amount, 2) }}</td>
                                                                    <!-- Format the loan amount -->
                                                                    <td>ZMW
                                                                        {{ number_format($loan->return_amount, 2) }}
                                                                    </td> <!-- Return amount -->
                                                                    <td>{{ $loan->status }}</td>
                                                                    <!-- Status of the loan -->
                                                                    <td>ZMW {{ number_format($loan->interest, 2) }}</td>
                                                                    <!-- Interest on the loan -->

                                                                    <!-- Check if created_at is not null before formatting -->
                                                                    <td>{{ $loan->created_at ? $loan->created_at->format('d/m/Y') : 'N/A' }}
                                                                    </td>

                                                                    <!-- Check if expected_return_date is not null before formatting -->
                                                                    <td>{{ $loan->expected_return_date ? $loan->expected_return_date->format('d/m/Y') : 'N/A' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                            @if ($loans->isEmpty())
                                                                <tr>
                                                                    <td colspan="7" class="text-center">No loans
                                                                        recorded for the active cycle.</td>
                                                                </tr>
                                                            @endif

                                                    </table>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="balance" class="tab-content" style="display:none;">
                                    The Current Balance For This Cycle is ZMW {{ number_format($totalBalance, 2) }}
                                </div>

                                <div id="constitution" class="tab-content" style="display:none;">
                                    <h5>Group Constitution</h5>
                                    <table class="table table-bordered w-100">
                                        <tbody>
                                            <tr>
                                                <td><strong>Cycle Duration</strong></td>
                                                <td>{{ $group->constitution->cycle_duration ?? 'N/A' }} weeks</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Minimum Savings</strong></td>
                                                <td>ZMW
                                                    {{ number_format($group->constitution->minimum_savings ?? 0, 2) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Initial Contribution</strong></td>
                                                <td>ZMW
                                                    {{ number_format($group->constitution->initial_contribution ?? 0, 2) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Loan Term</strong></td>
                                                <td>{{ $group->constitution->loan_term ?? 'N/A' }} weeks</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Meeting Frequency</strong></td>
                                                <td>{{ $group->constitution->meeting_frequency ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Late Payment Fee</strong></td>
                                                <td>{{ number_format($group->constitution->late_payment_fee ?? 0, 2) }}
                                                    %</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Group Code</strong></td>
                                                <td>{{$group->code}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Set up the CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#datatable-savings').DataTable();
            $('#datatable-loans').DataTable();
        });

        function generateInviteLink(groupId) {
            fetch(`/generate-invite-link/${groupId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('inviteLink').value = data.inviteLink;
                    $('#modal1').modal('show');
                });
        }

        $(document).ready(function() {
            $('#depositForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                var $submitButton = $('#submitButton');
                $submitButton.prop('disabled', true); // Disable the button
                $submitButton.html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                );

                // Clear previous error messages
                $('.text-danger').remove();

                $.ajax({
                    url: $(this).attr('action'), // Form action URL
                    method: 'POST',
                    data: $(this).serialize(), // Serialize the form data
                    success: function(response) {
                        if (response.success) {
                            // Hide the form and show the confirmation message
                            $('#depositForm').addClass('d-none'); // Hide the form
                            $('#confirmationMessage').removeClass('d-none').text(response
                                .message); // Show success message
                            $('#depositForm')[0].reset(); // Reset the form fields
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            for (var key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    // Add a complete error message below the respective input
                                    $('#' + key).next('.text-danger').remove();
                                    $('#' + key).after('<div class="text-danger">' + errors[key]
                                        [0] + '</div>');
                                }
                            }
                        } else {
                            alert('An unexpected error occurred. Please try again.');
                        }
                    },
                    complete: function() {
                        // Re-enable the submit button and reset its text
                        $submitButton.prop('disabled', false);
                        $submitButton.html('Submit Deposit');
                    }
                });
            });
        });


        $(document).ready(function() {
            $('#loanForm').on('submit', function(e) {
                e.preventDefault();

                var $submitButton = $('#loanForm button[type="submit"]');
                $submitButton.prop('disabled', true);
                $submitButton.html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                );

                // Clear any previous error/success messages
                $('#loanSuccessMessage').addClass('d-none');
                $('#loanErrorMessage').remove();
                $('.text-danger').remove(); // Clear any previous field-specific error messages

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#loanForm')[0].reset(); // Clear form fields
                            $('#loanSuccessMessage').removeClass(
                                'd-none'); // Show success message
                        }
                    },
                    error: function(xhr) {
                        $('#loanForm')[0].reset(); // Clear the form on error
                        console.error("Error response:", xhr
                            .responseJSON); // Log full error response

                        // Display field-specific errors
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;
                            for (var field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    $('#' + field).after('<div class="text-danger">' + errors[
                                        field][0] + '</div>');
                                }
                            }
                        } else {
                            // General fallback error message
                            let generalErrorMessage =
                                'An unexpected error occurred. Please try again.';
                            $('<div id="loanErrorMessage" class="alert alert-danger mt-3" role="alert">' +
                                generalErrorMessage + '</div>').insertBefore('#loanForm');
                        }
                    },
                    complete: function() {
                        $submitButton.prop('disabled', false);
                        $submitButton.html('Submit Loan');
                    }
                });
            });
        });
    </script>


</body>

</html>
