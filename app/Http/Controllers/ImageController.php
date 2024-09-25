<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class ImageController extends Controller
{
    //
    public function index()
    {
       /*$filename= 'logo.png';
       $imagePath =public_path('images/logo.png');
       $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
       ];
       $pdf = Pdf::loadView('pdf', ['data' => $data, 'imagePath'=>$imagePath,'filename'=>$filename])->setOptions(['defaultFont' => 'arial']);
       //$pdf->render(); //return $pdf->stream();
        return $pdf->download();*/
        
    }
    public function generatePDF()
    {
        $data = [
            'imagePath' => public_path('images/logo.png'),
            'title' => "Add images to PDF files in Laravel 10 - Websolutionstuff"
        ];
        $pdf = PDF::loadView('pdf.document', $data)->setOptions(['defaultFont' => 'arial']);
        return $pdf->stream('document.pdf');
    }
}
