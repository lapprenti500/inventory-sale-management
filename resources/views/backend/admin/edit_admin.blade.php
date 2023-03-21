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
                                        <li class="breadcrumb-item"> <a href="{{ route('all.admin') }}" class="btn btn-danger rounded-pill waves-effect waves-light">Retour </a></li>

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
        <form id="myForm" method="post" action="{{ route('admin.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $adminuser->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Modifier administrateur</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Nom</label>
            <input type="text" name="name" class="form-control" value="{{ $adminuser->name }}"   >

        </div>
    </div>

      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Email</label>
            <input type="email" name="email" class="form-control"  value="{{ $adminuser->email }}"   >

        </div>
    </div>


      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Téléphone</label>
            <input type="text" name="phone" class="form-control"  value="{{ $adminuser->phone }}"   >

        </div>
    </div>



      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Attribuer un rôle </label>
            <select name="roles" class="form-select" id="example-select">
                    <option selected disabled >Choisir rôle </option>
                    @foreach($roles as $role)
        <option value="{{ $role->id }}" {{ $adminuser->hasRole($role->name) ? 'selected' : '' }} >{{ $role->name }}</option>
                     @endforeach
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
                email: {
                    required : true,
                },
                phone: {
                    required : true,
                },
                photo: {
                    required : true,
                },
                password: {
                    required : true,
                },
                roles: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : "Veuillez entrer le nom de l'utilisateur",
                },
                email: {
                    required : "Veuillez entrer l'email de l'utilisateur",
                },
                phone: {
                    required : "Veuillez entrer le téléphone de l'utilisateur",
                },
                password: {
                    required : "Veuillez entrer le mot de paase de l'utilisateur",
                },
                photo: {
                    required : "Veuillez choisir la photo de l'utilisateur",
                },
                roles: {
                    required : "Veuillez entrer le rôle de l'utilisateur",
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
