<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class AdminController extends Controller
{

    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('upload/admin_image/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin_image'),$filename);
           $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Profil administrateur mis à jour avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method


    public function adminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => "Déconnexion de l'administrateur réussie",
            'alert-type' => 'info'
        );


        return redirect('/logout')->with($notification);
    } //End method

    public function adminLogoutPage()
    {
        return view('admin.admin_logout');
    }//End method

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    }//End method

    public function ChangePassword(){
        return view('admin.change_password');
    }// End Method

    public function UpdatePassword(Request $request){

        /// Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',

        ]);

        /// Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {

             $notification = array(
            'message' => "L'ancien mot de passe ne correspond pas !!",
            'alert-type' => 'error'
             );
            return back()->with($notification);

        }

        //// Update The New Password

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

            $notification = array(
            'message' => 'Changement de mot de passe réussi',
            'alert-type' => 'success'
             );
            return back()->with($notification);

    }// End Method

      /////////////////// Admin User All Method /////////////
      public function AllAdmin(){
        $alladminuser = User::latest()->get();
        return view('backend.admin.all_admin',compact('alladminuser'));
    }// End Method

    public function AddAdmin(){

        $roles = Role::all();
        return view('backend.admin.add_admin',compact('roles'));
    }// End Method

    public function StoreAdmin(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'Nouvel utilisateur administrateur créé avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Method

    public function EditAdmin($id){

        $roles = Role::all();
        $adminuser = User::findOrFail($id);
        return view('backend.admin.edit_admin',compact('roles','adminuser'));

    }// End Method


    public function UpdateAdmin(Request $request){

        $admin_id = $request->id;

        $user = User::findOrFail($admin_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => "L'utilisateur administrateur a bien été mis à jour",
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Method



    public function DeleteAdmin($id){

        $user = User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
            'message' => 'Utilisateur administrateur supprimé avec succès',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method

}
