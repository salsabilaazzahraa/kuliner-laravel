@extends('layouts.master')

@section('title', 'Katalog - Kuliner Surabaya')

@section('content')
<section class="container py-5">
    <h1 class="mb-2">Katalog kuliner</h1>
    <p class="text-secondary mb-4">Pilih salah satu untuk melihat bahan, cara penyajian, dan perkiraan harga.</p>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @forelse ($kuliners as $k)
            <div class="col">
                @include('partials.kartu', ['k' => $k])
            </div>
        @empty
            <p class="text-secondary">Belum ada data kuliner.</p>
        @endforelse
    </div>
</section>
@endsection
