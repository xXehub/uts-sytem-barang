@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-person-bounding-box fs-1"></i>
                    <h4>{{ $ingfo_sakkarepmu }}</h4>
                </div>
                <hr>
                <div class="row">
                    {{-- nama lengkap --}}
                    <div class="col-md-6 mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengap"
                            value="{{ $nama_lengkap }}" readonly disabled>
                    </div>

                    {{-- mata kuliah --}}
                    <div class="col-md-6 mb-3">
                        <label for="matkul" class="form-label">Mata Kuliah</label>
                        <input class="form-control" type="text" name="matkul" id="matkul" value="{{ $matkul }}"
                            readonly disabled>
                    </div>
                    {{-- nim --}}
                    <div class="col-md-6 mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input class="form-control" type="text" name="nim" id="nim" value="{{ $nim }}"
                            readonly disabled>
                    </div>
                    {{-- kelas --}}
                    <div class="col-md-6 mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input class="form-control" type="text" name="kelas" id="kelas" value="{{ $kelas }}"
                            readonly disabled>
                    </div>
                </div>
                <hr>

            </div>
        </div>

    </div>
    @vite('resources/js/app.js')
@endsection
