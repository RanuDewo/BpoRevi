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
       // echo $id . "-";
        $data = DB::table('trans')->where('userid',$id)->get();
        $jumx    = count($data);
        if ($jumx > 0 ){
            $jum    = count($data);
            $jum-- ; 
            $dt   = array(
                'status'  => '200',
                'message' => 'sukses'     
                );
            for ($x = 0; $x <= $jum; $x++) {
                   $dtt  = array(
                                  'id'            => $data[$x]->id ,
                                  'no_trans'      => $data[$x]->no_trans,
                                  'nama'          => $data[$x]->nama,
                                  'cdate'         => $data[$x]->cdate ,
                                  'nama_lengkap'  => $data[$x]->nama_lengkap,
                                  'type'          => $data[$x]->type,
                                  'nobpkp'        => $data[$x]->nobpkp ,
                                  'merek'         => $data[$x]->merek,
                                  'phone'         => $data[$x]->phone,
                                  'userid'        => $data[$x]->userid ,
                                  'status'        => $data[$x]->status,
                                
                   );
    
                   $dt['Data'][]= $dtt;
            }
        }else{
            $dt   = array(
                'status'  => '200',
                'message' => 'no data'     
                );
            $dtt = array();     
            $dt['Data'][]= $dtt;
        }
        
        
        $data = json_encode($dt) ;  
        return $dt ; 


    }

    public function getMasterData(){
        $data = DB::table('master_data')
                ->join('cat_sc', 'master_data.flag', '=', 'cat_sc.id')->get();
                $jum    = count($data);
                $jum-- ; 
                $dt   = array(
                    'status'  => '200',
                    'message' => 'sukses'     
                    );
                for ($x = 0; $x <= $jum; $x++) {
                       $dtt  = array(
                                      'id'      => $data[$x]->id ,
                                      'nama'    => $data[$x]->nama,
                                      'flag'    => $data[$x]->flag ,
                                      'namaSc'  => $data[$x]->namaSc,
                                    
                       );
        
                       $dt['Data'][]= $dtt;
                }
                
                $data = json_encode($dt) ;  
                return $dt ; 
    }

    public function login(Request $request)
    {
        $pass =  $request->password;
        $password = sha1($pass);
        $token    = uniqid();
        // echo uniqid();

        // die() ;
        $data = DB::table('users')
                ->where('username', $request->username)
                ->where('password',$password)->first();

        

       if ($data){
        $m = DB::table('users')->where('username', $request->username)->update(
            [
                'token' => $token
            ]
        );
        $dt = array(
            'status'  => '200',
            'message' => 'true',
            'user_id' => $data->id, 
            'token'   => $token
          ); 
       
       }else{
        $dt = array(
            'status'  => '500',
            'message' => 'false',
            'user_id' => '',
            'token'   => ''

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
            'merek'         => '',
            'status'        => '1',
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
            'aksi'         => $request->sumber_data,
            'status'       => '1',
            'reason'       => '',
        ]);
        



        $m = DB::table('tbl_count')->update(
            [
                'id' => $jum,
            ]
        );
        $dt  = json_encode($dt) ;
        return $dt ;
    }

    public function getdataDetail(Request $request)
    {

        $id =  $request->id;
        $data = DB::table('trans')->where('no_trans', $request->noTrans)
                ->join('cat_trans', 'trans.status', '=', 'cat_trans.id')
               ->first();

        //$jumx    = count($data);
        if ($data){
            // $jum    = count($data);
            // $jum-- ; 
            $dt   = array(
                'status'  => '200',
                'message' => 'sukses'     
                );
        
                   $dtt  = array(
                                  'id'            => $data->id ,
                                  'no_trans'      => $data->no_trans,
                                  'nama'          => $data->nama,
                                  'cdate'         => $data->cdate ,
                                  'nama_lengkap'  => $data->nama_lengkap,
                                  'type'          => $data->type,
                                  'nobpkp'        => $data->nobpkp ,
                                  'merek'         => $data->merek,
                                  'phone'         => $data->phone,
                                  'userid'        => $data->userid ,
                                  'status'        => $data->status,
                                  'namaCat'       => $data->namaCat,
                                
                   );
    
            $dt['Data'][]= $dtt;
            
        }else{
            $dt   = array(
                'status'  => '200',
                'message' => 'no data'     
                );
            $dtt = array();     
            $dt['Data'][]= $dtt;
        }
       
        
        
        $data = json_encode($dt) ;  
        return $dt ; 
        
        // $data = json_encode($dt) ;  
        // return $dt ;  

    }

    public function updateProspek(Request $request){
        $tgl   = date('Y-m-d H:s');
        if ($request->status== '2'){
            // 2 order
            $m = DB::table('trans')->where('no_trans', $request->noTrans)->update(
                [
                    'status' => '2'
                ]
            );

            //
            $dataT = DB::table('trans')->where('no_trans', $request->noTrans)->first();
         
            DB::table('trans_detail')->insert([
                'id_trans'      => $dataT->id,
                'cdate'         => $tgl ,
                'aksi'          => $request->status,
                'status'        => '2',
                'reason'        => $request->reason
            ]);

        }elseif  ($request->status== '4'){
            // 4 cancel
            $m = DB::table('trans')->where('no_trans', $request->noTrans)->update(
                [
                    'status' => '4'
                ]
            );
            
            $dataT = DB::table('trans')->where('no_trans', $request->noTrans)->first();
            DB::table('trans_detail')->insert([
                'id_trans'      => $dataT->id,
                'cdate'         => $tgl ,
                'aksi'          => $request->status,
                'status'        => '4',
                'reason'        => $request->reason
            ]);

        }elseif  ($request->status== '5'){
            // 4 cancel
            $m = DB::table('trans')->where('no_trans', $request->noTrans)->update(
                [
                    'status' => '5'
                ]
            );
            
            $dataT = DB::table('trans')->where('no_trans', $request->noTrans)->first();
            DB::table('trans_detail')->insert([
                'id_trans'      => $dataT->id,
                'cdate'         => $tgl ,
                'aksi'          => $request->status,
                'status'        => '5',
                'reason'        => $request->reason
            ]);

        }elseif  ($request->status== '6'){
            // 4 cancel
            $m = DB::table('trans')->where('no_trans', $request->noTrans)->update(
                [
                    'status' => '6'
                ]
            );
            
            $dataT = DB::table('trans')->where('no_trans', $request->noTrans)->first();
            DB::table('trans_detail')->insert([
                'id_trans'      => $dataT->id,
                'cdate'         => $tgl ,
                'aksi'          => $request->status,
                'status'        => '6',
                'reason'        => $request->reason
            ]);

        }

        
        $dt  = array(
            'status'  => '200' ,
            'message' => 'data berhasil diupdate' 
        );

        $data = json_encode($dt) ; 
        
        return $data ; 

    }

    public function getTrans(){
        $data = DB::table('cat_trans')->get();
        $jum    = count($data);
        $jum-- ; 
        $dt   = array(
            'status'  => '200',
            'message' => 'sukses'     
            );
        for ($x = 0; $x <= $jum; $x++) {
               $dtt  = array(
                              'id'      => $data[$x]->id ,
                              'namaCat'  => $data[$x]->namaCat,
                            
               );

               $dt['Data'][]= $dtt;
        }
        
        $data = json_encode($dt) ;  
        return $dt ; 
    }

    public function getSc(){
        $data = DB::table('cat_sc')->get();
    
        $jum    = count($data);
        $jum-- ; 
        $dt   = array(
            'status'  => '200',
            'message' => 'sukses'     
            );
        for ($x = 0; $x <= $jum; $x++) {
               $dtt  = array(
                              'id'      => $data[$x]->id ,
                              'namaSc'  => $data[$x]->namaSc,
                            
               );

               $dt['Data'][]= $dtt;
        }
        
        $data = json_encode($dt) ;  
        return $dt ; 
    }

}