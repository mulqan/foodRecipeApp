<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  /**
   * Menampilkan halaman beranda
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
      return view('welcome');
    }

    /**
     * Menampilkan halaman dashboard user
     *
     * @return \Illuminate\Http\Response
     */
      public function dashboard()
      {
        return view('dashboard');
      }
    //   Mengaktifkan search
    public function paginate(Request $request)
    {
        $this->validate($request, [
            'limit' => 'integer',
        ]);
        $users = Resep::when($request->keyword, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->keyword}%")
                ->orWhere('bahan', 'like', "%{$request->keyword}%");
        })->paginate($request->limit);
        $users->appends($request->only('keyword', 'limit'));
        return view('resep.paginate', compact('resep'));
    }
}
