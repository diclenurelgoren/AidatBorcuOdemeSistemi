-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2021, 21:39:12
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aidat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `sno` int(11) NOT NULL,
  `kulad` varchar(3) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ksifre` int(5) NOT NULL,
  `adsoyad` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `blok` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `daire` int(2) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`sno`, `kulad`, `ksifre`, `adsoyad`, `blok`, `daire`, `tel`) VALUES
(11, 'c1', 1, 'Dicle Nur ElgÃ¶ren', 'C', 1, 333333),
(12, 'a1', 1, 'Dicle Nur ElgÃ¶ren', 'A', 1, 333333),
(13, 'b1', 123, 'ayÅŸe', 'B', 1, 202202022),
(17, 'c2', 123, 'Dicle Nur ElgÃ¶ren', 'C', 2, 333333),
(18, 'b2', 123, 'Dicle Nur ElgÃ¶ren', 'B', 2, 202202022);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

CREATE TABLE `odeme` (
  `sno` int(11) NOT NULL,
  `kulad` varchar(3) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ksifre` int(10) NOT NULL,
  `tutar` int(7) NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kartno` int(16) NOT NULL,
  `ay` int(2) NOT NULL,
  `yil` int(5) NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `odeme`
--

INSERT INTO `odeme` (`sno`, `kulad`, `ksifre`, `tutar`, `adsoyad`, `kartno`, `ay`, `yil`, `cvv`) VALUES
(1, 'c2', 123, 500, 'Dicle Nur ElgÃ¶ren', 33, 1, 2021, 222),
(2, 'c1', 123, 222, 'Dicle Nur ElgÃ¶ren', 5666, 1, 2021, 33),
(3, 'c2', 123, 500, 'Dicle Nur ElgÃ¶ren', 33333, 1, 2021, 222),
(4, 'b1', 123, 500, 'Dicle Nur ElgÃ¶ren', 33333, 1, 2021, 222);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sikayet`
--

CREATE TABLE `sikayet` (
  `idno` int(16) NOT NULL,
  `konu` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sikayet`
--

INSERT INTO `sikayet` (`idno`, `konu`, `mesaj`) VALUES
(2222223, 'temizlik', 'asdad'),
(2222224, 'temizlik', 'asdad'),
(2222225, 'temizlik', 'asdad');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`sno`);

--
-- Tablo için indeksler `odeme`
--
ALTER TABLE `odeme`
  ADD PRIMARY KEY (`sno`);

--
-- Tablo için indeksler `sikayet`
--
ALTER TABLE `sikayet`
  ADD PRIMARY KEY (`idno`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `odeme`
--
ALTER TABLE `odeme`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `sikayet`
--
ALTER TABLE `sikayet`
  MODIFY `idno` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2222226;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
