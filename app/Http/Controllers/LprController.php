<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LprModel;
use Illuminate\Support\Facades\Redis;

class LprController extends Controller
{
    public function __construct()
    {
        $this->LprModel = new LprModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'laporan' => $this->LprModel->allData()
        ];
        return view('frontend.lpr.v_lpr', $data);
    }

    public function detail($id_lapor)
    {
        if (!$this->LprModel->detailData($id_lapor)) {
            abort(404);
        }
        $data = [
            'laporan' => $this->LprModel->detailData($id_lapor),
        ];
        return view('frontend.lpr.v_detaillpr', $data);
    }

    public function add()
    {
        return view('frontend.lpr.v_lpradd');
    }

    public function insert()
    {
        Request()->validate([
            'rkp_beli' => 'required',
            'rkp_jual' => 'required',
            'bulan' => 'required',
        ], [
            'rkp_beli.required' => 'rkp_beli Wajib Diisi!',
            'rkp_jual.required' => 'rkp_jual Wajib Diisi!',
            'bulan.required' => 'bulan Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $data = [
            'rkp_beli' => Request()->rkp_beli,
            'rkp_jual' => Request()->rkp_jual,
            'bulan' => Request()->bulan,
        ];

        $this->LprModel->addData($data);
        return redirect()->route('lpr')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_lapor)
    {
        if (!$this->LprModel->detailData($id_lapor)) {
            abort(404);
        }
        $data = [
            'laproran' => $this->LprModel->detailData($id_lapor),
        ];
        return view('frontend.lpr.v_editlpr', $data);
    }



    public function update($id_lapor)
    {
        Request()->validate([
            'rkp_beli' => 'required',
            'rkp_jual' => 'required',
            'bulan' => 'required',
        ], [
            'rkp_beli.required' => 'rkp_beli Wajib Diisi!',
            'rkp_jual.required' => 'rkp_jual Wajib Diisi!',
            'bulan.required' => 'bulan Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        $data = [
            'rkp_beli' => Request()->rkp_beli,
            'rkp_jual' => Request()->rkp_jual,
            'bulan' => Request()->bulan,
        ];

        $this->LprModel->editData($id_lapor, $data);

        $data = [
            'rkp_beli' => Request()->rkp_beli,
            'rkp_jual' => Request()->rkp_jual,
            'bulan' => Request()->bulan,
        ];


        $this->LprModel->editData($id_lapor, $data);
        return redirect()->route('lpr')->with('pesan', 'Data Barang Berhasil DiUpdate!');
    }


    public function delete($id_lapor)

    {
        $this->LprModel->deleteData($id_lapor);
        return redirect()->route('lpr')->with('pesan', 'Data Barang Berhasil DiHapus!');
    }
}
