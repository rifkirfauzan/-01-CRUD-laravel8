<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LprUserModel;
use Illuminate\Support\Facades\Redis;

class LprUserController extends Controller
{

    public function __construct()
    {
        $this->LprUserModel = new LprUserModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'laporan' => $this->LprUserModel->allData(),
        ];
        return view('frontend.lpr.v_lpr_user', $data);
    }
}
