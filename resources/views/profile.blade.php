<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <base href="/public">

    <meta charset="utf-8" />
    <title>Dashboard | My profile</title>
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
                            <h4 class="fs-18 fw-semibold m-0">My Profile</h4>
                        </div>
                    </div>

                    <!-- start row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="align-items-center">
                                        <div class="d-flex align-items-center">
                                            <!-- Display user's profile picture dynamically -->
                                            <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('html/assets/images/users/user-16.webp') }}"
                                                 class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">

                                            <div class="overflow-hidden ms-4">
                                                <h4 class="m-0 text-dark fs-20">{{ $user->name }}</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-2 active" id="setting_tab" data-bs-toggle="tab" href="#profile_setting" role="tab">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-school"></i></span>
                                                <span class="d-none d-sm-block">Setting</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content text-muted bg-white">
                                        <div class="tab-pane pt-4 active" id="profile_setting" role="tabpanel">
                                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="row">
                                                    <div class="col-lg-6 col-xl-6">
                                                        <div class="card border mb-0">
                                                            <div class="card-header">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <h4 class="card-title mb-0">Personal Information</h4>
                                                                    </div><!--end col-->
                                                                </div>
                                                            </div>

                                                            <div class="card-body">
                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label">Full Name</label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label">Email Address</label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                                            <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label">Profile Picture</label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input type="file" class="form-control" name="profile_picture">
                                                                    </div>
                                                                </div>
                                                            </div><!--end card-body-->
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-xl-6">
                                                        <div class="card border mb-0">
                                                            <div class="card-header">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <h4 class="card-title mb-0">Change Password</h4>
                                                                    </div><!--end col-->
                                                                </div>
                                                            </div>

                                                            <div class="card-body mb-0">
                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label">Old Password</label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control" type="password" name="old_password" placeholder="Old Password">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label">New Password</label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control" type="password" name="password" placeholder="New Password">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label">Confirm Password</label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div><!--end card-body-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- end profile setting -->
                                    </div> <!-- Tab panes -->
                                </div>
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
    <!-- Datatables js -->



</body>

</html>
