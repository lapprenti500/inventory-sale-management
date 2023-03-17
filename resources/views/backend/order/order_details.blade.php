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
                                            <li class="breadcrumb-item"> <a href="{{ route('pending.order') }}" class="btn btn-danger rounded-pill waves-effect waves-light">Retour </a></li>

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
        <form method="post" action="{{ route('order.status.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $order->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Détails de la commande</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Image du client</label>
             <img id="showImage" src="{{ asset($order->customer->image ) }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">

        </div>
    </div>


              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nom du client</label>
             <p class="text-danger"> {{ $order->customer->name }} </p>
        </div>
    </div>



    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Email du client</label>
             <p class="text-danger"> {{ $order->customer->email }} </p>
        </div>
    </div>


       <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Téléphone du client</label>
             <p class="text-danger"> {{ $order->customer->phone }} </p>
        </div>
    </div>


  <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Date de la commande </label>
             <p class="text-danger"> {{ $order->order_date }} </p>
        </div>
    </div>

 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Facture de la commande </label>
             <p class="text-danger"> {{ $order->invoice_no }} </p>
        </div>
    </div>




   <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Statut de la paiement </label>
             <p class="text-danger"> {{ $order->payment_status }} </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Montant payé </label>
             <p class="text-danger"> {{ $order->pay }} </p>
        </div>
    </div>


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label"> Montant restant</label>
             <p class="text-danger"> {{ $order->due }} </p>
        </div>
    </div>




            </div> <!-- end row -->



            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Complétez la commande </button>
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
