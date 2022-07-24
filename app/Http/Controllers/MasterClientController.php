<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterClientController extends Controller
{
    public function index()
    {
        $m = DB::table('master_client')->get();
        return view('masterclient.index', compact('m'));
    }

    public function store(Request $request)
    {
        DB::table('master_client')->insert([
            'nama_client' => $request->nama_client,
            'alamat' => $request->alamat,
            'kode' => $request->kode
        ]);


        return redirect()->back()->with('simpan', 'ppp');;
    }

    public function destroy($id)
    {
        DB::table('master_client')->where('id', $id)->delete();
        return redirect()->back()->with('hapus', 'pp');;
    }

    public function edit($id)
    {
        // echo $id;
        // die();
        $m = DB::table('master_client')->where('id', $id)->first();
        return view('masterclient.edit', compact('m'));
    }

    public function update(Request $request)
    {
        DB::table('master_client')->where('id', $request->id)->update([
            'nama_client' => $request->nama_client,
            'alamat' => $request->alamat
        ]);
        return redirect()->back()->with('update', 'pp');
    }
}
