<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function storeExcel(Request $request)
    {
        $fileName = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {

            $file = fopen($fileName, "r");
            $id = NULL ;
            while (($column = fgetcsv($file, 10000, ";")) !== FALSE) {

                echo $column[0] . "-" ;
                if ($column[0] == "username"){

                }else{

                }
                DB::table('users')->insert([
                    'username' => $column[0],
                    'name' => $column[1],
                    'email' => $column[2],
                    'password' => Hash::make("12345678"),
                    'cdate' => Date("Y-m-d H:i:s"),
                    'status' => 5,
                    'flag' => 1,
                    'flag2' => 1,
                    'token' => ''
                    ]); 

            }

        }
    }

   
}
