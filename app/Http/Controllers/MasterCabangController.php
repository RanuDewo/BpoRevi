<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterCabangController extends Controller
{

    public function index()
    {
        $m = DB::table('master_cabang')->get();
        return view('mastercabang.index', compact('m'));
    }

    public function create()
    {
        //
    }
 

    public function store(Request $request)
    {
        $count = DB::table('tbl_count')->first();
        DB::table('tbl_count')->where('id', $count->id)->update(
            ['id' => $count->id + 1]
        );
        $count2 = DB::table('tbl_count')->first();
        $kode = 'CB000' . $count2->id;
        DB::table('master_cabang')->insert(
            [
                'nama_cabang' => $request->nama,
                'lat' => $request->lat,
                'longT' => $request->long,
                'kode_cabang' => $kode ,
            ]
        );
        return redirect()->back()->with('simpan', 'ppp');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        // echo $id;
        // die();
        $m = DB::table('master_cabang')->where('id', $id)->first();
        return view('mastercabang.edit', compact('m'));
    }


    public function update(Request $request)
    {
        $m = DB::table('master_cabang')->where('id', $request->id)->update(
            [
                'nama_cabang' => $request->nama,
                'lat' => $request->lat,
                'long' => $request->long

            ]
        );
        return redirect()->back()->with('update' , 'pp');
    }


    public function destroy($id)
    {
        DB::table('master_cabang')->where('id', $id)->delete();
        return redirect()->back()->with('hapus', 'pp');
    }
}
