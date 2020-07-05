<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfHelloController extends Controller
{
    public function index()
    {
        return view('pdf/pdf_hello');
    } 
}
