<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterTadController extends Controller
{
    public function index()
    {
        $m = DB::table('users')->get();
        return view('tad.index', compact('m'));
    }

   
}
