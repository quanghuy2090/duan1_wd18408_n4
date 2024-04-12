-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2024 lúc 01:56 PM
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
(66, 1, 'Admin', 'Hà Nội', 'admin@gmail.com', '0987654321', 0, '07:38:22am 29/02/2024', 162000, 4, '', '', '');

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
(15, 'chất lượng tốt', 1, 7, '2024-03-01'),
(16, 'ok', 1, 7, '2024-03-05'),
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
(1, 'Bộ thu đông dài tay khóa Micky ', 344444.00, '1e5e9c2e32c0b14b430336d56193d09e.jpg_720x720q80.jpg_.webp', '➬ Chất Liệu: Nỉ bóng<br>\r\n➬ Form chuẩn phù hợp với mọi vóc dáng: Co dãn 4 chiều thể thao, mịn tạo cảm giác vô cùng thoải mái cho người mặc.<br>\r\n➬ Kiểu dáng trẻ trung phù hợp với mọi độ tuổi.<br>\r\n➬ Đủ size cho bạn lựa chọn<br>\r\n➬ Mặc nhà, có thể sử dụng khi dạo phố, chơi thể thao hay đi du lịch.<br>', 10, 6),
(2, 'Bộ nỉ nam kéo khóa tay trắng ', 222222.00, '7f14c2832fe5616e9376c2fd73aaf49d.jpg_720x720q80.jpg_.webp', '➬ Chất Liệu: Nỉ bóng  Cao Cấp <br>\r\n➬ Form chuẩn phù hợp với mọi vóc dáng: Co dãn 4 chiều thể thao, mịn tạo cảm giác vô cùng thoải mái cho người mặc.<br>\r\n➬ Kiểu dáng trẻ trung phù hợp với mọi độ tuổi.<br>\r\n➬ Đủ size cho bạn lựa chọn<br>\r\n➬ Mặc nhà, có thể sử dụng khi dạo phố,  hay đi du lịch', 9, 6),
(3, 'Áo phông đen đẹp tuyệt vời', 135000.00, 'asm.webp', 'Đẹp và chắc', 9, 1),
(5, 'Quần jean nam rách gối vải bò ', 430000.00, 'e555be667e82c7faf367f5697dc1c37c.jpg_720x720q80.jpg_.webp', 'Chất liệu: JEAN cao cấp,bên màu co dãn tốt <br>\r\nThiết kế:quần jean nam rách thể hiện sự bụi,cá tính đầy mạnh mẽ chuẩn men,giúp bạn trông thon gọn và cao hơn khi mặc <br>\r\nDây khóa kéo của mỗi chiếc quần jeans nam cao cấp sẽ có chất liệu là đồng<br>\r\n\r\nQuần jean nam cao cấp có thể kết hợp với áo sơ mi,áo thun,áo khoác ….<br>\r\nMàu sắc:hài hòa,dễ mặc,thích hợp với nhiều dáng người<br>\r\nThiết kế:Quần jean nam rách và quần jean nam trơnQuần jean nam hay quần bò nam được xem là một trong những món đồ thời trang được các chàng trai ưa chuộng vì kiểu dáng đơn giản, dễ mặc phù hợp với tính cách thoải mái, phóng khoáng. Quần jean nam phổ biến để mặc đi chơi, đi làm…', 10, 3),
(6, 'Áo phông trẻ trung MH3800', 196000.00, 'tải xuống (1).jpeg', 'đẹp và ok', 9, 1),
(7, 'Áo khoác Pink siêu đẹp phong cách thời trang', 252000.00, 'aokhoani.jpeg', 'Phù hợp mọi lứa tuổi', 9, 2),
(8, 'Áo Khoác Nam Màu Loang Phong Cách Thời Trang ', 139000.00, 'bd38dd61f420db267d0bbdab6def1a7b.jpg_720x720q80.jpg_.webp', 'ok', 10, 2),
(14, 'Áo thun nam nữ Cổ Tròn Phối Chữ to TOMMY', 54000.00, 'ao.jpg', 'Chất liệu: Cotton\r\n<br>\r\n\r\nMàu sắc: Đen, Trắng\r\n<br>\r\n\r\nKích cỡ: Sản phẩm nam nữ Unisex size từ 40-65kg\r\n\r\n<br>\r\ntùy chiều cao nha', 0, 1),
(15, 'ÁO POLO UNISEX ÁO THUN CÓ CỔ PHỐI MÀU ĐEN TRẮNG', 120000.00, 'aop.jpg', 'dẹp va ok\r\n\r\n', 0, 1);

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
(2, 'user', '123456', 'longhh7@fpt.edu.vn', 'Hà Nội', '0978654312', 0),
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
