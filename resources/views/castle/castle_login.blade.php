<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/castle/images/favicon.ico')}}">

    <!-- App css -->

    <link href="{{asset('assets/castle/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="{{asset('assets/castle/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="loading authentication-bg authentication-bg-pattern">

<div class="account-pages my-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="text-center">
                    <a href="index.html">
                        <img src="{{asset('assets/castle/images/logo-dark.png')}}" alt="" height="22" class="mx-auto">
                    </a>

                </div>
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Giriş Yap</h4>
                        </div>

                        <form action="{{route('castle.login')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                            </div>

                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>
                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="pages-recoverpw.html" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
                        <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark ms-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- Vendor -->
<script src="{{asset('assets/castle/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/feather-icons/feather.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/castle/js/app.min.js')}}"></script>

</body>
</html>
