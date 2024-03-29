@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                         <!-- start page title -->
                         <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"> <a href="{{ route('all.permission') }}" class="btn btn-danger rounded-pill waves-effect waves-light">Retour </a></li>

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
        <form id="myForm" method="post" action="{{ route('permission.update') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $permission->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Modifier une autorisation</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom de l'autorisation</label>
            <input type="text" name="name" class="form-control" value="{{ $permission->name }}"  >

        </div>
    </div>


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom du Groupe </label>
            <select name="group_name" class="form-select" id="example-select">
                    <option selected disabled >Choisir Groupe  </option>

        <option value="Point de vente" {{ $permission->group_name == 'pos' ? 'selected' : '' }}> Point de vente</option>
        <option value="Employée" {{ $permission->group_name == 'employee' ? 'selected' : '' }}> Employée</option>
        <option value="Client" {{ $permission->group_name == 'customer' ? 'selected' : '' }}> Client</option>
        <option value="Fournisseur" {{ $permission->group_name == 'supplier' ? 'selected' : '' }}> Fournisseur</option>
        <option value="Catégorie" {{ $permission->group_name == 'category' ? 'selected' : '' }}> Catégorie </option>
        <option value="Produit" {{ $permission->group_name == 'product' ? 'selected' : '' }}> Produit </option>
        <option value="Frais" {{ $permission->group_name == 'expense' ? 'selected' : '' }}> Frais </option>
        <option value="Commande" {{ $permission->group_name == 'orders' ? 'selected' : '' }}> Commande</option>
        <option value="stock" {{ $permission->group_name == 'stock' ? 'selected' : '' }}> Stock </option>
        <option value="Rôles" {{ $permission->group_name == 'roles' ? 'selected' : '' }}> Rôles</option>

                </select>

        </div>
    </div>




            </div> <!-- end row -->



            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Enregistrer</button>
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


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
                group_name: {
                    required : true,
                },

            },
            messages :{
                name: {
                    required : "Veuillez entrer le nom de l'utorisation",
                },
                group_name: {
                    required : 'Veuillez sélectionner le nom du groupe',
                },

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>





@endsection
