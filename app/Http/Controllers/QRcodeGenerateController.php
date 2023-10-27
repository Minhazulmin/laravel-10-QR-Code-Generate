<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeGenerateController extends Controller
{
    // QR code generation
    public function qrcode(){
        $qrCodes = [];

        $qrCodes['simple']        = QrCode::size(150)->generate('https://minhazulmin.github.io/');
        $qrCodes['changeColor']   = QrCode::size(150)->color(255, 0, 0)->generate('https://minhazulmin.github.io/');
        $qrCodes['changeBgColor'] = QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://minhazulmin.github.io/');
        $qrCodes['styleDot']      = QrCode::size(150)->style('dot')->generate('https://minhazulmin.github.io/');
        $qrCodes['styleSquare']   = QrCode::size(150)->style('square')->generate('https://minhazulmin.github.io/');
        $qrCodes['styleRound']    = QrCode::size(150)->style('round')->generate('https://minhazulmin.github.io/');

        return view('qrcode',$qrCodes);
    }
}
