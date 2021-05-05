<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KptModel extends Model

{
    public function allData()
    {
        return DB::table('kpt')
            ->get();
    }

    public function detailData($id_kpt)
    {
        return DB::table('kpt')
            ->where('id_kpt', $id_kpt)
            ->first();
    }

    public function addData($data)
    {
        DB::table('kpt')
            ->insert($data);
    }

    public function editData($id_kpt, $data)
    {
        DB::table('kpt')
            ->where('id_kpt', $id_kpt)
            ->update($data);
    }

    public function deleteData($id_kpt)
    {
        DB::table('kpt')
            ->where('id_kpt', $id_kpt)
            ->delete();
    }
}
