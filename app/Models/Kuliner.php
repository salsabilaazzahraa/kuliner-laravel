<?php

namespace App\Models;

class Kuliner
{

    private static function data(): array
    {
        return [
            [
                'id' => 1,
                'nama' => 'Lontong Balap',
                'kategori' => 'Makanan berkuah ringan',
                'ringkasan' => 'Lontong, tauge, dan tahu goreng dengan lentho renyah dan kuah petis gurih.',
                'deskripsi' => 'Lontong balap adalah sarapan dan makan malam yang sangat populer di Surabaya. Irisan lontong disajikan bersama tauge rebus, tahu goreng, dan lentho (perkedel kacang tolo), lalu disiram kuah bumbu petis yang gurih dan sedikit manis. Biasanya ditemani sate kerang dan sambal.',
                'bahan' => [
                    'Lontong',
                    'Tauge (kecambah)',
                    'Tahu goreng',
                    'Lentho (perkedel kacang tolo)',
                    'Bumbu petis',
                    'Bawang goreng',
                    'Sate kerang (pelengkap)',
                    'Kuah Gurih',
                ],
                'penyajian' => 'Disajikan hangat di piring atau mangkuk, ditaburi bawang goreng, dengan sambal dan sate kerang di samping.',
                'harga' => 'Rp 17.000',
                'fakta' => 'Nama balap konon berasal dari para penjual keliling yang memikul dagangan sambil berjalan cepat, seolah-olah sedang balapan.',
                'gambar' => 'lontong-balap.jpg',
            ],
            [
                'id' => 2,
                'nama' => 'Rawon',
                'kategori' => 'Makanan berkuah',
                'ringkasan' => 'Sup daging sapi berkuah hitam pekat dari kluwek, disantap dengan tauge dan telur asin.',
                'deskripsi' => 'Rawon adalah sup daging sapi berkuah hitam dengan rasa gurih, sedikit manis, dan beraroma rempah yang dalam. Warna hitamnya berasal dari kluwek (keluak) yang dihaluskan bersama bumbu seperti bawang, kunyit, lengkuas, dan serai. Rawon paling nikmat disantap dengan nasi putih hangat.',
                'bahan' => [
                    'Daging sapi',
                    'Kluwek (keluak)',
                    'Bawang merah dan bawang putih',
                    'Kunyit, lengkuas, serai, daun jeruk',
                    'Tauge pendek',
                    'Telur asin',
                    'Sambal dan kerupuk',
                    'Tempe',
                ],
                'penyajian' => 'Kuah rawon dituang ke mangkuk berisi daging, disajikan dengan nasi putih, tauge pendek, telur asin, sambal, dan kerupuk.',
                'harga' => 'Rp 22.000',
                'fakta' => 'Kluwek berwarna cokelat kehitaman, dan inilah yang membuat kuah rawon berwarna hitam khas.',
                'gambar' => 'rawon.jpg',
            ],
            [
                'id' => 3,
                'nama' => 'Rujak Cingur',
                'kategori' => 'Rujak dan salad khas',
                'ringkasan' => 'Campuran sayur, buah, dan cingur sapi dengan bumbu petis yang pekat.',
                'deskripsi' => 'Rujak cingur adalah salad khas Surabaya yang berisi cingur (moncong sapi) rebus yang diiris, sayur, buah, dan lontong atau tahu tempe. Semuanya disiram bumbu petis udang yang diulek bersama kacang tanah, cabai, dan pisang batu sehingga rasanya gurih, manis, dan pedas.',
                'bahan' => [
                    'Cingur (moncong sapi) rebus',
                    'Kangkung dan tauge',
                    'Krai, bengkuang, mangga muda, kedondong',
                    'Lontong, tahu, tempe',
                    'Petis udang',
                    'Terasi',
                    'Kacang tanah, cabai, pisang batu',
                    'Kerupuk',
                ],
                'penyajian' => 'Bumbu diulek di cobek, lalu bahan-bahan dicampur ke dalamnya dan disajikan di piring dengan kerupuk.',
                'harga' => 'Rp 15.000',
                'fakta' => 'Cingur adalah kata bahasa Jawa untuk mulut atau moncong, dalam hal ini moncong sapi.',
                'gambar' => 'rujak-cingur.jpg',
            ],
            [
                'id' => 4,
                'nama' => 'Pecel Semanggi',
                'kategori' => 'Sayuran tradisional',
                'ringkasan' => 'Daun semanggi rebus dengan bumbu ubi jalar dan kacang, disantap bersama kerupuk puli.',
                'deskripsi' => 'Pecel semanggi dibuat dari daun semanggi yang direbus dan disiram bumbu pecel khas dengan campuran ubi jalar dan kacang. Rasanya gurih, sedikit manis, dan pedas. Biasanya disantap dengan kerupuk puli yang tebal dan renyah.',
                'bahan' => [
                    'Daun semanggi',
                    'Tauge',
                    'Bumbu pecel (ubi jalar, kacang tanah, cabai)',
                    'Kerupuk puli',
                ],
                'penyajian' => 'Sayuran rebus ditata di atas daun pisang atau piring, disiram bumbu, lalu dimakan dengan kerupuk puli.',
                'harga' => 'Rp 13.000',
                'fakta' => 'Semanggi adalah tanaman air yang tumbuh di tanah berair seperti sawah, dan daunnya berbentuk seperti semanggi berdaun empat.',
                'gambar' => 'pecel-semanggi.jpg',
            ],
            [
                'id' => 5,
                'nama' => 'Sate Klopo',
                'kategori' => 'Sate dan bakaran',
                'ringkasan' => 'Sate daging sapi berbalut parutan kelapa yang dibakar hingga harum dan gurih.',
                'deskripsi' => 'Sate klopo adalah sate daging sapi yang dibalur parutan kelapa berbumbu sebelum dibakar. Klopo adalah kata bahasa Jawa untuk kelapa. Kelapa yang ikut terbakar memberi aroma harum dan rasa gurih yang berbeda dari sate pada umumnya.',
                'bahan' => [
                    'Daging sapi',
                    'Kelapa parut',
                    'Bawang merah dan bawang putih',
                    'Ketumbar dan bumbu rempah',
                    'Sambal',
                ],
                'penyajian' => 'Sate dibakar di atas bara, lalu disajikan dengan lontong atau nasi dan bumbu pendamping.',
                'harga' => 'Rp 20.000 5 tusuk',
                'fakta' => 'Parutan kelapa yang menempel pada daging menjadi ciri utama sate klopo dan sumber namanya.',
                'gambar' => 'sate-klopo.jpg',
            ],
            [
                'id' => 6,
                'nama' => 'Tahu Tek',
                'kategori' => 'Jajanan gurih',
                'ringkasan' => 'Tahu goreng dan lontong dipotong, dicampur tauge, lalu disiram bumbu petis kacang.',
                'deskripsi' => 'Tahu tek terdiri dari tahu goreng, telur, lontong, tauge, dan sayuran yang dipotong kecil-kecil, lalu disiram bumbu petis dan kacang. Rasanya gurih, manis, dan pedas. Hidangan ini cocok untuk makan malam dan sering dijual di pinggir jalan.',
                'bahan' => [
                    'Tahu goreng',
                    'Telur',
                    'Lontong',
                    'Tauge',
                    'Bumbu petis dan kacang',
                    'Kerupuk',
                    'Kecap manis',
                ],
                'penyajian' => 'Bahan dipotong dengan gunting atau pisau di piring, disiram bumbu petis kacang, dan ditaburi kerupuk.',
                'harga' => 'Rp 15.000',
                'fakta' => 'Nama tek konon meniru bunyi tek-tek saat penjual memotong tahu.',
                'gambar' => 'tahu-tek.jpg',
            ],
            [
                'id' => 7,
                'nama' => 'Lapis Kukus',
                'kategori' => 'Kue dan oleh-oleh',
                'ringkasan' => 'Kue berlapis warna-warni yang dikukus, bertekstur lembut dan manis.',
                'deskripsi' => 'Lapis kukus adalah kue berlapis yang dimasak dengan cara dikukus lapis demi lapis. Hasilnya adalah kue yang lembut, manis, dan cantik saat diiris karena lapisannya berwarna-warni. Kue ini sering dibeli sebagai oleh-oleh dari Surabaya.',
                'bahan' => [
                    'Tepung terigu',
                    'Gula',
                    'Telur',
                    'Mentega',
                    'Susu atau santan',
                    'Pewarna makanan',
                ],
                'penyajian' => 'Diiris tipis dan disajikan sebagai kudapan bersama teh atau kopi. Bisa dimakan sendiri atau dibawa sebagai oleh-oleh.',
                'harga' => 'Rp 37.000',
                'fakta' => 'Berbeda dengan lapis legit yang dipanggang, lapis kukus dimasak dengan cara dikukus sehingga teksturnya lebih lembut.',
                'gambar' => 'lapis-kukus.jpg',
            ],
        ];
    }

    
    public static function all(): array
    {
        return array_map(function ($item) {
            $item['gambar_url'] = self::gambarUrl($item['gambar']);
            return $item;
        }, self::data());
    }

    /**
     * Mencari satu data berdasarkan ID. Mengembalikan null jika tidak ada.
     */
    public static function find($id): ?array
    {
        foreach (self::all() as $item) {
            if ($item['id'] === (int) $id) {
                return $item;
            }
        }

        return null;
    }

    private static function gambarUrl(string $file): string
    {
        if (file_exists(public_path("images/{$file}"))) {
            return asset("images/{$file}");
        }

        $nama = pathinfo($file, PATHINFO_FILENAME);
        foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
            if (file_exists(public_path("images/{$nama}.{$ext}"))) {
                return asset("images/{$nama}.{$ext}");
            }
        }

        $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="800" height="600">'
            . '<rect width="100%" height="100%" fill="#E9E4DC"/>'
            . '<text x="50%" y="48%" text-anchor="middle" font-family="sans-serif" font-size="30" fill="#6B625A">Foto belum ditambahkan</text>'
            . '<text x="50%" y="58%" text-anchor="middle" font-family="sans-serif" font-size="22" fill="#6B625A">public/images/' . $file . '</text>'
            . '</svg>';

        return 'data:image/svg+xml;charset=UTF-8,' . rawurlencode($svg);
    }
}
