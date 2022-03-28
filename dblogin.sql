-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 07:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `alamat`) VALUES
(1, '197706302003121001', 'ILHAM, SH.,MH', 'Sanana'),
(2, '197609142001121002', 'PITRIADI, SH.,MH', 'Sanana'),
(3, '198612022011011008', 'RIDHO AKBAR, SH.,MH', 'Sanana'),
(4, '197808172001121003', 'AGUS MAKSUM MULYOHADI, S.H.,M.H.', 'Sanana'),
(5, '197901272003121001', 'DJOKO WIRYONO BUDHI SARWOKO, S.H.', 'Sanana'),
(6, '197109291994031001', 'ISRA ABBAS, SH', 'Sanana'),
(7, '196106121985031004', 'AMIR BACHTIAR', 'Sanana'),
(8, '198609262006041002', 'AMAL SYAH, ST.,SH', 'Sanana'),
(9, '196003181985031004', 'ALEXANDER YOEL', 'Sanana'),
(10, '198202152009121004', 'FAIZAL ALI, S.H.', 'Sanana'),
(11, '196003121985032001', 'FARIDA ARDANAN', 'Sanana'),
(12, '197201211993031002', 'DEDY UMAAYA', 'Sanana'),
(13, '198609262006041002', 'AMAL SYAH, ST.,SH', 'Sanana'),
(14, '196211241990031006', 'MUHAMAD SAFI KILWOUW', 'Sanana'),
(15, '198409112009041004', 'IKSAN, A.MD.', 'Sanana'),
(16, '198506172006042001', 'SHINTA HAJI ALI, S.H., ', 'Sanana'),
(17, '198903172009041001', 'ISRAMAN AMANTO, S.H', 'Sanana'),
(18, '198305072009121003', 'SUPRIADI SUKRI', 'Sanana'),
(19, '199312012017121002', 'AUFARRIZA MUHAMMAD, SH', 'Sanana'),
(20, '198604082017121002', 'REYNOLD SUPRIADY E.M.P. NABABAN, SH', 'Sanana'),
(21, '199411052017121005', 'EDGAR PRATAMA HANIBAL, SH', 'Sanana'),
(22, '198804182017121004', 'IQBAL SALEH SYAHRONI, SH', 'Sanana'),
(23, '199301252017121004', 'RAKHMAT FANDIKA TIMUR, SH', 'Sanana'),
(24, '198803072017121001', 'MUHAMMAD FADLLULLAH, SH', 'Sanana'),
(25, '199402112017121003', 'FEBRIAN RAMADHAN, SH', 'Sanana'),
(26, '199404092017121004', 'HENDRA ABEDNEGO HALOMOAN PURBA, SH', 'Sanana'),
(27, '199502202018021001', 'GALANG ADHE SUKMA, SH', 'Sanana'),
(28, '199302022019031005', 'ARI IRWANTO, SH', 'Sanana'),
(29, '199602032019031004', 'MARGA AREA REFANGGA, S.E.', 'Sanana'),
(30, '199008132019031008', 'ARIF BUDI SETIAWAN, A.Md.', 'Sanana'),
(31, '198007162009031002', 'SOESANTO GAILEA, S.Kom.', 'Sanana'),
(32, '198503032006041006', 'FIRMAN PRASASTI', 'Sanana'),
(33, '198309192014092001', 'NUR ARFA BUAMONA', 'Sanana'),
(34, '198508132014091001', 'RANO KAUNAR', 'Sanana'),
(35, '199308082020121006', 'MUHAMMAD IQBAL FIRDAUS, S.H.', 'Sanana'),
(36, '199607192020121004', 'AGUNG WAHYUDI SYAHPUTRA, A.Md.Kom.', 'Sanana'),
(37, '199608142020121003', 'ARKAN FADHIL, A.Md.', 'Sanana'),
(38, '1.99791E+16', 'Adri', 'Sanana'),
(39, '2.19982E+13', 'Aprilia', 'Sanana'),
(40, '1892739', 'Nia', 'Sanana'),
(41, '9.18274E+12', 'Zulfa Embisa', 'Sanana'),
(42, '98213737', 'Zulkifri Yoisangadji', 'Sanana'),
(43, '71298371', 'Rafiudin Duwila', 'Sanana'),
(44, '98127983', 'Rahman Duwila', 'Sanana'),
(45, '98172893', 'Amiyudin Fokaaya', 'Sanana'),
(46, '9817293', 'Uken Umalekhoa', 'Sanana'),
(47, '71289397213', 'Yuni Kurniawati', 'Sanana'),
(48, '9.19274E+11', 'Fatharuba Umaloya', 'Sanana'),
(49, '1.28938E+13', 'Fakhrana Sangadji', 'Sanana'),
(50, '218937912', 'Amirudin Umaternate', 'Sanana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;
