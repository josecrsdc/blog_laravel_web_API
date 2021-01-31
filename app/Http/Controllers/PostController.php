<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);

        // $this->middleware(['auth', 'roles:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        // return redirect()->route('inicio');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50'
        ]);

        $user = User::inRandomOrder()->first();
        $post = new Post();

        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;

        $post->user_id = $user->id;

        $post->save();

        return redirect()->route('post.show', $post);

        // Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $date = $post->created_at;
        $fecha = formatoFecha($date);
        $hora = formatoHora($date);
        $comentarios = Comentario::where('post_id', $id)->get();

        return view('posts.show', compact('post', 'fecha', 'hora', 'comentarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
        // return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50'
        ]);

        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;

        $post->save();

        return redirect()->route('post.show', $post);
        // Post::findOrFail($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comentario::where('post_id', $id)->delete();
        Post::findOrFail($id)->delete();

        return redirect()->route('post.index');
    }


    // public function nuevoPrueba()
    // {
    //     $numAleatorio = rand();
    //     $titulo = "Post $numAleatorio";
    //     $contenido = "Contenido $numAleatorio";

    //     $post = new Post();
    //     $post->titulo = $titulo;
    //     $post->contenido = $contenido;
    //     $post->user_id = 1;
    //     $post->save();

    //     $posts = Post::get();
    //     return redirect()->route('post.index', compact('posts'));
    // }

    // public function modificarPrueba($id)
    // {
    //     $postAModificar = Post::findOrFail($id);
    //     $postAModificar->titulo = "$postAModificar->titulo modificado";
    //     $postAModificar->save();

    //     $posts = Post::get();
    //     return redirect()->route('post.index', compact('posts'));
    // }
}
