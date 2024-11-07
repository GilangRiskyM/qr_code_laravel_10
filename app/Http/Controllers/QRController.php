<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    function index(Request $request)
    {
        $input = $request->generate;
        if (isset($request->generate)) {
            $qr = QrCode::margin(1)
                ->size(200)
                ->generate($input);
        } else {
            $qr = '';
        }

        return view('index', ['qr' => $qr]);
    }
}
