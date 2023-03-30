<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Carbon\Carbon;

class SupplierController extends Controller
{
    public function AllSupplier(){

        $supplier = Supplier::latest()->get();
        return view('backend.supplier.all_supplier',compact('supplier'));

    } // End Method

    public function AddSupplier(){
        return view('backend.supplier.add_supplier');
   } // End Method



    public function StoreSupplier(Request $request){

       $validateData = $request->validate([
           'name' => 'required|max:200',
           'email' => 'required|unique:customers|max:200',
           'phone' => 'required|max:200',
           'address' => 'required|max:400',
           'shopname' => 'required|max:200',
           
           'type' => 'required',],

           [
            'name.required' => "Le nom est obligatoire",
            'email.required' => "L'adresse Email est obligatoire",
            'phone.required' => "Le numéro de téléphone est obligatoire",
            'address.required' => "L'adresse est obligatoire",            
            'shopname.required' => "Le nom de la boutique est obligatoire",
        ]
    
    );

       

       Supplier::insert([

           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'shopname' => $request->shopname,
           'type' => $request->type,
          
           'created_at' => Carbon::now(),

       ]);

        $notification = array(
           'message' => 'Fournisseur inséré avec succès',
           'alert-type' => 'success'
       );

       return redirect()->route('all.supplier')->with($notification);
   } // End Method

   public function EditSupplier($id){

    $supplier = Supplier::findOrFail($id);
    return view('backend.supplier.edit_supplier',compact('supplier'));

} // End Method


 public function UpdateSupplier(Request $request){

    $supplier_id = $request->id;

   

        Supplier::findOrFail($supplier_id)->update([

        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'shopname' => $request->shopname,
        'type' => $request->type,
        
        'created_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Fournisseur mis à jour avec succès',
        'alert-type' => 'success'
    );

    return redirect()->route('all.supplier')->with($notification);

 


} // End Method



public function DeleteSupplier($id){

   
    Supplier::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Fournisseur supprimé avec succès',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

} // End Method

public function DetailsSupplier($id){

    $supplier = Supplier::findOrFail($id);
    return view('backend.supplier.details_supplier',compact('supplier'));

} // End Method

}
