-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2024 lúc 08:38 AM
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
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_user` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.tt truc tiep 1.tt online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.đơn mới 1.đang xử lý 2.đang giao 3.đã giao',
  `receive_user` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_user`, `bill_address`, `bill_email`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_user`, `receive_address`, `receive_tel`) VALUES
(3, 0, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '02:17:08pm 24/02/2024', 360000, 0, '', '', ''),
(4, 0, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '02:17:44pm 24/02/2024', 360000, 2, '', '', ''),
(5, 0, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '02:18:08pm 24/02/2024', 360000, 0, '', '', ''),
(6, 0, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '02:18:18pm 24/02/2024', 360000, 0, '', '', ''),
(7, 0, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '02:19:39pm 24/02/2024', 360000, 0, '', '', ''),
(8, 0, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '02:20:04pm 24/02/2024', 360000, 0, '', '', ''),
(31, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:25:45pm 24/02/2024', 140000, 0, '', '', ''),
(32, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:32:28pm 24/02/2024', 480000, 0, '', '', ''),
(33, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:32:55pm 24/02/2024', 0, 0, '', '', ''),
(34, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:33:27pm 24/02/2024', 180000, 0, '', '', ''),
(35, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:37:45pm 24/02/2024', 140000, 0, '', '', ''),
(36, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:38:54pm 24/02/2024', 180000, 0, '', '', ''),
(37, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:41:03pm 24/02/2024', 300000, 0, '', '', ''),
(38, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:41:27pm 24/02/2024', 140000, 0, '', '', ''),
(39, 2, 'Toi', 'Hà Nội', 'toi@gmail.com', '0978654312', 0, '03:52:17pm 24/02/2024', 140000, 0, '', '', ''),
(41, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '03:54:11pm 24/02/2024', 180000, 0, '', '', ''),
(44, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '05:42:28pm 24/02/2024', 180000, 0, '', '', ''),
(45, 0, 'Admin', 'hanoi', 'nva@gmail.com', '0978650293', 0, '05:42:58pm 24/02/2024', 140000, 0, '', '', ''),
(46, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '05:44:39pm 24/02/2024', 140000, 0, '', '', ''),
(47, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '05:45:08pm 24/02/2024', 0, 0, '', '', ''),
(48, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '05:45:32pm 24/02/2024', 180000, 0, '', '', ''),
(49, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '05:47:20pm 24/02/2024', 140000, 0, '', '', ''),
(50, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '05:48:42pm 24/02/2024', 140000, 0, '', '', ''),
(51, 0, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '03:08:38am 25/02/2024', 140000, 0, '', '', ''),
(52, 0, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '03:16:17am 25/02/2024', 140000, 0, '', '', ''),
(53, 0, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '03:17:27am 25/02/2024', 140000, 0, '', '', ''),
(54, 0, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '03:21:51am 25/02/2024', 180000, 1, '', '', ''),
(55, 4, 'abc', 'ha noi', 'pphu0936@gmail.com', '0978650293', 0, '10:16:12am 28/02/2024', 180000, 0, '', '', ''),
(56, 4, 'abc', 'ha noi', 'pphu0936@gmail.com', '0978650293', 0, '10:18:06am 28/02/2024', 0, 0, '', '', ''),
(57, 4, 'abc', 'ha noi', 'pphu0936@gmail.com', '0978650293', 0, '10:19:07am 28/02/2024', 0, 0, '', '', ''),
(58, 4, 'abc', 'ha noi', 'pphu0936@gmail.com', '0978650293', 0, '10:20:41am 28/02/2024', 140000, 0, '', '', ''),
(59, 4, 'abc', 'ha noi', 'pphu0936@gmail.com', '0978650293', 0, '10:25:14am 28/02/2024', 140000, 3, '', '', ''),
(62, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '12:32:48pm 28/02/2024', 140000, 0, '', '', ''),
(63, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '12:33:45pm 28/02/2024', 140000, 3, '', '', ''),
(64, 2, 'Hoàng Long', 'Hà Nội', 'longhh7@fpt.edu.vn', '0978654312', 0, '12:35:32pm 28/02/2024', 300000, 3, '', '', ''),
(65, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '02:40:09am 29/02/2024', 417000, 0, '', '', ''),
(66, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '07:38:22am 29/02/2024', 162000, 2, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Sản phẩm rất đang trải nghiệm', 2, 1, '2023-09-22'),
(2, 'Sản phẩm rất tốt', 3, 1, '2023-09-22'),
(15, 'chất lượng tốt', 1, 7, '0000-00-00'),
(16, 'ok', 1, 7, '0000-00-00'),
(17, 'ok', 1, 6, '2024-03-18'),
(18, 'Đẹp nhưng đắt nên không mua', 1, 15, '2024-03-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 3),
(2, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 3),
(3, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 4),
(4, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 4),
(5, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 5),
(6, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 5),
(7, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 6),
(8, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 6),
(9, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 7),
(10, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 7),
(11, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 8),
(12, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 8),
(61, 2, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 31),
(62, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 32),
(63, 2, 8, 'Kẻ Không Thể Giã Từ.jpg', 'Kẻ Không Thể Giã Từ', 300000, 1, 300000, 32),
(64, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 34),
(65, 2, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 35),
(66, 2, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 36),
(67, 2, 1, 'Pixi Thông Thái - Bí Mật Của Trái Đất.jpg', 'Pixi Thông Thái - Bí Mật Của Trái Đất', 300000, 1, 300000, 37),
(68, 2, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 38),
(69, 2, 2, 'Dkfindout - Những Điều Sách Giáo Khoa Không Dạy Bạn - Rừng.jpg', 'Dkfindout - Những Điều Sách Giáo Khoa Không Dạy Bạn - Rừng', 140000, 1, 140000, 39),
(70, 2, 3, 'Starter Toeic Third Edition.jpg', 'Starter Toeic Third Edition', 180000, 1, 180000, 41),
(72, 1, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 44),
(74, 1, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 46),
(75, 1, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 48),
(76, 2, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 49),
(77, 2, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 50),
(78, 1, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 51),
(79, 1, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 52),
(80, 1, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 53),
(81, 1, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 54),
(82, 4, 7, 'TIẾNG VỌNG.jpg', 'TIẾNG VỌNG', 180000, 1, 180000, 55),
(83, 4, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 58),
(84, 4, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 59),
(85, 1, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 62),
(86, 1, 6, '24 Nhân Cách Của Billy Milligan.jpg', '24 Nhân Cách Của Billy Milligan', 140000, 1, 140000, 63),
(87, 2, 5, 'Tự Học Viết Tiếng Nhật Căn Bản Hiragana.jpg', 'Tự Học Viết Tiếng Nhật Căn Bản Hiragana', 300000, 1, 300000, 64),
(88, 1, 8, 'Kẻ Không Thể Giã Từ.jpg', 'Kẻ Không Thể Giã Từ', 139000, 1, 139000, 65),
(89, 1, 8, 'Kẻ Không Thể Giã Từ.jpg', 'Kẻ Không Thể Giã Từ', 139000, 1, 139000, 65),
(90, 1, 8, 'Kẻ Không Thể Giã Từ.jpg', 'Kẻ Không Thể Giã Từ', 139000, 1, 139000, 65),
(91, 1, 8, 'Kẻ Không Thể Giã Từ.jpg', 'Kẻ Không Thể Giã Từ', 139000, 1, 139000, 66),
(92, 1, 14, 'conan_bia_tap-102.jpg', 'Thám Tử Lừng Danh Conan - Tập 102', 23000, 1, 23000, 66);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Áo phông'),
(2, 'Áo khoác'),
(3, 'Quần jeans'),
(5, 'Quần short'),
(6, 'Combo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Pixi Thông Thái - Bí Mật Của Trái Đất', 17000.00, 'Pixi Thông Thái - Bí Mật Của Trái Đất.jpg', 'CÙNG PIXI THÔNG THÁI KHÁM PHÁ BÍ MẬT CỦA TRÁI ĐẤT!!!\r\n\r\nSiêu lục địa Pangea là gì?\r\n\r\nNúi được hình thành như thế nào?\r\n\r\nDãy núi nào cao nhất thế giới?\r\n\r\nNằm trong series Pixi lừng danh bán hàng chục triệu bản mỗi năm tại Đức, được trẻ em trên khắp thế giới yêu thích, cũng như được các giáo viên khuyên đọc, cuốn sách BÍ MẬT CỦA TRÁI ĐẤT sẽ bật mí cho các bạn nhỏ nhiều sự thật thú vị về hành tinh của chúng ta!\r\n\r\n', 10, 6),
(2, 'Dkfindout - Những Điều Sách Giáo Khoa Không Dạy Bạn - Rừng', 85000.00, 'Dkfindout - Những Điều Sách Giáo Khoa Không Dạy Bạn - Rừng.jpg', 'Bộ sách khoa học DKfindout! gồm 5 cuốn (Rô bốt, Du hành không gian, Năng lượng, Rừng, Kỹ thuật công nghệ) giới thiệu các kiến thức khoa học thường thức thú vị bằng ngôn ngữ dễ hiểu với các hình ảnh, biểu đồ sinh động trực quan, giúp các bạn nhỏ tiếp thu kiến thức hiệu quả nhất có thể. Các chủ đề được đề cập vô cùng mới mẻ như du hành vũ trụ, sử dụng rô bốt trong sản xuất vật phẩm hay chăm sóc con người, v…v… Đây đều là những chủ đề tiến bộ mà các nhà khoa học quan tâm hàng đầu trong tương lai gần.\r\n\r\nQua bộ sách này, các em hiểu hơn về ứng dụng thực tiễn của những kiến thức khoa học mình được học ở trường, giúp khơi gợi niềm hứng thú và yêu thích khoa học, khiến các bộ môn này trở nên gần gũi và thiết thực thay vì chỉ là những kiến thức sách vở khô khan. Đây là bộ sách thực sự hữu ích cho các bạn đọc đam mê khoa học và được gia đình định hướng du học hoặc theo đuổi các ngành khoa học kỹ thuật.\r\n\r\nHơn thế, DKfindout! còn phát triển trang web hoàn toàn miễn phí để các em tự tìm tòi, học hỏi, cũng như ôn lại kiến thức đọc được qua các bài trắc nghiệm ngắn. Trang web sử dụng tiếng Anh, cũng là phương pháp tốt cho các em học và ôn luyện ngoại ngữ.\r\n\r\n', 9, 6),
(3, 'Starter Toeic Third Edition', 135000.00, 'Starter Toeic Third Edition.jpg', 'First News đã xuất bản 2 bộ sách khá hay về học và luyện thi TOEFL/ TOEIC, được biên soạn công phu bởi đội ngũ các giáo viên và chuyên viên giáo dục - ngôn ngữ Hoa Kỳ.\r\n\r\nĐây chính là hai bộ sách được tổng hợp biên soạn và cập nhật hoá dựa theo những yêu cầu mới của các kỳ thi TOEFL/ TOEIC, đồng thời cũng để đáp ứng nhu cầu học và luyện thi hiện đại.\r\n\r\nMỗi bộ sách được chia thành nhiều cấp độ, từ sơ cấp đến nâng cao, phù hợp với mọi trình độ học viên, thuận lợi cho giáo viên trong việc tổ chức học, ra đề thi và sắp lớp đúng trình độ để việc học tập và kiểm tra của học viên đạt kết quả mong muốn. Các học viên có thể tự kiểm tra và chọn cho mình cấp độ phù hợp với khả năng.\r\n\r\n', 9, 1),
(5, 'Tự Học Viết Tiếng Nhật Căn Bản Hiragana', 43000.00, 'Tự Học Viết Tiếng Nhật Căn Bản Hiragana.jpg', 'Đây là bộ tài liệu được biên soạn kỹ lưỡng nhằm giúp người học có thể nhanh chóng nắm vững bộ vần 46 ký tự Hiragana và Katakana, hai bộ vần căn bản của tiếng Nhật.\r\n\r\nBộ sách Tự học viết tiếng Nhật căn bản (Hiragana & Katakana) được biên soạn khoa học, hình thức trình bày hấp dẫn, dễ tiếp cận và nhấn mạnh vào vai trò chủ động của học viên nhắm giúp học viên dễ dàng học cách viết đẹp và nhanh 46 mẫu tự trong hai bộ vần Hiragana và Katakana.\r\n\r\nSách có một số ưu điểm như: mẫu tự được trình bày theo ba dạng - viết bằng bút lông truyền thống, viết tay, và chữ in; những chữ mẫu được in mờ để học viên tập viết theo nét; bài tập đa dạng, nhiều giải thích bổ sung, cùng nhiều hình ảnh, ví dụ minh họa.\r\n\r\nLuyện viết là phương pháp hiệu quả nhất để nắm vững tiếng Nhật dạng viết. Đây là công cụ rất hữu hiệu để bắt đầu quá trình nắm vững chữ viết tiếng Nhật.\r\n\r\nVới những ưu điểm trên, Hiragana và Katakana là hai bộ sách luyện viết tiếng Nhật không thể thiếu đối với người bắt đầu học tiếng Nhật ở mọi lứa tuổi.\r\n\r\n', 10, 3),
(6, '24 Nhân Cách Của Billy Milligan', 196000.00, '24 Nhân Cách Của Billy Milligan.jpg', 'Billy Milligan có thể là bất cứ ai anh ta muốn… ngoại trừ chính bản thân mình\r\n\r\nBị giày vò bởi 24 nhân cách khác nhau cùng tồn tại, không ngừng chiến đấu để giành quyền tối cao đối với cơ thể của mình, Billy Milligan đã không còn có thể kiểm soát được hành động của mình nữa. Cuộc chiến bên trong lên đến đỉnh điểm khi anh ta tỉnh dậy trong tù, bị bắt vì tội bắt cóc và hãm hiếp ba phụ nữ. Trong một phiên tòa mang tính bước ngoặt, Billy được tuyên trắng án với lý do mất trí vì đa nhân cách – quyết định lần đầu tiên có trong lịch sử tòa án của Mỹ và nhân loại.\r\n\r\nTrong tác phẩm, bạn sẽ được lần lượt gặp từng nhân cách trong câu chuyện có thật gây sốc này. Và bạn sẽ không thể rời mắt khỏi tâm trí của chàng trai trẻ bị tra tấn Billy Milligan cũng như thế giới bị chia cắt, đáng sợ của anh ta.\r\n\r\n', 9, 2),
(7, 'Tiếng Vọng ', 252000.00, 'TIẾNG VỌNG.jpg', 'Tiếng vọng là cuốn tiểu thuyết đồ sộ khai phá lĩnh vực suy lý và tâm lý học của nhà văn nổi tiếng Trung Quốc – Đông Tây. Bắt đầu từ một vụ án mang tên “trọng án Đại Khanh”, nạn nhân là một phụ nữ trẻ được phát hiện trôi nổi trên sông trong trạng thái cơ thể không còn nguyên vẹn, Tiếng vọng dõi theo hành trình phá án gian nan của nữ cảnh sát dày dạn kinh nghiệm Nhiễm Đông Đông. Dù đã phá nhiều vụ án khó nhưng lần này, cái cô cần đưa ra ánh sáng không chỉ là hung thủ – một kẻ từng chịu nhiều tổn thương tinh thần đến mức thành bệnh tâm lý mà còn là các nghi can đã gián tiếp “nhúng tay” vào tội ác nhưng lại có bằng chứng ngoại phạm. Hành trình phá án cũng là hành trình Nhiễm Đông Đông “đào sâu” vào nội tâm của chính mình, lần đầu tiên nhận ra việc ngày ngày phải đối mặt với những nghi phạm, việc phải luôn giữ tâm thế phản biện và hoài nghi đã ảnh hưởng nghiêm trọng thế nào đến đời sống hôn nhân của cô. Cũng là lần đầu tiên cô nhận ra, cuộc hôn nhân từng vô cùng hạnh phúc của mình có nguy cơ tan vỡ bởi “hai nửa” của nó đã không còn hòa hợp: một người theo đuổi chủ nghĩa lý tưởng trong hôn nhân còn một người biết chấp nhận thực tế. “Trọng án Đại Khanh” khép lại nhưng mở ra vấn đề lớn nhất mà ta phải lựa chọn khi trưởng thành: “thỏa hiệp” hay không khi mà cuộc sống này không cho phép con người ta được hoàn toàn sống bằng lý tưởng?\r\n\r\n', 9, 2),
(8, 'Kẻ Không Thể Giã Từ', 139000.00, 'Kẻ Không Thể Giã Từ.jpg', '\r\nMột vụ án chưa giải quyết xong, một vụ án khác lại đến.\r\n\r\nẨn dưới vẻ uể oải thường trực của đời sống giàu có, là những khuôn mặt người như những con búp bê sứ đã vỡ vụn từ lâu nhưng được chắp vá lại bằng sự hào nhoáng đến chán chường.\r\n\r\nTrong Kẻ không thể giã từ, một lần nữa độc giả cùng Philip Marlowe dấn bước vào vụ án càng lúc càng rắc rối, nơi những bóng ma quá khứ trở về để hoàn tất lời từ biệt.\r\n\r\n“Tôi dịch những gì tôi thích đọc. Tôi đã dịch tất cả các tiểu thuyết của Raymond Chandler. Tôi thích phong cách của anh ấy rất nhiều. Tôi đã đọc The Long Goodbye năm hoặc sáu lần.”', 10, 2),
(14, 'Thám Tử Lừng Danh Conan - Tập 102', 23000.00, 'conan_bia_tap-102.jpg', 'Jugo Yokomizo tình cờ gặp Chihaya Hagiwara tại bữa tiệc mai mối!\r\n\r\nĐiều gì hiện lên trong tâm trí Chihaya khi cô chăm chú nhìn Wataru Takagi!?\r\n\r\nChí nguyện “hoa anh đào” được tiếp nối qua bao thế hệ...\r\n\r\nVà...\r\n\r\nChẳng hề báo trước, tập truyện này sẽ mở ra những diễn biến đầy bất ngờ.\r\n\r\n', 0, 5),
(15, 'MASHLE - Tập 11: Mash Burnedead Và Thần Nước', 28000.00, 'mashle_bia_tap-11-1.jpg', 'Trận chiến giữa hai con trai của Innocent Zero: Mash vs. Domina!! Chiếc ghế Thần Nhãn treo lơ lửng trước mắt, pháp thuật nước và “pháp thuật” vật lí va chạm dữ dội!! Domina là kẻ luôn khát khao sự công nhận của cha một cách méo mó. Hắn căm ghét tình bạn và gia đình nên nhăm nhe phá hủy những điều mà Mash luôn trân trọng. Khi “cơn thịnh nộ” đạt đến cao trào, pháp thuật tối thượng bộc lộ!! Đứng trước sức mạnh tương đương thần thánh, Mash sẽ xử trí ra sao…!? Vận mệnh của Thế giới đánh cược vào kì thi Thần Nhãn lần này. Và mọi chuyện bỗng rẽ sang một hướng bất ngờ!!\r\n\r\n', 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Admin', '123456', 'admin@gmail.com', 'Hà Nội', '0987654321', 1),
(2, 'Hoàng Long', '123456', 'longhh7@fpt.edu.vn', 'Hà Nội', '0978654312', 0),
(3, 'Thành Trung', '1234565', 'trungnt173@fpt.edu.vn', 'Hà Nội', '0967812345', 0),
(4, 'abc', '123', 'pphu0936@gmail.com', 'ha noi', '0978650293', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_sanpham` (`idpro`) USING BTREE,
  ADD KEY `cart_user` (`iduser`) USING BTREE,
  ADD KEY `cart_bill` (`idbill`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
