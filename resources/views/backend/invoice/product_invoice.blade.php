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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Facture client</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Client</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Logo & title -->
                                    <div class="clearfix">
                                        <div class="float-start">
                                            <div class="auth-logo">
                                                <div class="logo logo-dark">
                                                    <span class="logo-lg">
                                                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="22">
                                                    </span>
                                                </div>

                                                <div class="logo logo-light">
                                                    <span class="logo-lg">
                                                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="22">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="m-0 d-print-none">Facture</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <p><b>Salut, {{ $customer->name }}</b></p>
                        </div>

                    </div><!-- end col -->
                    <div class="col-md-4 offset-md-2">
                        <div class="mt-3 float-end">
                            <p><strong>Date de commande : </strong> <span class="float-end"> &nbsp;&nbsp;&nbsp;&nbsp; Jan 17, 2016</span></p>
                            <p><strong>Statut de la commande : </strong> <span class="float-end"><span class="badge bg-danger">Unpaid</span></span></p>
                            <p><strong>Facture N°. : </strong> <span class="float-end">000028 </span></p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row mt-3">
                    <div class="col-sm-6">
                        <h6>Adresse de facturation</h6>
                        <address>
                            {{ $customer->address }} - {{ $customer->city }}
                            <br>
        <abbr title="Phone">Nom de la boutique:</abbr> {{ $customer->shopname }}<br>
        <abbr title="Phone">Téléphone:</abbr> {{ $customer->phone }}<br>
        <abbr title="Phone">Email:</abbr> {{ $customer->email }}<br>
                        </address>
                    </div> <!-- end col -->


                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
            <table class="table mt-4 table-centered">
                <thead>
                <tr><th>#</th>
                    <th>Article</th>
                    <th style="width: 10%">Quantité</th>
                    <th style="width: 10%">Prix unité</th>
                    <th style="width: 10%" class="text-end">Total</th>
                </tr></thead>
                <tbody>
                @php
                $sl = 1;
                @endphp

                @foreach($contents as $key=> $item)
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>
                        <b>{{ $item->name }}</b> <br/>

                    </td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->price }}</td>
                    <td class="text-end">{{ $item->price*$item->qty }}  FCFA</td>
                </tr>
                @endforeach

                </tbody>
            </table>
                        </div> <!-- end table-responsive -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix pt-5">
                            <h6 class="text-muted">Notes:</h6>


                        </div>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="float-end">
        <p><b>Sub-total:</b> <span class="float-end">{{ Cart::subtotal() }}  FCFA</span></p>
        <p><b>Vat (21%):</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; {{ Cart::tax() }}  FCFA</span></p>
        <h3>{{ Cart::total() }} FCFA</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="mt-4 mb-1">
                    <div class="text-end d-print-none">
                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer me-1"></i> Imprimer</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Soumettre </button>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
    </div>


                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->


        <!-- Signup modal content -->
        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="text-center mt-2 mb-4 ">
                                <div class="auth-logo">
                                    <h3>Facture de{{ $customer->name }}</h3>
                                    <h3>Montant total  {{ Cart::total() }}  FCFA</h3>
                                </div>
                        </div>




                        <form class="px-3" method="post" action="{{ url('/final-invoice') }}">
                            @csrf

                            <div class="mb-3">
                     <label for="username" class="form-label">Paiement</label>
                     <select name="payment_status" class="form-select" id="example-select">
                            <option selected disabled >Choisir Paiement </option>

                <option value="HandCash">HandCash</option>
                <option value="Cheque">Chèque</option>
                <option value="Due">Due</option>

                        </select>
                            </div>

                                <div class="mb-3">
                     <label for="username" class="form-label">Payez maintenant</label>
                     <input class="form-control" type="text" name="pay" placeholder="Pay Now">
                            </div>


                                <div class="mb-3">
                     <label for="username" class="form-label">Due Amount</label>
                     <input class="form-control" type="text" name="due" placeholder="Due Amount ">
                            </div>

                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                            <input type="hidden" name="order_date" value="{{ date('d-F-Y') }}">
                            <input type="hidden" name="order_status" value="pending">
                            <input type="hidden" name="total_products" value="{{ Cart::count() }}">
                            <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
                            <input type="hidden" name="vat" value="{{ Cart::tax() }}">
                            <input type="hidden" name="total" value="{{ Cart::total() }}">


                            <div class="mb-3 text-center">
             <button class="btn btn-primary" type="submit">Complétez la commande</button>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



@endsection
