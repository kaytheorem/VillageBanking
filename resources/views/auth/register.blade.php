

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
					<form id="signInForm" class="geex-content__authentication__form" method="POST" action="{{ route('register') }}">

                        @csrf


                        <h2 class="geex-content__authentication__title">Sign Up Your Account 👋</h2>

                        <div class="geex-content__authentication__form-group">
                            <label for="emailSignIn">Your Name</label>
                            <div class="geex-content__authentication__form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="geex-content__authentication__form-group">
                            <label for="emailSignIn">Your Email</label>

                            <div class="geex-content__authentication__form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


						<div class="geex-content__authentication__form-group">
                            <label for="loginPassword">Password</label>

                            <div class="geex-content__authentication__form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


						<div class="geex-content__authentication__form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="geex-content__authentication__form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
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
