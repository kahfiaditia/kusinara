<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogModel;
use Illuminate\Http\Request;
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
        $result = DB::select('SELECT title, deskripsi, image FROM blog WHERE id = (SELECT MAX(id) FROM blog)');

        if (!empty($result)) {
            $result[0]->deskripsi = Str::limit($result[0]->deskripsi, 150);
        }

        $data = [
            'title' => $this->title,
            'menu' => 'List ' . $this->title,
            'blog' => BlogModel::all(),
            'baru' => $result,
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
