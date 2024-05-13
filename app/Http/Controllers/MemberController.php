<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\MemberModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    protected $title = 'member';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = MemberModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'lists' => $list
        ];
        return view('admin.member.list')->with($data);
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
        return view('admin.member.create')->with($data);
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
            'name' => 'required',
            'address' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new MemberModel();
            $store->name = $request->name;
            $store->address = $request->address;
            // upload file
            if ($request->file()) {
                $file = $request->file('image');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->image = $fileName;
                $file->move(public_path('files/member'), $fileName);
            }
            $store->join = $request->join;
            $store->status = $request->type;
            $store->user_create = Auth::user()->id;
            $store->aktif = '1';
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('admin/member');
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
            'data' => MemberModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('admin.member.edit')->with($data);
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
            'name' => 'required',
            'address' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $update = MemberModel::findorfail($id);
            $update->name = $request->name;
            $update->address = $request->address;
            // upload file
            if ($request->file()) {
                $file = $request->file('image');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->image = $fileName;
                $file->move(public_path('files/member'), $fileName);
            }
            $update->join = $request->join;
            $update->status = $request->type;
            $update->aktif = isset($request->status) ? 1 : 0;
            $update->user_update = Auth::user()->id;
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            return redirect('admin/member');
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
            $destroy = MemberModel::findorfail($id);
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
