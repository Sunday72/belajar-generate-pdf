<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class SuratTerimaController extends Controller
{
    public function index($id)
    {
        $current_date = Carbon::now()->format('d F Y');
        return view('surat-balasan.terima', compact('current_date'));
    }

    public function create()
    {
        $component = request()->all();

        return view('surat-balasan.surat_balasan', compact('component'));
        // $pdf = PDF::loadview('surat-balasan/surat_balasan');
        // return $pdf->stream();
    }
}
