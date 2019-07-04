<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Post;
use App\Category;

class PostController extends Controller
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
        $posts = Post::orderBy('id','DESC')->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('admin.posts.create', compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());
        //Imagenes
        if ($request->file('file')) {
            
            $post->file = $request->file('file')->store('public');
            $post->save();
        }
        if ($request->file('file2')) {
            
            $post->file2 = $request->file('file2')->store('public');
            $post->save();
        }
        return redirect()->route('posts.index')->with('info', 'Articulo creado correctamente');
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
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->fill($request->all())->save();
        //Imagenes
        if ($request->file('file')) {
            
            $post->file = $request->file('file')->store('public');
            $post->save();
        }
        if ($request->file('file2')) {
            
            $post->file2 = $request->file('file2')->store('public');
            $post->save();
        }
        return redirect()->route('posts.index')->with('info', 'Articulo editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index')->with('info', 'Articulo eliminado correctamente');

    }
}
