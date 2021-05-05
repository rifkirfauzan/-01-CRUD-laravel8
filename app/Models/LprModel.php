<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LprModel extends Model

{
    public function allData()
    {
        return DB::table('laporan')
            ->get();
    }

    public function detailData($id_lapor)
    {
        return DB::table('laporan')
            ->where('id_lapor', $id_lapor)
            ->first();
    }

    public function addData($data)
    {
        DB::table('laporan')
            ->insert($data);
    }

    public function editData($id_lapor, $data)
    {
        DB::table('laporan')
            ->where('id_lapor', $id_lapor)
            ->update($data);
    }

    public function deleteData($id_lapor)
    {
        DB::table('laporan')
            ->where('id_lapor', $id_lapor)
            ->delete();
    }
}
