-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 12:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang_muhammadiyah`
--

CREATE TABLE `cabang_muhammadiyah` (
  `id` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang_muhammadiyah`
--

INSERT INTO `cabang_muhammadiyah` (`id`, `nama_cabang`, `daerah`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `kontak`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Pusat', 'Kota Jakarta Selatan', '', '', '', '', '', '081234567890', 'a1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:12:59'),
(2, 'Wilayah', 'Kota Jakarta Selatan', '', '', '', '', '', '081234567891', 'a2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:06'),
(3, 'Pusat', 'Kota Jakarta Timur', '', '', '', '', '', '081234567892', 'b1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:12'),
(4, 'Wilayah', 'Kota Jakarta Timur', '', '', '', '', '', '081234567893', 'b2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:17'),
(5, 'Pusat', 'Kota Depok', '', '', '', '', '', '081234567894', 'c1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:20'),
(6, 'Wilayah', 'Kota Depok', '', '', '', '', '', '081234567895', 'c2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:24'),
(7, 'Pusat', 'Kota Bogor', '', '', '', '', '', '081234567896', 'd1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:30'),
(8, 'Wilayah', 'Kota Bogor', '', '', '', '', '', '081234567897', 'd2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:34'),
(12, 'Daerah', 'Kota Jakarta Selatan', '', '', '', '', '', '081234567891', 'a2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:06'),
(13, 'Cabang', 'Kota Jakarta Selatan', '', '', '', '', '', '081234567891', 'a2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:06'),
(14, 'Rating', 'Kota Jakarta Selatan', '', '', '', '', '', '081234567891', 'a2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:06'),
(15, 'Daerah', 'Kota Bogor', '', '', '', '', '', '081234567897', 'd2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:34'),
(16, 'Cabang', 'Kota Bogor', '', '', '', '', '', '081234567897', 'd2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:34'),
(17, 'Rating', 'Kota Bogor', '', '', '', '', '', '081234567897', 'd2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:34'),
(18, 'Daerah', 'Kota Depok', '', '', '', '', '', '081234567895', 'c2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:24'),
(19, 'Cabang', 'Kota Depok', '', '', '', '', '', '081234567895', 'c2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:24'),
(20, 'Rating', 'Kota Depok', '', '', '', '', '', '081234567895', 'c2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:24'),
(21, 'Daerah', 'Kota Jakarta Timur', '', '', '', '', '', '081234567893', 'b2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:17'),
(22, 'Cabang', 'Kota Jakarta Timur', '', '', '', '', '', '081234567893', 'b2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:17'),
(23, 'Rating', 'Kota Jakarta Timur', '', '', '', '', '', '081234567893', 'b2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-05-02 10:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `dm_mbkm_template`
--

CREATE TABLE `dm_mbkm_template` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jdl_template` varchar(200) NOT NULL,
  `desktemplate` text DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `jnsfile` varchar(50) DEFAULT NULL,
  `kettemplate` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_dosen`
--

CREATE TABLE `dm_m_dosen` (
  `id` int(11) NOT NULL,
  `nip` int(12) DEFAULT NULL,
  `nbm` int(12) DEFAULT NULL,
  `namadosen` varchar(200) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_dosen`
--

INSERT INTO `dm_m_dosen` (`id`, `nip`, `nbm`, `namadosen`, `gender`, `tempatlahir`, `tgllahir`, `alamat`, `nohp`, `email`, `prodi`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 123456, 1382329, 'Bambang Subana Afandi', 1, 'Jakarta', '2023-12-20', 'Jl. Kubis II Ujung Gandaria Utara - Kebayoran Baru', '085283389697', 'admin@gmail.com', '2', 1, NULL, '2023-12-01 07:02:30', '2023-12-01 07:02:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_files`
--

CREATE TABLE `dm_m_files` (
  `id` bigint(20) NOT NULL,
  `realname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `encptfile` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bulan` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tipe_file` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ukuran` decimal(10,0) DEFAULT NULL,
  `ekstensi` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `hash_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_files`
--

INSERT INTO `dm_m_files` (`id`, `realname`, `encptfile`, `bulan`, `tahun`, `tipe_file`, `ukuran`, `ekstensi`, `createddate`, `createdby`, `updateddate`, `updatedby`, `isactive`, `hash_file`) VALUES
(66, '493-1258-3-PB.pdf', 'f6750aaf33b8ea255be95b9a5684c642d.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 10:32:23', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(67, '493-1258-3-PB.pdf', 'ff2f5541d246286db77dff6a65fa45eef.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 10:40:57', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(68, '493-1258-3-PB.pdf', 'f1f56b0a3f386a3e5ae778408cc458824.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 10:44:34', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(69, '493-1258-3-PB.pdf', 'f11c6da76aa5568fabcf58ccfbd03895d.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 10:49:28', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(70, '493-1258-3-PB.pdf', 'f008a93838c8571f65d4c125af7560c66.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 10:55:29', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(71, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'f34f7ead636abda4e8235daef196dc5aa.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-27 11:05:43', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(72, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'fbe9d7b34be44575571c25c086265f037.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-27 11:07:25', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(73, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'fb83a366ca3266f7f9c6626660df97937.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-27 11:08:36', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(74, '493-1258-3-PB.pdf', 'f6ffa5eb359962dd71217dd925cd6cb9b.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 11:10:39', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(75, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'fb0fa4f537bd66e5287618fdebce7b500.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-27 11:12:44', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(76, '493-1258-3-PB.pdf', 'f72aca2a8fba58e1e8b3cc378ab90b642.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-27 11:53:30', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(77, 'Prospectus-latest.pdf', 'f17948bd02eae4a6eabe348f46c1f74f9.pdf', '11', 2023, 'application/pdf', 3174, 'pdf', '2023-11-27 11:56:39', NULL, NULL, NULL, 1, 'db3460ba28f66f17abe463a23959680a'),
(78, '493-1258-3-PB.pdf', 'f9ad5b804d5a543ff7cfafeeb199a3862.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 04:06:31', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(79, '493-1258-3-PB.pdf', 'fffaea3b054dabe1cfe480c76bd46e0b5.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 04:11:27', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(80, 'Prospectus-latest.pdf', 'f87b3a8045763badf5de39e3786439288.pdf', '11', 2023, 'application/pdf', 3174, 'pdf', '2023-11-28 04:22:12', NULL, NULL, NULL, 1, 'db3460ba28f66f17abe463a23959680a'),
(81, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'f3db20e65b90efd88b7b5e9c979541c1c.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-28 04:39:45', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(82, 'Prospectus-latest.pdf', 'fb9dd3737f9290c333c3518fe376606ff.pdf', '11', 2023, 'application/pdf', 3174, 'pdf', '2023-11-28 06:22:42', NULL, NULL, NULL, 1, 'db3460ba28f66f17abe463a23959680a'),
(83, '493-1258-3-PB.pdf', 'f9e2db60a80c9dca95702434aa25c7ab8.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 07:02:48', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(84, '493-1258-3-PB.pdf', 'f0a87ee401bddcaee257b09109e5f564e.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 07:19:33', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(85, '493-1258-3-PB.pdf', 'f857cf043f7db9406a8f2540097c33998.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 07:21:14', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(86, '493-1258-3-PB.pdf', 'f0f3e6b3d9461a537d191185842e0d7b4.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 07:31:26', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(87, '493-1258-3-PB.pdf', 'f1a17a7910191ac5f8a3366f6475cf756.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 07:39:41', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(88, 'Prospectus-latest.pdf', 'f61936be70401650ae3085a9d93e0f8d6.pdf', '11', 2023, 'application/pdf', 3174, 'pdf', '2023-11-28 07:56:33', NULL, NULL, NULL, 1, 'db3460ba28f66f17abe463a23959680a'),
(89, '493-1258-3-PB.pdf', 'f79190eeff0a5e7a80149934c39e7d605.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 13:09:47', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(90, '493-1258-3-PB.pdf', 'fffa689b46fbfb7fd5738e2cdd6af3f5b.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 13:17:51', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(91, '493-1258-3-PB.pdf', 'f8a63e94219eb8ffb7d0325557c9c75d9.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-28 15:30:47', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(92, '493-1258-3-PB.pdf', 'fbf20de0696882906ed4129e8bf65f886.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 05:53:38', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(93, '493-1258-3-PB.pdf', 'ffd1eeac1e381bf8ca916e38104d168a7.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 07:08:22', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(94, '493-1258-3-PB.pdf', 'feb3efb004658daf18065b4efb6913417.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 07:09:31', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(95, '493-1258-3-PB.pdf', 'f6ce1630c4000dced72ba48b60fcbcba0.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 07:11:19', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(96, '493-1258-3-PB.pdf', 'fa39500a2e0a14c4e5a1455650acc1a07.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 11:31:32', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(97, '493-1258-3-PB.pdf', 'fad8805019ee0ef515f7c53c2de37a58b.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 12:30:47', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(98, '493-1258-3-PB.pdf', 'f03f4e79b67db1048e0757a3d777566bd.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 12:33:29', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(99, '493-1258-3-PB.pdf', 'fb809b45a890c6293a2d6921390a07228.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 12:41:43', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(100, '493-1258-3-PB.pdf', 'fb0dc65efd788db17e26d3289f1a550b8.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 13:05:26', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(101, '493-1258-3-PB.pdf', 'fdef3fbd87b66513f11be7c450fbd081c.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 13:08:17', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(102, '493-1258-3-PB.pdf', 'f7331026fc1a72984105fcf8c5892835f.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-29 14:34:40', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(103, 'Prospectus-latest.pdf', 'f555386d47322a60091cf8b779db28d6c.pdf', '11', 2023, 'application/pdf', 3174, 'pdf', '2023-11-30 02:17:10', NULL, NULL, NULL, 1, 'db3460ba28f66f17abe463a23959680a'),
(104, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'f13d1f63f495f014ef047c216ae3f4d7d.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-30 02:38:39', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(105, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'f673e1a7d95dc23591a5484493abc7880.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-30 02:41:20', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(106, '493-1258-3-PB.pdf', 'f6e9986b748e7d8050eeb1f45448808e3.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-30 02:49:47', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(107, '493-1258-3-PB.pdf', 'f286f40d95c73118a415e217607a967c1.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-30 03:20:26', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(108, '493-1258-3-PB.pdf', 'f39029cf0f428503f1ed1b2df824a7824.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-30 03:21:39', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(109, 'Prospectus-latest.pdf', 'f8a8061747ba019bfb720e58fda1d2c87.pdf', '11', 2023, 'application/pdf', 3174, 'pdf', '2023-11-30 03:22:40', NULL, NULL, NULL, 1, 'db3460ba28f66f17abe463a23959680a'),
(110, 'REK Sidang Skripsi Rega Sandi Maulana.pdf', 'f539e7dbfa17484b9ee8a36f9f7765686.pdf', '11', 2023, 'application/pdf', 225, 'pdf', '2023-11-30 03:26:17', NULL, NULL, NULL, 1, '103ab24503b16a945aa2c665fcadc239'),
(111, '493-1258-3-PB.pdf', 'f411c1b21247d009ae36b3db9f70eb6d2.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-30 07:02:02', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685'),
(112, '493-1258-3-PB.pdf', 'f2ee1427c60358fc7c554ed09989f440b.pdf', '11', 2023, 'application/pdf', 898, 'pdf', '2023-11-30 07:03:19', NULL, NULL, NULL, 1, '39ec56ff858747a94ec11a3b88c45685');

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_gender`
--

CREATE TABLE `dm_m_gender` (
  `id` int(11) NOT NULL,
  `nm_gender` varchar(50) DEFAULT '0',
  `isactive` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_gender`
--

INSERT INTO `dm_m_gender` (`id`, `nm_gender`, `isactive`) VALUES
(1, 'Laki-laki', 1),
(2, 'Perempuan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_infoakademik`
--

CREATE TABLE `dm_m_infoakademik` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jdl_info` varchar(200) NOT NULL,
  `deskinfo` text DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `ketinfo` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_infoakademik`
--

INSERT INTO `dm_m_infoakademik` (`id`, `id_files`, `jdl_info`, `deskinfo`, `datecreate`, `ketinfo`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 75, 'ewqrstdfg7', 'arestrdyfghj7', '2023-11-09', 'asdgfhj7', 0, NULL, '2023-11-27 11:20:01', '2023-11-27 11:51:59', NULL),
(2, 76, 'Judul Informasi', 'Deskripsi Informasi', '2023-11-27', 'Keterangan Ifnoramsi', 1, NULL, '2023-11-27 11:53:37', NULL, NULL),
(3, 77, 'asdsgfhj', 'gjdsaklja', '2023-11-27', 'hjdalksa', 1, NULL, '2023-11-27 11:56:45', NULL, NULL),
(4, 0, 'Layanan Akademik', 'Deskripsi Layanan', '2023-11-28', 'Keterangan Layanan2', 1, NULL, '2023-11-28 03:59:57', '2023-11-28 15:30:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_jns_surat`
--

CREATE TABLE `dm_m_jns_surat` (
  `id` int(11) NOT NULL,
  `nm_jnssurat` varchar(50) DEFAULT '0',
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_jns_surat`
--

INSERT INTO `dm_m_jns_surat` (`id`, `nm_jnssurat`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 'Surat Keputusan', 1, 0, NULL, NULL, NULL),
(2, 'Surat Edaran', 1, 0, NULL, NULL, NULL),
(3, 'Surat Tugas', 1, 0, NULL, NULL, NULL),
(4, 'Undangan', 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_layanan`
--

CREATE TABLE `dm_m_layanan` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jdl_layanan` varchar(200) NOT NULL,
  `desklayanan` text DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `jnsfile` varchar(50) DEFAULT NULL,
  `ketlayanan` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_layanan`
--

INSERT INTO `dm_m_layanan` (`id`, `id_files`, `jdl_layanan`, `desklayanan`, `datecreate`, `jnsfile`, `ketlayanan`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 79, 'Layanan Akademik Testing', 'Deskripsi Layanan Testing', '2023-11-28', 'PDF', 'Keterangan Layanan Testing', 1, NULL, '2023-11-28 04:11:31', '2023-11-28 04:20:35', NULL),
(2, 80, 'Layanan Akademik2', 'Desk Akademik 2', '2023-11-28', 'WORD', 'Keterangan', 1, NULL, '2023-11-28 04:22:21', NULL, NULL),
(3, 108, 'Layanan Akademik Akademik', 'Desk Layanan', '2023-11-30', 'PDF', 'Keterangan Layanan', 1, NULL, '2023-11-30 03:21:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_mhs`
--

CREATE TABLE `dm_m_mhs` (
  `id` int(11) NOT NULL,
  `namamhs` varchar(200) NOT NULL,
  `nim` int(12) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_mhs`
--

INSERT INTO `dm_m_mhs` (`id`, `namamhs`, `nim`, `gender`, `tempatlahir`, `tgllahir`, `alamat`, `nohp`, `email`, `prodi`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 'Anton Baihaqi', 21100001, 1, 'Jakarta', '2023-11-21', 'Jl. Kubis II Ujung Gandaria Utara - Kebayoran Baru', '085283389697', 'admin@gmail.com', '1', 0, NULL, '2023-11-30 10:33:54', '2025-02-27 06:54:44', NULL),
(2, 'Dicky Meidianto', 21100010, 1, 'Jakarta', '2023-12-07', 'Jl. Raya Klp. Dua Wetan No.17, RT.7/RW.4, Klp. Dua Wetan', '081311976015', 'fasilkomsaintk@gmail.com', '1', 1, NULL, '2023-12-16 07:38:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_monitoringsidang`
--

CREATE TABLE `dm_m_monitoringsidang` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `nim` int(10) NOT NULL DEFAULT 0,
  `namamhs` varchar(50) DEFAULT NULL,
  `prodi` int(11) NOT NULL DEFAULT 0,
  `jdl_skripsi` text NOT NULL DEFAULT '',
  `dospem` varchar(50) DEFAULT NULL,
  `stupen` varchar(50) DEFAULT NULL,
  `sempro` varchar(50) DEFAULT NULL,
  `sidang` varchar(50) DEFAULT NULL,
  `revisi` varchar(50) DEFAULT NULL,
  `nilaiskripsi` varchar(50) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_monitoringsidang`
--

INSERT INTO `dm_m_monitoringsidang` (`id`, `id_files`, `nim`, `namamhs`, `prodi`, `jdl_skripsi`, `dospem`, `stupen`, `sempro`, `sidang`, `revisi`, `nilaiskripsi`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 95, 21100001, 'Muflihah', 1, 'Sistem Pendukung Keputusan Kelayakan Judul Skripsi dengan Metode Analytical Hierarchy Proses (AHP) : (Studi Kasus Fakultas Teknik Universitas Gajah Putih)', 'Tarisno Amijoyo', 'Sudah', 'Sudah', 'Sudah', 'Belum', '-', 1, NULL, '2023-11-29 07:11:22', NULL, NULL),
(2, 0, 21100002, 'Anton Baihaqi', 2, 'Sistem Pendukung Keputusan (SPK) Untuk Memilih Mobil Bekas Terbaik Pada Situs Mobil Bekas Dengan Menggunakan Metode Fuzzy Multi Criteria Decision Making (MCDM)', 'Bambang Supandi', 'Sudah', 'Sudah', 'Sudah', 'Belum', '-', 1, NULL, '2023-11-29 07:25:45', '2023-11-29 10:48:52', NULL),
(3, 0, 21100004, 'Saptono', 1, 'Judul', 'Tarisno Amijoyo', 'Sudah', 'Sudah', 'Sudah', 'Belum', '89.30', 1, NULL, '2023-11-29 10:49:34', '2023-11-29 13:23:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_pasien`
--

CREATE TABLE `dm_m_pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_m_jns_pasien` int(11) NOT NULL DEFAULT 0,
  `no_mr` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ibukandung` varchar(50) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_prodi`
--

CREATE TABLE `dm_m_prodi` (
  `id` int(11) NOT NULL,
  `kd_prodi` varchar(50) DEFAULT '0',
  `nm_prodi` varchar(50) DEFAULT '0',
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_prodi`
--

INSERT INTO `dm_m_prodi` (`id`, `kd_prodi`, `nm_prodi`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, '01', 'Sistem Informasi', 1, 0, NULL, NULL, NULL),
(2, '02', 'Sains Data', 1, 0, NULL, NULL, NULL),
(3, '03', 'Teknik Informatika', 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_prosedur`
--

CREATE TABLE `dm_m_prosedur` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jdl_prosedur` varchar(200) NOT NULL,
  `deskprosedur` text DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `jnsfile` varchar(50) DEFAULT NULL,
  `ketprosedur` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_prosedur`
--

INSERT INTO `dm_m_prosedur` (`id`, `id_files`, `jdl_prosedur`, `deskprosedur`, `datecreate`, `jnsfile`, `ketprosedur`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 81, 'Judul Pedoman2', 'Desk Pedoman2', '2023-11-28', 'WORD', 'Ket Pedoman2', 1, NULL, '2023-11-28 04:39:48', '2023-11-28 04:40:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_regcamaba`
--

CREATE TABLE `dm_m_regcamaba` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jdl_info` varchar(200) NOT NULL,
  `deskinfo` text DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `ketinfo` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_m_surat`
--

CREATE TABLE `dm_m_surat` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jns_surat` int(11) NOT NULL DEFAULT 0,
  `no_surat` varchar(50) DEFAULT NULL,
  `perihal` text DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `desksurat` varchar(50) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_m_surat`
--

INSERT INTO `dm_m_surat` (`id`, `id_files`, `jns_surat`, `no_surat`, `perihal`, `tglsurat`, `desksurat`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 101, 2, '158/II.3.AU/REK/A/2023', 'Perihal', '2023-12-26', 'Deskripsi Surat', 1, NULL, '2023-11-29 12:41:47', '2023-12-16 07:40:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_s_surtugskripsi`
--

CREATE TABLE `dm_s_surtugskripsi` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `nim` int(10) NOT NULL DEFAULT 0,
  `namamhs` varchar(80) DEFAULT NULL,
  `prodi` int(11) NOT NULL DEFAULT 0,
  `jdl_skripsi` text NOT NULL DEFAULT '',
  `dospem` varchar(80) DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_s_surtugskripsi`
--

INSERT INTO `dm_s_surtugskripsi` (`id`, `id_files`, `nim`, `namamhs`, `prodi`, `jdl_skripsi`, `dospem`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 102, 21100011, 'Fitri', 1, 'Judul asal', 'Tarisno Amijoyo', 0, 0, NULL, '2023-11-30 07:11:37', NULL),
(2, 112, 21100004, 'Anton Baihaqi', 2, 'jududlalahah', 'Tarisno Amijoyo', 1, NULL, '2023-11-30 07:03:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_s_template`
--

CREATE TABLE `dm_s_template` (
  `id` int(11) NOT NULL,
  `id_files` bigint(20) NOT NULL DEFAULT 0,
  `jdl_template` varchar(200) NOT NULL,
  `desktemplate` text DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `jnsfile` varchar(50) DEFAULT NULL,
  `kettemplate` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `createdby` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dm_s_template`
--

INSERT INTO `dm_s_template` (`id`, `id_files`, `jdl_template`, `desktemplate`, `datecreate`, `jnsfile`, `kettemplate`, `isactive`, `createdby`, `createddate`, `updateddate`, `updatedby`) VALUES
(1, 82, 'Judul Template2', 'Desk Template2', '2023-11-27', 'WORD', 'Ket Template2', 1, NULL, '2023-11-28 06:22:54', '2023-11-28 06:23:18', NULL),
(2, 96, 'Form Lembar Pengesahan', 'Form Lembar Pengesahan skripsi', '2023-11-30', 'WORD', '', 1, NULL, '2023-11-29 11:31:36', '2023-11-29 14:49:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ktam`
--

CREATE TABLE `ktam` (
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `gelar_depan` varchar(12) DEFAULT NULL,
  `gelar_belakang` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` varchar(12) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `status_perkawinan` enum('Menikah','Belum Menikah','Janda','Duda') NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(32) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kelurahan` varchar(32) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `daerah` varchar(32) NOT NULL,
  `cabang` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `profesi` varchar(50) DEFAULT NULL,
  `profesi_lainnya` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `tempat_kerja` varchar(64) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
  `riwayat_sd` varchar(50) DEFAULT NULL,
  `riwayat_smp` varchar(50) DEFAULT NULL,
  `riwayat_sma` varchar(50) DEFAULT NULL,
  `riwayat_diploma` varchar(50) DEFAULT NULL,
  `riwayat_s1` varchar(50) DEFAULT NULL,
  `riwayat_s2` varchar(50) DEFAULT NULL,
  `riwayat_s3` varchar(50) DEFAULT NULL,
  `pernah_belajar_ponpes` enum('Pernah','Tidak Pernah','','') DEFAULT NULL,
  `bahasa_indonesia` enum('Pasif','Aktif') DEFAULT NULL,
  `bahasa_arab` enum('Pasif','Aktif') DEFAULT NULL,
  `bahasa_inggris` enum('Pasif','Aktif') DEFAULT NULL,
  `bahasa_lainnya` enum('Pasif','Aktif') DEFAULT NULL,
  `organisasi_lain` text DEFAULT NULL,
  `pas_foto` text DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `surat_rekomendasi` text DEFAULT NULL,
  `status_bayar` varchar(32) DEFAULT NULL,
  `status_approve` varchar(32) DEFAULT NULL,
  `approve_by` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ktam`
--

INSERT INTO `ktam` (`nik`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_perkawinan`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kode_pos`, `daerah`, `cabang`, `email`, `nomor_hp`, `profesi`, `profesi_lainnya`, `pekerjaan`, `tempat_kerja`, `pendidikan_terakhir`, `riwayat_sd`, `riwayat_smp`, `riwayat_sma`, `riwayat_diploma`, `riwayat_s1`, `riwayat_s2`, `riwayat_s3`, `pernah_belajar_ponpes`, `bahasa_indonesia`, `bahasa_arab`, `bahasa_inggris`, `bahasa_lainnya`, `organisasi_lain`, `pas_foto`, `bukti_bayar`, `surat_rekomendasi`, `status_bayar`, `status_approve`, `approve_by`, `created_at`, `updated_at`, `doc_updated_at`) VALUES
('100023010', 'Rio Naditra', 'dd', 'ee', 'bogor', '15-04-1999', 'Laki-laki', 'Belum Menikah', 'jl jalan', 'RIAU', 'KABUPATEN INDRAGIRI HULU', 'BATANG PERANAP', 'SELUNAK', '14442', 'Kota Jakarta Selatan', 'Cabang A2', 'naditrario@gmail.com', '089513119929', 'Wiraswasta', 'pl', 'Negeri/TNI/POLRI', 'itk', 'SMA', 'sd', 'smp', 'sma', 'd1', 's1', 's2', 's3', 'Pernah', 'Aktif', 'Pasif', 'Pasif', 'Pasif', 'org lain', 'uploads/foto/1745962819_2b9dc8874cec2aefcf15.png', 'uploads/trx/1745962819_6dd2a3116ae700d70f55.png', 'uploads/document/1745962819_753cd8bc3b1828e6f640.pdf', NULL, NULL, NULL, '2025-04-29 21:38:35', NULL, '2025-04-29 14:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-02-09-120058', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1739102697, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `org_id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pusat` tinyint(1) NOT NULL,
  `wilayah` tinyint(1) NOT NULL,
  `daerah` tinyint(1) NOT NULL,
  `cabang` tinyint(1) NOT NULL,
  `ranting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`org_id`, `nama`, `pusat`, `wilayah`, `daerah`, `cabang`, `ranting`) VALUES
(1, 'Muhammadiyah', 1, 1, 1, 1, 1),
(2, 'Aisyiyah', 1, 1, 1, 1, 1),
(3, 'Hizzbul Wathan', 1, 1, 1, 1, 1),
(4, 'Pemuda Muhammadiyah', 1, 1, 1, 1, 1),
(5, 'Nasyiatul \'Aisyiyah', 1, 1, 1, 1, 1),
(6, 'Ikatan Mahasiswa Muhammadiyah', 1, 1, 1, 1, 1),
(7, 'Tapak Suci Putra Muhammadiyah', 1, 1, 1, 1, 1),
(8, 'Ikatan Pelajar Muhammadiyah', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_anggota`
--

CREATE TABLE `organisasi_anggota` (
  `id` int(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `org_id` varchar(16) NOT NULL,
  `pusat` tinyint(1) NOT NULL DEFAULT 0,
  `wilayah` tinyint(1) NOT NULL DEFAULT 0,
  `daerah` tinyint(1) NOT NULL DEFAULT 0,
  `cabang` tinyint(1) NOT NULL DEFAULT 0,
  `ranting` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi_anggota`
--

INSERT INTO `organisasi_anggota` (`id`, `nik`, `org_id`, `pusat`, `wilayah`, `daerah`, `cabang`, `ranting`) VALUES
(161, '100023010', '1', 1, 1, 1, 1, 1),
(162, '100023010', '2', 1, 1, 1, 1, 1),
(163, '100023010', '3', 1, 0, 1, 0, 1),
(164, '100023010', '4', 1, 0, 1, 0, 1),
(165, '100023010', '5', 1, 0, 1, 0, 1),
(166, '100023010', '6', 1, 1, 1, 1, 1),
(167, '100023010', '7', 1, 1, 1, 1, 1),
(168, '100023010', '8', 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', '$2y$10$.dKipnvGxMuM5ksX07WS9OJP.Kiu4GimcotIS8oSR/9uWPipUgvUu', 'admin', NULL, NULL),
(2, 'Regular User', 'user@example.com', '$2y$10$W01eeQwegJSw5tGlydvqS.Al2QdxY5wU6AJrpuWOSAAYrIG/gwz8y', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang_muhammadiyah`
--
ALTER TABLE `cabang_muhammadiyah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_mbkm_template`
--
ALTER TABLE `dm_mbkm_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_dosen`
--
ALTER TABLE `dm_m_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_files`
--
ALTER TABLE `dm_m_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_gender`
--
ALTER TABLE `dm_m_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_infoakademik`
--
ALTER TABLE `dm_m_infoakademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_jns_surat`
--
ALTER TABLE `dm_m_jns_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_layanan`
--
ALTER TABLE `dm_m_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_mhs`
--
ALTER TABLE `dm_m_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_monitoringsidang`
--
ALTER TABLE `dm_m_monitoringsidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_pasien`
--
ALTER TABLE `dm_m_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_prodi`
--
ALTER TABLE `dm_m_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_prosedur`
--
ALTER TABLE `dm_m_prosedur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_regcamaba`
--
ALTER TABLE `dm_m_regcamaba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_m_surat`
--
ALTER TABLE `dm_m_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_s_surtugskripsi`
--
ALTER TABLE `dm_s_surtugskripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_s_template`
--
ALTER TABLE `dm_s_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktam`
--
ALTER TABLE `ktam`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `organisasi_anggota`
--
ALTER TABLE `organisasi_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang_muhammadiyah`
--
ALTER TABLE `cabang_muhammadiyah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dm_mbkm_template`
--
ALTER TABLE `dm_mbkm_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_m_dosen`
--
ALTER TABLE `dm_m_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_m_files`
--
ALTER TABLE `dm_m_files`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `dm_m_gender`
--
ALTER TABLE `dm_m_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_m_infoakademik`
--
ALTER TABLE `dm_m_infoakademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dm_m_jns_surat`
--
ALTER TABLE `dm_m_jns_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dm_m_layanan`
--
ALTER TABLE `dm_m_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dm_m_mhs`
--
ALTER TABLE `dm_m_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_m_monitoringsidang`
--
ALTER TABLE `dm_m_monitoringsidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dm_m_pasien`
--
ALTER TABLE `dm_m_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_m_prodi`
--
ALTER TABLE `dm_m_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dm_m_prosedur`
--
ALTER TABLE `dm_m_prosedur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_m_regcamaba`
--
ALTER TABLE `dm_m_regcamaba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_m_surat`
--
ALTER TABLE `dm_m_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_s_surtugskripsi`
--
ALTER TABLE `dm_s_surtugskripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_s_template`
--
ALTER TABLE `dm_s_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `org_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organisasi_anggota`
--
ALTER TABLE `organisasi_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
