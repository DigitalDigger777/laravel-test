<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="startbootstrap-sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            <div class="text-center mb-4">
                <h4>Forgot your password?</h4>
                <p>Enter your email address and we will send you instructions on how to reset your password.</p>
            </div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="form-group">
                    <div class="form-label-group">
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                        <label for="inputEmail">Enter email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input name="password-confirm" id="password-confirm" type="password" class="form-control" required>
                        <label for="inputEmail">Enter Password</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
                <a class="d-block small" href="{{ route('login') }}">Login Page</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="startbootstrap-sb-admin/vendor/jquery/jquery.min.js"></script>
<script src="startbootstrap-sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="startbootstrap-sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>