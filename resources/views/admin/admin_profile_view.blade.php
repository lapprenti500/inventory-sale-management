@extends('admin_dashboard')
@section('admin')
 <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Profile</a></li>

                                        </ol>
                                    </div>
                                    <h4 class="page-title">Admin Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="text-center card-body">
                                        <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" class="rounded avatar-lg">
                                        <!--   <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image"> -->

                                        <h4 class="text-center mb-0">{{ $adminData->name }}</h4>
                                        <p class="text-center text-muted">{{ $adminData->email }}</p>

                                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                                        <div class="text-start mt-3">

                                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                                            <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>
                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input type="text" name="name" class="form-control" id="firstname" value="{{ $adminData->name }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="lastname"  value="{{ $adminData->email }}" >
                                            </div>
                                         </div> <!-- end col -->


                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="lastname"  value="{{ $adminData->phone }}" >
                                            </div>
                                        </div> <!-- end col -->



                        <div class="col-md-12">
                        <div class="mb-3">
                        <label for="example-fileinput" class="form-label">Admin Profile Image</label>
                        <input type="file" id="example-fileinput" class="form-control">
                        </div>
                        </div> <!-- end col -->


                        <div class="col-md-12">
                        <div class="mb-3">
                        <label for="example-fileinput" class="form-label"> </label>
                       <!-- <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image"> -->
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" class="rounded avatar-lg">
                            </div>

                        </div>
                        </div> <!-- end col -->
                        </div> <!-- end row -->



                        <div class="text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                        </div>
                        </div>
                                                            </div> <!-- end card -->
                                                    </div> <!-- end col-->
                                                </div>
                                                <!-- end row -->


                                                            </div>
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row-->
                                            </div> <!-- container -->
                                        </div> <!-- content -->


 @endsection
