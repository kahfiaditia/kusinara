<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class KUtamaController extends Controller
{
    protected $title = 'utama';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baru = BlogModel::orderBy('id', 'desc')->limit(3)->get();
        $data = [
            'title' => $this->title,
            'menu' => 'List ' . $this->title,
            'baru' =>  $baru,
            'pendidikan' => BlogModel::where('id_kategori', 1)->get(),
            'politik' => BlogModel::where('id_kategori', 3)->get(),
            'sosials' => BlogModel::where('id_kategori', 2)->get(),
        ];

        return view('utama.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $id_decrypt = Crypt::decryptString($id);
        $pinggir = BlogModel::orderBy('id', 'desc')->limit(3)->get();
        $data = [
            'title' => $this->title,
            'menu' => 'Detil ' . $this->title,
            'detils' => BlogModel::findOrFail($id_decrypt),
            'news' => $pinggir
        ];

        return view('lihat')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
