-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2020 pada 20.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aljihad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(20) NOT NULL,
  `slug` int(100) NOT NULL,
  `judul` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` int(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi_konten` varchar(255) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `link_gambar` varchar(100) NOT NULL,
  `isi_konten` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_dakwah`
--

CREATE TABLE `bidang_dakwah` (
  `id` int(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `isi_konten` varchar(255) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_santri`
--

CREATE TABLE `data_santri` (
  `nspp` varchar(15) NOT NULL,
  `nisp` varchar(20) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `thn_masuk` year(4) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` int(1) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `dari_s` int(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `pos` varchar(10) NOT NULL,
  `jp` int(1) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `pesantren_asal` varchar(50) NOT NULL,
  `thn_masuk_sek` year(4) NOT NULL,
  `thn_lulus_sek` year(4) NOT NULL,
  `pt` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jur` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nik_ayah` varchar(25) NOT NULL,
  `pendidikan_ayah` int(3) NOT NULL,
  `pekerjaan_ayah` int(3) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_ibu` varchar(25) NOT NULL,
  `pendidikan_ibu` int(3) NOT NULL,
  `pekerjaan_ibu` int(3) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `hubungan` int(3) NOT NULL,
  `nik_wali` varchar(25) NOT NULL,
  `pendidikan_wali` int(3) NOT NULL,
  `pekerjaan_wali` int(3) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `status_kk` int(3) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `prov_wali` varchar(100) NOT NULL,
  `kab_wali` varchar(100) NOT NULL,
  `kec_wali` varchar(100) NOT NULL,
  `dusun_wali` varchar(100) NOT NULL,
  `desa_wali` varchar(100) NOT NULL,
  `pos_wali` varchar(10) NOT NULL,
  `hp_wali` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_santri`
--

INSERT INTO `data_santri` (`nspp`, `nisp`, `tgl_daftar`, `thn_masuk`, `nama_santri`, `slug`, `nik`, `nim`, `tempat_lahir`, `tgl_lahir`, `jk`, `no_hp`, `ig`, `anak_ke`, `dari_s`, `alamat`, `prov`, `kab`, `kec`, `dusun`, `desa`, `pos`, `jp`, `nama_sekolah`, `alamat_sekolah`, `pesantren_asal`, `thn_masuk_sek`, `thn_lulus_sek`, `pt`, `fakultas`, `jur`, `nama_ayah`, `nik_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nama_ibu`, `nik_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `nama_wali`, `hubungan`, `nik_wali`, `pendidikan_wali`, `pekerjaan_wali`, `no_kk`, `nama_kk`, `status_kk`, `alamat_wali`, `prov_wali`, `kab_wali`, `kec_wali`, `dusun_wali`, `desa_wali`, `pos_wali`, `hp_wali`) VALUES
('510035780004', '510035780004190001', '2020-09-08 07:42:26', 2020, 'Ahmadi', 'ahmadi', '5541210', '02w202', 'Jogja', '2020-01-23', 1, '+62856035023125', 'kajshdjakjahdkj', 1, 2, 'Surabaya', 'Surabaya', 'Surabaya', 'Surabaya', 'Surabaya', 'Surabaya', '60460', 1, 'Santooo', 'Surabaya', 'Mamammm', 2000, 2003, 'Mammaa', 'kikikiki', 'hdjaj', 'jadjk', 'kajsdhkaj', 1, 1, 'wfwf', '123123', 1, 1, 'sfsdf', 1, '213123', 1, 1, '123123', 'dfdsf', 2, 'wfwe', 'fwfwef', 'wefwef', 'wefwf', 'wfwef', 'wfwef', '3124', '56304653024'),
('510035780004', '510035780004190002', '2020-09-08 07:42:26', 2020, 'Ahmadi', 'ahmadio', '5541210', '02w202', 'Jogja', '2020-01-23', 1, '+62856035023125', 'kajshdjakjahdkj', 1, 2, 'Surabaya', 'Surabaya', 'Surabaya', 'Surabaya', 'Surabaya', 'Surabaya', '60460', 1, 'Santooo', 'Surabaya', 'Mamammm', 2000, 2003, 'Mammaa', 'kikikiki', 'hdjaj', 'jadjk', 'kajsdhkaj', 1, 1, 'wfwf', '123123', 1, 1, 'sfsdf', 1, '213123', 1, 1, '123123', 'dfdsf', 2, 'wfwe', 'fwfwef', 'wefwef', 'wefwf', 'wfwef', 'wfwef', '3124', '56304653024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(20) NOT NULL,
  `slug` int(100) NOT NULL,
  `judul` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl-dibuat` datetime NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bidang_dakwah`
--
ALTER TABLE `bidang_dakwah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`nisp`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bidang_dakwah`
--
ALTER TABLE `bidang_dakwah`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
