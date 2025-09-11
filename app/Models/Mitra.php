<?php

namespace App\Models;

class Mitra
{
    public $id;
    public $nama;
    public $gambar;
    public $sejarah;
    public $strukturOrganisasi;
    public $kategori;  // Properti baru

    public function __construct($id, $nama, $gambar, $sejarah, $strukturOrganisasi, $kategori)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->gambar = $gambar;
        $this->sejarah = $sejarah;
        $this->strukturOrganisasi = $strukturOrganisasi;
        $this->kategori = $kategori;  // Parameter baru
    }

    public static function all()
    {
        return [
            // Kategori Al-Jabbar
            new Mitra(
                1,
                'Al Jabbar Pangandaran',
                'https://i.ytimg.com/vi/le2-XFRzRj8/maxresdefault.jpg',
                'Masjid ini dibangun oleh pemerintah provinsi Jawa Barat dimulai pembangunan ini kisaran tahun 2014 pada masa gubernur Bapak Ahmad Heryawan dan diresmikan pada bulan Juni 2018 dengan keadan masjid yang termasuk belum siap pakai dikarenakan pembangunannya belum rampung (Bocor dan toilet belum bias digunakan)...',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...',
                'Al-Jabbar'
            ),
            new Mitra(
                2,
                'Al Jabbar Cikalong',
                'https://static.vecteezy.com/system/resources/previews/008/422/239/large_2x/tasikmalaya-west-java-indonesia-june-04-2022-portrait-of-al-jabbar-cikalong-mosque-free-photo.jpg',
                'Masjid Al-Jabbar Cikalong terletak di Jalan Raya Pantai Selatan, Desa Cimanuk, Kecamatan Cikalong, KabupatenTasikmalaya. Dibangun pada tahun 2017 oleh Pemerintah Provinsi Jawa Barat...',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...',
                'Al-Jabbar'
            ),
            new Mitra(
                3,
                'Al Jabbar Plumbon',
                'https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/jawapos/2017/10/menara-ambruk-pembangunan-masjid-al-jabbar-plumbon-kembali-dilanjut_m_161055.jpeg',
                'Masjid Al Jabbar Plumbon adalah salah satu masjid yang dibangun oleh Pemerintah Provinsi Jawa Barat sebagai bagian dari upaya memperkuat infrastruktur keagamaan...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.',
                'Al-Jabbar'
            ),
            new Mitra(
                4,
                'Al Jabbar Cimangkok',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4npxsU5WSKlkUYxBvSt8gqxTAsd4whdfc4XHa2wjh0raDUWfpWOfjQmIJCAstDu0j6dtAgubEUJWRo7C6i_C-XjmDT8eKnRSgVYh6eoXViz8qIzcMWvxUxA5H9kju5KAK9MRj7m1uA=s1360-w1360-h1020-rw',
                'Masjid aljabar merupakan masjid yang dibangun oleh pemprov jabar yang berada di atas tanah milik perhutani...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.',
                'Al-Jabbar'
            ),
            new Mitra(
                5,
                'Al Jabbar Cipeyeum',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4nq_kzj0Ycwnsz6LVs0695-S9E-zKxtQBJAsiakEXYdkRCvoK8jjmNOWh3-bcMV5iqpUgL6JWqTXcic9rmyNAM6ItYf2xTdYax1vYK5byQGUYovwqphsclmavBKeqLUuEe4PxiWR=s1360-w1360-h1020-rw',
                'Masjid Al Jabar Cipeuyeum merupakan salah satu masjid yang penting bagi masyarakat di Kecamatan Cipeuyeum...',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...',
                'Al-Jabbar'
            ),
            new Mitra(
                6,
                'Al Jabbar Cibinong',
                'https://scontent-cgk2-2.xx.fbcdn.net/v/t1.6435-9/93852223_2468040633416552_8496942949404246016_n.jpg?stp=dst-jpg_p180x540_tt6&_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF7MUspJ9_M7gGEYeL2SEaedRXUXkavqtJ1FdReRq-q0h43J4PdgqrPbP-tt6wqcHkC5cONPtqlP7GGfgW6ftbl&_nc_ohc=ZqeN9sS9kBEQ7kNvwG5wk9I&_nc_oc=AdnjRdlZPt8RQYnX0TnjH7yWUUs7yDjRDk8DfS9RpckkmlRaT2ApzxBJ9nqtHFHLb2I&_nc_zt=23&_nc_ht=scontent-cgk2-2.xx&_nc_gid=rgNUjjDGXU7SCjOWUG25rA&oh=00_AfXJg-7Xmf6-WcX82yceRACQO1-2ImYjP1p4rFDsPZWrTw&oe=68D5F1CC',
                'Masjid al-jabbar Prov jabar dibangun di lokasi yang tepatnya berada di Kес. Cibinong Kab Cianjur...',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...',
                'Al-Jabbar'
            ),
            new Mitra(
                8,
                'Al Jabbar Kertajati',
                'https://asset-2.tribunnews.com/priangan/foto/bank/images/lgklfuklyfi.jpg',
                'Masjid Al-Jabbar Kertajati dibangun sebagai salah satu ikon baru di wilayah Kabupaten Majalengka...',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...',
                'Al-Jabbar'
            ),

            // Kategori Al-Jabbar Gedebage
            new Mitra(
                7,
                'Al Jabbar',
                'https://citarumharum.jabarprov.go.id/eusina/uploads/2022/12/seninc4.jpg',
                'Ridwan Kamil. Pada 2015, la diminta secara langsung oleh Gubernur Jabar Ahmad Heryawan untuk mendesain Al Jabbar...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.',
                'Al-Jabbar Gedebage'
            ),

            // Kategori BPIC
            new Mitra(
                9,
                'Masjid Raya Bandung',
                'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Masjid_Raya_Bandung_dan_Alun-alun_Bandung_%28potrait%29.jpg/1200px-Masjid_Raya_Bandung_dan_Alun-alun_Bandung_%28potrait%29.jpg',
                'Masjid Raya Bandung, yang dahulu dikenal sebagai Masjid Agung Bandung, merupakan salah satu ikon religius...',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...',
                'BPIC'
            ),
            new Mitra(
                10,
                'Masjid Raya Raudhatul Irfan',
                'https://suaramasjid.com/wp-content/uploads/2016/09/masjid_raya_raudhatul_irfan-1.jpg',
                'Pembangunan Masjid Raya Raudahtul Ifan diprakarsai oleh Provinsi Jawa Barat pada masa kepemimpinan Gubernur Ahmad Heriawan...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.',
                'BPIC'
            ),
            new Mitra(
                11,
                'Pusdai',
                'https://karyakubah.com/wp-content/uploads/2020/01/Pusdai.jpg',
                'Pemerintah Provinsi Jawa Barat sejak lama memiliki cita-cita untuk mewujudkan sebuah Pusat Dakwah Islam (Pusdai)...',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...',
                'BPIC'
            ),
            new Mitra(
                12,
                'At Tawuun',
                'https://uloom.id/wp-content/uploads/2018/11/Masjid-Attaauwn1-1130x650.jpg',
                'Masjid At-Tawun adalah salah satu masjid ikonik yang terletak di kawasan Puncak...',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...',
                'BPIC'
            ),
            new Mitra(
                13,
                'Nurul Quran',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4nobN95OVm8izSUOPzvcJIVAyPabeKDoh2HrSP95RFkQlSBpoVzyofoQxXgWDfjpL8ufcPg0RnylYh_z4xpZjraxRtf9QiiAy5Bxnqp_5iTfz0hDGCnVLP7xe91u8Zhro3LiEAw=s1360-w1360-h1020-rw',
                'Mesjid Nurul Quran menjadi salah satu penunjang kegiatan sholat 5 waktu...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.',
                'BPIC'
            ),
        ];
    }

    public static function find($id)
    {
        foreach (self::all() as $mitra) {
            if ($mitra->id == $id) {
                return $mitra;
            }
        }
        return null;
    }

    // Method baru untuk mendapatkan data berdasarkan kategori
    public static function getByCategory($kategori = null)
    {
        $allMitras = self::all();
        
        if ($kategori) {
            return array_filter($allMitras, function($mitra) use ($kategori) {
                return $mitra->kategori === $kategori;
            });
        }
        
        return $allMitras;
    }

    // Method untuk mendapatkan data yang sudah dikelompokkan berdasarkan kategori
    public static function getAllGroupedByCategory()
    {
        $allMitras = self::all();
        $grouped = [];
        
        foreach ($allMitras as $mitra) {
            $grouped[$mitra->kategori][] = $mitra;
        }
        
        return $grouped;
    }

    // Method untuk mendapatkan daftar kategori unik
    public static function getCategories()
    {
        $allMitras = self::all();
        $categories = [];
        
        foreach ($allMitras as $mitra) {
            if (!in_array($mitra->kategori, $categories)) {
                $categories[] = $mitra->kategori;
            }
        }
        
        return $categories;
    }
}