-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2022 pada 11.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antiokhia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(11) NOT NULL,
  `id_jemaat` int(10) NOT NULL,
  `id_minggu` int(10) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `id_jemaat`, `id_minggu`, `waktu`) VALUES
(1, 1, 9, 1644131496);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_baptis`
--

CREATE TABLE `tb_baptis` (
  `id_baptis` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `tgl_baptis` date NOT NULL,
  `gereja` varchar(50) NOT NULL,
  `pendeta` varchar(30) NOT NULL,
  `status_verifikasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_baptis`
--

INSERT INTO `tb_baptis` (`id_baptis`, `nama`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `nama_ayah`, `nama_ibu`, `tgl_baptis`, `gereja`, `pendeta`, `status_verifikasi`) VALUES
(7, 'Albert Naga Panca Ariwija', 'Malang', '2001-01-10', '2147483647', 'Mark lee', 'Mina', '2022-04-08', 'GKT Antiokhia', 'Handoko', 1),
(8, 'Dewi Poniman', 'Surabaya', '1942-06-19', '818170937', 'Agus ', 'Rani', '0000-00-00', '', '', 0),
(9, 'Ami', 'Bali', '2001-02-14', '2147483647', 'Ni Luh', 'Yuli Ning Tyas', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_jadwal`
--

CREATE TABLE `tb_detail_jadwal` (
  `id_detail` int(10) NOT NULL,
  `kode_user` int(10) NOT NULL,
  `id_jadwal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `rumah_jemaat` varchar(50) NOT NULL,
  `pelayan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `hari`, `tanggal`, `rumah_jemaat`, `pelayan`) VALUES
(9, 'selasa', '2022-01-15', 'lala', 'wahyu'),
(10, 'selasa', '2022-02-03', 'clara', 'Marlina');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_perjamuan`
--

CREATE TABLE `tb_jadwal_perjamuan` (
  `id_jadwalperjamuan` int(10) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `rumah` varchar(50) NOT NULL,
  `pelayan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal_perjamuan`
--

INSERT INTO `tb_jadwal_perjamuan` (`id_jadwalperjamuan`, `hari`, `tanggal`, `jam`, `rumah`, `pelayan`) VALUES
(2, 'Rabu', '2022-04-06', '14:57:00', '1', 'wahyu'),
(3, 'selasa', '2022-04-15', '19:18:00', '19', 'wahyu'),
(4, 'Sabtu', '2022-04-09', '18:44:00', '23', 'Handoko'),
(5, 'Sabtu', '2022-04-09', '20:59:00', '23', 'wahyu'),
(6, 'selasa', '2022-05-10', '10:30:00', '14', 'wahyu'),
(7, 'Rabu', '2022-05-10', '15:30:00', '11', 'Vita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jemaat`
--

CREATE TABLE `tb_jemaat` (
  `id_jemaat` int(11) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `status_keanggotaan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jemaat`
--

INSERT INTO `tb_jemaat` (`id_jemaat`, `kode_user`, `nama`, `alamat`, `tgl_lahir`, `tempat_lahir`, `no_hp`, `status_keanggotaan`) VALUES
(1, 4, 'lala', 'jl.Gambuta 1/j7', '2000-11-11', 'Landak', 895238342, 'aktif'),
(11, 17, 'Tira', 'Landak', '1994-06-30', 'pasar ngarak', 2147483647, 'aktif'),
(12, 18, 'Bela', 'Malang', '2022-01-17', 'ngarak', 2147483647, 'aktif'),
(13, 19, 'Bela', 'Jl.Raya Candi No V', '1998-06-17', 'Malang', 2147483647, 'tidak aktif'),
(14, 21, 'Sehun', '423, Apgujeong-ro, G', '1994-04-14', 'Korea', 2147483647, 'aktif'),
(15, 22, 'Anam', 'perum Tidar Permai Jl.Gambuta 1/J7', '2022-01-26', 'Malang', 887646596, 'aktif'),
(16, 23, 'Akiem Sentosa', 'Jl. Kalingkang 25 Malang', '1963-06-18', 'Malang', 2147483647, 'aktif'),
(17, 24, 'Adhistira Thea Winnie Kuntjoro', 'Jl. Esberg W 1/4 Malang', '1996-08-25', 'Malang', 2147483647, 'aktif'),
(18, 25, 'Claudia Bacas', 'Jl. Puncak Trikora T1/5 Malang', '1997-06-12', 'Tangerang', 2147483647, 'tidak aktif'),
(19, 26, 'Ami', 'Jl. Ranakah No. 20 Malang', '2001-02-14', 'Bali', 2147483647, 'tidak aktif'),
(20, 27, 'Aan Kristanto', 'Jl. Mawar II / 15 Malang', '1983-06-30', 'Malang', 2147483647, 'aktif'),
(21, 28, 'Albert Naga Panca Ariwijaya', 'Graha Laksana Tidar B/01 Mlg', '2001-01-10', 'Malang', 2147483647, 'aktif'),
(22, 29, 'Andri Winoto Tjandrayana', 'Jl. Gamalama 31', '1984-08-18', 'Tegal', 2147483647, 'aktif'),
(23, 30, 'Dewi Poniman', 'Jl. Lompo Batang 8 Malang', '1942-06-19', 'Surabaya', 818170937, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `kode_user` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`kode_user`, `pass`, `username`, `role`) VALUES
(1, '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 0),
(4, '81dc9bdb52d04dc20036dbd8313ed055', 'lala', 1),
(5, 'cc67e9034ff9fc03106051ba7b429d7f', 'clara', 1),
(6, 'ed2b1f468c5f915f3f1cf75d7068baae', 'nana', 1),
(7, '202cb962ac59075b964b07152d234b70', 'putri', 1),
(8, '202cb962ac59075b964b07152d234b70', 'cio', 1),
(9, '202cb962ac59075b964b07152d234b70', 'deven', 1),
(10, '6c5bc43b443975b806740d8e41146479', 'albert', 1),
(11, '81dc9bdb52d04dc20036dbd8313ed055', 'albert', 1),
(12, '6c5bc43b443975b806740d8e41146479', 'albert', 1),
(13, '81dc9bdb52d04dc20036dbd8313ed055', 'albert', 1),
(14, 'cdd7a616f977556bf3bce39917a37a30', 'bela', 1),
(15, '81dc9bdb52d04dc20036dbd8313ed055', 'cio', 1),
(16, '81dc9bdb52d04dc20036dbd8313ed055', 'tira', 1),
(17, '81dc9bdb52d04dc20036dbd8313ed055', 'tira', 1),
(18, '81dc9bdb52d04dc20036dbd8313ed055', 'bela', 1),
(19, 'b8a9e6707454edef61f092956403269a', 'bela', 1),
(20, '81dc9bdb52d04dc20036dbd8313ed055', 'lala', 1),
(21, '81dc9bdb52d04dc20036dbd8313ed055', 'sehun', 1),
(22, '81dc9bdb52d04dc20036dbd8313ed055', 'anam', 1),
(23, '81dc9bdb52d04dc20036dbd8313ed055', 'akim', 1),
(24, '81dc9bdb52d04dc20036dbd8313ed055', 'adhistiara', 1),
(25, '81dc9bdb52d04dc20036dbd8313ed055', 'claudia', 1),
(26, '81dc9bdb52d04dc20036dbd8313ed055', 'ami', 1),
(27, '81dc9bdb52d04dc20036dbd8313ed055', 'aan', 1),
(28, '81dc9bdb52d04dc20036dbd8313ed055', 'albert', 1),
(29, '81dc9bdb52d04dc20036dbd8313ed055', 'andri', 1),
(30, '81dc9bdb52d04dc20036dbd8313ed055', 'dewi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mingguan`
--

CREATE TABLE `tb_mingguan` (
  `id_minggu` int(10) NOT NULL,
  `jenis_ibadah` varchar(10) NOT NULL,
  `minggu` varchar(15) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jam_mulai` varchar(30) NOT NULL,
  `jam_berakhir` varchar(30) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mingguan`
--

INSERT INTO `tb_mingguan` (`id_minggu`, `jenis_ibadah`, `minggu`, `tanggal`, `jam_mulai`, `jam_berakhir`, `status`) VALUES
(6, 'natal', '3', '2021-12-25', '17:01', '19:01', 2),
(7, 'Keluarga', '4', '2021-12-15', '08:00', '09:00', 2),
(9, 'minggu', '1', '2022-01-23', '08:00', '09:00', 2),
(10, 'minggu', '1', '2022-05-22', '07:00', '09:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nama_lengkap`, `jabatan`) VALUES
(2, 'wahyu', 'Evangelis'),
(4, 'Handoko', 'Pendeta'),
(5, 'Vita', 'Evangelis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perjamuan`
--

CREATE TABLE `tb_perjamuan` (
  `id_perjamuan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perjamuan`
--

INSERT INTO `tb_perjamuan` (`id_perjamuan`, `nama`, `alamat`, `no_hp`, `status`) VALUES
(1, 'Clara', 'perum Tidar Permai Jl.Gambuta ', 2147483647, 1),
(2, 'lala', 'malang', 2147483647, 0),
(3, 'Tira', 'Landak', 2147483647, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warta`
--

CREATE TABLE `tb_warta` (
  `id_warta` int(10) NOT NULL,
  `judul_warta` varchar(50) NOT NULL,
  `isi_warta` text NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_warta`
--

INSERT INTO `tb_warta` (`id_warta`, `judul_warta`, `isi_warta`, `tanggal`, `image`) VALUES
(9, 'ibadah minggu', 'Ibadah KPR akan diadakan secara onsite mulai jumat depan  dengan Tema :', '2022-01-26', 'Warta_16_Januari_20222.png'),
(11, 'PERSEMBAHAN', '', '2022-01-16', 'Warta_16_Januari_20228.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `tb_baptis`
--
ALTER TABLE `tb_baptis`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indeks untuk tabel `tb_detail_jadwal`
--
ALTER TABLE `tb_detail_jadwal`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_jadwal_perjamuan`
--
ALTER TABLE `tb_jadwal_perjamuan`
  ADD PRIMARY KEY (`id_jadwalperjamuan`);

--
-- Indeks untuk tabel `tb_jemaat`
--
ALTER TABLE `tb_jemaat`
  ADD PRIMARY KEY (`id_jemaat`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_mingguan`
--
ALTER TABLE `tb_mingguan`
  ADD PRIMARY KEY (`id_minggu`);

--
-- Indeks untuk tabel `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `tb_perjamuan`
--
ALTER TABLE `tb_perjamuan`
  ADD PRIMARY KEY (`id_perjamuan`);

--
-- Indeks untuk tabel `tb_warta`
--
ALTER TABLE `tb_warta`
  ADD PRIMARY KEY (`id_warta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_baptis`
--
ALTER TABLE `tb_baptis`
  MODIFY `id_baptis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_jadwal`
--
ALTER TABLE `tb_detail_jadwal`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal_perjamuan`
--
ALTER TABLE `tb_jadwal_perjamuan`
  MODIFY `id_jadwalperjamuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jemaat`
--
ALTER TABLE `tb_jemaat`
  MODIFY `id_jemaat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_mingguan`
--
ALTER TABLE `tb_mingguan`
  MODIFY `id_minggu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_perjamuan`
--
ALTER TABLE `tb_perjamuan`
  MODIFY `id_perjamuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_warta`
--
ALTER TABLE `tb_warta`
  MODIFY `id_warta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
