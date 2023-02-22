<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratTolakController extends Controller
{
    public function index($id)
    {
        return view('surat-balasan.tolak');
    }
}
