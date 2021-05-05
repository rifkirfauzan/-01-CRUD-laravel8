<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IbrgModel extends Model

{
    public function allData()
    {
        return DB::table('ibrg')
            ->get();
    }

    public function detailData($id_brg)
    {
        return DB::table('ibrg')
            ->where('id_brg', $id_brg)
            ->first();
    }

    public function addData($data)
    {
        DB::table('ibrg')
            ->insert($data);
    }

    public function editData($id_brg, $data)
    {
        DB::table('ibrg')
            ->where('id_brg', $id_brg)
            ->update($data);
    }

    public function deleteData($id_brg)
    {
        DB::table('ibrg')
            ->where('id_brg', $id_brg)
            ->delete();
    }
}
