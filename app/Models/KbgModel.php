<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KbgModel extends Model

{
    public function allData()
    {
        return DB::table('kbg')
            ->get();
    }

    public function detailData($id_kbg)
    {
        return DB::table('kbg')
            ->where('id_kbg', $id_kbg)
            ->first();
    }

    public function addData($data)
    {
        DB::table('kbg')
            ->insert($data);
    }

    public function editData($id_kbg, $data)
    {
        DB::table('kbg')
            ->where('id_kbg', $id_kbg)
            ->update($data);
    }

    public function deleteData($id_kbg)
    {
        DB::table('kbg')
            ->where('id_kbg', $id_kbg)
            ->delete();
    }
}
