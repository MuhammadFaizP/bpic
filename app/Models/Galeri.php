<?php

namespace App\Models;

class Galeri
{
    public $id;
    public $gambar;
    public $judul;
    public $deskripsi;
    public $tanggal;
    public $lokasi;

    public function __construct($id, $gambar, $judul, $deskripsi, $tanggal, $lokasi)
    {
        $this->id = $id;
        $this->gambar = $gambar;
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
        $this->tanggal = $tanggal;
        $this->lokasi = $lokasi;
    }

    public static function all()
    {
        return [
            new Galeri(
                1,
                'https://awsimages.detik.net.id/community/media/visual/2022/04/05/isi-bulan-ramadan-dengan-tadarus-alquran.jpeg?w=1200',
                'Kegiatan Tadarus Rutin',
                'Tadarus Al-Qur\'an setiap pagi di Masjid Raya Bandung bersama jamaah.',
                '15 Agustus 2025',
                'Masjid Raya Bandung'
            ),
            new Galeri(
                2,
                'https://donasi.wiz.or.id/wp-content/uploads/2025/08/WhatsApp_Image_2025-08-21_at_08.37.09__1_.jpeg',
                'Penyaluran Bantuan Sosial',
                'Tim BPIC menyalurkan bantuan sembako kepada masyarakat kurang mampu.',
                '10 Agustus 2025',
                'Al Jabbar Pangandaran'
            ),
            new Galeri(
                3,
                'https://sajadahcustom.com/wp-content/uploads/2023/08/Seminar-islami.jpg',
                'Seminar Pendidikan Islam',
                'Acara seminar tentang pentingnya pendidikan agama bagi generasi muda.',
                '05 Juli 2025',
                'Pusdai'
            ),
            new Galeri(
                4,
                'https://stiba.ac.id/wp-content/uploads/2020/08/505047-1210x621.jpg',
                'Lomba Kaligrafi',
                'Lomba kaligrafi untuk anak-anak dalam rangka menyambut Maulid Nabi.',
                '01 Juli 2025',
                'Al Jabbar Cikalong'
            ),
            new Galeri(
                5,
                'https://cdn.rri.co.id/berita/Bovendigoel/o/1721743668091-IMG-20240722-WA0148/fpam34r1gqznzu2.jpeg',
                'Santunan Anak Yatim',
                'Kegiatan santunan untuk anak yatim piatu yang diadakan setiap bulan.',
                '20 Juni 2025',
                'Masjid Raya Raudhatul Irfan'
            ),
            new Galeri(
                6,
                'https://assets-a1.kompasiana.com/items/album/2024/08/10/img-20240810-wa0013-66b6c806c925c40d9021e1f2.jpg',
                'Gotong Royong Kebersihan',
                'Kegiatan bersih-bersih masjid yang melibatkan seluruh jamaah.',
                '10 Juni 2025',
                'Kertajati'
            )
        ];
    }
}