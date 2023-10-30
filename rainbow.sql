-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2023 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rainbow`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `OrderTime` datetime DEFAULT current_timestamp(),
  `Promotion_Id` int(11) DEFAULT NULL,
  `AllPrice` decimal(10,0) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `Deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_booking`
--

INSERT INTO `tbl_booking` (`Id`, `User_Id`, `OrderTime`, `Promotion_Id`, `AllPrice`, `Status`, `Deleted`) VALUES
(29, 1, '2023-10-08 22:53:07', 1, 25, 0, 0),
(30, 1, '2023-10-08 23:11:44', NULL, 30, 0, 0),
(31, 1, '2023-10-08 23:15:41', NULL, 30, 0, 0),
(32, 1, '2023-10-08 23:17:26', NULL, 20, 0, 0),
(33, 1, '2023-10-08 23:18:29', NULL, 20, 0, 0),
(34, 1, '2023-10-08 23:20:09', NULL, 24, 0, 0),
(35, 1, '2023-10-09 08:24:57', 2, 20, 0, 0),
(36, 1, '2023-10-09 09:22:40', 1, 5, 0, 0),
(37, 1, '2023-10-09 09:23:46', 1, 5, 0, 0),
(38, 1, '2023-10-09 09:29:19', NULL, 10, 0, 0),
(39, 1, '2023-10-09 14:40:49', NULL, 18, 0, 0),
(40, 1, '2023-10-09 15:55:42', 1, 5, 0, 0),
(41, 1, '2023-10-09 19:30:16', NULL, 20, 0, 0),
(42, 1, '2023-10-09 19:32:34', NULL, 20, 0, 0),
(43, 1, '2023-10-09 19:33:13', NULL, 20, 0, 0),
(44, 1, '2023-10-09 19:33:43', NULL, 20, 0, 0),
(45, 1, '2023-10-09 19:48:02', NULL, 20, 0, 0),
(46, 1, '2023-10-09 19:49:22', NULL, 20, 0, 0),
(47, 1, '2023-10-09 19:50:49', NULL, 20, 0, 0),
(48, 1, '2023-10-09 20:24:11', NULL, 10, 0, 0),
(49, 1, '2023-10-09 20:26:59', NULL, 10, 0, 0),
(50, 1, '2023-10-09 20:35:46', NULL, 20, 0, 0),
(51, 1, '2023-10-09 20:38:08', NULL, 10, 0, 0),
(52, 1, '2023-10-09 20:40:25', NULL, 10, 0, 0),
(53, 1, '2023-10-10 09:02:14', NULL, 24, 0, 0),
(54, 13, '2023-10-10 20:57:18', NULL, 16, 1, 0),
(55, 13, '2023-10-10 21:22:21', 16, 25, 0, 0),
(56, 13, '2023-10-10 21:24:41', 17, 15, 1, 0),
(57, 14, '2023-10-11 08:37:22', NULL, 30, 0, 0),
(58, 1, '2023-10-17 15:39:26', NULL, 60, 0, 0),
(59, 1, '2023-10-17 15:41:20', NULL, 60, 0, 0),
(60, 1, '2023-10-17 15:46:19', NULL, 60, 1, 0),
(61, 17, '2023-10-22 21:31:52', 26, 17, 0, 0),
(62, 17, '2023-10-22 21:35:05', NULL, 50, 1, 0),
(63, 19, '2023-10-23 08:38:50', NULL, 15, 1, 0),
(64, 19, '2023-10-23 08:53:14', 27, 12, 1, 0),
(65, 20, '2023-10-23 16:08:51', NULL, 15, 1, 0),
(66, 20, '2023-10-23 16:14:04', 28, 92, 1, 0),
(67, 22, '2023-10-23 22:04:37', NULL, 30, 1, 0),
(68, 22, '2023-10-23 22:05:58', 29, 12, 1, 0),
(69, 23, '2023-10-24 10:27:06', 30, 20, 0, 0),
(70, 23, '2023-10-24 10:28:30', NULL, 20, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cinema`
--

CREATE TABLE `tbl_cinema` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cinema`
--

INSERT INTO `tbl_cinema` (`Id`, `Name`, `Address`, `Deleted`) VALUES
(1, 'Cinema Pro HCm', 'Lầu 6 - 7, 19 Cao Thắng, P.2, Q.3, Tp. Hồ Chí Minh', 0),
(2, 'Cinema Thử Đức', 'Tầng B2, Vincom Plaza Quang Trung, 190 Quang Trung, P.10, Quận Gò Vấp, Tp.HCM', 0),
(3, ' Beta Quang Trung', 'Số 645 Quang Trung, Phường 11, Quận Gò Vấp, Thành phố Hồ Chí Minh', 0),
(4, 'Rainbow Entertaiment', 'Việt Nam', 0),
(5, 'Lotte Nam Sài Gòn', 'Tầng 3, TTTM Lotte, số 469 đường Nguyễn Hữu Thọ, P.Tân Hưng, Q.7, TP.HCM, Việt Nam', 0),
(6, ' Lotte Dĩ An-Bình Dương', 'Bình Dương', 0),
(7, 'CGV Mac Plaza', ' tầng 7, trung tâm thương mại Machinco số 10 Trần Phú, Hà Đông.', 0),
(8, 'Lotte Cinema Landmark', 'Đường Phạm Hùng giao nhau Dương Đình Nghệ và đường Mễ Trì, KĐTM Cầu Giấy, P.Mễ Trì, Q.Nam Từ Liêm, Hà Nội.', 0),
(9, 'CGV Vincom Nguyễn Chí Thanh', '54A đường Nguyễn Chí Thanh, Phường Láng Thượng, Quận Đống Đa, Hà Nội', 0),
(10, 'BHD Star Vincom Phạm Ngọc Thạch', ' TTTM Vincom tầng 8, số 02 Phạm Ngọc Thạch, Đống Đa, TP. Hà Nội.', 0),
(61, 'Rạp Beta Cineplex Mỹ Đình', 'Tầng hầm B1 Tòa nhà Golden Palace, Mễ Trì, Từ Liêm, TP. Hà Nội', 0),
(62, 'CGV Vincom Mega Mall Royal City tại Hà Nội', 'Khu R4, tầng B2, TTTM Vincom Mega Mall Royal City, 72A Nguyễn Trãi,Thanh Xuân, Hà Nội', 0),
(63, 'Cinestar Quốc Thanh', '271 Nguyễn Trãi, P. Nguyễn Cư Trinh, Q.1, Tp. Hồ Chí Minh', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `Id` int(11) NOT NULL,
  `Content` text DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL,
  `Created_At` datetime NOT NULL DEFAULT current_timestamp(),
  `Deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`Id`, `Content`, `User_Id`, `Movie_Id`, `Created_At`, `Deleted`) VALUES
(1, 'Công nhận The Flash của Erza trên màn ảnh lớn diễn rất đạt.... Nhưng mình khá thất vọng với tư cách là 1 Fan của nhân vật TF. Nếu phải so sánh.... Mình vẫn thích The Flash bản gốc (bản TV series) hơn ở tất cả khía cạnh....', 1, 1, '2023-10-16 16:33:34', 1),
(2, 'Mình fan DC thật sự phim đã làm rất tốt nếu đã là fan thì ko quan trọng nó như nào về doanh thu hay cgi mà nó đã tri ân fan và chiều fan cơ nào. MÌNH RẤT TỰ HÀO', 9, 1, '2023-10-20 16:41:02', 0),
(3, 'Xin review bộ này mọi người ơi', 8, 1, '2023-10-20 16:41:02', 0),
(4, 'Mới xem lại sau 1 năm vẫn luôn là 10/10', 1, 1, '2023-10-20 16:41:02', 0),
(5, 'Phim này mình thấy hay lắm, trước đó đọc truyện thì k ưng lắm nhưng khi xem phim thì thấy nội dung cũng oke, góc quay các kiểu rất đẹp', 7, 1, '2023-10-20 16:41:02', 1),
(6, 'Với mình hay thôi chứ không có hay nhất.', 5, 1, '2023-10-20 16:41:02', 0),
(7, 'Có thể bộ phim còn tệ về khâu CGI nhưng phân cảnh cuối khi Berry đến sửa sai và chấp nhận timeline của mình, phân cảnh ấy xem cảm động thực sự!', 1, 1, '2023-10-20 16:41:02', 1),
(8, 'Ra rạp coi ngày thứ 3 công chiếu mà cả rạp chỉ có 5 người, thấy hơi buồn cho DC. Mặc dù sạn nhiều nhưng The Flash vẫn xứng đáng được cả rạp hô hào,, la hét khi những cameo kinh điển xuất hiện như trong No Way Home.', 7, 1, '2023-10-20 16:41:02', 0),
(9, 'CGI công nhận đỉnh thật \nCàng ngày càng tiến bộ ', 5, 1, '2023-10-20 16:41:02', 0),
(10, 'Đang xem lại luôn, xem kỹ nhiều câu thoại thấm ghê', 5, 7, '2023-10-20 16:41:02', 0),
(11, 'Phim hay dã man. Hồi coi khóc hết nước mắt', 9, 5, '2023-10-20 16:41:02', 0),
(17, 'Phim này thì đỉnh rồi, xem bao lần vẫn mê.', 6, 5, '2023-10-20 16:41:45', 0),
(18, 'bộ phim có một trong những phản diện đỉnh nhất t từng xem, phản diện mà xem phim không thấy ghét luôn ấy', 5, 2, '2023-10-20 16:41:45', 0),
(19, 'Con phim đỉnh cao thiệt luôn', 1, 2, '2023-10-20 16:41:45', 0),
(20, 'Phim đỉnh thiệt, xem cuốn . Vì cố xem hết phim mà tui đi học muộn thường xuyên đây', 6, 2, '2023-10-20 16:41:45', 0),
(21, 'Với tui bộ này diễn đơ, cách viết kịch bản non nớt, nội dung lê thê lại rời rạc', 1, 1, '2023-10-20 16:41:45', 1),
(22, 'xem trong quán net cười suốt', 9, 10, '2023-10-20 16:41:45', 0),
(23, 'Trời ơi mk cũng tìm phim này bữa giờ', 6, 7, '2023-10-20 16:41:45', 0),
(24, 'Phim hay tuyệt vời', 9, 4, '2023-10-20 16:41:45', 0),
(25, 'Rất đáng xem luôn', 2, 5, '2023-10-20 16:41:45', 0),
(26, 'Mãi mãi number 1 trong lòng toyyyy', 10, 3, '2023-10-20 16:41:45', 0),
(28, 'phim hay', 19, 5, '2023-10-23 08:40:40', 0),
(29, 'phim hay', 20, 1, '2023-10-23 16:16:35', 0),
(30, 'phim hay nhe mn', 22, 1, '2023-10-23 22:07:06', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_director`
--

CREATE TABLE `tbl_director` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `AvatarURL` text DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_director`
--

INSERT INTO `tbl_director` (`Id`, `Name`, `AvatarURL`, `Deleted`) VALUES
(1, 'Federico Fellini', NULL, 0),
(2, 'Alfred Hitchcock', NULL, 0),
(3, 'Steven Spielberg', NULL, 0),
(4, 'Quentin Tarantino', NULL, 0),
(5, 'Martin Scorsese', NULL, 0),
(6, 'Christopher Nolan', NULL, 0),
(7, 'Stanley Kubrick', NULL, 0),
(8, 'James Cameron', NULL, 0),
(9, 'Akira Kurosawa', NULL, 0),
(10, 'Woody Allen', NULL, 0),
(11, 'Trang 2', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_homeslide`
--

CREATE TABLE `tbl_homeslide` (
  `Id` int(11) NOT NULL,
  `Src` text DEFAULT NULL,
  `SlideCategory_Id` int(11) DEFAULT NULL,
  `Created_At` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_homeslide`
--

INSERT INTO `tbl_homeslide` (`Id`, `Src`, `SlideCategory_Id`, `Created_At`) VALUES
(1, 'http://127.0.0.1:8000/RainbowPublic/images/header/01.jpg', 1, '2023-10-20 15:29:35'),
(2, 'http://127.0.0.1:8000/RainbowPublic/images/header/02.jpg', 2, '2023-10-20 15:29:46'),
(3, 'http://127.0.0.1:8000/RainbowPublic/images/header/03.jpg', 3, '2023-10-20 15:30:06'),
(4, 'http://127.0.0.1:8000/RainbowPublic/images/header/01.jpg', 4, '2023-10-20 15:30:36'),
(5, 'http://127.0.0.1:8000/RainbowPublic/images/header/02.jpg', 5, '2023-10-20 15:30:36'),
(6, 'http://127.0.0.1:8000/RainbowPublic/images/header/01.jpg', 6, '2023-10-20 15:31:22'),
(7, 'http://127.0.0.1:8000/RainbowPublic/images/header/02.jpg', 7, '2023-10-20 15:31:22'),
(8, 'http://127.0.0.1:8000/storage/slide/8wQc6PrOxAB9PWGlKfv52NCkJqDY9A03wPlQy667.jpg', 1, '2023-10-23 08:56:14'),
(9, 'http://127.0.0.1:8000/storage/slide/ETDvulye7FI2j9TQRMZN9HmM30ONRLDBHxoXIZuR.jpg', 1, '2023-10-23 09:30:56'),
(10, 'http://127.0.0.1:8000/storage/slide/vaNNsMzXLctPKGLCawEV5d7193P5zLhorfTZZE4R.jpg', 1, '2023-10-23 16:28:30'),
(11, 'http://127.0.0.1:8000/storage/slide/vmhdwsqAhn1apz9HcZxdd0IfiknSC0AoK38obTTm.jpg', 1, '2023-10-23 16:40:39'),
(12, 'http://127.0.0.1:8000/storage/slide/Yk4UfEjWJ2OCDxgGL6xWI7E2tHxSFbXsVaMHzol9.jpg', 1, '2023-10-24 10:37:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `DateShow` datetime DEFAULT NULL,
  `VideoTrailer` text DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `MovieCategory_Id` int(11) DEFAULT NULL,
  `Director_Id` int(11) DEFAULT NULL,
  `Productor_Id` int(11) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_movie`
--

INSERT INTO `tbl_movie` (`Id`, `Name`, `DateShow`, `VideoTrailer`, `Price`, `Description`, `MovieCategory_Id`, `Director_Id`, `Productor_Id`, `Deleted`) VALUES
(1, 'The Flash', '2023-10-29 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 30, 'The Flash is a 2023 American superhero film based on the DC Comics character of the same name. Produced by Warner Bros. Pictures, DC Studios, Double Dream, and the Disco Factory, and distributed by Warner Bros. Pictures, it is the 13th installment in the DC Extended Universe (DCEU). The film was directed by Andy Muschietti from a screenplay by Christina Hodson, based on a story by Joby Harold and the writing team of John Francis Daley and Jonathan Goldstein. It stars Ezra Miller as Barry Allen / The Flash alongside Sasha Calle, Michael Shannon, Ron Livingston, Maribel Verdú, Kiersey Clemons, Antje Traue, and Michael Keaton. In the film, Barry travels back in time to prevent his mother\'s death, which brings unintended consequences.  Development of a film based on the Flash began in the late 1980s, with multiple writers and directors attached to the project through 2014. The film was then redeveloped as a part of the DCEU, with Miller cast as the title character. Multiple directors were attached to the film over the following years, with Seth Grahame-Smith, Rick Famuyiwa, and the duo of Daley and Goldstein all departing the project over creative differences. Muschietti and Hodson joined the film in July 2019, and pre-production began in January 2020. The film is influenced by the comic book storyline Flashpoint (2011), featuring other DC characters, such as Calle\'s Supergirl and both Ben Affleck\'s and Keaton\'s versions of Batman. Principal photography took place from April to October 2021 at Warner Bros. Studios, Leavesden and on location around the United Kingdom.  The Flash premiered at Grauman\'s Chinese Theatre in Los Angeles on June 12, 2023, and was released in the United States on June 16, following multiple delays caused by director changes, the COVID-19 pandemic, post-production setbacks, and controversies surrounding Miller. The film received mixed reviews from critics, who praised its humor, action sequences, and the performances, but criticized the third act and visual effects. The film has grossed $270.6 million worldwide, becoming one of the biggest box-office bombs of all time, with projections of a $200 million loss for Warner Bros.', 10, 9, 6, 1),
(2, 'Avengers: Endgame', '2023-10-24 08:37:23', 'https://www.youtube.com/embed/6ZfuNTqbHE8', 35, 'A superhero epic', 2, 2, 9, 0),
(3, 'Jurassic Park', '2023-10-25 08:37:23', 'https://www.youtube.com/embed/Q3YxrPfNiO4', 40, 'Dinosaurs come to life', 1, 9, 2, 0),
(4, 'The Godfather', '2023-10-28 08:37:23', 'godfather_trailer.mp4', 20, 'A mafia epic', 10, 7, 1, 0),
(5, 'Inception', '2023-10-29 08:37:23', 'inception_trailer.mp4', 15, 'A mind-bending thriller', 7, 9, 3, 0),
(6, 'Titanic', '2023-10-24 08:37:23', 'titanic_trailer.mp4', 38, 'A tragic love story', 8, 2, 3, 0),
(7, 'The Matrix', '2023-10-26 08:37:23', 'matrix_trailer.mp4', 29, 'A sci-fi action film', 10, 1, 6, 0),
(8, 'Avatar', '2023-10-23 08:37:23', 'avatar_trailer.mp4', 12, 'A visually stunning epic', 4, 1, 5, 0),
(10, 'The Shawshank Redemption', '2023-10-25 08:37:23', 'shawshank_trailer.mp4', 10, 'A tale of hope and friendship', 10, 10, 3, 0),
(11, 'Turning Red', '2023-10-23 08:37:23', 'https://www.youtube.com/embed/XdKzUbAiswE', 100, 'Gấu đỏ biến hình', 4, 3, 4, 0),
(13, 'Frozen 2', '2023-10-28 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 23, 'zero', 8, 1, 5, 0),
(15, 'Spider-Man: No Way Home', '2023-10-24 08:00:23', 'https://www.youtube.com/embed/JfVOs4VSpmA', 34, 'zero', 2, 4, 3, 0),
(20, 'The Northman', '2023-10-25 08:37:23', 'https://www.youtube.com/embed/oMSdFM12hOw', 23, 'zero', 2, 1, 1, 0),
(21, 'The Black Phone', '2023-10-26 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 100, 'zero', 1, 6, 5, 0),
(23, 'Thor: Love and Thunder', '2023-10-29 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 100, 'zero', 8, 1, 5, 0),
(24, 'Jurassic World: Dominion', '2023-10-26 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 23, 'zero', 7, 6, 8, 0),
(25, 'Doctor Strange', '2023-10-27 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 35, 'zero', 3, 7, 3, 0),
(26, 'Top Gun: Maverick', '2023-10-27 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 100, 'zero', 5, 1, 4, 0),
(27, 'The Adam Project', '2023-10-25 08:37:23', 'https://www.youtube.com/embed/hebWYacbdvc', 100, 'zero', 6, 6, 7, 0),
(28, 'The Lost City', '2023-10-29 08:37:23', 'https://www.youtube.com/embed/tri6jLT4y0g', 100, 'zero', 9, 6, 3, 0),
(43, 'HarryPotter', '2023-10-25 08:37:23', 'https://www.youtube.com/embed/yBAGclXF3Jk', 25, 'Harry Potter là một loạt tiểu thuyết huyền bí gồm bảy phần của nhà văn Anh Quốc J. K. Rowling. Bộ truyện viết về những cuộc phiêu lưu phù thủy của cậu bé Harry Potter cùng hai người bạn thân là Ron Weasley và Hermione Granger, lấy bối cảnh tại Trường Phù thủy và Pháp sư Hogwarts ở nước Anh. Những cuộc phiêu lưu tập trung vào cuộc chiến của Harry Potter trong việc chống lại tên Chúa tể Hắc ám Voldemort – người có tham vọng muốn trở nên bất tử, thống trị thế giới phù thủy, nô dịch hóa những người phi pháp thuật và tiêu diệt những ai cản đường hắn, đặc biệt là Harry Potter.', 1, 1, 1, 0),
(44, 'Thor', '2023-10-29 08:44:00', 'https://www.youtube.com/embed/JOddp-nlNvQ', 20, 'Thor là một vị thần nổi bật được nhắc đến trong suốt lịch sử của các dân tộc German, từ các vùng Germania Đế quốc La Mã chiếm đóng đến các vùng di cư của người German trong Thời kỳ Di cư, đến sự phổ biến của anh trong Thời đại Viking. Khi đối mặt với quá trình truyền đạo Ki-tô giáo ở Scandinavia, biểu tượng có hình chiếc búa của anh', 1, 1, 1, 0),
(45, 'Train to Busan', '2023-10-29 19:20:00', 'https://www.youtube.com/embed/1ovgxN2VWNc', 30, 'While a zombie-virus breaks out in South Korea, a couple of passengers struggle to survive on the train from Seoul to Busan.', 1, 3, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_moviecategory`
--

CREATE TABLE `tbl_moviecategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_moviecategory`
--

INSERT INTO `tbl_moviecategory` (`Id`, `Name`, `Deleted`) VALUES
(1, 'Horrified', 0),
(2, 'Action', 0),
(3, 'Comedy', 0),
(4, 'Drama', 0),
(5, 'Science Fiction', 0),
(6, 'Romance', 0),
(7, 'Thriller', 0),
(8, 'Fantasy', 0),
(9, 'Adventure', 0),
(10, 'Mystery', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_performer`
--

CREATE TABLE `tbl_performer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `AvatarURL` text DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_performer`
--

INSERT INTO `tbl_performer` (`Id`, `Name`, `AvatarURL`, `Deleted`) VALUES
(1, 'Brad Pitt', 'https://randomuser.me/api/portraits/men/10.jpg', 0),
(2, 'Tom Hanks', 'https://randomuser.me/api/portraits/men/1.jpg', 0),
(3, 'Leonardo DiCaprio', 'https://randomuser.me/api/portraits/men/3.jpg', 0),
(4, 'Johnny Depp', 'https://randomuser.me/api/portraits/men/4.jpg', 0),
(5, 'Meryl Streep', 'https://randomuser.me/api/portraits/men/5.jpg', 0),
(6, 'Jennifer Lawrence', 'https://randomuser.me/api/portraits/men/6.jpg', 0),
(7, 'Robert Downey Jr.', 'https://randomuser.me/api/portraits/men/7.jpg', 0),
(8, 'Denzel Washington', 'https://randomuser.me/api/portraits/men/8.jpg', 0),
(9, 'Cate Blanchett', 'https://randomuser.me/api/portraits/men/9.jpg', 0),
(10, 'Natalie Portman', 'https://randomuser.me/api/portraits/men/10.jpg', 0),
(21, 'Trang 2', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_performermovie`
--

CREATE TABLE `tbl_performermovie` (
  `Performer_Id` int(11) NOT NULL,
  `Movie_Id` int(11) NOT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_performermovie`
--

INSERT INTO `tbl_performermovie` (`Performer_Id`, `Movie_Id`, `Deleted`) VALUES
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 8, 0),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 0),
(3, 5, 0),
(3, 6, 0),
(3, 7, 0),
(3, 8, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 0),
(4, 8, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 8, 0),
(6, 1, 0),
(7, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `Id` int(11) NOT NULL,
  `Src` text DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_photo`
--

INSERT INTO `tbl_photo` (`Id`, `Src`, `Movie_Id`) VALUES
(1, 'https://th.bing.com/th/id/R.180e5922bcec9b62b854dcb411ccb414?rik=XNthuQKME6c8YA&pid=ImgRaw&r=0', 1),
(2, 'https://images2.alphacoders.com/131/thumbbig-1316826.webp', 1),
(3, 'https://images6.alphacoders.com/132/thumbbig-1328391.webp', 1),
(4, 'https://images2.alphacoders.com/132/thumbbig-1321667.webp', 1),
(5, 'https://images2.alphacoders.com/131/thumbbig-1311171.webp', 1),
(6, 'https://images6.alphacoders.com/131/thumbbig-1317096.webp', 1),
(7, 'https://th.bing.com/th/id/R.5ac9feed9cf2dc0156620a865fe7f884?rik=e5jLXi%2bSFh637Q&pid=ImgRaw&r=0', 2),
(9, 'https://nld.mediacdn.vn/2019/4/25/3515432-endgamedek-15561710302491765206118.jpg', 2),
(10, 'https://genk.mediacdn.vn/zoom/700_438/139269124445442048/2023/4/26/avatar1682477003727-1682477004564694921359.jpg', 2),
(11, 'https://nld.mediacdn.vn/2019/4/25/3515432-endgamedek-15561710302491765206118.jpg', 2),
(12, 'https://s3.cloud.cmctelecom.vn/tinhte2/2019/04/4629787_cover_endgamex-1.jpg', 2),
(13, 'https://cdnimg.vietnamplus.vn/t1200/Uploaded/ngtmbh/2019_05_01/190425160639-02-avengers-endgame-thumb-imax-poster-super-tease.jpg', 2),
(14, 'https://th.bing.com/th/id/OIP.HJ6fbys2842jYrKhy-S9rgHaKZ?pid=ImgDet&rs=1', 3),
(15, 'https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2011/9/21/1316599625809/Infomania-Jurassic-Park-007.jpg?width=465&dpr=1&s=none', 3),
(16, 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2018%2F08%2Fmcdjupa_ec032-2000.jpg&q=60', 3),
(18, 'https://ychef.files.bbci.co.uk/976x549/p06vgbzj.jpg', 3),
(19, 'https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2011/9/21/1316599625809/Infomania-Jurassic-Park-007.jpg?width=465&dpr=1&s=none', 3),
(20, 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2018%2F08%2Fmcdjupa_ec032-2000.jpg&q=60', 3),
(21, 'https://th.bing.com/th/id/OIP.UI0TcBFsp66D4qn9IIyO1gHaLH?pid=ImgDet&rs=1', 4),
(72, 'https://file.hstatic.net/1000328498/article/thumb_4ab65564477948b0ba31a2f074acd598.jpg', 4),
(73, 'https://vcdn1-giaitri.vnecdn.net/2022/03/28/reviewbogia-2073-1631785536-6613-1648435866.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=8NSGADCwojIrPIHk9sAy8Q', 4),
(74, 'https://media.gq-magazine.co.uk/photos/6389fc64ae86bf6162acc67c/16:9/w_2560%2Cc_limit/The-Godfather-Part-II-HEADER-1.jpg', 4),
(75, 'https://images.livemint.com/img/2022/02/25/1600x900/Capture_1645764806957_1645764817411.JPG', 4),
(76, 'https://vcdn1-giaitri.vnecdn.net/2022/03/28/reviewbogia-2073-1631785536-6613-1648435866.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=8NSGADCwojIrPIHk9sAy8Q', 4),
(82, 'https://th.bing.com/th/id/OIP.6WES5nhdyXVDPrxHG0vCvgHaKz?pid=ImgDet&rs=1', 5),
(83, 'https://touchcinema.com/storage/phim-ke-danh-cap-giac-mo/phim-ke-danh-cap-giac-mo.jpg', 5),
(84, 'https://kenh14cdn.com/thumb_w/660/2018/8/16/twistedinception-574812-1534437984693380307693.jpeg', 5),
(85, 'https://truyenhinhthanhhoa.qltns.mediacdn.vn/dataimages/202008/original/images5632159_14.jpg', 5),
(86, 'https://www.rollingstone.com/wp-content/uploads/2010/07/MCDINCE_EC037c.jpg', 5),
(87, 'https://kenh14cdn.com/thumb_w/660/2018/8/16/twistedinception-574812-1534437984693380307693.jpeg', 5),
(88, 'https://th.bing.com/th/id/R.0417df1eed64c5962fe5e2d7fe53e5dc?rik=zbFtP4yY9pE0vA&riu=http%3a%2f%2fkoolcampus.files.wordpress.com%2f2012%2f04%2ftitanic-malaysian-poster.jpg&ehk=GF2md7Fe1nYxhb3nqavy4fTLXWYnnnV8ivb%2b2U%2bC9NI%3d&risl=&pid=ImgRaw&r=0', 6),
(89, 'https://static2.vieon.vn/vieplay-image/carousel_web_v4/2023/03/13/76qfvn15_1920x1080-titanic_1920_1080.jpeg', 6),
(90, 'https://media.cnn.com/api/v1/images/stellar/prod/230213144330-02-titanic-25th-anniversary-restricted.jpg?c=original', 6),
(91, 'https://gumlet.assettype.com/film-companion/import/wp-content/uploads/2021/02/Titanic-and-12-best-Meet-Cutes_Lead.jpg?w=1200&h=675&auto=format%2Ccompress&fit=max&enlarge=true', 6),
(92, 'https://media.npr.org/assets/img/2022/12/19/gettyimages-1192757498_custom-98c8445dcc83df796721917be9aa7d4405c3649b-s1100-c50.jpg', 6),
(93, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmel1jyNpR8pJ7vGRIOJ4r4g-b5hJE41i7Ng&usqp=CAU', 6),
(94, 'https://www.themoviedb.org/t/p/original/avHyolEHCvVgDEWaBzDODwc9tfr.jpg', 7),
(95, 'https://deadline.com/wp-content/uploads/2017/03/the-matrix1.jpg?w=970', 7),
(96, 'https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/07/THE-MATRIX-MOVIES-IN-ORDER.jpg', 7),
(97, 'https://media.newyorker.com/photos/61cc9220a781a26a4a740e84/master/w_2560%2Cc_limit/Pappademas_MatrixKeanuReeves.jpg', 7),
(98, 'https://www.dexerto.com/cdn-cgi/image/width=3840,quality=75,format=auto/https://editors.dexerto.com/wp-content/uploads/2022/12/08/Matrix-5.jpg', 7),
(99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTauHTH3bOtgBGC-Ic-nIMEKcDNT7DSk6W9VA&usqp=CAU', 7),
(100, 'https://th.bing.com/th/id/R.4b5fdd63afe7d60eaa3c070c1edaf8a3?rik=thFpAaT7nYvgPg&riu=http%3a%2f%2f4.bp.blogspot.com%2f_RRYNK-caPgI%2fSwV4mMtEbGI%2fAAAAAAAAAKY%2f9pxY0x8ssU4%2fs1600%2favatar%2bfilm.jpg&ehk=SGPB9eqN%2b%2fJGlFV%2f4Gy5D2OJEwjh5uLlUfvTA6vJrKQ%3d&risl=&pid=ImgRaw&r=0', 8),
(101, 'https://www.cnet.com/a/img/resize/05ddcebef02ed2db237bb6ecabc40255a94b10bb/hub/2019/01/11/b251bf04-5bf8-469a-be8d-79489551460b/avatar-2009.jpg?auto=webp&fit=crop&height=675&width=1200', 8),
(102, 'https://images.axios.com/uHQQ0qbqRLzXsha1B0cRuXyCX-s=/0x0:2592x1458/1920x1080/2022/12/20/1671546316616.jpg?w=1920', 8),
(103, 'https://people.com/thmb/-PudgbOOHDge_l3Y5GHmNAa0_sw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(884x169:886x171)/avatar-pandora-021023-1-f5d85b047f8442a9bda34ec4ebe08159.jpg', 8),
(104, 'https://media.wired.com/photos/639b95f7b0b422ebbe76e40b/191:100/w_1280,c_limit/Cul-avatar.jpg', 8),
(105, 'https://images2.minutemediacdn.com/image/upload/c_crop,w_1622,h_912,x_115,y_0/c_fill,w_1440,ar_16:9,f_auto,q_auto,g_auto/images/voltaxMediaLibrary/mmsport/mentalfloss/01g1z27yqetvxqc3nnd5.jpg', 8),
(106, 'https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg', 10),
(107, 'https://www.hollywoodreporter.com/wp-content/uploads/2018/03/the_shawshank_redemption_-_h_-_1994.jpg?w=1296', 10),
(108, 'https://api.time.com/wp-content/uploads/2014/09/shawshank-redemption-01.jpg', 10),
(109, 'https://www.intofilm.org/intofilm-production/scaledcropped/870x489https%3A/s3-eu-west-1.amazonaws.com/images.cdn.filmclub.org/film__3031-the-shawshank-redemption--hi_res-b71e73bb.jpg/film__3031-the-shawshank-redemption--hi_res-b71e73bb.jpg', 10),
(110, 'https://api.time.com/wp-content/uploads/2014/09/shawshank-redemption-02.jpg', 10),
(111, 'https://m.media-amazon.com/images/M/MV5BMTgxMTU1MDkwOV5BMl5BanBnXkFtZTcwMDQxNDY3Mw@@._V1_.jpg', 10),
(112, 'https://m.media-amazon.com/images/M/MV5BNzRhMTNjZTItMjU3Mi00Y2RmLWE1ZTktODAxODU3OWYyZjUzXkEyXkFqcGdeQXVyMTA2ODkwNzM5._V1_.jpg', 11),
(113, 'https://ss-images.saostar.vn/pc/1637217619152/saostar-12osudrqw0f4d9i9.png', 11),
(114, 'https://afamilycdn.com/zoom/700_438/150157425591193600/2022/3/16/photo-1647403180686-16474031808831805754462-17-0-593-1100-crop-16474037205151338034715.jpg', 11),
(115, 'https://static1.dienanh.net/upload/202203/10e8870f-7ae0-4a8d-b8ce-a34e1205cb43.jpeg', 11),
(116, 'https://media.cnn.com/api/v1/images/stellar/prod/220113151814-02-turning-red-pixar-movie.jpg?c=16x9&q=h_720,w_1280,c_fill', 11),
(117, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXxGVugoIowKsnpkNqnB3mCiMU3-7-G7XljA&usqp=CAU', 11),
(118, 'https://lumiere-a.akamaihd.net/v1/images/p_frozen2_19644_4c4b423d.jpeg', 13),
(119, 'https://kenhcine.cgv.vn/media/catalog/product/f/r/frozen-2-3840x2160-queen-elsa-anna-olaf-kristoff-walt-disney-19030.jpg', 13),
(120, 'https://cdn1.tuoitre.vn/zoom/600_315/2019/11/22/frozen-2-15743586754851408314339-crop-15743593267901879203337.jpg', 13),
(121, 'https://toplist.vn/images/800px/frozen-2-nu-hoang-bang-gia-2-796056.jpg', 13),
(122, 'https://giadinh.mediacdn.vn/zoom/740_463/2019/photo1569310512744-1569310513056-crop-1569310593605488084694.jpg', 13),
(123, 'https://maac.edu.vn/wp-content/uploads/2021/12/123-min.png', 13),
(124, 'https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_FMjpg_UX1000_.jpg', 15),
(125, 'https://images2.thanhnien.vn/Uploaded/nhuvnq/2021_11_17/poster-3930.jpg', 15),
(126, 'https://ecdn.game4v.com/g4v-content/uploads/2021/12/31102939/NWH-hau-truong-2-game4v-1640921378-83.jpg', 15),
(127, 'https://kenh14cdn.com/thumb_w/600/203336854389633024/2021/12/16/photo1639671071907-16396710729361150128040.jpg', 15),
(128, 'https://vtv1.mediacdn.vn/zoom/640_400/2021/11/17/maguire-garfield-and-holland-spider-man-1637120729614647524781-crop-1637120738598442670809.jpg', 15),
(129, 'https://doanhnhanplus.vn/wp-content/uploads/2021/08/Spider-Man-No-Way-Home.jpg', 15),
(130, 'https://m.media-amazon.com/images/I/81HtqN5bL1L._AC_UF1000,1000_QL80_.jpg', 20),
(131, 'https://m.media-amazon.com/images/I/81HtqN5bL1L._AC_UF1000,1000_QL80_.jpg', 20),
(132, 'https://m.media-amazon.com/images/I/81HtqN5bL1L._AC_UF1000,1000_QL80_.jpg', 20),
(133, 'https://m.media-amazon.com/images/I/81HtqN5bL1L._AC_UF1000,1000_QL80_.jpg', 20),
(134, 'https://m.media-amazon.com/images/I/81HtqN5bL1L._AC_UF1000,1000_QL80_.jpg', 20),
(135, 'https://m.media-amazon.com/images/I/81HtqN5bL1L._AC_UF1000,1000_QL80_.jpg', 20),
(136, 'https://flxt.tmsimg.com/assets/p20672247_v_v13_ak.jpg', 21),
(137, 'https://flxt.tmsimg.com/assets/p20672247_v_v13_ak.jpg', 21),
(138, 'https://flxt.tmsimg.com/assets/p20672247_v_v13_ak.jpg', 21),
(139, 'https://flxt.tmsimg.com/assets/p20672247_v_v13_ak.jpg', 21),
(140, 'https://flxt.tmsimg.com/assets/p20672247_v_v13_ak.jpg', 21),
(141, 'https://flxt.tmsimg.com/assets/p20672247_v_v13_ak.jpg', 21),
(148, 'https://m.media-amazon.com/images/I/81LRTMDpqeL._AC_UF1000,1000_QL80_.jpg', 23),
(149, 'https://m.media-amazon.com/images/I/81LRTMDpqeL._AC_UF1000,1000_QL80_.jpg', 23),
(150, 'https://m.media-amazon.com/images/I/81LRTMDpqeL._AC_UF1000,1000_QL80_.jpg', 23),
(151, 'https://m.media-amazon.com/images/I/81LRTMDpqeL._AC_UF1000,1000_QL80_.jpg', 23),
(152, 'https://m.media-amazon.com/images/I/81LRTMDpqeL._AC_UF1000,1000_QL80_.jpg', 23),
(153, 'https://m.media-amazon.com/images/I/81LRTMDpqeL._AC_UF1000,1000_QL80_.jpg', 23),
(154, 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 24),
(155, 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 24),
(156, 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 24),
(157, 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 24),
(158, 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 24),
(159, 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 24),
(160, 'https://m.media-amazon.com/images/M/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg', 25),
(161, 'https://m.media-amazon.com/images/M/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg', 25),
(162, 'https://m.media-amazon.com/images/M/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg', 25),
(163, 'https://m.media-amazon.com/images/M/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg', 25),
(164, 'https://m.media-amazon.com/images/M/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg', 25),
(165, 'https://m.media-amazon.com/images/M/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg', 25),
(166, 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 26),
(167, 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 26),
(168, 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 26),
(169, 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 26),
(170, 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 26),
(171, 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 26),
(172, 'https://m.media-amazon.com/images/M/MV5BOWM0YWMwMDQtMjE5NS00ZTIwLWE1NWEtODViMWZjMWI2OTU3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', 27),
(173, 'https://m.media-amazon.com/images/M/MV5BOWM0YWMwMDQtMjE5NS00ZTIwLWE1NWEtODViMWZjMWI2OTU3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', 27),
(174, 'https://m.media-amazon.com/images/M/MV5BOWM0YWMwMDQtMjE5NS00ZTIwLWE1NWEtODViMWZjMWI2OTU3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', 27),
(175, 'https://m.media-amazon.com/images/M/MV5BOWM0YWMwMDQtMjE5NS00ZTIwLWE1NWEtODViMWZjMWI2OTU3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', 27),
(176, 'https://m.media-amazon.com/images/M/MV5BOWM0YWMwMDQtMjE5NS00ZTIwLWE1NWEtODViMWZjMWI2OTU3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', 27),
(177, 'https://m.media-amazon.com/images/M/MV5BOWM0YWMwMDQtMjE5NS00ZTIwLWE1NWEtODViMWZjMWI2OTU3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', 27),
(178, 'data:image/jpeg;base64,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', 28);
INSERT INTO `tbl_photo` (`Id`, `Src`, `Movie_Id`) VALUES
(179, 'data:image/jpeg;base64,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', 28),
(180, 'data:image/jpeg;base64,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', 28);
INSERT INTO `tbl_photo` (`Id`, `Src`, `Movie_Id`) VALUES
(181, 'data:image/jpeg;base64,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', 28),
(182, 'data:image/jpeg;base64,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', 28);
INSERT INTO `tbl_photo` (`Id`, `Src`, `Movie_Id`) VALUES
(183, 'data:image/jpeg;base64,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', 28),
(226, 'http://127.0.0.1:8000/storage/movie_single/RfwFvoZdCH1SJ5hSIKtX1q4kG6iJTZmmjcKjG9Gi.jpg', 43),
(227, 'http://127.0.0.1:8000/storage/movie_single/T2tiPYlfboiMGvNWMNzgXeum2jTPiQSrGNfd4T4K.jpg', 43),
(228, 'http://127.0.0.1:8000/storage/movie_single/w0Vz8r6lSvbKsyYtXpH5xlAobGcsKHmwULWowvkb.jpg', 43),
(229, 'http://127.0.0.1:8000/storage/movie_single/7aEfbXH4igThHtBSVIEbWobuw1mHgazSNyK9qc0X.jpg', 43),
(230, 'http://127.0.0.1:8000/storage/movie_single/LBSOshCijfmoSdhuzg4d2IqoBzYPmZgfDQH8J6mQ.jpg', 43),
(231, 'http://127.0.0.1:8000/storage/movie_single/8rU7exILxVvmKH8GWgYBfVnO9rdp9wa8aPfugrx0.jpg', 43),
(232, 'http://127.0.0.1:8000/storage/movie_single/omguLBSCekyR6ACrq9akRUqSkdOolxWRVeHtgKum.jpg', 44),
(233, 'http://127.0.0.1:8000/storage/movie_single/dD9pa4ywIN7KUQv9whGHlxVukBppPM5SrVbcRRnj.jpg', 44),
(234, 'http://127.0.0.1:8000/storage/movie_single/45xBcgZatAezssC5X0zhPQrXwYAr8J6bgcoqXj6p.jpg', 44),
(235, 'http://127.0.0.1:8000/storage/movie_single/VnGaFTA6sEO7l3D0SgnFP0rLhiVd1pV1yai5VO2X.jpg', 44),
(236, 'http://127.0.0.1:8000/storage/movie_single/V9JGEFoWEtmhATn3k9D4bBknGRjwZ3gaIQweJmwD.jpg', 44),
(237, 'http://127.0.0.1:8000/storage/movie_single/XdRF7haOwI9HvhV0GLbPbPJjzt4iNdiCG1cz7crE.jpg', 44),
(238, 'http://127.0.0.1:8000/storage/movie_single/WImjygyM9A5wlWCQQNjBl70FnoyBBMrfWO8lCrJl.jpg', 45),
(239, 'http://127.0.0.1:8000/storage/movie_single/5PYEsrlyBqVcgO9GiqTWczqAV1tK493wxEp8pwcw.png', 45),
(240, 'http://127.0.0.1:8000/storage/movie_single/b497Qct7fIbIcDcMKYMdvTaLlnPgP7o3FXWzpxWL.jpg', 45),
(241, 'http://127.0.0.1:8000/storage/movie_single/APKvkYbecdl4QInd8tWG7uEsM52JjtV8coDhrpjc.jpg', 45),
(242, 'http://127.0.0.1:8000/storage/movie_single/AeAFNw937dqap0UXBxRe8aVgs3TIURTdfMHEtFM7.jpg', 45),
(243, 'http://127.0.0.1:8000/storage/movie_single/xMN4b5CLiSfg4m2xk4rGHyKF81tE2eL69gJmabtM.jpg', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_productor`
--

CREATE TABLE `tbl_productor` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `AvatarURL` text DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_productor`
--

INSERT INTO `tbl_productor` (`Id`, `Name`, `AvatarURL`, `Deleted`) VALUES
(1, 'Music producer Juzaly', NULL, 0),
(2, 'Music producer Smith', NULL, 0),
(3, 'Music producer Johnson', NULL, 0),
(4, 'Music producer Davis', NULL, 0),
(5, 'Music producer Lee', NULL, 0),
(6, 'Music producer Wilson', NULL, 0),
(7, 'Music producer Brown', NULL, 0),
(8, 'Music producer Taylor', NULL, 0),
(9, 'Music producer Anderson', NULL, 0),
(10, 'Music producer Nguyen', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `Id` int(11) NOT NULL,
  `Start` datetime DEFAULT NULL,
  `End` datetime DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `PromotionCategrory_Id` int(11) DEFAULT NULL,
  `Used` int(11) NOT NULL DEFAULT 0,
  `Created` datetime DEFAULT current_timestamp(),
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_promotion`
--

INSERT INTO `tbl_promotion` (`Id`, `Start`, `End`, `User_Id`, `PromotionCategrory_Id`, `Used`, `Created`, `Deleted`) VALUES
(1, '2023-01-01 00:00:00', '2023-01-07 23:59:59', 1, 1, 1, '2023-10-12 08:58:49', 0),
(2, '2023-02-05 10:00:00', '2023-02-12 10:00:00', 1, 2, 0, '2023-10-12 08:58:49', 0),
(3, '2023-03-10 08:00:00', '2023-03-20 20:00:00', 1, 3, 0, '2023-10-12 08:58:49', 0),
(4, '2023-02-05 10:00:00', '2023-02-12 10:00:00', 9, 1, 0, '2023-10-12 08:58:49', 0),
(5, '2023-02-05 10:00:00', '2023-02-12 10:00:00', 1, 2, 0, '2023-10-12 08:58:49', 0),
(6, '2023-07-10 14:00:00', '2023-07-15 14:00:00', 1, 6, 0, '2023-10-12 08:58:49', 0),
(7, '2023-08-20 16:00:00', '2023-08-31 23:59:59', 1, 7, 0, '2023-10-12 08:58:49', 0),
(8, '2023-09-05 11:00:00', '2023-09-15 11:00:00', 1, 8, 0, '2023-10-12 08:58:49', 0),
(9, '2023-10-10 13:30:00', '2023-10-20 13:30:00', 1, 9, 0, '2023-10-12 08:58:49', 0),
(10, '2023-11-25 15:00:00', '2023-12-01 23:59:59', 1, 10, 0, '2023-10-12 08:58:49', 0),
(11, '2023-02-05 10:00:00', '2023-02-12 10:00:00', 1, 1, 0, '2023-10-12 08:58:49', 0),
(12, '2023-10-10 08:33:49', NULL, 10, 1, 0, '2023-10-12 08:58:49', 0),
(13, '2023-10-10 08:34:56', NULL, 10, 1, 0, '2023-10-12 08:58:49', 0),
(14, '2023-10-10 08:35:41', NULL, 10, 1, 0, '2023-10-12 08:58:49', 0),
(15, '2023-10-10 08:35:50', NULL, 10, 1, 0, '2023-10-12 08:58:49', 0),
(16, '2023-02-12 10:00:00', '2023-02-26 10:00:00', 13, 1, 1, '2023-10-12 08:58:49', 0),
(17, '2023-02-05 10:00:00', '2023-02-12 10:00:00', 13, 2, 1, '2023-10-12 08:58:49', 0),
(18, '2023-02-05 10:00:00', '2023-02-12 10:00:00', 13, 7, 0, '2023-10-12 08:58:49', 0),
(25, '2023-10-20 11:35:01', NULL, 1, 3, 0, '2023-10-20 11:35:01', 0),
(26, '2023-10-22 21:30:37', NULL, 17, 3, 1, '2023-10-22 21:30:37', 0),
(27, '2023-10-23 08:19:56', NULL, 19, 3, 1, '2023-10-23 08:19:56', 0),
(28, '2023-10-23 16:06:09', NULL, 20, 3, 1, '2023-10-23 16:06:09', 0),
(29, '2023-10-23 21:59:49', NULL, 22, 3, 1, '2023-10-23 21:59:49', 0),
(30, '2023-10-24 10:25:07', NULL, 23, 3, 1, '2023-10-24 10:25:07', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_promotioncategrory`
--

CREATE TABLE `tbl_promotioncategrory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Coefficient` double NOT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_promotioncategrory`
--

INSERT INTO `tbl_promotioncategrory` (`Id`, `Name`, `Coefficient`, `Deleted`) VALUES
(1, 'Sales Promotion', 16, 0),
(2, 'Discount Promotion', 5, 0),
(3, 'Birthday Promotion', 10, 0),
(4, 'Product Bundle Promotion', 7, 0),
(5, 'Flash Sale Promotion', 15, 0),
(6, 'Seasonal Promotion', 13, 0),
(7, 'Referral Promotion', 7, 0),
(8, 'Social Media Promotion', 7, 0),
(9, 'Email Marketing Promotion', 7, 0),
(10, 'Loyalty Program Promotion', 7, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_role`
--

CREATE TABLE `tbl_role` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_role`
--

INSERT INTO `tbl_role` (`Id`, `Name`, `Deleted`) VALUES
(1, 'Admin', 0),
(2, 'Employee', 0),
(3, 'Client', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_room`
--

CREATE TABLE `tbl_room` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Cinema_Id` int(11) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_room`
--

INSERT INTO `tbl_room` (`Id`, `Name`, `Cinema_Id`, `Deleted`) VALUES
(1, 'P2A1', 4, 0),
(2, 'P2A2', 1, 0),
(3, 'P3B1', 2, 0),
(4, 'P4C1', 5, 0),
(5, 'P5A1', 6, 0),
(6, 'P5B2', 7, 0),
(7, 'P6C3', 8, 0),
(8, 'P7A2', 2, 0),
(9, 'P8B1', 2, 0),
(10, 'P9C2', 2, 0),
(42, 'BKH3', 7, 1),
(43, 'HK34', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_seat`
--

CREATE TABLE `tbl_seat` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `SeatCategory_Id` int(11) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_seat`
--

INSERT INTO `tbl_seat` (`Id`, `Name`, `SeatCategory_Id`, `Deleted`) VALUES
(1, 'A21', 1, 0),
(2, 'B32', 2, 0),
(3, 'C43', 3, 0),
(4, 'D54', 4, 0),
(5, 'E65', 4, 0),
(6, 'F76', 2, 0),
(7, 'G87', 2, 0),
(8, 'H98', 1, 0),
(9, 'I09', 3, 0),
(10, 'J10', 3, 0),
(11, 'P04', 1, 0),
(12, 'C16', 4, 0),
(13, 'C08', 1, 0),
(14, 'K41', 2, 0),
(15, 'V69', 3, 0),
(16, 'P87', 4, 0),
(17, 'F46', 3, 0),
(18, 'W05', 4, 0),
(19, 'B02', 1, 0),
(20, 'H37', 1, 0),
(21, 'S41', 2, 0),
(22, 'K82', 3, 0),
(23, 'E11', 2, 0),
(24, 'F06', 1, 0),
(25, 'O44', 4, 0),
(26, 'A44', 3, 0),
(27, 'V30', 1, 0),
(28, 'W72', 4, 0),
(29, 'D40', 3, 0),
(30, 'L11', 3, 0),
(31, 'H76', 2, 0),
(32, 'M51', 1, 0),
(33, 'A79', 2, 0),
(34, 'Z84', 2, 0),
(35, 'A63', 4, 0),
(36, 'D09', 4, 0),
(37, 'V88', 3, 0),
(38, 'B01', 3, 0),
(39, 'O91', 4, 0),
(40, 'O31', 3, 0),
(41, 'R42', 4, 0),
(42, 'D75', 1, 0),
(43, 'J34', 1, 0),
(44, 'P58', 3, 0),
(45, 'D11', 2, 0),
(46, 'G25', 1, 0),
(47, 'O52', 3, 0),
(48, 'N50', 3, 0),
(49, 'K93', 4, 0),
(50, 'T94', 3, 0),
(51, 'L47', 3, 0),
(52, 'A00', 2, 0),
(53, 'Q01', 4, 0),
(54, 'I40', 4, 0),
(55, 'O05', 3, 0),
(56, 'Y22', 2, 0),
(57, 'I41', 2, 0),
(58, 'K08', 2, 0),
(59, 'D67', 4, 0),
(60, 'N79', 4, 0),
(61, 'B93', 1, 0),
(62, 'T27', 2, 0),
(63, 'B49', 3, 0),
(64, 'F11', 1, 0),
(65, 'V30', 3, 0),
(66, 'L54', 3, 0),
(67, 'Y77', 4, 0),
(68, 'P50', 2, 0),
(69, 'C13', 1, 0),
(70, 'H66', 4, 0),
(71, 'W48', 4, 0),
(72, 'L75', 2, 0),
(73, 'K76', 4, 0),
(74, 'M71', 4, 0),
(75, 'M94', 2, 0),
(76, 'Q85', 1, 0),
(78, 'A38', 1, 0),
(79, 'B93', 1, 0),
(80, 'W68', 2, 0),
(81, 'E73', 2, 0),
(83, 'F66', 2, 0),
(84, 'Q23', 1, 0),
(85, 'Q64', 2, 0),
(87, 'R82', 4, 0),
(88, 'K37', 4, 0),
(90, 'P23', 1, 0),
(92, 'O88', 2, 0),
(138, 'V65', 1, 0),
(139, 'D88', 1, 0),
(140, 'X84', 1, 0),
(148, 'W48', 3, 0),
(149, 'V66', 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_seatcategory`
--

CREATE TABLE `tbl_seatcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Coefficient` double DEFAULT 1,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_seatcategory`
--

INSERT INTO `tbl_seatcategory` (`Id`, `Name`, `Coefficient`, `Deleted`) VALUES
(1, 'A', 1.2, 0),
(2, 'B', 1.2, 0),
(3, 'C', 1.2, 0),
(4, 'D', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_seatroom`
--

CREATE TABLE `tbl_seatroom` (
  `Seat_Id` int(11) NOT NULL,
  `Room_Id` int(11) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_seatroom`
--

INSERT INTO `tbl_seatroom` (`Seat_Id`, `Room_Id`, `Status`, `Deleted`) VALUES
(1, 9, 1, 0),
(2, 1, 7, 0),
(3, 6, 10, 0),
(5, 1, 10, 0),
(5, 3, 2, 0),
(7, 2, 7, 0),
(7, 4, 10, 0),
(7, 6, 7, 0),
(8, 10, 7, 0),
(10, 8, 9, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_seatshowtime`
--

CREATE TABLE `tbl_seatshowtime` (
  `Seat_Id` int(11) NOT NULL,
  `Showtime_Id` int(11) NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_seatshowtime`
--

INSERT INTO `tbl_seatshowtime` (`Seat_Id`, `Showtime_Id`, `Status`) VALUES
(1, 6, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 0),
(1, 24, 0),
(1, 25, 0),
(1, 26, 0),
(1, 27, 0),
(1, 28, 0),
(1, 29, 0),
(1, 30, 0),
(1, 31, 0),
(1, 32, 0),
(1, 33, 0),
(1, 34, 0),
(1, 36, 0),
(1, 37, 0),
(1, 38, 0),
(1, 39, 0),
(2, 6, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 0),
(2, 21, 0),
(2, 22, 0),
(2, 23, 0),
(2, 24, 0),
(2, 25, 0),
(2, 26, 0),
(2, 27, 0),
(2, 28, 0),
(2, 29, 0),
(2, 30, 0),
(2, 31, 0),
(2, 32, 0),
(2, 33, 0),
(2, 34, 0),
(2, 36, 0),
(2, 37, 0),
(2, 38, 0),
(2, 39, 0),
(3, 6, 0),
(3, 14, 0),
(3, 15, 0),
(3, 16, 0),
(3, 17, 0),
(3, 18, 0),
(3, 19, 0),
(3, 20, 0),
(3, 21, 0),
(3, 22, 0),
(3, 23, 0),
(3, 24, 0),
(3, 25, 0),
(3, 26, 0),
(3, 27, 0),
(3, 28, 0),
(3, 29, 0),
(3, 30, 0),
(3, 31, 0),
(3, 32, 0),
(3, 33, 0),
(3, 34, 0),
(3, 36, 0),
(3, 37, 0),
(3, 38, 0),
(3, 39, 0),
(4, 6, 2),
(4, 14, 0),
(4, 15, 0),
(4, 16, 0),
(4, 17, 0),
(4, 18, 0),
(4, 19, 0),
(4, 20, 0),
(4, 21, 0),
(4, 22, 0),
(4, 23, 2),
(4, 24, 0),
(4, 25, 0),
(4, 26, 0),
(4, 27, 0),
(4, 28, 0),
(4, 29, 0),
(4, 30, 0),
(4, 31, 0),
(4, 32, 0),
(4, 33, 0),
(4, 34, 0),
(4, 36, 0),
(4, 37, 0),
(4, 38, 0),
(4, 39, 0),
(5, 6, 2),
(5, 14, 0),
(5, 15, 0),
(5, 16, 0),
(5, 17, 0),
(5, 18, 0),
(5, 19, 0),
(5, 20, 0),
(5, 21, 0),
(5, 22, 0),
(5, 23, 0),
(5, 24, 0),
(5, 25, 0),
(5, 26, 0),
(5, 27, 0),
(5, 28, 0),
(5, 29, 0),
(5, 30, 0),
(5, 31, 0),
(5, 32, 0),
(5, 33, 0),
(5, 34, 0),
(5, 36, 0),
(5, 37, 0),
(5, 38, 0),
(5, 39, 0),
(6, 6, 0),
(6, 14, 0),
(6, 15, 0),
(6, 16, 0),
(6, 17, 0),
(6, 18, 0),
(6, 19, 0),
(6, 20, 0),
(6, 21, 0),
(6, 22, 0),
(6, 23, 0),
(6, 24, 0),
(6, 25, 0),
(6, 26, 0),
(6, 27, 0),
(6, 28, 0),
(6, 29, 0),
(6, 30, 0),
(6, 31, 0),
(6, 32, 0),
(6, 33, 0),
(6, 34, 0),
(6, 36, 0),
(6, 37, 0),
(6, 38, 0),
(6, 39, 0),
(7, 6, 0),
(7, 14, 0),
(7, 15, 0),
(7, 16, 0),
(7, 17, 0),
(7, 18, 0),
(7, 19, 0),
(7, 20, 0),
(7, 21, 0),
(7, 22, 0),
(7, 23, 0),
(7, 24, 0),
(7, 25, 0),
(7, 26, 0),
(7, 27, 0),
(7, 28, 0),
(7, 29, 0),
(7, 30, 0),
(7, 31, 0),
(7, 32, 0),
(7, 33, 0),
(7, 34, 0),
(7, 36, 0),
(7, 37, 0),
(7, 38, 0),
(7, 39, 0),
(8, 6, 0),
(8, 14, 0),
(8, 15, 0),
(8, 16, 0),
(8, 17, 0),
(8, 18, 0),
(8, 19, 0),
(8, 20, 0),
(8, 21, 0),
(8, 22, 0),
(8, 23, 0),
(8, 24, 0),
(8, 25, 0),
(8, 26, 0),
(8, 27, 0),
(8, 28, 0),
(8, 29, 0),
(8, 30, 0),
(8, 31, 0),
(8, 32, 0),
(8, 33, 0),
(8, 34, 0),
(8, 36, 0),
(8, 37, 0),
(8, 38, 0),
(8, 39, 0),
(9, 6, 0),
(9, 14, 0),
(9, 15, 0),
(9, 16, 0),
(9, 17, 0),
(9, 18, 0),
(9, 19, 0),
(9, 20, 0),
(9, 21, 0),
(9, 22, 0),
(9, 23, 0),
(9, 24, 0),
(9, 25, 0),
(9, 26, 0),
(9, 27, 0),
(9, 28, 0),
(9, 29, 0),
(9, 30, 0),
(9, 31, 0),
(9, 32, 0),
(9, 33, 0),
(9, 34, 0),
(9, 36, 0),
(9, 37, 0),
(9, 38, 0),
(9, 39, 0),
(10, 6, 0),
(10, 14, 0),
(10, 15, 0),
(10, 16, 0),
(10, 17, 0),
(10, 18, 0),
(10, 19, 0),
(10, 20, 0),
(10, 21, 0),
(10, 22, 0),
(10, 23, 0),
(10, 24, 0),
(10, 25, 0),
(10, 26, 0),
(10, 27, 0),
(10, 28, 0),
(10, 29, 0),
(10, 30, 0),
(10, 31, 0),
(10, 32, 0),
(10, 33, 0),
(10, 34, 0),
(10, 36, 0),
(10, 37, 0),
(10, 38, 0),
(10, 39, 0),
(11, 6, 0),
(11, 14, 0),
(11, 15, 0),
(11, 16, 0),
(11, 17, 0),
(11, 18, 0),
(11, 19, 0),
(11, 20, 0),
(11, 21, 0),
(11, 22, 0),
(11, 23, 0),
(11, 24, 0),
(11, 25, 0),
(11, 26, 0),
(11, 27, 0),
(11, 28, 0),
(11, 29, 0),
(11, 30, 0),
(11, 31, 0),
(11, 32, 0),
(11, 33, 0),
(11, 34, 0),
(11, 36, 0),
(11, 37, 0),
(11, 38, 0),
(11, 39, 0),
(12, 6, 2),
(12, 14, 0),
(12, 15, 0),
(12, 16, 0),
(12, 17, 0),
(12, 18, 0),
(12, 19, 0),
(12, 20, 0),
(12, 21, 0),
(12, 22, 0),
(12, 23, 0),
(12, 24, 0),
(12, 25, 0),
(12, 26, 0),
(12, 27, 0),
(12, 28, 0),
(12, 29, 0),
(12, 30, 0),
(12, 31, 0),
(12, 32, 0),
(12, 33, 0),
(12, 34, 0),
(12, 36, 0),
(12, 37, 0),
(12, 38, 0),
(12, 39, 0),
(13, 6, 0),
(13, 14, 0),
(13, 15, 0),
(13, 16, 0),
(13, 17, 0),
(13, 18, 0),
(13, 19, 0),
(13, 20, 0),
(13, 21, 0),
(13, 22, 0),
(13, 23, 0),
(13, 24, 0),
(13, 25, 0),
(13, 26, 0),
(13, 27, 0),
(13, 28, 0),
(13, 29, 0),
(13, 30, 0),
(13, 31, 0),
(13, 32, 0),
(13, 33, 0),
(13, 34, 0),
(13, 36, 0),
(13, 37, 0),
(13, 38, 0),
(13, 39, 0),
(14, 6, 0),
(14, 14, 0),
(14, 15, 0),
(14, 16, 0),
(14, 17, 0),
(14, 18, 0),
(14, 19, 0),
(14, 20, 0),
(14, 21, 0),
(14, 22, 0),
(14, 23, 0),
(14, 24, 0),
(14, 25, 0),
(14, 26, 0),
(14, 27, 0),
(14, 28, 0),
(14, 29, 0),
(14, 30, 0),
(14, 31, 0),
(14, 32, 0),
(14, 33, 0),
(14, 34, 0),
(14, 36, 0),
(14, 37, 0),
(14, 38, 0),
(14, 39, 0),
(15, 6, 0),
(15, 14, 0),
(15, 15, 0),
(15, 16, 0),
(15, 17, 0),
(15, 18, 0),
(15, 19, 0),
(15, 20, 0),
(15, 21, 0),
(15, 22, 0),
(15, 23, 0),
(15, 24, 0),
(15, 25, 0),
(15, 26, 0),
(15, 27, 0),
(15, 28, 0),
(15, 29, 0),
(15, 30, 0),
(15, 31, 0),
(15, 32, 0),
(15, 33, 0),
(15, 34, 0),
(15, 36, 0),
(15, 37, 0),
(15, 38, 0),
(15, 39, 0),
(16, 6, 2),
(16, 14, 0),
(16, 15, 0),
(16, 16, 0),
(16, 17, 0),
(16, 18, 0),
(16, 19, 0),
(16, 20, 0),
(16, 21, 0),
(16, 22, 0),
(16, 23, 0),
(16, 24, 0),
(16, 25, 0),
(16, 26, 0),
(16, 27, 0),
(16, 28, 0),
(16, 29, 0),
(16, 30, 0),
(16, 31, 0),
(16, 32, 0),
(16, 33, 0),
(16, 34, 0),
(16, 36, 0),
(16, 37, 0),
(16, 38, 0),
(16, 39, 0),
(17, 6, 0),
(17, 14, 0),
(17, 15, 0),
(17, 16, 0),
(17, 17, 0),
(17, 18, 0),
(17, 19, 0),
(17, 20, 0),
(17, 21, 0),
(17, 22, 0),
(17, 23, 0),
(17, 24, 0),
(17, 25, 0),
(17, 26, 0),
(17, 27, 0),
(17, 28, 0),
(17, 29, 0),
(17, 30, 0),
(17, 31, 0),
(17, 32, 0),
(17, 33, 0),
(17, 34, 0),
(17, 36, 0),
(17, 37, 0),
(17, 38, 0),
(17, 39, 0),
(18, 6, 1),
(18, 14, 0),
(18, 15, 0),
(18, 16, 2),
(18, 17, 0),
(18, 18, 0),
(18, 19, 0),
(18, 20, 0),
(18, 21, 0),
(18, 22, 0),
(18, 23, 0),
(18, 24, 0),
(18, 25, 0),
(18, 26, 0),
(18, 27, 0),
(18, 28, 0),
(18, 29, 0),
(18, 30, 0),
(18, 31, 0),
(18, 32, 0),
(18, 33, 2),
(18, 34, 0),
(18, 36, 0),
(18, 37, 0),
(18, 38, 0),
(18, 39, 0),
(19, 6, 0),
(19, 14, 0),
(19, 15, 0),
(19, 16, 0),
(19, 17, 0),
(19, 18, 0),
(19, 19, 0),
(19, 20, 0),
(19, 21, 0),
(19, 22, 0),
(19, 23, 0),
(19, 24, 0),
(19, 25, 0),
(19, 26, 0),
(19, 27, 0),
(19, 28, 0),
(19, 29, 0),
(19, 30, 0),
(19, 31, 0),
(19, 32, 0),
(19, 33, 0),
(19, 34, 0),
(19, 36, 0),
(19, 37, 0),
(19, 38, 0),
(19, 39, 0),
(20, 6, 0),
(20, 14, 0),
(20, 15, 0),
(20, 16, 0),
(20, 17, 0),
(20, 18, 0),
(20, 19, 0),
(20, 20, 0),
(20, 21, 0),
(20, 22, 0),
(20, 23, 0),
(20, 24, 0),
(20, 25, 0),
(20, 26, 0),
(20, 27, 0),
(20, 28, 0),
(20, 29, 0),
(20, 30, 0),
(20, 31, 0),
(20, 32, 0),
(20, 33, 0),
(20, 34, 0),
(20, 36, 0),
(20, 37, 0),
(20, 38, 0),
(20, 39, 0),
(21, 6, 0),
(21, 14, 0),
(21, 15, 0),
(21, 16, 0),
(21, 17, 0),
(21, 18, 0),
(21, 19, 0),
(21, 20, 0),
(21, 21, 0),
(21, 22, 0),
(21, 23, 0),
(21, 24, 0),
(21, 25, 0),
(21, 26, 0),
(21, 27, 0),
(21, 28, 0),
(21, 29, 0),
(21, 30, 0),
(21, 31, 0),
(21, 32, 0),
(21, 33, 0),
(21, 34, 0),
(21, 36, 0),
(21, 37, 0),
(21, 38, 0),
(21, 39, 0),
(22, 6, 2),
(22, 14, 0),
(22, 15, 0),
(22, 16, 0),
(22, 17, 0),
(22, 18, 0),
(22, 19, 0),
(22, 20, 0),
(22, 21, 0),
(22, 22, 0),
(22, 23, 2),
(22, 24, 0),
(22, 25, 0),
(22, 26, 0),
(22, 27, 0),
(22, 28, 0),
(22, 29, 0),
(22, 30, 0),
(22, 31, 0),
(22, 32, 0),
(22, 33, 0),
(22, 34, 0),
(22, 36, 0),
(22, 37, 0),
(22, 38, 0),
(22, 39, 0),
(23, 6, 0),
(23, 14, 0),
(23, 15, 0),
(23, 16, 0),
(23, 17, 0),
(23, 18, 0),
(23, 19, 0),
(23, 20, 0),
(23, 21, 0),
(23, 22, 0),
(23, 23, 0),
(23, 24, 0),
(23, 25, 0),
(23, 26, 0),
(23, 27, 0),
(23, 28, 0),
(23, 29, 0),
(23, 30, 0),
(23, 31, 0),
(23, 32, 0),
(23, 33, 0),
(23, 34, 0),
(23, 36, 0),
(23, 37, 0),
(23, 38, 0),
(23, 39, 0),
(24, 6, 0),
(24, 14, 0),
(24, 15, 0),
(24, 16, 0),
(24, 17, 0),
(24, 18, 0),
(24, 19, 0),
(24, 20, 0),
(24, 21, 0),
(24, 22, 0),
(24, 23, 0),
(24, 24, 0),
(24, 25, 0),
(24, 26, 0),
(24, 27, 0),
(24, 28, 0),
(24, 29, 0),
(24, 30, 0),
(24, 31, 0),
(24, 32, 0),
(24, 33, 0),
(24, 34, 0),
(24, 36, 0),
(24, 37, 0),
(24, 38, 0),
(24, 39, 0),
(25, 6, 1),
(25, 14, 0),
(25, 15, 0),
(25, 16, 0),
(25, 17, 0),
(25, 18, 0),
(25, 19, 0),
(25, 20, 0),
(25, 21, 0),
(25, 22, 0),
(25, 23, 0),
(25, 24, 0),
(25, 25, 0),
(25, 26, 0),
(25, 27, 0),
(25, 28, 0),
(25, 29, 0),
(25, 30, 0),
(25, 31, 0),
(25, 32, 0),
(25, 33, 0),
(25, 34, 0),
(25, 36, 0),
(25, 37, 0),
(25, 38, 0),
(25, 39, 0),
(26, 6, 2),
(26, 14, 0),
(26, 15, 0),
(26, 16, 0),
(26, 17, 0),
(26, 18, 0),
(26, 19, 0),
(26, 20, 0),
(26, 21, 0),
(26, 22, 0),
(26, 23, 0),
(26, 24, 0),
(26, 25, 0),
(26, 26, 0),
(26, 27, 0),
(26, 28, 0),
(26, 29, 0),
(26, 30, 0),
(26, 31, 0),
(26, 32, 0),
(26, 33, 0),
(26, 34, 0),
(26, 36, 0),
(26, 37, 0),
(26, 38, 0),
(26, 39, 0),
(27, 6, 0),
(27, 14, 0),
(27, 15, 0),
(27, 16, 0),
(27, 17, 0),
(27, 18, 0),
(27, 19, 0),
(27, 20, 0),
(27, 21, 0),
(27, 22, 0),
(27, 23, 0),
(27, 24, 0),
(27, 25, 0),
(27, 26, 0),
(27, 27, 0),
(27, 28, 0),
(27, 29, 0),
(27, 30, 0),
(27, 31, 0),
(27, 32, 0),
(27, 33, 0),
(27, 34, 0),
(27, 36, 0),
(27, 37, 0),
(27, 38, 0),
(27, 39, 0),
(28, 6, 1),
(28, 14, 0),
(28, 15, 0),
(28, 16, 0),
(28, 17, 0),
(28, 18, 0),
(28, 19, 0),
(28, 20, 0),
(28, 21, 0),
(28, 22, 0),
(28, 23, 0),
(28, 24, 0),
(28, 25, 0),
(28, 26, 0),
(28, 27, 0),
(28, 28, 0),
(28, 29, 0),
(28, 30, 0),
(28, 31, 0),
(28, 32, 0),
(28, 33, 0),
(28, 34, 0),
(28, 36, 0),
(28, 37, 0),
(28, 38, 0),
(28, 39, 0),
(29, 6, 0),
(29, 14, 0),
(29, 15, 0),
(29, 16, 0),
(29, 17, 0),
(29, 18, 0),
(29, 19, 0),
(29, 20, 0),
(29, 21, 0),
(29, 22, 0),
(29, 23, 0),
(29, 24, 0),
(29, 25, 0),
(29, 26, 0),
(29, 27, 0),
(29, 28, 0),
(29, 29, 0),
(29, 30, 0),
(29, 31, 0),
(29, 32, 0),
(29, 33, 0),
(29, 34, 0),
(29, 36, 0),
(29, 37, 0),
(29, 38, 0),
(29, 39, 0),
(30, 6, 0),
(30, 14, 0),
(30, 15, 0),
(30, 16, 0),
(30, 17, 0),
(30, 18, 0),
(30, 19, 0),
(30, 20, 0),
(30, 21, 0),
(30, 22, 0),
(30, 23, 0),
(30, 24, 0),
(30, 25, 0),
(30, 26, 0),
(30, 27, 0),
(30, 28, 0),
(30, 29, 0),
(30, 30, 0),
(30, 31, 0),
(30, 32, 0),
(30, 33, 0),
(30, 34, 0),
(30, 36, 0),
(30, 37, 0),
(30, 38, 0),
(30, 39, 0),
(31, 6, 0),
(31, 14, 0),
(31, 15, 0),
(31, 16, 0),
(31, 17, 0),
(31, 18, 0),
(31, 19, 0),
(31, 20, 0),
(31, 21, 0),
(31, 22, 0),
(31, 23, 0),
(31, 24, 0),
(31, 25, 0),
(31, 26, 0),
(31, 27, 0),
(31, 28, 0),
(31, 29, 0),
(31, 30, 0),
(31, 31, 0),
(31, 32, 0),
(31, 33, 0),
(31, 34, 0),
(31, 36, 0),
(31, 37, 0),
(31, 38, 0),
(31, 39, 0),
(32, 6, 0),
(32, 14, 0),
(32, 15, 0),
(32, 16, 0),
(32, 17, 0),
(32, 18, 0),
(32, 19, 0),
(32, 20, 0),
(32, 21, 0),
(32, 22, 0),
(32, 23, 0),
(32, 24, 0),
(32, 25, 0),
(32, 26, 0),
(32, 27, 0),
(32, 28, 0),
(32, 29, 0),
(32, 30, 0),
(32, 31, 0),
(32, 32, 0),
(32, 33, 0),
(32, 34, 0),
(32, 36, 0),
(32, 37, 0),
(32, 38, 0),
(32, 39, 0),
(33, 6, 0),
(33, 14, 0),
(33, 15, 0),
(33, 16, 0),
(33, 17, 0),
(33, 18, 0),
(33, 19, 0),
(33, 20, 0),
(33, 21, 0),
(33, 22, 0),
(33, 23, 0),
(33, 24, 0),
(33, 25, 0),
(33, 26, 0),
(33, 27, 0),
(33, 28, 0),
(33, 29, 0),
(33, 30, 0),
(33, 31, 0),
(33, 32, 0),
(33, 33, 0),
(33, 34, 0),
(33, 36, 0),
(33, 37, 0),
(33, 38, 0),
(33, 39, 0),
(34, 6, 0),
(34, 14, 0),
(34, 15, 0),
(34, 16, 0),
(34, 17, 0),
(34, 18, 0),
(34, 19, 0),
(34, 20, 0),
(34, 21, 0),
(34, 22, 0),
(34, 23, 0),
(34, 24, 0),
(34, 25, 0),
(34, 26, 0),
(34, 27, 0),
(34, 28, 0),
(34, 29, 0),
(34, 30, 0),
(34, 31, 0),
(34, 32, 0),
(34, 33, 0),
(34, 34, 0),
(34, 36, 0),
(34, 37, 0),
(34, 38, 0),
(34, 39, 0),
(35, 6, 2),
(35, 14, 0),
(35, 15, 0),
(35, 16, 0),
(35, 17, 0),
(35, 18, 0),
(35, 19, 0),
(35, 20, 0),
(35, 21, 0),
(35, 22, 0),
(35, 23, 0),
(35, 24, 0),
(35, 25, 0),
(35, 26, 0),
(35, 27, 0),
(35, 28, 0),
(35, 29, 0),
(35, 30, 0),
(35, 31, 0),
(35, 32, 0),
(35, 33, 0),
(35, 34, 0),
(35, 36, 0),
(35, 37, 0),
(35, 38, 0),
(35, 39, 0),
(36, 6, 2),
(36, 14, 0),
(36, 15, 0),
(36, 16, 0),
(36, 17, 0),
(36, 18, 0),
(36, 19, 0),
(36, 20, 0),
(36, 21, 0),
(36, 22, 0),
(36, 23, 0),
(36, 24, 0),
(36, 25, 0),
(36, 26, 0),
(36, 27, 2),
(36, 28, 0),
(36, 29, 0),
(36, 30, 0),
(36, 31, 0),
(36, 32, 0),
(36, 33, 0),
(36, 34, 0),
(36, 36, 0),
(36, 37, 0),
(36, 38, 0),
(36, 39, 0),
(37, 6, 2),
(37, 14, 0),
(37, 15, 0),
(37, 16, 0),
(37, 17, 0),
(37, 18, 0),
(37, 19, 0),
(37, 20, 0),
(37, 21, 0),
(37, 22, 0),
(37, 23, 0),
(37, 24, 0),
(37, 25, 0),
(37, 26, 0),
(37, 27, 0),
(37, 28, 0),
(37, 29, 0),
(37, 30, 0),
(37, 31, 0),
(37, 32, 0),
(37, 33, 0),
(37, 34, 0),
(37, 36, 0),
(37, 37, 0),
(37, 38, 0),
(37, 39, 0),
(38, 6, 0),
(38, 14, 0),
(38, 15, 0),
(38, 16, 0),
(38, 17, 0),
(38, 18, 0),
(38, 19, 0),
(38, 20, 0),
(38, 21, 0),
(38, 22, 0),
(38, 23, 0),
(38, 24, 0),
(38, 25, 0),
(38, 26, 0),
(38, 27, 0),
(38, 28, 0),
(38, 29, 0),
(38, 30, 0),
(38, 31, 0),
(38, 32, 0),
(38, 33, 0),
(38, 34, 0),
(38, 36, 0),
(38, 37, 0),
(38, 38, 0),
(38, 39, 0),
(39, 6, 2),
(39, 14, 0),
(39, 15, 0),
(39, 16, 0),
(39, 17, 2),
(39, 18, 0),
(39, 19, 0),
(39, 20, 0),
(39, 21, 0),
(39, 22, 0),
(39, 23, 0),
(39, 24, 0),
(39, 25, 0),
(39, 26, 0),
(39, 27, 0),
(39, 28, 0),
(39, 29, 0),
(39, 30, 0),
(39, 31, 0),
(39, 32, 0),
(39, 33, 0),
(39, 34, 0),
(39, 36, 0),
(39, 37, 0),
(39, 38, 2),
(39, 39, 2),
(40, 6, 2),
(40, 14, 0),
(40, 15, 0),
(40, 16, 0),
(40, 17, 0),
(40, 18, 0),
(40, 19, 0),
(40, 20, 0),
(40, 21, 0),
(40, 22, 0),
(40, 23, 0),
(40, 24, 0),
(40, 25, 0),
(40, 26, 0),
(40, 27, 0),
(40, 28, 0),
(40, 29, 0),
(40, 30, 0),
(40, 31, 0),
(40, 32, 0),
(40, 33, 0),
(40, 34, 0),
(40, 36, 0),
(40, 37, 0),
(40, 38, 0),
(40, 39, 0),
(41, 6, 2),
(41, 14, 2),
(41, 15, 0),
(41, 16, 0),
(41, 17, 2),
(41, 18, 0),
(41, 19, 0),
(41, 20, 0),
(41, 21, 0),
(41, 22, 0),
(41, 23, 0),
(41, 24, 0),
(41, 25, 0),
(41, 26, 0),
(41, 27, 2),
(41, 28, 0),
(41, 29, 0),
(41, 30, 0),
(41, 31, 0),
(41, 32, 0),
(41, 33, 0),
(41, 34, 0),
(41, 36, 0),
(41, 37, 2),
(41, 38, 0),
(41, 39, 0),
(42, 6, 0),
(42, 14, 0),
(42, 15, 0),
(42, 16, 0),
(42, 17, 0),
(42, 18, 0),
(42, 19, 0),
(42, 20, 0),
(42, 21, 0),
(42, 22, 0),
(42, 23, 0),
(42, 24, 0),
(42, 25, 0),
(42, 26, 0),
(42, 27, 0),
(42, 28, 0),
(42, 29, 0),
(42, 30, 0),
(42, 31, 0),
(42, 32, 0),
(42, 33, 0),
(42, 34, 0),
(42, 36, 0),
(42, 37, 0),
(42, 38, 0),
(42, 39, 0),
(43, 6, 0),
(43, 14, 0),
(43, 15, 0),
(43, 16, 0),
(43, 17, 0),
(43, 18, 0),
(43, 19, 0),
(43, 20, 0),
(43, 21, 0),
(43, 22, 0),
(43, 23, 0),
(43, 24, 0),
(43, 25, 0),
(43, 26, 0),
(43, 27, 0),
(43, 28, 0),
(43, 29, 0),
(43, 30, 0),
(43, 31, 0),
(43, 32, 0),
(43, 33, 0),
(43, 34, 0),
(43, 36, 0),
(43, 37, 0),
(43, 38, 0),
(43, 39, 0),
(44, 6, 0),
(44, 14, 0),
(44, 15, 0),
(44, 16, 0),
(44, 17, 0),
(44, 18, 0),
(44, 19, 0),
(44, 20, 0),
(44, 21, 0),
(44, 22, 0),
(44, 23, 0),
(44, 24, 0),
(44, 25, 0),
(44, 26, 0),
(44, 27, 0),
(44, 28, 0),
(44, 29, 0),
(44, 30, 0),
(44, 31, 0),
(44, 32, 0),
(44, 33, 0),
(44, 34, 0),
(44, 36, 0),
(44, 37, 0),
(44, 38, 0),
(44, 39, 0),
(45, 6, 0),
(45, 14, 0),
(45, 15, 0),
(45, 16, 0),
(45, 17, 0),
(45, 18, 0),
(45, 19, 0),
(45, 20, 0),
(45, 21, 0),
(45, 22, 0),
(45, 23, 0),
(45, 24, 0),
(45, 25, 0),
(45, 26, 0),
(45, 27, 0),
(45, 28, 0),
(45, 29, 0),
(45, 30, 0),
(45, 31, 0),
(45, 32, 0),
(45, 33, 0),
(45, 34, 0),
(45, 36, 0),
(45, 37, 0),
(45, 38, 0),
(45, 39, 0),
(46, 6, 0),
(46, 14, 0),
(46, 15, 0),
(46, 16, 0),
(46, 17, 0),
(46, 18, 0),
(46, 19, 0),
(46, 20, 0),
(46, 21, 0),
(46, 22, 0),
(46, 23, 0),
(46, 24, 0),
(46, 25, 0),
(46, 26, 0),
(46, 27, 0),
(46, 28, 0),
(46, 29, 0),
(46, 30, 0),
(46, 31, 0),
(46, 32, 0),
(46, 33, 0),
(46, 34, 0),
(46, 36, 0),
(46, 37, 0),
(46, 38, 0),
(46, 39, 0),
(47, 6, 0),
(47, 14, 0),
(47, 15, 0),
(47, 16, 0),
(47, 17, 0),
(47, 18, 0),
(47, 19, 0),
(47, 20, 0),
(47, 21, 0),
(47, 22, 0),
(47, 23, 0),
(47, 24, 0),
(47, 25, 0),
(47, 26, 0),
(47, 27, 0),
(47, 28, 0),
(47, 29, 0),
(47, 30, 0),
(47, 31, 0),
(47, 32, 0),
(47, 33, 0),
(47, 34, 0),
(47, 36, 0),
(47, 37, 0),
(47, 38, 0),
(47, 39, 0),
(48, 6, 0),
(48, 14, 0),
(48, 15, 0),
(48, 16, 0),
(48, 17, 0),
(48, 18, 0),
(48, 19, 0),
(48, 20, 0),
(48, 21, 0),
(48, 22, 0),
(48, 23, 0),
(48, 24, 0),
(48, 25, 0),
(48, 26, 0),
(48, 27, 0),
(48, 28, 0),
(48, 29, 0),
(48, 30, 0),
(48, 31, 0),
(48, 32, 0),
(48, 33, 0),
(48, 34, 0),
(48, 36, 0),
(48, 37, 0),
(48, 38, 0),
(48, 39, 0),
(49, 6, 2),
(49, 14, 2),
(49, 15, 0),
(49, 16, 0),
(49, 17, 0),
(49, 18, 0),
(49, 19, 0),
(49, 20, 0),
(49, 21, 0),
(49, 22, 0),
(49, 23, 0),
(49, 24, 0),
(49, 25, 0),
(49, 26, 0),
(49, 27, 0),
(49, 28, 0),
(49, 29, 0),
(49, 30, 0),
(49, 31, 0),
(49, 32, 0),
(49, 33, 0),
(49, 34, 0),
(49, 36, 0),
(49, 37, 2),
(49, 38, 0),
(49, 39, 2),
(50, 6, 0),
(50, 14, 0),
(50, 15, 0),
(50, 16, 0),
(50, 17, 0),
(50, 18, 0),
(50, 19, 0),
(50, 20, 0),
(50, 21, 0),
(50, 22, 0),
(50, 23, 0),
(50, 24, 0),
(50, 25, 0),
(50, 26, 0),
(50, 27, 0),
(50, 28, 0),
(50, 29, 0),
(50, 30, 0),
(50, 31, 0),
(50, 32, 0),
(50, 33, 0),
(50, 34, 0),
(50, 36, 0),
(50, 37, 0),
(50, 38, 0),
(50, 39, 0),
(51, 6, 0),
(51, 14, 0),
(51, 15, 0),
(51, 16, 0),
(51, 17, 0),
(51, 18, 0),
(51, 19, 0),
(51, 20, 0),
(51, 21, 0),
(51, 22, 0),
(51, 23, 0),
(51, 24, 0),
(51, 25, 0),
(51, 26, 0),
(51, 27, 0),
(51, 28, 0),
(51, 29, 0),
(51, 30, 0),
(51, 31, 0),
(51, 32, 0),
(51, 33, 0),
(51, 34, 0),
(51, 36, 0),
(51, 37, 0),
(51, 38, 0),
(51, 39, 0),
(52, 6, 0),
(52, 14, 0),
(52, 15, 0),
(52, 16, 0),
(52, 17, 0),
(52, 18, 0),
(52, 19, 0),
(52, 20, 0),
(52, 21, 0),
(52, 22, 0),
(52, 23, 0),
(52, 24, 0),
(52, 25, 0),
(52, 26, 0),
(52, 27, 0),
(52, 28, 0),
(52, 29, 0),
(52, 30, 0),
(52, 31, 0),
(52, 32, 0),
(52, 33, 0),
(52, 34, 0),
(52, 36, 0),
(52, 37, 0),
(52, 38, 0),
(52, 39, 0),
(53, 6, 2),
(53, 14, 0),
(53, 15, 0),
(53, 16, 0),
(53, 17, 0),
(53, 18, 0),
(53, 19, 0),
(53, 20, 0),
(53, 21, 0),
(53, 22, 0),
(53, 23, 0),
(53, 24, 0),
(53, 25, 0),
(53, 26, 0),
(53, 27, 0),
(53, 28, 0),
(53, 29, 0),
(53, 30, 0),
(53, 31, 0),
(53, 32, 0),
(53, 33, 0),
(53, 34, 0),
(53, 36, 0),
(53, 37, 2),
(53, 38, 0),
(53, 39, 0),
(54, 6, 2),
(54, 14, 0),
(54, 15, 0),
(54, 16, 0),
(54, 17, 0),
(54, 18, 0),
(54, 19, 0),
(54, 20, 0),
(54, 21, 0),
(54, 22, 0),
(54, 23, 0),
(54, 24, 0),
(54, 25, 0),
(54, 26, 0),
(54, 27, 0),
(54, 28, 0),
(54, 29, 0),
(54, 30, 0),
(54, 31, 0),
(54, 32, 0),
(54, 33, 0),
(54, 34, 0),
(54, 36, 0),
(54, 37, 0),
(54, 38, 0),
(54, 39, 0),
(55, 6, 0),
(55, 14, 0),
(55, 15, 0),
(55, 16, 0),
(55, 17, 0),
(55, 18, 0),
(55, 19, 0),
(55, 20, 0),
(55, 21, 0),
(55, 22, 0),
(55, 23, 0),
(55, 24, 0),
(55, 25, 0),
(55, 26, 0),
(55, 27, 0),
(55, 28, 0),
(55, 29, 0),
(55, 30, 0),
(55, 31, 0),
(55, 32, 0),
(55, 33, 0),
(55, 34, 0),
(55, 36, 0),
(55, 37, 0),
(55, 38, 0),
(55, 39, 0),
(56, 6, 0),
(56, 14, 0),
(56, 15, 0),
(56, 16, 0),
(56, 17, 0),
(56, 18, 0),
(56, 19, 0),
(56, 20, 0),
(56, 21, 0),
(56, 22, 0),
(56, 23, 0),
(56, 24, 0),
(56, 25, 0),
(56, 26, 0),
(56, 27, 0),
(56, 28, 0),
(56, 29, 0),
(56, 30, 0),
(56, 31, 0),
(56, 32, 0),
(56, 33, 0),
(56, 34, 0),
(56, 36, 0),
(56, 37, 0),
(56, 38, 0),
(56, 39, 0),
(57, 6, 0),
(57, 14, 0),
(57, 15, 0),
(57, 16, 0),
(57, 17, 0),
(57, 18, 0),
(57, 19, 0),
(57, 20, 0),
(57, 21, 0),
(57, 22, 0),
(57, 23, 0),
(57, 24, 0),
(57, 25, 0),
(57, 26, 0),
(57, 27, 0),
(57, 28, 0),
(57, 29, 0),
(57, 30, 0),
(57, 31, 0),
(57, 32, 0),
(57, 33, 0),
(57, 34, 0),
(57, 36, 0),
(57, 37, 0),
(57, 38, 0),
(57, 39, 0),
(58, 6, 0),
(58, 14, 0),
(58, 15, 0),
(58, 16, 0),
(58, 17, 0),
(58, 18, 0),
(58, 19, 0),
(58, 20, 0),
(58, 21, 0),
(58, 22, 0),
(58, 23, 0),
(58, 24, 0),
(58, 25, 0),
(58, 26, 0),
(58, 27, 0),
(58, 28, 0),
(58, 29, 0),
(58, 30, 0),
(58, 31, 0),
(58, 32, 0),
(58, 33, 0),
(58, 34, 0),
(58, 36, 0),
(58, 37, 0),
(58, 38, 0),
(58, 39, 0),
(59, 6, 2),
(59, 14, 0),
(59, 15, 0),
(59, 16, 0),
(59, 17, 0),
(59, 18, 0),
(59, 19, 0),
(59, 20, 0),
(59, 21, 0),
(59, 22, 0),
(59, 23, 0),
(59, 24, 0),
(59, 25, 0),
(59, 26, 0),
(59, 27, 0),
(59, 28, 0),
(59, 29, 0),
(59, 30, 0),
(59, 31, 0),
(59, 32, 0),
(59, 33, 0),
(59, 34, 0),
(59, 36, 0),
(59, 37, 0),
(59, 38, 0),
(59, 39, 0),
(60, 6, 2),
(60, 14, 0),
(60, 15, 0),
(60, 16, 0),
(60, 17, 0),
(60, 18, 0),
(60, 19, 0),
(60, 20, 0),
(60, 21, 0),
(60, 22, 0),
(60, 23, 0),
(60, 24, 0),
(60, 25, 0),
(60, 26, 0),
(60, 27, 0),
(60, 28, 0),
(60, 29, 0),
(60, 30, 0),
(60, 31, 0),
(60, 32, 0),
(60, 33, 0),
(60, 34, 0),
(60, 36, 0),
(60, 37, 0),
(60, 38, 0),
(60, 39, 0),
(61, 6, 0),
(61, 14, 0),
(61, 15, 0),
(61, 16, 0),
(61, 17, 0),
(61, 18, 0),
(61, 19, 0),
(61, 20, 0),
(61, 21, 0),
(61, 22, 0),
(61, 23, 0),
(61, 24, 0),
(61, 25, 0),
(61, 26, 0),
(61, 27, 0),
(61, 28, 0),
(61, 29, 0),
(61, 30, 0),
(61, 31, 0),
(61, 32, 0),
(61, 33, 0),
(61, 34, 0),
(61, 36, 0),
(61, 37, 0),
(61, 38, 0),
(61, 39, 0),
(62, 6, 0),
(62, 14, 0),
(62, 15, 0),
(62, 16, 0),
(62, 17, 0),
(62, 18, 0),
(62, 19, 0),
(62, 20, 0),
(62, 21, 0),
(62, 22, 0),
(62, 23, 0),
(62, 24, 0),
(62, 25, 0),
(62, 26, 0),
(62, 27, 0),
(62, 28, 0),
(62, 29, 0),
(62, 30, 0),
(62, 31, 0),
(62, 32, 0),
(62, 33, 0),
(62, 34, 0),
(62, 36, 0),
(62, 37, 0),
(62, 38, 0),
(62, 39, 0),
(63, 6, 0),
(63, 14, 0),
(63, 15, 0),
(63, 16, 0),
(63, 17, 0),
(63, 18, 0),
(63, 19, 0),
(63, 20, 0),
(63, 21, 0),
(63, 22, 0),
(63, 23, 0),
(63, 24, 0),
(63, 25, 0),
(63, 26, 0),
(63, 27, 0),
(63, 28, 0),
(63, 29, 0),
(63, 30, 0),
(63, 31, 0),
(63, 32, 0),
(63, 33, 0),
(63, 34, 0),
(63, 36, 0),
(63, 37, 0),
(63, 38, 0),
(63, 39, 0),
(64, 6, 0),
(64, 14, 0),
(64, 15, 0),
(64, 16, 0),
(64, 17, 0),
(64, 18, 0),
(64, 19, 0),
(64, 20, 0),
(64, 21, 0),
(64, 22, 0),
(64, 23, 0),
(64, 24, 0),
(64, 25, 0),
(64, 26, 0),
(64, 27, 0),
(64, 28, 0),
(64, 29, 0),
(64, 30, 0),
(64, 31, 0),
(64, 32, 0),
(64, 33, 0),
(64, 34, 0),
(64, 36, 0),
(64, 37, 0),
(64, 38, 0),
(64, 39, 0),
(65, 6, 0),
(65, 14, 0),
(65, 15, 0),
(65, 16, 0),
(65, 17, 0),
(65, 18, 0),
(65, 19, 0),
(65, 20, 0),
(65, 21, 0),
(65, 22, 0),
(65, 23, 0),
(65, 24, 0),
(65, 25, 0),
(65, 26, 0),
(65, 27, 0),
(65, 28, 0),
(65, 29, 0),
(65, 30, 0),
(65, 31, 0),
(65, 32, 0),
(65, 33, 0),
(65, 34, 0),
(65, 36, 0),
(65, 37, 0),
(65, 38, 0),
(65, 39, 0),
(66, 6, 0),
(66, 14, 0),
(66, 15, 0),
(66, 16, 0),
(66, 17, 0),
(66, 18, 0),
(66, 19, 0),
(66, 20, 0),
(66, 21, 0),
(66, 22, 0),
(66, 23, 0),
(66, 24, 0),
(66, 25, 0),
(66, 26, 0),
(66, 27, 0),
(66, 28, 0),
(66, 29, 0),
(66, 30, 0),
(66, 31, 0),
(66, 32, 0),
(66, 33, 0),
(66, 34, 0),
(66, 36, 0),
(66, 37, 0),
(66, 38, 0),
(66, 39, 0),
(67, 6, 2),
(67, 14, 0),
(67, 15, 0),
(67, 16, 0),
(67, 17, 0),
(67, 18, 0),
(67, 19, 0),
(67, 20, 0),
(67, 21, 0),
(67, 22, 0),
(67, 23, 0),
(67, 24, 0),
(67, 25, 0),
(67, 26, 0),
(67, 27, 0),
(67, 28, 0),
(67, 29, 0),
(67, 30, 0),
(67, 31, 0),
(67, 32, 0),
(67, 33, 0),
(67, 34, 0),
(67, 36, 0),
(67, 37, 0),
(67, 38, 0),
(67, 39, 0),
(68, 6, 0),
(68, 14, 0),
(68, 15, 0),
(68, 16, 0),
(68, 17, 0),
(68, 18, 0),
(68, 19, 0),
(68, 20, 0),
(68, 21, 0),
(68, 22, 0),
(68, 23, 0),
(68, 24, 0),
(68, 25, 0),
(68, 26, 0),
(68, 27, 0),
(68, 28, 0),
(68, 29, 0),
(68, 30, 0),
(68, 31, 0),
(68, 32, 0),
(68, 33, 0),
(68, 34, 0),
(68, 36, 0),
(68, 37, 0),
(68, 38, 0),
(68, 39, 0),
(69, 6, 0),
(69, 14, 0),
(69, 15, 0),
(69, 16, 0),
(69, 17, 0),
(69, 18, 0),
(69, 19, 0),
(69, 20, 0),
(69, 21, 0),
(69, 22, 0),
(69, 23, 0),
(69, 24, 0),
(69, 25, 0),
(69, 26, 0),
(69, 27, 0),
(69, 28, 0),
(69, 29, 0),
(69, 30, 0),
(69, 31, 0),
(69, 32, 0),
(69, 33, 0),
(69, 34, 0),
(69, 36, 0),
(69, 37, 0),
(69, 38, 0),
(69, 39, 0),
(70, 6, 2),
(70, 14, 0),
(70, 15, 0),
(70, 16, 0),
(70, 17, 0),
(70, 18, 0),
(70, 19, 0),
(70, 20, 0),
(70, 21, 0),
(70, 22, 0),
(70, 23, 0),
(70, 24, 0),
(70, 25, 0),
(70, 26, 0),
(70, 27, 0),
(70, 28, 0),
(70, 29, 0),
(70, 30, 0),
(70, 31, 0),
(70, 32, 0),
(70, 33, 0),
(70, 34, 0),
(70, 36, 0),
(70, 37, 0),
(70, 38, 0),
(70, 39, 0),
(71, 6, 2),
(71, 14, 0),
(71, 15, 0),
(71, 16, 0),
(71, 17, 0),
(71, 18, 0),
(71, 19, 0),
(71, 20, 0),
(71, 21, 0),
(71, 22, 0),
(71, 23, 0),
(71, 24, 0),
(71, 25, 0),
(71, 26, 0),
(71, 27, 0),
(71, 28, 0),
(71, 29, 0),
(71, 30, 0),
(71, 31, 0),
(71, 32, 0),
(71, 33, 0),
(71, 34, 0),
(71, 36, 0),
(71, 37, 0),
(71, 38, 0),
(71, 39, 0),
(72, 6, 0),
(72, 14, 0),
(72, 15, 0),
(72, 16, 0),
(72, 17, 0),
(72, 18, 0),
(72, 19, 0),
(72, 20, 0),
(72, 21, 0),
(72, 22, 0),
(72, 23, 0),
(72, 24, 0),
(72, 25, 0),
(72, 26, 0),
(72, 27, 0),
(72, 28, 0),
(72, 29, 0),
(72, 30, 0),
(72, 31, 0),
(72, 32, 0),
(72, 33, 0),
(72, 34, 0),
(72, 36, 0),
(72, 37, 0),
(72, 38, 0),
(72, 39, 0),
(73, 6, 2),
(73, 14, 0),
(73, 15, 0),
(73, 16, 0),
(73, 17, 0),
(73, 18, 0),
(73, 19, 0),
(73, 20, 0),
(73, 21, 0),
(73, 22, 0),
(73, 23, 0),
(73, 24, 0),
(73, 25, 0),
(73, 26, 0),
(73, 27, 0),
(73, 28, 0),
(73, 29, 0),
(73, 30, 0),
(73, 31, 0),
(73, 32, 0),
(73, 33, 0),
(73, 34, 0),
(73, 36, 0),
(73, 37, 0),
(73, 38, 0),
(73, 39, 0),
(74, 6, 2),
(74, 14, 0),
(74, 15, 0),
(74, 16, 0),
(74, 17, 0),
(74, 18, 0),
(74, 19, 0),
(74, 20, 0),
(74, 21, 0),
(74, 22, 0),
(74, 23, 0),
(74, 24, 0),
(74, 25, 0),
(74, 26, 0),
(74, 27, 0),
(74, 28, 0),
(74, 29, 0),
(74, 30, 0),
(74, 31, 0),
(74, 32, 0),
(74, 33, 0),
(74, 34, 0),
(74, 36, 0),
(74, 37, 0),
(74, 38, 0),
(74, 39, 0),
(75, 6, 0),
(75, 14, 0),
(75, 15, 0),
(75, 16, 0),
(75, 17, 0),
(75, 18, 0),
(75, 19, 0),
(75, 20, 0),
(75, 21, 0),
(75, 22, 0),
(75, 23, 0),
(75, 24, 0),
(75, 25, 0),
(75, 26, 0),
(75, 27, 0),
(75, 28, 0),
(75, 29, 0),
(75, 30, 0),
(75, 31, 0),
(75, 32, 0),
(75, 33, 0),
(75, 34, 0),
(75, 36, 0),
(75, 37, 0),
(75, 38, 0),
(75, 39, 0),
(76, 6, 0),
(76, 14, 0),
(76, 15, 0),
(76, 16, 0),
(76, 17, 0),
(76, 18, 0),
(76, 19, 0),
(76, 20, 0),
(76, 21, 0),
(76, 22, 0),
(76, 23, 0),
(76, 24, 0),
(76, 25, 0),
(76, 26, 0),
(76, 27, 0),
(76, 28, 0),
(76, 29, 0),
(76, 30, 0),
(76, 31, 0),
(76, 32, 0),
(76, 33, 0),
(76, 34, 0),
(76, 36, 0),
(76, 37, 0),
(76, 38, 0),
(76, 39, 0),
(78, 6, 0),
(78, 14, 0),
(78, 15, 0),
(78, 16, 0),
(78, 17, 0),
(78, 18, 0),
(78, 19, 0),
(78, 20, 0),
(78, 21, 0),
(78, 22, 0),
(78, 23, 0),
(78, 24, 0),
(78, 25, 0),
(78, 26, 0),
(78, 27, 0),
(78, 28, 0),
(78, 29, 0),
(78, 30, 0),
(78, 31, 0),
(78, 32, 0),
(78, 33, 0),
(78, 34, 0),
(78, 36, 0),
(78, 37, 0),
(78, 38, 0),
(78, 39, 0),
(79, 6, 0),
(79, 14, 0),
(79, 15, 0),
(79, 16, 0),
(79, 17, 0),
(79, 18, 0),
(79, 19, 0),
(79, 20, 0),
(79, 21, 0),
(79, 22, 0),
(79, 23, 0),
(79, 24, 0),
(79, 25, 0),
(79, 26, 0),
(79, 27, 0),
(79, 28, 0),
(79, 29, 0),
(79, 30, 0),
(79, 31, 0),
(79, 32, 0),
(79, 33, 0),
(79, 34, 0),
(79, 36, 0),
(79, 37, 0),
(79, 38, 0),
(79, 39, 0),
(80, 6, 0),
(80, 14, 0),
(80, 15, 0),
(80, 16, 0),
(80, 17, 0),
(80, 18, 0),
(80, 19, 0),
(80, 20, 0),
(80, 21, 0),
(80, 22, 0),
(80, 23, 0),
(80, 24, 0),
(80, 25, 0),
(80, 26, 0),
(80, 27, 0),
(80, 28, 0),
(80, 29, 0),
(80, 30, 0),
(80, 31, 0),
(80, 32, 0),
(80, 33, 0),
(80, 34, 0),
(80, 36, 0),
(80, 37, 0),
(80, 38, 0),
(80, 39, 0),
(81, 6, 0),
(81, 14, 0),
(81, 15, 0),
(81, 16, 0),
(81, 17, 0),
(81, 18, 0),
(81, 19, 0),
(81, 20, 0),
(81, 21, 0),
(81, 22, 0),
(81, 23, 0),
(81, 24, 0),
(81, 25, 0),
(81, 26, 0),
(81, 27, 0),
(81, 28, 0),
(81, 29, 0),
(81, 30, 0),
(81, 31, 0),
(81, 32, 0),
(81, 33, 0),
(81, 34, 0),
(81, 36, 0),
(81, 37, 0),
(81, 38, 0),
(81, 39, 0),
(83, 6, 0),
(83, 14, 0),
(83, 15, 0),
(83, 16, 0),
(83, 17, 0),
(83, 18, 0),
(83, 19, 0),
(83, 20, 0),
(83, 21, 0),
(83, 22, 0),
(83, 23, 0),
(83, 24, 0),
(83, 25, 0),
(83, 26, 0),
(83, 27, 0),
(83, 28, 0),
(83, 29, 0),
(83, 30, 0),
(83, 31, 0),
(83, 32, 0),
(83, 33, 0),
(83, 34, 0),
(83, 36, 0),
(83, 37, 0),
(83, 38, 0),
(83, 39, 0),
(84, 6, 0),
(84, 14, 0),
(84, 15, 0),
(84, 16, 0),
(84, 17, 0),
(84, 18, 0),
(84, 19, 0),
(84, 20, 0),
(84, 21, 0),
(84, 22, 0),
(84, 23, 0),
(84, 24, 0),
(84, 25, 0),
(84, 26, 0),
(84, 27, 0),
(84, 28, 0),
(84, 29, 0),
(84, 30, 0),
(84, 31, 0),
(84, 32, 0),
(84, 33, 0),
(84, 34, 0),
(84, 36, 0),
(84, 37, 0),
(84, 38, 0),
(84, 39, 0),
(85, 6, 0),
(85, 14, 0),
(85, 15, 0),
(85, 16, 0),
(85, 17, 0),
(85, 18, 0),
(85, 19, 0),
(85, 20, 0),
(85, 21, 0),
(85, 22, 0),
(85, 23, 0),
(85, 24, 0),
(85, 25, 0),
(85, 26, 0),
(85, 27, 0),
(85, 28, 0),
(85, 29, 0),
(85, 30, 0),
(85, 31, 0),
(85, 32, 0),
(85, 33, 0),
(85, 34, 0),
(85, 36, 0),
(85, 37, 0),
(85, 38, 0),
(85, 39, 0),
(87, 6, 2),
(87, 14, 0),
(87, 15, 0),
(87, 16, 0),
(87, 17, 0),
(87, 18, 0),
(87, 19, 0),
(87, 20, 0),
(87, 21, 0),
(87, 22, 0),
(87, 23, 0),
(87, 24, 0),
(87, 25, 0),
(87, 26, 0),
(87, 27, 0),
(87, 28, 0),
(87, 29, 0),
(87, 30, 0),
(87, 31, 0),
(87, 32, 0),
(87, 33, 0),
(87, 34, 0),
(87, 36, 0),
(87, 37, 0),
(87, 38, 0),
(87, 39, 0),
(88, 6, 0),
(88, 14, 0),
(88, 15, 0),
(88, 16, 0),
(88, 17, 0),
(88, 18, 0),
(88, 19, 0),
(88, 20, 0),
(88, 21, 0),
(88, 22, 0),
(88, 23, 0),
(88, 24, 0),
(88, 25, 0),
(88, 26, 0),
(88, 27, 0),
(88, 28, 0),
(88, 29, 0),
(88, 30, 0),
(88, 31, 0),
(88, 32, 0),
(88, 33, 0),
(88, 34, 0),
(88, 36, 0),
(88, 37, 0),
(88, 38, 0),
(88, 39, 0),
(90, 6, 0),
(90, 14, 0),
(90, 15, 0),
(90, 16, 0),
(90, 17, 0),
(90, 18, 0),
(90, 19, 0),
(90, 20, 0),
(90, 21, 0),
(90, 22, 0),
(90, 23, 0),
(90, 24, 0),
(90, 25, 0),
(90, 26, 0),
(90, 27, 0),
(90, 28, 0),
(90, 29, 0),
(90, 30, 0),
(90, 31, 0),
(90, 32, 0),
(90, 33, 0),
(90, 34, 0),
(90, 36, 0),
(90, 37, 0),
(90, 38, 0),
(90, 39, 0),
(92, 6, 0),
(92, 14, 0),
(92, 15, 0),
(92, 16, 0),
(92, 17, 0),
(92, 18, 0),
(92, 19, 0),
(92, 20, 0),
(92, 21, 0),
(92, 22, 0),
(92, 23, 0),
(92, 24, 0),
(92, 25, 0),
(92, 26, 0),
(92, 27, 0),
(92, 28, 0),
(92, 29, 0),
(92, 30, 0),
(92, 31, 0),
(92, 32, 0),
(92, 33, 0),
(92, 34, 0),
(92, 36, 0),
(92, 37, 0),
(92, 38, 0),
(92, 39, 0),
(138, 6, 0),
(138, 14, 0),
(138, 15, 0),
(138, 16, 0),
(138, 17, 0),
(138, 18, 0),
(138, 19, 0),
(138, 20, 0),
(138, 21, 0),
(138, 22, 0),
(138, 23, 0),
(138, 24, 0),
(138, 25, 0),
(138, 26, 0),
(138, 27, 0),
(138, 28, 0),
(138, 29, 0),
(138, 30, 0),
(138, 31, 0),
(138, 32, 0),
(138, 33, 0),
(138, 34, 0),
(138, 36, 0),
(138, 37, 0),
(138, 38, 0),
(138, 39, 0),
(139, 6, 0),
(139, 14, 0),
(139, 15, 0),
(139, 16, 0),
(139, 17, 0),
(139, 18, 0),
(139, 19, 0),
(139, 20, 0),
(139, 21, 0),
(139, 22, 0),
(139, 23, 0),
(139, 24, 0),
(139, 25, 0),
(139, 26, 0),
(139, 27, 0),
(139, 28, 0),
(139, 29, 0),
(139, 30, 0),
(139, 31, 0),
(139, 32, 0),
(139, 33, 0),
(139, 34, 0),
(139, 36, 0),
(139, 37, 0),
(139, 38, 0),
(139, 39, 0),
(140, 6, 0),
(140, 14, 0),
(140, 15, 0),
(140, 16, 0),
(140, 17, 0),
(140, 18, 0),
(140, 19, 0),
(140, 20, 0),
(140, 21, 0),
(140, 22, 0),
(140, 23, 0),
(140, 24, 0),
(140, 25, 0),
(140, 26, 0),
(140, 27, 0),
(140, 28, 0),
(140, 29, 0),
(140, 30, 0),
(140, 31, 0),
(140, 32, 0),
(140, 33, 0),
(140, 34, 0),
(140, 36, 0),
(140, 37, 0),
(140, 38, 0),
(140, 39, 0),
(148, 6, 0),
(148, 14, 0),
(148, 15, 0),
(148, 16, 0),
(148, 17, 0),
(148, 18, 0),
(148, 19, 0),
(148, 20, 0),
(148, 21, 0),
(148, 22, 0),
(148, 23, 0),
(148, 24, 0),
(148, 25, 0),
(148, 26, 0),
(148, 27, 0),
(148, 28, 0),
(148, 29, 0),
(148, 30, 0),
(148, 31, 0),
(148, 32, 0),
(148, 33, 0),
(148, 34, 0),
(148, 36, 0),
(148, 37, 0),
(148, 38, 0),
(148, 39, 0),
(149, 6, 0),
(149, 14, 0),
(149, 15, 0),
(149, 16, 0),
(149, 17, 0),
(149, 18, 0),
(149, 19, 0),
(149, 20, 0),
(149, 21, 0),
(149, 22, 0),
(149, 23, 0),
(149, 24, 0),
(149, 25, 0),
(149, 26, 0),
(149, 27, 0),
(149, 28, 0),
(149, 29, 0),
(149, 30, 0),
(149, 31, 0),
(149, 32, 0),
(149, 33, 0),
(149, 34, 0),
(149, 36, 0),
(149, 37, 0),
(149, 38, 0),
(149, 39, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_showtime`
--

CREATE TABLE `tbl_showtime` (
  `Id` int(11) NOT NULL,
  `Start` datetime DEFAULT NULL,
  `End` datetime DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL,
  `Cinema_Id` int(11) DEFAULT NULL,
  `Room_id` int(11) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_showtime`
--

INSERT INTO `tbl_showtime` (`Id`, `Start`, `End`, `Movie_Id`, `Cinema_Id`, `Room_id`, `Deleted`) VALUES
(6, '2023-10-25 09:00:00', '2023-10-25 11:00:59', 1, 2, 3, 0),
(9, '2023-10-26 18:00:00', '2023-10-26 20:00:00', 10, 10, 43, 0),
(14, '2023-10-27 10:00:00', '2023-10-27 12:00:00', 3, 1, 3, 0),
(15, '2023-10-26 20:00:00', '2023-10-26 22:00:00', 1, 2, 1, 0),
(16, '2023-10-27 11:00:00', '2023-10-27 13:00:00', 1, 3, 3, 0),
(17, '2023-10-25 16:00:00', '2023-10-25 19:00:00', 1, 1, 3, 0),
(18, '2023-10-28 12:00:00', '2023-10-28 14:00:00', 1, 1, 8, 0),
(19, '2023-10-26 20:00:00', '2023-10-26 22:00:00', 1, 62, 1, 0),
(20, '2023-10-27 18:00:00', '2023-10-27 21:00:00', 1, 1, 9, 0),
(21, '2023-10-25 15:00:00', '2023-10-25 17:00:00', 1, 9, 1, 0),
(22, '2023-10-27 20:00:00', '2023-10-27 23:00:00', 1, 62, 1, 0),
(23, '2023-10-26 07:00:00', '2023-10-26 09:00:00', 2, 1, 1, 0),
(24, '2023-10-28 20:30:00', '2023-10-28 22:30:00', 3, 1, 1, 0),
(25, '2023-10-26 20:40:00', '2023-10-26 22:50:00', 3, 1, 1, 0),
(26, '2023-10-25 21:00:00', '2023-10-25 23:00:00', 4, 1, 1, 1),
(27, '2023-10-26 13:00:00', '2023-10-26 15:00:00', 5, 1, 1, 0),
(28, '2023-10-24 08:30:00', '2023-10-24 11:30:00', 6, 1, 2, 0),
(29, '2023-10-24 20:00:00', '2023-10-24 22:00:00', 7, 1, 1, 0),
(30, '2023-10-26 20:30:00', '2023-10-26 22:00:00', 8, 1, 1, 0),
(31, '2023-10-28 19:30:00', '2023-10-28 21:30:00', 8, 1, 1, 0),
(32, '2023-10-26 17:30:00', '2023-10-26 19:00:00', 10, 1, 1, 0),
(33, '2023-10-27 20:30:00', '2023-10-27 22:00:00', 4, 1, 1, 0),
(34, '2023-10-28 08:00:00', '2023-10-28 10:00:00', 10, 1, 2, 0),
(36, '2023-10-23 08:00:00', '2023-10-23 11:00:00', 2, 2, 3, 0),
(37, '2023-10-30 16:00:00', '2023-10-30 18:00:00', 44, 6, 5, 0),
(38, '2023-10-30 16:00:00', '2023-10-30 18:00:00', 23, 2, 3, 0),
(39, '2023-10-30 06:30:00', '2023-10-30 08:30:00', 45, 2, 8, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slidecategory`
--

CREATE TABLE `tbl_slidecategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slidecategory`
--

INSERT INTO `tbl_slidecategory` (`Id`, `Name`) VALUES
(1, 'HomeSlide1'),
(2, 'HomeSlide2'),
(3, 'HomeSlide3'),
(4, 'HomeSlide4'),
(5, 'HomeSlide5'),
(6, 'HomeSlide6'),
(7, 'HomeSlide7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `Id` int(11) NOT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `Showtime_Id` int(11) DEFAULT NULL,
  `Booking_Id` int(11) DEFAULT NULL,
  `Seat_Id` int(11) DEFAULT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`Id`, `Price`, `Showtime_Id`, `Booking_Id`, `Seat_Id`, `Deleted`) VALUES
(27, 10, 6, 29, 35, 0),
(28, 10, 6, 29, 36, 0),
(29, 10, 6, 29, 39, 0),
(30, 10, 6, 30, 35, 0),
(31, 10, 6, 30, 36, 0),
(32, 10, 6, 30, 39, 0),
(33, 10, 6, 31, 35, 0),
(34, 10, 6, 31, 36, 0),
(35, 10, 6, 31, 39, 0),
(36, 10, 6, 32, 41, 0),
(37, 10, 6, 32, 49, 0),
(38, 10, 6, 33, 53, 0),
(39, 10, 6, 33, 54, 0),
(40, 12, 6, 34, 37, 0),
(41, 12, 6, 34, 40, 0),
(42, 10, 6, 35, 59, 0),
(43, 10, 6, 35, 60, 0),
(44, 10, 6, 36, 67, 0),
(45, 10, 6, 37, 67, 0),
(46, 10, 6, 38, 70, 0),
(47, 9, 14, 39, 41, 0),
(48, 9, 14, 39, 49, 0),
(49, 10, 6, 40, 4, 0),
(50, 10, 6, 41, 5, 0),
(51, 10, 6, 41, 12, 0),
(52, 10, 6, 42, 5, 0),
(53, 10, 6, 42, 12, 0),
(54, 10, 6, 43, 5, 0),
(55, 10, 6, 43, 12, 0),
(56, 10, 6, 44, 5, 0),
(57, 10, 6, 44, 12, 0),
(58, 10, 6, 45, 5, 0),
(59, 10, 6, 45, 12, 0),
(60, 10, 6, 46, 5, 0),
(61, 10, 6, 46, 12, 0),
(62, 10, 6, 47, 5, 0),
(63, 10, 6, 47, 12, 0),
(64, 10, 6, 48, 16, 0),
(65, 10, 6, 49, 16, 0),
(66, 10, 6, 50, 71, 0),
(67, 10, 6, 50, 73, 0),
(68, 10, 6, 51, 74, 0),
(69, 10, 6, 52, 87, 0),
(70, 12, 6, 53, 22, 0),
(71, 12, 6, 53, 26, 0),
(72, 16, 23, 54, 22, 0),
(73, 35, 23, 55, 4, 0),
(74, 20, 33, 56, 18, 0),
(75, 30, 16, 57, 18, 0),
(76, 30, 17, 58, 39, 0),
(77, 30, 17, 58, 41, 0),
(78, 30, 17, 59, 39, 0),
(79, 30, 17, 59, 41, 0),
(80, 30, 17, 60, 39, 0),
(81, 30, 17, 60, 41, 0),
(85, 15, 27, 63, 36, 0),
(86, 20, 37, 64, 53, 0),
(87, 15, 27, 65, 41, 0),
(88, 100, 38, 66, 39, 0),
(89, 30, 39, 67, 39, 0),
(90, 20, 37, 68, 41, 0),
(91, 30, 39, 69, 49, 0),
(92, 20, 37, 70, 49, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT 'User',
  `Address` varchar(255) DEFAULT NULL,
  `DateOfBirth` datetime DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `Role_Id` int(11) DEFAULT 3,
  `Api_token` text DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `UserName`, `Password`, `Name`, `Address`, `DateOfBirth`, `Phone`, `Image`, `Role_Id`, `Api_token`, `Deleted`) VALUES
(1, 'hoatdfk2001@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mai Huy Hoạt', 'Nam Định', '2000-10-20 00:00:00', '123456789', 'https://th.bing.com/th/id/OIP.4juP03bfhOI5gE4uAfgQrgHaEL?pid=ImgDet&w=300&h=169&rs=1', 3, 'dad67a10-a9b7-4927-9e20-02b6894437e0', 0),
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', 'Address2', '2001-02-02 00:00:00', '987654321', 'http://127.0.0.1:8000/storage/user_Img/2UTLttrKebHldY1yDrni3m5aky8CfbC9gMkhXHHF.jpg', 1, 'b57e2352-e924-4fcc-aae2-fad797873e85', 0),
(3, 'employee', '202cb962ac59075b964b07152d234b70', 'Trang', 'Thái Bình', '2002-03-03 00:00:00', '555555555', NULL, 2, '0fff514b-85f9-42a9-993b-e1079ffde3b2', 0),
(4, 'UserName4', '202cb962ac59075b964b07152d234b70', 'Hiển Anh', 'Hà Nội', '2003-04-04 00:00:00', '111111111', NULL, 3, '2c57cb2a-d98b-4381-bd07-5beef219eed7', 0),
(5, 'UserName5', '7df5222fb59b99c7c598bee2ef00b85e', 'Thu Hiền', 'Phú Thọ', '2004-05-05 00:00:00', '999999999', NULL, 3, '2ffc0535-85cd-4ae6-9ce5-87b1621582fe', 0),
(6, 'UserName6', 'fabb2e3f5cee3fa92c8a872832d21fec', 'Đạt', 'Hà Nội', '2005-06-06 00:00:00', '777777777', NULL, 3, 'eeb5d1e0-8d92-4b09-8655-1e3c85d1e176', 0),
(7, 'UserName7', '202cb962ac59075b964b07152d234b70', 'Lan', 'Hà Nội', '2006-07-07 00:00:00', '888888888', NULL, 3, '7a39644c-a168-4607-b115-c8f15ad47af8', 0),
(8, 'UserName8', '6b208366be3649e11606feb20008924f', 'Ngọc Nam', 'Thái Bình', '2007-08-08 00:00:00', '444444444', NULL, 3, '7fc4325a-31ef-4273-be67-05d7414f7d26', 0),
(9, 'UserName9', '55656034eb43d2f48de7f517c2880feb', 'Khánh', 'Hà Nội', '2008-09-09 00:00:00', '222222222', NULL, 3, 'cbe37116-87bd-4326-820b-d0cea00d083e', 0),
(10, 'hoatdfk2001@gmail.com', '26a27c4eda5615486b20fb3103f1d2a6', 'Châu', 'Hà Nội', '2009-10-10 00:00:00', '666666666', NULL, 3, 'b0d634e5-ddcf-4e80-baef-647a90630f34', 0),
(11, 'hien@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'Đỗ Thị Thu Hiền', 'Phú Thọ', '2023-10-12 14:08:00', '02939829292', NULL, 3, NULL, 0),
(13, '221001786@daihocthudo.edu.vn', '202cb962ac59075b964b07152d234b70', 'Phương Anh Đào', 'TP Hồ chí minh', '1991-04-30 07:46:00', '0354221364', 'https://35express.org/wp-content/uploads/2021/11/phuong-anh-dao-la-ai-1-35express.jpg', 3, 'e1a2368d-337f-4166-b551-2c1194d76768', 0),
(14, 'tttphuong2@hnmu.edu.vn', '202cb962ac59075b964b07152d234b70', 'Thu Phương', NULL, '2023-10-11 08:28:00', NULL, 'https://th.bing.com/th/id/R.91b431295dd019f6b28f3e3706a309b7?rik=7BCNX1qMlaj%2bTQ&riu=http%3a%2f%2fwww.exclusiveeducation.co.uk%2fwp-content%2fuploads%2f2014%2f08%2fiStock-Teacher-smaller-version.jpg&ehk=p%2fC3qABbbvJeV7zZ6O%2fvtT3LRIM5DueHey218QTgCP0%3d&risl=&pid=ImgRaw&r=0', 3, 'f64a8ae0-f9d1-4a23-b717-d5ce3ab18202', 0),
(15, 'diencotochuc03@gmail.com', '202cb962ac59075b964b07152d234b70', 'User', NULL, NULL, NULL, NULL, 3, NULL, 0),
(16, 'diencotochuc03@gmail.com', '202cb962ac59075b964b07152d234b70', 'User', NULL, NULL, NULL, NULL, 3, NULL, 0),
(17, 'Trang@gmail.com', '202cb962ac59075b964b07152d234b70', 'Trang', NULL, '2023-10-22 21:29:00', NULL, NULL, 3, '62dec531-de5c-48e2-a98c-ffd9f2426d65', 0),
(18, 'Hien', '202cb962ac59075b964b07152d234b70', 'Hien', 'Phú Thọ', '2023-09-27 21:58:00', '0909 999 999', 'http://127.0.0.1:8000/storage/user_Img/G5pxHKeSoK8z3w2MhDRfJ5e8t1OGiuIBor1UWEOf.jpg', 2, 'ab85e3a4-0b1a-4112-aae3-9580fe87f0e6', 0),
(19, 'buitrangtb2003@gmail.com', '202cb962ac59075b964b07152d234b70', 'Trang', NULL, '2023-10-23 08:19:00', NULL, NULL, 3, 'c4b68204-8b34-44f0-928c-a932320a6713', 0),
(20, 'hanamoaana03@gmail.com', '202cb962ac59075b964b07152d234b70', 'Linh', NULL, '2023-10-23 16:05:00', NULL, NULL, 3, '13246d4b-d7cd-43d0-b35f-76046806062c', 0),
(21, 'hanamoaana03@gmail.com', '202cb962ac59075b964b07152d234b70', 'User', NULL, NULL, NULL, NULL, 3, NULL, 0),
(22, 'htrangtb2003@gmail.com', '202cb962ac59075b964b07152d234b70', 'Hồng', NULL, '2023-10-23 21:59:00', NULL, NULL, 3, '6b0dab70-1cae-40f8-9621-8a2839f5ad0c', 0),
(23, 'thichhaha0812@gmail.com', '202cb962ac59075b964b07152d234b70', 'Trang', NULL, '2023-10-24 10:24:00', NULL, NULL, 3, '287e4fca-194b-42e3-b315-82a01c40c34f', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Chỉ mục cho bảng `tbl_cinema`
--
ALTER TABLE `tbl_cinema`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`,`Movie_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`);

--
-- Chỉ mục cho bảng `tbl_director`
--
ALTER TABLE `tbl_director`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_homeslide`
--
ALTER TABLE `tbl_homeslide`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `SlideCategory_Id` (`SlideCategory_Id`);

--
-- Chỉ mục cho bảng `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `MovieCategory_Id` (`MovieCategory_Id`),
  ADD KEY `Director_Id` (`Director_Id`),
  ADD KEY `Productor_Id` (`Productor_Id`);

--
-- Chỉ mục cho bảng `tbl_moviecategory`
--
ALTER TABLE `tbl_moviecategory`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_performer`
--
ALTER TABLE `tbl_performer`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_performermovie`
--
ALTER TABLE `tbl_performermovie`
  ADD PRIMARY KEY (`Performer_Id`,`Movie_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`);

--
-- Chỉ mục cho bảng `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Movie_id` (`Movie_Id`);

--
-- Chỉ mục cho bảng `tbl_productor`
--
ALTER TABLE `tbl_productor`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PromotionCategrory_Id` (`PromotionCategrory_Id`),
  ADD KEY `User_id` (`User_Id`);

--
-- Chỉ mục cho bảng `tbl_promotioncategrory`
--
ALTER TABLE `tbl_promotioncategrory`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cinema_Id` (`Cinema_Id`);

--
-- Chỉ mục cho bảng `tbl_seat`
--
ALTER TABLE `tbl_seat`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `SeatCategory_Id` (`SeatCategory_Id`);

--
-- Chỉ mục cho bảng `tbl_seatcategory`
--
ALTER TABLE `tbl_seatcategory`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_seatroom`
--
ALTER TABLE `tbl_seatroom`
  ADD PRIMARY KEY (`Seat_Id`,`Room_Id`),
  ADD KEY `Room_Id` (`Room_Id`);

--
-- Chỉ mục cho bảng `tbl_seatshowtime`
--
ALTER TABLE `tbl_seatshowtime`
  ADD PRIMARY KEY (`Seat_Id`,`Showtime_Id`),
  ADD KEY `Showtime_Id` (`Showtime_Id`);

--
-- Chỉ mục cho bảng `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Room_id` (`Room_id`),
  ADD KEY `Cinema_Id` (`Cinema_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`);

--
-- Chỉ mục cho bảng `tbl_slidecategory`
--
ALTER TABLE `tbl_slidecategory`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Booking_Id` (`Booking_Id`),
  ADD KEY `Seat_Id` (`Seat_Id`),
  ADD KEY `Showtime_Id` (`Showtime_Id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Role_Id` (`Role_Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `tbl_cinema`
--
ALTER TABLE `tbl_cinema`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_director`
--
ALTER TABLE `tbl_director`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_homeslide`
--
ALTER TABLE `tbl_homeslide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_moviecategory`
--
ALTER TABLE `tbl_moviecategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_performer`
--
ALTER TABLE `tbl_performer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT cho bảng `tbl_productor`
--
ALTER TABLE `tbl_productor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_promotioncategrory`
--
ALTER TABLE `tbl_promotioncategrory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tbl_seat`
--
ALTER TABLE `tbl_seat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT cho bảng `tbl_seatcategory`
--
ALTER TABLE `tbl_seatcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_slidecategory`
--
ALTER TABLE `tbl_slidecategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `tbl_user` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`Movie_Id`) REFERENCES `tbl_movie` (`Id`),
  ADD CONSTRAINT `tbl_comment_ibfk_2` FOREIGN KEY (`User_Id`) REFERENCES `tbl_user` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_homeslide`
--
ALTER TABLE `tbl_homeslide`
  ADD CONSTRAINT `tbl_homeslide_ibfk_1` FOREIGN KEY (`SlideCategory_Id`) REFERENCES `tbl_slidecategory` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD CONSTRAINT `tbl_movie_ibfk_1` FOREIGN KEY (`MovieCategory_Id`) REFERENCES `tbl_moviecategory` (`Id`),
  ADD CONSTRAINT `tbl_movie_ibfk_2` FOREIGN KEY (`Director_Id`) REFERENCES `tbl_director` (`Id`),
  ADD CONSTRAINT `tbl_movie_ibfk_3` FOREIGN KEY (`Productor_Id`) REFERENCES `tbl_productor` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_performermovie`
--
ALTER TABLE `tbl_performermovie`
  ADD CONSTRAINT `tbl_performermovie_ibfk_1` FOREIGN KEY (`Performer_Id`) REFERENCES `tbl_performer` (`Id`),
  ADD CONSTRAINT `tbl_performermovie_ibfk_2` FOREIGN KEY (`Movie_Id`) REFERENCES `tbl_movie` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD CONSTRAINT `tbl_photo_ibfk_1` FOREIGN KEY (`Movie_Id`) REFERENCES `tbl_movie` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD CONSTRAINT `tbl_promotion_ibfk_2` FOREIGN KEY (`User_Id`) REFERENCES `tbl_user` (`Id`),
  ADD CONSTRAINT `tbl_promotion_ibfk_3` FOREIGN KEY (`PromotionCategrory_Id`) REFERENCES `tbl_promotioncategrory` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD CONSTRAINT `tbl_room_ibfk_1` FOREIGN KEY (`Cinema_Id`) REFERENCES `tbl_cinema` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_seat`
--
ALTER TABLE `tbl_seat`
  ADD CONSTRAINT `tbl_seat_ibfk_1` FOREIGN KEY (`SeatCategory_Id`) REFERENCES `tbl_seatcategory` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_seatroom`
--
ALTER TABLE `tbl_seatroom`
  ADD CONSTRAINT `tbl_seatroom_ibfk_1` FOREIGN KEY (`Seat_Id`) REFERENCES `tbl_seat` (`Id`),
  ADD CONSTRAINT `tbl_seatroom_ibfk_2` FOREIGN KEY (`Room_Id`) REFERENCES `tbl_room` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_seatshowtime`
--
ALTER TABLE `tbl_seatshowtime`
  ADD CONSTRAINT `tbl_seatshowtime_ibfk_1` FOREIGN KEY (`Showtime_Id`) REFERENCES `tbl_showtime` (`Id`),
  ADD CONSTRAINT `tbl_seatshowtime_ibfk_2` FOREIGN KEY (`Seat_Id`) REFERENCES `tbl_seat` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  ADD CONSTRAINT `tbl_showtime_ibfk_1` FOREIGN KEY (`Room_id`) REFERENCES `tbl_room` (`Id`),
  ADD CONSTRAINT `tbl_showtime_ibfk_2` FOREIGN KEY (`Cinema_Id`) REFERENCES `tbl_cinema` (`Id`),
  ADD CONSTRAINT `tbl_showtime_ibfk_3` FOREIGN KEY (`Movie_Id`) REFERENCES `tbl_movie` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD CONSTRAINT `tbl_ticket_ibfk_1` FOREIGN KEY (`Booking_Id`) REFERENCES `tbl_booking` (`Id`),
  ADD CONSTRAINT `tbl_ticket_ibfk_2` FOREIGN KEY (`Seat_Id`) REFERENCES `tbl_seat` (`Id`),
  ADD CONSTRAINT `tbl_ticket_ibfk_3` FOREIGN KEY (`Showtime_Id`) REFERENCES `tbl_showtime` (`Id`);

--
-- Các ràng buộc cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `tbl_role` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
