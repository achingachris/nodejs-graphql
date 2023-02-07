<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
        // get and show all vehicles
        public function index()
        {
            // return view('admin_user/vehicles/vehicles');
            return view('admin_user/vehicles/vehicles', [
                'vehicles' => Vehicles::all()
            ]);
        }

        // show sing vehicle
        public function show($id)
        {
            $vehicle = Vehicles::find($id);
    
            if($vehicle) {
                return view('admin_user/vehicles/vehicle', [
                    'vehicle' => Vehicles::find($id)
                ]);
            } else {
                abort('404');
            }
        }
        
        // add vehicle form
        public function create() {
            return view('admin_user/vehicles/add');
        }

        // post vehicle
        public function store(Request $request) {
        $formFields = $request->validate([
            'vehicle_type' => 'required',
            'plate_number' => 'required',
            'capacity' => 'required',
            'type_of_trailer' => 'required',
            'trailer_plate_number' => 'required',
            'status' => 'required',
        ]);

        Vehicles::create($formFields);

        return redirect()->route('admin-vehicles');
        }
}
