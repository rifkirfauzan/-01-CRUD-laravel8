<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KbgModel;
use Illuminate\Support\Facades\Redis;

class KbgController extends Controller
{
    public function __construct()
    {
        $this->KbgModel = new KbgModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kbg' => $this->KbgModel->allData()
        ];
        return view('frontend.kbg.v_kbg', $data);
    }

    public function detail($id_kbg)
    {
        if (!$this->KbgModel->detailData($id_kbg)) {
            abort(404);
        }
        $data = [
            'kbg' => $this->KbgModel->detailData($id_kbg),
        ];
        return view('frontend.kbg.v_detailkbg', $data);
    }

    public function add()
    {
        return view('frontend.kbg.v_addkbg');
    }

    public function insert()
    {
        Request()->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'jumlah_barang' => 'required',

        ], [
            'nama_barang.required' => 'nama_barang Wajib Diisi!',
            'jenis_barang.required' => 'jenis_barang Wajib Diisi!',
            'jumlah_barang.required' => 'jumlah_barang Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $data = [
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'jumlah_barang' => Request()->jumlah_barang,
        ];

        $this->KbgModel->addData($data);
        return redirect()->route('kbg')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_kbg)
    {
        if (!$this->KbgModel->detailData($id_kbg)) {
            abort(404);
        }
        $data = [
            'kbg' => $this->KbgModel->detailData($id_kbg),
        ];
        return view('frontend.kbg.v_editkbg', $data);
    }



    public function update($id_kbg)
    {
        Request()->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'jumlah_barang' => 'required',


        ], [
            'nama_barang.required' => 'nama_barang Wajib Diisi!',
            'jenis_barang.required' => 'jenis_barang Wajib Diisi!',
            'jumlah_barang.required' => 'jumlah_barang Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        $data = [
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'jumlah_barang' => Request()->jumlah_barang,
        ];

        $this->KbgModel->editData($id_kbg, $data);

        $data = [
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'jumlah_barang' => Request()->jumlah_barang,
        ];


        $this->KbgModel->editData($id_kbg, $data);
        return redirect()->route('kbg')->with('pesan', 'Data Barang Berhasil DiUpdate!');
    }


    public function delete($id_kbg)

    {
        $this->KbgModel->deleteData($id_kbg);
        return redirect()->route('kbg')->with('pesan', 'Data Barang Berhasil DiHapus!');
    }
}
