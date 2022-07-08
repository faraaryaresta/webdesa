-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 09:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desajatimakmur`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(30) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `username`, `email`, `password`) VALUES
(1, 'fara', 'fara@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `autor` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `judul`, `nama_file`, `tanggal`, `autor`, `kategori`, `deskripsi`) VALUES
(1, 'MUSYAWARAH DESA (MUSDES) PENYUSUNAN RKPDes 2019', 'rapat11.jpeg', '2022-05-13', 'admin', 'Politik', 'Jatimakmur   Dalam rangka mempersiapkan program pembangunan yang akan dilaksanakan pada tahun 2019 di Desa Jatimakmur, Kecamatan Songgom Kabupaten Brebes dilaksanakanlah musyawarah desa penyusunan RKP Desa Kamis, 13 September 2018 jam 10.00 WIB di Balai Desa Jatimakmur. '),
(2, 'Sosialisasi GERMAS 2022', 'germas.jpg', '2022-05-12', 'admin', 'Olahraga', 'Kegiatan Penggerakan Germas dan Edukasi Gizi Seimbang (makan buah dan sayur) dari Puskesmas Nusa Penida 1 tanggal 29 Juni 2022'),
(3, 'Penanaman Pohon Sandat/Kenanga dan Cempaka dalam Peringatan Tumpek Wariga Secara Sekala', 'tanam.jpg', '2022-04-15', 'admin', 'Umum', 'Penanaman Pohon Sandat/Kenanga dan Cempaka di Halaman Kantor Desa dan Lapangan'),
(4, 'PENGAMBILAN SUMPAH DAN PELANTIKAN SEKDES DESA JATIMAKMUR', 'lantik.jpg', '2009-02-18', 'admin', 'Politik', 'Desa Jatimakmur, Pada Hari Selasa, 17 April 2018 telah dilaksanakan Pengambilan Sumpah dan Pelantikan Sekretaris desa Jatimakmur di Desa Jatimakmur Kec. Songgom Kab. Brebes,  Setelah jabatan Sekretaris Desa Jatimakmur mengalami kekosongan beberapa bulan yang lalu, disebabkan ditariknya Pegawai Negeri Sipil (PNS) oleh Pemerintah Daerah. maka menanggapi hal yang demikian itu Pemerintah Desa Jatimakmur  penting untuk mengangkat Sekretaris Desa yang baru berdasarkan peraturan pemerintah daerah'),
(5, 'KERJA BAKTI BERSIH BERSIH LINGKUNGAN', 'bersihdesa.jpg', '2022-06-30', 'admin', 'Umum', 'Untuk menghadapi musin penghujan pemuda BBM (Blok Belakang Masjid) inisiatif kerja bakti membersihkan lingkunag RT.02 RW.04 dan berlanjut membersihkan Masjid Baiturokhim ,kami seaku Pemerintahan Desa Mendukung adanya pemuda yang peduli akan lingkungan semoga menjadi contoh bagi pemuda-pemudi lain, mari kita bersihkan lingkunag kita masing masing untuk mencegah kebanjiran dan wabah penyakit.'),
(6, 'MUSYAWARAH DESA (MUSDES) PENYUSUNAN RKPDes 2019', 'about-header.jpg', '2022-07-06', 'admin', 'Edukasi', 'Jatimakmur   Dalam rangka mempersiapkan program pembangunan yang akan dilaksanakan pada tahun 2019 di Desa Jatimakmur, Kecamatan Songgom Kabupaten Brebes dilaksanakanlah musyawarah desa penyusunan RKP Desa Kamis, 13 September 2018 jam 10.00 WIB di Balai Desa Jatimakmur. ');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `nama_file`, `tanggal`, `alamat`) VALUES
(1, '331215458456458', 'Farah Aryaresta', '13.jpg', '2002-02-13', 'jln Pahlawan'),
(2, '331214256854254', 'Mewsiee', '3.jpg', '2001-06-05', 'jln melati'),
(3, '331215768245656', 'Muhammad Rian', '6.jpg', '2001-01-10', 'jln sakura'),
(4, '331254628462579', 'Sekar Melati', '131.jpg', '2009-07-08', 'jln sakura'),
(5, '331245872545689', 'Mahsha Dessiam', '9.jpg', '2001-06-04', 'jln melati'),
(6, '331254698758258', 'Rahmaisya Intan', '15.jpg', '2009-07-22', 'jln Pahlawan');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `nik` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`nik`, `username`, `email`, `phone`, `pesan`) VALUES
(3312421, 'Mahsha Dessiam', 'mahsha@gmail.com', '0852456352', 'Meminta surat'),
(32134534, 'Laila ', 'lailaaa@gmail.com', '987654', 'Meminta Surat Kematian'),
(33125614, 'Faraaryaresta', 'fara@gmail.com', '08525765432', 'Meminta surat kelahiran'),
(33125616, 'Mahalini', 'mahalini@gmail.com', '085245268885', 'Meminta surat kelaahiran'),
(331256142, 'Diana Putri', 'diana@gmail.com', '0852425657521', 'Meminta surat kematian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'fara', 'fara@gmail.com', '4a9bd19b3b8676199592a346051f950c'),
(2, 'fara123', 'faraa123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'lala', 'lala@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'sinta', 'sinta@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'farah', 'faraaryaresta@gmail.com', '202cb962ac59075b964b07152d234b70'),
(25, 'laila', 'laila@gmail.com', '9996535e07258a7bbfd8b132435c5962');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `nik` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331256143;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
