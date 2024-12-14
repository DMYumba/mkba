<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\VehicleService;
use App\Models\VehicleServiceDeliver;
use App\Models\VehicleFullService;
use App\Models\goodsFullService;
use App\Models\goodsService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function ClientDashboard(){

        $profileData = Auth::user()->ClientID;
        $ViewData = VehicleService::where('ClientID', $profileData)->orderby('created_at')->get();
        return view('client.index', ['ViewData'=> $ViewData]);

    } //End method

    public function ClientServicesVehiclesClearing(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.services.vehicles.customs_clearing', compact('profileData'));

    } //End method

    public function ClientServicesVehiclesStore(Request $request) {

        $data = new VehicleService();
        $data->TrackID = date('YmdHi').$request->ClientID;
        $data->ClientID = $request->ClientID;
        $data->phone = $request->phone;
        $data->other_phone = $request->other_phone;
        $data->service_type = $request->service_type;
        $data->service_category = $request->service_category;

        if ($request->file('invoice')) {
            $file = $request->file('invoice');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('client_backend/assets/uploads'),$filename);
            $data['invoice'] = $filename;
        }

        $data->save();

        return redirect()->route('client.dashboard')->with('success', 'Your invoice was submitted successfully!');
    } //End method

    //Vehicle customs clearing and delivery
    public function ClientServicesVehiclesDeliver(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.services.vehicles.clearing_deliver', compact('profileData'));

    } //End method

    public function ClientServicesVehiclesDeliverStore(Request $request) {

        $data = new VehicleServiceDeliver();
        $data->TrackID = date('YmdHi').$request->ClientID;
        $data->ClientID = $request->ClientID;
        $data->phone = $request->phone;
        $data->other_phone = $request->other_phone;
        $data->service_type = $request->service_type;
        $data->service_category = $request->service_category;
        $data->address = $request->address;

        if ($request->file('invoice')) {
            $file = $request->file('invoice');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('client_backend/assets/uploads'),$filename);
            $data['invoice'] = $filename;
        }

        $data->save();

        return redirect()->route('client.dashboard')->with('success', 'Your invoice was submitted successfully!');
    } //End method

    //Vehicle customs clearing and delivery
    public function ClientServicesVehiclesFullservice(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.services.vehicles.full_service', compact('profileData'));

    } //End method

    public function ClientServicesVehiclesFullserviceStore(Request $request) {

        $data = new VehicleFullService();
        $data->TrackID = date('YmdHi').$request->ClientID;
        $data->ClientID = $request->ClientID;
        $data->phone = $request->phone;
        $data->other_phone = $request->other_phone;
        $data->service_type = $request->service_type;
        $data->service_category = $request->service_category;
        $data->description = $request->description;
        $data->budget_min = $request->budget_min;
        $data->budget_max = $request->budget_max;
        $data->address = $request->address;

        if ($request->file('desc_file')) {
            $file = $request->file('desc_file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('client_backend/assets/uploads'),$filename);
            $data['desc_file'] = $filename;
        }

        $data->save();

        return redirect()->route('client.dashboard')->with('success', 'Your data was submitted successfully!');
    } //End method 

    //End methods for vehicles

    //Start methods for goods
    public function ClientServicesGoodsClearing(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.services.goods.customs_clearing', compact('profileData'));

    } //End method

    public function ClientServicesGoodsStore(Request $request) {

        $data = new goodsService();
        $data->TrackID = date('YmdHi').$request->ClientID;
        $data->ClientID = $request->ClientID;
        $data->phone = $request->phone;
        $data->other_phone = $request->other_phone;
        $data->service_type = $request->service_type;
        $data->service_category = $request->service_category;
        $data->boarder = $request->boarder;
        $data->description = $request->description;
        $data->goods_value = $request->goods_value;

        if ($request->file('invoice')) {
            $file = $request->file('invoice');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('client_backend/assets/uploads'),$filename);
            $data['invoice'] = $filename;
        }

        $data->save();

        return redirect()->route('client.dashboard')->with('success', 'Your invoice was submitted successfully!');
    } //End method

    //goods customs clearing and delivery
    public function ClientServicesGoodsFullservice(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.services.goods.full_service', compact('profileData'));

    } //End method

    public function ClientServicesGoodsFullserviceStore(Request $request) {

        $data = new goodsFullService();
        $data->TrackID = date('YmdHi').$request->ClientID;
        $data->ClientID = $request->ClientID;
        $data->phone = $request->phone;
        $data->other_phone = $request->other_phone;
        $data->service_type = $request->service_type;
        $data->service_category = $request->service_category;
        $data->boarder = $request->boarder;
        $data->description = $request->description;
        $data->goods_value = $request->goods_value;

        if ($request->file('invoice')) {
            $file = $request->file('invoice');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('client_backend/assets/uploads'),$filename);
            $data['invoice'] = $filename;
        }

        $data->save();

        return redirect()->route('client.dashboard')->with('success', 'Your data was submitted successfully!');
    } //End method 

    //End methods for goods

}

