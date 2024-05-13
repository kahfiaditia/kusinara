<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    protected $title = 'Setting';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => $this->title,
            'menu' => 'List ' . $this->title,
            'list' => SettingModel::all()
        ];
        return view('admin.setting.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $this->title,
            'menu' => 'menu ' . $this->title,
        ];
        return view('admin.setting.create')->with($data);
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
            'address' => 'required',
            'email' => 'required',
            'call' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $setting = new SettingModel();
            $setting->address = $request->address;
            $setting->email = $request->email;
            $setting->call = $request->call;
            $setting->youtube = $request->youtube;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->legalitas = $request->legalitas;
            $setting->save();

            DB::commit();
            AlertHelper::alertDinamis(true, 'Berhasil Disimpan');
            return redirect('admin/setting');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::alertDinamis(false, 'Gagal Disimpan');
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
        $data = [
            'title' => $this->title,
            'menu' => 'rubah ' . $this->title,
            'data' => SettingModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('admin.setting.edit')->with($data);
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
            'apps' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'address' => 'required',
            'email' => 'required',
            'call' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $setting = SettingModel::findorfail(Crypt::decryptString($id));
            $setting->apps = $request->apps;
            $setting->kecamatan = $request->kecamatan;
            $setting->kota = $request->kota;
            $setting->provinsi = $request->provinsi;
            $setting->address = $request->address;
            $setting->email = $request->email;
            $setting->call = $request->call;
            $setting->youtube = $request->youtube;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->legalitas = $request->legalitas;
            $setting->user_update = Auth::user()->id;
            $setting->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/setting');
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
        DB::beginTransaction();
        try {
            $id = Crypt::decryptString($id);
            $destroy = SettingModel::findorfail($id);
            $destroy->delete();

            DB::commit();
            AlertHelper::deleteAlert(true);
            return back();
        } catch (\Throwable $err) {
            DB::rollBack();
            AlertHelper::deleteAlert(false);
            return back();
        }
    }
}
