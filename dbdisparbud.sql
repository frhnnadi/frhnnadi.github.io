-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 06:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdisparbud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `kdadmin` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kategori` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`kdadmin`, `username`, `password`, `nama`, `kategori`) VALUES
(1, 'admin', 'admin', 'Muhammad Farhan', '1'),
(3, 'farhan', 'farhan', 'Mochamad Kahfi', '1'),
(4, 'itg', 'itg', 'Mochamad Kahfi', '1'),
(5, 'disparbud13@gmail.com', 'admin', 'Muhammad Farhan', '1'),
(6, 'disparbud@gmail.co.id', 'admin', 'Administrator', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbbudaya`
--

CREATE TABLE `tbbudaya` (
  `kdbudaya` int(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ket` longtext CHARACTER SET latin1 NOT NULL,
  `lokasi` longtext CHARACTER SET latin1 NOT NULL,
  `cover` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl` date NOT NULL,
  `kdkategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbbudaya`
--

INSERT INTO `tbbudaya` (`kdbudaya`, `nama`, `ket`, `lokasi`, `cover`, `waktu`, `tgl`, `kdkategori`) VALUES
(8, 'Jamasan', 'Tradisi Jamasan Jimat diawali dengan tradisi maleman (malam tanggal 12 mulud), kegiatan yang dilaksanakan adalah peringatan maulid nabi Muhammmad, dan Tradisi Rasulan (Tumpengan), dilanjutkan dengan malam tasyakuran dan atraksi seni Slawatan Jawa.\r\n\r\nLalu pada pagi Harinya, Dilaksanakan Kirab Penjamasan Jimat yang dilaksanakan dari Lapangan Desa / Rumah adat / Balai Desa menuju Ke Museum Jimat lokasi Penjamasan Jimat. Kirab ini diikuti oleh kerabat Jimat, Bregodo (pasukan kirab) dan Unsur Pemerintahan Setempat. Kiram ini membawa pusaka berupa Prapen Jamasan, dan Air Suci yang diambil dari mata air di penjuru Desa Kalisalak. Setelah sampai di Lokasi Penjamasan barulah prosesi Penjamasan Jimat Dilaksanakan, Pusaka Mataram (Jimat) yang disimpan di Museum Jimat ini berupa, peralatan rumah tangga, pakaian, peralatan sehari-hari, senjata, dan Pustaka Kuno. \r\n\r\nSetelah selesai di Jamas Pusaka tersebut kemudian disimpan kembali untuk dijamas kembali di tahun mendatang. Keunikan dari tradisi ini adalah berdasarkan catatan keadaan benda dapat berubah-ubah,  dimaknai sebagai pertanda akan keadaan di masa depan.', ' Pandakreja, Kalisalak, Kec. Kebasen, Kabupaten Banyumas, Jawa Tengah', 'jamasan1.jpg', 'Budaya', '2023-10-08', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailwisata`
--

CREATE TABLE `tbdetailwisata` (
  `kdwisata` int(10) NOT NULL,
  `g1` blob NOT NULL,
  `g2` blob NOT NULL,
  `g3` blob NOT NULL,
  `g4` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbdetailwisata`
--

INSERT INTO `tbdetailwisata` (`kdwisata`, `g1`, `g2`, `g3`, `g4`) VALUES
(1, 0x426167656e6469742e6a7067, 0x626167656e646974312e6a7067, 0x626167656e74697420332e6a7067, 0x626167656e746974342e6a7067),
(2, 0x70756c6f312e6a7067, 0x70756c6f322e6a7067, 0x70756c6f332e6a7067, 0x70756c6f352e6a7067),
(3, 0x746172616a65312e6a7067, 0x746172616a65322e6a7067, 0x746172616a65332e6a7067, 0x746172616a65342e6a7067),
(5, 0x6b70756c6f202832292e6a7067, 0x6b70756c6f202833292e6a7067, 0x6b70756c6f202834292e6a7067, 0x70756c6f312e6a7067),
(6, 0x6b616d70756c6f312e6a706567, 0x6b616d70756c6f322e6a706567, 0x6b616d70756c6f332e6a706567, 0x6b616d70756c6f342e6a706567),
(7, 0x63757275676f726f6b202832292e6a7067, 0x63757275676f726f6b202833292e4a5047, 0x63757275676f726f6b202834292e4a5047, 0x63757275676f726f6b202835292e4a5047),
(8, 0x63757275676f726f6b202831292e6a7067, 0x63757275676f726f6b202832292e6a7067, 0x63757275676f726f6b202834292e4a5047, 0x63757275676f726f6b202835292e4a5047),
(9, 0x70617061696e6461696e202831292e6a706567, 0x70617061696e6461696e202831292e4a5047, 0x70617061696e6461696e202833292e6a706567, 0x70617061696e6461696e202834292e6a706567),
(10, 0x4b6563617069202834292e4a5047, 0x4b6563617069202835292e6a7067, 0x4b6563617069202831292e4a5047, 0x4b6563617069202832292e4a5047),
(11, 0x73697475626167656e646974202831292e4a5047, 0x73697475626167656e646974202832292e4a5047, 0x73697475626167656e646974202834292e4a5047, 0x73697475626167656e646974202835292e4a5047),
(12, 0x63616e6469202831292e4a5047, 0x63616e6469202832292e4a5047, 0x63616e6469202834292e4a5047, 0x63616e6469202835292e4a5047),
(13, 0x74616d616e202831292e6a706567, 0x74616d616e202833292e6a706567, 0x74616d616e202834292e6a706567, 0x74616d616e202835292e6a706567),
(14, 0x44696e6f202831292e6a7067, 0x44696e6f202833292e4a5047, 0x44696e6f202834292e4a5047, 0x44696e6f202835292e4a5047),
(15, 0x626167656e646974312e6a7067, 0x626167656e74697420332e6a7067, 0x626167656e746974342e6a7067, 0x626174696b2e4a5047),
(16, 0x74656c656e67312e6a7067, 0x74656c656e67312e6a7067, 0x74656c656e67312e6a7067, 0x74656c656e67312e6a7067),
(17, 0x6d62756c75312e6a7067, 0x6d62756c75322e6a7067, 0x6d62756c75332e6a7067, 0x6d62756c75342e6a7067),
(18, 0x6d616b616d312e6a7067, 0x6d616b616d322e6a7067, 0x6d616b616d332e6a7067, 0x6d616b616d342e6a7067),
(19, 0x6d616b616d312e6a7067, 0x6d616b616d322e6a7067, 0x6d616b616d332e6a7067, 0x6d616b616d342e6a7067),
(20, 0x6b6172616e6762616e61722e6a706567, 0x6d616b616d312e6a7067, 0x6d616b616d322e6a7067, 0x6d616b616d332e6a7067),
(21, 0x43757275672d536f6e67332e6a7067, 0x63757275672d736f6e67312e6a7067, 0x63757275672d736f6e67322e6a706567, 0x63757275672d736f6e67362e6a7067),
(23, 0x74656c656e67322e6a706567, 0x74656c656e67332e6a7067, 0x74656c656e67342e6a706567, 0x74656c656e67352e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `tbkategoribudaya`
--

CREATE TABLE `tbkategoribudaya` (
  `kdkategori` int(10) NOT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ket` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkategoribudaya`
--

INSERT INTO `tbkategoribudaya` (`kdkategori`, `kategori`, `ket`) VALUES
(14, 'Budaya', 'Budaya Kesenian');

-- --------------------------------------------------------

--
-- Table structure for table `tbkategoriwisata`
--

CREATE TABLE `tbkategoriwisata` (
  `kdkategori` int(10) NOT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ket` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkategoriwisata`
--

INSERT INTO `tbkategoriwisata` (`kdkategori`, `kategori`, `ket`) VALUES
(6, 'Telaga', 'Wisata Alam'),
(9, 'Makam', 'Wisata Edukasi'),
(12, 'Air Terjun', 'Wisata Alam'),
(15, 'Bukit', 'Wisata Alam');

-- --------------------------------------------------------

--
-- Table structure for table `tbwisata`
--

CREATE TABLE `tbwisata` (
  `kdwisata` int(10) NOT NULL,
  `kdkategori` int(10) NOT NULL,
  `wisata` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lokasi` mediumtext CHARACTER SET latin1 NOT NULL,
  `ket1` longtext CHARACTER SET latin1 NOT NULL,
  `ket2` longtext CHARACTER SET latin1 NOT NULL,
  `image` blob NOT NULL,
  `akses` longtext CHARACTER SET latin1 NOT NULL,
  `waktu` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tiket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbwisata`
--

INSERT INTO `tbwisata` (`kdwisata`, `kdkategori`, `wisata`, `lokasi`, `ket1`, `ket2`, `image`, `akses`, `waktu`, `tiket`) VALUES
(17, 15, 'Bukit Mbulu', 'Jl. Kalisalak-Binangun, Watugede, Kalisalak, Kec. Kebasen, Kabupaten Banyumas, Jawa Tengah', 'Bukit Mbulu merupakan pilihan utama yang bisa dinikmati. Kawasan ini memiliki pemandangan hamparan pepohonan dan perbukitan nan indah. Selain itu, tepat di tengahnya, terdapat Sungai Ontong mengalir membelah perbukitan. Bukit wisata yang dikelola Lembaga Masyarakat Desa Hutan (LMDH) Kalisalak ini dibuka sejak tahun 2016. Setiap pekan, selalu ramai pengunjung dari wilayah Banyumas dan Cilacap. ', 'Destinasi wisata berada di areal hutan Perhutani KPH Banyumas Timur ini sudah dilengkapi berbagai fasilitas. Seperti gasebo, warung, area berkemah, selfie deck dan jembatan selfie. Tiket masuk ke Bukit Mbulu juga cukup murah, yaitu Rp 4000. Tarif parkir untuk untuk kendaraan roda dua hanya Rp 2000. Bukit Mbulu menjadi salah satu daya tarik wisata yang dikembangkan di desanya. Selain itu masih ada lagi destinasi lainnya yang tak kalah menarik. ', 0x6d62756c75352e6a7067, 'Bukit Mbulu berada di timur permukiman warga memalui jalur alternatif menuju Desa Dawuhan, Kecamatan Banyumas. Jalur ini dikenal sebagai jalur favorit pecinta motor trail.', '08.00 - 15.00', 4000),
(20, 9, 'Makam Karang Banar', 'Jl. Karangbanar, Area Sawah/Kebun, Kalisalak, Kec. Kebasen, Kabupaten Banyumas, Jawa Tengah', 'Masyarakat Banyumas saat ini sedang semangat bergerak untuk menggali potensi Wisata di Desanya masing - masing Salah satunya adalah Wisata religi yang sedang dikembangkan oleh Masyarakat dan Pemerintahan Desa Kalisalak Kecamatane Kebasen Kabuoaten Banyumas.', 'Makan ini tepatnya berlokasi di Grumbul Karang Banar Desa Kalisalak. Lokasi makam ini dikelilingi pepohonan yang rindang sehingga cocok buat ngadem. Selain itu juga ada ratusan moyet yang hidup dan berkembang biak di sekitar lokasi makam.', 0x6d616b616d342e6a7067, 'Dapat diakses menggunakan motor atau mobil melewati bukit menempuh waktu sekitar 15 menit dari kantor desa Kalisalak.', '', 0),
(21, 12, 'Curug Song', 'Jl. Curug Orok, Cikandang, Kec. Cikajang, Kabupaten Garut, Jawa Barat 44171', 'Curug orok merupakan wisata air terjun yang banyak peminatnya. Curug ini berjarak 31 km dari Pusat Kota Garut dengan jarak tempuh sekitar 2 jam dengan menggunakan kendaraan pribadi. Asal muasal diberi nama Curug Orok karena pada tahun 1968 ada seorang Wanita yang membuang bayinya dari puncak air terjun. Curug Orok ini mempunyai 2 curug, dimana yang besar melambangkan keberadaan ibu si bayi dan curug yang kecil melambangkan bayi tersebut. Untuk perjalanan menuju curug ini bisa dilakukan dengan menggunakan kendaraan roda empat maupun dua.', 'Ketinggian Air Terjun nya mencapai 45 meter. Di Kawasan Curug Orok juga terdapat sebuah shelter dan fasilitas keamanan berupa pos jaga yang juga berfungsi sebagai pos tiket. Selain itu terdapat juga beberapa kios makanan dan souvenir yang menjual alat kerajinan tangan dan alat-alat rumah tangga. Tempat parkir di Curug Orok ini mampu menampung 10 Bus, 20 Mobil dan 50 Motor dengan luas 500 m2.', 0x6375727567736f6e672e6a7067, 'Jika kamu menggunakan kendaraan pribadi kamu arahkan kendaraanmu ke arah selatan dari Garut Kota, setelah itu kamu akan melewati Bayongbong kemudian Cisurupan setelah di pertigaan Papanggungan belok kanan menuju arah Cikandang. Lanjutkan perjalananmu sampai menemukan papan petunjuk menuju Curug Orok.', '08.00 - 16.00', 15000),
(23, 6, 'Telaga Anteng', 'Karangsari, Kalisalak, Kec. Kebasen, Kabupaten Banyumas, Jawa Tengah', 'Telaga Anteng atau oleh masyarakat Desa Kalisalak lebih dikenal dengan nama Teleng merupakan salah satu tempat wisata dan mengandung nilai sejarah. Lokasinya terletak di grumbul tawon baluh, sebelah utara lapangan Desa Kalisalak. Air telaga yang berwarna biru merupakan salah satu keunikan dari telaga ini, meskipun pada musim kemarau panjang, air telaga ini tidak pernah surut. Disebelah timur telaga ini terdapat mata air yang disebut banyu wulung, disebut banyu wulung karena warna airnya berwarna wulung (ungu), masyarakat sekitar mempercayai bahwa air dari banyu wulung dapat menyembuhkan berbagai penyakit kulit.', 'Konon kondisi Tanah di area teleng bertekstur seperti bubur sumsum masyarakat sekitar menyebutnya tanah lumpur hidup, bahkan di gambarkan jika ada hewan ternak yang menginjak di sekitaran teleng pasti akan masuk ke tanah lumpur hidup dan hilang. Dengan seringnya kejadian hewan ternak masyarakat sekitar yang konon hilang ditelan lumpur hidup disekitaran teleng. Beliau Eyang Wirayudha berupaya dengan menancapkan pusakanya yang berupa sebilah gelagah putih di tengah-tengah area Telaga Anteng dan yang semula tekstur tanah di sekitaran yang tadinya seperti bubur sumsum dan masyarakat menyebut tanah lumpur hidup menjadi kering dan keras, bahkan sampai teleng menjadi tanah yang kuat dan dengan bentuk telaga bundar merupakan pusat dari tancapan sebilah pusaka Eyang Wirayudha, yang masyakarat sekarang menyebutnya Teleng.', 0x74656c656e67312e6a7067, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`kdadmin`);

--
-- Indexes for table `tbbudaya`
--
ALTER TABLE `tbbudaya`
  ADD PRIMARY KEY (`kdbudaya`);

--
-- Indexes for table `tbdetailwisata`
--
ALTER TABLE `tbdetailwisata`
  ADD PRIMARY KEY (`kdwisata`);

--
-- Indexes for table `tbkategoribudaya`
--
ALTER TABLE `tbkategoribudaya`
  ADD PRIMARY KEY (`kdkategori`);

--
-- Indexes for table `tbkategoriwisata`
--
ALTER TABLE `tbkategoriwisata`
  ADD PRIMARY KEY (`kdkategori`);

--
-- Indexes for table `tbwisata`
--
ALTER TABLE `tbwisata`
  ADD PRIMARY KEY (`kdwisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `kdadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbbudaya`
--
ALTER TABLE `tbbudaya`
  MODIFY `kdbudaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbdetailwisata`
--
ALTER TABLE `tbdetailwisata`
  MODIFY `kdwisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbkategoribudaya`
--
ALTER TABLE `tbkategoribudaya`
  MODIFY `kdkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbkategoriwisata`
--
ALTER TABLE `tbkategoriwisata`
  MODIFY `kdkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbwisata`
--
ALTER TABLE `tbwisata`
  MODIFY `kdwisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
