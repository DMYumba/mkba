<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\VehicleService;

class FileController extends Controller
{
    
    //View file method
    public function viewFile($id)
    {
        
        $Data = VehicleService::find($id);
        return view('admin.viewFile', compact('Data'));

    } //End of method

    //View description file
    public function descriptFile($id)
    {
        $Data = VehicleService::find($id);
        return view('admin.descriptFile', compact('Data'));
    } //End of method

     //View description file method
     public function viewFileClient($id)
     {
         
         $Data = VehicleService::find($id);
         return view('client.viewFile', compact('Data'));
 
     } //End of method

     //View invoice file method
     public function viewInvoiceClient($id)
     {
         
         $Data = VehicleService::find($id);
         return view('client.viewInvoice', compact('Data'));
 
     } //End of method



}
