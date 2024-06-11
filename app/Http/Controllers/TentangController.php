<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    protected $title = 'tentang';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => $this->title,
            'menu' => $this->title,
        ];

        return view('tentang.index')->with($data);
    }

    public function cerpen()
    {
        $list = BlogModel::all();
        $data = [
            'title' => 'Cerpen',
            'menu' => 'Karya',
            'lists' => $list,
            'cerpen' => BlogModel::where('id_kategori', 7)->get(),
        ];

        return view('karya.cerpen')->with($data);
    }

    public function puisi()
    {
        $list = BlogModel::all();
        $data = [
            'title' => 'Puisi',
            'menu' => 'Karya',
            'lists' => $list,
            'puisi' => BlogModel::where('id_kategori', 8)->get(),
        ];

        return view('karya.puisi')->with($data);
    }

    public function pantun()
    {
        $list = BlogModel::all();
        $data = [
            'title' => 'Pantun',
            'menu' => 'Karya',
            'lists' => $list,
            'pantun' => BlogModel::where('id_kategori', 9)->get(),
        ];

        return view('karya.pantun')->with($data);
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
