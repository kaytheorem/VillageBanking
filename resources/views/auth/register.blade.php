


<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>Register | Village Bank</title>
        @include('auth.inc.head')

    </head>

    <body class="bg-white">

        <!-- Begin page -->
        <div class="account-page">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0">
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-md-7 mx-auto">
                                <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">


                                    <div class="pt-0">
                                        <form id="signInForm" class="my-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                            @csrf


                                            <!-- Display All Errors -->
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <!-- Full Name Field -->
                                            <div class="form-group mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input id="fullname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Enter your Full Name" autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Username Field -->
                                            <div class="form-group mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input id="username" type="text" class="form-control @error('Username') is-invalid @enderror" name="Username" value="{{ old('Username') }}" required placeholder="Enter your Username">
                                                @error('Username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Email Field -->
                                            <div class="form-group mb-3">
                                                <label for="emailaddress" class="form-label">Email address</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Password Field -->
                                            <div class="form-group mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter your password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password Field -->
                                            <div class="form-group mb-3">
                                                <label for="password-confirm" class="form-label">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm your password">
                                            </div>

                                            <!-- Date of Birth Field -->
                                            <div class="form-group mb-3">
                                                <label for="DOB" class="form-label">Date of Birth</label>
                                                <input id="DOB" type="date" class="form-control @error('DOB') is-invalid @enderror" name="DOB" value="{{ old('DOB') }}">
                                                @error('DOB')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <input type="hidden" name="role" value="member">


                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary" type="submit"> Register</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>


                                        <div class="text-center text-muted mb-4">
                                            <p class="mb-0">Already have an account? <a class='text-primary ms-2 fw-medium' href='{{ route('login') }}'>Login here</a></p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="account-page-bg p-md-5 p-4">
                            <div class="text-center">
                                <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin Dashboard</h3>
                                <div class="auth-image">
                                    <img src="html/assets/images/authentication.svg" class="mx-auto img-fluid"  alt="images">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
        @include('auth.inc.js')

    </body>

</html>
