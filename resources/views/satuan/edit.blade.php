@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('satuan.update', ['satuan' => $satuan->id]) }}" method="POST">
            <input type="hidden" name="satuan_id" id="satuan_id" value="{{ $satuan->satuan_id }}">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-pencil-square fs-1"></i>
                        <h4>Edit Data Satuan</h4>
                    </div>
                    <hr>
                    <div class="row">
                        {{-- kode satuan --}}
                        <div class="col-md-6 mb-3">
                            <label for="kode_satuan" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_satuan') is-invalid @enderror" type="text"
                                name="kode_satuan" id="kode_satuan"
                                value="{{ $errors->any() ? old('kode_satuan') : $satuan->kode_satuan }}"
                                placeholder="Enter First Name">
                            @error('kode_satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        {{-- nama satuan --}}
                        <div class="col-md-6 mb-3">
                            <label for="nama_satuan" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_satuan') is-invalid @enderror" type="text"
                                name="nama_satuan" id="nama_satuan"
                                value="{{ $errors->any() ? old('nama_satuan') : $satuan->nama_satuan }}"
                                placeholder="Ubah Nama Barang">
                            @error('nama_satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('satuan.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
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
        // Membuat fungsi untuk memeriksa panjang karakter kode_satuan saat memasukkan data
        document.addEventListener('DOMContentLoaded', function() {
            var kode_satuan_input = document.getElementById('kode_satuan');
            kode_satuan_input.addEventListener('input', function() {
                // Jika panjang karakter lebih dari 7, hapus nilai input
                if (this.value.length > 7) {
                    this.value = this.value.slice(0, 7);
                }
            });
        });
    </script>
@endsection
