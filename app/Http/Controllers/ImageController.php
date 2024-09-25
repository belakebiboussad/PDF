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
       $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
        return $pdf->download();
/*        $pdf->render();
        return $pdf->stream();*/

    }
}
