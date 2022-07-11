<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterApiController extends Controller
{

    public function getdata(Request $request)
    {

        $id =  $request->id;
        $data = DB::table('trans')->where('userid',$id)->get();

        $data = json_encode($data) ; 

        return $data ; 

    }

    public function login(Request $request)
    {
        $pass =  $request->password;
        $password = sha1($pass);

        $data = DB::table('users')
                ->where('username', $request->username)
                ->where('password',$password)->first();

    //    echo "<pre>" ; 
    //    print_r($data) ;

       if ($data){
        $dt = array(
            'status'  => '200',
            'message' => 'true',
            'user_id' => $data->id, 
          ); 
       
       }else{
        $dt = array(
            'status'  => '500',
            'message' => 'false',
            'user_id' => ''

         ); 
       }

       $dt  = json_encode($dt) ; 
       return $dt ;

    }


    public function saveProspek(Request $request)
    {

        //echo "halo" ;
        $data = DB::table('tbl_count')->first() ; 
        $jum   = $data->id ;
        $jum++ ;
        $tgl   = date('Y-m-d H:s');
        
        $no   = "REV00" . $jum ; 
        //echo $no ;
        DB::table('trans')->insert([
            'no_trans'     => $no,
            'nama'         => $request->nama,
            'nama_lengkap' => $request->nama,
            'phone'        => $request->phone,
            'userid'       => $request->user_id,
            'cdate'        => $tgl ,
            'type'         => '0',
            'nobpkp'       => '',
            'merek'         => ''
        ]);

        $dt  = array(
                      'status'  => '200' ,
                      'message' => 'data berhasil disave' 
        );

        //
        $dataTrans = DB::table('trans')->where('no_trans',$no)->first() ; 


        DB::table('trans_detail')->insert([
            'id_trans'      => $dataTrans->id,
            'cdate'        => $tgl ,
            'aksi'         => '0',
            'status'       => '1'
        ]);
        



        $m = DB::table('tbl_count')->update(
            [
                'id' => $jum,
            ]
        );
        $dt  = json_encode($dt) ;
        return $dt ;
    }

}