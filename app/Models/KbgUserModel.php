<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KbgUserModel extends Model

{
    public function allData()
    {
        return DB::table('kbg')->get();
    }
}
