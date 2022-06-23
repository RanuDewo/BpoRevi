<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterAreaCotroller extends Controller
{
    public function index()
    {
        $m = DB::table('master_area')->get();
        return view('masterarea.index', compact('m'));
    }

    public function store(Request $request)
    {
        DB::table('master_area')->insert(
            [
                'nama_area' => $request->nama
            ]
        );
        return redirect()->back()->with('simpan', 'ppp');
    }

    public function destroy($id)
    {
        DB::table('master_area')->where('id', $id)->delete();
        return redirect()->back()->with('hapus', 'pp');
    }

    public function edit($id)
    {
        $m = DB::table('master_area')->where('id', $id)->first();
        return view('masterarea.edit', compact('m'));
    }

    public function update(Request $request)
    {
        $m = DB::table('master_area')->where('id', $request->id)->update(
            [
                'nama_area' => $request->nama,
            ]
        );
        return redirect()->back()->with('update', 'pp');
    }
}
