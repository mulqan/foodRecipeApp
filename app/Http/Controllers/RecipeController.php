<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Like;

class RecipeController extends Controller
{
    /**
     * Menampilkan halaman tambah resep
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep-tambah');
    }

    /**
     * Menyimpan resep
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Tampilkan halaman sebuah resep berdasarkan id resep
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
      $posts = new Post;
      $posts = Post::where('id','=', $post_id)->get();
      $likePost = Post::find($post_id);
      $likeCtr = Like::where(['post_id' => $likePost->id])->count();
      //return $likeCtr;
      //exit();
      $categories = Category::all();
      return view('resep-tampil', ['posts' => $posts, 'categories' => $categories, 'likeCtr' => $likeCtr]);
    }

    /**
     * Tampilkan halaman edit resep
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('resep-edit');
    }

    /**
     * Update resep
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Hapus resep berdasarkan id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Like resep berdasarkan id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function like($id)
    {
      $loggedin_user = Auth::user()->id;
      $like_user = Like::where(['user_id' => $loggedin_user,'post_id' => $id])->first();
      if(empty($like_user->user_id)){
        $user_id = Auth::user()->id;
        $email = Auth::user()->email;
        $post_id = $id;
        $like = new Like;
        $like->user_id = $user_id;
        $like->email = $email;
        $like->post_id = $post_id;
        $like->save();
        return redirect("/view/{$id}");

      } else {
        return redirect("/view/{$id}");
      }
    }

    /**
     * Mendapatkan list nama bahan yang mempunyai bagian seperti $string
     *
     * @param  string  $string
     * @return \Illuminate\Http\Response
     */

    public function getBahan($string)
    {
      // code...
    }
}
