<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="startbootstrap-sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">

            @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('password') }}
                </div>
            @endif

            @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('email') }}
                </div>
            @endif

            @if ($errors->has('name'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('name') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <input name="name" value="{{ old('name') }}" type="text" id="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                        <label for="firstName">Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input name="email" value="{{ old('email') }}" type="email" id="email" class="form-control" placeholder="Email address" required="required">
                        <label for="inputEmail">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input name="password_confirmation" type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
                <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
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
