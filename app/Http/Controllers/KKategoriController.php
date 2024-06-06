<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class KKategoriController extends Controller
{
    protected $title = 'kategori';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = KategoriModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'lists' => $list
        ];
        return view('admin.kategori.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = KategoriModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'tambah ' . $this->title,
            'lists' => $list
        ];
        return view('admin.kategori.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'status1' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new KategoriModel();
            $store->nama = $request->nama;
            $store->user_create = Auth::user()->id;
            $store->aktif = $request->status1;
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/kategori');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::addAlert(false);
            return back();
        }
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
        $id_decrypt = Crypt::decryptString($id);
        $list = KategoriModel::findOrFail($id_decrypt);
        $data = [
            'title' => $this->title,
            'menu' => 'tambah ' . $this->title,
            'lists' => $list
        ];
        return view('admin.kategori.edit')->with($data);
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
        $validated = $request->validate([
            'nama' => 'required',
            'status1' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = KategoriModel::findOrFail($id);
            $store->nama = $request->nama;
            $store->user_create = Auth::user()->id;
            $store->aktif = $request->status1;
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/kategori');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::addAlert(false);
            return back();
        }
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
