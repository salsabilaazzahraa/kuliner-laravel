@extends('layouts.master')

@section('title', 'Beranda - Kuliner Surabaya')

@section('content')
{{-- HERO --}}
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h1 class="mb-3">Makan apa di Surabaya?</h1>
                <p class="fs-5 mb-4">
                    {{ $total }} sajian khas Arek Suroboyo, dari kuah hitam rawon sampai lapis kukus yang manis.
                </p>
                <a href="{{ route('kuliner.index') }}" class="btn btn-cabai btn-lg me-2">Lihat semua kuliner</a>
                <a href="{{ route('kuliner.show', 2) }}" class="btn btn-outline-light btn-lg">Mulai dari rawon</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ $unggulan[1]['gambar_url'] }}" alt="{{ $unggulan[1]['nama'] }}">
            </div>
        </div>
    </div>
</section>

{{-- KULINER PILIHAN --}}
<section class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <h2 class="h1 mb-0">Kuliner pilihan</h2>
        <a href="{{ route('kuliner.index') }}" class="fw-bold text-decoration-none text-danger">Lihat semua</a>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($unggulan as $k)
            <div class="col">
                @include('partials.kartu', ['k' => $k])
            </div>
        @endforeach
    </div>
</section>
@endsection
