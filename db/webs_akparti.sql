-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Şub 2015, 13:24:48
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `webs_akparti`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_foto`
--

CREATE TABLE IF NOT EXISTS `tbl_foto` (
`foto_id` int(11) NOT NULL,
  `baslik` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_irtibat`
--

CREATE TABLE IF NOT EXISTS `tbl_irtibat` (
`contactID` int(11) NOT NULL,
  `adi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
`slider_id` int(11) NOT NULL,
  `baslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `spot` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kucuk_resim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_slideryorum`
--

CREATE TABLE IF NOT EXISTS `tbl_slideryorum` (
`sliderID` int(11) NOT NULL,
  `haberID` varchar(4) COLLATE utf8_turkish_ci NOT NULL,
  `adiSoyadi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `yorumText` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `onay` int(11) NOT NULL,
  `zaman` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_foto`
--
ALTER TABLE `tbl_foto`
 ADD PRIMARY KEY (`foto_id`);

--
-- Tablo için indeksler `tbl_irtibat`
--
ALTER TABLE `tbl_irtibat`
 ADD PRIMARY KEY (`contactID`);

--
-- Tablo için indeksler `tbl_slider`
--
ALTER TABLE `tbl_slider`
 ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `tbl_slideryorum`
--
ALTER TABLE `tbl_slideryorum`
 ADD PRIMARY KEY (`sliderID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_foto`
--
ALTER TABLE `tbl_foto`
MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_irtibat`
--
ALTER TABLE `tbl_irtibat`
MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_slider`
--
ALTER TABLE `tbl_slider`
MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_slideryorum`
--
ALTER TABLE `tbl_slideryorum`
MODIFY `sliderID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
