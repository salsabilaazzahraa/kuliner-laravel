-- ============================================================
-- Database : kuliner_surabaya
-- Cara pakai: phpMyAdmin > tab Import > pilih file ini > Go
-- Catatan   : aplikasi Laravel ini membaca data dari ARRAY di
--             app/Models/Kuliner.php. Tabel ini adalah salinan data
--             yang sama untuk keperluan database (phpMyAdmin).
-- ============================================================

CREATE DATABASE IF NOT EXISTS `kuliner_surabaya`
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `kuliner_surabaya`;

DROP TABLE IF EXISTS `kuliners`;
CREATE TABLE `kuliners` (
  `id`         INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama`       VARCHAR(100) NOT NULL,
  `kategori`   VARCHAR(60)  NOT NULL,
  `ringkasan`  VARCHAR(255) NOT NULL,
  `deskripsi`  TEXT         NOT NULL,
  `bahan`      TEXT         NOT NULL COMMENT 'dipisah titik koma',
  `penyajian`  TEXT         NOT NULL,
  `harga`      VARCHAR(60)  NOT NULL,
  `fakta`      TEXT         NULL,
  `gambar`     VARCHAR(100) NOT NULL COMMENT 'nama file gambar, filenya ada di public/images',
  `created_at` TIMESTAMP    NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP    NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `kuliners`
  (`id`, `nama`, `kategori`, `ringkasan`, `deskripsi`, `bahan`, `penyajian`, `harga`, `fakta`, `gambar`)
VALUES
(1, 'Lontong Balap', 'Makanan berkuah ringan', 'Lontong, tauge, dan tahu goreng dengan lentho renyah dan kuah petis gurih.', 'Lontong balap adalah sarapan dan makan malam yang sangat populer di Surabaya. Irisan lontong disajikan bersama tauge rebus, tahu goreng, dan lentho (perkedel kacang tolo), lalu disiram kuah bumbu petis yang gurih dan sedikit manis. Biasanya ditemani sate kerang dan sambal.', 'Lontong; Tauge (kecambah); Tahu goreng; Lentho (perkedel kacang tolo); Bumbu petis; Bawang goreng; Sate kerang (pelengkap)', 'Disajikan hangat di piring atau mangkuk, ditaburi bawang goreng, dengan sambal dan sate kerang di samping.', 'Rp 15.000 - Rp 25.000', 'Nama balap konon berasal dari para penjual keliling yang memikul dagangan sambil berjalan cepat, seolah-olah sedang balapan.', 'lontong-balap.jpg'),
(2, 'Rawon', 'Makanan berkuah', 'Sup daging sapi berkuah hitam pekat dari kluwek, disantap dengan tauge dan telur asin.', 'Rawon adalah sup daging sapi berkuah hitam dengan rasa gurih, sedikit manis, dan beraroma rempah yang dalam. Warna hitamnya berasal dari kluwek (keluak) yang dihaluskan bersama bumbu seperti bawang, kunyit, lengkuas, dan serai. Rawon paling nikmat disantap dengan nasi putih hangat.', 'Daging sapi; Kluwek (keluak); Bawang merah dan bawang putih; Kunyit, lengkuas, serai, daun jeruk; Tauge pendek; Telur asin; Sambal dan kerupuk', 'Kuah rawon dituang ke mangkuk berisi daging, disajikan dengan nasi putih, tauge pendek, telur asin, sambal, dan kerupuk.', 'Rp 25.000 - Rp 50.000', 'Kluwek berwarna cokelat kehitaman, dan inilah yang membuat kuah rawon berwarna hitam khas.', 'rawon.jpg'),
(3, 'Rujak Cingur', 'Rujak dan salad khas', 'Campuran sayur, buah, dan cingur sapi dengan bumbu petis yang pekat.', 'Rujak cingur adalah salad khas Surabaya yang berisi cingur (moncong sapi) rebus yang diiris, sayur, buah, dan lontong atau tahu tempe. Semuanya disiram bumbu petis udang yang diulek bersama kacang tanah, cabai, dan pisang batu sehingga rasanya gurih, manis, dan pedas.', 'Cingur (moncong sapi) rebus; Kangkung dan tauge; Timun, bengkuang, mangga muda, kedondong; Lontong, tahu, tempe; Petis udang; Kacang tanah, cabai, pisang batu; Kerupuk', 'Bumbu diulek di cobek, lalu bahan-bahan dicampur ke dalamnya dan disajikan di piring dengan kerupuk.', 'Rp 15.000 - Rp 30.000', 'Cingur adalah kata bahasa Jawa untuk mulut atau moncong, dalam hal ini moncong sapi.', 'rujak-cingur.jpg'),
(4, 'Pecel Semanggi', 'Sayuran tradisional', 'Daun semanggi rebus dengan bumbu ubi jalar dan kacang, disantap bersama kerupuk puli.', 'Pecel semanggi dibuat dari daun semanggi yang direbus dan disiram bumbu pecel khas dengan campuran ubi jalar dan kacang. Rasanya gurih, sedikit manis, dan pedas. Biasanya disantap dengan kerupuk puli yang tebal dan renyah.', 'Daun semanggi; Tauge; Bumbu pecel (ubi jalar, kacang tanah, cabai); Kerupuk puli', 'Sayuran rebus ditata di atas daun pisang atau piring, disiram bumbu, lalu dimakan dengan kerupuk puli.', 'Rp 10.000 - Rp 20.000', 'Semanggi adalah tanaman air yang tumbuh di tanah berair seperti sawah, dan daunnya berbentuk seperti semanggi berdaun empat.', 'pecel-semanggi.jpg'),
(5, 'Sate Klopo', 'Sate dan bakaran', 'Sate daging sapi berbalut parutan kelapa yang dibakar hingga harum dan gurih.', 'Sate klopo adalah sate daging sapi yang dibalur parutan kelapa berbumbu sebelum dibakar. Klopo adalah kata bahasa Jawa untuk kelapa. Kelapa yang ikut terbakar memberi aroma harum dan rasa gurih yang berbeda dari sate pada umumnya.', 'Daging sapi; Kelapa parut; Bawang merah dan bawang putih; Ketumbar dan bumbu rempah; Lontong atau nasi; Sambal', 'Sate dibakar di atas bara, lalu disajikan dengan lontong atau nasi dan bumbu pendamping.', 'Rp 25.000 - Rp 45.000', 'Parutan kelapa yang menempel pada daging menjadi ciri utama sate klopo dan sumber namanya.', 'sate-klopo.jpg'),
(6, 'Tahu Tek', 'Jajanan gurih', 'Tahu goreng dan lontong dipotong, dicampur tauge, lalu disiram bumbu petis kacang.', 'Tahu tek terdiri dari tahu goreng, telur, lontong, tauge, dan sayuran yang dipotong kecil-kecil, lalu disiram bumbu petis dan kacang. Rasanya gurih, manis, dan pedas. Hidangan ini cocok untuk makan malam dan sering dijual di pinggir jalan.', 'Tahu goreng; Telur; Lontong; Tauge dan kangkung; Bumbu petis dan kacang; Kerupuk', 'Bahan dipotong dengan gunting atau pisau di piring, disiram bumbu petis kacang, dan ditaburi kerupuk.', 'Rp 12.000 - Rp 25.000', 'Nama tek konon meniru bunyi tek-tek saat penjual memotong tahu.', 'tahu-tek.jpg'),
(7, 'Lapis Kukus', 'Kue dan oleh-oleh', 'Kue berlapis warna-warni yang dikukus, bertekstur lembut dan manis.', 'Lapis kukus adalah kue berlapis yang dimasak dengan cara dikukus lapis demi lapis. Hasilnya adalah kue yang lembut, manis, dan cantik saat diiris karena lapisannya berwarna-warni. Kue ini sering dibeli sebagai oleh-oleh dari Surabaya.', 'Tepung terigu; Gula; Telur; Mentega; Susu atau santan; Pewarna makanan', 'Diiris tipis dan disajikan sebagai kudapan bersama teh atau kopi. Bisa dimakan sendiri atau dibawa sebagai oleh-oleh.', 'Rp 35.000 - Rp 120.000 (tergantung ukuran)', 'Berbeda dengan lapis legit yang dipanggang, lapis kukus dimasak dengan cara dikukus sehingga teksturnya lebih lembut.', 'lapis-kukus.jpg');
