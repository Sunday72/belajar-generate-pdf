<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\School;
use Illuminate\Http\Request;

class SuratTerimaController extends Controller
{
    public function index($id)
    {
        $current_date = Carbon::now()->format('d F Y');
        return view('surat-balasan.terima', compact('current_date'), [
            'school' => School::where('id', $id)->first()
        ]);
    }

    public function create()
    {
        // dd(request());
        $component = request()->all();

        return view('surat-balasan.surat_balasan', compact('component'));
        // $pdf = PDF::loadview('surat-balasan/surat_balasan');
        // return $pdf->stream();
    }
}
