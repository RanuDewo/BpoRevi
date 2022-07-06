<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MapingAreaController extends Controller
{
    public function index()
    {

        $m = DB::table('maps_area')
            ->select('nama_area', 'nama_cabang', 'id_maps_area')
            ->join('master_cabang', 'maps_area.id_cabang', '=', 'master_cabang.id')
            ->join('master_area', 'maps_area.id_area', '=', 'master_area.id')
            ->get();

        $cabang  =  DB::table('master_cabang')->get();
        $area    =  DB::table('master_area')->get();
        $c    =  DB::table('master_client')->get();

        return view('maparea.index', ['m' => $m, 'cabang' => $cabang, 'area' => $area, 'c' => $c]);
    }

    public function create()
    {
        return view('masterdata.create');
    }

    public function store(Request $request)
    {
        DB::table('maps_area')->insert([
            'id_area'     => $request->area,
            'id_cabang'   => $request->cabang,


        ]);
        return redirect('maping_area');
    }
}
