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
       $filename= 'logo.png';
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
        return $pdf->download();

    }
    public function generatePDF()
    {
        $imagePath = public_path('images/logo.png');
        $title = "Add images to PDF files in Laravel 10 - Websolutionstuff";
        $data = [
                [
                    'quantity' => 1,
                    'description' => '1 Year Subscription',
                    'price' => '129.00'
                    ]
        ];
        $pdf = PDF::loadView('pdf.document', ['data' => $data,'imagePath' => $imagePath,'title' => $title])
                    ->setOptions(['defaultFont' => 'arial']);
        return $pdf->stream('document.pdf');
    }
    public function wrapper() {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
    public function LoadFile()
    {
        $page_header_html = view()->make('pdf.header')->render();
        $page_footer_html = view()->make('pdf.footer')->render();
        $options = [
            'orientation'   => 'portrait',
            'encoding'      => 'UTF-8',
            'header-html'   => $page_header_html,
            'footer-html'   => $page_footer_html
        ];
        $pdf =  Pdf::loadView('pdf.invoice');
        $pdf->setOptions($options);
        return $pdf->download('invoice.pdf');
    }
}
