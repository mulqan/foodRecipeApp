<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Menampilkan semua resep berdasarkan search
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Menampilkan halaman tambah resep
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Tampilkan halaman edit resep
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
      // code...
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
