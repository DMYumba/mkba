<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleService;

class updateDataController extends Controller
{
    public function update(Request $request)
    {
        $id = $request->input('id'); // Get the ID of the record
        $status = $request->input('status'); // Get the selected status

        $Data = VehicleService::findOrFail($id); // Retrieve the record from the database

        // Update the status based on the selected value
        switch ($status) {
            case 1:
                return 'Pending';
            case 2:
                return 'In process';
            case 3:
                return 'Inspection';
            case 4:
                return 'Cleared';
            case 5:
                return 'Delivered';
            default:
                return 'Declined';
        }

        $Data->save(); // Save the updated record

        return response()->json(['success' => true]);
    }
}
