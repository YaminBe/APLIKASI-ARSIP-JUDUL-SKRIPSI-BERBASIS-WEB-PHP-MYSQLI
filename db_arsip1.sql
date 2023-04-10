-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2018 pada 10.47
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `aktif` varchar(2) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `aktif`, `foto`) VALUES
(3, ' a', ' a', ' Rahmat', 'N', 'userk.png'),
(5, 'admin', 'admin', 'admin', 'Y', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_dosen` varchar(60) NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `t_lahir` varchar(60) NOT NULL,
  `tg_lahir` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `id_jurusan` int(5) NOT NULL,
  `id_fakultas` int(5) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nip`, `nama_dosen`, `gelar`, `t_lahir`, `tg_lahir`, `jk`, `alamat`, `email`, `id_jurusan`, `id_fakultas`, `foto`) VALUES
(2, 46576898, 'Abdul Yamin,', ' S.Pd, M.Kom', 'Bengkulu', '18 July, 2018', 'Laki-laki', 'grhtrj', 'aaaa', 1, 1, 'avatar.jpg'),
(3, 99999999, 'Riri Okra', 'S.Kom,M.Kom', 'Baso', '2 July, 2018', 'Laki-laki', 'Baso Bukittinggi', 'riro@gmail.com', 1, 1, '10304432100006.png'),
(4, 2147483647, 'Poppy Yendriani', 'S.Pd', 'Jakarta', '12 July, 2018', 'Perempuan', 'Balingka', 'poppy@gmail.com', 1, 2, '10304432100006.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id_fakultas` int(5) NOT NULL,
  `nm_fakultas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id_fakultas`, `nm_fakultas`) VALUES
(1, 'FAKULTAS TARBIYAH DAN ILMU KEGURUAN'),
(2, 'FAKULTAS USULUDDIN ADAB DAN DAKWAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fileskripsi`
--

CREATE TABLE `tb_fileskripsi` (
  `id_file` int(11) NOT NULL,
  `id_skripsi` int(5) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_fileskripsi`
--

INSERT INTO `tb_fileskripsi` (`id_file`, `id_skripsi`, `tanggal_upload`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, 6, '2018-07-09', 'docx', '1048370', '../file/6.docx'),
(2, 1, '2018-07-09', 'pdf', '190422', '../file/1.pdf'),
(3, 4, '2018-07-09', 'pdf', '190422', '../file/4.pdf'),
(4, 3, '2018-07-09', 'pdf', '190422', '../file/3.pdf'),
(5, 8, '2018-07-10', 'pdf', '278892', '../file/8.pdf'),
(6, 9, '2018-07-10', 'pdf', '278892', '../file/9.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal`
--

CREATE TABLE `tb_jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `id_mhs` int(5) NOT NULL,
  `tahun` int(15) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal`, `id_mhs`, `tahun`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, 2, 2007, '2018-07-08', 'Perancangan Sistem Informasi Kepegawaian Sekolah Berbasis Web Dengan Bootstrap PHP/MySQL', 'docx', '20791', '../file/ppp.docx'),
(2, 1, 2018, '2018-07-08', 'Perancangan Aplikasi Android', 'pdf', '190422', '../file/Perancangan Aplikasi Android.pdf'),
(3, 4, 2010, '2018-07-08', 'Aplikasi Pembayaran SPP SMK EI Bukittinggi', 'pdf', '484705', '../file/Aplikasi Pembayaran SPP SMK EI Bukittinggi.pdf'),
(4, 5, 2016, '2018-07-09', 'Perancangan Aplikasi Media Edukasi Mata Pelajaran MBPSWAN Berbasis Android', 'pdf', '799820', '../file/Perancangan Aplikasi Media Edukasi Mata Pelajaran MBPSWAN Berbasis Android.pdf'),
(5, 1, 2018, '2018-07-09', 'Media Pembelajaran itu itu', 'pdf', '296066', '../file/Media Pembelajaran itu itu.pdf'),
(6, 11, 2013, '2018-07-10', 'Perancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQL', 'pdf', '278892', '../file/Perancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQL.pdf'),
(7, 11, 2007, '2018-07-10', 'Perancangan Sistem Informasi Inventori Barang Sekolah Menggunakan PHP', 'pdf', '278892', '../file/Perancangan Sistem Informasi Inventori Barang Sekolah Menggunakan PHP.pdf'),
(8, 2, 2013, '2018-07-13', 'Sembarang', 'pdf', '1765566', '../file/Sembarang.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(5) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nm_jurusan`) VALUES
(1, 'Pendidikan Teknik Informatika Komputer'),
(2, 'Pendidikan Agama Islam'),
(4, 'Pendidikan Teknik Multimedia'),
(5, 'PENDIDIKAN TEKNIK INFORMATIKA DAN KOMPUTER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Aplikasi'),
(2, 'Sistem Informasi'),
(5, 'Media Pembelajaran'),
(6, 'Kependidikan'),
(7, 'Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_makul`
--

CREATE TABLE `tb_makul` (
  `id_makul` int(5) NOT NULL,
  `nm_makul` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id_mhs` int(5) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama_mhs` varchar(60) NOT NULL,
  `tmp_lahir` varchar(60) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `th_masuk` int(15) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aktif` varchar(10) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `nim`, `nama_mhs`, `tmp_lahir`, `tgl_lahir`, `jk`, `alamat`, `email`, `th_masuk`, `username`, `password`, `aktif`, `foto`) VALUES
(1, 2513001, 'Abdul Yamin', 'Sibak', '2018-07-03', 'Laki-laki', 'Jalan Melati No 5 B', 'ocik@gamil.com', 2007, 'y', 'y', 'T', 'userk.png'),
(2, 2513002, 'Abi Rafdi', 'Medan', '2018-07-03', 'Laki-laki', 'Medan', 'tes@gmail.com', 2007, 'a', 'a', 'Y', 'avatar.jpg'),
(4, 2513004, 'Adnil Rahmat', 'Kamang', '31 July, 2018', 'Laki-laki', 'Kamang', 'amaik@gmail.com', 2013, 'a', 'a', 'Y', 'userk.png'),
(5, 2513005, 'Poppy Yendriani', 'Jakarta', '11 July, 2018', 'Perempuan', 'Jambu Air', 'poppy@gmail.com', 2007, 'py', 'py', 'Y', 'userk.png'),
(6, 2513006, 'dw', 'bb', '2016-05-04', 'Laki-laki', 'bh', 'amaik@gmail.com', 2007, 'f', 'f', 'Y', 'avatar.jpg'),
(8, 2513007, 'hbgvg', 'vg', '2016-05-04', 'Laki-laki', 'gvgvg', 'amaik@gmail.com', 2007, 'bgvgv', 'vgvg', 'Y', 'avatar.jpg'),
(9, 2513008, 'Bayu Kurniawan', 'dfg', '', 'Perempuan', 'gfd', 'dgfh@gmai.com', 2007, 'g', 'g', 'Y', 'userk.png'),
(10, 2513010, 'Asri Hidayat', 'Kuansing', '2018-07-19', 'Laki-laki', 'Tabek Gadang', 'asri@gmail.com', 2013, 'asri', 'asri', 'Y', '19554878_536857876684354_5645497893950459109_n.jpg'),
(11, 2514001, 'Yusildi Munawir', 'Solok', '1965-08-09', 'Laki-laki', 'Alahan Panjang', 'yu@gmail.com', 2007, 'yus', 'yus', 'T', '10304432100006.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skripsi`
--

CREATE TABLE `tb_skripsi` (
  `id_skripsi` int(5) NOT NULL,
  `id_mhs` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `pemb1` varchar(60) NOT NULL,
  `pemb2` varchar(60) NOT NULL,
  `penguji1` varchar(60) NOT NULL,
  `penguji2` varchar(60) NOT NULL,
  `mulai_bimbingan` varchar(30) NOT NULL,
  `akhir_bimbingan` varchar(30) NOT NULL,
  `tahun` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_skripsi`
--

INSERT INTO `tb_skripsi` (`id_skripsi`, `id_mhs`, `id_kategori`, `judul`, `abstrak`, `keyword`, `pemb1`, `pemb2`, `penguji1`, `penguji2`, `mulai_bimbingan`, `akhir_bimbingan`, `tahun`) VALUES
(2, 10, 6, 'Pengaruh Hasil Belajara Siswa Terhadap Metode Two Stay To and Cry', '<p>Abstrakhrtjtyjhtrdbbghbhgv</p>\r\n\r\n<p>ghbghbbgvgvfvff</p>\r\n\r\n<p>jjjjhgtrppy</p>\r\n\r\n<p>lllkmdndfaaahagvd&nbsp; fb ngll kkmmg nfhfhf bbsgdgdt hfvdgfv bhdfywe bhfgyewfg</p>\r\n', 'Keyword se nyo', 'Riri Okra', 'Abdul Yamin, S.Pd, M.Kom', 'Poppy Yendriani', 'Riri Okra', '1 July, 2018', '28 July, 2018', 2007),
(3, 1, 2, 'Perancangan Sistem Informasi Geografis Menggunakan PHP/MySQL', '<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>Abstrak</p>\r\n\r\n<p>AbstrakAbstrak</p>\r\n\r\n<p>Abstrak</p>\r\n', 'Abstrak', 'Poppy Yendriani', 'Abdul Yamin,', 'Riri Okra', 'Abdul Yamin,', '10 July, 2018', '14 July, 2018', 2007),
(4, 2, 5, 'MEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDER', '<p>MEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDERMEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDER</p>\r\n', 'MEDIA PEMBELAJARAN BERBASIS TUTORIAL DENGAN CAMSTASIA RECORDER', 'Abdul Yamin,', 'Riri Okra', 'Riri Okra', 'Riri Okra', '16 July, 2018', '28 July, 2018', 2007),
(6, 6, 7, 'SISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUA', '<p><strong>Abstrak</strong></p>\r\n\r\n<p><strong>SISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUA</strong><strong>SISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUASISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUA</strong></p>\r\n', 'SISTEM KEAMANAN JARINGAN LAN MENGGUNAKAN DEBIAN DI SMAN SUNGAI PUA', 'Abdul Yamin,', 'Riri Okra', 'Poppy Yendriani', 'Riri Okra', '2 July, 2018', '31 July, 2018', 2007),
(7, 6, 1, 'APLIKASI SURAT MASUK DENGAN JAVA', '<p>Abstrak</p>\r\n\r\n<p>APLIKASI SURAT MASUK DENGAN JAVA</p>\r\n\r\n<p>APLIKASI SURAT MASUK DENGAN JAVAAPLIKASI SURAT MASUK DENGAN JAVA</p>\r\n\r\n<p>APLIKASI SURAT MASUK DENGAN JAVA</p>\r\n\r\n<p>APLIKASI SURAT MASUK DENGAN JAVA</p>\r\n\r\n<p>APLIKASI SURAT MASUK DENGAN JAVA</p>\r\n\r\n<p>APLIKASI SURAT MASUK DENGAN JAVA</p>\r\n', 'APLIKASI SURAT MASUK DENGAN JAVA', 'Abdul Yamin,', 'Riri Okra', 'Poppy Yendriani', 'Riri Okra', '1 July, 2018', '28 July, 2018', 2007),
(8, 11, 2, 'Perancangan Sistem Informasi Inventori Menggunakan Bahasa Pemrograman PHP/MySQL', '<p><strong>Abstrak</strong></p>\r\n\r\n<p>Perancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQLPerancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQL</p>\r\n', 'Perancangan Sistem Informasi Inventori Barang Sekolah Menggunakan Bahasa Pemrograman PHP/MySQL', 'Abdul Yamin,', 'Riri Okra', 'Poppy Yendriani', 'Abdul Yamin,', '1 January, 2022', '', 2013),
(9, 2, 1, 'hgcfxdxdfx', '<p>gfcfcAbstrak</p>\r\n', 'fcfcfc', 'Riri Okra', 'Riri Okra', 'Riri Okra', 'Abdul Yamin,', '23 July, 2018', '31 July, 2018', 2013),
(10, 10, 6, 'Pengaruh Penggunaaan Mobole Legend ', '<p>Abstrak</p>\r\n\r\n<p>Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;Pengaruh Penggunaaan Mobole Legend&nbsp;</p>\r\n', 'Pengaruh Penggunaaan Mobole Legend ', 'Riri Okra', 'Abdul Yamin,', 'Poppy Yendriani', 'Abdul Yamin,', '1 July, 2018', '31 July, 2018', 2013),
(11, 9, 2, 'FORM UPLOAD JUDUL SKRIPSI', '<p>FORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIFORM UPLOAD JUDUL SKRIPSIAbstrak</p>\r\n', 'FORM UPLOAD JUDUL SKRIPSI', '', '', '', '', '', '', 2012);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indeks untuk tabel `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `tb_fileskripsi`
--
ALTER TABLE `tb_fileskripsi`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_skripsi` (`id_skripsi`);

--
-- Indeks untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_makul`
--
ALTER TABLE `tb_makul`
  ADD PRIMARY KEY (`id_makul`);

--
-- Indeks untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `tb_skripsi`
--
ALTER TABLE `tb_skripsi`
  ADD PRIMARY KEY (`id_skripsi`),
  ADD KEY `id_mhs` (`id_mhs`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  MODIFY `id_fakultas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_fileskripsi`
--
ALTER TABLE `tb_fileskripsi`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_makul`
--
ALTER TABLE `tb_makul`
  MODIFY `id_makul` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id_mhs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_skripsi`
--
ALTER TABLE `tb_skripsi`
  MODIFY `id_skripsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `tb_fakultas` (`id_fakultas`),
  ADD CONSTRAINT `tb_dosen_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`);

--
-- Ketidakleluasaan untuk tabel `tb_skripsi`
--
ALTER TABLE `tb_skripsi`
  ADD CONSTRAINT `tb_skripsi_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `tb_mhs` (`id_mhs`),
  ADD CONSTRAINT `tb_skripsi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
