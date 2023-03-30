<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Carbon\Carbon;

class CustomerController extends Controller
{
     public function AllCustomer(){

        $customer = Customer::latest()->get();
        return view('backend.customer.all_customer',compact('customer'));
    } // End Method

    public function AddCustomer(){
        return view('backend.customer.add_customer');
   } // End Method


    public function StoreCustomer(Request $request){

       $validateData = $request->validate([
           'name' => 'required|max:200',
           'email' => 'required|unique:customers|max:200',
           'phone' => 'required|max:200',
           'address' => 'required|max:400',],
        
           [
            'name.required' => "Le nom est obligatoire",
            'email.required' => "L'adresse Email est obligatoire",
            'phone.required' => "Le numéro de téléphone est obligatoire",
            'address.required' => "L'adresse est obligatoire",
        ]
        
        );

      

       Customer::insert([

           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,           
           
           'created_at' => Carbon::now(),

       ]);

        $notification = array(
           'message' => 'Client inséré avec succès',
           'alert-type' => 'success'
       );

       return redirect()->route('all.customer')->with($notification);
   } // End Method



   public function EditCustomer($id){

    $customer = Customer::findOrFail($id);
    return view('backend.customer.edit_customer',compact('customer'));

} // End Method


 public function UpdateCustomer(Request $request){

    $customer_id = $request->id;

    

    
    Customer::findOrFail($customer_id)->update([

    'name' => $request->name,
    'email' => $request->email,
    'phone' => $request->phone,
    'address' => $request->address,        
    
    'created_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Client mis à jour avec succès',
        'alert-type' => 'success'
    );

    return redirect()->route('all.customer')->with($notification);

    


} // End Method


public function DeleteCustomer($id){

    Customer::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Client supprimé avec succès',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

} // End Method

}
?>
