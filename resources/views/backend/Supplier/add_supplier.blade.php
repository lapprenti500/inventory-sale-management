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
                                <li class="breadcrumb-item"> <a href="{{ route('all.supplier') }}"
                                        class="btn btn-danger rounded-pill waves-effect waves-light">Retour </a></li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div><br>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">





                            <!-- end timeline content-->

                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{ route('supplier.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Ajouter un
                                        fournisseur</h5>

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">nom</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror">
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label"> Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror">
                                                @error('email')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label"> telephone </label>
                                                <input type="text" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror">
                                                @error('phone')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Adresse </label>
                                                <input type="text" name="address"
                                                    class="form-control @error('address') is-invalid @enderror">
                                                @error('address')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Nom du boutique </label>
                                                <input type="text" name="shopname"
                                                    class="form-control @error('shopname') is-invalid @enderror">
                                                @error('shopname')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Type de fournisseur </label>
                                                <select name="type"
                                                    class="form-select @error('type') is-invalid @enderror"
                                                    id="example-select">
                                                    <option selected disabled>Choisir le Type </option>
                                                    <option value="Distributeur">Distributeur </option>
                                                    <option value="Grossiste">Grossiste </option>
                                                </select>
                                                @error('type')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror

                                            </div>
                                        </div>


                                        


                                      



                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->


                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->



    
@endsection
