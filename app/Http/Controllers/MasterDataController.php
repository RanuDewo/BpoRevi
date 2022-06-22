<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterDataController extends Controller
{
    public function index()
    {
        $m = DB::table('master_data')->get();
        return view('masterdata.index', compact('m'));
    }

    public function store(Request $request)
    {
        DB::table('master_data')->insert([
            'nama' => $request->nama,
            'flag' => $request->flag
        ]);
        return redirect()->back()->with('simpan' , 'pp');
    }

    public function destroy($id)
    {
        DB::table('master_data')->where('id', $id)->delete();
        return redirect()->back()->with('hapus', 'pp');
    }

    public function edit($id)
    {
        $m = DB::table('master_data')->where('id', $id)->first();
        return view('masterdata.edit', compact('m'));
    }
    public function update(Request $request)
    {
        $m = DB::table('master_data')->where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'flag' => $request->flag
            ]
        );
        return redirect()->back()->with('update' , 'pp');
    }
}
