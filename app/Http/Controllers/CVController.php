<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Browsershot\Browsershot;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index(){
        return view('curriculum');
    }

    public function viewPDF(){
        return view('layouts.plantilla_pdf');
    }    

    public function downloadPDF(){
        $html = view('layouts.plantilla_pdf')->render();
        Browsershot::html($html)
            ->format('A4')
            ->showBackground()
            ->waitUntilNetworkIdle()
            ->save(storage_path('app/public/CV_GCC.pdf'));
        return response()->download(storage_path('app/public/CV_GCC.pdf'));
    }

    public function prueba() {
        return view('layouts.plantilla_pdf');
    }
}
