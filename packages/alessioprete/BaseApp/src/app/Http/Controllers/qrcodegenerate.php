<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class qrcodegenerate extends Controller
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

    public function store_qrSite(Request $request)
    {
        QrCode::generate($request->url, public_path('images/'.$request->title.'.svg'));
        return back();
    }
}
