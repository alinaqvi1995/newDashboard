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
                                        <input type="text" name="firstName" value="{{ old('firstName') }}"
                                            class="form-control" id="firstName"
                                            placeholder="Enter First name" maxlength="15" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName" value="{{ old('lastName') }}"
                                            class="form-control" id="lastName" placeholder="Enter Last name"
                                            maxlength="25" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ssn">SSN</label>
                                        <input type="text" name="ssn" value="{{ old('ssn') }}"
                                            class="form-control" id="ssn" placeholder="Enter SSN"
                                            maxlength="9">
                                    </div>


                                    <div class="form-group">
                                        <label for="dob">Date Of Birth</label>
                                        <div class="date-selector">
                                            <label id="doblb"></label>
                                            <input type="date" name="dob" value="{{ old('dob') }}"
                                                class="form-control" data-date-format="YYYY MM DD" id="dob"
                                                placeholder="Enter Date Of Birth">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="houseNumber">House Number</label>
                                        <input type="text" name="houseNumber" value="{{ old('houseNumber') }}"
                                            class="form-control" id="houseNumber"
                                            placeholder="Enter House Number" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="quadrant">Quadrant</label>
                                        <input type="text" name="quadrant" value="{{ old('quadrant') }}"
                                            class="form-control" id="quadrant" placeholder="Enter Quadrant"
                                            maxlength="2">
                                    </div>
                                    <div class="form-group">
                                        <label for="streetName">Street Name</label>
                                        <input type="text" name="streetName" value="{{ old('streetName') }}"
                                            class="form-control" id="streetName"
                                            placeholder="Enter Street Name" maxlength="26">
                                    </div>
                                    <div class="form-group">
                                        <label for="streetType">Street Type</label>
                                        <input type="text" name="streetType" value="{{ old('streetType') }}"
                                            class="form-control" id="streetType"
                                            placeholder="Enter Street Type">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="city" value="{{ old('city') }}"
                                            class="form-control" id="city" placeholder="Enter City"
                                            maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" name="state" value="{{ old('state') }}"
                                            class="form-control" id="state" placeholder="Enter State"
                                            maxlength="2" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="zip">ZIP Code</label>
                                        <input type="text" name="zip" value="{{ old('zip') }}"
                                            class="form-control" id="zip"
                                            placeholder="Enter ZIP Code" maxlength="9">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                            class="form-control" id="phone"
                                            placeholder="Enter Phone Number" maxlength="10"
                                            onkeypress='return isNumberKey(event)'>
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

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection
