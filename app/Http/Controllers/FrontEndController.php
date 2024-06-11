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
    protected $title = 'utama';

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
