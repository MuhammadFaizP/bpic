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
                'Masjid Al-Jabbar Cikalong terletak di Jalan Raya Pantai Selatan, Desa Cimanuk, Kecamatan Cikalong, KabupatenTasikmalaya. Dibangun pada tahun 2017 oleh Pemerintah Provinsi Jawa Barat, masjid ini merupakan bagian dari inisiatif pembangunan masjid-masjid Al-Jabbar di berbagai wilayah Jawa Barat, termasuk Sukabumi, Cianjur, Majalengka, dan Bandung. Berdiri di atas lahan seluas sekitar dua hektar, Masjid Al- Jabbar Cikalong menjadi landmark penting di jalur wisata selatan Jawa Barat. Lokasinya yang strategis, tepat di seberang Objek Wisata Pantai Karangtawulan, menjadikan masjid ini sebagai tempat istirahat dan ibadah bagi para pelancong yang melintasi kawasan tersebut. Masjid ini dirancang dengan arsitektur megah dan memiliki tiga lantai yang dilengkapi dengan ornamen khas. Selain digunakan untuk shalat lima waktu, masjid ini juga menjadi pusat kegiatan keagamaan seperti pengajian dan peringatan hari besar Islam. Meskipun belum digunakan untuk shalat Jumat secara rutin, masjid ini telah menjadi tempat berkumpulnya jamaah dari berbagai daerah, terutama saat pengajian besar PHBI. Sebagai pusat ibadah dan aktivitas sosial, Masjid Al-Jabbar terus berupaya meningkatkan pelayanan, kenyamanan, serta fasilitasnya demi tercapainya fungsi masjid sebagai tempat pembinaan umat yang bersih, teratur, dan bermanfaat bagi semua kalangan.',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...'
            ),
            new Mitra(
                3,
                'Al Jabbar Plumbon',
                'https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/jawapos/2017/10/menara-ambruk-pembangunan-masjid-al-jabbar-plumbon-kembali-dilanjut_m_161055.jpeg',
                'Masjid Al Jabbar Plumbon adalah salah satu masjid yang dibangun oleh Pemerintah Provinsi Jawa Barat sebagai bagian dari upaya memperkuat infrastruktur keagamaan dan sosial di wilayah tersebut. Masjid ini berdiri kokoh di Desa Plumbon, Kecamatan Plumbon, Kabupaten Cirebon, dan diresmikan pada tahun 2019. Terletak di atas tanah seluas 26.165 m², masjid ini memiliki desain modern dan fasilitas yang mendukung kenyamanan bagi para jamaah dalam melaksanakan ibadah.

Dengan visi untuk menjadi pusat kegiatan keagamaan dan sosial yang memberikan manfaat kepada masyarakat sekitar, Masjid Al Jabbar tidak hanya berfungsi sebagai tempat ibadah, tetapi juga sebagai pusat pemberdayaan umat Islam di lingkungan Kecamatan Plumbon. Masjid ini berkomitmen untuk menciptakan suasana yang kondusif bagi pengembangan spiritualitas, sekaligus mempererat hubungan sosial antarwarga melalui berbagai program yang melibatkan jamaah dan masyarakat.

Disamping itu Masjid Al Jabbar juga sebagai tempat yang mengutamakan nilainilai ukhuwah Islamiyah dan kepedulian sosial, serta memiliki berbagai program yang dirancang untuk memenuhi kebutuhan spiritual dan sosial masyarakat. Programprogram ini mencakup ibadah rutin seperti pelaksanaan sholat lima waktu, sholat Jumat, serta kegiatan keagamaan lainnya seperti Khotmil Quran, Yasin dan Tahlil, serta peringatan Maulid Nabi Muhammad SAW. Selain itu, masjid ini juga mengadakan pengajian bulanan dan tahunan yang melibatkan jamaah dalam kegiatan pendidikan agama yang mendalam.

Dengan dedikasi yang tinggi terhadap kemaslahatan umat, Masjid Al Jabbar terus berupaya untuk menjadi pusat penguatan nilai-nilai keagamaan sekaligus berperan aktif dalam kegiatan sosial di masyarakat sekitar.',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            new Mitra(
                4,
                'Al Jabbar Cimangkok',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4npxsU5WSKlkUYxBvSt8gqxTAsd4whdfc4XHa2wjh0raDUWfpWOfjQmIJCAstDu0j6dtAgubEUJWRo7C6i_C-XjmDT8eKnRSgVYh6eoXViz8qIzcMWvxUxA5H9kju5KAK9MRj7m1uA=s1360-w1360-h1020-rw',
                'Masjid aljabar merupakan masjid yang dibangun oleh pemprov jabar yang berada di atas tanah milik perhutani yang di bangun pada tahun 2016 sd 2019. ',
                'Ketua DKM: Dr. H. Abdul Malik, dll.'
            ),
            new Mitra(
                5,
                'Al Jabbar Cipeyeum',
                'https://lh3.googleusercontent.com/gps-cs-s/AC9h4nq_kzj0Ycwnsz6LVs0695-S9E-zKxtQBJAsiakEXYdkRCvoK8jjmNOWh3-bcMV5iqpUgL6JWqTXcic9rmyNAM6ItYf2xTdYax1vYK5byQGUYovwqphsclmavBKeqLUuEe4PxiWR=s1360-w1360-h1020-rw',
                'Masjid Al Jabar Cipeuyeum merupakan salah satu masjid yang penting bagi masyarakat di Kecamatan Cipeuyeum, Kabupaten Cianjur. Keberadaan masjid ini diharapkan tidak hanya untuk memenuhi kebutuhan ibadah umat Islam, tetapi juga menjadi pusat kegiatan sosial dan pendidikan agama bagi warga setempat.

1. Nama Masjid Al Jabar: Seperti yang sudah disebutkan sebelumnya, nama "Al Jabar" berasal dari salah satu nama Allah dalam agama Islam yang berarti "Yang Maha Memperbaiki". Nama ini mencerminkan harapan agar masjid ini dapat menjadi tempat yang dapat memperbaiki dan membimbing umat Islam dalam kehidupan mereka, baik dari segi spiritual, sosial, maupun moral.

2. Pembangunan dan Tujuan Masjid: Masjid ini kemungkinan besar dibangun sebagai respons terhadap kebutuhan masyarakat Cipeuyeum akan tempat ibadah yang layak dan representatif. Selain sebagai tempat untuk shalat, masjid ini mungkin juga menjadi pusat kegiatan dakwah, pendidikan agama, dan kegiatan sosial lainnya, seperti pemberian zakat dan bantuan untuk yang membutuhkan.

3. Peran dalam Masyarakat: Masjid Al Jabar tidak hanya berfungsi sebagai tempat ibadah, tetapi juga sebagai tempat untuk kegiatan keagamaan dan sosial. Program-program seperti pengajian, kegiatan kemasyarakatan, hingga pembinaan untuk anak-anak dan remaja sering kali diadakan di masjid-masjid seperti ini. Kehadiran masjid ini diharapkan dapat memperkuat ikatan sosial antarwarga dan memberikan dampak positif bagi pengembangan spiritual masyarakat.

4. Konteks Geografis dan Sejarah Cipeuyeum: Cipeuyeum adalah sebuah kecamatan yang terletak di Kabupaten Cianjur, Jawa Barat. Wilayah ini dikenal dengan nuansa pedesaan yang kental dan masyarakat yang hidup dalam keseharian yang sangat bergantung pada nilai-nilai agama dan sosial. Masyarakat Cipeuyeum, seperti banyak daerah lainnya di Indonesia, sangat menghargai keberadaan masjid sebagai tempat untuk berkumpul dan menjalankan ibadah bersama.

5. Perkembangan Seiring Waktu: Seiring berjalannya waktu, masjid seperti Masjid Al Jabar juga berperan penting dalam menjaga keberlanjutan kegiatan agama dan sosial di tingkat lokal. Selain menjadi tempat ibadah, masjid ini juga bisa menjadi wadah untuk kegiatan kemanusiaan seperti bantuan sosial, pendidikan, serta pengembangan keterampilan bagi warga sekitar.

Kesimpulan
Meskipun detail tentang sejarah spesifik pembangunan Masjid Al Jabar Cipeuyeum tidak terlalu mudah ditemukan di sumber-sumber umum, dapat dipahami bahwa masjid ini memiliki peran yang sangat penting dalam kehidupan spiritual dan sosial masyarakat setempat. Nama "Al Jabar" sendiri mencerminkan niat untuk menjadikan masjid ini sebagai tempat untuk memperbaiki, menyatukan, dan memberikan kedamaian bagi umat Islam di Cipeuyeum.',
                'Ketua DKM: Budi Santoso, Seksi Dakwah: Ahmad...'
            ),
            new Mitra(
                6,
                'Al Jabbar Cibinong',
                'https://scontent-cgk2-2.xx.fbcdn.net/v/t1.6435-9/93852223_2468040633416552_8496942949404246016_n.jpg?stp=dst-jpg_p180x540_tt6&_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF7MUspJ9_M7gGEYeL2SEaedRXUXkavqtJ1FdReRq-q0h43J4PdgqrPbP-tt6wqcHkC5cONPtqlP7GGfgW6ftbl&_nc_ohc=ZqeN9sS9kBEQ7kNvwG5wk9I&_nc_oc=AdnjRdlZPt8RQYnX0TnjH7yWUUs7yDjRDk8DfS9RpckkmlRaT2ApzxBJ9nqtHFHLb2I&_nc_zt=23&_nc_ht=scontent-cgk2-2.xx&_nc_gid=rgNUjjDGXU7SCjOWUG25rA&oh=00_AfXJg-7Xmf6-WcX82yceRACQO1-2ImYjP1p4rFDsPZWrTw&oe=68D5F1CC',
                'Masjid al-jabbar Prov jabar dibangun di lokasi yang tepatnya berada di Kес. Cibinong Kab Cianjur jawabarat di jalan provinsi yang menghubungkan antar daerah di prov jabar, masjid tersebut dibangun sebagai simpul pemersatu antar daerah. masjid tersebut selain sebagai sarana ibadah umat muslim, lingkungan masjid tersebut juga dapat dipakai sebagai tempat peristirahatan dan sarana umum bagi orang yang melakukan perjalanan antar daerah, sehingga kondisi tersebut diharapkan dapat memakmurkan masjid dan warga sekitarnya.',
                'Ketua DKM: Siti Aminah, Seksi Pendidikan: Fatimah...'
            ),
            new Mitra(
                7,
                'Al Jabbar',
                'https://citarumharum.jabarprov.go.id/eusina/uploads/2022/12/seninc4.jpg',
                'Ridwan Kamil. Pada 2015, la diminta secara langsung oleh Gubernur Jabar Ahmad Heryawan untuk mendesain Al Jabbar. Al Jabbar adalah salah satu diantara 99 Nama Asmaul Husna yang artinya Maha Gagah; Maha Kuasa.

Jawa Barat adalah provinsi dengan jumlah penduduk mayoritas Islam terbanyak di Indonesia dengan presentase penduduk beragama Islam Mencapai 97,8 %. Jawa Barat belum memiliki masjid raya yang bisa menampung dan menjadi pusat kegiatan keagamaan skala provinsi atau sekala besar.

Masjid Raya Provinsi Bandung di Alun-Alun Kota Bandung ada di bawah kewenangan Pemerintah Kota Bandung. Masjid tersebut tidak mewakili 27 kota dan kabupaten Jawa Barat secara keseluruhan, seperti Majalengka, Pangandaran, Cirebon, Bekasi,Bogor, dan seterusnya.

Kapasitas Masjid Raya Bandung atau Masjid Pusat Dakwah Islam di Jalan Diponegoro, Kota Bandung masih terbatas. Kapasitas disini adalah daya tampung jamaah di dalam masjid, maupun di areal luar masjid. Daya tampung Masjid Raya Bandung mencapai dalam dan luar 12.412 orang sedangkan Masjid PUSDAI menampung Jamaah 16.850 orang. dan untuk masjid raya Al Jabbar bisa menampung area dalam masjid sebanyak 35.000 orang dan untuk area luar bisa menampung 60.000 sampai 70.000 orang di total menjadi 105.000 Jamaah.

Jawa Barat belum memiliki masjid yang menjadi ikon kokohnya nilai religius sebuah provinsi seperti halnya Masjid Istiqlal, Jakarta atau Masjid Kubah 99 Sulawesi Selatan. Secara garis besar Masjid Al Jabbar terdiri dari bangunan utama, marodh atau museum, plaza, taman tematik, danau retensi dan sarana penunjang

Konsep gagasan masjid ini mencoba merespons konteks alam dan lingkungan Gedebage. Gedebage sendiri adalah kawasan yang punya masalah dengan air. Pada musim hujan kawasan ini rawan banjir, sebaliknya pada musim kering kawasan ini justru sering kekurangan air karena itu digagas adanya sebuah danau buatan sebagai penampang sekaligus penampung air. Usulan lokasi diinisiasi oleh Ridwan Kamil saat menjadi Wali Kota Bandung yang mengusulkan pada Gubernur Jabar Ahmad Heryawan saat itu agar Gedebage menjadi lokasi yang tepat untuk Al Jabbar

Pertama, penampang Al Jabbar adalah kolam retensi yang sanggup menampung 210.000 meter kubik air dan menjadi pengendali banjir paling besar di wilayah Gedebage yang kerap dilanda banjir. Kedua, Bandung Timur sudah ditetapkan sebagai kawasan mandiri yang diharapkan infrastruktur yang dibangun bisa meningkatkan pergerakan orang dan barang serta sektor jasa. Masjid Al Jabbar tak hanya menjadi tempat ibadah, tapi akan menjadi pusat edukasi dan rekreasi, juga mendongkrak ekonomi masyarakat di kawasan Bandung Timur.

Arsitektur Masjid Raya Al Jabbar dirancang dari perpaduan arsitektur modern kontemporer dengan aksentuasi masjid Turki yang dihiasi seni dekoratif khas Jawa Barat. Bangunan utama masjid tidak memisahkan dinding, atap, dan kubah, melainkan hasil peleburan ketiganya menjadi satu bentuk setengah bola raksasa. Ketiga sisi bangunan masjid dikelilingi sebuah danau besar yang, ibarat cermin, merefleksikan masjid menjadi berbentuk bulat utuh. Pada malam hari, kerlip tata cahaya menambah keindahan masjid. Selain keindahan, danau memiliki fungsi penting lain; sebagai retensi banjir sekaligus penyimpan air. Semua hal tersebut memang direncanakan dengan sangat seksama oleh sang arsitek, Mochamad Ridwan Kamil.

Masjid Raya Al Jabbar mulai didesain tahun 2015 oleh Ridwan Kamil, sebuah kesempatan berharga yang disambut dengan gembira. Selain berlatar belakang arsitek, Ridwan Kamil juga selalu berkeinginan dapat menunaikan wasiat sang ayahanda yang berpesan agar jangan pernah berhenti mendesain masjid. Usulan pendirian masjid didasari beberapa alasan. Pertama, Jawa Barat sebagai sebuah provinsi belum memiliki Masjid Raya tingkat Pemerintah Daerah Provinsi. Kedua, Jawa Barat adalah sebuah provinsi dengan jumlah penduduk pemeluk agama Islam terbanyak di Indonesia. Ketiga, Jawa Barat juga memerlukan masjid besar yang dapat membanggakan warganya.

Luas dan tingginya lantai salat dihiasi 27 relung terbuat dari relief tembaga yang ditempa dengan halus oleh tangan-tangan terampil para perajin yang sangat tekun. Relief berupa motif batik ini mewakili tiap kota dan kabupaten yang sekaligus mengekspresikan kekayaan seni masyarakat Jawa Barat. Lantai di bawah mezanin diterangi lampu kuningan karya perajin Gentur, Cianjur, dengan warna keemasannya yang mampu memberi rasa mewah. Di bagian dinding sisi barat, terdapat mihrab yang terhubung hingga mahkota di pucuk langit-langit yang melambangkan bahwa hanya kepada Allah SWT kita meminta.

Keistimewaan lainnya ada pada lantai dasar atau ma’rodh yang berisi museum sejarah Rasulullah SAW, sejarah perkembangan Islam di tanah air, dan sejarah Islam di Jawa Barat. Hal ini menjadikan Masjid Raya Al Jabbar sebagai satu-satunya masjid di Indonesia yang memiliki pusat edukasi berupa museum dengan penggunaan teknologi digital terkini.',
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
