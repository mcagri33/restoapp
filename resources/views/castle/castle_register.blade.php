@extends('castle.castle_master')
@section('title','Register')
@section('castle')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@yield('title')</h4>

                                <form class="needs-validation" action="{{route('castle.register.create')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"  required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder=" Enter Email "  required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder=" Enter Email "  required />
                                    </div>


                                    <button class="btn btn-primary" type="submit">Register</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->


                    <!-- end col-->
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



    </div>


@endsection
