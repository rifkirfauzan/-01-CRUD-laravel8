<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KptModel;
use Illuminate\Support\Facades\Redis;

class KptController extends Controller
{
    public function __construct()
    {
        $this->KptModel = new KptModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kpt' => $this->KptModel->allData()
        ];
        return view('frontend.kpt.v_kpt', $data);
    }

    public function detail($id_kpt)
    {
        if (!$this->KptModel->detailData($id_kpt)) {
            abort(404);
        }
        $data = [
            'kpt' => $this->KptModel->detailData($id_kpt),
        ];
        return view('frontend.kpt.v_detailkpt', $data);
    }

    public function add()
    {
        return view('frontend.kpt.v_addkpt');
    }

    public function insert()
    {
        Request()->validate([
            'tahun' => 'required',
            'p_tertinggi' => 'required',
            'p_terendah' => 'required',
            'k_tahunan' => 'required',

        ], [
            'tahun.required' => 'tahun Wajib Diisi!',
            'p_tertinggi.required' => 'p_tertinggi Wajib Diisi!',
            'p_terendah.required' => 'p_terendah Wajib Diisi!',
            'k_tahunan.required' => 'r_tahunan Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $data = [
            'tahun' => Request()->tahun,
            'p_tertinggi' => Request()->p_tertinggi,
            'p_terendah' => Request()->p_terendah,
            'k_tahunan' => Request()->k_tahunan,
        ];

        $this->KptModel->addData($data);
        return redirect()->route('kpt')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_kpt)
    {
        if (!$this->KptModel->detailData($id_kpt)) {
            abort(404);
        }
        $data = [
            'kpt' => $this->KptModel->detailData($id_kpt),
        ];
        return view('frontend.kpt.v_editkpt', $data);
    }



    public function update($id_kpt)
    {
        Request()->validate([
            'tahun' => 'required',
            'p_tertinggi' => 'required',
            'p_terendah' => 'required',
            'k_tahunan' => 'required',
        ], [
            'tahun.required' => 'tahun Wajib Diisi!',
            'p_tertinggi.required' => 'p_tertinggi Wajib Diisi!',
            'p_terendah.required' => 'p_terendah Wajib Diisi!',
            'k_tahunan.required' => 'r_tahunan Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        $data = [
            'tahun' => Request()->tahun,
            'p_tertinggi' => Request()->p_tertinggi,
            'p_terendah' => Request()->p_terendah,
            'k_tahunan' => Request()->k_tahunan,
        ];

        $this->KptModel->editData($id_kpt, $data);

        $data = [
            'tahun' => Request()->tahun,
            'p_tertinggi' => Request()->p_tertinggi,
            'p_terendah' => Request()->p_terendah,
            'k_tahunan' => Request()->k_tahunan,
        ];

        $this->KptModel->editData($id_kpt, $data);
        return redirect()->route('kpt')->with('pesan', 'Data Barang Berhasil DiUpdate!');
    }


    public function delete($id_kpt)

    {
        $this->KptModel->deleteData($id_kpt);
        return redirect()->route('kpt')->with('pesan', 'Data Barang Berhasil DiHapus!');
    }
}
