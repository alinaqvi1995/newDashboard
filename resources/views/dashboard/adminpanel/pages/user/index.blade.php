@extends('adminpanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')
    {{-- <section> --}}

    <div class="mb-5 col-md-12">
        <div class="table-responsive shadow">
            <div class="table-header-panel">
                <div class="d-flex">
                    <div class="first">
                        <h3 class=" title-2">All Users</h3>
                    </div>
                </div>
            </div>
            <div class="px-4 pb-4">
                <table id="dashboardTable2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
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
                                    <td>
                                        @if ($row->role == 'user')
                                            Candidate
                                        @elseif($row->role == 'company')
                                            Company
                                        @elseif($row->role == 'rec')
                                            Recruiter
                                        @endif
                                    </td>
                                    <td>
                                        @if ($row->status == 1)
                                            <span class="badge bg-success">{{ __('Active') }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ __('Deactive') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.editUser', $row->id) }}" class="btn btn_viewall">
                                            <i class="fa-solid fa-eye"></i>
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
            {{-- <div class="d-flex justify-content-center pt-5">
            {{ $user->links() }}
        </div> --}}
        </div>
    </div>
    {{-- <div class="col-sm-2">
    <a class="btn btn-primary text-white" href="{{ route('admin.addCategory') }}"> All Users </a>
</div> --}}
    <div class="card" style="width: 100% !important;">
    </div>
    {{-- </section> --}}

@endsection

@section('bottom_script')
@endsection
