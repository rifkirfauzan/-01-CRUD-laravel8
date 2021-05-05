<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PnjlModel;
use Illuminate\Support\Facades\Redis;

class PnjlController extends Controller
{
    public function __construct()
    {
        $this->PnjlModel = new PnjlModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pnjl' => $this->PnjlModel->allData()
        ];
        return view('frontend.pnjl.v_pnjl', $data);
    }

    public function detail($id_pnjl)
    {
        if (!$this->PnjlModel->detailData($id_pnjl)) {
            abort(404);
        }
        $data = [
            'pnjl' => $this->PnjlModel->detailData($id_pnjl),
        ];
        return view('frontend.pnjl.v_detailpnjl', $data);
    }

    public function add()
    {
        return view('frontend.pnjl.v_addpnjl');
    }

    public function insert()
    {
        Request()->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'status' => 'required',

        ], [
            'nama_barang.required' => 'nama_barang Wajib Diisi!',
            'jumlah.required' => 'jumlah Wajib Diisi!',
            'harga.required' => 'harga Wajib Diisi!',
            'status.required' => 'harga_barang Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $data = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'harga' => Request()->harga,
            'status' => Request()->status,
        ];

        $this->PnjlModel->addData($data);
        return redirect()->route('pnjl')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_pnjl)
    {
        if (!$this->PnjlModel->detailData($id_pnjl)) {
            abort(404);
        }
        $data = [
            'pnjl' => $this->PnjlModel->detailData($id_pnjl),
        ];
        return view('frontend.pnjl.v_editpnjl', $data);
    }



    public function update($id_pnjl)
    {
        Request()->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'status' => 'required',

        ], [
            'nama_barang.required' => 'nama_barang Wajib Diisi!',
            'jumlah.required' => 'jumlah Wajib Diisi!',
            'harga.required' => 'harga Wajib Diisi!',
            'status.required' => 'harga_barang Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        $data = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'harga' => Request()->harga,
            'status' => Request()->status,
        ];

        $this->PnjlModel->editData($id_pnjl, $data);

        $data = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'harga' => Request()->harga,
            'status' => Request()->status,
        ];


        $this->PnjlModel->editData($id_pnjl, $data);
        return redirect()->route('pnjl')->with('pesan', 'Data Barang Berhasil DiUpdate!');
    }


    public function delete($id_pnjl)

    {
        $this->PnjlModel->deleteData($id_pnjl);
        return redirect()->route('pnjl')->with('pesan', 'Data Barang Berhasil DiHapus!');
    }
}
