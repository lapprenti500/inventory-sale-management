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
        <form id="myForm" method="post" action="{{ route('permission.store') }}" enctype="multipart/form-data">
            @csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Ajouter une Autorisation</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom de l'autorisation</label>
            <input type="text" name="name" class="form-control"   >

        </div>
    </div>


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom du Groupe </label>
            <select name="group_name" class="form-select" id="example-select">
                    <option selected disabled >Choisir Groupe  </option>

        <option value="Caissiere"> Caissier</option>
        <option value="Employée"> Employée<option>
        <option value="Client"> Client</option>
        <option value="Fournisseur"> Fournisseur</option>
        <option value="Catégorie"> Catégorie </option>
        <option value="Produit"> Produit </option>
        <option value="Frais"> Frais </option>
        <option value="Commande"> Commande</option>
        <option value="stock"> Stock </option>
        <option value="Rôles"> Rôles</option>

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
                    required : 'Veuillez entrer le nom de la permission',
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
