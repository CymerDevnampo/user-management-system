@extends('layouts.admin')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add </h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/cms.pap.com">Content Controller</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        {{-- <form method="post" action="/store-user" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Add User <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input id="title" name="first_name" value="{{ old('first_name') }}"
                                            autocomplete="first_name" autofocus
                                            class="form-control @error('first_name') is-invalid @enderror" type="text">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name <span class="login-danger">*</span></label>
                                        <input id="last_name" name="last_name" value="{{ old('last_name') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('last_name') is-invalid @enderror" type="text">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="gender">Gender <span class="login-danger">*</span></label>
                                        <select id="gender" name="gender"
                                            class="form-control @error('gender') is-invalid @enderror" autocomplete="gender"
                                            autofocus>
                                            <option value="">Select Gender</option>
                                            <option value="male" @if (old('gender') == 'male') selected @endif>Male
                                            </option>
                                            <option value="female" @if (old('gender') == 'female') selected @endif>Female
                                            </option>
                                            <option value="other" @if (old('gender') == 'other') selected @endif>Other
                                            </option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Age <span class="login-danger">*</span></label>
                                        <input id="age" name="age" value="{{ old('age') }}" autocomplete="name"
                                            autofocus class="form-control @error('age') is-invalid @enderror"
                                            type="text">
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Contact Number <span class="login-danger">*</span></label>
                                        <input id="contact_no" name="contact_no" value="{{ old('contact_no') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('contact_no') is-invalid @enderror" type="text">
                                        @error('contact_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
                                </div>
                            </div>
                        </form> --}}

                        <form id="myForm" method="post" action="/store-user" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Add User <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input id="first_name" name="first_name" value="{{ old('first_name') }}"
                                            autocomplete="first_name" autofocus
                                            class="form-control @error('first_name') is-invalid @enderror" type="text">
                                        <span class="text-danger error-text" id="first_name_error"></span>
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name <span class="login-danger">*</span></label>
                                        <input id="last_name" name="last_name" value="{{ old('last_name') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('last_name') is-invalid @enderror" type="text">
                                        <span class="text-danger error-text" id="last_name_error"></span>
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="gender">Gender <span class="login-danger">*</span></label>
                                        <select id="gender" name="gender"
                                            class="form-control @error('gender') is-invalid @enderror" autocomplete="gender"
                                            autofocus>
                                            <option value="">Select Gender</option>
                                            <option value="male" @if (old('gender') == 'male') selected @endif>Male
                                            </option>
                                            <option value="female" @if (old('gender') == 'female') selected @endif>Female
                                            </option>
                                            <option value="other" @if (old('gender') == 'other') selected @endif>Other
                                            </option>
                                        </select>
                                        <span class="text-danger error-text" id="gender_error"></span>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Age <span class="login-danger">*</span></label>
                                        <input id="age" name="age" value="{{ old('age') }}" autocomplete="name"
                                            autofocus class="form-control @error('age') is-invalid @enderror"
                                            type="text">
                                        <span class="text-danger error-text" id="age_error"></span>
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Contact Number <span class="login-danger">*</span></label>
                                        <input id="contact_no" name="contact_no" value="{{ old('contact_no') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('contact_no') is-invalid @enderror" type="text">
                                        <span class="text-danger error-text" id="contact_no_error"></span>
                                        @error('contact_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function submitForm() {
            Swal.fire({
                icon: 'info',
                title: 'Processing...',
                text: "Please wait...",
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: 1500
            });
            setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Added Successfully.',
                    timer: 1500
                });
            }, 1500);
        }
    </script>
@endpush

@push('css')
    <style>
        .local-forms label {
            font-size: 13px;
            color: #ababab;
            font-weight: 500;
            position: absolute;
            top: -10px;
            left: 10px;
            background: #fff;
            margin-bottom: 0;
            padding: 0 5px;
            z-index: 99;
        }
    </style>
@endpush --}}

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(e) {
                $('.error-text').text(''); // Clear previous error messages

                // Perform validation here
                var firstName = $('#first_name').val();
                var lastName = $('#last_name').val();
                var gender = $('#gender').val();
                var age = $('#age').val();
                var contactNo = $('#contact_no').val();
                var isValid = true;

                // Simple validation example (you can customize this based on your requirements)
                if (firstName.trim() === '') {
                    $('#first_name_error').text('Please enter First Name');
                    isValid = false;
                }
                if (lastName.trim() === '') {
                    $('#last_name_error').text('Please enter Last Name');
                    isValid = false;
                }
                if (gender === '') {
                    $('#gender_error').text('Please select Gender');
                    isValid = false;
                }
                if (age.trim() === '') {
                    $('#age_error').text('Please enter Age');
                    isValid = false;
                }
                if (contactNo.trim() === '') {
                    $('#contact_no_error').text('Please enter Contact Number');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault(); // Prevent form submission if validation fails
                }
            });
        });
    </script>
@endpush
