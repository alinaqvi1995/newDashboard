@extends('dashboard.adminpanel.layouts.app')

@section('page_title', 'Dashboard')

@section('head_style')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <style>
        .date-selector {
            position: relative;
        }

        .date-selector>input[type=date] {
            text-indent: -100px;
        }
    </style>
    {{-- <section class="content"> --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- Messages -->

                        @include('dashboard.adminpanel.includes.messages')

                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Users</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="px-4 pb-4">
                                <table id="dashboardTable2" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            {{-- <th>Role</th> --}}
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($user) > 0)
                                            @foreach ($user as $key => $row)
                                                <tr>
                                                    <td>{{ $key + 1 }}. </td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    {{-- <td>
                                                        @if ($row->role == 'user')
                                                            Candidate
                                                        @elseif($row->role == 'company')
                                                            Company
                                                        @elseif($row->role == 'rec')
                                                            Recruiter
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        @if ($row->status == 1)
                                                            <span class="badge bg-success">{{ __('Active') }}</span>
                                                        @else
                                                            <span class="badge bg-danger">{{ __('Deactive') }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn_viewall">
                                                            <i class="fa-solid fas fa-eye"></i>
                                                        </a>
                                                        {{-- <a href="" onclick="return confirm('Are you sure you want to delete?');"
                                                class="btn btn-danger btn-sm "><i class="fa fa-trash" style="font-size:18px"></i></a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" allign="center">No data available</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    {{-- </section> --}}
@endsection

@section('bottom_script')
@endsection
