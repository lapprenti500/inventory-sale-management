@extends('admin_dashboard')
@section('admin')
     <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title mb-4 text-uppercase">Point de vente</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="card text-center">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Quantité</th>
                                            <th>Prix</th>
                                            <th>Sous Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $allcart = Cart::content();
                                    @endphp
                                    <tbody>
                                        @foreach ($allcart as $cart)
                                            <tr>
                                                <td>{{ $cart->name }}</td>
                                                <td>
                                                    <form method="post" action="{{ url('/cart-update/' . $cart->rowId) }}">
                                                        @csrf

                                                        <input type="number" name="qty" value="{{ $cart->qty }}"
                                                            style="width:40px;" min="1">
                                                        <button type="submit" class="btn btn-sm btn-success"
                                                            style="margin-top:-2px ;"> <i class="fas fa-check"></i>
                                                        </button>

                                                    </form>
                                                </td>
                                                <td>{{ $cart->price }}</td>
                                                <td>{{ $cart->price * $cart->qty }}</td>
                                                <td> <a href="{{ url('/cart-remove/' . $cart->rowId) }}"><i
                                                            class="fas fa-trash-alt" style="color:red"></i></a> </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                            <div class="bg-primary">
                                <br>
                                <p style="font-size:18px; color:#fff"> Quantité : {{ Cart::count() }} </p>
                                <p style="font-size:18px; color:#fff"> Sous Total : {{ Cart::subtotal() }} </p>
                                <p style="font-size:18px; color:#fff"> TAV : {{ Cart::tax() }} </p>
                                <p>
                                <h2 class="text-white"> Totale </h2>
                                <h1 class="text-white"> {{ Cart::total() }}</h1>
                                </p>
                                <br>
                            </div>

                            <br>
                            <form id="myForm" method="post" action="{{ url('/create-invoice') }}">
                                @csrf


                                

                                <button class="btn btn-blue waves-effect waves-light">Créer une facture</button>


                            </form>


                        </div>
                    </div> <!-- end card -->



                </div> <!-- end col-->

                <div class="col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">


                            <!-- end timeline content-->

                            <div class="tab-pane" id="settings">


                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th> </th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($product as $key => $item)
                                            <tr>
                                                <form method="post" action="{{ url('/add-cart') }}">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="hidden" name="name" value="{{ $item->product_name }}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <input type="hidden" name="price"
                                                        value="{{ $item->selling_price }}">

                                                    <td>{{ $key + 1 }}</td>
                                                    <td> <img src="{{ asset($item->product_image) }}"
                                                            style="width:50px; height: 40px;"> </td>
                                                    <td>{{ $item->product_name }}</td>
                                                    <td><button type="submit" style="font-size: 20px; color: #000;"> <i
                                                                class="fas fa-plus-square"></i> </button> </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>



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
