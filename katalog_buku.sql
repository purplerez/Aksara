-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for katalog_buku
CREATE DATABASE IF NOT EXISTS `katalog_buku` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `katalog_buku`;

-- Dumping structure for table katalog_buku.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` int NOT NULL,
  `kategori` int NOT NULL,
  `sinopsis` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table katalog_buku.buku: ~2 rows (approximately)
DELETE FROM `buku`;
INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun`, `kategori`, `sinopsis`) VALUES
	(1, 'tester', '1', '1', 0, 1, 'sinopsis tester buku'),
	(2, '\\\'s-Hertogenbosch', '1', '1', 2000, 1, '\\\'s-Hertogenbosch');

-- Dumping structure for table katalog_buku.buku_gambar
CREATE TABLE IF NOT EXISTS `buku_gambar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `pengarang` int NOT NULL,
  `penerbit` int NOT NULL,
  `tahun` int NOT NULL,
  `kategori` int NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table katalog_buku.buku_gambar: ~0 rows (approximately)
DELETE FROM `buku_gambar`;

-- Dumping structure for table katalog_buku.gambar
CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `buku_id` int NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table katalog_buku.gambar: ~0 rows (approximately)
DELETE FROM `gambar`;

-- Dumping structure for table katalog_buku.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table katalog_buku.kategori: ~2 rows (approximately)
DELETE FROM `kategori`;
INSERT INTO `kategori` (`id`, `nama`, `detail`) VALUES
	(1, 'Fiksi', 'detail fiksi'),
	(2, 'AutoBiografi', '');

-- Dumping structure for table katalog_buku.penerbit
CREATE TABLE IF NOT EXISTS `penerbit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table katalog_buku.penerbit: ~2 rows (approximately)
DELETE FROM `penerbit`;
INSERT INTO `penerbit` (`id`, `nama`, `alamat`) VALUES
	(1, 'Bentang', 'Detail Bentang'),
	(2, 'Gramedia', '');

-- Dumping structure for table katalog_buku.pengarang
CREATE TABLE IF NOT EXISTS `pengarang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table katalog_buku.pengarang: ~2 rows (approximately)
DELETE FROM `pengarang`;
INSERT INTO `pengarang` (`id`, `nama`, `bio`) VALUES
	(1, 'Andrea Hirata', 'Andrea Bio'),
	(2, 'Dewi Lestari', 'Dewi Lestari');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
