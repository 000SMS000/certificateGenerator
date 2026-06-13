<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $pdf = Pdf::loadView('pdf', [
            'name' => $request->name,
            'course' => $request->course,
            'date' => $request->date,
        ]);

        return $pdf->stream('pdf');
    }
}