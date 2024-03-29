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
      <a href="{{ route('today.expense') }}" class="btn btn-danger rounded-pill waves-effect waves-light">Retour </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ajouter un Frais  </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">





    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
        <form method="post" action="{{ route('expense.store') }}" enctype="multipart/form-data">
        	@csrf

            <h5 class="mb-4 text-uppercase "><i class="fa-solid fa-money-bill"></i>  Ajouter un Frais </h5>

            <div class="row">


    <div class="col-md-12">
        <div class="mb-3">
            <label for="firstname" class="form-label">Details du Frais</label>
           <textarea name="details" class="form-control" id="example-textarea" rows="3"></textarea>
        </div>
    </div>


    <div class="col-md-12">
        <div class="mb-3">
            <label for="firstname" class="form-label">Montant </label>
            <input type="text" name="amount" class="form-control"   >
        </div>
    </div>

  <div class="col-md-12">
        <div class="mb-3">

            <input type="hidden" name="date" class="form-control" value="{{ date('d-m-Y') }}"   >
        </div>
    </div>

     <div class="col-md-12">
        <div class="mb-3">

            <input type="hidden" name="month" class="form-control" value="{{ date('F') }}" >
        </div>
    </div>

     <div class="col-md-12">
        <div class="mb-3">

            <input type="hidden" name="year" class="form-control" value="{{ date('Y') }}"   >
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






@endsection
