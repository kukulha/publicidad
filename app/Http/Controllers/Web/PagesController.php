<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Stage;
use App\Cat;
use App\Category;
use App\Directory;
use App\Post;
use App\Message;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;
use App\Libraries\GoogleAnalytics;

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
        $directories = Directory::orderBy('name', 'ASC')->paginate();
        return view('web.directory', compact('cats', 'directories'));
    }

    public function cat($slug)
    {
        $cats = Cat::orderBy('id', 'DESC')->paginate();
        $cat = Cat::where('slug', $slug)->pluck('id')->first();
        $directories = Directory::where('cat_id' , $cat)->orderBy('name', 'ASC')->paginate();
        return view('web.directory', compact('cats', 'directories'));
    }

    public function blog()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate();
        $posts = Post::orderBy('id', 'DESC')->paginate();
        return view('web.posts', compact('posts', 'categories'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }

    public function category($slug)
    {
        $categories = Category::orderBy('id', 'DESC')->paginate();
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)->orderBy('id', 'DESC')->paginate();
        return view('web.posts', compact('posts', 'categories'));
    }

    public function gracias()
    {
        return view('web.gracias');
    }

    public function admin()
    {
        $messages = Message::orderBy('id' ,'DESC')->paginate();
        $services = Service::orderBy('id', 'DESC')->paginate();
        $posts = Post::orderBy('id', 'DESC')->paginate();
        $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1));
    	return view('admin.index', compact('messages', 'services', 'posts', 'analyticsData'));
    }
}
