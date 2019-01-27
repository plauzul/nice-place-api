<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('cors');
        // $this->middleware('jwt.auth');
    }

    /**
     * Retorno todos os posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Post::all();
    }

    /**
     * Crio novo post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $dados = $request->all();

        $img = Storage::put('public/posts', $dados['img']);

        $dados['img'] = url(Storage::url($img));

        Post::create($dados);

        return response()->json(['status' => 'ok']);
    }

    /**
     * Retorno meus posts e dos meus amigos, com base no meu id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return DB::select("(SELECT posts.* FROM posts WHERE id_user IN (SELECT id_friend FROM friends WHERE id_user = '".$id."')) UNION (SELECT posts.* FROM posts WHERE id_user IN (SELECT id FROM users WHERE id = '".$id."'))");
    }

    /**
     * Atualizo um post
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {
        foreach ($request->all() as $key => $value) {
            $post->$key = $value;
        }

        $post->save();

        return response()->json(['status' => 'ok']);
    }

    /**
     * Excluo certo post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Post::destroy($id);

        return response()->json(['status' => 'ok']);
    }
}
