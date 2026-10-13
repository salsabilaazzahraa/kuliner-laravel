{{-- Kartu kuliner yang dipakai ulang di Beranda, Katalog, dan Detail --}}
<div class="kartu h-100 d-flex flex-column">
    <img src="{{ $k['gambar_url'] }}" alt="{{ $k['nama'] }}" class="w-100">
    <div class="p-3 d-flex flex-column flex-grow-1">
        <span class="tag align-self-start mb-2">{{ $k['kategori'] }}</span>
        <h3 class="h5">{{ $k['nama'] }}</h3>
        <p class="text-secondary">{{ $k['ringkasan'] }}</p>
        <a href="{{ route('kuliner.show', $k['id']) }}" class="btn btn-cabai mt-auto">Lihat detail</a>
    </div>
</div>
