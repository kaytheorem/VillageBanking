

<!doctype html>
<html lang="en" dir="ltr">


<head>
@include('auth.inc.head')
</head>

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo">

					</div>
                    <form id="signInForm" class="geex-content__authentication__form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <h2 class="geex-content__authentication__title">Sign Up Your Account 👋</h2>

                        <!-- Full Name Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="fullname">Full Name</label>
                            <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Username Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="Username">Username</label>
                            <input id="Username" type="text" class="form-control @error('Username') is-invalid @enderror" name="Username" value="{{ old('Username') }}" required autocomplete="username">
                            @error('Username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="emailSignIn">Your Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="loginPassword">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <!-- Date of Birth Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="DOB">Date of Birth</label>
                            <input id="DOB" type="date" class="form-control @error('DOB') is-invalid @enderror" name="DOB" value="{{ old('DOB') }}">
                            @error('DOB')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Picture Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="picture">Profile Picture (Optional)</label>
                            <input id="picture" type="file" class="form-control @error('picture') is-invalid @enderror" name="picture" accept="image/*">
                            @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Role Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="role">Role</label>
                            <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Is Group Admin Field -->
                        <div class="geex-content__authentication__form-group">
                            <label for="isGroupAdmin">Are you a Group Admin?</label>
                            <input type="checkbox" id="isGroupAdmin" name="isGroupAdmin" value="1" {{ old('isGroupAdmin') ? 'checked' : '' }}>
                        </div>

                        <button type="submit" class="geex-content__authentication__form-submit">Sign Up</button>

                        <span class="geex-content__authentication__form-separator">Or</span>

                        <div class="geex-content__authentication__form-footer">
                            already have an account? <a href="{{ route('login') }}">Sign In</a>
                        </div>
                    </form>


				</div>
			</div>
			<div class="geex-content__authentication__img">
				<img src="dashboard/assets/img/authentication.svg" alt="">
			</div>
		</div>
	</main>

	<!-- inject:js-->
@include('auth.inc.js')
	<!-- endinject-->
</body>


</html>
