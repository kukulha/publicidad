<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Stage;
use App\Cat;
use App\Directory;

class PagesController extends Controller
{
    public function index()
    {
    	//inicio
    	$stage = Stage::where('slug' , 'inicio')->pluck('id');
    	$initial = Service::where('stage_id', $stage)->paginate();

    	//Personalizar
    	$stage1 = Stage::where('slug' , 'personalizacion')->pluck('id');
    	$customize = Service::where('stage_id', $stage1)->paginate();
    	//Promocionar
    	$stage2 = Stage::where('slug' , 'promocion')->pluck('id');
    	$promotion = Service::where('stage_id', $stage2)->paginate();
    	//Proyectos
    	$stage3 = Stage::where('slug' , 'proyectos')->pluck('id');
    	$project = Service::where('stage_id', $stage3)->paginate();

    	return view('index', compact('initial', 'customize', 'promotion', 'project'));
    }

    public function directory()
    {
        $cats = Cat::orderBy('id', 'DESC')->paginate();
        $directories = Directory::orderBy('name', 'DESC')->paginate();
        return view('web.directory', compact('cats', 'directories'));
    }

    public function cat($slug)
    {
        $cats = Cat::orderBy('id', 'DESC')->paginate();
        $cat = Cat::where('slug', $slug)->pluck('id')->first();
        $directories = Directory::where('cat_id' , $cat)->orderBy('name', 'DESC')->paginate();
        return view('web.directory', compact('cats', 'directories'));
    }

    public function admin()
    {
    	return view('admin.index');
    }
}
