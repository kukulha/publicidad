<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Service;
use App\Stage;

class ServiceController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')->paginate();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $stages = Stage::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('admin.services.create', compact('stages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ServiceStoreRequest     $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStoreRequest $request)
    {
        $service = Service::create($request->all());
        //Imagenes
        if ($request->file('file')) {
            
            $service->file = $request->file('file')->store('public');
            $service->save();
        }
        if ($request->file('file2')) {
            
            $service->file2 = $request->file('file2')->store('public');
            $service->save();
        }

        return redirect()->route('services.index')->with('info', 'Servicio Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stages = Stage::orderBy('name', 'DESC')->pluck('name', 'id');
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('stages', 'service'));
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
        $service = Service::findOrFail($id);
        $service->fill($request->all())->save();
        //Imagenes
        if ($request->file('file')) {
            
            $service->file = $request->file('file')->store('public');
            $service->save();
        }
        if ($request->file('file2')) {
            
            $service->file2 = $request->file('file2')->store('public');
            $service->save();
        }

        return redirect()->route('services.index')->with('info', 'Servicio Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        return redirect()->route('services.index')->with('info', 'Servicio Eliminado Correctamente');
    }
}
