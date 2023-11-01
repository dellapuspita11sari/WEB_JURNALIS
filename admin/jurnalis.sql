-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 04:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalis`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(14, 'Sri Devi', 'Pimpinan Umum', 'deeeevx', '318450101_ketua umum.jpg'),
(15, 'Muhammad Nuril Anwar', 'Pimpinan Redaksi', 'nuril_anwar21', '1480920692_pimpinan redaksi.jpg'),
(16, 'Siti Nur Halisa', 'Sekretaris', 'halisa3549', '1459124284_sekretaris.jpg'),
(17, 'Feby Wulandhari', 'Sekretaris', 'fee.biy', '421792051_sekretaris2.jpg'),
(18, 'Abidah Ardelia', 'Bendahara', 'ardeliaabidah02', '1800374308_bendahara.jpg'),
(19, 'Ana Wahyuningsih', 'Bendahara', 'anawahyuningsih535', '1087995433_bendahara2.jpg'),
(20, 'Rachel Tiansyah Putra', 'Koordinator Konten', 'racheltiasyah', '1475184065_konten kreator.jpg'),
(21, 'Jauharul Ahlan Ghufron', 'Layouter', 'oshimuru', '1371624989_layouter.jpg'),
(22, 'Uma Amaliya', 'Layouter', 'amaliyazxp ', '104433936_layouter2.jpg'),
(23, 'Khodijatul Masturoh', 'Dokumenter', 'rxsjjkjim ', '1312901606_dokementer.jpg'),
(24, 'Irfani Putri Aulia Fajri', 'Dokumenter', 'irfaniputriaulia', '126013969_dokumenter2.jpg'),
(25, 'Nailil Yusro', 'Koordinator Kepenulisan', 'naililysr_ ', '906318943_kepenulisan.jpg'),
(26, 'Haifah Indra Suryani', 'Pers', 'hanifahindraa', '1210032427_pers.jpg'),
(27, 'Atha Fauziyah Aini', 'Pers', 'ath.faa_4', '1370281003_pers2.jpg'),
(28, 'Roihannatus Saidah', 'Editor', 'roi_hanna', '2050542980_editor.jpg'),
(29, 'Ayu Noraida', 'Reportase', 'dhaa_15', '340219519_reportase.jpg'),
(30, 'Hevi Yohana', 'Reportase', 'heviyohanaaa_', '1813265208_reportase2.jpg'),
(31, 'Khoirul Anam', 'Koordinator Medinfo', 'khoirul_anam123', '1259837618_medinfo.jpg'),
(32, 'Muhammad Alwan Yazid', 'Media Sosial', 'alwanyazid', '883793244_medsos.jpg'),
(33, 'Lailatun Nisfa', 'Media Sosial', 'lailatunnisfa14', '1873527772_medsos2.jpg'),
(34, 'Nawaya Himmatal Aliyah', 'Periklanan', 'Nawaya_na', '1403796486_periklanan.jpg'),
(35, 'Fitri Amalia', 'Periklanan', 'fitriamalia.puspita', '1621075380_periklanan2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bendahara`
--

CREATE TABLE `bendahara` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` longtext NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `is_active` varchar(11) NOT NULL,
  `is_populer` varchar(11) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `tgl_input`, `is_active`, `is_populer`, `penulis`, `kategori`) VALUES
(27, 'BNPT Ajak Generasi Muda Bersinergi Mencegah Terorisme dan Radikalisme melalui Duta Damai', '<div><br></div><div>SEMARANG, RUANG UPDATE - Badan Nasional Penanggulangan Terorisme (BNPT) adakan pelatihan pembentukan duta damai santri guna mencegah maraknya radikal terorisme. Pelatihan ini berlangsung selama 4 hari, terhitung Senin (12/06/2023) hingga Kamis (15/06/2023). Acara ini dimeriahkan oleh 10 Pondok pesantren yang tergabung di Jawa Tengah dan masing-masing dihadirkan sebanyak 6 delegasi. </div><div><br></div><div>Tak hanya santri, generasi muda duta damai dunia maya pun ikut berpartisipasi dalam acara tersebut sekaligus regenerasi kepengurusan. Materi yang disampaikan yaitu mengenai pencegahan radikal terorisme melalui bidang agama, multimedia, IT, kepenulisan, dan media sosial. Setelah materi disampaikan, dilanjutkan dengan pelatihan berbasis kelompok untuk dapat membuat produk output seperti artikel, infografis, meme, quote, dan video tentang perdamaian NKRI yang selanjutnya akan dipresentasikan di akhir acara. </div><div><br></div><div>Dalam acara ini tidak hanya menjelaskan materi dan pelatihan saja, namun sekaligus membentuk kepengurusan yang baru Duta Damai Santri Jateng. Sehingga terpilihlah Muhammad Ulil Albab asal Ponpes Mansajul Ulum Pati sebagai Ketua Duta Damai Santri Jawa Tengah. </div><div><br></div><div>Acara pun berlangsung meriah dan terlaksana dengan sangat baik. Dalam penutupan acara ini, diselipkan pemaparan mengenai rencana kerja  periode pertama duta damai santri Jawa Tengah. Dengan harapan duta damai yang baru dibentuk ini bisa menggencarkan kontra propaganda radikal dan terorisme di sosial media sehingga konten-konten radikal bisa lenyap secara perlahan dari kalangan pengguna medsos. </div><div><br></div><div>Acara ditutup dengan pembacaan ikrar Damai sebagai tanda pengukuhan seluruh duta Damai santri dan duta Damai dunia maya regional.</div> ', '976917902_dokementer.jpg', '0000-00-00 00:00:00', 'YES', 'NO', '', 'Terbaru, Berita Pilihan, Kategori Lain'),
(28, 'Lahirkan Jurnalis Muda yang Kompeten, UKM Jurnalistik Polibang Adakan Pelatihan Skill Dasar Jurnalistik', '<div>JEPARA, RUANG UPDATE - Unit Kegiatan Mahasiswa (UKM) Jurnalistik Politeknik Balekambang Jepara (Polibang) adakan pelatihan skill dasar jurnalistik pada Sabtu (13/05/2023). Kegiatan ini diikuti sebanyak 25 peserta mulai dari Mahasiswa Polibang, Jurnalis MA-SMK Balekambang, Jurnalis Mahad Aly Balekambang, hingga Jurnalis pondok Balekambang. Kegiatan ini bertujuan untuk meningkatkan kemampuan mahasiswa di bidang jurnalistik apalagi di era ini media merupakan hal yang sangat penting. Pelatihan kali ini diisi oleh Sdr. Hamam Nasiruddin, S. Sos Direktur Pers PW IPNU Jateng.</div><div><br></div><div>Acara dimulai dengan sambutan dari pembina UKM Jurnalistik Bapak M. Ali Subkhan, M.Pd dalam sambutannya beliau memaparkan \"Saat ini sebuah media menjadi hal paling besar diantara yang lain. Hampir setiap hari kita menggenggam dan melihat sebuah media. Sebuah media tidak akan pernah lepas dari seorang jurnalis&nbsp; Media tanpa jurnalis tidak akan jadi apa-apa\". Ketua UKM Sri Devi pun turut memberi sambutan dan harapan semoga pelatihan ini nantinya dapat melahirkan jurnalis-jurnalis muda profesional di kemudian hari.&nbsp;</div><div><br></div><div>Materi pelatihan kali ini yaitu skill dasar jurnalistik, meliputi pemahaman tentang jurnalistik, cara membuat berita yang baik, straight news, dan opini. \"Menulis itu mudah, yang penting punya niat dan konsisten. Saya pun awalnya terpaksa dengan keadaan yang mengharuskan saya untuk menulis lalu terbiasa hingga sekarang\", ujar pemateri.</div> ', '1272130297_periklanan.jpg', '2023-07-04 21:03:31', 'YES', 'YES', 'Ruang Update', 'Terbaru, Berita Pilihan'),
(29, 'Jawab Tantangan Zaman, HIMA ABI Polibang Gelar Workshop Strategi Branding dan Marketing melalui TikTok Shop', '<div>JEPARA, RUANG UPDATE - Himpunan Mahasiswa Administrasi Bisnis Internasional (HMAB) menggelar workshop strategi branding dan marketing TikTok shop pada Jumat (23/06/2023). Workshop ini dihadiri oleh Dosen Prodi ABI dan Mahasiswa Politeknik Balekambang dari berbagai jurusan. Selain itu, Mahasantri Mahad Aly serta siswa-siswi baik MA maupun SMK Balekambang juga turut hadir untuk memeriahkan kegiatan tersebut.</div><div><br></div><div>\"Adapun tujuan diselenggarakan kegiatan ini yaitu untuk membangun dan meningkatkan skill seseorang di bidang bisnis. Dengan harapan, teman teman bisa mengimplementasikan ilmu yang diterima dari narasumber dikemudian hari\", ujar Nailil Yusro selaku ketua pelaksana.&nbsp;</div><div><br></div><div>Kepala Prodi ABI, Nur Ahmad Budi Yulianto ikut menuturkan, \"Setelah keluar dari forum ini, teman-teman diharapkan agar bisa menjadi pribadi yang lebih percaya diri bahkan bisa menjadi konten kreator yang handal dan beretika\".</div><div><br></div><div>Workshop ini menghadirkan narasumber ahli di bidangnya, yakni seorang praktisi digital marketing dan pengelola puluhan channel YouTube yang bernama Ali Sofiyan. Beliau menjelaskan mengenai strategi branding dari mulai menemukan ide, bagaimana cara membuat konten yang menarik, mengedit video, sampai trik mendapat uang bagi pengguna tiktok.</div><div><br></div><div>Acara berakhir dengan sesi tanya jawab. Dalam sesi ini, peserta sangat antusias untuk bertanya. Sehingga acara ini pun selesai melampaui batas maksimal waktu yang telah ditentukan.</div> ', '1416031937_bendahara.jpg', '2023-07-03 10:03:53', 'YES', 'YES', 'Ruang Update', 'Terbaru, Berita Pilihan, Informasi Kampus'),
(30, 'LTN NU KABUPATEN JEPARA ADAKAN PELATIHAN JURNALISTIK DAN MENULIS KREATIF', '<div>JEPARA, RUANG UPDATE - Pelatihan jurnalistik dan menulis kreatif diselenggarakan oleh LTN NU Kabupaten Jepara bertempat di Perpustakaan Universitas Nahdlatul Ulama Jepara pada Minggu (18/06/23). Dihadiri oleh 40 Madrasah Aliyah dan 10 Pondok Pesantren Kabupaten Jepara.&nbsp;</div><div><br></div><div>Acara dibuka dengan sambutan - sambutan, mulai dari sambutan ketua LTN NU Kabupaten Jepara (Muhammad Olies) dan Sekretaris Tanfidziyah PCNU Kabupaten Jepara, Ahmad Sahil.&nbsp;</div><div><br></div><div>\"Output dari kegiatan ini akan menjadi forum penulis muda Kabupaten Jepara dikemudian harinya\". Ujar Muhammad Olies dalam sambutannya.</div><div><br></div><div>Selanjutnya acara inti penyampaian materi pertama dari Sastrawan dan Penulis 10 buku, Murtadoh Hadi. Pemantapan materi dilanjut dengan sesi dialog interaktif dengan para peserta.</div><div><br></div><div>Penyampaian materi kedua terkait Skill Dasar Jurnalistik oleh wartawan muria news, Faqih Mansur Hidayat. Praktik teknik pembuatan berita dibimbing oleh pemateri dengan fokusan streght news. Antusias peserta terlihat dari lamanya dialog interaktif dari pelatihan ini.</div><div><br></div><div>\"Pelatihan ini dibuat bukan sekedar pelatihan belaka, namun ada tindaklanjutnya\". Pungkas Faqih&nbsp; Mansur Hidayat</div> ', '699174907_bendahara.jpg', '2023-07-04 21:04:10', 'YES', 'YES', 'Ruang Update', 'Terbaru, Berita Pilihan, Kegiatan Kampus'),
(33, 'Jawab Tantangan Zaman, HIMA ABI Polibang Gelar Workshop Strategi Branding dan Marketing melalui TikTok Shop', 'xsaxasas', '787826200_pers.jpg', '0000-00-00 00:00:00', 'YES', 'YES', '', 'Terbaru, Program Studi'),
(35, 'DADADA', 'sdfsdfs', '1434646098_bendahara.jpg', '0000-00-00 00:00:00', 'YES', 'YES', 'Ruang Update', 'Terbaru, Kampus, Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `is_active` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `is_active`) VALUES
(4, 'Terbaru', 'YES'),
(5, 'Berita Pilihan', 'YES'),
(6, 'Informasi Kampus', 'YES'),
(7, 'Kegiatan Kampus', 'YES'),
(8, 'Kegiatan Mahasiswa', 'YES'),
(9, 'Program Studi', 'YES'),
(11, 'Kategori Lain', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan_redaksi`
--

CREATE TABLE `pimpinan_redaksi` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan_redaksi`
--

INSERT INTO `pimpinan_redaksi` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(1, 'Muhammad Nuril Anwar', 'Pimpinan Redaksi', 'https://instagram.com/nuril_anwar21', '1733453089_Logo_Politbang_png-259x300.png');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan_umum`
--

CREATE TABLE `pimpinan_umum` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan_umum`
--

INSERT INTO `pimpinan_umum` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(12, 'Sri Devi', 'Pimpinan Redaksi', 'https://instagram.com/psptsrdll_', '411689438_ketua umum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `proker_id` int(11) NOT NULL,
  `proker_name` varchar(255) NOT NULL,
  `proker_date` varchar(255) NOT NULL,
  `proker_konsep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`proker_id`, `proker_name`, `proker_date`, `proker_konsep`) VALUES
(8, 'Lomba - Lomba', '10/23/2023 9:31 AM', '<div>Lomba bersifat offline :</div><ol><li>Puisi</li><li>Cerpen</li></ol><div>Pengumuman pemenang lomba dan penyerahan hadiah dilakukan secara offline di kampus Polibang</div> '),
(10, 'Memperluas Jangkauan Liputan', '02/22/2023 9:32 AM', 'Melakukan reportase ataupun mencari informasi yang sesuai dengan arah gerak Ruang Update '),
(11, 'Buku Antologi Puisi', '12/18/2023 9:33 AM', 'Mengumpulkan hasil karya dari anggota Ruang Update dan lomba-lomba untuk dijadikan sebuah buku antologi '),
(12, 'Pelatihan Jurnalistik', '03/13/2023 9:33 AM', '<p>Pelatihan Jurnalistik Dasar dan Lanjutan</p><p>Pemaparan Materi dan Praktik Straight News</p>');

-- --------------------------------------------------------

--
-- Table structure for table `puisi`
--

CREATE TABLE `puisi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `cipta` varchar(100) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puisi`
--

INSERT INTO `puisi` (`id`, `judul`, `isi`, `cipta`, `ig`, `foto`, `tanggal`) VALUES
(8, 'Cara Merawat Bulu Kucing anggora rontok buk', 'fdxffkkk', 'hfghfjhkjkyfjjfjh', 'https://instagram.com/nuril_anwar21', '1627464318_bendahara.jpg', '0000-00-00'),
(9, 'AKU KAMU ', '<p>aku</p><p>aku dan aku</p><p><br></p><p>kamu...</p><p>kamu dan kamu</p>', 'aku', 'https://instagram.com/deeeevxxt', '236364124_sekretaris2.jpg', '0000-00-00'),
(10, 'bb', 'fbfb', 'hfghfbf', 'https://instagram.com/nuril_anwar21', '1288510238_dokumenter2.jpg', '0000-00-00'),
(13, '3243', '<p>43243</p>', 'aku', 'https://instagram.com/deeeevx', '1739376913_IMG-20220328-WA0017.jpg', '0000-00-00'),
(14, 'Terlampau Jauh', '<p>Sebuah gelas yang kosog</p><p>serta angin membuat celah rindu</p><p>untuk cepat menyebar</p><p><br></p><p>Sebuah potongan aroma dusta telah tercium</p><p>aku yang tengah menyerahkkan diri pada waktu&nbsp;</p><p>untuk menua bersama jari jemari yang tengah mengkriput</p><p><br></p><p>Sebuah tahta dan mahkota&nbsp;</p><p>bertahtakan berlian bertumpuk pengharapn</p><p>dimana ada masa yang meongambil memori paling banyak</p><p>yang bertumpuk dengan sepi</p><p><br></p><p>Sedangkan dia yang terayun hempansan dilangit terik terlampau jauh kujangkau dengan kaki</p><p>kaki yang terlampau lemah</p><p>menuju lilah</p>', 'Tangkai Pena', 'https://instagram.com/deeeevx', '1236023515_IMG_20230602_174434.jpg', '0000-00-00'),
(15, 'Kamu Sang Arjuna Masadepan ', '<p>Kumpulan-kumpulan batu ketegaran mulai rapuh</p><p>menguras tenaga dan kehidupan nan hancur dibuatnya</p><p>merah menyala sebuah warna kehidupan</p><p><br></p><p>Sebuah tulisan yang berbait</p><p>dan berisikan tulisan beraksara yang mengandung arti duka</p><p>duka cita pada hati yang mulai kehilangan</p><p>kehilangan orang yang pernah berarti namun tak kunjung temu</p><p><br></p><p>Aku mulai bermusuhan pada hati ini sejak kau pergi</p><p>aku mulai hancur tanpa kau tau</p><p>aku mulai rindu tanpa ada temu</p><p>dan aku mulai sendu pilu mengingatmu</p><p><br></p><p>Sekarang cukup, bangun dari kehilangan dan mulai menuliskan masa depan yang cerah</p><p>dengan tinta bahagia</p><p>dengan kertas yang bernama senyum</p><p>dan dengan tulisan yang bernada bahagia</p><p>dan semua ini kulakukan untukmu sang arjuna masa depan</p><p>yang masih disembunyikan oleh tuhan</p>', 'Tangkai Pena', 'https://instagram.com/deeeevx', '1162950493_IMG_20230602_174434.jpg', '0000-00-00'),
(16, 'Lenteraku', '<p>Ini bukanlah selebrasi semata</p><p>Ini tentang cita dan asa</p><p>Yang menyapaku untuk menuliskan sajak</p><p>Sajakku tentang lentera yang takkan padam</p><p><br></p><p>Namun, berjuta tajuk puisi tidaklah setara</p><p>Ensiklopedi tidaklah bisa memaknai</p><p>Sebab ini cinta, ini renjana</p><p>Yang tak bisa diayatkan</p><p><br></p><p>Bait-bait sajak yang kutuliskan</p><p>Tentang rasa seorang mahasiswa</p><p>Yang dikenalkan apa itu tri dharma</p><p>Oleh Politeknik Balekambang</p><p><br></p><p>Politeknik Balekambang</p><p>Nama itu yang pernah ku eja</p><p>Yang berpijar dan takkan padam</p><p>Di relung hati, di dalam atma, dan di detak fikiran</p><p><br></p><p>Polibang lenteraku</p><p>Gemerlap bak bintang gemintang</p><p>Ijinkan untaian kataku menyapamu</p><p>Selamat hari lahir rumah perjuangan</p><div><br></div>', 'Nailil Yusro', 'https://instagram.com/nailil', '1674031767_IMG-20220328-WA0017.jpg', '0000-00-00'),
(17, 'Pesan Perwira', '<p>Pesan Perwira</p><p>Karya : Nailil Yusro</p><p><br></p><p>Mereka yang kini terbaring tak bisa lagi berteriak</p><p>Tak sanggup meski sekedar kata “merdeka”</p><p>Kemarin adalah lautan darah</p><p>Kemarin adalah deraian air mata perjuangan&nbsp;</p><p><br></p><p>Lihatlah, istana kemerdakaan sudah berdiri tegak</p><p>Menyimpan amanat para perwira</p><p>“Pattimura-pattimura tua boleh dihancurkan, tetapi kelak Pattimura-pattimura muda akan bangkit”.</p><p>“Jangan sanjung aku, tetapi teruskanlah perjuanganku.”</p><p><br></p><p>Hari ini..</p><p>Saatnya kita menjawab pesan pahlawan</p><p>Dalam setiap langkah berpijak</p><p>Kita teruskan makna perjuangan</p><p><br></p><p>Kini..</p><p>Kita telah terlepas dari sangkar yang membelunggu itu</p><p>Terbanglah Bersama merah putihmu</p><p>Kibarkan ia hingga menggema diseluruh dunia&nbsp;</p><p><br></p><p>Wahai para pemuda</p><p>Dengarkanlah seruanku ini</p><p>Ibu pertiwi menunggu bara semangatmu</p><p>Darah muda yang haus akan perubahan</p><p><br></p><p>Berlarilah genggam amanatku ini</p><p>Gemilang kemenangan di depan sana&nbsp;</p><p>Bak bintang gemintang yang harus kau gapai</p><p>Bangkitlah untuk bumi pertiwi</p><div><br></div>', 'Nailil Yusro', 'https://instagram.com/nailil', '1689441255_IMG-20220328-WA0017.jpg', '0000-00-00'),
(18, 'Maret Dan Seuntai Harapan', '<p>Maret Dan Seuntai Harapan</p><p>Karya : Nailil Yusro</p><p><br></p><p>Detik ini aku berdiri sebagai mahasiswa</p><p>Yang konon menjadi pengendali bangsa kelak&nbsp;</p><p>Padahal aku kira hari ini aku sudah menjadi pengendali</p><p>Iya, seharusnya begitu</p><p><br></p><p>Bukankah kendali bangsa ditangan rakyat?</p><p>Bukankah seperti itu kata negara?</p><p>Begitu pula hakikat demokrasi yang selama ini kukenal</p><p>Demikian pun ayat-ayat undang-undang</p><p><br></p><p>Namun, kuingat bahwa diriku hanyalah gadis biasa</p><p>Pengetahuan diriku yang tak seberapa</p><p>Lantas seberani apa aku melawan paradoks ini?</p><p>Apakah harus kurendam kembali puing harapanku?</p><p><br></p><p>Penyimpangan-penyimpangan yang menakutkan</p><p>Dengan berbagai dalih dan permainan sang intelektual</p><p>Tak peduli sejarah dan pertumpahan darah</p><p>Maka, sisa harapan macam apa yang ku punya?</p><p><br></p><p>Mahasiswa itu natural bak air jernih</p><p>Jiwa kami tak pernah berkobar dengan oposisi</p><p>Berbagai perangai dan tabiat pemegang kuasalah</p><p>Yang memanggil jiwa muda kami untuk bersuara</p><p><br></p><p>Bumi pertiwiku yang indah, pesonanya gemerlap di dunia</p><p>Negaraku yang luas dengan bingkai keberagamannya</p><p>Semoga kearifanmu, marwahmu, gagah perkasamu selamanya terjaga</p><p>Sebab kejayaanmu adalah derai bahagiaku</p><p><br></p><p>Tahun depan pesta demokrasi digelar</p><p>Suara rakyat menjadi titik tumpu</p><p>Dalam perjalanan ini punggawa menyorot mahasiswa</p><p>Mari persembahkan peran terbaikmu, Mahasiswa</p><p><br></p><p>Kamilah pemuda yang saat ini hanya bisa mendamba</p><p>Rajutan harapan pada kemegahanmu NKRI</p><p>Utuhnya makna demokrasi sebagai pondasi persatuan</p><p>Tertancapnya putaran roda hukum yang tak memandang hulu</p><p><br></p><p>Pemegang kuasa yang tak hanya mengagungkan jabatan</p><p>Lantaran rintih nestapa warga pinggiran tak didengar</p><p>Nuansa keadilan tak akan berubah nista dan sendu</p><p>Itulah harap sederhanaku</p><div><br></div>', 'Nailil Yusro', 'https://instagram.com/nailil', '581506859_IMG-20220328-WA0017.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sekretaris`
--

CREATE TABLE `sekretaris` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekretaris`
--

INSERT INTO `sekretaris` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(1, 'Siti Nur Halisa', 'Sekretaris 1', 'https://instagram.com/sitinurhalisa', '637154184_sekretaris.jpg'),
(2, 'Feby Wulandhari', 'Sekretaris 2', 'https://instagram.com/wulandhari', '796459199_sekretaris2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_jurnalis`
--

CREATE TABLE `tentang_jurnalis` (
  `id_jurnalis` int(11) NOT NULL,
  `nama_jurnalis` varchar(255) NOT NULL,
  `kampus_Jur` varchar(100) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat_Jur` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `logo_jurnalis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang_jurnalis`
--

INSERT INTO `tentang_jurnalis` (`id_jurnalis`, `nama_jurnalis`, `kampus_Jur`, `link_ig`, `email`, `alamat_Jur`, `no_telp`, `logo_jurnalis`) VALUES
(3, 'Ruang Update', 'Politeknik Balekambang Jepara ', 'https://instagram.com/ruangupdate', 'ruangupdate21@gmail.com', 'Desa gemiring Lor, Kec. Nalumsari, Kab. Jepara', '087716495859', '1125847644_jurnalis.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` text NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_level` varchar(25) NOT NULL,
  `user_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_username`, `user_email`, `user_level`, `user_password`) VALUES
(30, 'Pimpinan Redaksi', 'pimred', 'ruangupdate21@gmail.com', 'Tim Redaksi', '123456'),
(32, 'Pimpinan Redaksi', 'pimred', 'admin21@gmail.com', 'Admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `bendahara`
--
ALTER TABLE `bendahara`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pimpinan_redaksi`
--
ALTER TABLE `pimpinan_redaksi`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `pimpinan_umum`
--
ALTER TABLE `pimpinan_umum`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`proker_id`);

--
-- Indexes for table `puisi`
--
ALTER TABLE `puisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekretaris`
--
ALTER TABLE `sekretaris`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `tentang_jurnalis`
--
ALTER TABLE `tentang_jurnalis`
  ADD PRIMARY KEY (`id_jurnalis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bendahara`
--
ALTER TABLE `bendahara`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pimpinan_redaksi`
--
ALTER TABLE `pimpinan_redaksi`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pimpinan_umum`
--
ALTER TABLE `pimpinan_umum`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `proker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `puisi`
--
ALTER TABLE `puisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sekretaris`
--
ALTER TABLE `sekretaris`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang_jurnalis`
--
ALTER TABLE `tentang_jurnalis`
  MODIFY `id_jurnalis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
