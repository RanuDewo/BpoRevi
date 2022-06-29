<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterTadController extends Controller
{
    public function index()
    {
        $m = DB::table('users')
            ->where('username','<>','superadmin')->get();
        return view('tad.index', compact('m'));
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
            'status'   => '1',
            'flag'     => '0',
            'flag2'    => '1',
            'password' => '$2y$10$CcHEBRqPx9Wg15XL.977feNSqblsJWX6W8VkyffgwfOW9SRCdyvmK'

        ]);
        return redirect('upload_data_spg');
    }



    public function roleUser()
    {
        $m = DB::table('users')
            ->where('username','<>','superadmin')->get();
        return view('tad.index', compact('m'));
    }

    public function edit($id)
    {
        $m = DB::table('users')->where('id', $id)->first();
        $cabang  =  DB::table('master_cabang')->get();
        $area    =  DB::table('master_area')->get();
        return view('tad.edit', ['m'=>$m,'cabang'=>$cabang,'area'=>$area]);
    }


    public function update(Request $request)
    {
        $m = DB::table('users')->where('id', $request->id)->update(
            [
                'status' => $request->flag
            ]
        );

        DB::table('maps_users')->insert([
            'id_user_parent'      => $request->id,
            'id_user_child'       => $request->id,
            'id_cabang'           => $request->cabang,
            'id_area'             => $request->area,

        ]);

        return redirect('upload_data_spg');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('upload_data_spg');
    }

   
}
