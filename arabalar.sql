-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Ara 2022, 16:56:17
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `araba`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arabalar`
--

CREATE TABLE `arabalar` (
  `id` int(4) NOT NULL,
  `marka` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `model` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yil` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `km` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fiyat` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yakit` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `vites` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `cekis` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim_urls` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `arabalar`
--

INSERT INTO `arabalar` (`id`, `marka`, `model`, `title`, `yil`, `km`, `fiyat`, `yakit`, `vites`, `cekis`, `resim_urls`) VALUES
(5, 'Fiat', 'fiat fiorino', 'Fiat Fiorino Combi 1.3 MULTIJET PREMIO', '2018', '82.377', '310.000', 'Dizel', 'Manuel', '4x2', 'fiat fiorino.jpeg,fiat fiorino1.jpeg,fiat fiorino2.jpeg'),
(6, 'Renault ', 'Renault Symbol', 'Renault Symbol 1.2 JOY', '2013', '140.629', '247.000', 'Benzin', 'Manuel', '4x2', 'Renault Symbol.jpeg,Renault Symbol1.jpeg,Renault Symbol2.jpeg'),
(7, 'Hyundai', 'Hyundai i20', 'Hyundai i20 1.4 CRDi SENSE', '2013', '142.039', '293.000', 'Dizel', 'Manuel', '4x2', 'Hyundai i20.jpeg,Hyundai i201.jpeg,Hyundai i202.jpeg'),
(8, 'Opel', 'Opel Astra', 'Opel Astra 1.4 ESSENTIA', '2011', '106.810', '293.000', 'Benzin', 'Manuel', '4x2', 'Opel Astra.jpeg,Opel Astra1.jpeg,Opel Astra2.jpeg'),
(9, 'Wolkswagen', 'vw polo', 'Volkswagen Polo 1.6 TDI COMFORTLINE', '2011', '152.000', '314.000', 'Dizel', 'Manuel', '4x2', 'vw polo.jpeg,vw polo1.jpeg,vw polo2.jpeg'),
(10, 'dacia', 'dacia sandero', 'Dacia Sandero 1.0 SCE COMFORT', '2021', '5.278', '328.000', 'Benzin', 'Manuel', '4x2', 'dacia sandero.jpeg,dacia sandero1.jpeg,dacia sandero2.jpeg'),
(11, 'Renault', 'Renault Clio', 'Renault Clio 1.5 DCI SS ICON', '2012', '143.000', '332.000', 'Dizel', 'Manuel', '4x2', 'Renault Clio.jpeg,Renault Clio1.jpeg,Renault Clio2.jpeg'),
(12, 'Nissan', 'Nissan Micra', 'Nissan Micra 1.2 CVT PLATINUM', '2012', '113.000', '332.000', 'Benzin', 'Otomatik', '4x2', 'Nissan Micra.jpeg,Nissan Micra1.jpeg,Nissan Micra2.jpeg'),
(13, 'Renault', 'renault fluence', 'Renault Fluence 1.5 DCI TOUCH', '2015', '112.000', '335.000', 'Dizel', 'Manuel', '4x2', 'renault fluence.jpeg,renault fluence1.jpeg,renault fluence2.jpeg'),
(14, 'Toyota', 'Toyota Auris', 'Toyota Auris 1.33 LIFE', '2013', '130.741', '339.000', 'Benzin', 'Manuel', '4x2', 'Toyota Auris.jpeg,Toyota Auris1.jpeg,Toyota Auris2.jpeg'),
(15, 'Seat', 'Seat Ibiza', 'Seat Ibiza 1.4 REFERENCE', '2015', '52.885', '342.000', 'Benzin', 'Manuel', '4x2', 'Seat Ibiza.jpeg,Seat Ibiza1.jpeg,Seat Ibiza2.jpeg'),
(16, 'dacia', 'Dacia Duster', 'Dacia Duster 1.5 DCI AMBIANCE', '2017', '112.701', '346.000', 'Dizel', 'Manuel', '4x2', 'Dacia Duster.jpeg,Dacia Duster1.jpeg,Dacia Duster2.jpeg'),
(17, 'Fiat', 'Fiat Egea', 'Fiat Egea 1.3 MULTIJET EASY', '2018', '68.323', '356.000', 'Dizel', 'Manuel', '4x2', 'Fiat Egea.jpeg,Fiat Egea1.jpeg,Fiat Egea2.jpeg'),
(18, 'Ford', 'Ford B Max', 'Ford B Max 1.6i POWERSHIFT TITANIUM', '2013', '109.067', '366.000', 'Benzin', 'Otomatik', '4x2', 'Ford B Max.jpeg,Ford B Max1.jpeg,Ford B Max2.jpeg'),
(19, 'Seat', 'Seat Toledo', 'Seat Toledo 1.2 TSI STYLE', '2016', '113.892', '371.000', 'Benzin', 'Otomatik', '4x2', 'Seat Toledo.jpeg,Seat Toledo1.jpeg,Seat Toledo2.jpeg'),
(20, 'Ford', 'Ford Fiesta', 'Ford Fiesta 1.6i POWERSHIFT TITANIUM', '2013', '61.619', '369.000', 'Benzin', 'Otomatik', '4x2', 'Ford Fiesta.jpeg,Ford Fiesta1.jpeg,Ford Fiesta2.jpeg'),
(21, 'Wolkswagen', 'Volkswagen Jetta', 'Volkswagen Jetta 1.4 TSI TRENDLINE', '2012', '118.360', '386.000', 'Benzin', 'Manuel', '4x2', 'Volkswagen Jetta.jpeg,Volkswagen Jetta1.jpeg,Volkswagen Jetta2.jpeg'),
(22, 'Nissan', 'Nissan Qashqai', 'Nissan Qashqai 1.6 TEKNA', '2010', '94.188', '387.000', 'Benzin', 'Manuel', '4x2', 'Nissan Qashqai.jpeg,Nissan Qashqai1.jpeg,Nissan Qashqai2.jpeg'),
(23, 'Seat', 'Seat Leon', 'Seat Leon 1.6 TDI CR STYLE', '2013', '166.157', '412.000', 'Benzin', 'Manuel', '4x2', 'Seat Leon.jpeg,Seat Leon1.jpeg,Seat Leon2.jpeg'),
(24, 'Renault', 'Renault Mégane', 'Renault Mégane 1.5 DCI EDC TOUCH', '2016', '134.786', '419.000', 'Dizel', 'Otomatik', '4x2', 'Renault Mégane.jpeg,Renault Mégane1.jpeg,Renault Mégane2.jpeg'),
(25, 'Chevrolet', 'Chevrolet Captiva', 'Chevrolet Captiva 2.0 DIESEL LTZ', '2012', '141.649', '424.000', 'Dizel', 'Otomatik', '4x2', 'Chevrolet Captiva.jpeg,Chevrolet Captiva1.jpeg,Chevrolet Captiva2.jpeg'),
(26, 'Nissan', 'Nissan Juke', 'Nissan Juke 1.6 CVT SPORT PACK', '2012', '87.520', '406.000', 'Benzin', 'Otomatik', '4x2', 'Nissan Juke.jpeg,Nissan Juke1.jpeg,Nissan Juke2.jpeg'),
(27, 'Fiat', 'Fiat 500', 'Fiat 500 Ailesi X 1.4 MULTIAIR POPSTAR', '2015', '29.377', '438.000', 'Benzin', 'Manuel', '4x2', 'Fiat 500.jpeg,Fiat 5001.jpeg,Fiat 5002.jpeg'),
(28, 'Alfa', 'Alfa Romeo Giulietta', 'Alfa Romeo Giulietta 1.4 MULTIAIR TCT DISTINCTIVE', '2012', '118.327', '443.000', 'Benzin', 'Otomatik', '4x2', 'Alfa Romeo Giulietta.jpeg,Alfa Romeo Giulietta1.jpeg,Alfa Romeo Giulietta2.jpeg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arabalar`
--
ALTER TABLE `arabalar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arabalar`
--
ALTER TABLE `arabalar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
