@extends('layouts.admin')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/cms.pap.com">User</a></li>
                            <li class="breadcrumb-item active">Edit user</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form method="POST" action="/update-user/{{ $users->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Edit User <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input id="first_name" name="first_name"
                                            value="{{ old('first_name') ?? $users->first_name }}" autocomplete="first_name"
                                            autofocus class="form-control @error('first_name') is-invalid @enderror"
                                            type="text">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name<span class="login-danger">*</span></label>
                                        <input id="last_name" name="last_name"
                                            value="{{ old('last_name') ?? $users->last_name }}" autocomplete="last_name"
                                            autofocus class="form-control @error('last_name') is-invalid @enderror"
                                            type="text">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender<span class="login-danger">*</span></label>
                                        <input id="gender" name="gender" value="{{ old('gender') ?? $users->gender }}"
                                            autocomplete="gender" autofocus
                                            class="form-control @error('gender') is-invalid @enderror" type="text">
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Age<span class="login-danger">*</span></label>
                                        <input id="age" name="age" value="{{ old('age') ?? $users->age }}"
                                            autocomplete="age" autofocus
                                            class="form-control @error('age') is-invalid @enderror" type="text">
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Contact Number<span class="login-danger">*</span></label>
                                        <input id="contact_no" name="contact_no"
                                            value="{{ old('contact_no') ?? $users->contact_no }}" autocomplete="contact_no"
                                            autofocus class="form-control @error('contact_no') is-invalid @enderror"
                                            type="text">
                                        @error('contact_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="submitForm()">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function submitForm() {
            Swal.fire({
                icon: 'info',
                title: 'Processing...',
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: 1500
            });
            setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Updated Successfully.',
                    timer: 1500
                });
            }, 1500);
        }
    </script>
@endpush
