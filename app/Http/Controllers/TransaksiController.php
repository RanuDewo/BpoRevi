<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{

    public function index()
    {
        $t = Transaksi::all();
        return view('transaksi.input_prospek', compact('t'));
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
        $no_trans = 'REV000' . $count2->id;
        // echo $no_trans;
        echo $count2->id;
        $t = Transaksi::create([
            'no_trans' => $no_trans,
            'nama' => $request->nama,
            'nama_lengkap' => $request->nama_lengkap,
            'cdate' => Date('Y-m-d H:i:s'),
            'type' => 1 ,
            'nobpkb' => $request->nobpkb,
            'merek' => $request->merek,
            'phone' => $request->phone,
            'userid' => Auth::user()->id
        ]);
        DB::table('trans_detail')->insert([
            'id_trans' => $t->id,
            'cdate' => Date("Y-m-d H:i:s"),
            'aksi'=> 1 ,
            'status' => 1
        ]);
        return redirect()->back()->with('simpan' , 'pp');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
