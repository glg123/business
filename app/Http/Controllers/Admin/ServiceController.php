<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();

        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'service_title'=> 'required',
            'service_description'=> 'required',
            'service_icon'=> 'required',



        ];

        $this->validate($request, $rules);


        $blog = Service::create([
            'service_title' => $request->get('service_title'),
            'service_description' => $request->get('service_description'),
            'service_icon' => $request->get('service_icon'),

        ]);


        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::findOrFail($id);
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service=Service::findOrFail($id);
        $rules = [
            'service_title'=> 'sometimes|required',
            'service_description'=> 'sometimes|required',
            'service_icon'=> 'sometimes|required',


        ];

        $this->validate($request, $rules);


        $service = $service->update([
            'service_title' => $request->get('service_title'),
            'service_description' => $request->get('service_description'),
            'service_icon' => $request->get('service_icon'),

        ]);


        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.services.index');
    }
}
