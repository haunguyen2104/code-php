-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2021 lúc 02:38 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nguyentrunghau_2119110245`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_2119110245`
--

CREATE TABLE `nguyentrunghau_2119110245` (
  `pageId` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `createBy` int(11) NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_admin`
--

CREATE TABLE `nguyentrunghau_admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` char(32) NOT NULL,
  `level` tinyint(2) NOT NULL,
  `trash` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_admin`
--

INSERT INTO `nguyentrunghau_admin` (`adminId`, `username`, `adminName`, `email`, `pass`, `level`, `trash`) VALUES
(1, 'haunguyen', 'HauNguyenn', 'nthctqn@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 0, 0),
(2, 'hauunguyen', 'Hau Nguyen Trung', 'nthctqn@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 1, 0),
(3, 'haunguyenn', 'Trung Hau Nguyen', 'nthctqn@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_brand`
--

CREATE TABLE `nguyentrunghau_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(100) CHARACTER SET utf8 NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_brand`
--

INSERT INTO `nguyentrunghau_brand` (`brandId`, `brandName`, `alias`, `trash`, `status`) VALUES
(1, 'OPPO', 'oppo', 0, 1),
(2, 'ASUS', 'asus', 0, 1),
(3, 'LOGITECH', 'logitech', 0, 1),
(4, 'APPLE', 'apple', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_cart`
--

CREATE TABLE `nguyentrunghau_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(255) CHARACTER SET utf8 NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_cart`
--

INSERT INTO `nguyentrunghau_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(28, 'hb1dkvk8ptdfhleq375m01e891', 1, ' Ariyan Lorem Ipsum fsdfasdaf', 525.00, 1, 'upload/a2d9ff0c56.png'),
(42, 'ki70g8rmb4mfqs7cmei2l3qpi3', 10, 'Woman Tshirt 03', 300.00, 1, 'upload/a2fccb0144.png'),
(43, 'e6r6avk209clao063d5p18i597', 7, 'Mans Tshirt 02', 400.00, 1, 'upload/4b2b2f0556.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_category`
--

CREATE TABLE `nguyentrunghau_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parentId` int(11) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_category`
--

INSERT INTO `nguyentrunghau_category` (`catId`, `catName`, `alias`, `parentId`, `trash`, `status`) VALUES
(2, 'Điện Thoại', 'dien-thoai', 0, 0, 1),
(3, 'Máy Vi Tính', 'may-vi-tinh', 0, 0, 1),
(4, 'Phụ Kiện', 'phu-kien', 0, 0, 1),
(5, 'Máy Tính Bảng', 'may-tinh-bang', 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_customer`
--

CREATE TABLE `nguyentrunghau_customer` (
  `customerId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trash` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_customer`
--

INSERT INTO `nguyentrunghau_customer` (`customerId`, `userId`, `fullname`, `address`, `phone`, `email`, `trash`) VALUES
(2, 0, '', 'Groan Puran Polton south Dhaka ', '4544555455', 'kaziariyan@gmail.com', 0),
(3, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(4, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(5, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(6, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(7, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(8, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(9, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(10, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(11, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(12, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(13, 0, 'tuidathangdo', 'HCM', '0123456', 'user1@gmail.com', 0),
(14, 0, 'tuidathangdo', 'HCM', '0123456', 'user1@gmail.com', 0),
(15, 0, 'cxcxc', 'xcx', '545', 'adminuser@gmail', 0),
(16, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(17, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(18, 0, 'Nguy?n Trung H?u', 'Tây Ninh', '0328670844', 'user@gmail.com', 0),
(19, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0),
(20, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user1@gmail.com', 0),
(21, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user1@gmail.com', 0),
(22, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user1@gmail.com', 0),
(23, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user1@gmail.com', 0),
(24, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user1@gmail.com', 0),
(25, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user1@gmail.com', 0),
(26, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0),
(27, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0),
(28, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0),
(29, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0),
(30, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0),
(31, 0, 'Nguy?n Trung H?u', 'Q9-HCM', '0328670844', 'user@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_image`
--

CREATE TABLE `nguyentrunghau_image` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `position` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_image`
--

INSERT INTO `nguyentrunghau_image` (`id`, `title`, `image`, `imageName`, `position`, `trash`, `status`) VALUES
(1, 'Slider1', 'Hau_Slide01.png', '', 1, 0, 1),
(2, 'Slider2', 'Hau_Slide02.png', '', 1, 0, 1),
(3, 'Slider3', 'Hau_Slide03.png', '', 1, 0, 1),
(4, 'Slider4', 'Hau_Slide04.png', '', 1, 0, 1),
(5, 'Slider5', 'Hau_Slide05.png', '', 1, 0, 1),
(6, 'Slider6', 'Hau_Slide06.png', '', 1, 0, 1),
(7, 'Slider7', 'Hau_Slide07.png', '', 1, 0, 1),
(12, 'Slider08', 'Hau_Slider08.png', '', 0, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_link`
--

CREATE TABLE `nguyentrunghau_link` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `order` tinyint(4) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_link`
--

INSERT INTO `nguyentrunghau_link` (`id`, `title`, `Position`, `Image`, `link`, `order`, `trash`, `status`) VALUES
(1, 'Về chúng tôi', 'Bottommenu1', '', 'page/showpage/1', 1, 0, 1),
(2, 'Chính sách bán hàng', 'Bottommenu1', '', 'page/showpage/2', 2, 0, 1),
(3, 'Tài khoản', 'Bottommenu2', '', '#', 1, 0, 1),
(4, 'Đăng ký', 'Bottommenu2', '', '#', 2, 0, 1),
(5, 'Liên hệ', 'Bottommenu2', '', 'page/showpage/6', 3, 0, 1),
(6, 'Liên hệ', 'globalnav', '', 'page/showpage/6', 2, 0, 1),
(7, 'Về chúng tôi', 'globalnav', '', 'page/showpage/1', 1, 0, 1),
(8, 'Chính sách bảo mật', 'Bottommenu1', '', 'page/showpage/3', 3, 0, 1),
(9, 'Chính sách vận chuyển', 'Bottommenu1', '', 'page/showpage/4', 4, 0, 1),
(10, 'Hướng dẫn thanh toán', 'Bottommenu1', '', 'page/showpage/5', 5, 0, 1),
(11, 'Bản đồ', 'globalnav', '', 'page/showpage/7', 3, 0, 1),
(12, 'Chính sách hỗ trợ', 'bottommenu2', '', 'page/showpage/8', 4, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_order`
--

CREATE TABLE `nguyentrunghau_order` (
  `orderId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `total` float(10,2) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `trash` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_order`
--

INSERT INTO `nguyentrunghau_order` (`orderId`, `customerId`, `orderDate`, `total`, `note`, `status`, `trash`) VALUES
(8, 2, '0000-00-00 00:00:00', 500.00, '', 1, 0),
(9, 2, '0000-00-00 00:00:00', 400.00, '', 0, 0),
(10, 2, '0000-00-00 00:00:00', 450.00, '', 1, 0),
(11, 8, '2021-06-14 21:28:24', 100000000.00, '??t ch?i thôi :v', 1, 0),
(12, 9, '2021-06-14 21:28:38', 100000000.00, '??t ch?i thôi :v', 1, 0),
(13, 10, '2021-06-14 21:29:14', 100000000.00, '??t ch?i thôi :v', 1, 0),
(14, 11, '2021-06-14 21:29:29', 100000000.00, '??t ch?i thôi :v', 1, 0),
(15, 12, '2021-06-14 21:30:04', 100000000.00, '??t ch?i thôi :v', 1, 0),
(16, 13, '2021-06-14 21:30:45', 100000000.00, 'Ok', 1, 0),
(17, 14, '2021-06-14 21:31:25', 100000000.00, 'Ok', 1, 0),
(18, 15, '2021-06-14 21:32:09', 100000000.00, 'xxz', 1, 0),
(19, 16, '2021-06-14 23:01:22', 30170000.00, 'kkkk', 1, 0),
(20, 17, '2021-06-14 23:01:33', 30170000.00, 'kkkk', 1, 0),
(21, 18, '2021-06-14 23:02:07', 30170000.00, '0122', 1, 0),
(22, 19, '2021-06-16 04:56:24', 6990000.00, 'Hàng ok', 1, 0),
(23, 20, '2021-06-16 05:11:10', 6990000.00, 'Hàng khá là ok và ch?t l??ng mlem mlem', 1, 0),
(24, 21, '2021-06-16 05:12:26', 6990000.00, 'Hàng khá là ok và ch?t l??ng mlem mlem', 1, 0),
(25, 22, '2021-06-16 05:12:48', 6990000.00, 'Hàng khá là ok và ch?t l??ng mlem mlem', 1, 0),
(26, 23, '2021-06-16 05:12:52', 6990000.00, 'Hàng khá là ok và ch?t l??ng mlem mlem', 1, 0),
(27, 24, '2021-06-16 05:13:12', 6990000.00, 'Hàng khá là ok và ch?t l??ng mlem mlem', 1, 0),
(28, 25, '2021-06-16 05:14:05', 6990000.00, 'Hàng khá là ok và ch?t l??ng mlem mlem', 1, 0),
(29, 26, '2021-06-16 09:47:33', 23990000.00, '12121', 1, 0),
(30, 27, '2021-06-16 09:49:05', 23990000.00, '12121', 1, 0),
(31, 28, '2021-06-16 10:13:25', 23990000.00, '12121', 1, 0),
(32, 29, '2021-06-16 10:14:28', 23990000.00, '12121', 1, 0),
(33, 30, '2021-06-16 10:18:48', 23990000.00, 'fgfg', 1, 0),
(34, 31, '2021-06-16 18:51:02', 30980000.00, 'haha', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_orderdetail`
--

CREATE TABLE `nguyentrunghau_orderdetail` (
  `orderDetailId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `trash` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_orderdetail`
--

INSERT INTO `nguyentrunghau_orderdetail` (`orderDetailId`, `orderId`, `productId`, `price`, `quantity`, `trash`) VALUES
(1, 34, 1, 23990000, 1, 0),
(2, 34, 2, 6990000, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_page`
--

CREATE TABLE `nguyentrunghau_page` (
  `pageId` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `createBy` int(11) NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_page`
--

INSERT INTO `nguyentrunghau_page` (`pageId`, `title`, `content`, `createBy`, `createDate`, `updateDate`, `trash`, `status`) VALUES
(1, 'Vê chúng tôi', '1. Quá trình hình thành:Công ty TNHH Thế Giới Di Động (Mobile World Co. Ltd) thành lập vào tháng 03/2004 bởi 5 thành viên đồng sáng lập là Trần Lê Quân, Nguyễn Đức Tài, Đinh Anh Huân, Điêu Chính Hải Triều và Trần Huy Thanh Tùng, lĩnh vực hoạt động chính của công ty bao gồm: mua bán sửa chữa các thiết bị liên quan đến điện thoại di động, thiết bị kỹ thuật số và các lĩnh vực liên quan đến thương mại điện tử.Bằng trải nghiệm về thị trường điện thoại di động từ đầu những năm 1990, cùng với việc nghiên cứu kỹ tập quán mua hàng của khách hàng Việt Nam, thegioididong.com đã xây dựng một phương thức kinh doanh chưa từng có ở Việt Nam trước đây. Công ty đã xây dựng được một phong cách tư vấn bán hàng đặc biệt nhờ vào một đội ngũ nhân viên chuyên nghiệp và trang web www.thegioididong.com hỗ trợ như là một cẩm nang về điện thoại di động và một kênh thương mại điện tử hàng đầu tại Việt Nam.Hiện nay, số lượng điện thoại bán ra trung bình tại thegioididong.com khoảng 300.000 máy/tháng chiếm khoảng 15% thị phần điện thoại chính hãng cả nước. Trung bình một tháng bán ra hơn 10.000 laptop trở thành Nhà bán lẻ bán ra số lượng laptop lớn nhất cả nước.Việc bán hàng qua mạng và giao hàng tận nhà trên phạm vi toàn quốc đã được triển khai từ đầu năm 2007, hiện nay lượng khách hàng mua laptop thông qua website www.thegioididong.com và tổng đài 1900.561.292 đã tăng lên đáng kể, trung bình 5.000 - 6.000 đơn hàng mỗi tháng. Đây là một kênh bán hàng tiềm năng và là một công cụ hữu hiệu giúp các khách hàng ở những khu vực xa mua được một sản phẩm ưng ý khi không có điều kiện xem trực tiếp sản phẩm.www.thegioididong.com là website thương mại điện tử lớn nhất Việt Nam với số lượng truy cập hơn 1.200.000 lượt ngày, cung cấp thông tin chi tiết về giá cả, tính năng kĩ thuật của hơn 500 model điện thoại và 200 model laptop của tất cả các nhãn hiệu chính thức tại Việt Nam.Thegioididong.com đã nhận được nhiều giải thưởng do người tiêu dùng cũng như các đối tác bình chọn trong nhiều năm liền. Một số giải thưởng tiêu biểu:\r\nTop 500 nhà bán lẻ hàng đầu Châu Á - Thái Bình Dương 2010\r\nTop 5 nhà bán phát triển nhanh nhất Châu Á - Thái Bình Dương 2010\r\nTop 500 Fast VietNam 2010 (Thegioididong.com nằm trong top 4)\r\nNhà bán lẻ được tín nhiệm nhất 4 năm liên tiếp 2007, 2008, 2009, 2010 (Vietnam Mobile Awards)\r\nNhà bán lẻ điện thoại di động có đa dạng mặt hàng nhất\r\nNhà bán lẻ ĐTDĐ chăm sóc và hỗ trợ khách hàng tốt nhất\r\nGiải thưởng thương hiệu nổi tiếng tại Việt Nam năm 2008 theo nhận biết của người tiêu dùng do Phòng thương mại và công nghiệp Việt Nam cấp\r\nGiải thưởng nhà bán lẻ của năm do báo PCWord Việt Nam tổ chức\r\nCác bằng khen, chứng nhận của các cơ quan chính quyền trao tặng\r\n2. Quá trình phát triển:Tháng 3/2004: Ra quyết định thành lập công tySau 3 tháng thành lập, công ty ra mắt website www.thegioimobi.com và 3 cửa hàng nhỏ tại đường Hoàng Văn Thụ, Lê Lai, CMT8 (Tp.HCM).Tháng 10/2004, ban giám đốc công ty quyết định khai trương siêu thị đầu tiên tại 89A, Nguyễn Đình Chiểu, Tp.HCM với tên gọi ban đầu là www.thegioididong.com. Với quy mô hơn 200 m2, siêu thị được xây dựng khang trang này đã thành công rực rỡ bởi nó khác biệt hoàn toàn với hơn 10.000 cửa hàng điện thoại di động nhỏ lẻ lúc bấy giờ trên địa bàn thành phố Hồ Chí Minh.Tháng 1/2005 siêu thị thứ 2 của www.thegioididong.com ra mắt tại số 330 Cộng Hòa (TPHCM).Tháng 1/2006, siêu thị thứ 3 được khai trương tại 26 Phan Đăng Lưu và 2 tháng sau lại thêm 1 cửa hàng nữa ra đời tại 182A, Nguyễn Thị Minh Khai.Giai đoạn 2007 - 2009 là giai đoạn thegioididong.com mở rộng ở TPHCM, Đà Nẵng và Hà Nội.Đến cuối năm 2009, thegioididong.com có tổng cộng 38 siêu thị với 19 siêu thị tại TPCHM, 5 siêu thị tại Hà Nội, 2 siêu thị tại Đà Nẵng và 12 siêu thị khác tại các tỉnh Đồng Nai, Long An, Bình Dương, Cà Mau,…2007 cũng là năm Công ty TNHH Thế Giới Di Động chuyển đổi sang Công ty Cổ phần để mở rộng cơ hội phát triển.Từ năm 2010 tới 2011 đánh dấu bước phát triển vượt bậc với sự ra đời liên tiếp của các siêu thị thegioididong.com. Đoàn quân thegioididong.com đã thực hiện cuộc dàn quân đầy kiêu hãnh, khắp nơi trên cả nước đều có sự hiện diện của màu vàng đen đặc trưng. Cuối năm 2010, thegioididong.com tăng gấp đôi số siêu thị so với năm 2009, cuối năm 2011, số siêu thị tăng lên gần gấp 3 so với năm 2010.Một sự kiện có ý nghĩa quan trọng vào cuối năm 2010 là sự ra mắt của một thành viên khác thuộc thegioididong.com - Hệ thống bán lẻ điện máy toàn quốc - dienmayxanh.com. Tính đến tháng 6/2012, dienmayxanh.com đã có 12 siêu thị tại 9 tỉnh thành trên cả nước và sẽ tiếp tục mở rộng để phục vụ khách hàng trên cả nước.Đến nay, thegioididong.com đã có hơn 220 siêu thị phủ sóng khắp 63/63 tỉnh thành trên cả nước.3. Đội ngũ nhân sựHội Đồng Quản Trị do Đại hội đồng cổ đông tín nhiệm bầu ra. Hội đồng quản trị là cơ quan quản trị toàn bộ mọi hoạt động của công ty, các chiến lược, kế hoạch sản xuất và kinh doanh trong nhiệm kỳ của mình.Ban Giám đốc sẽ chịu trách nhiệm về các mặt hoạt động của công ty trước Hội đồng Quản trị và pháp luật hiện hành, quyết định các chủ trương, chính sách, mục tiêu chiến lược của công ty, đồng thời giám sát và kiểm tra tất cả các hoạt động về sản xuất kinh doanh, đầu tư của công ty.Gồm có 5 khối hoạt động chính và độc lập với nhau, với đội ngũ nhân viên phần lớn là trình độ cao đẳng, đại học và một số sau đại học.\r\nPhòng kiểm soát nội bộ\r\nKhối tài chính\r\nKhối hành chính nhân sự\r\nKhối Công nghệ thông tin\r\nKhối Kinh doanh - Tiếp thị\r\nSau 7 năm phát triển, đội ngũ nhân sự của thegioididong.com cũng thay đổi đáng kể qua các năm:\r\nNĂM\r\nSỐ LƯỢNG NHÂN VIÊN\r\n\r\n12/2004: 13\r\n12/2005: 45\r\n12/2006: 109\r\n12/2007: 832\r\n12/2008: 1.037\r\n12/2009: 1.474\r\n12/2010: 3.107\r\n05/2012: 6.848\r\n', 1, '2021-03-02 23:09:19', '0000-00-00 00:00:00', 0, 1),
(2, 'Chính sách bán hàng', ' Nhóm sản phẩm TGDĐ kinh doanh mới và trưng bày trừ Phụ kiện không điện & Sản phẩm đã sử dụng\r\n\r\nKhách hàng muốn đổi trả sản phẩm chọn 1 trong các phương thức bên dưới:\r\n\r\nNỘI DUNG CHÍNH SÁCH\r\n\r\nĐIỀU KIỆN ÁP DỤNG\r\n\r\n1) BẢO HÀNH CÓ CAM KẾT TRONG 12 THÁNG\r\n\r\nRIÊNG Phụ kiện có điện AVA bảo hành 3 tháng, đồng hồ thời trang chỉ bảo hành bộ máy trừ pin, không bảo hành dây, vỏ, mặt kính\r\n\r\nChỉ áp dụng cho sản phẩm chính, KHÔNG áp dụng cho phụ kiện đi kèm sản phẩm chính\r\n\r\n+ Bảo hành trong vòng 15 ngày (tính từ ngày TGDD nhận máy ở trạng thái lỗi và đến ngày gọi khách hàng ra lấy lại máy đã bảo hành)\r\n\r\n+ Sản phẩm không bảo hành lại lần 2 trong 30 ngày kể từ ngày máy được bảo hành xong. \r\n\r\n+ Nếu TGDD vi phạm cam kết (bảo hành quá 15 ngày hoặc phải bảo hành lại sản phẩm lần nữa trong 30 ngày kể từ lần bảo hành trước), Khách hàng được áp dụng phương thức Hư gì đổi nấy ngay và luôn hoặc Hoàn tiền với mức phí giảm 50%.\r\n\r\n*Từ tháng thứ 13 trở đi, không áp dụng bảo hành cam kết, chỉ áp dụng bảo hành hãng (nếu có)\r\n\r\n- Sản phẩm đủ điều kiện bảo hành của hãng.\r\n\r\n2) HƯ GÌ ĐỔI NẤY NGAY VÀ LUÔN (KHÔNG áp dụng cho Đồng hồ, phụ kiện có điện)\r\n\r\nSản phẩm hư gì thì đổi đó (cùng model, cùng dung lượng, cùng màu sắc...) đối với sản phẩm chính và đổi tương đương đối với phụ kiện đi kèm, cụ thể:\r\n\r\n2.1) Hư sản phẩm chính thì đổi sản phẩm chính mới\r\n\r\n- Tháng đầu tiên kể từ ngày mua: miễn phí\r\n\r\n- Tháng thứ 2 đến tháng thứ 12: phí 10% giá trị hóa đơn/tháng.\r\n\r\n(VD: tháng thứ 2 phí 10%, tháng thứ 3 phí 20%...)\r\n\r\nLưu ý: Nếu không có sản phẩm chính đổi cho Khách hàng thì áp dụng chính sách Bảo hành có cam kết hoặc Hoàn tiền với mức phí giảm 50%.\r\n\r\n2.2) Hư phụ kiện đi kèm thì đổi phụ kiện có cùng công năng mà TGDD đang kinh doanh\r\n\r\nPhụ kiện đi kèm được đổi miễn phí trong vòng 12 tháng kể từ ngày mua sản phẩm chính bằng hàng phụ kiện TGDĐ đang kinh doanh mới với công năng tương đương.\r\n\r\nLưu ý: Nếu không có phụ kiện tương đương hoặc Khách hàng không thích thì áp dụng bảo hành hãng\r\n\r\n2.3) Lỗi phần mềm không áp dụng, mà chỉ khắc phục lỗi phần mềm\r\n\r\n2.4) Trường hợp Khách hàng muốn đổi full box (nguyên thùng, nguyên hộp): ngoài việc áp dụng mức phí đổi trả tại Mục 2.1 thì Khách hàng sẽ trả thêm phí lấy full box tương đương 20% giá trị hóa đơn.\r\n\r\n- Sản phẩm đổi trả phải giữ nguyên 100% hình dạng ban đầu và đủ điều kiện bảo hành của hãng.\r\n\r\n- Thân máy không trầy xước màn hình (áp dụng cho Điện thoại, Tablet, Laptop, Màn hình máy tính, Máy tính để bàn)\r\n\r\n- Sản phẩm chỉ dùng cho mục đích sử dụng cá nhân, không áp dụng việc sử dụng sản phẩm cho mục đích thương mại. \r\n\r\n3) HOÀN TIỀN: áp dụng cho sản phẩm lỗi và không lỗi\r\n\r\n- Tháng đầu tiên kể từ ngày mua: phí 20% giá trị hóa đơn\r\n\r\n- Tháng thứ 2 đến tháng thứ 12: phí 10% giá trị hóa đơn/tháng.\r\n\r\n- Riêng phụ kiện có điện AVA: áp dụng hoàn tiền trong 3 tháng với mức phí như trên. Từ tháng thứ 4 trở đi không áp dụng hoàn tiền. \r\n\r\n- Sản phẩm đổi trả phải giữ nguyên 100% hình dạng ban đầu và đủ điều kiện bảo hành của hãng.\r\n\r\n- Thân máy không trầy xước màn hình (áp dụng cho Điện thoại, Tablet, Laptop, Màn hình máy tính, Máy tính để bàn, đồng hồ)\r\n\r\n- Sản phẩm chỉ dùng cho mục đích sử dụng cá nhân, không áp dụng việc sử dụng sản phẩm cho mục đích thương mại.\r\n\r\n- Hoàn trả lại đầy đủ hộp, sạc, phụ kiện đi kèm:\r\n\r\n+ Mất hộp thu phí 2% giá trị hóa đơn đối với nhóm Điện thoại, Tablet, Laptop, Màn hình máy tính, Máy tính để bàn, Đồng hồ, Máy in\r\n\r\n+ Mất phụ kiện thu phí theo giá bán tối thiểu trên website TGDĐ và chính hãng (tối đa 5% giá trị hóa đơn) cho tất cả nhóm sản phẩm\r\n\r\n- Hoàn trả toàn bộ hàng khuyến mãi. Nếu mất hàng khuyến mãi sẽ thu phí theo mức giá đã được công bố.\r\n\r\n2. Nhóm Phụ kiện không điện \r\nKhông áp dụng bảo hành và đổi trả\r\n\r\n\r\nBalo, túi chống sốc\r\n\r\nDây đồng hồ\r\n\r\nĐế, móc điện thoại\r\n\r\nGiá đỡ laptop, điện thoại\r\n\r\nMiếng lót bàn phím\r\n\r\nỐp lưng điện thoại\r\n\r\nỐp lưng máy tính bảng\r\n\r\nPhụ kiện điện thoại khác\r\n\r\nPin tiểu, pin điện thoại\r\n\r\nQuạt mini\r\n\r\nTúi chống nước\r\n\r\nTúi đựng AirPods\r\n\r\n3. Nhóm sản phẩm đã sử dụng\r\nNỘI DUNG CHÍNH SÁCH\r\n\r\nĐIỀU KIỆN ÁP DỤNG\r\n\r\nSP lỗi kĩ thuật tháng đầu tiên\r\n\r\n- Áp dụng bảo hành\r\n\r\n- Hoặc hoàn tiền phí 10% giá trị hoá đơn\r\n\r\nTừ tháng thứ 2 trở đi \r\n\r\n- Không áp dụng đổi trả. \r\n\r\n- Áp dụng bảo hành hãng nếu sản phẩm còn thời gian bảo hành của hãng và đủ điều kiện bảo hành của hãng\r\n\r\n- Sản phẩm đổi trả phải giữ nguyên 100% hình dạng ban đầu và đủ điều kiện bảo hành của hãng.\r\n\r\n- Sản phẩm chỉ dùng cho mục đích sử dụng cá nhân, không áp dụng việc sử dụng sản phẩm cho mục đích thương mại.\r\n\r\n- Hoàn trả lại đầy đủ sạc, phụ kiện đi kèm: mất phụ kiện thu phí theo giá bán tối thiểu trên website TGDĐ và chính hãng (tối đa 5% giá trị hóa đơn) ', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1),
(3, 'Chính sách bảo mật', 'Thegioididong.com cam kết sẽ bảo mật những thông tin mang tính riêng tư của bạn. Bạn vui lòng đọc bản “Chính sách bảo mật” dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập: Thu thập thông tin cá nhânĐể truy cập và sử dụng một số dịch vụ tại Thegioididong.com, bạn có thể sẽ được yêu cầu đăng ký với chúng tôi thông tin cá nhân (Email, Họ tên, Số ĐT liên lạc…). Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp. Thegioididong.com không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo. Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang bạn xem, số links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến site thegioididong.com. Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) bạn sử dụng mỗi khi truy cập vào thegioididong.com, bao gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.Sử dụng thông tin cá nhânThegioididong.com thu thập và sử dụng thông tin cá nhân bạn với mục đích phù hợp và hoàn toàn tuân thủ nội dung của “Chính sách bảo mật” này. Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới các hình thức như: gởi thư ngỏ, đơn đặt hàng, thư cảm ơn, thông tin về kỹ thuật và bảo mật…Chia sẻ thông tin cá nhânNgoại trừ các trường hợp về Sử dụng thông tin cá nhân như đã nêu trong chính sách này, chúng tôi cam kết sẽ không tiết lộ thông tin cá nhân bạn ra ngoài.Trong một số trường hợp, chúng tôi có thể thuê một đơn vị độc lập để tiến hành các dự án nghiên cứu thị trường và khi đó thông tin của bạn sẽ được cung cấp cho đơn vị này để tiến hành dự án. Bên thứ ba này sẽ bị ràng buộc bởi một thỏa thuận về bảo mật mà theo đó họ chỉ được phép sử dụng những thông tin được cung cấp cho mục đích hoàn thành dự án.Chúng tôi có thể tiết lộ hoặc cung cấp thông tin cá nhân của bạn trong các trường hợp thật sự cần thiết như sau: (a) khi có yêu cầu của các cơ quan pháp luật; (b) trong trường hợp mà chúng tôi tin rằng điều đó sẽ giúp chúng tôi bảo vệ quyền lợi chính đáng của mình trước pháp luật; (c) tình huống khẩn cấp và cần thiết để bảo vệ quyền an toàn cá nhân của các thành viên Thegioididong.com khác.Truy xuất thông tin cá nhânBất cứ thời điểm nào bạn cũng có thể truy cập và chỉnh sửa những thông tin cá nhân của mình theo các links thích hợp mà chúng tôi cung cấp.Bảo mật thông tin cá nhânThegioididong.com cam kết bảo mật thông tin cá nhân của bạn bằng mọi cách thức có thể. Chúng tôi sẽ sử dụng nhiều công nghệ bảo mật thông tin khác nhau nhằm bảo vệ thông tin này không bị truy lục, sử dụng hoặc tiết lộ ngoài ý muốn. Thegioididong.com khuyến cáo bạn nên bảo mật các thông tin liên quan đến mật khẩu truy xuất của bạn và không nên chia sẻ với bất kỳ người nào khác. Nếu sử dụng máy tính chung nhiều người, bạn nên đăng xuất, hoặc thoát hết tất cả cửa sổ Website đang mở. Sử dụng “Cookie”Thegioididong.com.com dùng \"Cookie\" để giúp cá nhân hóa và nâng cao tối đa hiệu quả sử dụng thời gian trực tuyến của bạn. Một cookie là một file văn bản được đặt trên đĩa cứng của bạn bởi một máy chủ của trang web. Cookie không được dùng để chạy chương trình hay đưa virus vào máy tính của bạn. Cookie được chỉ định vào máy tính của bạn và chỉ có thể được đọc bởi một máy chủ trang web trên miền được đưa ra cookie cho bạn. Một trong những mục đích của Cookie là cung cấp những tiện ích để tiết kiệm thời gian của bạn khi truy cập tại website hoặc viếng thăm website lần nữa mà không cần đăng ký lại thông tin sẵn có.Bạn có thể chấp nhận hoặc từ chối dùng cookie. Hầu hết những Browser tự động chấp nhận cookie, nhưng bạn có thể thay đổi những cài đặt để từ chối tất cả những cookie nếu bạn thích. Tuy nhiên, nếu bạn chọn từ chối cookie, điều đó có thể gây cản trở và ảnh hưởng không tốt đến một số dịch vụ và tính năng phụ thuộc vào cookie tại websiteThegioididong.comQuy định về “Spam” Thegioididong.com thực sự quan ngại đến vấn nạn Spam (thư rác), các Email giả mạo danh tín chúng tôi gởi đi. Do đó, Thegioididong.com khẳng định chỉ gởi Email đến bạn khi và chỉ khi bạn có đăng ký hoặc sử dụng dịch vụ từ hệ thống của chúng tôi.Thegioididong.com cam kết không bán, thuê lại hoặc cho thuê email của bạn từ bên thứ ba. Nếu bạn vô tình nhận được Email không theo yêu cầu từ hệ thống chúng tôi do một nguyên nhân ngoài ý muốn, xin vui lòng nhấn vào link từ chối nhận Email này kèm theo, hoặc thông báo trực tiếp đến ban quản trị Website.Thay đổi về chính sáchNội dung của “Chính sách bảo mật” này có thể thay đổi để phù hợp với các nhu cầu của Thegioididong.com cũng như nhu cầu và sự phản hồi từ khách hàng nếu có. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian “Cập nhật lần cuối” bên trên. Nội dung “Chính sách bảo mật” này chỉ áp dụng tại Thegioididong.com, không bao gồm hoặc liên quan đến các bên thứ ba đặt quảng cáo hay có links tại Thegioididong.com. Do đó, chúng tôi đề nghị bạn đọc và tham khảo kỹ nội dung “Chính sách bảo mật” của từng website mà bạn đang truy cập.Thông tin liên hệChúng tôi luôn hoan nghênh các ý kiến đóng góp, liên hệ và phản hồi thông tin từ bạn về “Chính sách bảo mật” này. Nếu bạn có những thắc mắc liên quan xin vui lòng liên hệ theo địa chỉ Email: lienhe@thegioididong.comBản quyền thuộc Thegioididong.com 2010. Bảo lưu mọi quyền.', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1),
(4, 'Chính sách vận chuyển', 'Chính sách giao hàng Thế Giới Di Động<br>\r\n*Áp dụng từ: 26/3/2021<br>\r\n1. PHẠM VI ÁP DỤNG<br>\r\nNhững khu vực tỉnh thành có hệ thống siêu thị Thegioididong.com.<br>\r\n\r\n2. THỜI GIAN NHẬN HÀNG<br>\r\nThegioididong nhận giao nhanh trong ngày với khoảng cách từ các siêu thị có hàng đến điểm giao là 20 km. Khoảng cách lớn hơn nhân viên của chúng tôi sẽ tư vấn cách thức giao hàng thuận tiện nhất cho khách hàng. Cụ thể:<br>\r\n\r\nKhoảng cách đến nhà khách từ siêu thị gần nhất có hàng:<br>\r\nTP. HCM	Tỉnh khác<br>\r\nDưới 5kmGiao trong 30 phút	Giao trong 30 phút\r\n5-10km	Giao trong 1 tiếng	Giao trong 1 tiếng\r\n10-20km	Giao trong 2 tiếng	Giao trong 2 tiếng\r\nLưu ý	Thời gian giao hàng 9:00 đến 21:00	Thời gian giao hàng 9:00 đến 20:00\r\n <br>\r\nRiêng đối với đơn hàng giá rẻ online, sản phẩm sẽ được giao sớm nhất là 1 ngày sau khi đặt.\r\n<br>\r\n3. PHÍ GIAO HÀNG<br>\r\nLOẠI SẢN PHẨM	 MỨC GIÁ	PHÍ GIAO\r\nSản phẩm không lắp đặt	Giá trên 500.000đ	<br>\r\n- Miễn phí 10km đầu tiên<br>\r\n\r\n- Mỗi km tiếp theo tính phí 5.000đ/km<br>\r\n\r\nVD: Sạc dự phòng giá 600.000đ, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 15.000đ<br>\r\n\r\nGiá 500.000đ trở xuống	<br>\r\n- Phí giao hàng 20.000đ cho 10km đầu tiên<br>\r\n\r\n- Mỗi km tiếp theo tính phí 5.000đ/km\r\n<br>\r\nVD: Sạc dự phòng 500.000đ, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 20.000đ + 15.000đ = 35.000đ\r\n<br>\r\nSản phẩm lắp đặt	Giá trên 5 triệu<br>	\r\n- Miễn phí 10km đầu tiên<br>\r\n\r\n- Mỗi km tiếp theo tính phí 5.000đ/km<br>\r\n\r\nVD:  Loa kéo giá 6 triệu, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 15.000đ<br>\r\n\r\nGiá 5 triệu trở xuống	<br>\r\n- Phí giao hàng 50.000đ cho 10km đầu tiên<br>\r\n\r\n- Mỗi km tiếp theo tính phí 5.000đ/km\r\n<br>\r\nVD: Loa kéo giá 5 triệu, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 50.000đ + 15.000đ = 65.000đ\r\n<br>\r\nLưu ý:\r\n<br>\r\n+ Khoảng cách giao hàng là khoảng cách được tính từ nhà khách hàng đến siêu thị TGDD/ĐMX gần nhất<br>\r\n\r\n+ Hàng online only có chuyển hàng qua đối tác thì tổng đài 1800 1060 sẽ tư vấn cách thức giao hàng & phí chuyển hàng phù hợp.<br>\r\n\r\n4. ĐEM THÊM NHIỀU SẢN PHẨM, MẪU MÃ KHÁC ĐỂ KHÁCH HÀNG LỰA TẠI NHÀ<br>\r\nNếu có sự băn khoăn trong việc lựa chọn sản phẩm, hãy để nhân viên giao hàng của chúng tôi sẽ đem hơn 2 sản phẩm (đem thêm mẫu máy khác, đem thêm màu khác) theo yêu cầu của bạn đến tận nơi tư vấn.\r\n<br>\r\n- Kỹ thuật viên của chúng tôi sẽ giúp Quý khách khám phá kỹ hơn những tính năng ưu việt của từng sản phầm để Quý khách có được lựa chọn tốt nhất.<br>\r\n- Quý khách chỉ thanh toán khi thật sự hài lòng với sản phẩm và chất lượng dịch vụ của chúng tôi. Chúng tôi sẽ không tính bất kỳ khoản phí nào cho đến khi Quý khách hoàn toàn đồng ý. <br>\r\n- Khi Quý khách hoàn toàn hài lòng với sự lựa chọn của mình, Quý khách có thể thanh toán ngay bằng các thẻ quốc tế, nội địa mà không cần phải ra ngân hàng rút tiền mặt trước.<br>\r\n- Hãy gọi cho chúng tôi bất cứ lúc nào Quý khách cần được phục vụ với chất lượng 5 sao hoàn hảo.<br>\r\nCập nhật lần cuối: 5/8/2020<br>', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1),
(5, 'Hướng dẫn thanh toán', 'LỰA CHỌN THANH TOÁN<br>\r\nI. Thanh toán tiền mặt<br>\r\n1. Tại siêu thị<br>\r\nQuý khách có thể đến mua hàng & thanh toán trực tiếp tại các siêu thị thuộc hệ thống electronicstore.com.<br>\r\n\r\n2. Tại nhà/nơi nhận hàng<br>\r\nThanh toán cho nhân viên giao hàng trực tiếp của Thegioididong.com tại bất kỳ đâu bạn yêu cầu (trong phạm vi 20KM tính từ siêu thị Thegioididong có hàng).<br>\r\n\r\nII.Thanh toán bằng thẻ ATM, Visa, MasterCard<br>\r\n1. Tại siêu thị<br>\r\nCà thẻ trực tiếp tại hệ thống Thegioididong.com trên toàn quốc.<br>\r\n\r\n2. Tại nhà/nơi nhận hàng<br>\r\nKhách hàng vui lòng yêu cầu trước để nhân viên đem theo máy hỗ trợ thanh toán và cà thẻ.<br>\r\nLưu ý: Để an toàn cho chủ thẻ, Thế Giới Di Động chỉ hỗ trợ thanh toán thẻ cho quý khách đến thanh toán chính là chủ thẻ.<br>\r\n\r\nIII. Chuyển khoản<br>\r\nChuyển khoản qua ngân hàng VIETCOMBANK cho chúng tôi theo thông tin:<br>\r\n Tên ngân hàng	   <br>Ngân hàng Ngoại Thương VN - VietcomBank - chi nhánh Tân Bình, TP HCM <br>\r\n Chủ tài khoản: CONG TY CO PHAN THE GIOI DI DONG<br>\r\n Số tài khoản: 044.100.061.51.56<br>\r\n Nội dung: Mua-Tên khách hàng-Tên sản phẩm-Số điện thoại<br>\r\n\r\n \r\nIV. Thanh toán trực tuyến<br>\r\n1. Thanh toán qua thẻ ATM nội địa (có internet banking)<br>\r\nĐiều kiện để thanh toán là thẻ ATM có hỗ trợ thanh toán trực truyến bằng OnePay.<br>\r\n\r\nNhững ngân hàng liên minh với OnePay:<br>\r\n \r\n\r\n\r\n\r\nHotline: 1900 633 927<br>\r\n\r\nBạn phải đăng ký với ngân hàng dịch vụ giao dịch qua SMS (tin nhắn điện thoại di động) hoặc thiết bị TOKEN, Internet Banking.<br>\r\n\r\n\r\n\r\nChỉ cần bạn có hai điều kiện trên thì bạn đã có thể thanh toán trực tuyến thông qua hệ thống thanh toán OnePay.\r\n<br>\r\nCách thức thanh toán:<br>\r\n\r\nSau khi chọn hình thức thanh toán qua thẻ ATM nội địa, hệ thống chuyển sang giao diện thanh toán của OnePay.<br>\r\n\r\n\r\n\r\n \r\n\r\nHãy điền các thông tin theo hướng dẫn để hoàn tất việc đặt hàng.<br>\r\n\r\nỞ đây có một số mục quan trọng cần bạn quan tâm:<br>\r\n\r\n1/ Tên in trên thẻ: là username mà ngân hàng cấp cho bạn để bạn sử dụng dịch vụ thanh toán online.<br>\r\n\r\n2/ Số thẻ: 16 - 19 số ở mặt trước thẻ.\r\n<br>\r\n2. Thanh toán qua thẻ Visa/Master/JCB\r\nĐể thanh toán trực tuyến qua thẻ Visa/Master bạn cần sở hữu 1 thẻ Visa/Master/JCB \r\n\r\n<br>\r\n\r\nCách thức thanh toán:<br>\r\n\r\nSau khi chọn hình thức thanh toán qua thẻ Visa/Master/JCB hệ thống chuyển sang giao diện thanh toán của OnePay và hãy điền các thông tin theo hướng dẫn để hoàn tất việc đặt hàng.<br>\r\n\r\n\r\n\r\n3. Thanh toán qua VNPAY QR\r\nSau khi chọn hình thức thanh toán qua VNPAY QR, hệ thống chuyển sang giao diện thanh toán của VNPAY.<br>\r\n \r\nHãy mở App ngân hàng quét mã QR trên để hoàn tất việc đặt hàng.\r\n <br>\r\n\r\n3. Thanh toán qua ví điện tử Momo\r\nSau khi chọn hình thức thanh toán qua Ví MoMo, hệ thống chuyển sang giao diện thanh toán của MoMo.<br>\r\n\r\nHãy mở Ví MoMo của bạn quét mã QR trên để hoàn tất việc đặt hàng.<br>\r\nVậy là bạn đã hoàn thành một bước mua hàng online tại thegioididong.com một cách dể dàng và tiện lợi chưa đến 2 phút.<br>\r\nThân chúc các bạn có những giây phút mua hàng online vui vẻ tại thegioididong.com.<br>\r\n\r\nQUY ĐỊNH VỀ HOÀN TRẢ TIỀN KHI THANH TOÁN TRỰC TUYẾN\r\n<br>\r\nTrong trường hợp quý khách hàng đã mua hàng & thanh toán trực tuyến thành công nhưng dư tiền, hoặc trả sản phẩm, Thế Giới Di Động sẽ hoàn tiền vào thẻ quý khách đã dùng để thanh toán, theo thời hạn như sau:<br>\r\n- Đối với thẻ ATM: Thời gian khách hàng nhận được tiền hoàn từ 7 - 10 ngày (trừ Thứ 7, Chủ Nhật và Ngày lễ) kể từ khi Thế Giới Di Động nhận được đề nghị của khách hàng. Nếu qua thời gian trên không nhận được tiền, Thế Giới Di Động sẽ hỗ trợ liên hệ ngân hàng của khách hàng để giải quyết.<br>\r\n- Đối với thẻ Visa/Master card/JCB: Thời gian khách hàng nhận được tiền hoàn từ 7-15 ngày làm việc kể từ khi Thế Giới Di Động nhận được đề nghị của khách hàng. Nếu qua thời gian trên không nhận được tiền, Thế Giới Di Động sẽ hỗ trợ liên hệ ngân hàng của khách hàng để giải quyết.<br>\r\n- Đối với thanh toán bằng hình thức VNPAY QR: Thời gian Khách hàng nhận được tiền hoàn 3 - 8 ngày. Nếu qua thời gian trên khách hàng không nhận được tiền, khách hàng liên hệ Thế Giới Di Động để được giải quyết.<br>\r\n- Đối với thanh toán bằng hình thức Ví MoMo: Thời gian Khách hàng nhận được tiền hoàn 3 - 5 ngày. Tiền được hoàn sẽ cập nhật vào tài khoản Ví MoMo. Nếu qua thời gian trên khách hàng không nhận được tiền, khách hàng liên hệ Thế Giới Di Động để được giải quyết\r\n', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1),
(6, 'Liên hệ', '<form action=\"/action_page.php\">\r\n        <table>\r\n        	<tr>\r\n        	<td>\r\n        		<label for=\"fname\" >Họ Và Tên:  </label>\r\n       \r\n        	</td>\r\n        	<td>\r\n        		 <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nhập họ và tên...\"><br>\r\n        	</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>\r\n        <label for=\"lname\" >Email:</label>\r\n       \r\n        	</td>\r\n        	<td>\r\n        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Nhập email...\"><br>\r\n        	</td>\r\n        </tr>\r\n                <tr>\r\n        	<td>\r\n        <label for=\"country\">Số Điện Thoại:</label>\r\n       \r\n        	</td>\r\n        	<td>\r\n        <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"Nhập số điện thoại...\"><br>\r\n        	</td>\r\n        </tr>\r\n\r\n        <tr>\r\n        	<td>\r\n        <label for=\"address\">Địa Chỉ:</label>\r\n       \r\n        	</td>\r\n        	<td>\r\n        <input type=\"text\" id=\"address\" name=\"address\" placeholder=\"Nhập địa chỉ...\"><br>\r\n        	</td>\r\n        </tr>\r\n        </table>\r\n        <input type=\"submit\" value=\"Submit\">\r\n    </form>', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1),
(7, 'Bản đồ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.3609292032975!2d106.11376646251271!3d11.308307891961912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b6b8825b3cbf3%3A0x885376c858a3cdb9!2zUGhvbmcgVsWpIFTDonkgTmluaA!5e0!3m2!1svi!2s!4v1624505889481!5m2!1svi!2s\" width=\"1300\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1),
(8, 'Chính sách hỗ trợ', 'Nội dung chính sách hỗ trợ', 1, '2021-03-16 23:09:19', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_product`
--

CREATE TABLE `nguyentrunghau_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `detail` text NOT NULL,
  `price` float NOT NULL,
  `salePrice` float DEFAULT NULL,
  `Image` varchar(100) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguyentrunghau_product`
--

INSERT INTO `nguyentrunghau_product` (`productId`, `productName`, `alias`, `catId`, `brandId`, `detail`, `price`, `salePrice`, `Image`, `trash`, `status`) VALUES
(1, 'Laptop Asus Gaming Rog Strix G512 i5-10300H-GB-512GB-Win10 (IAL013T)', 'laptop-asus-gaming-rog-strix-g512-i5-10300h-8gb-512gb-win10-ial013t', 3, 2, 'CPU: Intel Core i5 Comet Lake, 10300H, 2.50 GHz.\r\nRAM: 8 GB, DDR4 (2 khe), 2933 MHz.\r\nỔ cứng: Hỗ trợ thêm 2 khe cắm SSD M.2 PCIe, SSD 512 GB M.2 PCIe.\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080), 144Hz.\r\nCard màn hình: Card đồ họa rời, NVIDIA GeForce GTX 1650Ti 4GB.\r\nHệ điều hành: Windows 10 Home SL.', 24490000, 23990000, 'Hau_Img10.jpg', 0, 1),
(2, 'Laptop Asus VivoBook X509MA N4020-4GB-256GB-Win10 (BR271T)', 'laptop-asus-vivoBook-x509ma-n4020-4gb-256gb-win10-br271t', 3, 2, 'CPU: Intel Celeron, N4020, 1.10 GHz.\r\nRAM: 4 GB, DDR4 (1 khe), 2666 MHz.\r\nỔ cứng: SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA.\r\nMàn hình: 15.6 inch, HD (1366 x 768).\r\nCard màn hình: Card đồ họa tích hợp, Intel® UHD Graphics 600.\r\nHệ điều hành: Windows 10 Home SL.', 7490000, 6990000, 'Hau_Img11.jpg', 0, 1),
(3, 'Laptop Lenovo ThinkBook 15IIL i3 1005G1-4GB-512GB-Win10 (20SM00D9VN)', 'laptop-lenovo-thinkbook-15iil-i3-1005g1-4gb-512gb-win10-20sm00d9vn', 3, 2, 'CPU: Intel Core i3 Ice Lake, 1005G1, 1.20 GHz.\r\nRAM: 4 GB, DDR4 (1 khe), 2666 MHz.\r\nỔ cứng: SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA.\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080).\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics.\r\nHệ điều hành: Windows 10 Home SL.', 12990000, 11590000, 'Hau_Img12.jpg', 0, 1),
(4, 'Laptop Asus VivoBook A415EA i3 1115G4-4GB-512GB-Win10 (EB317T)\r\n\r\n', 'laptop-asus-vivobook-s415ea-i3-1115g4-4gb-512gb-win10-eb317t\r\n\r\n', 3, 2, 'CPU: Intel Core i3 Tiger Lake, 1115G4, 3.00 GHz.\r\nRAM: 4 GB, DDR4 (On board), 3200 MHz.\r\nỔ cứng: SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe.\r\nMàn hình: 14 inch, Full HD (1920 x 1080).\r\nCard màn hình: Card đồ họa tích hợp, Intel UHD Graphics.\r\nHệ điều hành: Windows 10 Home SL.', 13990000, 13590000, 'Hau_Img28.jpg', 0, 1),
(5, 'OPPO A5s', 'oppo-a5s', 2, 1, 'Màn hình: IPS LCD, 6.2\", HD+\r\nCamera sau: Chính 13 MP & Phụ 2 MP\r\nCamera trước:	8 MP\r\nCPU: MediaTek Helio P35 8 nhân\r\nRAM: 3 GB\r\nBộ nhớ trong:	32 GB\r\nDung lượng pin:	4230 mAh', 4290000, 3690000, 'Hau_Img19.jpg', 0, 1),
(6, 'OPPO A15', 'oppo-a15', 2, 1, 'Màn hình: IPS LCD, 6.52\", HD+\r\nCamera sau: Chính 13 MP & Phụ 2 MP, 2 MP\r\nCamera trước:	8 MP\r\nCPU: MediaTek Helio P35 8 nhân\r\nRAM: 3 GB\r\nBộ nhớ trong:	32 GB\r\nDung lượng pin:	4230 mAh', 3690000, 3490000, 'Hau_Img20.jpg', 0, 1),
(7, 'OPPO Reno 5', 'oppo-reno-5', 2, 1, 'Màn hình: AMOLED, 6.43\", Full HD+\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước:	44 MP\r\nCPU: Snapdragon 720G 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong:	128 GB\r\nDung lượng pin:	4310 mAh, có sạc nhanh', 8990000, 8690000, 'Hau_Img21.jpg', 0, 1),
(8, 'Samsung Galaxy A02', 'samsung-galaxy-a02', 2, 1, 'Màn hình: PLS TFT LCD, 6.5\", HD+\r\nCamera sau: Chính 13 MP & Phụ 2 MP\r\nCamera trước:	5 MP\r\nCPU: MediaTek MT6739W 4 nhân\r\nRAM: 3 GB\r\nBộ nhớ trong:	32GB\r\nDung lượng pin:	5000 mAh', 2990000, 2590000, 'Hau_Img22.jpg', 0, 1),
(9, 'Samsung Galaxy M51', 'samsung-galaxy-m51', 2, 1, 'Màn hình: Super AMOLED Plus, 6.7\", Full HD+\r\nCamera sau: Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước:	32 MP\r\nCPU: MediaTek MT6739W 4 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong:	128 GB\r\nDung lượng pin:	7000 mAh, có sạc nhanh', 2990000, 2590000, 'Hau_Img23.jpg', 0, 1),
(10, 'Samsung Galaxy S21 Ultra 5G', 'samsung-galaxy-s21-ultra-5g', 2, 1, 'Màn hình: Dynamic AMOLED 2X, 6.8\", Quad HD+ (2K+)\r\nCamera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP\r\nCamera trước:	40 MP\r\nCPU: Exynos 2100 8 nhân\r\nRAM: 12 GB\r\nBộ nhớ trong:	128 GB\r\nDung lượng pin:	5000 mAh, có sạc nhanh', 30990000, 30490000, 'Hau_Img24.jpg', 0, 1),
(11, 'Vivo U10', 'vivo-u10', 2, 1, 'Màn hình: IPS LCD, 6.35\", HD+\r\nCamera sau: Chính 13 MP & Phụ 8 MP, 2 MP\r\nCamera trước:	8 MP\r\nCPU: Snapdragon 665 AIE 8 nhân\r\nRAM: 4 GB\r\nBộ nhớ trong:	64 GB\r\nDung lượng pin:	5000 mAh, có sạc nhanh', 3490000, 2990000, 'Hau_Img25.jpg', 0, 1),
(12, 'Vivo V20 SE', 'vivo-v20-se', 2, 1, 'Màn hình: AMOLED, 6.44\", Full HD+\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP\r\nCamera trước:	32 MP\r\nCPU: Snapdragon 665 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong:	128 GB\r\nDung lượng pin:	4100 mAh, có sạc nhanh', 7190000, 6490000, 'Hau_Img26.jpg', 0, 1),
(13, 'Vivo Y11', 'vivo-y11', 2, 1, 'Màn hình: 	IPS LCD, 6.35\", HD+\r\nCamera sau: Chính 13 MP & Phụ 2 MP\r\nCamera trước:	8 MP\r\nCPU: Snapdragon 439 8 nhân\r\nRAM: 3 GB\r\nBộ nhớ trong:	32 GB\r\nDung lượng pin:	5000 mAh', 3490000, 2890000, 'Hau_Img27.jpg', 0, 1),
(14, 'Màn Hình cong Samsung 23.5In LC24F390FHEXXV', 'man-hinh-cong-samsung-23.5in-lc24f390fhexxv', 3, 2, 'Thương hiệu: SAMSUNG.\r\nKích thước: 23.5\".\r\nĐộ phân giải: 1920 x 1080 ( 16:9 ).\r\nTấm nền: VA LED.\r\nThời gian phản hồi: 4 ms.\r\nKiểu màn hình: Màn hình cong.', 3590000, 3190000, 'Hau_Img13.jpg', 0, 1),
(15, 'Màn Hình Dell Ultrasharp 24In U2419H', 'man-hinh-dell-ultrasharp-24in-u2419h', 3, 2, 'Thương hiệu: Dell.\r\nKích thước: 24\".\r\nĐộ phân giải: 1920 x 1080 ( 16:9 ).\r\nTấm nền: IPS LED.\r\nThời gian phản hồi: 8 ms.\r\nKiểu màn hình: Màn hình phẳng.', 5990000, 5690000, 'Hau_Img14.jpg', 0, 1),
(16, 'Màn hình LCD ASUS TUF GAMING VG27VQ', 'man-hinh-lcd asus tuf gaming vg27vq', 3, 2, 'Thương hiệu: ASUS.\r\nKích thước: 27\".\r\nĐộ phân giải: 1920 x 1080 ( 16:9 ).\r\nTấm nền: VA.\r\nThời gian phản hồi: 1 ms.\r\nKiểu màn hình: Màn hình cong.', 8490000, 7990000, 'Hau_Img15.jpg', 0, 1),
(17, 'Màn hình LCD LG 27HJ712C', 'man-hinh-lcd-lg-27hj712c', 3, 2, 'Thương hiệu: LG.\r\nKích thước: 27\".\r\nĐộ phân giải: 3840 x 2160 ( 16:9 ).\r\nTấm nền: IPS.\r\nThời gian phản hồi: 14 ms.\r\nKiểu màn hình: Màn hình phẳng.', 39990000, 39590000, 'Hau_Img16.jpg', 0, 1),
(18, 'Màn hình LCD MSI Optix MAG322CQRV', 'man-hinh-lcd-msi-optix-mag322cqrv', 3, 2, 'Thương hiệu: MSI.\r\nKích thước: 31.5\".\r\nĐộ phân giải: 2560 x 1440 ( 16:9 ).\r\nTấm nền: VA.\r\nThời gian phản hồi: 1 ms.\r\nKiểu màn hình: Màn hình cong.', 12490000, 11990000, 'Hau_Img17.jpg', 0, 1),
(19, 'Màn Hình LG1 9.5Inch 20MK400H', 'man-hinh-lg-19.5inch-20mk400h', 3, 2, 'Thương hiệu: LG.\r\nKích thước: 19.5\".\r\nĐộ phân giải: 1366 x 768 ( 16:9 ).\r\nThời gian phản hồi: 5 ms.\r\nKiểu màn hình: Màn hình phẳng.', 2690000, 2290000, 'Hau_Img18.jpg', 0, 1),
(20, 'Laptop Asus TUF Gaming FX506LI i5 10300H-8GB-512GB-144Hz-4GB GTX1650Ti-Win10 (HN039T)', 'laptop-asus-tuf-gaming-fx506li-i5-10300h-8gb-512gb-144hz-4gb-gtx1650ti-in10-hn039t', 3, 2, 'CPU: Intel Core i5 Comet Lake, 10300H, 2.50 GHz.\r\nRAM: 	8 GB, DDR4 (2 khe), 2933 MHz.\r\nỔ cứng: SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe.\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080), 144Hz.\r\nCard màn hình: Card đồ họa rời, NVIDIA GeForce GTX 1650Ti 4GB.\r\nHệ điều hành: Windows 10 Home SL.', 20990000, 20490000, 'Hau_Img29.jpg', 0, 1),
(21, 'Laptop Asus VivoBook S433EA i5 1135G7-8GB-512GB-Win10 (AM439T)', 'laptop-asus-vivobook-s433ea-i5-1135g7-8gb-512gb-win10-am439t', 3, 2, 'CPU: Intel Core i5 Tiger Lake, 1135G7, 2.40 GHz.\r\nRAM: 8 GB, DDR4 (On board), 3200 MHz.\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe.\r\nMàn hình: 14 inch, Full HD (1920 x 1080).\r\nCard màn hình: 	Card đồ họa tích hợp, Intel® Iris® Xe Graphics.\r\nHệ điều hành: Windows 10 Home SL.', 18990000, 18790000, 'Hau_Img30.jpg', 0, 1),
(22, 'Bàn phím không dây Logitech K580 (Trắng)', 'ban-phim-khong-day-logitech-k580-trang', 4, 3, 'Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nTên: K580\r\nMàu sắc: Trắng\r\nKết nối: Bàn phím không dây\r\nKết nối: Bluetooth\r\nLoại bàn phím: Bàn phím thường', 949000, 879000, 'Hau_Img01.jpg', 0, 1),
(23, 'Bàn phím Newmen GM819', 'ban-phim-newmen-gm819', 4, 3, 'Thương hiệu: NEWMEN\r\nBảo hành: 12\r\nTên: GM819\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB 2.0\r\nLoại bàn phím: Bàn phím cơ', 759000, 11500000, 'Hau_Img02.jpg', 0, 1),
(24, 'Bàn phím Rapoo V500L.US (Đen)', 'ban-phim-rapoo-v500l.us-den', 4, 3, 'Thương hiệu: RAPOO\r\nBảo hành: 24\r\nTên: V500L\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB\r\nLoại bàn phím: Bàn phím cơ', 1190000, 1390000, 'Hau_Img03.jpg', 0, 1),
(25, 'Chuột gaming không dâyLogitech G703 (Đen)', 'chuot-gaming-khong-day-logitech-g703-den', 4, 3, 'Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nKiểu kết nối: Chuột không dây: \r\nĐèn LED: RGB\r\nMàu sắc: Đen\r\nKết nối: Lightspeed Wireless', 2299000, 2099000, 'Hau_Img04.jpg', 0, 1),
(26, 'Chuột gaming Logitech G502 HERO (Đen)', 'chuot-gaming-logitech-g502-hero-den', 4, 3, 'Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nKiểu kết nối: Chuột có dây: \r\nĐèn LED: RGB\r\nMàu sắc: Đen\r\nKết nối: USB 2.0', 1790000, 1590000, 'Hau_Img05.jpg', 0, 1),
(27, 'Chuột máy tính BenQ Zowie S1', 'chuot-may-tinh-benq-zowie-s1', 4, 3, 'Thương hiệu: BenQ\r\nBảo hành: 12\r\nKiểu kết nối: Chuột có dây: \r\nMàu sắc: Đen\r\nKết nối: USB 2.0', 1950000, 1790000, 'Hau_Img06.jpg', 0, 1),
(28, 'Ghế chơi game Anda Seat Assassin King Full PVC Leather (Đen;Xám;Trắng)', 'ghe-choi-game-anda-seat-assassin-king-full-pvc-leather', 4, 3, 'Thương hiệu: Anda Seat\r\nBảo hành: 24', 6990000, 6690000, 'Hau_Img07.jpg', 0, 1),
(29, 'Ghế chơi game DXRacer Gaming King KS06-NR (Đen;Đỏ)', 'ghe-choi-game-dxracer-gaming-king-ks06-nr', 4, 3, 'Thương hiệu: DXRacer \r\nBảo hành: 24', 8989000, 8888000, 'Hau_Img08.jpg', 0, 1),
(30, 'Ghế chơi game Gigabyte Aorus Gaming AGC300 (Đen phối cam)', 'ghe-choi-game-gigabyte-aorus-gaming-agc300', 4, 3, 'Thương hiệu: khác\r\nBảo hành: 24', 6990000, 6690000, 'Hau_Img09.jpg', 0, 1),
(31, 'Điện thoại Vivo Y72 5G', 'dien-thoai-vivo-y72-5g', 2, 1, '\"Màn hình: IPS LCD6.58\"\"Full HD+.<br>\r\nHệ điều hành: Android 11.<br>\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP.<br>\r\nCamera trước: 16 MP.<br>\r\nChip: MediaTek Dimensity 700.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 5G.<br>\r\nPin, Sạc: 5000 mAh18.<br>\r\n', 7990000, 7590000, 'Hau_Img31.jpg', 0, 1),
(32, 'Điện thoại OPPO A93', 'dien-thoai-oppo-a93\r\n', 2, 1, '\"Màn hình: AMOLED6.43\"\"Full HD+.<br>\r\nHệ điều hành: Android 10.<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP.<br>\r\nCamera trước: Chính 16 MP & Phụ 2 MP.<br>\r\nChip: MediaTek Helio P95.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G.<br>\r\nPin, Sạc: 4000 mAh18.<br>\r\n', 6490000, 5990000, 'Hau_Img32.jpg', 0, 1),
(33, 'Điện thoại Vivo Y51 (2020)', 'dien-thoai-vivo-y51-2020', 2, 1, '\"Màn hình: IPS LCD6.58\"\"Full HD+.<br>\r\nHệ điều hành: Android 11.<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP.<br>\r\nCamera trước: 16 MP.<br>\r\nChip: Snapdragon 662.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G.<br>\r\nPin, Sạc: 5000 mAh18.<br>\"\r\n', 6290000, 5790000, 'Hau_Img33.jpg', 0, 1),
(35, 'Điện thoại OPPO A92\r\n', 'dien-thoai-oppo-a92\r\n', 2, 1, '\"Màn hình: TFT LCD6.5\"\"Full HD+.<br>\r\nHệ điều hành: Android 10.<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP.<br>\r\nCamera trước: 16 MP.<br>\r\nChip: Snapdragon 665.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G.<br>\r\nPin, Sạc: 5000 mAh, 18W.<br>', 6490000, 5990000, 'Hau_Img35.jpg\r\n', 0, 1),
(36, 'Điện thoại OPPO A12 (3GB-32GB)', 'dien-thoai-oppo-a12-3gb-32gb\r\n', 2, 1, 'Màn hình: IPS LCD6.22\"HD+.<br>\r\nHệ điều hành: Android 9 (Pie).<br>\r\nCamera sau: Chính 13 MP & Phụ 2 MP.<br>\r\nCamera trước: 5 MP.<br>\r\nChip: MediaTek Helio P35.<br>\r\nRAM: 3 GB.<br>\r\nBộ nhớ trong: 32 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G.<br>\r\nPin, Sạc: 4230 mAh, 10 W.<br>', 3490000, 2990000, 'Hau_Img36.jpg', 0, 1),
(37, 'Điện thoại OPPO A74\r\n', 'dien-thoai-oppo-a74', 2, 1, '\"Màn hình: AMOLED6.43\"\"Full HD+.<br>\r\nHệ điều hành: Android 11.<br>\r\nCamera sau: Chính 48 MP & Phụ 2 MP, 2 MP.<br>\r\nCamera trước: 16 MP.<br>\r\nChip: Snapdragon 662.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G.<br>\r\nPin, Sạc: 5000 mAh, 33 W.<br>\"', 6990000, 6690000, 'Hau_Img37.jpg', 0, 1),
(38, 'Điện thoại OPPO Find X3 Pro 5G\r\n', 'dien-thoai-oppo-find-x3-pro-5g', 2, 1, '\"Màn hình: AMOLED6.7\"\"Quad HD+ (2K+).<br>\r\nHệ điều hành: Android 11.<br>\r\nCamera sau: Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP.<br>\r\nCamera trước: 32 MP.<br>\r\nChip: Snapdragon 888.<br>\r\nRAM: 12 GB.<br>\r\nBộ nhớ trong: 256 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 5G.<br>\r\nPin, Sạc: 4500 mAh, 65 W.<br>\"\r\n', 28190000, 26990000, 'Hau_Img38.jpg', 0, 1),
(39, 'Điện thoại OPPO Reno5 5G\r\n', 'dien-thoai-oppo-reno5-5g\r\n', 2, 1, '\"Màn hình: AMOLED6.43\"\"Full HD+.<br>\r\nHệ điều hành: Android 11.<br>\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước: 32 MP.<br>\r\nChip: Snapdragon 765G.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 5G.<br>\r\nPin, Sạc: 4300 mAh, 65 W.<br>\"\r\n', 11990000, 10990000, 'Hau_Img39.jpg\r\n', 0, 1),
(40, 'Điện thoại OPPO Reno4 Pro\r\n', 'dien-thoai-oppo-reno4-pro\r\n', 2, 1, '\"Màn hình: AMOLED6.5\"\"Full HD+.<br>\r\nHệ điều hành: Android 10.<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP.<br>\r\nCamera trước: 32 MP.<br>\r\nChip: Snapdragon 720G.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 256 GB.<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G.<br>\r\nPin, Sạc: 4000 mAh, 65 W.<br>\"\r\n', 10490000, 9990000, 'Hau_Img40.jpg\r\n', 0, 1),
(34, 'Điện thoại OPPO Reno5 Marvel', 'dien-thoai-oppo-reno5-marvel', 2, 1, '\"Màn hình: AMOLED, 6.43\"\", Full HD+.<br>\r\nHệ điều hành: Android 11.<br>\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP.<br>\r\nCamera trước: 44 MP.<br>\r\nChip: Snapdragon 720G.<br>\r\nRAM: 8 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nSIM: 2 Nano SIM, Hỗ trợ 4G.<br>\r\nPin, Sạc: 4310 mAh, 50W.<br>\"\r\n', 9990000, 9690000, 'Hau_Img34.jpg\r\n', 0, 1),
(47, 'Laptop Asus Gaming Rog Strix G512 i5 10300H-8GB-512GB-144Hz-4GB GTX1650Ti-Win10 (IAL013T)', 'laptop-asus-gaming-rog-strix-g512-i5-10300h-8gb-512gb-144hz-4gb-gtx1650ti-win10-ial013t', 3, 2, '\"CPU: Intel Core i5 Comet Lake10300H2.50 GHz.<br>\r\nRAM: 8 GBDDR4 (2 khe)2933 MHz.<br>\r\nỔ cứng: Hỗ trợ thêm 2 khe cắm SSD M.2 PCIeSSD 512 GB NVMe.<br> PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080), 144Hz.<br>\r\nCard màn hình: Card rờiNVIDIA GeForce GTX 1650Ti 4 GB.<br>\r\nCổng kết nối: 3 x USB 3.2HDMILAN (RJ45)USB Type-C.<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa.<br>\r\nKích thước: Dày 25.8 mm2.3 kg.<br>\"\r\n', 22990000, 22490000, 'Hau_Img47.jpg', 0, 1),
(45, ' Laptop Asus ZenBook Duo UX482EG i5 1135G7-8GB-512GB-2GB MX450-Touch-Pen-Túi-Stand-Win10 (KA166T)', 'laptop-asus-zenbook-duo-ux482eg-i5-1135g7-8gb-512gb-2gb-mx450-touch-pen-tui-stand-win10-ka166t', 3, 2, '\"CPU: Intel Core i5 Tiger Lake1135G72.40 GHz.<br>\r\nRAM: 8 GBLPDDR4X (On board)4267 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIe.<br>\r\nMàn hình: 14\"\"Full HD (1920 x 1080).<br>\r\nCard màn hình: Card rờiNVIDIA GeForce MX450, 2 GB.<br>\r\nCổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMI.<br>\r\nĐặc biệt: Có đèn bàn phím, Có màn hình cảm ứng.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ kim loại.<br>\r\nKích thước: Dày 17.3 mm, 1.62 kg.<br>\"\r\n', 34990000, 33990000, 'Hau_Img45.jpg', 0, 1),
(41, 'Laptop Asus TUF Gaming FX516PM i7 11370H-16GB-512GB-6GB RTX3060-144Hz-Win10 (HN023T)\r\n', 'laptop-asus-tuf-gaming-fx516pm-i7-11370h-16gb-512gb-6gb-rtx3060-144hz-win10-hn023t\r\n', 3, 2, '\"CPU: Intel Core i7 Tiger Lake11370H3.30 GHz.<br>\r\nRAM: 16 GBDDR4 2 khe (8GB onboard+ 1 khe 8GB)3200 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIeHỗ trợ khe cắm SSD M.2 PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080), 144Hz.<br>\r\nCard màn hình: Card rờiNVIDIA GeForce RTX 3060, 6 GB.<br>\r\nCổng kết nối: 3 x USB 3.2HDMI.<br> 2.0Thunderbolt 4 USB-CLAN (RJ45).<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại.<br>\r\nKích thước: Dày 19.9 mm, 2.0 Kg.<br>\"\r\n', 33790000, 32990000, 'Hau_Img41.jpg', 0, 1),
(42, 'Laptop Asus TUF Gaming FX516PE i7 11370H-8GB-512GB-4GB RTX3050Ti-144Hz-Win10 (HN005T)\r\n', 'laptop-asus-tuf-gaming-fx516pe-i7-11370h-8gb-512gb-4gb-rtx3050ti-144hz-win10-hn005t\r\n', 3, 2, '\"CPU: Intel Core i7 Tiger Lake11370H3.30 GHz.<br>\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB onboard + 1 khe trống)3200 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIeHỗ trợ khe cắm SSD M.2 PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080), 144Hz.<br>\r\nCard màn hình: Card rời NVIDIA GeForce RTX3050Ti, 4 GB.<br>\r\nCổng kết nối: 3 x USB 3.2Thunderbolt 4 USB-CHDMILAN (RJ45).<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại.<br>\r\nKích thước: Dày 19.9 mm, 2.0 Kg.<br>\"\r\n', 31190000, 29990000, 'Hau_Img42.jpg', 0, 1),
(43, 'Laptop Asus TUF Gaming FX506LH i5 10300H-8GB-512GB-144Hz-4GB GTX1650-Win10 (HN002T)\r\n', 'laptop-asus-tuf-gaming-fx506lh-i5-10300h-8gb-512gb-144hz-4gb-gtx1650-win10-hn002t\r\n', 3, 2, '\"CPU: Intel Core i5 Comet Lake10300H2.50 GHz.<br>\r\nRAM: 8 GBDDR4 (2 khe)2933 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIeHỗ trợ khe cắm SSD M.2 PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080), 144Hz.<br>\r\nCard màn hình: Card rờiNVIDIA GeForce GTX 1650Ti 4 GB.<br>\r\nCổng kết nối: 2 x USB 3.2HDMILAN (RJ45)USB 2.0USB Type-C.<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại.<br>\r\nKích thước: Dày 24.9, mm, 2.3 kg.<br>\"\r\n', 21190000, 20490000, 'Hau_Img43.jpg', 0, 1),
(44, 'Laptop Asus TUF Gaming FX506LI i5 10300H-8GB-512GB-144Hz-4GB GTX1650Ti-Win10 (HN039T)\r\n', 'laptop-asus-tuf-gaming-fx506li-i5-10300h-8gb-512gb-144hz-4gb-gtx1650ti-win10-hn039t\r\n', 3, 2, '\"CPU: Intel Core i5 Comet Lake10300H2.50 GHz.<br>\r\nRAM: 8 GBDDR4 (2 khe)2933 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIeHỗ trợ khe cắm SSD M.2 PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080), 144Hz.<br>\r\nCard màn hình: Card rờiNVIDIA GeForce GTX 1650Ti 4 GB.<br>\r\nCổng kết nối: 2 x USB 3.2HDMILAN (RJ45)USB 2.0USB Type-C.<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại.<br>\r\nKích thước: Dày 24.9, mm2.3 kg.<br>\"\r\n', 22990000, 21990000, 'Hau_Img44.jpg', 0, 1),
(46, 'Laptop Asus ZenBook UX325EA i5 1135G7-8GB-256GB-Túi-Win10 (EG079T) \r\n', 'laptop-asus-zenbook-ux325ea-i5-1135g7-8gb-256gb-túi-win10-eg079t \r\n', 3, 2, '\"CPU: Intel Core i5 Tiger Lake1135G72.40 GHz.<br>\r\nRAM: 8 GBLPDDR4X (On board)4267 MHz.<br>\r\nỔ cứng: SSD 256 GB NVMe PCIe.<br>\r\nMàn hình: 13.3\"\"Full HD (1920 x 1080).<br>\r\nCard màn hình: Card tích hợpIntel Iris Xe Graphics.<br>\r\nCổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMI.<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ kim loại.<br>\r\nKích thước: Dày 13.9 mm1.11 kg.<br>\"\r\n', 22590000, 21990000, 'Hau_Img46.jpg', 0, 1),
(48, 'Laptop Asus VivoBook S533EA i5 1135G7-8GB-512GB-Win10 (BQ018T)', 'laptop-asus-vivobook-s533ea-i5-1135g7-8gb-512gb-win10-bq018t', 3, 2, '\"CPU: Intel Core i5 Tiger Lake1135G72.40 GHz.<br>\r\nRAM: 8 GBDDR4 (On board)3200 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080).<br>\r\nCard màn hình: Card tích hợpIntel Iris Xe Graphics.<br>\r\nCổng kết nối: 1 x USB 3.2Thunderbolt 4 USB-C2 x USB 2.0HDMI.<br>\r\nĐặc biệt: Có đèn bàn phím.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ kim loại.<br>\r\nKích thước: Dày 16.1 mm1.8 kg.<br>\"\r\n', 19990000, 19290000, 'Hau_Img48.jpg', 0, 1),
(49, 'Laptop Asus VivoBook X515MA N4020-4GB-256GB-Win10 (BR111T)', 'laptop-asus-vivobook-x515ma-n4020-4gb-256gb-win10-br111t', 3, 2, '\"CPU: Intel CeleronN40201.10 GHz.<br>\r\nRAM: 4 GBDDR4 (1 khe).<br>\r\nỔ cứng: SSD 256 GB NVMe PCIeHỗ trợ khe cắm HDD SATA.<br>\r\nMàn hình: 15.6\"\"HD (1366 x 768).<br>\r\nCard màn hình: Card tích hợpIntel UHD Graphics 600.<br>\r\nCổng kết nối: 1 x USB 3.22 x USB 2.0HDMIUSB Type-C.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa.<br>\r\nKích thước: Dày 19.9 mm1.8 kg.<br>\r\nThời điểm ra mắt: 2020.<br>\"\r\n', 9990000, 8990000, 'Hau_Img49.jpg', 0, 1),
(50, 'Laptop Asus VivoBook X515EP i5 1135G7-8GB-512GB-2GB MX330-Win10 (BQ011T)', 'laptop-asus-vivobook-x515ep-i5-1135g7-8gb-512gb-2gb-mx330-win10-bq011t', 3, 2, '\"CPU: Intel Core i5 Tiger Lake1135G72.40 GHz.<br>\r\nRAM: 8 GBDDR4 (On board 4GB +1 khe 4GB)3200 MHz.<br>\r\nỔ cứng: SSD 512 GB NVMe PCIe.<br>\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080).<br>\r\nCard màn hình: Card rờiNVIDIA GeForce MX330, 2 GB.<br>\r\nCổng kết nối: 1 x USB 3.22 x USB 2.0HDMIUSB Type-C.<br>\r\nHệ điều hành: Windows 10 Home SL.<br>\r\nThiết kế: Vỏ nhựa.<br>\r\nKích thước: Dày 19.9 mm, 1.8 kg.<br>\r\nThời điểm ra mắt: 2020.<br>\"\r\n', 19590000, 18590000, 'Hau_Img50.jpg', 0, 1),
(51, 'Chuột máy tính gaming không dây Logitech G502 Lightspeed (Đen)', 'chuot-may-tinh-gaming-khong-day-logitech-g502-lightspeed-den', 4, 3, '\"Thương hiệu: LOGITECH.<br>\r\nBảo hành: 24.<br>\r\nKiểu kết nối: Chuột không dây.<br>\r\nĐèn LED: RGB.<br>\r\nMàu sắc: Đen.<br>\r\nKết nối: Lightspeed Wireless.<br>\r\nĐộ phân giải (CPI/DPI): 16000DPI.<br>\r\nDạng cảm biến: Optical.<br>\r\nTên cảm biến: HERO.<br>\r\nKiểu pin: Pin Lithium.<br>\r\nKích thước: 132 x 75 x 40 mm.<br>\r\nKhối lượng: 114 g.<br>\"', 3499000, 2989000, 'Hau_Img51.jpg', 0, 1),
(52, 'Chuột gaming Logitech G403 Hero', 'chuot-gaming-logitech-g403-hero', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nKiểu kết nối: Chuột có dây\r\nĐèn LED: RGB\r\nMàu sắc: Đen\r\nKết nối: USB 2.0\r\nĐộ phân giải (CPI/DPI): 16000DPI\r\nDạng cảm biến: Optical\r\nTên cảm biến:HERO\r\nThời gian phản hồi: 1 ms\r\nSố nút bấm: 6\r\nKích thước: 124 x 68 x 43 mm\r\nKhối lượng: 87.3 g\"\r\n', 1599000, 989000, 'Hau_Img52.jpg', 0, 1),
(53, 'Chuột gaming Logitech G502 HERO (Đen)', 'chuot-gaming-logitech-g502-hero-den', 4, 3, '\"Thương hiệu:LOGITECH\r\nBảo hành: 24\r\nKiểu kết nối: Chuột có dây\r\nĐèn LED: RGB\r\nMàu sắc: Đen\r\nKết nối: USB 2.0\r\nĐộ phân giải (CPI/DPI): 16000DPI\r\nDạng cảm biến: Optical\r\nTên cảm biến: HERO\r\nThời gian phản hồi: 1 ms\r\nSố nút bấm: 11\"\r\n', 1799000, 989000, 'Hau_Img53.jpg', 0, 1),
(54, 'Chuột gaming Logitech G102 Gen2 Lightsync (Trắng)', 'chuot-gaming-logitech-g102-gen2-lightsync-trang', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nKiểu kết nối: Chuột có dây\r\nĐèn LED: RGB\r\nMàu sắc: Trắng\r\nKết nối: USB 2.0\r\nKiểu cầm: Ambidextrous / Đối xứng\r\nĐộ phân giải (CPI/DPI): 8000DPI\r\nDạng cảm biến: Optical\r\nSố nút bấm: 6\r\nKích thước: 11.66 x 6.215 x 3.82 cm\r\nKhối lượng: 85 g\"\r\n', 589000, 399000, 'Hau_Img54.jpg', 0, 1),
(55, 'Chuột máy tính Logitech G Pro Wireless Gaming (Đen)', 'chuot-may-tinh-logitech-g-pro-wireless-gaming-den', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nKiểu kết nối: Chuột không dây\r\nĐèn LED: RGB\r\nMàu sắc: Đen\r\nKết nối: Lightspeed Wireless\r\nĐộ phân giải (CPI/DPI): 16000DPI\r\nDạng cảm biến: Optical\r\nTên cảm biến: HERO\r\nThời gian phản hồi: 1 ms\r\nSố nút bấm: 8\r\nKiểu pin: Pin Lithium\r\nKích thước: 125 x 63.5 x 40 mm\r\nKhối lượng: 80 g\"\r\n', 3549000, 2989000, 'Hau_Img55.jpg', 0, 1),
(56, 'Bàn phím cơ Gaming Logitech G Pro X', 'ban-phim-co-gaming-logitech-g-pro-x', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nTên: PRO X\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB\r\nKích thước: Tenkeyless\r\nLoại bàn phím: Bàn phím cơ\r\nĐèn: RGB\r\nKiểu switch: GX switch Blue\r\nThời gian phản hồi: 1 ms\r\nPhím chức năng: Có\r\nKích thước sản phẩm: 979 3.4 361 15.3\"\r\n', 3799000, 2689000, 'Hau_Img56.jpg', 0, 1),
(57, 'Bàn phím cơ Logitech Gaming G813 (Full Size-GL Linear)', 'ban-phim-co-logitech-gaming-g813-full-size-gl-linear', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nTên: Gaming G813\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB\r\nKích thước: Full size\r\nLoại bàn phím: Bàn phím cơ\r\nĐèn: RGB\r\nKiểu switch: GL Linear\r\nPhím chức năng: Có\r\nKê tay: Có\"\r\n', 4990000, 4690000, 'Hau_Img57.jpg', 0, 1),
(58, 'Bàn phím cơ Logitech Gaming G813 (Full Size-GL Clicky)', 'ban-phim-co-logitech-gaming-g813-full-size-gl-clicky', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nTên: Gaming G813\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB\r\nKích thước: Full size\r\nLoại bàn phím: Bàn phím cơ\r\nĐèn: RGB\r\nKiểu switch: GL Clicky\r\nPhím chức năng: Có\r\nKê tay: Có\"\r\n', 4999000, 4699000, 'Hau_Img58.jpg', 0, 1),
(59, 'Bàn phím cơ Logitech Gaming G813 (Full Size-GL Tactile)', 'ban-phim-co-logitech-gaming-g813-full-size-gl-tactile', 4, 3, '\"Thương hiệu: LOGITECH\r\nBảo hành: 24\r\nTên: Gaming G813\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB\r\nKích thước: Full size\r\nLoại bàn phím: Bàn phím cơ\r\nĐèn: RGB\r\nKiểu switch: GL Tactile\r\nPhím chức năng: Có\r\nKê tay: Có\"\r\n', 4999000, 4699000, 'Hau_Img59.jpg', 0, 1),
(60, 'Bàn phím Newmen GM819', 'ban-phim-newmen-gm819', 4, 3, '\"Thương hiệu: NEWMEN\r\nBảo hành: 12\r\nTên: GM819\r\nMàu sắc: Đen\r\nKết nối: Bàn phím có dây\r\nKết nối: USB 2.0\r\nKích thước: Full size\r\nLoại bàn phím: Bàn phím cơ\r\nĐèn: Có\r\nKiểu switch: Gaming Mechanical Blue\"\r\n', 1150000, 989000, 'Hau_Img60.jpg', 0, 1),
(61, 'Máy tính bảng iPad Air 4 Wifi 64GB (2020)', 'may-tinh-bang-ipad-air-4-wifi-64gb-2020', 5, 4, 'Màn hình: Liquid Retina.<br>\r\nHệ điều hành: iPadOS 14.<br>\r\nChip xử lý: Apple A14 Bionic.<br>\r\nRAM: 4 GB.<br>\r\nBộ nhớ trong: 64 GB.<br>\r\nKết nối: Nghe gọi qua FaceTime.<br>\r\nCamera sau: 12 MP.<br>\r\nCamera trước: 7 MP.<br>\r\nPin, Sạc: 28.65 Wh (~ 7600 mAh)20 W.<br>', 16990000, 16190000, 'Hau_Img61.jpg', 0, 1),
(62, 'iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 'ipad-pro-m1-12.9-inch-wifi-cellular-256gb-2021', 5, 4, 'Màn hình:	Liquid Retina, 11 inch.<br>\r\nHệ điều hành:	iPadOS 14.<br>\r\nChip xử lý:	Apple M1 8 nhân.<br>\r\nRAM:	8 GB.<br>\r\nBộ nhớ trong:	128 GB | 256 GB.<br>\r\nKết nối:	Wi-Fi | Wi-Fi & Cellular.<br>\r\nCamera sau:	Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR.<br>\r\nCamera trước:	12 MP.<br>\r\nPin:	28.65 Wh.<br>', 38490000, 37990000, 'Hau_Img62.jpg', 0, 1),
(63, 'Máy tính bảng iPad Pro 12.9 inch Wifi Cellular 128GB (2020) ', 'may-tinh-bang-ipad-pro-129-inch-wifi-cellular-128gb-2020', 5, 4, 'Màn hình: 12.9\"Liquid Retina.<br>\r\nHệ điều hành: iPadOS 14.<br>\r\nChip xử lý: Apple A12Z Bionic.<br>\r\nRAM: 6 GB.<br>\r\nBộ nhớ trong: 128 GB.<br>\r\nKết nối: 4GNghe gọi qua FaceTime.<br>\r\nSIM: 1 Nano SIM hoặc 1 eSIM.<br>\r\nCamera sau: Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR.<br>\r\nCamera trước: 7 MP.<br>\r\nPin, Sạc: 36.71 Wh (~ 9720 mAh)20 W.<br>\r\n\r\n', 32990000, 32190000, 'Hau_Img63.jpg', 0, 1),
(64, 'Máy tính bảng iPad Air 4 Wifi Cellular 256GB (2020)', 'may-tinh-bang-ipad-air-4-wifi-cellular-256gb-2020', 5, 4, 'Màn hình:Liquid Retina.<br>\r\nHệ điều hành: iPadOS 14.<br>\r\nChip xử lý: Apple A14 Bionic.<br>\r\nRAM: 4 GB.<br>\r\nBộ nhớ trong 256 GB.<br>\r\nKết nối: 4GNghe gọi qua FaceTime.<br>\r\nSIM: 1 Nano SIM hoặc 1 eSIM.<br>\r\nCamera sau: 12 MP.<br>\r\nCamera trước: 7 MP.<br>\r\nPin, Sạc: 28.65 Wh (~ 7600 mAh)20 W.<br>', 24990000, 24190000, 'Hau_Img64.jpg', 0, 1),
(65, 'Máy tính bảng iPad mini 7.9 inch Wifi Cellular 64GB (2019)', 'may-tinh-bang-ipad-mini-79-inch-wifi-cellular-64gb-2019', 5, 4, 'ĐANG CẬP NHẬT', 15990000, 14990000, 'Hau_Img65.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyentrunghau_user`
--

CREATE TABLE `nguyentrunghau_user` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` char(32) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguyentrunghau_2119110245`
--
ALTER TABLE `nguyentrunghau_2119110245`
  ADD PRIMARY KEY (`pageId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_admin`
--
ALTER TABLE `nguyentrunghau_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_brand`
--
ALTER TABLE `nguyentrunghau_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_cart`
--
ALTER TABLE `nguyentrunghau_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_category`
--
ALTER TABLE `nguyentrunghau_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_customer`
--
ALTER TABLE `nguyentrunghau_customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_image`
--
ALTER TABLE `nguyentrunghau_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyentrunghau_link`
--
ALTER TABLE `nguyentrunghau_link`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyentrunghau_order`
--
ALTER TABLE `nguyentrunghau_order`
  ADD PRIMARY KEY (`orderId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_orderdetail`
--
ALTER TABLE `nguyentrunghau_orderdetail`
  ADD PRIMARY KEY (`orderDetailId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_page`
--
ALTER TABLE `nguyentrunghau_page`
  ADD PRIMARY KEY (`pageId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_product`
--
ALTER TABLE `nguyentrunghau_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `nguyentrunghau_user`
--
ALTER TABLE `nguyentrunghau_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_2119110245`
--
ALTER TABLE `nguyentrunghau_2119110245`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_admin`
--
ALTER TABLE `nguyentrunghau_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_brand`
--
ALTER TABLE `nguyentrunghau_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_cart`
--
ALTER TABLE `nguyentrunghau_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_category`
--
ALTER TABLE `nguyentrunghau_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_customer`
--
ALTER TABLE `nguyentrunghau_customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_image`
--
ALTER TABLE `nguyentrunghau_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_link`
--
ALTER TABLE `nguyentrunghau_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_order`
--
ALTER TABLE `nguyentrunghau_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_orderdetail`
--
ALTER TABLE `nguyentrunghau_orderdetail`
  MODIFY `orderDetailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_page`
--
ALTER TABLE `nguyentrunghau_page`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_product`
--
ALTER TABLE `nguyentrunghau_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `nguyentrunghau_user`
--
ALTER TABLE `nguyentrunghau_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
