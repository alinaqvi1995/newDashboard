@extends('dashboard.adminpanel.layouts.app')

@section('page_title', 'Dashboard')

@section('head_style')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    {{-- <section class="content"> --}}
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Messages -->

                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Language</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="https://admin.hoyhoyibiza.com/admin/savelanguage" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="OfesymA2neRKe48N7mtf2cOV5EBKLW0gAMIzjkHY">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Language Name</label>
                                    <input type="text" name="name" class="form-control" value="" id="inputName"
                                        placeholder="Enter Language name" fdprocessedid="bk4636">
                                </div>

                                <div class="form-group">
                                    <label for="inputFile_350x270">Language Image</label>
                                    <p class="info info-primary">Language Image dimension must be 200 * 100 </p>
                                    <input type="file" name="languageimage" class="form-control" id="inputFile_350x270">
                                </div>

                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select class="form-control" name="status" id="inputStatus" fdprocessedid="ddvel">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" fdprocessedid="vfvsujv">Save</button>
                                <a href="https://admin.hoyhoyibiza.com/admin/categories"
                                    class="btn btn-default float-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    {{-- </section> --}}
@endsection

@section('bottom_script')
@endsection
