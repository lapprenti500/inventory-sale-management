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
      <a href="{{ route('add.permission') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter une autorisation </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"></h4>
                                </div>
                            </div>
                        </div><br>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mb-4 text-uppercase"> Toutes les Autorisations</h5>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Nom de l'autorisation </th>
                                <th>Nom du Groupe </th>
                                <th>Action</th>
                            </tr>
                        </thead>


        <tbody>
        	@foreach($permissions as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->group_name }}</td>
                <td>
<a href="{{ route('edit.permission',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"  title="Modifier"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="{{ route('delete.permission',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete" title="Supprimer"><i class="fa fa-trash" aria-hidden="true"></i></a>

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
