-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Okt 2021 pada 10.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lembaga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembaga`
--

CREATE TABLE `tb_lembaga` (
  `id_deskripsi` int(4) NOT NULL,
  `nama_lembaga` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `deskripsi` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `kontak` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `website` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `gambar` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lembaga`
--

INSERT INTO `tb_lembaga` (`id_deskripsi`, `nama_lembaga`, `deskripsi`, `kontak`, `website`, `gambar`) VALUES
(1, 'Aliansi Lestari Rimba Terpadu ', 'ALeRT Indonesia adalah organisasi non profit, NGO atau Lembaga Swadaya Masyarakat yang berdiri tahun 2009 di Way Kambas, Labuhan Ratu, Kabupaten Lampung Timur, Provinsi Lampung.  ALeRT merupakan singkatan dari Aliansi Lestari Rimba Terpadu, atau dalam bahasa Inggris adalah The Alliance of Integrated Forest Conservation. ALeRT Indonesia didirikan dengan status badan hukum Perkumpulan, bukan Yayasan. Perkumpulan membuat seluruh anggota organisasi memiliki suara yang sama. Berbeda dengan Yayasan yang segala sesuatu tentang perjalanan Yayasan ditentukan oleh sebuah badan dalam Yayasan yang disebut Dewan Pembina.', 'alertwaykambas@gmail.com', 'http://www.alertindonesia.org/', 'alert.png'),
(2, 'Aspinall Foundation ', 'Yayasan Aspinall adalah badan amal konservasi hewan kelas dunia, yang didedikasikan untuk melindungi hewan yang terancam punah di seluruh dunia, didirikan pada tahun 1984. Sekarang, lebih dari 30 tahun misi kami tetap sama. Kami lebih berdedikasi dari sebelumnya untuk mengembalikan sebanyak mungkin hewan penangkaran ke kawasan belantara yang dilindungi dan cagar alam yang terletak di seluruh dunia.', 'marketing@aspinallfoundation.org', 'https://www.aspinallfoundation.org/', 'aspinall.jpg'),
(3, 'Burung Indonesia', 'Burung Indonesia didirikan sebagai organisasi konservasi nasional pada 2002 dengan nama resmi Perhimpunan Pelestarian Burung Liar Indonesia (BirdLife Indonesia Association). Dengan dukungan masyarakat, Burung ndonesia berusaha melestarikan burung-burung liar di Indonesia beserta habitatnya. Sebelumnya, pada 1992-2002 organisasi ini dikenal sebagai BirdLife International-Indonesia Programme.', 'info@burung.org', 'http://www.burung.org/', 'burungindonesia.jpeg'),
(4, 'Centre for Orangutan Protection ', 'Didirikan pada tahun 2007. COP bekerja memerangi kejahatan terhadap orangutan dan habitatnya. Kami menyelidiki, mendokumentasikan, mengekspose dan jika perlu berkonfrontasi langsung melawan penjahat yang mengancam kelangsungan hidup orangutan dan masyarakat setempat.', 'info@orangutanprotection.com ', 'https://orangutanprotection.com/', 'cop.png'),
(5, 'Conservation International ', 'Selama lebih dari tiga puluh tahun, Conservation International telah bekerja untuk menyoroti dan mengamankan manfaat penting yang diberikan alam kepada umat manusia. Menggabungkan kerja lapangan dengan inovasi dalam sains, kebijakan, dan keuangan, kami telah membantu melindungi lebih dari 6 juta kilometer persegi (2,3 juta mil persegi) daratan dan laut di lebih dari 70 negara.', 'ciindonesia@conservation.org ', 'https://www.conservation.org/', 'ci.png'),
(6, 'Copenhagen Zoo', 'Kebun binatang yang terletak di negara Denmark', 'zoo@zoo.dk', 'https://www.zoo.dk/', 'zoo.png'),
(7, 'Fauna & Flora Internasional', 'Didirikan lebih dari satu abad yang lalu, Fauna & Flora International (FFI) adalah organisasi konservasi satwa liar internasional tertua di dunia. Kami diam-diam membentuk dan memengaruhi praktik konservasi sejak pendirian kami pada tahun 1903. Fokus kami adalah melindungi keanekaragaman hayati (keanekaragaman kehidupan di Bumi), yang menopang ekosistem yang sehat dan sangat penting untuk sistem pendukung kehidupan yang diandalkan oleh manusia dan semua spesies lainnya.', 'info@fauna-flora.org', 'https://www.fauna-flora.org/', 'ffi.jpeg'),
(8, 'Forum HarimauKita', 'Sebuah kelompok masyarakat sipil yang mendedikasikan diri dalam konservasi populasi harimau sumatera di alam. Dibentuk pada tahun 2008, forum ini beranggotakan lebih dari 100 orang anggota profesional yang berasal dari 26 organisasi yang bekerja untuk harimau sumatera di Indonesia. ', 'info@harimaukita.or.id', 'https://harimaukita.or.id/', 'fhk.png'),
(9, 'Forum Konservasi Leuser ', 'Forum Konservasi Leuser (FKL) adalah sebuah organisasi nirlaba yang berbasis di Aceh yang bertujuan untuk melestarikan dan melindungi Ekosistem Leuser di provinsi Aceh dari ancaman yang akan datang. Ekosistem Leuser penting secara global, dan merupakan tempat terakhir di bumi di mana orangutan, harimau, badak, dan gajah berkeliaran bersama di alam liar. Ini juga merupakan sumber air penting bagi lebih dari 4 juta orang yang tinggal di sekitarnya, serta jasa ekosistem lainnya. FKL bekerja sama dengan masyarakat lokal dan lembaga pemerintah untuk melaksanakan program-programnya, mulai dari penjaga Satwa Liar yang melindungi Ekosistem Leuser selama minimal 15 hari setiap bulan hingga peningkatan penelitian dan pengetahuan tentang Ekosistem Leuser hingga program restorasi berbasis masyarakat.', 'forumleuser@gmail.com', 'https://leuserconservancy.or.id/', 'fkl.jpeg'),
(10, 'Frankfurt Zoological Society', 'FZS is an international conservation organisation based in Frankfurt in Germany. Founded by Prof. Bernhard Grzimek, FZS is committed to preserving wildlands and biological diversity in the last remaining wilderness areas on the planet.', 'info@fzs.org', 'https://fzs.org/', 'fzs.png'),
(11, 'Indonesia Conservation Species Programe ', 'ISCP didirikan pada tahun 2011 oleh Rudianto Sembiring. ISCP memiliki pusat penyelamatan dan rehabilitasi yang saat ini menampung satwa liar lokal di Indonesia, khususnya di Sumatera Utara, Indonesia. ISCP memiliki izin Sumatran Laughingthrush (Garrulax bicolor) Nov 2012- Nov 2017 dan MoU (Memorandum of Understanding) untuk Kukang (Nictycebus coucang) dan Nias Hill Myna (Gracula religiosa robusta) Maret 2016- Maret 2021 dengan Departemen Sumber Daya Alam dan Konservasi Ekosistem Sumatera Utara atau Di Indonesia kami sebut Balai Konservasi Sumber Daya Alam Sumatera Utara (BKSDA-SU).', 'info@iscp.or.id', 'http://iscp.or.id/', 'iscp.jpeg'),
(12, 'Japan International Cooperation Agency', 'Badan Kerjasama Internasional Jepang (JICA) memajukan kegiatannya di seputar pilar pendekatan berorientasi lapangan, keamanan manusia, dan peningkatan efektivitas, efisiensi, dan kecepatan.', '-', 'https://www.jica.go.jp/', 'jica.png'),
(13, 'Komunitas untuk Hutan Sumatera ', 'Komunitas Hutan untuk Sumatera (KHS)/Community for Sumatran Nature Conservation (CSNC) adalah organisasi konservasi nirlaba Indonesia, didirikan pada tahun 2015 oleh sekelompok kecil konservasionis Indonesia dan asing yang bekerja di Sumatera untuk perlindungan alam dan konservasi satwa liar. ', 'info@khs-csnc.org', 'https://www.khs-csnc.org/', 'khs.png'),
(14, 'Leuser International Foundation', 'Forum Konservasi Leuser (FKL) adalah sebuah organisasi nirlaba yang berbasis di Aceh yang bertujuan untuk melestarikan dan melindungi Ekosistem Leuser di provinsi Aceh dari ancaman yang akan datang. Ekosistem Leuser penting secara global, dan merupakan tempat terakhir di bumi di mana orangutan, harimau, badak, dan gajah berkeliaran bersama di alam liar. Ini juga merupakan sumber air penting bagi lebih dari 4 juta orang yang tinggal di sekitarnya, serta jasa ekosistem lainnya. FKL bekerja sama dengan masyarakat lokal dan lembaga pemerintah untuk melaksanakan program-programnya, mulai dari penjaga Satwa Liar yang melindungi Ekosistem Leuser selama minimal 15 hari setiap bulan hingga peningkatan penelitian dan pengetahuan tentang Ekosistem Leuser hingga program restorasi berbasis masyarakat.', 'forumleuser@gmail.com', 'https://leuserconservancy.or.id/', 'lif.png'),
(15, 'Orangutan Foundation - UK', 'Didirikan pada tahun 1990, Orangutan Foundation memiliki pendekatan yang unik dan beragam untuk konservasi orangutan. Kami mendukung semua spesies orangutan dan pekerjaan kami dilakukan oleh tim staf Indonesia yang berdedikasi.', 'info.indonesia@orangutan.org.uk', 'https://www.orangutan.org.uk/', 'of-uk.png'),
(16, 'Orangutan Foundation International', 'Orangutan Foundation International (OFI) adalah organisasi nirlaba yang didedikasikan untuk konservasi orangutan liar dan habitat hutan hujan mereka. OFI juga mendukung penelitian tentang orangutan dan hutan, inisiatif pendidikan, baik lokal maupun internasional, dan membawa kesadaran tentang orangutan di mana pun bisa.', 'info@orangutan.org', 'https://orangutan.org/', 'ofi.png'),
(17, 'Orangutan Information Center ', 'Orangutan Information center (OIC) Adalah sebuah LSM yang berbasis di medan, bertujuan untuk melestarikan dan melindungi orangutan dan rumah hutan mereka di sumatera. Kami bekerja dengan masyarakat lokal yang tinggal di sepanjang habitat orangutan, di dalam dan sekitar Leuser dan Ekosistem Batang Toru, benteng terakhir populasi orangutan di sumatera dan salah satu hutan tropis terpenting yang tersisa di asia.', 'info@orangutancentre.org ', 'https://orangutancentre.org/', 'oic.jpeg'),
(18, 'PanEco', 'Yayasan PanEco didirikan pada tahun 1996. Sejarahnya terkait erat dengan pendirinya, Regina Frey. Perempuan asal Swiss ini telah aktif terlibat dalam konservasi habitat orangutan sumatera di Indonesia sejak tahun 1973.', 'info@paneco.ch', 'https://paneco.ch/', 'paneco.png'),
(19, 'PILI - Green Network', 'PILI merupakan lembaga swadaya masyarakat yang program dan kegiatan berorientasi pada konservasi alam dan lingkungan. Jaringan kelembagaannya berfokus pada pengumpulan dan pertukaran informasi tentang keanekaragaman hayati dan perlingdungan sumber daya alam serta isu-isu lingkungan. Sebelumnya dikenal sebagai PILI-NGO Movement. Awalnya, PILI terbangun oleh sekelompok orang yang terlibat dalam kegiatan dan organisasi lokal yang berkaitan dengan lingkungan dan berfungsi sebagai penyedia layanan untuk organisasi lain, menyediakan buku-buku dan publikasi, media promosi dan informasi, kampanye, dukungan untuk survei, dan fasilitasi berbagai kegiatan konservasi.', 'piligreennetwork@gmail.com', 'http://www.pili.or.id/', 'pili.png'),
(20, 'Rainforest Action Network', 'Rainforest Action Network melestarikan hutan, melindungi iklim dan menegakkan hak asasi manusia dengan menantang kekuatan perusahaan dan ketidakadilan sistemik melalui kemitraan garis depan dan kampanye strategis', 'answers@ran.org ', 'https://www.ran.org/', 'ran.png'),
(21, 'Rimba Satwa Foundation', 'PILI merupakan lembaga swadaya masyarakat yang program dan kegiatan berorientasi pada konservasi alam dan lingkungan. Jaringan kelembagaannya berfokus pada pengumpulan dan pertukaran informasi tentang keanekaragaman hayati dan perlingdungan sumber daya alam serta isu-isu lingkungan. Sebelumnya dikenal sebagai PILI-NGO Movement. Awalnya, PILI terbangun oleh sekelompok orang yang terlibat dalam kegiatan dan organisasi lokal yang berkaitan dengan lingkungan dan berfungsi sebagai penyedia layanan untuk organisasi lain, menyediakan buku-buku dan publikasi, media promosi dan informasi, kampanye, dukungan untuk survei, dan fasilitasi berbagai kegiatan konservasi.', 'piligreennetwork@gmail.com', 'http://www.pili.or.id/', 'rsf.jpeg'),
(22, 'Sintas Indonesia', 'Didirikan pada tahun 2018, SINTAS didirikan oleh praktisi konservasi berpengalaman yang telah mendedikasikan karir profesional seumur hidup mereka dalam menangani berbagai masalah konservasi utama.', 'info@sintas.or.id', 'http://www.sintas.or.id/', 'sintas.png'),
(23, 'Sumatra Rainforest Institute', 'Sumatra Rainforest Institute (SRI) adalah organisasi akar rumput (NGO) Indonesia yang berfokus pada konservasi hutan hujan Sumatera dan spesies yang terancam punah, menyelamatkan satwa liar yang membutuhkan serta membantu petani lokal untuk menerapkan sistem dan teknologi pertanian ramah lingkungan di Sumatera Utara.', 'info@sumatranrainforest.org', 'http://sumatranrainforest.org/', 'sri.png'),
(24, 'The Indonesian Wildlife Conservation Foundation ', 'IWF sudah berdiri sejak 1968 dan memiliki expert dalam bidang Konservasi Alam yang sangat memadai, sehingga kegiatan yang diciptakan sangat berpengaruh terhadap lingkungan sekitar daerah kegiatan IWF tersebut. Karena kami sangat menghargai dan selalu meneliti dengan baik kawasan yang nantinya dijadikan kegiatan IWF.', 'admin@iwf.or.id', 'https://iwf.or.id/', 'iwf.png'),
(25, 'The Nature Conservation ', 'The Nature Conservancy dimulai ketika para ilmuwan terkemuka, warga negara yang berkomitmen, dan pemimpin yang berdedikasi bersatu dengan visi bersama untuk melindungi dan merawat alam. Saat ini, saat kita menghadapi tantangan lingkungan paling kompleks dalam hidup kita, staf, mitra, dan anggota kita yang beragam berdampak pada konservasi di lebih dari 70 negara dan wilayah.', 'indonesia@tnc.org', 'https://www.nature.org/', 'tnc.png'),
(26, 'University Of York Canada', 'Sebuah perguruan tinggi yang terletak di negara canada', 'yorkmain@gmail.com', 'https://www.yorku.ca/', 'university.png'),
(27, 'USAID Lestari', 'LESTARI, yang berarti \'abadi\' dalam Bahasa Indonesia, adalah proyek pengelolaan hutan lestari yang dirancang untuk mendukung pemerintah Indonesia dalam mengurangi emisi gas rumah kaca (GRK) dan melestarikan keanekaragaman hayati di ekosistem hutan dan bakau yang kaya karbon dan signifikan secara biologis.', 'info@lestari-indonesia.org', 'https://www.lestari-indonesia.org/', 'usaid.jpeg'),
(28, 'Veterinary Society for Sumatran Wildlife Conservation ', 'Sebuah perguruan tinggi yang terletak di negara canada', '-', '-', 'vesswic.png'),
(29, 'Wildlife Conservation Society ', 'WCS menyelamatkan satwa liar dan tempat-tempat liar di seluruh dunia melalui ilmu pengetahuan, tindakan konservasi, pendidikan, dan menginspirasi orang untuk menghargai alam.', 'wcsindonesia@wcs.org', 'https://www.wcs.org/', 'wcs.jpeg'),
(30, 'World Wild Life', 'Sebagai organisasi konservasi terkemuka di dunia, WWF bekerja di hampir 100 negara. Di setiap level, kami berkolaborasi dengan orang-orang di seluruh dunia untuk mengembangkan dan memberikan solusi inovatif yang melindungi komunitas, satwa liar, dan tempat tinggal mereka.', 'supporter-service@wwf.id', 'https://www.worldwildlife.org/', 'wwf.jpeg'),
(31, 'Yayasan Badak Indonesia ', 'Yayasan Badak Indonesia atau The Rhino Foundation of Indonesia merupakan penggabungan dari 2 (dua) yayasan dan 1 (satu) program, yaitu Yayasan Mitra Badak (YMR), Yayasan Suaka Badak Sumatera (YSRS) dan Program Konservasi Badak Indonesia (PKBI).', 'info@badak.or.id', 'https://badak.or.id/', 'yabi.png'),
(32, 'Yayasan Ekosistem Lestari ', 'Didirikan pada awal tahun 2000, Yayasan Ekosistem Lestari (YEL) adalah organisasi nirlaba yang berfokus pada konservasi, pendidikan lingkungan dan pengembangan masyarakat, terutama yang tinggal di sekitar kawasan konservasi. Menanggapi munculnya berbagai masalah lingkungan di seluruh Sumatera, YEL berupaya melindungi apa yang tersisa dari Ekosistem Leuser yang unik, Warisan Dunia UNESCO dan rumah bagi beberapa kehidupan tumbuhan dan hewan yang paling melimpah dan beragam yang dikenal ilmu pengetahuan. Secara khusus, Yayasan Ekosistem Lestari adalah mitra pendiri Program Konservasi Orangutan Sumatera, yang bertujuan untuk meningkatkan kelangsungan hidup spesies Orangutan Sumatera yang Sangat Terancam Punah.', 'office@yel.or.id', 'https://www.yel.or.id/', 'yel.png'),
(33, 'Yayasan Orangutan Indonesia', 'Yayorin (Yayasan Orangutan Indonesia) berdiri pada tanggal 4 Juli 1991 di Pangkalan Bun, Kalimantan Tengah (Indonesia). Yayorin merupakan organisasi non-pemerintah (LSM) yang kegiatan utamanya berfokus pada penelitian, pendidikan, dan pelestarian orangutan, satwaliar serta hutan hujan tropis sebagai habitat hidupnya.   Melalui kegiatan-kegiatannya, Yayorin percaya pada pemberdayaan masyarakat lokal yang tinggal di sekitar hutan dan kemampuan masyarakat tersebut untuk mengelola hutan dan sumber daya alam di sekitarnya. Selain itu, Yayorin juga melakukan pelestarian orangutan melalui upaya-upaya pendidikan lingkungan seperti mengunjungi desa-desa terpencil, sekolah-sekolah lokal dan instansi pemerintah dan swasta, serta mengembangkan program-program pendidikan yang dapat membawa manfaat nyata bagi masyarakat setempat.', 'yayorinindonesia@gmail.com', 'https://yayorin.com/', 'yayorin.png'),
(34, 'Yayasan Penyelamatan Orangutan Borneo', 'Kisah BOS Foundation bermula di tahun 1991 diawali pendirian pusat rehabilitasi sederhana di Wanariset Samboja, Kalimantan Timur sebagai jawaban dari banyaknya orangutan yang ditangkap demi perdagangan satwa ilegal. Dalam dekade-dekade berikutnya, peran kami terus berkembang. Kini, kami bekerja sama dengan masyarakat setempat, pemerintah Indonesia, dan masyarakat internasional untuk mencegah kepunahan dan melestarikan orangutan dan habitatnya di Kalimantan – terutama di Kalimantan Tengah dan Timur.', 'hello@orangutan.or.id', 'https://www.orangutan.or.id/', 'bos.jpeg'),
(35, 'Yayasan Pesona Tropis Alam Indonesia ', 'Yayasan Pesona Tropis Alam Indonesia atau PETAI didirikan pada tanggal 6 Juni 2004 di Kota Medan oleh sekelompok aktivis dari Jurusan Kehutanan Universitas Sumatera Utara (sekarang Fakultas Kehutanan) sebagai wadah untuk berkecimpung dalam aktivitas konservasi di Sumatera Utara.', 'info@petai.org', 'https://petai.org/', 'petai.jpeg'),
(36, 'Yayayasan Komodo Survival Program', 'KOMODO SURVIVAL PROGRAM (KSP) adalah organisasi nirlaba berbasis di Indonesia yang didirikan pada 9 Maret 2007. Organisasi ini memiliki misi untuk memberikan informasi yang baik tentang biologi satwa liar untuk membantu merancang rencana pengelolaan dan konservasi komodo dan habitat aslinya. ', 'info@komododragon.org', 'https://komododragon.org/', 'komodo.jpeg'),
(37, 'Zoological Society of London ', 'ZSL (Zoological Society of London) sebuah badan amal konservasi internasional, dan visi kami adalah dunia di mana satwa liar tumbuh subur. Kami bekerja setiap hari untuk mencapai ini, melalui ilmu pengetahuan kami, konservasi lapangan kami di seluruh dunia dan melibatkan jutaan orang melalui dua Kebun Binatang kami, ZSL London dan ZSL Whipsnade Zoos. ', 'indonesia@zsl.org', 'https://www.zsl.org/', 'zsl.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_maps`
--

CREATE TABLE `tb_maps` (
  `id_lembaga` int(4) NOT NULL,
  `nama_lembaga` varchar(60) DEFAULT NULL,
  `isu` varchar(100) DEFAULT NULL,
  `wilayah_kegiatan` varchar(60) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `negara` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_maps`
--

INSERT INTO `tb_maps` (`id_lembaga`, `nama_lembaga`, `isu`, `wilayah_kegiatan`, `latitude`, `longtitude`, `tahun`, `negara`) VALUES
(1, 'Aliansi Lestari Rimba Terpadu', 'Konservasi Badak', 'TN Gunung Leuser', 3.7741987, 97.2430116, 2009, 'Nasional'),
(2, 'Aliansi Lestari Rimba Terpadu', 'Konservasi Badak', 'TN Way Kambas', -4.9277497, 105.7768061, 2009, 'Nasional'),
(3, 'Aspinall Foundation Indonesia', 'Pusat Rehabilitasi Primata Endemik Jawa', 'Bandung', -6.9654035, 107.6426826, 1957, 'Internasional'),
(4, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Nusa Tenggara Timur', -10.157647, 123.619971, 2002, 'Nasional'),
(5, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Sulawesi Selatan', -5.1412345, 119.4753911, 2002, 'Nasional'),
(6, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Sulawesi Utara', 1.4540421, 124.8551851, 2002, 'Nasional'),
(7, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Maluku', -3.679291, 128.1971383, 2002, 'Nasional'),
(8, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Balai TN Bantimurung Bulusarung', -4.8012936, 119.8234794, 2002, 'Nasional'),
(9, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Balai TN Aketajawe Lolobata', 0.4928144, 127.7454044, 2002, 'Nasional'),
(10, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Balai TN Manusela', -3.0752437, 129.620014, 2002, 'Nasional'),
(11, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Balai TN Kelimutu', -8.8400184, 121.6604868, 2002, 'Nasional'),
(12, 'Burung Indonesia', 'Konservasi Keanekaragaman Hayati', 'Balai TN MaTaLaWa', -9.6712182, 120.2411579, 2002, 'Nasional'),
(13, 'Centre for Orangutan Protection', 'Konservasi Orangutan', 'Aceh', 4.0377577, 94.3986593, 2007, 'Nasional'),
(14, 'Centre for Orangutan Protection', 'Konservasi Orangutan', 'Sumatera Utara', 1.8298807, 96.4913851, 2007, 'Nasional'),
(15, 'Conservation International', 'Konservasi Keanekaragaman Hayati', 'Papua', -2.9506456, 136.6732217, 1987, 'Internasional'),
(16, 'Conservation International', 'Konservasi Keanekaragaman Hayati Laut', 'Papua Barat', -2.0040828, 129.937619, 1987, 'Internasional'),
(17, 'Conservation International', 'Konservasi Keanekaragaman Hayati', 'Papua', -2.4904353, 140.5050172, 1987, 'Internasional'),
(18, 'Conservation International', 'Konservasi Keanekaragaman Hayati', 'Bandung', -7.1714417, 107.732328, 1987, 'Internasional'),
(19, 'Conservation International', 'Konservasi Owa Jawa', 'TN Gunung Gede Pangrango', -6.7373078, 107.0052639, 1987, 'Internasional'),
(20, 'Copenhagen Zoo', 'Konservasi Harimau Sumatera, Gajah Sumatera dan Tapir', 'TN Baluran', -7.8313324, 114.3875415, 1859, 'Internasional'),
(21, 'Copenhagen Zoo', 'Konservasi Harimau Sumatera, Gajah Sumatera dan Tapir', 'Hutan Harapan', -2.0492154, 103.3124544, 1859, 'Internasional'),
(22, 'Fauna & Flora Internasional', 'Konservasi Harimau Sumatera', 'TN Kerinci Seblat', -1.9698857, 101.621921, 1903, 'Internasional'),
(23, 'Fauna & Flora Internasional', 'Konservasi Harimau Sumatera', 'BKSDA Aceh', 5.5285938, 95.293488, 1903, 'Internasional'),
(24, 'Fauna & Flora Internasional', 'Konservasi Keanekaragaman Hayati', 'Sulawesi Barat', -2.6640225, 110.3900304, 1903, 'Internasional'),
(25, 'Fauna & Flora Internasional', 'Konservasi Gajah Sumatera', 'Bengkulu', -3.0811877, 101.6795925, 1903, 'Internasional'),
(26, 'Fauna & Flora Internasional', 'Konservasi Keanekaragaman Hayati Ekosistem Karst', 'TN Bantimurung Bulusarung', -4.8382529, 119.9312619, 1903, 'Internasional'),
(27, 'Fauna & Flora Internasional', 'Konservasi Harimau Sumatera', 'Riau', 0.1436565, 103.0635303, 1903, 'Internasional'),
(28, 'Forum HarimauKita', 'Konservasi Harimau Sumatra', 'TN Gunung Leuser', 3.7741987, 97.1892983, 2008, 'Nasional'),
(29, 'Forum HarimauKita', 'Konservasi Harimau Sumatra', 'TN Kerinci Seblat', -1.9698857, 101.621921, 2008, 'Nasional'),
(30, 'Forum HarimauKita', 'Konservasi Harimau Sumatra', 'TN Bukit Barisan Selatan', -4.415653, 103.5668851, 2008, 'Nasional'),
(31, 'Forum HarimauKita', 'Konservasi Harimau Sumatra', 'TN Berbak', -1.2869015, 104.2395526, 2008, 'Nasional'),
(32, 'Forum HarimauKita', 'Konservasi Harimau Sumatra', 'TN Sembilang', -2.0356647, 104.6593392, 2008, 'Nasional'),
(33, 'Forum Konservasi Leuser', 'Konservasi Gajah, Badak dan Harimau', 'TN Gunung Leuser', 3.7741987, 97.1892983, 2013, 'Nasional'),
(34, 'Forum Konservasi Leuser', 'Konservasi Gajah, Badak dan Harimau', 'Sumatera Utara', 1.8298807, 96.4913851, 2013, 'Nasional'),
(35, 'Frankfurt Zoological Society', 'Konservasi Orangutan Sumatera', 'TN Bukit Tigapuluh', -0.9233625, 102.4673074, 1858, 'Internasional'),
(36, 'Indonesia Conservation Species Programe', 'Rescue dan Rehabilitasi Satwa liar', 'Sumatera Utara', 3.5833161, 98.666688, 2011, 'Nasional'),
(37, 'Japan International Cooperation Agency', 'Konservasi Keanekaragaman Hayati', 'TN Gunung Halimun Salak', -6.7025266, 106.5225848, 1974, 'Internasional'),
(38, 'Komunitas untuk Hutan Sumatera', 'Konservasi Gajah', 'TN Way Kambas', -4.9277497, 105.7768061, 2015, 'Nasional'),
(39, 'Komunitas untuk Hutan Sumatera', 'Konservasi Gajah', 'TN Bukit Barisan Selatan', -4.415653, 103.5668851, 2015, 'Nasional'),
(40, 'Komunitas untuk Hutan Sumatera', 'Konservasi Gajah', 'TN Kerinci Seblat', -0.7765044, 100.4803984, 2015, 'Nasional'),
(41, 'Leuser International Foundation', 'Konservasi Badak', 'TN Gunung Leuser', 3.7741987, 97.1892983, 1994, 'Internasional'),
(42, 'Orangutan Foundation - UK', 'Konservasi Orangutan Kalimantan', 'Kalimantan Tengah', -2.2096749, 113.9144257, 1990, 'Internasional'),
(43, 'Orangutan Foundation - UK', 'Konservasi Orangutan Kalimantan', 'Balai TN Tanjung Putting', -2.7212931, 111.6417819, 1990, 'Internasional'),
(44, 'Orangutan Foundation International', 'Konservasi Orangutan Kalimantan', 'TN Tanjung Putting', -3.0576438, 111.9166498, 1986, 'Internasional'),
(45, 'Orangutan Foundation International', 'Konservasi Orangutan Kalimantan', 'Kalimantan Tengah', -2.7305621, 111.6482686, 1986, 'Internasional'),
(46, 'Orangutan Foundation International', 'Konservasi Orangutan Kalimantan', 'Kalimantan Tengah', -2.9169624, 114.084721, 1986, 'Internasional'),
(47, 'Orangutan Information Center', 'Konservasi Orangutan', 'TN Gunung Leuser', 3.7741987, 97.1892983, 2001, 'Nasional'),
(48, 'Orangutan Information Center', 'Konservasi Orangutan', 'Batang Toru', 1.5966495, 99.0779075, 2001, 'Nasional'),
(49, 'PanEco', 'Konservasi Orangutan Sumatera dan Orangutan Tapanuli', 'Jantho Nature Reserve', 5.172944, 95.6945186, 1996, 'Internasional'),
(50, 'PanEco', 'Konservasi Orangutan Sumatera dan Orangutan Tapanuli', 'Batang Toru', 1.5966495, 99.0779075, 1996, 'Internasional'),
(51, 'PILI - Green Network', 'Konservasi Umum', 'TN Berbak', -1.2869015, 104.2395526, 2000, 'Nasional'),
(52, 'PILI - Green Network', 'Konservasi Umum', 'TN Sembilang', -2.0356647, 104.6593392, 2000, 'Nasional'),
(53, 'PILI - Green Network', 'Konservasi Umum', 'TN Gunung Leuser', 3.8058801, 97.1892983, 2000, 'Nasional'),
(54, 'PILI - Green Network', 'Konservasi Umum', 'TN Kerinci Seblat', -0.7765044, 100.4803984, 2000, 'Nasional'),
(55, 'PILI - Green Network', 'Konservasi Umum', 'TN Bukit Barisan Selatan', -4.415653, 103.5668851, 2000, 'Nasional'),
(56, 'PILI - Green Network', 'Konservasi Umum', 'TN Way Kambas', -4.9277497, 105.7768061, 2000, 'Nasional'),
(57, 'Rainforest Action Network', 'Konservasi Keanekaragaman Hayati', 'Aceh', 4.0377577, 94.3986593, 1985, 'Internasional'),
(58, 'Rainforest Action Network', 'Konservasi Keanekaragaman Hayati', 'Sumatera Utara', 1.8298807, 96.4913851, 1985, 'Internasional'),
(59, 'Rimba Satwa Foundation', 'Konservasi Gajah', 'TN Gunung Leuser', 3.8058801, 97.2430116, 2016, 'Nasional'),
(60, 'Sintas Indonesia', 'Konservasi Macan Tutul Jawa', 'TN Meru Betiri', -8.4602807, 113.8107484, 2018, 'Nasional'),
(61, 'Sintas Indonesia', 'Konservasi Macan Tutul Jawa', 'TN Gunung Halimun Salak', -6.7025266, 106.5225848, 2018, 'Nasional'),
(62, 'Sintas Indonesia', 'Konservasi Harimau Sumatera', 'Sumatera Barat', -0.9165052, 100.3598324, 2018, 'Nasional'),
(63, 'Sumatra Rainforest Institute', 'Konservasi Gajah, Orangutan dan Harimau', 'TN Batang Gadis', 0.8307905, 99.564664, 2000, 'Nasional'),
(64, 'Sumatra Rainforest Institute', 'Konservasi Gajah, Orangutan dan Harimau', 'Batang Toru', 1.5966495, 99.0779075, 2000, 'Nasional'),
(65, 'The Indonesian Wildlife Conservation Foundation', 'Konservasi Orangutan', 'Batang Toru', 1.5966495, 99.0779075, 1968, 'Nasional'),
(66, 'The Nature Conservation', 'Konservasi Keanekaragaman Hayati Laut', 'Papua Barat', -1.9809042, 130.4955826, 1951, 'Internasional'),
(67, 'University Of York Canada', 'Konservasi Orangutan Kalimantan', 'Kalimantan Timur', 0.3660057, 117.3170561, 1959, 'Internasional'),
(68, 'USAID Lestari', 'Konservasi Keanekaragaman Hayati', 'Papua', -2.4904353, 140.5474416, 2015, 'Internasional'),
(69, 'Veterinary Society for Sumatran Wildlife Conservation', 'Konservasi Gajah', 'TN Gunung Leuser', 3.8058801, 97.2430116, 2003, 'Nasional'),
(70, 'Veterinary Society for Sumatran Wildlife Conservation', 'Konservasi Gajah', 'Riau', 0.4629259, 101.4159858, 2003, 'Nasional'),
(71, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Hiu, Pari dan Skate)', 'TN Taka Bonerate', -6.5671338, 121.098977, 1895, 'Internasional'),
(72, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Badak, Harimau, Gajah dan Rangkong)', 'TN Bukit Barisan Selatan', -4.415653, 103.5668851, 1895, 'Internasional'),
(73, 'Wildlife Conservation Society', 'Konservasi Gajah', 'TN Way Kambas', -4.9277497, 105.7768061, 1895, 'Internasional'),
(74, 'Wildlife Conservation Society', 'Konservasi Burung Maleo', 'TN Bogani Wartabone', 0.5815595, 123.5411919, 1895, 'Internasional'),
(75, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Badak, Harimau, Gajah dan Rangkong)', 'TN Gunung Leuser', 3.8058801, 97.2430116, 1895, 'Internasional'),
(76, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Badak, Harimau, Gajah, Orangutan dan Rangkong)', 'Aceh', 2.55488804, 97.7451774, 1895, 'Internasional'),
(77, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Badak, Harimau, Gajah dan Rangkong)', 'Lampung', -5.5839549, 104.5090943, 1895, 'Internasional'),
(78, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Badak, Harimau, Gajah, Siamang dan Rangkong)', 'TN Way Kambas', -4.9277497, 105.7768061, 1895, 'Internasional'),
(79, 'Wildlife Conservation Society', 'Konservasi Keanekaragaman Biota Laut', 'Jepara', -5.8198639, 110.187152, 1895, 'Internasional'),
(80, 'Wildlife Conservation Society', 'Konservasi Jenis Prioritas (Anoa dan Burung Maleo)', 'TN Bogani Wartabone', 0.5815595, 123.5411919, 1895, 'Internasional'),
(81, 'Wildlife Conservation Society', 'Konservasi Burung Maleo', 'Tangkoko Batuangus Nature Reserve', 1.5080419, 125.1882676, 1895, 'Internasional'),
(82, 'Wildlife Conservation Society', 'Konservasi Burung Maleo', 'TN Lore Lindu', -1.4750557, 120.1889523, 1895, 'Internasional'),
(83, 'World Wild Life', 'Konservasi Sumber Daya Alam dan Hayati', 'TN Taka Bonerate', -6.5671338, 121.098977, 1961, 'Internasional'),
(84, 'World Wild Life', 'Konservasi Sumber Daya Alam dan Hayati', 'TN Wakatobi', -5.5636044, 123.9303911, 1961, 'Internasional'),
(85, 'World Wild Life', 'Konservasi Sumber Daya Alam dan Hayati', 'TN Teluk Cenderawasih', -2.5482901, 134.4782959, 1961, 'Internasional'),
(86, 'World Wild Life', 'Konservasi Sumber Daya Alam dan Hayati', 'Papua', -2.4978781, 140.5474416, 1961, 'Internasional'),
(87, 'World Wild Life', 'Konservasi Gajah', 'Riau', 0.92611841, 101.4407597, 1961, 'Internasional'),
(88, 'Yayasan Badak Indonesia', 'Konservasi Badak', 'TN Way Kambas', -4.9277497, 105.7768061, 2007, 'Nasional'),
(89, 'Yayasan Ekosistem Lestari', 'Konservasi Orangutan Sumatera dan Orangutan Tapanuli', 'Jantho Nature Reserve', 5.172944, 95.6945186, 2000, 'Nasional'),
(90, 'Yayasan Ekosistem Lestari', 'Konservasi Orangutan Sumatera dan Orangutan Tapanuli', 'Batang Toru', 1.5966495, 99.0779075, 2000, 'Nasional'),
(91, 'Yayasan Orangutan Indonesia', 'Konservasi Orangutan', 'Kalimantan Tengah', -2.3632652, 111.1588586, 1991, 'Nasional'),
(92, 'Yayasan Orangutan Indonesia', 'Konservasi Orangutan', 'Kalimantan Tengah', -1.8001382, 111.3280915, 1991, 'Nasional'),
(93, 'Yayasan Orangutan Indonesia', 'Konservasi Orangutan', 'Kalimantan Tengah', -2.5139086, 111.6051506, 1991, 'Nasional'),
(94, 'Yayasan Penyelamatan Orangutan Borneo', 'Konservasi Orangutan Kalimantan', 'TN Bukit Baka Bukit Raya', -0.32777, 112.4380359, 1991, 'Nasional'),
(95, 'Yayasan Penyelamatan Orangutan Borneo', 'Konservasi Orangutan Kalimantan', 'Kalimantan Tengah', -2.2096749, 113.9144257, 1991, 'Nasional'),
(96, 'Yayasan Penyelamatan Orangutan Borneo', 'Konservasi Orangutan Kalimantan', 'Kalimantan Timur', -0.5078716, 117.1082902, 1991, 'Nasional'),
(97, 'Yayasan Pesona Tropis Alam Indonesia', 'Konservasi Keanekaragaman Hayati', 'TN Gunung Leuser', 3.7741987, 97.1892983, 2004, 'Nasional'),
(98, 'Yayasan Pesona Tropis Alam Indonesia', 'Konservasi Orangutan', 'Batang Toru', 1.5966495, 99.0779075, 2004, 'Nasional'),
(99, 'Yayayasan Komodo Survival Program', 'Konservasi Komodo', 'TN Komodo', -8.5277442, 119.4831493, 2017, 'Nasional'),
(100, 'Yayayasan Komodo Survival Program', 'Konservasi Komodo', 'Nusa Tenggara Timur', -10.157647, 123.619971, 2017, 'Nasional'),
(101, 'Zoological Society of London', 'Konservasi Harimau Sumatera', 'TN Sembilang', -2.0356647, 104.6593392, 1826, 'Internasional'),
(102, 'Zoological Society of London', 'Konservasi Harimau Sumatera', 'TN Berbak', -1.2869015, 104.2395526, 1826, 'Internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upt`
--

CREATE TABLE `tb_upt` (
  `id_upt` int(4) NOT NULL,
  `nama_upt` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `provinsi` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `alamat` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `kontak` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `website` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `gambar` varchar(40) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_upt`
--

INSERT INTO `tb_upt` (`id_upt`, `nama_upt`, `provinsi`, `alamat`, `kontak`, `website`, `latitude`, `longtitude`, `gambar`) VALUES
(1, 'Balai Besar KSDA Jawa Barat', 'Jawa Barat', 'Jl. Gedebage No.117, Cisaranten Kidul, Gedebage, Kota Bandung', 'bbksdajb@gmail.com', 'http://bbksdajabar.ksdae.menlhk.go.id', -6.95335, 107.68679, 'bbksda_jabar.jpeg'),
(2, 'Balai Besar KSDA Jawa Timur', 'Jawa Timur', 'Jl. Bandara Juanda, Sedati, Kabupaten Sidoarjo, Jawa Timur 61253, Indonesia', 'bbksdajawatimur@gmail.com', 'https://bbksdajatim.org', -7.38296, 112.75749, 'bbksda_jatim.jpeg'),
(3, 'Balai Besar KSDA NTT', 'Nusa Tenggara Timur', 'Jl. SK Lerik, Klp. Lima, Kota Kupang, Nusa Tenggara Tim. 85228, Indonesia', 'bbksdantt@gmail.com', 'http://bbksdantt.menlhk.go.id', -10.15782, 123.61994, 'bbksda_ntt.jpeg'),
(4, 'Balai Besar KSDA Papua', 'Papua', 'Jln. Raya Abepura - Sentani, Hedam, Heram, Tanjakan Ale-ale, Padang Bulan - Waena. Jayapura', 'bbksdapapua@yahoo.co.id', 'http://bbksdapapua.com', -2.60794, 140.64675, 'bbksda_papua.jpeg'),
(5, 'Balai Besar KSDA Papua Barat', 'Papua Barat', 'Jl. Sungai Maruni Km. 10 Klawuyuk, Kota Sorong, Papua Bar., Indonesia', 'ksda_papbar@yahoo.co.id', 'https://bbksda-papuabarat.com', -0.93093, 131.33328, 'bbksda_papuabarat.png'),
(6, 'Balai Besar KSDA Riau', 'Riau', 'Jl. Hr Soebrantas, Sidomulyo Barat, Tampan, Pekanbaru City, Riau 28294, Indonesia', 'bbksdariau2017@gmail.com', 'https://bbksda-riau.id', 0.46271, 101.41644, 'bbksda_riau.jpeg'),
(7, 'Balai Besar KSDA Sulawesi Selatan', 'Sulawesi Selatan', 'Jl. Perintis Kemerdekaan KM.8 No.57, Tamalanrea Jaya, Tamalanrea, Kota Makassar', 'ksdasulsel@gmail.com', 'http://ksdasulsel.menlhk.go.id', -5.14123, 119.47552, 'bbksda_sulsel.jpeg'),
(8, 'Balai Besar KSDA Sumatra Utara', 'Sumatra Utara', 'Jl. Sisingamangaraja Km. 5,5 No. 14, Jalan Marindal, Harjosari II, Medan Amplas, Kota Medan', 'bbksdasumut@yahoo.co.id', 'https://bbksdasumut.com', 3.5441, 98.6981, 'kemenlhk.png'),
(9, 'Balai Besar TN Betung Kerihun dan Danau Sentarum', 'Kalimantan Barat', 'bbtn bkds Jl. banin no. 6 kedamin hilir, putussibau selatan, kalimantan barat 78714', 'dehbbtnbkds@gmail.com', 'http://tnbkds.menlhk.go.id', 0.85269, 112.9224, 'bbtn_betungdandanausentarum.png'),
(10, 'Balai Besar TN Bromo Tengger Semeru', 'Jawa Timur', 'Jl. Raden Intan No.6, Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur 65125', 'bromotenggersemerutn@gmail.com', 'http://bromotenggersemeru.org', -7.93015, 112.64975, 'tn_bromosemeru.jpeg'),
(11, 'Balai Besar TN Bukit Barisan Selatan', 'Lampung', 'Jl. Ir. H. Juanda No.19, Kota Batu, Kota Agung, Kabupaten Tanggamus', 'btnbbs@gmail.com', '-', -5.49851, 104.62944, 'tn_bbs.png'),
(12, 'Balai Besar TN Gunung Gede Pangrango', 'Jawa Barat', 'Mount Gede-Pangrango National Park, Jl. Raya Cibodas, Cipanas, Cianjur', 'info@gedepangrango.org', 'https://www.gedepangrango.org', -6.7373, 107.00533, 'tn_gdp.jpeg'),
(13, 'Balai Besar TN Gunung Leuser', 'Aceh', 'Jl. Selamat No. 137 Medan, Sumatera Utara', 'jejakleuser@gmail.com', 'https://gunungleuser.or.id', 3.54985, 98.70758, 'tn_gl.jpeg'),
(14, 'Balai Besar TN Kerinci Seblat', 'Jambi', 'Jl. Basuki Rahmat No.11 Kec. Pesisir Bukit, Kota Sungai Penuh, Jambi 37101', 'bbtnks@gmail.com', 'https://tnkerinciseblat.or.id', -2.05844, 101.38983, 'tn_ks.jpeg'),
(15, 'Balai Besar TN Lore Lindu', 'Sulawesi Tengah', 'Jl. Pro. Moh. Yamin No.53, Tatura Utara, Palu Sel., Kota Palu, Sulawesi Tengah', 'tnlorelindu@gmail.com', 'http://lorelindu.info', -0.90741, 119.88985, 'tn_ll.png'),
(16, 'Balai Besar TN Teluk Cenderawasih', 'Papua Barat', 'Taman Nasional Teluk Cenderawasih, Jl. Drs. Essau Sesa Sow, Gunung Manokwari', 'telukcenderawasih@gmail.com', 'http://telukcenderawasihnationalpark.com', -0.8943, 134.043, 'tn_tc.jpeg'),
(17, 'Balai KSDA Aceh', 'Aceh', 'Jl. Teuku Umar, Kota Subulussalam, Aceh, Indonesia', 'bksdanad@yahoo.co.id', '-', 5.54654, 95.31945, 'kemenlhk.png'),
(18, 'Balai KSDA Bali', 'Bali', 'Jl. Suwung Batan Kendal No. 37 Sesetan Denpasar', 'info@ksda-bali.go.id', 'https://www.ksda-bali.go.id', -8.7104, 115.22455, 'bksda_bali.jpeg'),
(19, 'Balai KSDA Bengkulu', 'Bengkulu', 'Jl. Mahoni No.55, Padang Jati, Ratu Samban, Kota Bengkulu, Bengkulu 38222, Indonesia', 'sitroombksdabengkulu@gmail.com', 'https://bksdabengkulu.id', -3.79658, 102.26997, 'kemenlhk.png'),
(20, 'Balai KSDA Jakarta', 'DKI Jakarta', 'Jalan Salemba Raya No. 9, RT.1/RW.3, Paseban, Senen, Kota Jakarta Pusat', 'bksdajakarta@gmail.com', 'https://bksdadki.com', -6.19301, 106.84925, 'kemenlhk.png'),
(21, 'Balai KSDA Jambi', 'Jambi', 'Jl. Arif Rahman Hakim, Telanaipura, Kota Jambi, Jambi 36361, Indonesia', 'info@bksdajambi.com', 'https://www.bksdajambi.com', -1.61052, 103.57748, 'kemenlhk.png'),
(22, 'Balai KSDA Jawa Tengah', 'Jawa Tengah', 'Jl. Suratmo No.171, Kalibanteng Kidul, Semarang Bar., Kota Semarang, Jawa Tengah, Indonesia', 'bksda_jateng@yahoo.co.id', 'https://ksdajateng.id/home/', -6.9992, 110.38717, 'kemenlhk.png'),
(23, 'Balai KSDA Kalimantan Barat', 'Kalimantan Barat', 'Jl. Achmad Yani No. 121Pontianak', 'ksda.kalbar@gmail.com', 'https://www.bksdakalbar.com', -0.06278, 109.35503, 'bksda_kalbar.jpeg'),
(24, 'Balai KSDA Kalimantan Selatan', 'Kalimantan Tengah', 'Jl. Yos Sudarso No. 3 Kav. 32 Palangkaraya', 'surat.bksda.kh@gmail.com', 'https://bksdakalsel.com', -2.20954, 113.91447, 'kemenlhk.png'),
(25, 'Balai KSDA Kalimantan Tengah', 'Kalimantan Selatan', 'Jl. Sei Ulin 28 Simpang Empat PO. BOX  1048 Banjarbaru', 'balai.ksda.kalsel@gmail.com', '-', -3.44492, 114.85281, 'kemenlhk.png'),
(26, 'Balai KSDA Kalimantan Timur', 'Kalimantan Timur', 'Jl. Tengku Umar Rt. 34 Kelurahan Karang Asam Hilir Kecamatan Sungai Kunjang , Samarinda, Kalimantan Timur', 'bksdakaltim@menlhk.go.id', 'http://bksdakaltim.menlhk.go.id', -0.5078, 117.10844, 'kemenlhk.png'),
(27, 'Balai KSDA Maluku', 'Maluku', 'Jl. Laksda Leo Wattimena, Passo P.O. Box 201 Ambon', 'bksdamaluku@gmail.com', 'https://bksdamaluku.org', -3.67907, 128.19703, 'bksda_maluku.jpeg'),
(28, 'Balai KSDA Nusa Tenggara Barat', 'Nusa Tenggara Barat', 'Jl. Majapahit No.54B, Kekalik Jaya, Sekarbela, Kota Mataram, Nusa Tenggara Bar. 83115', 'weendhee.ilkom@gmail.com', 'https://bksdantb.org', -8.59055, 116.09454, 'bksda_ntb.png'),
(29, 'Balai KSDA Sulawesi Tengah', 'Sulawesi Tengah', 'Jl. Professor Mohammad Yamin, Birobuli Utara, Palu Sel., Kota Palu, Sulawesi Tengah, Indonesia', 'bksda_sulteng@yahoo.co.id', 'http://ksdasulteng.com/in/', -0.91656, 119.89125, 'bksda_sulteng.jpeg'),
(30, 'Balai KSDA Sulawesi Tenggara', 'Sulawesi Tenggara', 'Jl. Laute No.7, Mandonga, Kota Kendari, Sulawesi Tenggara 93111, Indonesia', '?balai.ksdasultra@yahoo.co.id', '-', -3.96963, 122.51469, 'kemenlhk.png'),
(31, 'Balai KSDA Sulawesi Utara', 'Sulawesi Utara', 'Jl. Tololiu Supit, Tingkulu, Wanea, Kota Manado, Sulawesi Utara, Indonesia', 'bksda.sulut@yahoo.co.id', '-', 1.45405, 124.85514, 'kemenlhk.png'),
(32, 'Balai KSDA Sumatera Barat', 'Sumatera Barat', 'Jl. Khatib Sulaiman No.46, Lolong Belanti, Padang Utara, Kota Padang', 'bksda.sumbar@yahoo.com', 'http://bksdasumbar.org', -0.91667, 100.35996, 'kemenlhk.png'),
(33, 'Balai KSDA Sumatera Selatan', 'Sumatera Selatan', 'Jalan Kol. Burlian Km. 6,5, Karya Baru, Alang Alang Lebar, Kota Palembang, Sumatera Selatan 30961', 'bksdasumsel@yahoo.co.id', 'http://balaiksdasumsel.org/', -2.94807, 104.73147, 'kemenlhk.png'),
(34, 'Balai KSDA Yogyakarta', 'DI Yogyakarta', 'Jl. Gedong Kuning 172 A Lt.2 Yogyakarta 55171', 'bksda_yogya@yahoo.com', 'http://bksdajogja.org', -7.70434, 110.34827, 'kemenlhk.png'),
(35, 'Balai TN Aketajawe Lolobata', 'Maluku Utara', 'Binagara Resort Office - Taman Nasional Aketajawe Lolobata, Desa Akejawi, Wasile Selatan', 'aketajawe@gmail.com', 'https://aketajawe.com', 0.73761, 127.57632, 'tn_al.jpeg'),
(36, 'Balai TN Alas Purwo', 'Jawa Timur', 'Jl. Brawijaya No.20 Banyuwangi', 'btnap@tnalaspurwo.org', 'https://tnalaspurwo.org', -8.23391, 114.35171, 'tn_ap.png'),
(37, 'Balai TN Bali Barat', 'Bali', 'Cekik  Kantor Pos Gilimanuk Bali 82253', 'tnbb09@gmail.com', '-', -8.1888, 114.44056, 'tn_bb.png'),
(38, 'Balai TN Baluran', 'Jawa Timur', 'Jl. Raya Banyuwangi Situbondo Km. 35. Kecamatan Banyuputih Kabupaten Situbondo - Jawa Timur', 'office@balurannasionalpark.com', 'https://balurannationalpark.id', -7.92089, 114.38745, 'tn_b.jpeg'),
(39, 'Balai TN Bantimurung Bulusaraung', 'Sulawesi Selatan', 'Jln. Poros Maros-Bone Km.12, Bantimurung, Maros, Sulawesi Selatan, Indonesia', 'tn.babul@gmail.com', 'https://btnbabul.net/', -5.02464, 119.67484, 'tn_bantibulu.jpeg'),
(40, 'Balai TN Batang Gadis', 'Aceh', 'Jl. Willem Iskandar Kel. Pidoli Dolok, Panyabungan', 'btnbtggadis42@gmail.com', 'http://tnbatanggadis.com', 0.83074, 99.56465, 'tn_berbaksembilang.jpeg'),
(41, 'Balai TN Berbak Sembilang', 'Jambi', 'Taman Nasional Berbak, Kab. Tanjung Jabung, Tanjung Jabung', 'tnberbak.jambi@gmail.com', 'https://berbaksembilang.com', -1.57169, 103.64457, 'tn_bg.jpeg'),
(42, 'Balai TN Bogani Nani Wartabone', 'Sulawesi Utara', 'Mogolaing, West Kotamobagu, Kotamobagu City, North Sulawesi 95716, Indonesia', 'btnbnw@yahoo.co.id', 'http://www.boganinaniwartabone.org/', 0.72925, 124.28337, 'tn_bnw.jpeg'),
(43, 'Balai TN Bukit Baka Bukit Raya', 'Kalimantan Barat', 'Jl. Dr. Wahidin Sudirohusodo No. 75', 'bukitbakabukitraya@gmail.com', 'https://bukitbakabukitraya.org', -0.3278, 112.43787, 'tn_bbr.jpeg'),
(44, 'Balai TN Bukit Duabelas', 'Jambi', 'Jl. Lintas Tengah Sumatera No.12, Bernai, Kec. Sarolangun, Kabupaten Sarolangun, Jambi 37481', 'tnbukit12@yahoo.co.id', 'https://www.tnbukitduabelas.id', -2.30529, 102.68195, 'tn_bd.jpeg'),
(45, 'Balai TN Bukit Tigapuluh', 'Riau', 'Taman Nasional Bukit Tigapuluh, Batang Gansal, Kabupaten Indragiri Hulu, Riau 29355, Indonesia', 'humas.btnbt@gmail.com', '-', -0.39918, 102.42174, 'tn_bt.jpeg'),
(46, 'Balai TN Bunaken', 'Sulawesi Utara', 'Jl. Raya Molas, Kotak Pos 1202, Manado 95242 - SULAWESI UTARA', 'info@tn-bunaken.com', 'https://tn-bunaken.com', 1.52899, 124.84238, 'tn_bunaken.jpeg'),
(47, 'Balai TN Gunung Ciremai', 'Jawa Barat', 'Jl. Raya Kuningan-Cirebon Km 9 No.1 Manislor, Jalaksana, Kuningan, Jawa Barat 45554', 'btn_gciremai@ymail.com', 'http://tngciremai.com/', -6.90234, 108.49033, 'tn_gc.jpeg'),
(48, 'Balai TN Gunung Halimun Salak', 'Jawa Barat', 'Jl. Raya Cipanas Kec. Kabandungan Kotak Pos 2 Parungkuda Sukabumi - Jawa Barat', 'tnhalimunsalak@gmail.com', 'https://halimunsalak.org/', -6.78582, 106.62543, 'tn_ghs.png'),
(49, 'Balai TN Gunung Merapi', 'DI Yogyakarta', 'Jl. Kaliurang Km. 22.6, Hargobinangun, Pakem, Sleman, DI Yogyakarta, Indonesia', 'tngm_jogja@yahoo.com', 'http://www.tngunungmerapi.org', -7.61794, 110.42638, 'tn_gm.jpeg'),
(50, 'Balai TN Gunung Merbabu', 'Jawa Tengah', 'Jl. Merbabu No. 136, Boyolali, Jawa Tengah 57316.', 'tn_merbabu@yahoo.co.id', 'http://tngunungmerbabu.org/', -7.53079, 110.58785, 'tn_gmerbabu.png'),
(51, 'Balai TN Gunung Palung', 'Kalimantan Barat', 'Jl. Gajah Mada, Kalinilam Kab.Ketapang Kalimantan Barat', 'balaitngunungpalung@gmail.com', 'https://tngunungpalung.com', -1.83052, 109.95806, 'tn_gp.jpeg'),
(52, 'Balai TN Gunung Rinjani', 'Nusa Tenggara Barat', 'Jl. Erlangga 88, Mataram, Nusa Tenggara Barat', 'tngunungrinjani@menlhk.go.id', 'https://www.rinjaninationalpark.id', -8.61881, 116.0771, 'tn_gr.png'),
(53, 'Balai TN Karimunjawa', 'Jawa Tengah', 'Taman Nasional Karimunjawa, Karimunjawa, Kabupaten Jepara, Jawa Tengah, Indonesia', 'btnkj@yahoo.co.id', 'https://tnkarimunjawa.id/', -7.02408, 110.46919, 'tn_k.png'),
(54, 'Balai TN Kayan Mentarang', 'Kalimantan Timur', 'Jl. Pusat Pemerintahan Pemda Malinau, Tg. Belimbing Kab. Malinau Provinsi Kalimantan Utara 77554', 'balai.tnkm@gmail.com', '-', 3.54978, 116.62297, 'tn_km.png'),
(55, 'Balai TN Kelimutu', 'Nusa Tenggara Timur', 'Jl. Eltari No.16 Ende Flores, Nusa Tenggara Timur', 'btnkelimutu@gmail.com', 'https://kelimutu.id/', -8.84005, 121.66042, 'tn_kelimutu.jpeg'),
(56, 'Balai TN Kepulauan Seribu', 'DKI Jakarta', 'Taman Nasional Kepulauan Seribu Pulau Pramuka, Pulau Pramuka', 'informasi@tnlkepulauanseribu.net', 'http://tnlkepulauanseribu.net', -6.19305, 106.84918, 'tn_seribu.jpeg'),
(57, 'Balai TN Kepulauan Togean', 'Sulawesi Tengah', 'Kepulauan Togean National Park, Sulawesi Tengah, Indonesia', 'togean.tnkt@gmail.com', 'https://tnkepulauantogean.id', -0.89314, 121.58398, 'tn_kt.png'),
(58, 'Balai TN Komodo', 'Nusa Tenggara Timur', 'Komodo National Park, Nusa Tenggara Timur, Indonesia', 'datinfo.monev.tnk@gmail.com', 'https://www.komodonationalpark.org', -8.49831, 119.88319, 'tn_komodo.jpeg'),
(59, 'Balai TN Kutai', 'Kalimantan Timur', 'Jl. Awang Long No.33, Bontang Baru, Bontang Utara, Kota Bontang, Kalimantan Timur 75325, Indonesia', 'tn_kutai@yahoo.com', 'http://www.tnkutai.org', 0.95694, 117.49699, 'tn_kutai.jpeg'),
(60, 'Balai TN Lorentz', 'Papua', 'Jl. SD. Percobaan, Kama, Wamena, Kabupaten Jayawijaya, Papua 99511', 'lorentz.btn@gmail.com', 'http://tamannasionallorentz.menlhk.go.id', -4.08584, 138.93833, 'tn_lorentz.jpeg'),
(61, 'Balai TN Manupeu Tanah Daru dan Laiwangi Wanggameti', 'Nusa Tenggara Timur', 'Jl. Perintis Kemerdekaan, Oebobo, Kota Kupang, Nusa Tenggara Tim. 85228, Indonesia', 'laiwangi5@gmail.com', 'http://tnmatalawa.com', -9.67077, 120.24094, 'tn_matalawa.jpeg'),
(62, 'Balai TN Manusela', 'Maluku', 'Jl. Kelang No.1, Namaelo, Kota Masohi, Kabupaten Maluku Tengah, Maluku 97511', 'balaitnmanusela@gmail.com', 'http://tnmanusela.menlhk.go.id', -3.30719, 128.9545, 'tn_manusela.png'),
(63, 'Balai TN Meru Betiri', 'Jawa Timur', 'Jl. Sriwijaya 53 Jember 68101  JAWA TIMUR', 'merubetiri@gmail.com', 'https://merubetiri.id', -8.1937, 113.72048, 'tn_mb.jpeg'),
(64, 'Balai TN Rawa Aopa Watumohai', 'Sulawesi Tenggara', 'Jalan Konggoasa 132, Unaaha, Kendari, Sulawesi Tenggara', 'btnraw@gmail.com', 'https://rawaaopawatumohai.id', -4.46162, 122.12631, 'tn_raw.jpeg'),
(65, 'Balai TN Sebangau', 'Kalimantan Tengah', 'Jl. Mahir Mahar KM 1,2 Palangka Raya 73111', 'tnsebangau@gmail.com', 'https://www.tnsebangau.com', -2.27374, 113.92995, 'tn_sebangau.jpeg'),
(66, 'Balai TN Siberut', 'Sumatera Barat', 'Jl. Raden Saleh No. 8 C, PO Box 159 Padang, Sumatera Barat.', 'siberutnationalparkofficial@gmail.com', 'https://www.tamannasionalsiberut.org', -0.91659, 100.36002, 'tn_siberut.png'),
(67, 'Balai TN Taka Bonerate', 'Sulawesi Selatan', 'Jl. S. Parman, Benteng Sel., Benteng, Kabupaten Selayar, Sulawesi Selatan 92811, Indonesia', 'infotntakabonerate@gmail.com', 'http://tntakabonerate.com/id/', -6.12689, 120.46107, 'tn_tb.png'),
(68, 'Balai TN Tambora', 'Nusa Tenggara Barat', 'Balai Taman Nasional Tambora, Jalan Syech Muhammad No. 5, Dompu, Nusa Tenggara Barat. 84212', 'tntambora@gmail.com', 'http://tntambora.org', -8.527921, 118.469206, 'tn_tambora.jpeg'),
(69, 'Balai TN Tanjung Puting', 'Kalimantan Tengah', 'Jl. HM. Rafiâ€™i Km. 2, Pangkalan Bun, Kotawaringin Barat, Kalimantan Tengah, Indonesia', 'tanjungputingtn@gmail.com', 'http://btntanjungputing.blogspot.com', -2.72098, 111.64151, 'tn_tp.jpeg'),
(70, 'Balai TN Tesso Nilo', 'Riau', 'Jl. Raya Langgam Km.4, Kota Pangakalan Kerinci, Kabupaten Pelalawan, Provinsi Riau', 'evaluatorbtntessonilo@yahoo.com', 'https://tntessonilo.com', 0.39415, 101.83274, 'tn_tn.png'),
(71, 'Balai TN Ujung Kulon', 'Banten', 'Jl. Raya Perintis Kemerdekaan No.51, Kalanganyar, Labuan, Kabupaten Pandeglang, Banten', 'balai_tnuk@yahoo.com', 'https://ujungkulon.org', -6.36332, 105.82509, 'tn_uk.jpeg'),
(72, 'Balai TN Wakatobi', 'Sulawesi Tenggara', 'Jl. Murhum No.47, Nganganaumala, Murhum, Kota Bau-Bau, Sulawesi Tenggara 93717, Indonesia', 'info@wakatobinationalpark.com', '-', -5.48522, 122.57645, 'tn_wakatobi.jpeg'),
(73, 'Balai TN Wasur', 'Papua', 'Jl. Garuda Leproseri No.3, Rimba Jaya, Kec. Merauke, Kabupaten Merauke, Papua 99611, Indonesia', 'tnwasur@yahoo.com', 'http://www.tamannasionalwasur.com/', -8.54073, 140.43968, 'tn_wasur.jpeg'),
(74, 'Balai TN Way Kambas', 'Lampung', 'Way Kambas National Park, Kabupaten Lampung Timur, Lampung, Indonesia', 'waykambas.np@gmail.com', 'https://waykambas.org', -5.10638, 105.66214, 'tn_waykambas.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indeks untuk tabel `tb_maps`
--
ALTER TABLE `tb_maps`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indeks untuk tabel `tb_upt`
--
ALTER TABLE `tb_upt`
  ADD PRIMARY KEY (`id_upt`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  MODIFY `id_deskripsi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_upt`
--
ALTER TABLE `tb_upt`
  MODIFY `id_upt` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
