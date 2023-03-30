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
                                <a href="{{ route('add.customer') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter un client </a>
                            </ol>
                        </div>

                    </div>
                </div>
            </div><br>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Tous les clients
                            </h5>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>telephone</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($customer as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>

                                            <td>
                                                <a href="{{ route('edit.customer', $item->id) }}"class="btn btn-blue rounded-pill waves-effect waves-light"
                                                    title="Modifier"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{ route('delete.customer', $item->id) }}"
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete" title="Supprimer"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->

    </div> <!-- content -->
@endsection
