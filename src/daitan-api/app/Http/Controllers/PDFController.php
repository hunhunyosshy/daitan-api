<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function index(){

        $pdf = PDF::loadView('pdf/pdf_1');
        return $pdf->download('hello.pdf');
    }
}