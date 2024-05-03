@extends('layouts.app')

@section('content')
    {{-- @include('default') --}}
    <div class="container mt-4">
        <h4>{{ $ingfo_sakkarepmu }}</h4>
        <hr>

        <div class="row">
            {{-- total barang --}}
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-archive-fill"></i> <b> Total Barang : </b> {{ $total_barang }}
                        </h5>
                        <p class="card-text">Admin dapat melakukan CRUD barang pada panel ini</p>
                        <a href="{{ route('barang.index') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            {{-- total satuan --}}
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-cloud-haze-fill"></i> <b>Total Satuan :
                                {{ $total_satuan }}</b></h5>
                        <p class="card-text">Admin dapat melakukan CRUD satuan pada panel ini</p>
                        <a href="{{ route('satuan.index') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            {{-- total harga barang --}}
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-credit-card-fill"></i> <b> Total Harga : </b> {{ number_format($total_harga_barang, 0, ',', '.') }} </h5>
                        <p class="card-text">Menampilkan total dari seluruh harga barang yang ada pada database</p>
                        <a href="{{ route('barang.index') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            {{-- total users --}}
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-bounding-box"></i> <b> Total Users : </b> {{$total_users}} </h5>
                        <p class="card-text">Untuk user dan hak akses masih belum terimplementasi (soon)</p>
                        <a href="#" class="btn btn-secondary disabled" @disabled(true)>Selengkapnya</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
