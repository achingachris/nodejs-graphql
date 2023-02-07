<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routes;
use Illuminate\Routing\Route;

class RoutesController extends Controller
{
    // get and show all routes
    public function index()
    {
        return view('admin_user/transport_routes/routes', [
            'routes' => Routes::all()
        ]);
    }

    // get and show single route
    public function show($id)
    {
        $route = Routes::find($id);

        if($route) {
            return view('admin_user/transport_routes/single_route', [
                'route' => Routes::find($id)
            ]);
        } else {
            abort('404');
        }
    }

    // add route
    public function create() {
        return view('admin_user/transport_routes/add_route');
    }

    // post route
    public function store(Request $request) {
        $formFields = $request->validate([
            'destination_1' => 'required',
            'destination_2' => 'required',
            'distance' => 'required',
        ]);

        Routes::create($formFields);


        // dd($request->all());
        return redirect()->route('admin-routes');
    }

    // edit route
    public function edit($id) {
        $route = Routes::find($id);

        if($route) {
            return view('admin_user/transport_routes/edit_route', [
                'route' => Routes::find($id)
            ]);
        } else {
            abort('404');
        }
        
    }

        // update route
        public function update(Request $request, Routes $route) {
            $formFields = $request->validate([
                'destination_1' => 'required',
                'destination_2' => 'required',
                'distance' => 'required',
            ]);
    
            $route->update($formFields);
    
    
            // dd($request->all());
            return back();
        }
}
