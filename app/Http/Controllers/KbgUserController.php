<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KbgUserModel;
use Illuminate\Support\Facades\Redis;

class KbgUserController extends Controller
{

    public function __construct()
    {
        $this->KbgUserModel = new KbgUserModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kbg' => $this->KbgUserModel->allData(),
        ];
        return view('frontend.kbg.v_kbg_user', $data);
    }
}
