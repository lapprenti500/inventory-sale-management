<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Facture</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>EasyShop</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
                Siège social d'EasyShop
               Email:support@easylearningbd.com <br>
               Téléphone: 1245454545 <br>
               Thies, SAPCO <br>

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Nom du client :</strong>  {{ $order->customer->name }}  <br>
           <strong>Email du client:</strong> {{ $order->customer->email }}   <br>
           <strong>Téléphone du client:</strong>  {{ $order->customer->phone }}  <br>
           <strong>Adresse:</strong>  {{ $order->customer->address }} <br>
            <strong>Nom de la boutique: {{ $order->customer->shopname }}</strong>


         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">facture:</span> # {{ $order->invoice_no }} </h3>
            Date de commande :  {{ $order->order_date }} <br>
            État de la commande :  {{ $order->order_status }}<br>
            État du paiement :  {{ $order->payment_status }}<br>
            Paiement totale :  {{ $order->pay }}<br>
            Dette Total  : {{ $order->due }} </span>

         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Produits</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
         <th>Image </th>
        <th>Nom du produit</th>
        <th>Code du produit</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Total(+Vat)</th>
      </tr>
    </thead>
    <tbody>

     @foreach($orderItem as $item)
      <tr class="font">
        <td align="center">
            <img src=" {{ public_path($item->product->product_image) }} " height="50px;" width="50px;" alt="">
        </td>
        <td align="center">{{ $item->product->product_name }} </td>
        <td align="center"> {{ $item->product->product_code }} </td>
         <td align="center"> {{ $item->quantity }} </td>
        <td align="center">{{ $item->product->selling_price }} FCFA</td>
        <td align="center"> {{ $item->total }} FCFA</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span>{{ $order->total }} FCFA</h2>
            <h2><span style="color: green;">Total:</span>  {{ $order->total }} FCFA</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Merci d'avoir acheté nos produits..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Signature de l'autorité :</h5>
    </div>
</body>
</html>
