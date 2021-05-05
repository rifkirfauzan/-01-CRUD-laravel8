<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IbrgModel;
use Illuminate\Support\Facades\Redis;

class IbrgController extends Controller
{
    public function __construct()
    {
        $this->IbrgModel = new IbrgModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'ibrg' => $this->IbrgModel->allData()
        ];
        return view('frontend.ibrg.v_ibrg', $data);
    }

    public function detail($id_brg)
    {
        if (!$this->IbrgModel->detailData($id_brg)) {
            abort(404);
        }
        $data = [
            'ibrg' => $this->IbrgModel->detailData($id_brg),
        ];
        return view('frontend.ibrg.v_detailbarang', $data);
    }

    public function add()
    {
        return view('frontend.ibrg.v_addibrg');
    }

    public function insert()
    {
        Request()->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
            'qty' => 'required',

        ], [
            'nama_barang.required' => 'nama_barang Wajib Diisi!',
            'jenis_barang.required' => 'jenis_barang Wajib Diisi!',
            'kelas.required' => 'KELAS Wajib Diisi!',
            'harga_barang.required' => 'harga_barang Wajib Diisi!',
            'qty.required' => 'qty Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $data = [
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'harga_barang' => Request()->harga_barang,
            'qty' => Request()->qty,
        ];

        $this->IbrgModel->addData($data);
        return redirect()->route('ibrg')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_brg)
    {
        if (!$this->IbrgModel->detailData($id_brg)) {
            abort(404);
        }
        $data = [
            'ibrg' => $this->IbrgModel->detailData($id_brg),
        ];
        return view('frontend.ibrg.v_editibrg', $data);
    }



    public function update($id_brg)
    {
        Request()->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
            'qty' => 'required',

        ], [
            'nama_barang.required' => 'nama_barang Wajib Diisi!',
            'jenis_barang.required' => 'jenis_barang Wajib Diisi!',
            'kelas.required' => 'KELAS Wajib Diisi!',
            'harga_barang.required' => 'harga_barang Wajib Diisi!',
            'qty.required' => 'qty Wajib Diisi!',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        $data = [
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'harga_barang' => Request()->harga_barang,
            'qty' => Request()->qty,
        ];

        $this->IbrgModel->editData($id_brg, $data);

        $data = [
            'nama_barang' => Request()->nama_barang,
            'jenis_barang' => Request()->jenis_barang,
            'harga_barang' => Request()->harga_barang,
            'qty' => Request()->qty,
        ];

        $this->IbrgModel->editData($id_brg, $data);
        return redirect()->route('ibrg')->with('pesan', 'Data Barang Berhasil DiUpdate!');
    }


    public function delete($id_brg)

    {
        $this->IbrgModel->deleteData($id_brg);
        return redirect()->route('ibrg')->with('pesan', 'Data Barang Berhasil DiHapus!');
    }
}
