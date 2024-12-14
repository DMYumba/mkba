<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\VehicleService;
use App\Support\Status;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function AdminDashboard(){

        $profileData = Auth::user()->ClientID;
        $ViewData = VehicleService::orderby('id', 'desc')->get();
        $pending = DB::table('vehicle_service')->where('status', 1)->count();
        $cleared = DB::table('vehicle_service')->where('status', 4)->count();
        $delivered = DB::table('vehicle_service')->where('status', 5)->count();
        return view('admin.index', ['ViewData'=> $ViewData], compact('pending','cleared','delivered'));

    } //End method
    

   public function UpdateStatus($id){

        $profileData = VehicleService::find($id);
        return view('admin.index', compact('profileData'));
    } //End method

    public function UpdateStatusStore(Request $request, $id){

        $data = VehicleService::find($id);
        $data->status = $request->status;

        $data->save();

        return redirect()->back();

    } //End method

    //View client bio data
    public function ClientProfile($id){

        $profileData = VehicleService::find($id);
        return view('admin.clientData', compact('profileData'));
    } //End method


    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } //End method

    public function AdminLogin()
    {
        return view('admin.admin_login');

    } //End method

    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    } //End method

    public function AdminEditProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_edit_profile', compact('profileData'));
    } //End method

    public function AdminEditProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('assets/images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('assets/images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();

    } //End method

    public function AdminChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password' ,compact('profileData'));

    } //End method

    public function AdminUpdatePassword(Request $request){

        //Validate
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        // math the old password
        if(!Hash::check($request->old_password, auth::user()->password)) {
            
            return redirect()->back();
        }

        //update password
        user::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back();

    } //End method



}
