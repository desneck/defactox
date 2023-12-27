SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Veritabanı: `defacto`
--
-- --------------------------------------------------------
--
-- Tablo için tablo yapısı `defacto`
--
CREATE TABLE `defacto` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `beden` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `stok` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `model` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `renk` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `cinsiyet` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fiyat` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yildiz` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim_urls` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `defacto`
--
INSERT INTO
  `defacto` (
    beden,
,
    stok model,
    renk,
    cinsiyet,
    fiyat,
    yildiz,
    resim_urls
  )
VALUES
  (
    'M',
    '5',
    'Slim Fit Jean',
    'Mavi',
    'Erkek',
    '149.99',
    '4',
    'url_to_image1.jpg'
  ),
  (
    'S',
    '5',
    'Basic T-Shirt',
    'Beyaz',
    'Kadın',
    '39.99',
    '5',
    'url_to_image2.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  ),
  (
    'L',
    '5',
    'Casual Gömlek',
    'Kırmızı',
    'Erkek',
    '89.99',
    '4.5',
    'url_to_image3.jpg'
  );

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;