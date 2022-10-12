<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Http\Controllers\Controller;

class qrcode extends Controller
{
    public function __construct()
    {
        $this->middleware(alessioprete_middleware());
    }
    public function index() {
        return view(alessioprete_view('auth.qrcode.qrcode'));
    }
    public function seleziona() {
        return view(alessioprete_view('auth.qrcode.qrcodeScelta'));
    }
    public function qrcodeurl() {
        return view(alessioprete_view('auth.qrcode.qrcodenewurl'));
    }
}
