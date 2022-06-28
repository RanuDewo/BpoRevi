<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapingAreaController extends Controller
{
    public function index()
    {

        $users = DB::table('maps_area')
            ->select('nama_area', 'nama_cabang')
            ->join('master_cabang', 'maps_area.id_cabang', '=', 'master_cabang.id')
            ->join('master_area', 'maps_area.id_area', '=', 'master_area.id')
            ->get();
        // $m = DB::table('users')->get();
        // return view('tad.index', compact('m'));

        echo "<pre>" ; 
        print_r($users) ;
    }

    public function create()
    {
        return view('masterdata.create');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name'     => $request->nama,
            'username' => $request->username,
            'email'    => $request->email,
            'status'   => '0',
            'flag'     => '0',
            'flag2'    => '1',
            'password' => '$2y$10$CcHEBRqPx9Wg15XL.977feNSqblsJWX6W8VkyffgwfOW9SRCdyvmK'

        ]);
        $m = DB::table('users')->get();
        return view('tad.index', compact('m'));
    }

   
}
