-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 24, 2021 lúc 09:22 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phantrungkien_2119110247`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_admin`
--

DROP TABLE IF EXISTS `phantrungkien_admin`;
CREATE TABLE IF NOT EXISTS `phantrungkien_admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` char(32) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `trash` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_admin`
--

INSERT INTO `phantrungkien_admin` (`adminId`, `username`, `adminName`, `email`, `pass`, `level`, `trash`) VALUES
(1, 'kien', 'trungkien', 'phankien209@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_brand`
--

DROP TABLE IF EXISTS `phantrungkien_brand`;
CREATE TABLE IF NOT EXISTS `phantrungkien_brand` (
  `brandId` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(100) CHARACTER SET utf8 NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`brandId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_brand`
--

INSERT INTO `phantrungkien_brand` (`brandId`, `brandName`, `alias`, `trash`, `status`) VALUES
(1, 'BAD HABITS', 'bad-habits', 0, 1),
(2, 'HADES', 'hades', 0, 1),
(3, 'ONTOP GLOBAL', 'ontop-global', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_cart`
--

DROP TABLE IF EXISTS `phantrungkien_cart`;
CREATE TABLE IF NOT EXISTS `phantrungkien_cart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `sId` varchar(255) CHARACTER SET utf8 NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`cartId`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_cart`
--

INSERT INTO `phantrungkien_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(28, 'hb1dkvk8ptdfhleq375m01e891', 1, ' Ariyan Lorem Ipsum fsdfasdaf', 525.00, 1, 'upload/a2d9ff0c56.png'),
(42, 'ki70g8rmb4mfqs7cmei2l3qpi3', 10, 'Woman Tshirt 03', 300.00, 1, 'upload/a2fccb0144.png'),
(43, 'e6r6avk209clao063d5p18i597', 7, 'Mans Tshirt 02', 400.00, 1, 'upload/4b2b2f0556.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_category`
--

DROP TABLE IF EXISTS `phantrungkien_category`;
CREATE TABLE IF NOT EXISTS `phantrungkien_category` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parentId` int(11) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_category`
--

INSERT INTO `phantrungkien_category` (`catId`, `catName`, `alias`, `parentId`, `trash`, `status`) VALUES
(2, 'ÁO THUN', 'ao-thun', 0, 0, 1),
(3, 'ÁO KHOÁC', 'ao-khoac', 0, 0, 1),
(4, 'ÁO SƠMI', 'ao-somi', 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_contact`
--

DROP TABLE IF EXISTS `phantrungkien_contact`;
CREATE TABLE IF NOT EXISTS `phantrungkien_contact` (
  `contactId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_customer`
--

DROP TABLE IF EXISTS `phantrungkien_customer`;
CREATE TABLE IF NOT EXISTS `phantrungkien_customer` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_customer`
--

INSERT INTO `phantrungkien_customer` (`customerId`, `userId`, `fullname`, `address`, `phone`, `email`, `trash`) VALUES
(2, 0, '', 'Groan Puran Polton south Dhaka ', '4544555455', 'kaziariyan@gmail.com', 0),
(3, 0, 'Kiên', 'hcm', '123456789', 'kien@gmail.com', 0),
(4, 0, 'Kiên', 'hcm', '01232663596', 'kien@gmail.com', 0),
(5, 0, 'Kiên', 'hcm', '01232663596', 'kien@gmail.com', 0),
(6, 0, 'Kiên', 'hcm', '01232663596', 'kien@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_image`
--

DROP TABLE IF EXISTS `phantrungkien_image`;
CREATE TABLE IF NOT EXISTS `phantrungkien_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `position` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_image`
--

INSERT INTO `phantrungkien_image` (`id`, `title`, `image`, `imageName`, `position`, `trash`, `status`) VALUES
(1, 'Slider1', 'slide1.jpg', '', 1, 0, 1),
(2, 'Slider2', 'slide2.jpg', '', 1, 0, 1),
(3, 'Slider3', 'slide3.jpg', '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_link`
--

DROP TABLE IF EXISTS `phantrungkien_link`;
CREATE TABLE IF NOT EXISTS `phantrungkien_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `orders` tinytext NOT NULL,
  `trash` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_link`
--

INSERT INTO `phantrungkien_link` (`id`, `title`, `Position`, `Image`, `link`, `orders`, `trash`, `status`) VALUES
(1, 'Về chúng tôi', 'Bottommenu1', '', 'page/showpage/1', '1', '0', 1),
(2, 'Chính sách bán hàng', 'Bottommenu1', '', 'page/showpage/2', '2', '0', 1),
(3, 'Tài khoản', 'Bottommenu2', '', '#', '1', '0', 1),
(4, 'Đăng ký', 'Bottommenu2', '', '#', '2', '0', 1),
(5, 'Liên hệ', 'Bottommenu2', '', '#', '3', '0', 1),
(6, 'Liên hệ', 'globalnav', '', '#', '2', '0', 1),
(7, 'Về chúng tôi', 'globalnav', '', '#', '1', '0', 1),
(8, 'Chính sách bảo mật', 'Bottommenu1', '', 'page/showpage/3', '3', '0', 1),
(9, 'Chính sách vận chuyển', 'Bottommenu1', '', 'page/showpage/4', '4', '0', 1),
(10, 'Hướng dẫn thanh toán', 'Bottommenu1', '', 'page/showpage/5', '5', '0', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_order`
--

DROP TABLE IF EXISTS `phantrungkien_order`;
CREATE TABLE IF NOT EXISTS `phantrungkien_order` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` float(10,2) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_order`
--

INSERT INTO `phantrungkien_order` (`orderId`, `customerId`, `orderDate`, `total`, `note`, `status`, `trash`) VALUES
(8, 2, '0000-00-00 00:00:00', 500.00, '', 1, 0),
(9, 2, '0000-00-00 00:00:00', 400.00, '', 0, 0),
(10, 2, '0000-00-00 00:00:00', 450.00, '', 1, 0),
(11, 3, '2021-06-19 11:57:18', 0.00, 'Kiên', 1, 0),
(12, 4, '2021-06-22 08:26:36', 0.00, 'kbkn lk', 1, 0),
(13, 5, '2021-06-22 09:38:44', 0.00, 'hbjk', 1, 0),
(14, 6, '2021-06-22 09:47:34', 370000.00, 'hbjk', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_orderdetail`
--

DROP TABLE IF EXISTS `phantrungkien_orderdetail`;
CREATE TABLE IF NOT EXISTS `phantrungkien_orderdetail` (
  `orderDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`orderDetailId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_orderdetail`
--

INSERT INTO `phantrungkien_orderdetail` (`orderDetailId`, `orderId`, `productId`, `price`, `quantity`, `trash`) VALUES
(1, 6, 1, 370000, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_page`
--

DROP TABLE IF EXISTS `phantrungkien_page`;
CREATE TABLE IF NOT EXISTS `phantrungkien_page` (
  `pageId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `createBy` int(11) NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`pageId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_page`
--

INSERT INTO `phantrungkien_page` (`pageId`, `title`, `content`, `createBy`, `createDate`, `updateDate`, `trash`, `status`) VALUES
(1, 'Vê chúng tôi', 'Có nhiều lý do khiến chúng tôi quyết định mở rộng hoạt động kinh doanh, bán củ giống chất lượng cho người dùng hoa mà không thông qua bất cứ trung gian nào khác. Dù bạn muốn tự trồng và chăm sóc một chậu hoa để gần gũi với thiên nhiên hơn, thư giãn đầu óc sau một ngày làm việc. Hoặc bạn muốn có một chậu hoa đẹp vào dịp tết, tránh việc mua phải những bó hoa lạnh, hoa kém chất lượng với giá quá cao. Dù lý do là gì, chúng tôi tự tin mang tới cho bạn những cử giống hoa chất lượng nhất với chi phí hợp lý.\r\n\r\nĐược thành lập từ năm 2014, công ty chúng tôi là đơn vị tiên phong trong lĩnh vực phân phối củ giống hoa Ly và các loại hoa thành phẩm như hoa Ly, hoa hồng ngoại. Sản phẩm củ giống hoa Ly được chúng tôi nhập khẩu trực tiếp từ các nhà cung cấp tới từ châu Âu như Hà Lan, Pháp …đảm bảo chất lượng tốt nhất cho người trồng.\r\n\r\nCác vườn hoa có tổng diện tích 10ha của chúng tôi tại huyện Đan Phượng – Hà Nội cung cấp hoa tươi bán buôn, hoa tươi tết cho không chỉ thị trường Hà Nội mà cả các tỉnh miền Bắc như Nam Định, Hải Phòng, Quảng Ninh, Lạng Sơn …\r\n\r\nKhách hàng chính của chúng tôi là các nhà vườn trồng hoa ly tại miền Bắc ở các vùng chuyên canh trồng hoa như làng hoa Tây Tựu, hoa Mê Linh, hoa Sapa. Sản phẩm chất lượng và việc tư vấn sát sao tới từng người trồng là bí quyết tạo dựng uy tín công ty chúng tôi.', 1, '2021-03-02 23:09:19', '2021-06-24 14:19:21', 0, 1),
(2, 'Chính sách bán hàng', 'Chúng tôi áp dụng phương thức thu tiền khi giao hàng và chuyển khoản ngân hàng với các đơn hàng trên toàn lãnh thổ Việt Nam.\r\n\r\nThông tin tài khoản:\r\n\r\nChủ tài khoản: Trịnh Xuân Trường\r\nSố tài khoản: 19032 80223 6018\r\nNgân hàng Techcombank chi nhánh Từ Liêm\r\nCó 3 cách chủ yếu để bạn đặt hàng trên hệ thống của chúng tôi:\r\n\r\nCách 1: Bạn chọn sản phẩm và số lượng mình muốn, rồi đặt hàng trên web (ưu tiên sử dụng)\r\nCách 2: Bạn để lại thông tin số điện thoại trên website hoặc facebook để chúng tôi chủ động liên lạc lại. \r\nCách 3: Bạn gọi điện trực tiếp tới các số điện thoại của Gánh hoa Ly trên website hoặc facebook.', 1, '2021-03-16 23:09:19', '2021-06-24 14:19:02', 0, 1),
(3, 'Chính sách bảo mật', 'Chính sách Bảo mật thông tin cá nhân này áp dụng đối với mọi thiết bị, trang web hoặc ứng dụng trực tuyến của Samsung tham chiếu đến hoặc liên kết đến Chính sách Bảo mật thông tin cá nhân (gọi chung là “Dịch vụ”). Chính sách Bảo mật thông tin cá nhân áp dụng bất kể bạn sử dụng máy vi tính, điện thoại di động, máy tính bảng, TV hay thiết bị khác để truy cập Dịch vụ của chúng tôi.', 1, '2021-03-16 23:09:19', '2021-06-24 14:17:33', 0, 1),
(4, 'Chính sách vận chuyển', 'Sản phẩm & phụ kiện bán nguyên giá được miễn phí vận chuyển toàn quốc.\r\nSản phẩm & phụ kiện bán trong chương trình khuyến mại: Miễn phí ship nội thành Hà Nội và HCM. Với khách ở khu vực Ngoại thành và Ngoại tỉnh sẽ tính phí vận chuyển theo đơn vị chuyển phát nhanh.\r\nVới sản phẩm đổi, bảo hành, bảo trì: Khách hàng chịu chi phí vận chuyển theo đơn vị chuyển phát của AURORA. Chi phí này sẽ được AURORA thông báo và xác nhận với quý khách trước khi quý khách tiến hành thanh toán và AURORA tiến hành gửi hàng.\r\n\r\nTHỜI GIAN GIAO HÀNG :\r\nThời gian giao hàng sẽ từ 1-5 ngày tùy vào khoảng cách vận chuyển.\r\nTrong một số trường hợp khách quan AURORA có thể giao hàng chậm trễ do những điều kiện bất khả kháng như thời tiết xấu, điều kiện giao thông không thuận lợi, xe hỏng hóc trên đường giao hàng, trục trặc trong quá trình xuất hàng.\r\nTrong thời gian chờ đợi nhận hàng, Quý khách có bất cứ thắc mắc gì về thông tin vận chuyển xin vui lòng liên hệ hotline 0964 106 886 của AURORA để nhận trợ giúp.', 1, '2021-03-16 23:09:19', '2021-06-24 14:17:33', 0, 1),
(5, 'Hướng dẫn thanh toán', '1. Thanh toán tiền mặt tại nhà khi nhận hàng thông qua hình thức giao hàng trực tiếp, chuyển phát nhanh hoặc COD:\r\n\r\nKhi nhân viên giao hàng giao phát, khách hàng kiểm tra sản phẩm về hình thức đảm bảo, khách hàng nhận hàng và thanh toán trực tiếp cho nhân viên giao hàng theo giá trị tiền trên hóa đơn. Ngoài ra khách hàng không phải thanh toán bất kỳ 1 chi phí nào khác.\r\n\r\n2. Thanh toán tiền mặt tại cửa hàng:\r\n\r\nKhách hàng đến cửa hàng tham quan, mua sản phẩm sẽ thanh toán trực tiếp bằng tiền mặt hoặc quẹt thẻ qua POS ngân hàng tại cửa hàng.\r\n\r\n3. Chuyển khoản qua ngân hàng:\r\n\r\nNếu địa điểm giao hàng là ngoại thành, ngoại tỉnh nhưng khác với địa điểm thanh toán (trong trường hợp Quý khách gửi quà, gửi hàng cho bạn bè, đối tác …) chúng tôi sẽ thu tiền trước 100% giá trị hàng bằng phương thức chuyển khoản trước khi giao hàng. Khách hàng được miễn phí vận chuyển\r\n\r\nKhách hàng có thể hoàn toàn yên tâm với hình thức thanh toán này. vì khi chuyển tiền ở ngân hàng , ngân hàng sẽ đưa cho bạn một giấy ủy nhiệm chi trong đó có số tiền và số TK mà  bạn chuyển tiền tới, nên các bạn  không phải lo lắng mình chuyển tiền rồi mà Galle Watch không chuyển hàng, giấy ủy nhiệm chi đó chính là bằng chứng bạn đã chuyển tiền  và  ngân hàng  mà bạn chuyên tiền có thể làm rõ điều đó cho bạn. Chúng tôi  bán hàng luôn đăt chữ  tín  lên đầu và luôn cố gắng có những chất lượng dịch vụ tốt nhất với khách hàng.', 1, '2021-03-16 23:09:19', '2021-06-24 14:17:33', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_product`
--

DROP TABLE IF EXISTS `phantrungkien_product`;
CREATE TABLE IF NOT EXISTS `phantrungkien_product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `detail` text NOT NULL,
  `price` float NOT NULL,
  `salePrice` float DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `trash` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`productId`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phantrungkien_product`
--

INSERT INTO `phantrungkien_product` (`productId`, `productName`, `alias`, `catId`, `brandId`, `detail`, `price`, `salePrice`, `image`, `trash`, `status`) VALUES
(7, 'BLACK HABITS', 'black-habits', 4, 1, 'SKU:SP000548-7<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 580000, 500000, 'Kien_Img07.jpg', 0, 1),
(1, 'POWER RABBIT', 'power-rabbit', 2, 1, 'SKU:SP000548-1<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 440000, 370000, 'Kien_Img01.jpg', 0, 1),
(2, 'CRACKEN', 'cracken', 2, 1, 'SKU:SP000548-2<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 450000, 370000, 'Kien_Img02.jpg\r\n', 0, 1),
(3, 'SIGNATURE ICON', 'signature-icon', 2, 1, 'SKU:SP000548-3<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 350000, 'Kien_Img03.jpg\r\n', 0, 1),
(4, 'BAD WASHED', 'bad-washed', 2, 1, 'SKU:SP000548-4<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>\r\n', 500000, 420000, 'Kien_Img04.jpg', 0, 1),
(5, 'LUCKY SHIRT', 'lucky-shirt', 4, 1, 'SKU:SP000548-5<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 570000, 470000, 'Kien_Img05.jpg', 0, 1),
(6, 'STRIPED SHIRT', 'striped-shirt', 4, 1, 'SKU:SP000548-6<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>\r\n', 550000, 480000, 'Kien_Img06.jpg', 0, 1),
(8, 'BASICISM JACKET', 'basticism-jacket', 3, 1, 'SKU:SP000548-8<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 660000, 600000, 'Kien_Img08.jpg', 0, 1),
(9, 'LIGHTSPEED JACKET', 'lightspeed-jacket', 3, 1, 'SKU:SP000548-9<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 600000, 540000, 'Kien_Img09.jpg', 0, 1),
(10, 'RACER JACKET', 'racer-jacker', 3, 1, 'SKU:SP000548-10<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 610000, 540000, 'Kien_Img10.jpg', 0, 1),
(11, 'SMILEY FACE TEE', 'smiley-face-tee', 2, 2, 'SKU:SP000548-11<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 450000, 380000, 'Kien_Img11.jpg', 0, 1),
(12, 'CAR IN FLAME TEE', 'car-in-flame-tee', 2, 2, 'SKU:SP000548-12<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 450000, 380000, 'Kien_Img12.jpg', 0, 1),
(13, 'SNAKE TIEDYE TEE', 'snake-tiedye-tee', 2, 2, 'SKU:SP000548-13<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 500000, 420000, 'Kien_Img13.jpg', 0, 1),
(14, 'SKELETON BLUE SHIRT', 'skeleton-blue-shirt', 4, 2, 'SKU:SP000548-14<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 500000, 420000, 'Kien_Img14.jpg', 0, 1),
(15, 'ICONIC POLO', 'iconic-polo', 4, 2, 'SKU:SP000548-15<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 500000, 420000, 'Kien_Img15.jpg', 0, 1),
(16, 'CUPID SHIRT', 'cupid-shirt', 4, 2, 'SKU:SP000548-16<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 500000, 420000, 'Kien_Img16.jpg', 0, 1),
(17, 'DYSTOPIA SHIRT', 'dystopia-shirt', 4, 2, 'SKU:SP000548-17<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 240000, 190000, 'Kien_Img17.jpg', 0, 1),
(18, 'MONO WASH HOODIE', 'mono-wash-hoodia', 3, 2, 'SKU:SP000548-18<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 670000, 620000, 'Kien_Img18.jpg', 0, 1),
(19, 'HADES BASIC JACKET', 'hades-basic-jacket', 3, 2, 'SKU:SP000548-19<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 650000, 580000, 'Kien_Img19.jpg', 0, 1),
(20, 'GO WILD N FUN HOODIE', 'go-wild-in-fun-hoodie', 3, 2, 'SKU:SP000548-20<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 600000, 550000, 'Kien_Img20.jpg', 0, 1),
(21, 'CONVERT', 'convert', 2, 3, 'SKU:SP000548-21<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 370000, 320000, 'Kien_Img21', 0, 1),
(22, 'ORANGE BLOOD-WHITE', 'orange-blood-white', 2, 3, 'SKU:SP000548-1<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 320000, 'Kien_Img22.jpg', 0, 1),
(23, 'BLUE KHEPRI-BLACK', 'blue-khepri-black', 2, 3, 'SKU:SP000548-23<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 320000, 'Kien_Img23.jpg', 0, 1),
(24, 'SHIRT HIEROGLYPHS', 'shirt-hieroglyphs', 4, 3, 'SKU:SP000548-24<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 360000, 320000, 'Kien_Img24.jpg', 0, 1),
(25, 'SHIRT LEVEL', 'shirt-level', 4, 3, 'SKU:SP000548-25<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 350000, 290000, 'Kien_Img25', 0, 1),
(26, 'SHIRT IMMORTAL FIRE', 'shirt-immortal-fire', 4, 3, 'SKU:SP000548-26<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 360000, 'Kien_img26.jpg', 0, 1),
(27, 'JACKET CUTE SQUAD', 'jacket-cute-squad', 3, 3, 'SKU:SP000548-27<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 390000, 340000, 'Kien_Img27.jpg', 0, 1),
(28, 'JACKET KHUFU SIGNATURE', 'jacket-khufu-signature', 3, 3, 'SKU:SP000548-28<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 340000, 'Kien_Img28.jpg', 0, 1),
(29, 'JACKET IMMORTAL FLAME', 'jacket-immortal-flame', 3, 3, 'SKU:SP000548-29<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 360000, 'Kien_Img29.jpg', 0, 1),
(30, 'JACKET SIGNA', 'jacket-signa', 3, 3, 'SKU:SP000548-30<br>\r\n<br>\r\nSize:<br>\r\nM : 60x70<br>\r\nL : 62x72<br>', 400000, 340000, 'Kien_Img30.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phantrungkien_user`
--

DROP TABLE IF EXISTS `phantrungkien_user`;
CREATE TABLE IF NOT EXISTS `phantrungkien_user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` char(32) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
