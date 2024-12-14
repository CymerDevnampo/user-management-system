@extends('layouts.admin')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/cms.pap.com">Profile</a></li>
                            <li class="breadcrumb-item active">Profile Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Phone ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">My Profile Details</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    {{-- <label>{{ $students->links() }}</label> &nbsp; --}}
                                    <a href="#" class="btn btn-outline-gray me-2 active"><i
                                            class="feather-list"></i></a>
                                    <a href="#" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                        Download</a>
                                    <a href="/create-mission-vission" class="btn btn-primary"><i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Contact Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->age }}</td>
                                            <td>{{ $user->contact_no }}</td>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions ">
                                                    <form action="/edit-user/{{ $user->id }}" method="GET">
                                                        <button type="submit"
                                                            class="custom-edit-btn btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </button>
                                                    </form>
                                                    {{-- <form id="deleteForm{{ $user->id }}"
                                                        action="/delete-user/{{ $user->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="custom-delete-btn btn btn-sm bg-success-light me-2"
                                                            onclick="deleteButton('{{ $user->id }}')"> <i
                                                                class="feather-trash-2"></i>
                                                        </button>
                                                    </form> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .actions {
            justify-content: start;
        }

        .custom-edit-btn {
            font-size: 20px;
            color: #ffd000 !important;
        }

        .custom-edit-btn:hover {
            color: white !important;
            background-color: #ffd725 !important;
        }

        .custom-delete-btn {
            font-size: 20px;
            color: red !important;
        }

        .custom-delete-btn:hover {
            color: white !important;
            background-color: red !important;
        }
    </style>
@endpush

{{-- @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function deleteButton(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Processing...",
                        text: "Please wait...",
                        icon: "info",
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        document.getElementById('deleteForm' + id).submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "...",
                            icon: "success",
                            timer: 1500
                        });
                    });
                }
            });
        }
    </script>
@endpush --}}
