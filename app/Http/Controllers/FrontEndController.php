<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\GaleryModel;
use App\Models\SettingModel;
use App\Models\SlidersModel;
use Illuminate\Support\Facades\Crypt;

class FrontEndController extends Controller
{
    public function index()
    {
        $data = [
            'sliders' => SlidersModel::where('aktif', 1)->get(),
            'blog' => BlogModel::where('aktif', 1)->get(),
            'galery' => GaleryModel::where('aktif', 1)->get(),
            'setting' => SettingModel::where('id', 1)->get(),
        ];
        return view('index')->with($data);
    }

    public function galery($id)
    {
        $id = Crypt::decryptString($id);
        $data = [
            'galery' => GaleryModel::where('id', $id)->get(),
            'setting' => SettingModel::where('id', 1)->get(),
        ];
        return view('galery')->with($data);
    }

    public function about()
    {
        $data = [
            'setting' => SettingModel::where('id', 1)->get(),
            'about' => AboutModel::all(),
        ];
        return view('frontend.about_us')->with($data);
    }

    public function blogs()
    {
        $data = [
            'setting' => SettingModel::where('id', 1)->get(),
            'blog' => BlogModel::where('aktif', 1)->get(),
        ];
        return view('blogs')->with($data);
    }

    public function blog($id)
    {
        $id = Crypt::decryptString($id);
        $data = [
            'setting' => SettingModel::where('id', 1)->get(),
            'blog' => BlogModel::where('id', $id)->get(),
        ];
        return view('blog')->with($data);
    }
}
