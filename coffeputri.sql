-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2025 at 07:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeputri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'putri', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kode_menu` varchar(12) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `status` enum('tersedia','tidak tersedia') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kode_menu`, `nama`, `harga`, `gambar`, `kategori`, `status`) VALUES
(0, 'MN51', 'Capuccino Coffe', 27000, 'cappucino-coffe.jpg', 'Minuman', 'tersedia'),
(1, 'MN01', 'Matcha Latte', 27000, 'matcha-latte.jpg', 'Minuman', 'tersedia'),
(2, 'MN02', 'Dimsum mix isi 4', 15000, 'dimsum.jpg', 'Makanan', 'tersedia'),
(3, 'MN03', 'Dimsus Mentai isi 4', 20000, 'f9476bfb-b949-4b9d-a96e-579e34484a8d.jpg', 'Makanan', 'tersedia'),
(4, 'MN04', 'Burger', 28000, 'burger.jpg', 'Makanan', 'tersedia'),
(5, 'MN05', 'Burger with Potato', 35000, 'burger-potato.jpg', 'Makanan', 'tersedia'),
(6, 'MN06', 'Waffle Caramel', 15000, 'waffle.jpg', 'Dessert', 'tersedia'),
(7, 'MN07', 'Waffle Ice Cream', 20000, 'icewaffle.jpg', 'Dessert', 'tersedia'),
(8, 'MN08', 'Japanese Strawberry', 22000, 'strawberry.jpg', 'Minuman', 'tersedia'),
(9, 'MN09', 'Oreo Milkshake', 22000, 'oreo.jpg', 'Minuman', 'tersedia'),
(10, 'MN10', 'Matcha infused cold', 26000, 'matcha.jpg', 'Minuman', 'tersedia'),
(11, 'MN11', 'Ocean Blue', 25000, 'ocean.jpg', 'Minuman', 'tersedia'),
(12, 'MN12', 'Steak and Fries', 75000, 'steak.jpg', 'Makanan', 'tersedia'),
(13, 'MN13', 'Chicken Katsu', 10000, 'katsu.jpg', 'Food', 'tersedia'),
(14, 'MN14', 'Strawberry Cheesecake', 20000, 'cake.jpg', 'Dessert', 'tersedia'),
(15, 'MN15', 'French Fries', 28000, 'fries.jpg', 'Snack', 'tersedia'),
(16, 'MN16', 'Donut', 12000, 'donat.jpg', 'Dessert', 'tersedia'),
(17, 'MN17', 'Roll Sushi', 65000, 'sushi.jpg', 'Fast Food', 'tersedia'),
(18, 'MN18', 'Churros', 20000, 'churros.jpg', 'Snack', 'tersedia'),
(25, 'MN25', 'Onion Ring', 18000, 'ba52019c-6c10-47d9-9696-89910738892d.jpg', 'Snack', 'tersedia'),
(27, 'MN27', 'Oreo Cheese Cake', 25000, 'Oreo Cookies and Cream Cheesecake is the ultimate….jpg', 'Dessert', 'tersedia'),
(29, 'MN29', 'Cake Ubi Ungu', 20000, 'banususanto _  BOLU KUKUS TARO OMBRE Ole.jpg', 'Dessert', 'tersedia'),
(30, 'MN30', 'Black Forest', 45000, 'Black Forest Cake PDF Recipe _ Cake Recipe PDF….jpg', 'Dessert', 'tersedia'),
(31, 'MN31', ' Pudding Oreo Choco', 20000, '7c77c78e-0050-43f4-8886-0ead078a8daf.jpg', 'Dessert', 'tersedia'),
(32, 'MN32', 'Es Krim ', 15000, 'de4947a3-b07f-4d2d-a9cb-e8d97fb89488.jpg', 'Dessert', 'tersedia'),
(34, 'MN34', 'Pandan Roll Starwberry', 20000, '96a30110-f2d7-4d95-aab6-fce05fcadb60.jpg', 'Dessert', 'tersedia'),
(35, 'MN35', 'Caramel Frappuccino', 16000, '__Ingredients___   - 1 cup brewed coffee (chilled)….jpg', 'Minuman', 'tersedia'),
(36, 'MN36', 'Cake Caramel Sauce', 23000, '𝗖𝗿𝗲𝗺𝗲 𝗖𝗮𝗿𝗮𝗺𝗲𝗹 🍮.jpg', 'Dessert', 'tersedia'),
(37, 'MN37', 'Ice Caramel Macchiato', 16000, 'This Iced Caramel Macchiato is a dreamy blend of….jpg', 'Minuman', 'tersedia'),
(38, 'MN38', 'Capuccino Float', 25000, 'Cappuccino _ Elixir Coffee Specialist, Perth.jpg', 'Minuman', 'tersedia'),
(41, 'MN41', 'Jus Mangga', 10000, 'Mango Juice.jpg', 'Minuman', 'tersedia'),
(42, 'MN42', 'Jus Alpukat', 10000, 'Smoothies are an easy and delicious way to sneak….jpg', 'Minuman', 'tersedia'),
(44, 'MN44', 'Es Jeruk', 10000, '5543ef17-b0a1-447a-ab4a-09fe012d999f.jpg', 'Minuman', 'tersedia'),
(46, 'MN46', 'Bubur Kacang Ijo', 15000, 'Tips Merebus Kacang Hijau Agar Empuk Tapi Tidak Pecah.jpg', 'Fast Food', 'tersedia'),
(47, 'MN47', 'Rainbow Juice', 20000, 'dc2b7a3d-1b88-4a12-a1b0-99eb0f3daa2a.jpg', 'Minuman', 'tersedia'),
(48, 'MN48', 'Strawberry Ice Tea', 16000, 'Refreshing Strawberry Iced Tea - Perfect Summer….jpg', 'Minuman', 'tersedia'),
(49, 'MN49', 'Smoothie Mangga', 18000, 'a9f3e172-ad5b-4d4e-b710-a5fd3b4b0fba.jpg', 'Minuman', 'tersedia'),
(52, 'MN52', 'Es Teh Manis', 3000, 'bisa dingin dan panas_hanya utk instan__silahkan….jpg', 'Minuman', 'tersedia'),
(53, 'MN53', 'Siomay Bandung', 20000, '681226b54cc12.jpg', 'Fast Food', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `kode_pesanan` varchar(12) NOT NULL,
  `kode_menu` varchar(12) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_pesanan` varchar(12) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
