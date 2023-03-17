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
                                            <button type="button" class="btn btn-primary rounded-pill waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#signup-modal">Ajouter Catégorie</button>
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
                    <h5 class="mb-4 text-uppercase">Tous les categories</h5>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Nom du catégorie</th>
                                <th>Action</th>
                            </tr>
                        </thead>


        <tbody>
        	@foreach($category as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->category_name }}</td>
                <td>
                    <a href="{{ route('edit.category',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"  title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('delete.category',$item->id) }}"  class="btn btn-danger rounded-pill waves-effect waves-light" id="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></a>

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



                                                        <!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">

  <form class="px-3" method="post" action="{{ route('category.store') }}">
                    @csrf

                    <div class="mb-3">
             <label for="username" class="form-label">Nom du catégorie</label>
     <input class="form-control" type="text" name="category_name" placeholder="Ajouter un catégorie ">
                    </div>


                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection
