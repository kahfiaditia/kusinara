<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\AboutModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutUsController extends Controller
{
    protected $title = 'about';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'lists' => AboutModel::all()
        ];
        return view('admin.about.list')->with($data);
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
            'menu' => 'add ' . $this->title,
        ];
        return view('admin.about.create')->with($data);
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
            'title' => 'required',
            'deskripsi' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new AboutModel();
            // upload file
            if ($request->file()) {
                $file = $request->file('image');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->image = $fileName;
                $file->move(public_path('files/about'), $fileName);
            }
            $store->title = $request->title;
            $store->deskripsi = $request->deskripsi;
            $store->user_create = Auth::user()->id;
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/about');
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
            'data' => AboutModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('admin.about.edit')->with($data);
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
            'title' => 'required',
            'deskripsi' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $id = Crypt::decryptString($id);
            $update =  AboutModel::findorfail($id);
            $update->title = $request->title;
            $update->deskripsi = $request->deskripsi;
            // upload file
            if ($request->file()) {
                $file = $request->file('image');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->image = $fileName;
                $file->move(public_path('files/about'), $fileName);
            }
            $update->user_update = Auth::user()->id;
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/about');
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
            $destroy = AboutModel::findorfail($id);
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
