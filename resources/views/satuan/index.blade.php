@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $ingfo_sakkarepmu }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('satuan.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah
                        Satuan</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Satuan</th>
                        <th>Nama Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($satuans as $satuan_sakkarepmu)
                            <td>{{ $satuan_sakkarepmu->kode_satuan }}</td>
                            <td>{{ $satuan_sakkarepmu->nama_satuan }}</td>
                            <td>@include('satuan.actions')</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
