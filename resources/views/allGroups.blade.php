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
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-footer {
            text-align: center;
            background-color: #f8f9fa;
        }

        .btn-primary {
            text-decoration: none;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                            <h4 class="fs-18 fw-semibold m-0">All Groups</h4>
                        </div>
                    </div>

                    <!-- start row -->


                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="row g-3">

                                @foreach ($groups as $group)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">{{ $group->name }}</div>
                                                    <!-- Group name dynamically -->
                                                </div>
                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">
                                                        {{ $group->users()->count() }}
                                                    </div>
                                                    <div class="me-auto">
                                                        <span class="text-muted">Members</span>
                                                    </div>
                                                </div>
                                                <div class="text-muted">
                                                    <span>Created: {{ $group->created_at->format('m/d/Y') }}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <!-- Only this button is clickable -->
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinGroupModal" 
                                                    data-group-id="{{ $group->id }}" 
                                                    data-group-name="{{ $group->name }}">
                                                    Join Group
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        <!-- Join Group Modal -->
                        <div class="modal fade" id="joinGroupModal" tabindex="-1" aria-labelledby="joinGroupModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="joinGroupModalLabel">Join Group</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="joinGroupForm" method="POST" action="{{ route('groups.join') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" id="group_id" name="group_id">
                                            <p id="group_name" class="mb-3"></p>
                                            <div class="mb-3">
                                                <label for="group_code" class="form-label">Enter Group Code:</label>
                                                <input type="text" class="form-control" id="group_code" name="group_code" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Join Group</button>
                                        </div>
                                    </form>
                                </div>
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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const joinGroupModal = document.getElementById('joinGroupModal');
                const groupIdInput = document.getElementById('group_id');
                const groupNameElement = document.getElementById('group_name');

                joinGroupModal.addEventListener('show.bs.modal', function (event) {
                    const button = event.relatedTarget; // Button that triggered the modal
                    const groupId = button.getAttribute('data-group-id');
                    const groupName = button.getAttribute('data-group-name');

                    groupIdInput.value = groupId; // Set the hidden input for the group ID
                    groupNameElement.textContent = `Group Name: ${groupName}`; // Set the group name dynamically
                });
            });

            document.addEventListener('DOMContentLoaded', function () {
                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: "{{ session('success') }}",
                });
                @elseif (session('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: "{{ session('error') }}",
                });
                @elseif (session('info'))
                    Swal.fire({
                        icon: 'info',
                        title: 'Info',
                        text: "{{ session('info') }}",
                    });
                @endif
            });
        </script>


</body>

</html>
