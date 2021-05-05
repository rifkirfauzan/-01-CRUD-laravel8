<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PnjlModel extends Model

{
    public function allData()
    {
        return DB::table('pnjl')
            ->get();
    }

    public function detailData($id_pnjl)
    {
        return DB::table('pnjl')
            ->where('id_pnjl', $id_pnjl)
            ->first();
    }

    public function addData($data)
    {
        DB::table('pnjl')
            ->insert($data);
    }

    public function editData($id_pnjl, $data)
    {
        DB::table('pnjl')
            ->where('id_pnjl', $id_pnjl)
            ->update($data);
    }

    public function deleteData($id_pnjl)
    {
        DB::table('pnjl')
            ->where('id_pnjl', $id_pnjl)
            ->delete();
    }
}
