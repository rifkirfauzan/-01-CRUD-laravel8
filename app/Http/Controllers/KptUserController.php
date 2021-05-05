<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KptUserModel;
use Illuminate\Support\Facades\Redis;

class KptUserController extends Controller
{

    public function __construct()
    {
        $this->KptUserModel = new KptUserModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kpt' => $this->KptUserModel->allData(),
        ];
        return view('frontend.kpt.v_kpt_user', $data);
    }
}
