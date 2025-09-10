<?php

namespace App\Models;

class Mitra
{
    public $id;
    public $nama;
    public $gambar;
    public $sejarah;
    public $strukturOrganisasi;

    public function __construct($id, $nama, $gambar, $sejarah, $strukturOrganisasi)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->gambar = $gambar;
        $this->sejarah = $sejarah;
        $this->strukturOrganisasi = $strukturOrganisasi;
    }

    public static function all()
    {
        return [
            new Mitra(
                1,
                'Al Jabbar Pangandaran',
                'https://i.ytimg.com/vi/le2-XFRzRj8/maxresdefault.jpg',
                'Masjid ini dibangun oleh pemerintah provinsi Jawa Barat dimulai pembangunan ini kisaran tahun 2014 pada masa gubernur Bapak Ahmad Heryawan dan diresmikan pada bulan Juni 2018 dengan keadan masjid yang termasuk belum siap pakai dikarenakan pembangunannya belum rampung (Bocor dan toilet belum bias digunakan). 
                
                Selanjutnya pada tanggal 8 mei 2019 dilantik kepengurusan masjid AL-jabbar Kalipucang oleh SEKDA Jabar Dengan Ketua DKM KH. R. Hilal Faridz T., S.Pd.I, MM yang berlaku selama 3 (tiga) tahun. Pada saat itu masjid belum sepenuhnya rampung (masjid yang masih bocor dan toilet pria yang belum bias digunakan ditambah per airan yang terbatas maka ketua DKM mengeluarkan uang pribadi ditambah swadaya lainya memperbaiki hal tersebut yang diperkirakan menghabiskan biaya kurang lebih Rp. 40.000.000,- 
                 
                Selanjutnya ketua DKM mengutus santri yang bernama Budiyanto untuk tinggal dan menempati Gedung secretariat yang sama belum rampung pembangunannya sampai sekarang, namun seiring waktu kegiatan demi kegiatan berjalan dan alhamdulilah semua kendala dan kekurangan bisa diatasi. Pada tanggal 1 April 2022 pemerintah Provinsi Jawa barat memperpanjang dan melantik kembali kepengurusan DKM melalui ZOOM Meting menetapkan dengan KETUA DKM KH. R. Hilal Faridz T., S.Pd.I., MM untuk melaksanakan tugas selama 3 tahun yakni sampai sekarang.',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...'
            ),
            new Mitra(
                2,
                'Al Jabbar Cikalong',
                'https://static.vecteezy.com/system/resources/previews/008/422/239/large_2x/tasikmalaya-west-java-indonesia-june-04-2022-portrait-of-al-jabbar-cikalong-mosque-free-photo.jpg',
                'Merupakan pusat kegiatan Islam di wilayah Cikalong...',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...'
            ),
            new Mitra(
                3,
                'Al Jabbar Plumbon',
                'https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/jawapos/2017/10/menara-ambruk-pembangunan-masjid-al-jabbar-plumbon-kembali-dilanjut_m_161055.jpeg',
                'Masjid ini didirikan pada tahun 1810...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            new Mitra(
                4,
                'Al Jabbar Cimangkok',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4npxsU5WSKlkUYxBvSt8gqxTAsd4whdfc4XHa2wjh0raDUWfpWOfjQmIJCAstDu0j6dtAgubEUJWRo7C6i_C-XjmDT8eKnRSgVYh6eoXViz8qIzcMWvxUxA5H9kju5KAK9MRj7m1uA=s1360-w1360-h1020-rw',
                'Masjid ini didirikan pada tahun 1810...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            new Mitra(
                5,
                'Al Jabbar Cipeyeum',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4nq_kzj0Ycwnsz6LVs0695-S9E-zKxtQBJAsiakEXYdkRCvoK8jjmNOWh3-bcMV5iqpUgL6JWqTXcic9rmyNAM6ItYf2xTdYax1vYK5byQGUYovwqphsclmavBKeqLUuEe4PxiWR=s1360-w1360-h1020-rw',
                'Dibangun pada tahun 2018...',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...'
            ),
            new Mitra(
                6,
                'Al Jabbar Cibinong',
                'https://scontent-cgk2-2.xx.fbcdn.net/v/t1.6435-9/93852223_2468040633416552_8496942949404246016_n.jpg?stp=dst-jpg_p180x540_tt6&_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF7MUspJ9_M7gGEYeL2SEaedRXUXkavqtJ1FdReRq-q0h43J4PdgqrPbP-tt6wqcHkC5cONPtqlP7GGfgW6ftbl&_nc_ohc=ZqeN9sS9kBEQ7kNvwG5wk9I&_nc_oc=AdnjRdlZPt8RQYnX0TnjH7yWUUs7yDjRDk8DfS9RpckkmlRaT2ApzxBJ9nqtHFHLb2I&_nc_zt=23&_nc_ht=scontent-cgk2-2.xx&_nc_gid=rgNUjjDGXU7SCjOWUG25rA&oh=00_AfXJg-7Xmf6-WcX82yceRACQO1-2ImYjP1p4rFDsPZWrTw&oe=68D5F1CC',
                'Merupakan pusat kegiatan Islam di wilayah Cikalong...',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...'
            ),
            new Mitra(
                7,
                'Al Jabbar',
                'https://citarumharum.jabarprov.go.id/eusina/uploads/2022/12/seninc4.jpg',
                'Masjid ini didirikan pada tahun 1810...',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            new Mitra(
                8,
                'Al Jabbar Kertajati',
                'https://asset-2.tribunnews.com/priangan/foto/bank/images/lgklfuklyfi.jpg',
                'Masjid Al-Jabbar Kertajati dibangun sebagai salah satu ikon baru di wilayah Kabupaten Majalengka, tepatnya di kawasan Kertajati yang terus berkembang setelah hadirnya Bandara Internasional Jawa Barat (BIJB). Kehadiran masjid ini dimaksudkan untuk menjadi pusat ibadah, dakwah, sekaligus landmark religius yang memperkuat identitas kawasan sebagai gerbang baru Jawa Barat.

                Nama “Al-Jabbar” sendiri merupakan salah satu Asmaul Husna yang berarti Yang Maha Perkasa, melambangkan kebesaran Allah sekaligus tekad kuat Pemerintah Provinsi Jawa Barat untuk menghadirkan masjid yang bukan hanya berfungsi sebagai tempat ibadah, tetapi juga pusat pembinaan umat, pendidikan, dan kegiatan sosial masyarakat. Dengan demikian, Masjid Al-Jabbar Kertajati diharapkan mampu menghadirkan cahaya spiritual sekaligus menjadi ruang berkumpul yang bermanfaat bagi warga lokal maupun para pendatang.

                Secara arsitektural, masjid ini dirancang dengan gaya modern berpadu dengan sentuhan islami yang elegan. Bangunannya dilengkapi dengan ruang utama salat yang luas, kubah besar yang menjadi pusat perhatian, serta area pendukung yang membuat jamaah merasa nyaman. Lokasinya yang strategis di jalur akses menuju bandara menjadikan Masjid Al-Jabbar sebagai tempat transit sekaligus destinasi wisata religi bagi masyarakat yang berkunjung ke Kertajati.

                Dengan segala keistimewaannya, Masjid Al-Jabbar Kertajati tidak hanya hadir sebagai sarana spiritual, tetapi juga menjadi simbol perkembangan kawasan Kertajati, serta wujud nyata bagaimana pembangunan infrastruktur dapat selaras dengan nilai-nilai keagamaan dan kebudayaan masyarakat Jawa Barat.',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...'
            ),
            new Mitra(
                9,
                'Masjid Raya Bandung',
                'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Masjid_Raya_Bandung_dan_Alun-alun_Bandung_%28potrait%29.jpg/1200px-Masjid_Raya_Bandung_dan_Alun-alun_Bandung_%28potrait%29.jpg',
                'Masjid Raya Bandung, yang dahulu dikenal sebagai Masjid Agung Bandung, merupakan salah satu ikon religius sekaligus sejarah di Kota Bandung. Masjid ini pertama kali dibangun pada tahun 1810, bersamaan dengan pemindahan pusat Kabupaten Bandung dari Dayeuhkolot ke Alun-Alun Bandung oleh Bupati Wiranatakusumah II. Pada awalnya, bangunan masjid sangat sederhana, berdinding anyaman bambu dengan atap ijuk, dan menjadi pusat kegiatan keagamaan bagi masyarakat sekitar alun-alun.

                Seiring berjalannya waktu, masjid ini mengalami banyak perubahan dan renovasi besar. Atapnya mulai diganti genteng pada 1875, lalu ditambahkan serambi serta menara kecil pada dekade 1930-an. Renovasi terbesar pertama dilakukan menjelang Konferensi Asia Afrika tahun 1955, di mana masjid diperbarui dengan gaya modern dan kubah berbentuk kubus runcing. Renovasi serupa kembali dilakukan pada tahun 1967 dan 1973, sehingga wajah masjid semakin berubah mengikuti perkembangan arsitektur masa itu.

                Transformasi paling signifikan terjadi pada periode 2001 hingga 2003, ketika pemerintah Provinsi Jawa Barat melakukan perombakan total. Masjid kemudian tampil megah dengan kubah bawang berwarna emas, dua menara kembar setinggi 81 meter, serta halaman luas yang kini menjadi ruang publik bagi warga. Pada 4 Juni 2003, masjid ini diresmikan kembali dan diberi nama baru, yaitu Masjid Raya Bandung Provinsi Jawa Barat.

                Kini, Masjid Raya Bandung tidak hanya berfungsi sebagai tempat ibadah bagi ribuan jamaah, tetapi juga menjadi pusat dakwah, pendidikan Islam, dan kegiatan sosial masyarakat. Lokasinya yang berada tepat di sisi barat Alun-Alun Bandung membuat masjid ini menjadi salah satu destinasi wisata religi yang populer, sekaligus simbol kebanggaan masyarakat Jawa Barat.',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...'
            ),
            new Mitra(
                10,
                'Masjid Raya Raudhatul Irfan',
                'https://suaramasjid.com/wp-content/uploads/2016/09/masjid_raya_raudhatul_irfan-1.jpg',
                'Pembangunan Masjid Raya Raudahtul Ifan diprakarsai oleh Provinsi Jawa Barat pada masa kepemimpinan Gubernur Ahmad Heriawan pada tahun 2012 dan di resmikan pada tanggal 7 juli 2014 oleh Bapak Gubernur. Masjid Raya Raudhatul Irfan berdiri megah di sepanjang Jalan Raya Sukabumi–Bogor, tepatnya di Desa Cibolang Kaler, Kecamatan Cisaat, Kabupaten Sukabumi. Ide pembangunannya bermula dari inisiatif Pemerintah Provinsi Jawa Barat bersama Dinas Bina Marga Jabar, dengan peletakan batu pertama oleh Gubernur Ahmad Heryawan pada 29 Januari 2013. Setelah melewati proses pembangunan, masjid ini resmi diresmikan pada 7 Juli 2014, dengan harapan dapat mempermudah masyarakat menunaikan ibadah di sepanjang jalur utama—terutama bagi mereka yang dalam perjalanan—serta menjadi pusat kegiatan keagamaan dan sosial.

                Dibangun di atas lahan seluas 9,000 m² dengan luas bangunan utama sekitar 900 m², masjid ini dilengkapi fasilitas yang mendukung kenyamanan jamaah, seperti area parkir luas, taman, dan perkantoran bagi pengurus DKM. Ciri khas arsitektur masjid ini terlihat dari interior dominan warna hijau-putih yang dihiasi ornamen bergaya Persia, serta ruang utama yang luas dengan karpet indah dan kaligrafi di setiap sudutnya. Nama “Raudhatul Irfan” sendiri diambil dari kitab tafsir populer hasil karya ulama besar Sukabumi, K.H. Ahmad Sanusi, yang bermakna "taman pengetahuan", sebagai cerminan harapan agar masjid ini menjadi pusat pembelajaran dan peradaban Islam di Sukabumi.

                Sebagai pusat spiritual dan sosial, Masjid Raya Raudhatul Irfan aktif menyelenggarakan berbagai kegiatan, seperti pengajian rutin setiap Ahad pagi (dikenal sebagai “JIHAD”), kajian oleh organisasi seperti HMI atau PMII, serta donor darah, panti asuhan, dan pembagian takjil pada bulan Ramadan. Lokasinya yang strategis di jalur utama juga membuat masjid ini menjadi tempat transit sekaligus peristirahatan bagi jamaah dan pelancong, memadukan fungsi religius dan kebersamaan.',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            new Mitra(
                11,
                'Pusdai',
                'https://karyakubah.com/wp-content/uploads/2020/01/Pusdai.jpg',
                'Pemerintah Provinsi Jawa Barat sejak lama memiliki cita-cita untuk mewujudkan sebuah Pusat Dakwah Islam (Pusdai) sekaligus masjid raya yang representatif di ibu kota provinsi, yaitu Kota Bandung. Hingga saat itu, Pemerintah Kotamadya Bandung sendiri belum memiliki bangunan khusus yang dapat menampung fungsi tersebut.

                Rencana pembangunan Pusdai sebenarnya sudah ada sejak lama, dan merupakan kelanjutan dari gagasan yang dicetuskan pada tahun 1951. Perencanaan ini juga telah disesuaikan dengan Rencana Umum Tata Ruang Kota Bandung.

                Secara pengertian, Pusat Dakwah Islam (Pusdai) Jawa Barat dapat dipahami sebagai “masjid yang diperluas”. Artinya, masjid tidak hanya berfungsi sebagai tempat ibadah, melainkan juga menjadi pusat aktivitas pengabdian agama Islam bagi pembangunan masyarakat, sebagaimana tujuan pokok yang disebutkan dalam Al-Qur’an. Seiring perkembangan zaman, baik dalam lingkup dunia Islam secara umum maupun di Indonesia khususnya, Pusdai hadir sebagai wadah untuk berbagai kegiatan umat Islam, baik yang berakar dari tradisi masa lampau, kebutuhan saat ini, maupun tantangan di masa depan.

                Kehadiran Pusdai juga dimaksudkan untuk memelihara dan mengembangkan nilai-nilai kebudayaan Islam, yang berjalan beriringan dengan berbagai sarana keislaman yang sudah ada, termasuk hasil swadaya masyarakat. Dengan demikian, Pusdai berfungsi sebagai pusat penyebaran ajaran Islam sekaligus pusat kebudayaan Islam di Jawa Barat.

                Lebih jauh, Pusdai Jawa Barat merupakan upaya nyata dalam merespons kehidupan umat manusia yang mencakup hubungan dengan Tuhan, sesama manusia, dan alam semesta. Kompleks Pusdai sendiri dirancang untuk dapat menampung tiga kelompok aktivitas utama, yaitu keagamaan, sosial, dan kultural.

                Dengan keberadaannya, Pusdai diharapkan menjadi pusat pengembangan umat Islam menuju masyarakat yang tercerahkan, berdaya cipta, serta mampu melakukan pembaruan secara ilmiah dan berkelanjutan.',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...'
            ),
            new Mitra(
                12,
                'At Tawuun',
                'https://uloom.id/wp-content/uploads/2018/11/Masjid-Attaauwn1-1130x650.jpg',
                'Masjid At-Tawun adalah salah satu masjid ikonik yang terletak di kawasan Puncak, Kabupaten Bogor, Jawa Barat. Masjid ini dibangun untuk memenuhi kebutuhan tempat ibadah bagi masyarakat setempat maupun para wisatawan yang melintasi jalur Puncak, yang setiap harinya ramai dilewati pengunjung dari berbagai daerah. Kehadiran Masjid At-Tawun tidak hanya sebagai sarana ibadah, tetapi juga sebagai ruang peristirahatan dan pusat kegiatan keagamaan bagi umat Islam di kawasan tersebut.

                Dibangun di lahan yang cukup luas dengan suasana sejuk khas pegunungan, Masjid At-Tawun menawarkan pengalaman spiritual yang berpadu dengan keindahan alam. Arsitekturnya menampilkan desain modern dengan sentuhan Islami, serta ruang dalam yang lapang sehingga mampu menampung banyak jamaah sekaligus. Lingkungan sekitar masjid ditata dengan taman hijau dan area terbuka yang memberikan kenyamanan bagi pengunjung, baik untuk beribadah maupun sekadar beristirahat dalam perjalanan.

                Seiring berjalannya waktu, Masjid At-Tawun berkembang menjadi salah satu destinasi wisata religi populer di jalur Puncak. Banyak jamaah dan wisatawan yang singgah untuk melaksanakan salat, mengikuti pengajian, atau menikmati suasana teduh di sekitar masjid. Fungsinya yang menyatukan aspek religius, sosial, dan rekreasi menjadikan Masjid At-Tawun bukan hanya simbol spiritual, tetapi juga bagian penting dari identitas kawasan Puncak sebagai wilayah wisata dan peristirahatan.',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...'
            ),
            new Mitra(
                13,
                'Nurul Quran',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4nobN95OVm8izSUOPzvcJIVAyPabeKDoh2HrSP95RFkQlSBpoVzyofoQxXgWDfjpL8ufcPg0RnylYh_z4xpZjraxRtf9QiiAy5Bxnqp_5iTfz0hDGCnVLP7xe91u8Zhro3LiEAw=s1360-w1360-h1020-rw',
                'Mesjid Nurul Qur’an menjadi salah satu penunjang kegiatan sholat 5 waktu untuk kegiatan yang ada di area gedung Lembaga Pengembangan Tilawatil Qur’an (LPTQ) Provinsi Jawa Barat. Masjid Nurul Qur’an merupakan salah satu masjid representatif yang dibangun oleh Pemerintah Provinsi Jawa Barat sebagai bagian dari upaya menyediakan sarana ibadah yang layak sekaligus pusat pembinaan umat Islam. Kehadirannya dimaksudkan untuk memperkuat fungsi masjid tidak hanya sebagai tempat salat, tetapi juga sebagai ruang dakwah, pendidikan, dan pengembangan budaya Islam di tingkat provinsi.

                Nama “Nurul Qur’an” yang berarti cahaya Al-Qur’an dipilih untuk menegaskan peran masjid ini sebagai sumber pencerahan spiritual bagi masyarakat. Dengan semangat tersebut, masjid ini diharapkan menjadi pusat kegiatan yang menginspirasi umat Islam untuk menjadikan Al-Qur’an sebagai pedoman hidup, baik dalam kehidupan pribadi, bermasyarakat, maupun dalam membangun peradaban yang berakhlak mulia.

                Secara arsitektural, Masjid Nurul Qur’an dibangun dengan desain modern yang berpadu dengan nuansa Islami. Ruang dalamnya luas untuk menampung banyak jamaah, sementara lingkungan sekitarnya ditata agar nyaman sebagai tempat beribadah maupun kegiatan keagamaan lainnya. Kehadirannya juga melengkapi jaringan masjid-masjid besar di Jawa Barat yang berfungsi sebagai simbol religius, pusat dakwah, serta sarana kebersamaan umat.

                Dengan segala potensi dan perannya, Masjid Nurul Qur’an diharapkan mampu menjadi pusat pembinaan umat Islam Jawa Barat, tempat berkumpulnya masyarakat untuk memperdalam ilmu agama, mempererat ukhuwah, serta menjadikan masjid sebagai pusat kegiatan sosial yang bermanfaat bagi seluruh lapisan masyarakat.',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            // Tambahkan data dummy masjid lainnya di sini
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
}
