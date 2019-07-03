<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DirectoryStoreRequest;
use App\Http\Requests\DirectoryUpdateRequest;
use App\Directory;
use App\Cat;

class DirectoryController extends Controller
{

    public function __contruct()
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
        $directories = Directory::orderBy('id', 'DESC')->paginate();
        return view('admin.directories.index', compact('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Cat::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('admin.directories.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DirectoryStoreRequest $request)
    {
        $directory = Directory::create($request->all());
        //Imagenes
        if ($request->file('file')) {
            
            $directory->file = $request->file('file')->store('public');
            $directory->save();
        }
        return redirect()->route('directories.index')->with('info', 'Empresa Creado Correctamente');
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
        $directory = Directory::findOrFail($id);
        $cats = Cat::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('admin.directories.edit', compact('directory', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DirectoryUpdateRequest $request, $id)
    {
                $directory = Directory::findOrFail($id);
        $directory->fill($request->all())->save();
        //Imagenes
        if ($request->file('file')) {
            
            $directory->file = $request->file('file')->store('public');
            $directory->save();
        }
        return redirect()->route('directories.index')->with('info', 'Empresa editada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Directory::findOrFail($id)->delete();
        return redirect()->route('directories.index')->with('info', 'Empresa eliminada Correctamente');
    }
}
