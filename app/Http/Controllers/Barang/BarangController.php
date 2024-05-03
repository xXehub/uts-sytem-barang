<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang; //nyeluk models barang
use App\Models\Satuan; //nyeluk models satuan
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gawe list barang
        $ingfo_sakkarepmu = "Data List Barang";
        // $barangs = Barang::paginate(3);
        $barang = Barang::all();
        return view('barang.index', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'barangs' => $barang
            // 'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingfo_sakkarepmu = 'tambah barang';
        $satuan = Satuan::all();
        return view('barang.create', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'satuans' => $satuan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // gawe message dan validasi
        {
            $messages = [
                'required' => 'Attribute harus diisi',
            ];
            $validator = Validator::make($request->all(), [
                'kode_barang' => 'required',
                'nama_barang' => 'required',
                'harga_barang' => 'required|numeric',
                'deskripsi_barang' => 'required'
            ], $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $barang = new Barang();
            $barang->kode_barang = $request->kode_barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->harga_barang = $request->harga_barang;
            $barang->deskripsi_barang = $request->deskripsi_barang;
            $barang->satuan_id = $request->satuan;
            $barang->save();
            // return redirect()->route('barang.index');
            return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // gawe show barang
        $ingfo_sakkarepmu = "lihat barang";
        $barang = Barang::find($id);
        return view('barang.show', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingfo_sakkarepmu = 'Edit Barang';
        $barang = Barang::find($id);
        $satuan = Satuan::all();
        return view('barang.edit', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'barang' => $barang,
            'satuans' => $satuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            $messages = [
                'required' => 'Attribute harus diisi',
            ];
            $validator = Validator::make($request->all(), [
                'kode_barang' => 'required|regex:/[A-Z]+/',
                'nama_barang' => 'required',
                'harga_barang' => 'required|numeric',
                'deskripsi_barang' => 'required'
            ], $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $barang = Barang::find($id);
            $barang->kode_barang = $request->kode_barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->harga_barang = $request->harga_barang;
            $barang->deskripsi_barang = $request->deskripsi_barang;
            $barang->satuan_id = $request->satuan;
            $barang->save();
            return redirect()->route('barang.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { {
            Barang::find($id)->delete();
            return redirect()->route('barang.index');
        }
    }
}
