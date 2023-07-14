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

                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Language</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.create.credit_report') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="firstName" class="form-control" value=""
                                            id="firstName" placeholder="Enter First name" maxlength="15" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" value=""
                                            id="lastName" placeholder="Enter Last name" maxlength="25" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ssn">SSN</label>
                                        <input type="text" name="ssn" class="form-control" value=""
                                            id="ssn" placeholder="Enter SSN" maxlength="9">
                                    </div>


                                    <div class="form-group">
                                        <label for="dob">Date Of Birth</label>
                                        <div class="date-selector">
                                            <label id="doblb"></label>
                                            <input type="date" name="dob" class="form-control"
                                                data-date-format="YYYY MM DD" id="dob"
                                                placeholder="Enter Date Of Birth">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="houseNumber">House Number</label>
                                        <input type="text" name="houseNumber" class="form-control" value=""
                                            id="houseNumber" placeholder="Enter House Number" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="quadrant">Quadrant</label>
                                        <input type="text" name="quadrant" class="form-control" value=""
                                            id="quadrant" placeholder="Enter Quadrant" maxlength="2">
                                    </div>
                                    <div class="form-group">
                                        <label for="streetName">Street Name</label>
                                        <input type="text" name="streetName" class="form-control" value=""
                                            id="streetName" placeholder="Enter Street Name" maxlength="26">
                                    </div>
                                    <div class="form-group">
                                        <label for="streetType">Street Type</label>
                                        <input type="text" name="streetType" class="form-control" value=""
                                            id="streetType" placeholder="Enter Street Type">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-control" value=""
                                            id="city" placeholder="Enter City" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" name="state" class="form-control" value=""
                                            id="state" placeholder="Enter State" maxlength="2" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="zip">ZIP Code</label>
                                        <input type="text" name="zip" class="form-control" value=""
                                            id="zip" placeholder="Enter ZIP Code" maxlength="9">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" value=""
                                            id="phone" placeholder="Enter Phone Number" maxlength="10">
                                    </div>





                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" fdprocessedid="vfvsujv">Save</button>
                                    {{-- <a href="https://admin.hoyhoyibiza.com/admin/categories"
                                        class="btn btn-default float-right">Cancel</a> --}}
                                </div>
                            </form>
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
    <script>
        $("#dob").on("change", function(e) {

            displayDateFormat($(this), '#doblb', $(this).val());

        });

        function displayDateFormat(thisElement, datePickerLblId, dateValue) {

            $(thisElement).css("color", "rgba(0,0,0,0)")
                .siblings(`${datePickerLblId}`)
                .css({
                    position: "absolute",
                    left: "10px",
                    top: "3px",
                })
                .text(dateValue.length == 0 ? "" : (`${getDateFormat(new Date(dateValue))}`));

        }

        function getDateFormat(dateValue) {

            let d = new Date(dateValue);

            // this pattern dd/mm/yyyy
            // you can set pattern you need
            let dstring = `${d.getFullYear()}-${("0" + (d.getMonth() + 1)).slice(-2)}-${("0" + d.getDate()).slice(-2)}`;

            return dstring;
        }
    </script>
@endsection
