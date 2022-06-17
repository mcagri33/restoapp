@extends('castle.castle_master')
@section('title','Masa Listele')
@section('castle')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">@yield('title')</h4>
                                @if(session()->has('message'))
                                    <div class="alert alert-{{session('message-type')}}">{{session('message')}}</div>
                                @endif
                                <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>@lang('datatable.name')</th>
                                        <th>@lang('datatable.status')</th>
                                        <th>@lang('datatable.action')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tables as $table)
                                        <tr>
                                            <td>{{$table->name}}</td>
                                            <td>{{$table->status}}</td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div> <!-- content -->

    </div>
@endsection
