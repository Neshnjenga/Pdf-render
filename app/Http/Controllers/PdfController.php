<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf(){
        $data = [ 
            'title'=>'Nelson Chege',
            'date'=>date('m/d/y'),
            'age'=>'25yrs',
            'gender'=>'male',
            'marriagestatus'=>'single',
            'favouriteartist'=>'Mutoriah ',
            'favouritesong'=>'Presha',
        ];
    $pdf = Pdf::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');
    }

    public function home(){
        return view('home');
    }
}
