@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-box-seam-fill fs-1"></i>
                        <h4>Tambah Data Barang</h4>
                    </div>
                    <hr>
                    {{-- gawe kode barang --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang" value="BRG-{{ old('kode_barang') }}" readonly>
                        </div>
                        {{-- gawe nama barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukan Nama barang">
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="Masukan Harga barang">
                            @error('harga_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- gawe satuan --}}
                        <div class="col-md-6 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan_sakkarepmu)
                                    <option value="{{ $satuan_sakkarepmu->id }}" {{ old('satuan') == $satuan_sakkarepmu->id ? 'selected' : '' }}>{{ $satuan_sakkarepmu->kode_satuan.' - '.$satuan_sakkarepmu->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi barang</label>
                            <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" id="deskripsi_barang" rows="3" name="deskripsi_barang" placeholder="Masukan Deskripsi barang">{{ old('deskripsi_barang') }}</textarea>
                            @error('deskripsi_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Generate random string for kode_barang
        function randomKode_sakkarepmu(length) {
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            var result = '';
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return result;
        }

        // Call the function to generate random string and update the kode_barang input
        document.addEventListener('DOMContentLoaded', function() {
            var kode_barang_input = document.getElementById('kode_barang');
            kode_barang_input.value = 'BRG-' + randomKode_sakkarepmu(3); // gawe selalu generate kode barang anyar
        });
    </script>
@endsection
