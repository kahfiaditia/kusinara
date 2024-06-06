<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\BlogModel;
use App\Models\KategoriModel;
use App\Models\SettingModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $title = 'blog';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = BlogModel::all();

        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'setting' => SettingModel::where('id', 1)->get(),
            'lists' => $list

        ];
        return view('admin.blog.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategories = KategoriModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'add ' . $this->title,
            'setting' => SettingModel::where('id', 1)->get(),
            'kategori' => $kategories
        ];
        return view('admin.blog.create')->with($data);
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
            'kategori' => 'required',
            'title' => 'required',
            'deskripsi' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new BlogModel();
            $store->id_kategori = $request->kategori;
            $store->title = $request->title;
            $store->deskripsi = $request->deskripsi;
            // upload file
            if ($request->file()) {
                $file = $request->file('image');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->image = $fileName;
                $file->move(public_path('files/blog'), $fileName);
            }
            $store->user_create = Auth::user()->id;
            $store->aktif = '1';
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/blog');
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
        $data = [
            'title' => $this->title,
            'menu' => 'edit ' . $this->title,
            'setting' => SettingModel::where('id', 1)->get(),
            'data' => BlogModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('admin.blog.edit')->with($data);
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
        $id = Crypt::decryptString($id);
        $validated = $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $update = BlogModel::findorfail($id);
            $update->title = $request->title;
            $update->deskripsi = $request->deskripsi;
            // upload file
            if ($request->file()) {
                $file = $request->file('image');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->image = $fileName;
                $file->move(public_path('files/blog'), $fileName);
            }
            $update->aktif = isset($request->status) ? 1 : 0;
            $update->user_update = Auth::user()->id;
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            return redirect('admin/blog');
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
            $destroy = BlogModel::findorfail($id);
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
