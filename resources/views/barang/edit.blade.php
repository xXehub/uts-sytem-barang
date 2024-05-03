@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
            <input type="hidden" name="barang_id" id="barang_id" value="{{ $barang->barang_id }}">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-pencil-square fs-1"></i>
                        <h4>Edit Data Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        {{-- kode barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text"
                                name="kode_barang" id="kode_barang"
                                value="{{ $errors->any() ? old('kode_barang') : $barang->kode_barang }}"
                                placeholder="Enter First Name">
                            @error('kode_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        {{-- nama barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                name="nama_barang" id="nama_barang"
                                value="{{ $errors->any() ? old('nama_barang') : $barang->nama_barang }}"
                                placeholder="Ubah Nama Barang">
                            @error('nama_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- harga --}}
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text"
                                name="harga_barang" id="harga_barang"
                                value="{{ $errors->any() ? old('harga_barang') : $barang->harga_barang }}"
                                placeholder="Ubah Harga Barang">
                            @error('harga_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- satuan --}}
                        <div class="col-md-6 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan_sakkarepmu)
                                    <option value="{{ $satuan_sakkarepmu->id }}"
                                        {{ old('satuan') == $satuan_sakkarepmu->id ? 'selected' : '' }}>
                                        {{ $satuan_sakkarepmu->kode_satuan . ' - ' . $satuan_sakkarepmu->nama_satuan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- deskripsi barang --}}
                        <div class="col-md-12 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi barang</label>
                            <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" id="deskripsi_barang" rows="3"
                                name="deskripsi_barang" value="" placeholder="Enter Deskripsi barang">{{ $errors->any() ? old('deskripsi_barang') : $barang->deskripsi_barang }}</textarea>
                            @error('deskripsi_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Batal</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script>
        // Membuat fungsi untuk memeriksa panjang karakter kode_barang saat memasukkan data
        document.addEventListener('DOMContentLoaded', function() {
            var kode_barang_input = document.getElementById('kode_barang');
            kode_barang_input.addEventListener('input', function() {
                // Jika panjang karakter lebih dari 7, hapus nilai input
                if (this.value.length > 7) {
                    this.value = this.value.slice(0, 7);
                }
            });
        });
    </script>
@endsection
