@extends('layouts.master')

@section('title', $kuliner['nama'] . ' - Kuliner Surabaya')

@section('content')
<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kuliner.index') }}">Katalog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $kuliner['nama'] }}</li>
        </ol>
    </nav>

    <div class="row g-5">
        <div class="col-lg-5">
            <img src="{{ $kuliner['gambar_url'] }}" alt="{{ $kuliner['nama'] }}" class="detail-img">
        </div>

        <div class="col-lg-7">
            <span class="tag mb-2">{{ $kuliner['kategori'] }}</span>
            <h1 class="mb-3">{{ $kuliner['nama'] }}</h1>
            <p class="fs-5">{{ $kuliner['deskripsi'] }}</p>

            <h2 class="h4 mt-4">Bahan utama</h2>
            <ul class="bahan list-unstyled">
                @foreach ($kuliner['bahan'] as $b)
                    <li>{{ $b }}</li>
                @endforeach
            </ul>

            <h2 class="h4 mt-4">Cara penyajian</h2>
            <p>{{ $kuliner['penyajian'] }}</p>

            <p class="mb-4"><strong>Perkiraan harga:</strong> {{ $kuliner['harga'] }}</p>

            <div class="fakta p-3 mb-4">
                <strong>Tahukah kamu?</strong> {{ $kuliner['fakta'] }}
            </div>

            <a href="{{ route('kuliner.index') }}" class="btn btn-garis">Kembali ke katalog</a>
        </div>
    </div>

    <h2 class="h1 mt-5 mb-4">Kuliner lainnya</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($lainnya as $k)
            <div class="col">
                @include('partials.kartu', ['k' => $k])
            </div>
        @endforeach
    </div>
</section>
@endsection