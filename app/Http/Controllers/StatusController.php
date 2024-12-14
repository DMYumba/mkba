<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleService;

class StatusController extends Controller
{
    public function handleStatus1(Request $request)
    {
        
        $status = $request->input('status');
        
        // Store the status in the vehicle_services table
        $vehicleService = new VehicleService();
        $vehicleService->status = $status;
        $vehicleService->save();
        
        // Handle any additional logic
        
        return response()->json(['message' => 'Status 1 handled successfully']);
    } //End method for status 1

    public function handleStatus2(Request $request)
    {
        console.log('Status changed'); // Add this line
        $status = $request->input('status');
        
        // Store the status in the vehicle_services table
        $vehicleService = new VehicleService();
        $vehicleService->status = $status;
        $vehicleService->save();
        
        // Handle any additional logic
        
        return response()->json(['message' => 'Status 1 handled successfully']);
    } //End method for status 1

    public function handleStatus3(Request $request)
    {
        $status = $request->input('status');
        
        // Store the status in the vehicle_services table
        $vehicleService = new VehicleService();
        $vehicleService->status = $status;
        $vehicleService->save();
        
        // Handle any additional logic
        
        return response()->json(['message' => 'Status 1 handled successfully']);
    } //End method for status 1

    public function handleStatus4(Request $request)
    {
        $status = $request->input('status');
        
        // Store the status in the vehicle_services table
        $vehicleService = new VehicleService();
        $vehicleService->status = $status;
        $vehicleService->save();
        
        // Handle any additional logic
        
        return response()->json(['message' => 'Status 1 handled successfully']);
    } //End method for status 1

    public function handleStatus5(Request $request)
    {
        $status = $request->input('status');
        
        // Store the status in the vehicle_services table
        $vehicleService = new VehicleService();
        $vehicleService->status = $status;
        $vehicleService->save();
        
        // Handle any additional logic
        
        return response()->json(['message' => 'Status 1 handled successfully']);
    } //End method for status 1
}
