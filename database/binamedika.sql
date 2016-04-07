-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 02:23 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binamedika`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_pembelian`
--

CREATE TABLE `item_pembelian` (
  `id_pembelian` int(50) NOT NULL,
  `id_obat` int(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_pembelian`
--

INSERT INTO `item_pembelian` (`id_pembelian`, `id_obat`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 16, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 12, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 14, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 11, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 13, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 11, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 25, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 13, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 7, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 12, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 9, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 18, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 3, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 6, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 14, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 22, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 10, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 8, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 9, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 12, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(50) NOT NULL,
  `nama_obat` varchar(255) DEFAULT NULL,
  `harga_obat` int(50) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga_obat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'felis', 78157, 'nibh lacinia orci consectetuer euismod est arcu ac orci. Ut', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'tempus', 68419, 'felis. Donec tempor est ac mattis semper dui lectus rutrum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Vivamus', 33227, 'ac turpis egestas. Fusce aliquet magna a neque. Nullam ut', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'purus', 81632, 'gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ut', 77614, 'non vestibulum nec euismod in dolor. Fusce feugiat. Lorem ipsum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'et', 15431, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Nunc', 42933, 'lobortis risus. In mi pede nonummy ut molestie in tempus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'magna', 99175, 'Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Suspendisse', 96552, 'ligula. Donec luctus aliquet odio. Etiam ligula tortor dictum eu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'molestie', 98890, 'est. Nunc laoreet lectus quis massa. Mauris vestibulum neque sed', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'metus.', 78734, 'euismod in dolor. Fusce feugiat. Lorem ipsum dolor sit amet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'enim.', 61578, 'orci adipiscing non luctus sit amet faucibus ut nulla. Cras', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'orci', 81793, 'sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'id', 58909, 'quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'fringilla.', 20099, 'consectetuer euismod est arcu ac orci. Ut semper pretium neque.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'tellus', 31638, 'Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'sociosqu', 58880, 'sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'erat', 93002, 'eu nulla at sem molestie sodales. Mauris blandit enim consequat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'magnis', 65869, 'Morbi accumsan laoreet ipsum. Curabitur consequat lectus sit amet luctus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'sem', 82867, 'varius orci in consequat enim diam vel arcu. Curabitur ut', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'orci.', 70539, 'vel est tempor bibendum. Donec felis orci adipiscing non luctus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Nunc', 49959, 'arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'orci', 87737, 'odio. Etiam ligula tortor dictum eu placerat eget venenatis a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'ut', 15874, 'amet ante. Vivamus non lorem vitae odio sagittis semper. Nam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'mauris', 62493, 'montes nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'gravida', 42624, 'ac tellus. Suspendisse sed dolor. Fusce mi lorem vehicula et', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'risus.', 19341, 'aliquet odio. Etiam ligula tortor dictum eu placerat eget venenatis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'posuere', 86389, 'eget ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'amet', 17069, 'sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'ridiculus', 64923, 'elit dictum eu eleifend nec malesuada ut sem. Nulla interdum.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(50) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `golongan_darah`, `alamat`, `no_telp`) VALUES
(1, 'Olga Knapp', 'P', 'A', '5279 Dis St.', '089-752-4349'),
(2, 'Xantha Moreno', '', '', 'Ap #321-6690 Ligula. Road', '063-178-5750'),
(3, 'Adena Ashley', '', '', 'P.O. Box 806 5810 Ornare Rd.', '039-382-3271'),
(4, 'Mona Sellers', '', '', '7953 Nam Rd.', '045-436-4192'),
(5, 'Kylynn Soto', '', '', 'Ap #109-4649 Integer Ave', '036-936-6764'),
(6, 'Summer Baldwin', '', '', '535-4366 Amet Rd.', '055-192-6368'),
(7, 'Savannah Mejia', '', '', 'P.O. Box 335 3846 Odio Ave', '089-850-1847'),
(8, 'Kyle Barr', '', '', '844-8236 Imperdiet Rd.', '024-934-9125'),
(9, 'Rachel Vargas', '', '', 'P.O. Box 541 399 Donec Rd.', '053-293-9135'),
(10, 'Ryder Benton', '', '', 'Ap #350-4537 Eu Ave', '059-572-9139'),
(11, 'Tamekah Elliott', '', '', '503-6896 Nunc St.', '060-030-5159'),
(12, 'Lara Kim', '', '', 'P.O. Box 117 685 Iaculis Av.', '014-371-7318'),
(13, 'Kendall Day', '', '', 'Ap #823-9252 Nec Av.', '093-788-3318'),
(14, 'Tatum Flowers', '', '', 'P.O. Box 989 2241 Ultrices Avenue', '022-155-8048'),
(15, 'Ifeoma Winters', '', '', 'P.O. Box 959 1378 Non Street', '096-955-2829'),
(16, 'Sebastian Trevino', '', '', '2211 Ante Road', '041-420-8626'),
(17, 'Abel Dawson', '', '', '3059 Donec Road', '077-742-5857'),
(18, 'Olga Knapp', '', '', '5279 Dis St.', '089-752-4349'),
(19, 'Olga Knapp', '', '', '5279 Dis St.', '089-752-4349'),
(20, 'Olga Knapp', '', '', '5279 Dis St.', '089-752-4349'),
(21, 'Olga Knapp', '', '', '5279 Dis St.', '089-752-4349'),
(22, 'Alex', '', '', 'ASDASD', '0123932'),
(23, 'Alex', '', '', 'ASDASD', '0123932'),
(24, 'ASdas', '', '', 'asdasd', '123123'),
(25, 'ASdas', '', '', 'asdasd', '123123'),
(26, 'ASdas', '', '', 'asdasd', '123123'),
(27, 'asdasd', 'L', 'O', 'asdas', '123123'),
(28, 'asdasd', 'L', 'O', 'asdas', '123123'),
(29, 'asdasd', 'L', 'O', 'asdas', '123123'),
(30, 'asdasd', 'L', 'O', 'asdas', '123123'),
(31, 'asdasd', 'L', 'O', 'asdas', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_obat`
--

CREATE TABLE `pembelian_obat` (
  `id_pembelian` int(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kasir` varchar(255) DEFAULT NULL,
  `id_pasien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_obat`
--

INSERT INTO `pembelian_obat` (`id_pembelian`, `tanggal`, `kasir`, `id_pasien`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', 'Rhiannon Lee', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0000-00-00 00:00:00', 'Arden Preston', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00', 'Lacota Mckinney', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0000-00-00 00:00:00', 'Hedwig Snow', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '0000-00-00 00:00:00', 'Alice Donaldson', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '0000-00-00 00:00:00', 'Ralph Hartman', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '0000-00-00 00:00:00', 'Rashad Poole', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '0000-00-00 00:00:00', 'Janna Pugh', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '0000-00-00 00:00:00', 'Aladdin Hammond', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '0000-00-00 00:00:00', 'Roth Torres', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '0000-00-00 00:00:00', 'Wallace Hunter', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '0000-00-00 00:00:00', 'Montana Bernard', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '0000-00-00 00:00:00', 'Rhoda Burks', 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '0000-00-00 00:00:00', 'Kitra Stephens', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '0000-00-00 00:00:00', 'Hermione Welch', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengobatan`
--

CREATE TABLE `pengobatan` (
  `id_pasien` int(50) NOT NULL,
  `id_rekam` int(50) NOT NULL,
  `dokter` varchar(255) NOT NULL,
  `keluhan` text NOT NULL,
  `namaPengobatan` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `honor` int(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengobatan`
--

INSERT INTO `pengobatan` (`id_pasien`, `id_rekam`, `dokter`, `keluhan`, `namaPengobatan`, `tanggal`, `honor`, `created_at`, `updated_at`) VALUES
(1, 1, 'Summer Beasley', 'nisi sem semper erat in consectetuer ipsum nunc id enim.', 'Donec at arcu. Vestibulum ante ipsum primis in faucibus orci', '0000-00-00 00:00:00', 541722, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 2, 'Kitra Hicks', 'turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis', 'Donec porttitor tellus non magna. Nam ligula elit pretium et', '0000-00-00 00:00:00', 739574, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 3, 'Ferris Farmer', 'ante. Nunc mauris sapien cursus in hendrerit consectetuer cursus et', 'justo. Proin non massa non ante bibendum ullamcorper. Duis cursus', '0000-00-00 00:00:00', 358157, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Melissa Steele', 'primis in faucibus orci luctus et ultrices posuere cubilia Curae;', 'vel arcu. Curabitur ut odio vel est tempor bibendum. Donec', '0000-00-00 00:00:00', 699921, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'Miranda Hutchinson', 'augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum.', 'morbi tristique senectus et netus et malesuada fames ac turpis', '0000-00-00 00:00:00', 720405, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 'Kieran Kim', 'mi ac mattis velit justo nec ante. Maecenas mi felis', 'penatibus et magnis dis parturient montes nascetur ridiculus mus. Aenean', '0000-00-00 00:00:00', 705988, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Kitra Jackson', 'pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna.', 'dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit.', '0000-00-00 00:00:00', 413625, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'Summer Montgomery', 'in molestie tortor nibh sit amet orci. Ut sagittis lobortis', 'et eros. Proin ultrices. Duis volutpat nunc sit amet metus.', '0000-00-00 00:00:00', 946104, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Rhonda Best', 'sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor nonummy', 'nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam', '0000-00-00 00:00:00', 671260, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Mohammad Walker', 'tristique senectus et netus et malesuada fames ac turpis egestas.', 'libero et tristique pellentesque tellus sem mollis dui in sodales', '0000-00-00 00:00:00', 828522, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'Phelan Fowler', 'Sed molestie. Sed id risus quis diam luctus lobortis. Class', 'rutrum. Fusce dolor quam elementum at egestas a scelerisque sed', '0000-00-00 00:00:00', 382618, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 'Quin Nicholson', 'dui lectus rutrum urna nec luctus felis purus ac tellus.', 'vulputate risus a ultricies adipiscing enim mi tempor lorem eget', '0000-00-00 00:00:00', 196372, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Robert Melendez', 'elit fermentum risus at fringilla purus mauris a nunc. In', 'varius orci in consequat enim diam vel arcu. Curabitur ut', '0000-00-00 00:00:00', 163478, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'Margaret Frederick', 'magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.', 'vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros', '0000-00-00 00:00:00', 677430, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, 'Tanek Cohen', 'feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum', 'sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00 00:00:00', 403277, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'Reese Love', 'ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus.', 'sit amet ante. Vivamus non lorem vitae odio sagittis semper.', '0000-00-00 00:00:00', 518741, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 'Tamara Berger', 'Donec tincidunt. Donec vitae erat vel pede blandit congue. In', 'In ornare sagittis felis. Donec tempor est ac mattis semper', '0000-00-00 00:00:00', 637199, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'Belle Ewing', 'vitae velit egestas lacinia. Sed congue elit sed consequat auctor', 'Nunc ut erat. Sed nunc est mollis non cursus non', '0000-00-00 00:00:00', 797508, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 'Stephen Sharp', 'risus. In mi pede nonummy ut molestie in tempus eu', 'magna tellus faucibus leo in lobortis tellus justo sit amet', '0000-00-00 00:00:00', 100869, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'Isabelle Bradford', 'a enim. Suspendisse aliquet sem ut cursus luctus ipsum leo', 'nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et', '0000-00-00 00:00:00', 753596, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 'Perry Morse', 'enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula', 'faucibus lectus a sollicitudin orci sem eget massa. Suspendisse eleifend.', '0000-00-00 00:00:00', 283252, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'Orson Vincent', 'a neque. Nullam ut nisi a odio semper cursus. Integer', 'tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse', '0000-00-00 00:00:00', 815605, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 'Lucy Everett', 'dapibus gravida. Aliquam tincidunt nunc ac mattis ornare lectus ante', 'gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit', '0000-00-00 00:00:00', 871516, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'Maris Zamora', 'sapien cursus in hendrerit consectetuer cursus et magna. Praesent interdum', 'amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00 00:00:00', 937275, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'Eagan Henry', 'luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis.', 'nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra.', '0000-00-00 00:00:00', 473105, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'Ezra Golden', 'malesuada augue ut lacus. Nulla tincidunt neque vitae semper egestas', 'arcu et pede. Nunc sed orci lobortis augue scelerisque mollis.', '0000-00-00 00:00:00', 745645, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'Brennan Knox', 'montes nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc', 'iaculis enim sit amet ornare lectus justo eu arcu. Morbi', '0000-00-00 00:00:00', 860080, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'Addison Freeman', 'et euismod et commodo at libero. Morbi accumsan laoreet ipsum.', 'blandit. Nam nulla magna malesuada vel convallis in cursus et', '0000-00-00 00:00:00', 873754, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'Jane Paul', 'dui. Fusce diam nunc ullamcorper eu euismod ac fermentum vel', 'vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt', '0000-00-00 00:00:00', 777006, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'Brielle Ashley', 'ad litora torquent per conubia nostra per inceptos hymenaeos. Mauris', 'vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt', '0000-00-00 00:00:00', 467746, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 'Owen Snow', 'ac nulla. In tincidunt congue turpis. In condimentum. Donec at', 'pretium neque. Morbi quis urna. Nunc quis arcu vel quam', '0000-00-00 00:00:00', 976959, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 'Elijah Lee', 'enim gravida sit amet dapibus id blandit at nisi. Cum', 'mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In', '0000-00-00 00:00:00', 419722, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'Cleo Riggs', 'accumsan laoreet ipsum. Curabitur consequat lectus sit amet luctus vulputate', 'hendrerit consectetuer cursus et magna. Praesent interdum ligula eu enim.', '0000-00-00 00:00:00', 129735, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 'Melinda Fisher', 'tellus eu augue porttitor interdum. Sed auctor odio a purus.', 'cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam', '0000-00-00 00:00:00', 709177, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `type` enum('ADMIN','KEUANGAN','OPERATOR') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_pembelian`
--
ALTER TABLE `item_pembelian`
  ADD PRIMARY KEY (`id_pembelian`,`id_obat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `FOREIGN` (`id_pasien`);

--
-- Indexes for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD PRIMARY KEY (`id_pasien`,`id_rekam`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  MODIFY `id_pembelian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_pembelian`
--
ALTER TABLE `item_pembelian`
  ADD CONSTRAINT `item_pembelian_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian_obat` (`id_pembelian`),
  ADD CONSTRAINT `item_pembelian_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);

--
-- Constraints for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  ADD CONSTRAINT `pembelian_obat_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD CONSTRAINT `pengobatan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
