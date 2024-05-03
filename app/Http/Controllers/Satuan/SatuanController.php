<?php

namespace App\Http\Controllers\Satuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Barang; //nyeluk models barang
use App\Models\Satuan; //nyeluk models satuan
use Illuminate\Support\Facades\Validator;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            $ingfo_sakkarepmu = "List Satuan";
            $satuan = Satuan::all();
            return view('satuan.index', [
                'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
                'satuans' => $satuan
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingfo_sakkarepmu = 'Tambah satuan';
        $barang = Satuan::all();
        return view('satuan.create', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'barangs' => $barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
        ];
        $validator = Validator::make($request->all(), [
            'kode_satuan' => 'required',
            'nama_satuan' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $satuan = new Satuan();
        $satuan->kode_satuan = $request->kode_satuan;
        $satuan->nama_satuan = $request->nama_satuan;
        $satuan->save();
        return redirect()->route('satuan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ingfo_sakkarepmu = 'liat barang';
        $satuan = Satuan::find($id);
        return view('satuan.show', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'satuans' => $satuan
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
        $ingfo_sakkarepmu = 'Edit Satuan';
        $satuan = Satuan::find($id);
        return view('satuan.edit', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'satuan' => $satuan
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
                'kode_satuan' => 'required|regex:/[A-Z]+/',
                'nama_satuan' => 'required'
            ], $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $satuan = Satuan::find($id);
            $satuan->kode_satuan = $request->kode_satuan;
            $satuan->nama_satuan = $request->nama_satuan;
            $satuan->save();
            return redirect()->route('satuan.index');
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
            Satuan::find($id)->delete();
            return redirect()->route('satuan.index');
        }
    }
}
