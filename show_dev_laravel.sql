-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2023 lúc 08:46 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `show_dev_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url_banner` varchar(100) NOT NULL,
  `links` varchar(100) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meta` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `url_banner`, `links`, `title`, `description`, `meta`, `updated_at`, `created_at`, `location`) VALUES
(1, 'https://i.pinimg.com/564x/08/1e/df/081edfc2eb450511d5d0432d86bc42b3.jpg', '', '', '', '', NULL, NULL, 'small-banner'),
(2, 'https://i.pinimg.com/564x/ca/52/b4/ca52b4d6eb9636e73afeb017cdc3649f.jpg', '', '', '', '', NULL, NULL, 'small-banner'),
(3, 'https://i.pinimg.com/564x/33/0d/7d/330d7d377e80926165f7d058dd58c229.jpg', '', '', '', '', NULL, NULL, 'small-banner'),
(5, 'https://i.pinimg.com/564x/86/87/36/868736ee4dd097928d9c247c66b07dd3.jpg', '', '', '', '', NULL, NULL, 'slider'),
(6, 'https://i.pinimg.com/564x/01/64/11/0164111a396ec031a3b504060cbe909a.jpg', '', '', '', '', NULL, NULL, 'slider'),
(10, 'https://i.pinimg.com/564x/aa/80/91/aa8091ec1b23c5456cf95e5479df1550.jpg', '', '', '', '', NULL, NULL, 'medium-banner'),
(13, 'https://i.pinimg.com/564x/2a/ef/3a/2aef3ab9b86deb207634ebf892c15807.jpg', '', '', '', '', NULL, NULL, 'medium-banner'),
(17, 'https://i.pinimg.com/564x/92/6d/a1/926da11fc5fa1d71b87de60e2cd9b30e.jpg', NULL, '', '', '', NULL, NULL, 'slider');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cg` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `thumbl_url` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_post`
--

CREATE TABLE `detail_post` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_post`
--

INSERT INTO `detail_post` (`id`, `id_post`, `content`, `updated_at`, `created_at`) VALUES
(1, 3, '<h1>iPhone 15 cần g&igrave; để l&agrave;m lu mờ iPhone 14?</h1>\r\n\r\n<p>Sự kiện:&nbsp;<a href=\"https://www.24h.com.vn/iphone-15-c407e6726.html\" onclick=\"return send_ga_gtag(\'box_sk_dau_trang_bai_viet\', \'\',\'eyJjYXRlZ29yeUlkXzI0aCI6IjQwNyIsInBhZ2VDYXRlZ29yeV8yNGgiOiJoaXRlY2hfZmFzaGlvbiIsImFydGljbGVJZF8yNGgiOiIxNDkzNjg5IiwidHlwZV8yNGgiOiIxIiwiZGV2aWNlXzI0aCI6InBjIiwiYWN0aW9uXzI0aCI6ImNsaWNrIn0=\', this,\'\',\'\')\">iPhone 15</a></p>\r\n\r\n<p>CHIA SẺ</p>\r\n\r\n<h2><strong>Đ&acirc;y l&agrave; những t&iacute;nh năng iPhone 15 cần c&oacute; để vượt qua iPhone 14 tiền nhiệm.</strong></h2>\r\n\r\n<p>Mỗi lần ph&aacute;t h&agrave;nh điện thoại mới đều l&agrave; cơ hội để c&aacute;c nh&agrave; sản xuất giải quyết những nhược điểm của sản phẩm trước đ&oacute;. Do đ&oacute;, Apple cũng cần sửa chữa một số sai s&oacute;t cho d&ograve;ng iPhone của m&igrave;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"iPhone 15 cần gì để làm lu mờ iPhone 14? - 1\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/iPhone-15-can-gi-de-lam-lu-mo-iPhone-14-3-1692324420-101-width963height543.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 14 Pro.</p>\r\n\r\n<p>Tất nhi&ecirc;n, iPhone 14 l&agrave; một thiết bị tuyệt vời, nằm ở vị tr&iacute; cao trong danh s&aacute;ch iPhone tốt nhất. Nhưng mẫu iPhone c&oacute; m&agrave;n h&igrave;nh 6,1 inch ti&ecirc;u chuẩn cũng kh&ocirc;ng ho&agrave;n hảo v&agrave; &ldquo;Nh&agrave; T&aacute;o&rdquo; ho&agrave;n to&agrave;n c&oacute; thể mang lại một v&agrave;i cải tiến tr&ecirc;n iPhone 15 kế nhiệm.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; những điểm iPhone 15 cần c&oacute; để khắc phục nhược điểm tr&ecirc;n iPhone 14.</p>\r\n\r\n<p><strong>1. Tuổi thọ pin tốt hơn</strong></p>\r\n\r\n<p>C&aacute;c mẫu iPhone 14 lớn hơn của Apple &ndash; chẳng hạn như iPhone 14 Plus v&agrave; iPhone 14 Pro Max đ&atilde; đặt ra c&aacute;c ti&ecirc;u chuẩn mới cho thời lượng pin của iPhone khi ra mắt. Cả hai đều lọt v&agrave;o danh s&aacute;ch smartphone pin &ldquo;tr&acirc;u&rdquo; v&agrave; iPhone 14 Pro Max vẫn trụ ở một trong những vị tr&iacute; h&agrave;ng đầu.</p>\r\n\r\n<p><img alt=\"iPhone 15 cần gì để làm lu mờ iPhone 14? - 2\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/iPhone-15-can-gi-de-lam-lu-mo-iPhone-14-untitled-1692324420-893-width598height186.png\" /></p>\r\n\r\n<p>So s&aacute;nh thời lượng pin giữa c&aacute;c mẫu iPhone.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, iPhone 14 ti&ecirc;u chuẩn chỉ đạt thời lượng 9 giờ 28 ph&uacute;t trong b&agrave;i kiểm tra lướt web li&ecirc;n tục qua mạng di động. Thời lượng n&agrave;y d&agrave;i hơn khoảng 30 ph&uacute;t so với điện thoại th&ocirc;ng minh trung b&igrave;nh. Một phần l&agrave; do iPhone 14 c&oacute; k&iacute;ch cỡ nhỏ hơn&nbsp;so với c&aacute;c phi&ecirc;n bản kh&aacute;c.</p>\r\n\r\n<p>Vậy iPhone 15 c&oacute; thể cải thiện thời lượng pin như thế n&agrave;o?</p>\r\n\r\n<p>C&aacute;c tin đồn về iPhone 15 cho thấy, Apple sẽ tăng dung lượng pin cho iPhone 15 l&ecirc;n 3.877 mAh, mức tăng đ&aacute;ng kể so với pin 3.279 mAh tr&ecirc;n iPhone 14.</p>\r\n\r\n<p>Một tin đồn kh&aacute;c cho hay, iPhone đang điều chỉnh hệ thống pin xếp chồng l&ecirc;n nhau để quản l&yacute; năng lượng tốt hơn, gi&uacute;p iPhone 15 tồn tại l&acirc;u hơn trong một lần sạc.</p>\r\n\r\n<p><strong>2. N&acirc;ng cấp camera</strong></p>\r\n\r\n<p>Thực tế, th&ocirc;ng số kỹ thuật camera sau k&eacute;p 12MP tr&ecirc;n iPhone 14 kh&ocirc;ng thể đem ra&nbsp;so s&aacute;nh với c&aacute;c &ldquo;đối thủ&rdquo;.</p>\r\n\r\n<p><img alt=\"iPhone 15 cần gì để làm lu mờ iPhone 14? - 3\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/iPhone-15-can-gi-de-lam-lu-mo-iPhone-14-2-1692324420-89-width967height545.png\" /></p>\r\n\r\n<p>iPhone 15 sẽ kh&ocirc;ng c&oacute; n&acirc;ng cấp&nbsp;camera đ&aacute;ng kể&nbsp;so với iPhone 14.</p>\r\n\r\n<p>Dự kiến, camera ch&iacute;nh 12MP tr&ecirc;n iPhone 14 sẽ phải l&eacute;p vế trước cảm biến 48MP tr&ecirc;n iPhone 15. Trước đ&oacute;, camera 48MP đ&atilde; c&oacute; tr&ecirc;n iPhone 14 Pro. Do đ&oacute;, iFan c&oacute; thể mong đợi iPhone 15 sẽ cho ph&eacute;p chụp ảnh chi tiết hơn &ndash; đặc biệt l&agrave; khi người d&ugrave;ng chụp ở độ ph&acirc;n giải đầy đủ hoặc cắt ảnh.</p>\r\n\r\n<p><strong>3. M&agrave;n h&igrave;nh l&agrave;m mới nhanh</strong></p>\r\n\r\n<p>Trong khi cả ba mẫu Galaxy S23 đều c&oacute; tốc độ l&agrave;m mới m&agrave;n h&igrave;nh 120Hz, cho ph&eacute;p cuộn mượt m&agrave; hơn v&agrave; đồ họa sống động hơn, Pixel 7 Pro v&agrave; thậm ch&iacute; Pixel 7 c&oacute; tốc độ l&agrave;m mới m&agrave;n h&igrave;nh l&ecirc;n tới 90Hz, iPhone 14 ti&ecirc;u chuẩn vẫn mắc kẹt ở tốc độ 60Hz ti&ecirc;u chuẩn.</p>\r\n\r\n<p>Theo Ross Young, khả năng cao l&agrave; iPhone 15 sẽ vẫn c&oacute; tốc độ l&agrave;m mới m&agrave;n h&igrave;nh 60Hz như bản tiền nhiệm. Phải đợi tới năm 2025, iPhone ti&ecirc;u chuẩn mới c&oacute; m&agrave;n h&igrave;nh ProMotion.</p>\r\n\r\n<p><strong>4. Tốc độ sạc</strong></p>\r\n\r\n<p>So với c&aacute;c điện thoại th&ocirc;ng minh kh&aacute;c, iPhone l&agrave; một &ldquo;kẻ chậm chạp&rdquo; khi sạc. Điện thoại của Apple hỗ trợ tốc độ sạc 20W, k&eacute;m xa Pixel 7 (23W) v&agrave; Galaxy S23 (25W).</p>\r\n\r\n<p><img alt=\"iPhone 15 cần gì để làm lu mờ iPhone 14? - 4\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/iPhone-15-can-gi-de-lam-lu-mo-iPhone-14-untitled1-1692324420-691-width964height541.png\" /></p>\r\n\r\n<p>D&ograve;ng iPhone 15 sẽ c&oacute; cổng USB- C.</p>\r\n\r\n<p>Điều đ&oacute; c&oacute; thể thay đổi với iPhone 15. Cả 4 mẫu iPhone mới đều sẽ thay thế cổng sạc Lightning độc quyền của Apple bằng chuẩn USB-C phổ biến hơn, hỗ trợ sạc nhanh hơn.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, chỉ iPhone 15 Pro v&agrave; iPhone 15 Pro Max c&oacute; tốc độ sạc tăng l&ecirc;n, c&aacute;c mẫu iPhone kh&aacute;c vẫn ở mức 20W.</p>\r\n\r\n<p><strong>5. Dynamic Island</strong></p>\r\n\r\n<p>Khi ra mắt v&agrave;o năm ngo&aacute;i, Dynamic Island kh&ocirc;ng chỉ chiếm &iacute;t kh&ocirc;ng gian hơn so với &ldquo;tai thỏ&rdquo; m&agrave; c&ograve;n thực tế hơn. iPhone 14 Pro sử dụng khu vực đ&oacute; để gửi th&ocirc;ng b&aacute;o v&agrave; gi&uacute;p người d&ugrave;ng theo d&otilde;i c&aacute;c Hoạt động trực tiếp nhưng kh&ocirc;ng g&acirc;y ra nhiều sự lộn xộn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đa số c&aacute;c tin đồn đều cho rằng iPhone 15 Series sẽ tiếp bước iPhone 14 Pro v&agrave; &aacute;p dụng Dynamic Island thay cho phần &ldquo;tai thỏ&rdquo;. Đ&oacute; sẽ l&agrave; một thay đổi đ&aacute;ng hoan ngh&ecirc;nh v&igrave; mang lại trải nghiệm đồng nhất tr&ecirc;n nhiều mẫu iPhone hơn, đồng thời tăng diện t&iacute;ch m&agrave;n h&igrave;nh c&oacute; thể sử dụng tr&ecirc;n iPhone ti&ecirc;u chuẩn.</p>\r\n\r\n<p><strong>Triển vọng iPhone 15</strong></p>\r\n\r\n<p>Những tin đồn về iPhone 15 cho thấy, Apple c&oacute; kế hoạch giải quyết &iacute;t nhất ba trong số điểm yếu của iPhone 14. Vấn đề thứ tư - tốc độ sạc chậm c&oacute; thể được giải quyết một phần nhờ sự xuất hiện của USB-C.</p>\r\n\r\n<p><img alt=\"iPhone 15 cần gì để làm lu mờ iPhone 14? - 7\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/iPhone-15-can-gi-de-lam-lu-mo-iPhone-14-1-1692324419-168-width965height543.png\" /></p>\r\n\r\n<p>iPhone 15 chỉ l&agrave; bản n&acirc;ng cấp nhẹ so với iPhone 14.</p>\r\n\r\n<p>Rất nhiều người h&agrave;o hứng với c&aacute;c mẫu iPhone 15 Pro v&igrave; Apple sẽ d&agrave;nh c&aacute;c thay đổi cao cấp nhất cho những chiếc điện thoại đắt tiền hơn của m&igrave;nh. D&ugrave; vậy, với những n&acirc;ng cấp tr&ecirc;n, iPhone 15 sẽ mang tới trải nghiệm tốt hơn đ&aacute;ng kể so với sản phẩm &ldquo;tiền nhiệm&rdquo;.</p>\r\n\r\n<p>Nguồn: https://nongthonviet.com.vn/iphone-15-can-gi-de-lam-lu-mo-iphone-14-1493689.ngn</p>\r\n\r\n<p><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></p>', NULL, NULL),
(4, 4, '<h2><strong>Việc chuyển từ iPhone cỡ nhỏ sang chiếc iPhone 15 Pro Max sẽ l&agrave; thay đổi lớn nhất của người d&ugrave;ng iPhone.</strong></h2>\r\n\r\n<p>Nh&igrave;n v&agrave;o lịch sử điện thoại th&ocirc;ng minh, dễ thấy thị trường đang dần tiếp nhận k&iacute;ch thước m&agrave;n h&igrave;nh ng&agrave;y một lớn hơn. iPhone 13 mini bị &ldquo;ch&ecirc;&rdquo; v&agrave; sự biến mất của iPhone 14 Mini &ndash; thay thế bằng iPhone 14 Plus ch&iacute;nh l&agrave; minh chứng r&otilde; nhất cho điều n&agrave;y.</p>\r\n\r\n<p>Theo c&aacute;c chuy&ecirc;n gia, sự thay đổi từ iPhone 13 Mini l&ecirc;n chiếc iPhone 15 Pro Max &ldquo;khổng lồ&rdquo;&nbsp;sẽ mang lại nhiều biến động đ&aacute;ng kinh ngạc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"“Cú nhảy” từ iPhone 13 Mini sang iPhone 15 Pro Max xa cỡ nào? - 1\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/Cu-nhay-tu-iPhone-13-Mini-sang-iPhone-15-Pro-Max-xa-co-nao-untitled-1692329245-486-width936height523.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Từ iPhone 13 Mini l&ecirc;n&nbsp;iPhone 15 Pro Max sẽ l&agrave; &quot;bước nhảy&quot; cực xa.</p>\r\n\r\n<p>Dự kiến, iPhone 15 Pro Max sẽ c&oacute; k&iacute;ch thước gần giống với Galaxy S23+, đặc biệt l&agrave; về chiều rộng. Do đ&oacute;, người d&ugrave;ng c&oacute; thể dễ d&agrave;ng sử dụng bằng một tay hơn. Th&ecirc;m nữa, c&aacute;c đường cong nhẹ nh&agrave;ng ở mặt trước v&agrave; mặt sau của khung m&aacute;y sẽ gi&uacute;p chiếc iPhone lớn nhất của Apple dễ sử dụng hơn so với iPhone 14 Pro Max, khung titan mới cũng sẽ gi&uacute;p m&aacute;y nhẹ hơn.</p>\r\n\r\n<p>Kh&ocirc;ng &iacute;t người đang phải cố gắng lựa chọn giữa một chiếc điện thoại cỡ nhỏ, &ldquo;b&igrave;nh thường&rdquo; v&agrave; một chiếc điện thoại lớn. Tuy nhi&ecirc;n, iPhone 15 Pro Max thực sự l&agrave; chiếc iPhone cỡ&nbsp;lớn đầu ti&ecirc;n đ&aacute;ng để chi tiền.</p>\r\n\r\n<p><strong>&ldquo;L&ecirc;n đời&rdquo; từ iPhone cỡ nhỏ l&ecirc;n iPhone 15 Pro Max</strong></p>\r\n\r\n<p>Điều đầu ti&ecirc;n khiến iPhone 15 Pro Max 2023 trở n&ecirc;n hấp dẫn với những người th&iacute;ch điện thoại nhỏ hơn l&agrave; chiếc smartphone n&agrave;y sẽ&nbsp;nhỏ, nhẹ v&agrave; dễ cầm hơn so với iPhone 14 Pro Max, iPhone 13 Pro Max v&agrave; iPhone 12 Pro Max.</p>\r\n\r\n<p>iPhone 15 Pro Max dự kiến c&oacute; c&aacute;c đường cong tinh tế ở mặt trước v&agrave; mặt sau, tạo ra sự kh&aacute;c biệt lớn hơn khi cầm tr&ecirc;n tay.</p>\r\n\r\n<p><img alt=\"“Cú nhảy” từ iPhone 13 Mini sang iPhone 15 Pro Max xa cỡ nào? - 2\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/Cu-nhay-tu-iPhone-13-Mini-sang-iPhone-15-Pro-Max-xa-co-nao-untitled1-1692329245-829-width1167height653.png\" /></p>\r\n\r\n<p>Viền m&agrave;n h&igrave;nh của&nbsp;iPhone 15 Pro Max sẽ mỏng hơn đ&aacute;ng kể so với&nbsp;iPhone 14&nbsp;Pro Max.</p>\r\n\r\n<p>Về k&iacute;ch thước thực tế, theo sơ đồ bị r&ograve; rỉ, iPhone 15 Pro Max sẽ ngắn v&agrave; hẹp hơn gần 1 milimet so với iPhone 14 Pro Max. N&oacute;i c&aacute;ch kh&aacute;c, 15 Pro Max sẽ giống như một chiếc điện thoại nhỏ hơn d&ugrave; c&oacute; m&agrave;n h&igrave;nh giống hệt như 14 Pro Max.</p>\r\n\r\n<p>So s&aacute;nh nhanh k&iacute;ch cỡ của 3 mẫu flagship:</p>\r\n\r\n<p>● iPhone 15 Pro Max: 159,86 &times; 76,73 &times; 8,25 mm</p>\r\n\r\n<p>● iPhone 14 Pro Max: 160,7 x 77,6 x 7,85 mm</p>\r\n\r\n<p>● Galaxy S23 Plus: 157,8 x 76,2 x 7,6 mm</p>\r\n\r\n<p>Về k&iacute;ch thước m&agrave;n h&igrave;nh, Apple sẽ giữ nguy&ecirc;n m&agrave;n h&igrave;nh 6,7 inch cho iPhone 15 Pro Max nhưng c&oacute; c&aacute;c viền mỏng hơn nhiều, tạo cảm gi&aacute;c nhỏ gọn hơn. Theo nguồn tin đ&aacute;ng tin cậy - Ice Universe, viền m&agrave;n h&igrave;nh 1,5mm của iPhone 15 Pro v&agrave; iPhone 15 Pro Max sẽ lập kỷ lục mới.</p>\r\n\r\n<p><strong>iPhone 15 Pro Max c&oacute; những g&igrave; đ&aacute;ng tiền?</strong></p>\r\n\r\n<p>Dễ thấy, trong năm nay, Apple sẽ kh&aacute; h&agrave;o ph&oacute;ng với c&aacute;c bản n&acirc;ng cấp.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; một số t&iacute;nh năng dự kiến&nbsp;của iPhone 15 Pro Max, sẽ g&acirc;y ấn tượng với người d&ugrave;ng nếu &ldquo;l&ecirc;n đời&rdquo; từ iPhone 13 Mini:</p>\r\n\r\n<p>● Ghi ch&uacute; dễ d&agrave;ng hơn tr&ecirc;n m&agrave;n h&igrave;nh 6,7 inch của iPhone 15 Pro Max; tốc độ l&agrave;m mới m&agrave;n h&igrave;nh cao hơn - 120Hz</p>\r\n\r\n<p>● Hệ thống loa mạnh mẽ hơn</p>\r\n\r\n<p>● Thời lượng pin l&acirc;u hơn (l&acirc;u hơn gấp 2-3 lần so với iPhone 13 Mini)</p>\r\n\r\n<p>● Camera tốt hơn với ống k&iacute;nh zoom tiềm vọng mới v&agrave; camera ch&iacute;nh 48MP chụp ảnh si&ecirc;u n&eacute;t</p>\r\n\r\n<p>● N&uacute;t H&agrave;nh động, thay thế cho C&ocirc;ng tắc tắt tiếng, cung cấp một số chức năng bổ sung</p>\r\n\r\n<p>● iPhone 15 Pro v&agrave; iPhone 15 Pro Max sẽ c&oacute; tuỳ chọn bộ nhớ 256GB ti&ecirc;u chuẩn; iPhone 13 Mini chỉ c&oacute; bộ nhớ trong ti&ecirc;u chuẩn 128GB</p>\r\n\r\n<p>● T&iacute;ch hợp cổng USB-C phổ biến</p>\r\n\r\n<p><strong>V&igrave; iPhone 15 Pro Max xứng đ&aacute;ng</strong></p>\r\n\r\n<p>Năm 2023, Apple sẽ cung cấp cho iPhone 15 Pro Max cao cấp nhiều t&iacute;nh năng hơn so với iPhone 15 Pro nhỏ hơn. iPhone 15 Pro Max hiện l&agrave; iPhone duy nhất sẽ c&oacute; camera tele với ống k&iacute;nh zoom tiềm vọng mới (v&igrave; Apple kh&ocirc;ng thể lắp ch&uacute;ng&nbsp;v&agrave;o mẫu iPhone Pro nhỏ hơn).</p>\r\n\r\n<p><img alt=\"“Cú nhảy” từ iPhone 13 Mini sang iPhone 15 Pro Max xa cỡ nào? - 3\" src=\"https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/Cu-nhay-tu-iPhone-13-Mini-sang-iPhone-15-Pro-Max-xa-co-nao-1-1692329245-349-width1167height629.png\" /></p>\r\n\r\n<p>iPhone 15 Pro Max lớn hơn đ&aacute;ng kể so với iPhone 13 Mini.</p>\r\n\r\n<p>Nếu bỏ qua sự tiện lợi tuyệt vời khi c&oacute; một chiếc điện thoại nhỏ để đổi lấy một chiếc điện thoại lớn hơn, người d&ugrave;ng sẽ c&oacute; trong tay chiếc iPhone nhiều lợi &iacute;ch hơn: m&agrave;n h&igrave;nh hơn, pin lớn hơn, camera tốt hơn, loa to hơn, v.v.</p>\r\n\r\n<p>Trong khi đ&oacute;, ngo&agrave;i lợi thế về&nbsp;k&iacute;ch cỡ dễ d&agrave;ng bỏ t&uacute;i, sử dụng bằng một tay v&agrave; gi&uacute;p người d&ugrave;ng hạn chế sử dụng điện thoại hơn,&nbsp;iPhone 13 Mini &quot;thua&quot; iPhone 15 Pro Max về mọi mặt.</p>', NULL, NULL),
(5, 10, '<h2>(D&acirc;n tr&iacute;) - Loạt thiết bị mới được Dell giới thiệu tại Việt Nam bao gồm XPS 13 Plus, XPS 17, Inspiron 14, Inspiron 16 v&agrave; Alienware m15 R7.</h2>\r\n\r\n<p>Gần đ&acirc;y, Dell Technologies đ&atilde; giới thiệu nhiều d&ograve;ng m&aacute;y t&iacute;nh x&aacute;ch tay thế hệ mới d&agrave;nh cho người d&ugrave;ng th&ocirc;ng thường v&agrave; game thủ.</p>\r\n\r\n<p>Được thay đổi to&agrave;n diện để trở th&agrave;nh mẫu laptop 13 inch chủ lực của Dell, XPS 13 Plus sở hữu bộ xử l&yacute; Intel Core thế hệ 12, thiết kế tản nhiệt được cải tiến v&agrave; một th&acirc;n h&igrave;nh mỏng nhẹ.</p>\r\n\r\n<p><img alt=\"Dell giới thiệu loạt laptop mới tại Việt Nam - 1\" src=\"https://cdnphoto.dantri.com.vn/Q0vfvAQXZS3XR3Ao59tT6w0zK6g=/thumb_w/680/2022/09/19/laptop-dell-crop-1663596370963.jpeg\" /></p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>Loạt thiết bị mới của Dell tập trung chủ yếu v&agrave;o việc n&acirc;ng cấp cấu h&igrave;nh v&agrave; trải nghiệm sử dụng (Ảnh: Dell).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Phần vỏ của XPS 13 Plus sử dụng nh&ocirc;m carbon thấp. M&aacute;y cũng được trang bị h&agrave;ng ph&iacute;m chức năng cảm ứng điện dung, touchpad bằng k&iacute;nh c&ugrave;ng t&iacute;nh năng phản hồi x&uacute;c gi&aacute;c v&agrave; b&agrave;n ph&iacute;m kh&ocirc;ng khoảng c&aacute;ch.</p>\r\n\r\n<p>Trong khi đ&oacute;, phi&ecirc;n bản XPS 17 c&oacute; m&agrave;n h&igrave;nh l&ecirc;n tới 17 inch, nhưng vẫn đ&aacute;p ứng được yếu tố mỏng nhẹ so với những đối thủ c&oacute; c&ugrave;ng k&iacute;ch thước. M&aacute;y sử dụng bộ xử l&yacute; Intel Core i9k thế hệ 12, t&ugrave;y chọn card đồ họa GeForce RTX 3060, v&agrave; bộ nhớ DDR5.</p>\r\n\r\n<p>Đ&aacute;ng ch&uacute; &yacute;, Dell cũng mang đến chiếc laptop Alienware m15 R7 d&agrave;nh ri&ecirc;ng cho nhu cầu chơi game, giải tr&iacute;. Thiết bị sử dụng bộ xử l&yacute; Intel Core d&ograve;ng H thế hệ 12, hỗ trợ những sản phẩm card đồ họa GeForce RTX 30-Series.</p>\r\n\r\n<p>C&ocirc;ng nghệ tản nhiệt mới trang bị nhiều c&aacute;nh quạt mỏng v&agrave; rộng hơn so với hai sản phẩm tiền nhiệm m15 R6 hay R6, nhờ đ&oacute; tăng luồng gi&oacute; tản nhiệt l&ecirc;n 1,3 lần.</p>\r\n\r\n<p>Ngo&agrave;i ra, h&atilde;ng cũng giới thiệu hai mẫu m&aacute;y t&iacute;nh x&aacute;ch tay thuộc ph&acirc;n kh&uacute;c phổ th&ocirc;ng, gồm Inspiron 16, Inspiron 14 2-trong-1.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>', '2023-08-21 06:32:18', '2023-08-21 06:32:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `thoidiemmua` datetime NOT NULL,
  `tennguoinhan` varchar(100) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `diachigiaohang` varchar(100) NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tinh_tp` varchar(255) NOT NULL,
  `nghi_chu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `id_user`, `thoidiemmua`, `tennguoinhan`, `dienthoai`, `diachigiaohang`, `trangthai`, `created_at`, `updated_at`, `tinh_tp`, `nghi_chu`) VALUES
(47, 11, '2023-08-19 14:26:12', 'Phúc Nuyễn Hoàng', '0777575100', '129/60/7/q12/phan văn hớn tân thế nhất', 0, '2023-08-19 07:26:12', '2023-08-19 07:26:12', 'long an', ''),
(48, 11, '2023-08-19 14:26:28', 'Phúc Nuyễn Hoàng', '0777575100', '129/60/7/q12/phan văn hớn tân thế nhất', 0, '2023-08-19 07:26:28', '2023-08-19 07:26:28', 'Hồ Chí Minh', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id_ct` int(10) UNSIGNED NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `gia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id_ct`, `id_dh`, `id_sp`, `ten_sp`, `soluong`, `gia`, `created_at`, `updated_at`, `ngay`) VALUES
(29, 46, 3029, 'MSI Zenbook 1360P', 5, 20319228, '2023-08-10 05:22:00', '2023-08-10 05:22:00', NULL),
(30, 47, 3147, 'Asus E116 N4020', 3, 18549231, '2023-08-19 07:26:12', '2023-08-19 07:26:12', NULL),
(31, 48, 3147, 'Asus E116 N4020', 3, 18549231, '2023-08-19 07:26:28', '2023-08-19 07:26:28', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id_loai` int(10) UNSIGNED NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL DEFAULT 0,
  `anhien` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id_loai`, `ten_loai`, `thutu`, `anhien`, `created_at`, `updated_at`) VALUES
(1, 'Asus', 0, 1, NULL, NULL),
(2, 'Acer', 1, 1, NULL, NULL),
(3, 'Lenovo', 2, 1, NULL, NULL),
(4, 'MSI', 3, 1, NULL, NULL),
(5, 'HP', 4, 1, NULL, NULL),
(6, 'Dell', 5, 1, NULL, NULL),
(7, 'Apple', 6, 1, NULL, NULL),
(8, 'Surface', 7, 1, NULL, NULL),
(9, 'Masstel', 8, 1, NULL, NULL),
(10, 'LG', 9, 1, NULL, NULL),
(11, 'CHUWI', 10, 1, NULL, NULL),
(12, 'itel', 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `thumb_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `views_count` int(11) DEFAULT 0,
  `tag` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tag`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `heading`, `updated_at`, `created_at`, `thumb_url`, `slug`, `views_count`, `tag`) VALUES
(3, 'iPhone 15 cần gì để làm lu mờ iPhone 14?', '2023-08-21 03:07:04', '2023-08-21 03:07:04', 'https://cdn.24h.com.vn/upload/3-2023/images/2023-08-18/iPhone-15-can-gi-de-lam-lu-mo-iPhone-14-3-1692324420-101-width963height543.jpg', 'iPhone-15-can-gi-de-lam-lu-mp-iPhone-14', 0, ''),
(4, '“Cú nhảy” từ iPhone 13 Mini sang iPhone 15 Pro Max xa cỡ nào?', '2023-08-21 03:36:36', '2023-08-21 03:36:36', 'https://iphonesoft.fr/images/2022/11/iphone-15-pro-ultra.jpg', 'cu-nhay-tu-iphone-13-mini-sang-iphone-15-pro-max-xa-co-nao', 0, ''),
(10, 'Dell giới thiệu loạt laptop mới tại Việt Nam', '2023-08-21 06:32:18', '2023-08-21 06:32:18', 'https://cdnphoto.dantri.com.vn/Q0vfvAQXZS3XR3Ao59tT6w0zK6g=/thumb_w/680/2022/09/19/laptop-dell-crop-1663596370963.jpeg', 'dell-gioi-thieu-loat-laptop-moi-tai-viet-nam', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) UNSIGNED NOT NULL,
  `id_loai` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT 'http://127.0.0.1:8000/assets-web/images/products/defau.jpeg',
  `ngay` date NOT NULL,
  `soluotxem` int(11) NOT NULL DEFAULT 0,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `anhien` tinyint(1) NOT NULL DEFAULT 0,
  `mota` text DEFAULT NULL,
  `motangan` varchar(2000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_loai`, `ten_sp`, `gia`, `gia_km`, `hinh`, `ngay`, `soluotxem`, `hot`, `anhien`, `mota`, `motangan`, `created_at`, `updated_at`) VALUES
(5078, 11, 'Laptop Fujitsu Lifebook E5410 | i3-10110U | 8GB | 256GB | 14 inch HD | No OS (Black)', 1231233, 0, 'http://127.0.0.1:8000/images\\1693247676.webp', '2023-08-28', 0, 0, 0, '<h2><strong>GIỚI THIỆU LAPTOP FUJITSU LIFEBOOK E4510</strong></h2>\r\n\r\n<p>M&aacute;y t&iacute;nh x&aacute;ch tay FUJITSU LIFEBOOK E5410 được thiết kế d&agrave;nh ri&ecirc;ng cho nh&acirc;n vi&ecirc;n văn ph&ograve;ng cần m&aacute;y t&iacute;nh x&aacute;ch tay mạnh mẽ, đầy đủ tiện nghi. Nhờ bộ xử l&yacute; Intel&reg; Core&trade; thế hệ thứ 10, bạn c&oacute; thể l&agrave;m việc hiệu quả mọi l&uacute;c mọi nơi. C&aacute;c t&iacute;nh năng bảo mật n&acirc;ng cao như PalmSecure&trade; đang bảo vệ dữ liệu kinh doanh của bạn chống lại truy cập tr&aacute;i ph&eacute;p.&nbsp;Chế độ chờ hiện đại cung cấp cho bạn chế độ sẵn s&agrave;ng ngay lập tức v&agrave; m&aacute;y t&iacute;nh x&aacute;ch tay lu&ocirc;n được kết nối.</p>\r\n\r\n<h3><strong>Thiết kế hiện đại v&agrave; Mạnh mẽ</strong></h3>\r\n\r\n<ul>\r\n	<li>T&iacute;nh di động đ&aacute;ng tin cậy, dễ sử dụng v&agrave; kiểu d&aacute;ng hiện đại ph&ugrave; hợp với nhu cầu c&ocirc;ng việc h&agrave;ng ng&agrave;y</li>\r\n	<li>M&aacute;y t&iacute;nh x&aacute;ch tay mỏng 23,9 mm bắt đầu từ 1,79 kg với thiết kế chắc chắn</li>\r\n	<li>Tận hưởng trải nghiệm xem c&ocirc;ng th&aacute;i học với m&agrave;n h&igrave;nh HD hoặc FHD chống l&oacute;a 14,0 inch</li>\r\n	<li>Độ bền đạt ti&ecirc;u chuẩn qu&acirc;n sự MIL-STD-810H đ&atilde; được thử nghiệm</li>\r\n</ul>\r\n\r\n<h3><strong>Hiệu suất đ&aacute;ng tin cậy v&agrave; an to&agrave;n</strong></h3>\r\n\r\n<ul>\r\n	<li>Lu&ocirc;n bảo vệ dữ liệu doanh nghiệp của bạn khỏi bị truy cập tr&aacute;i ph&eacute;p</li>\r\n	<li>T&iacute;ch hợp PalmSecure&trade; hoặc cảm biến v&acirc;n tay</li>\r\n	<li>Camera hồng ngoại: Cho ph&eacute;p nhận dạng khu&ocirc;n mặt với Windows Hello</li>\r\n	<li>M&agrave;n trập camera ri&ecirc;ng tư t&iacute;ch hợp: Bảo vệ quyền ri&ecirc;ng tư của bạn</li>\r\n	<li>Đầu đọc SmartCard v&agrave; TPM 2.0</li>\r\n</ul>\r\n\r\n<h3><strong>Kết nối tốt nhất&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>H&atilde;y linh hoạt v&agrave; lu&ocirc;n l&agrave;m việc hiệu quả mọi l&uacute;c, mọi nơi</li>\r\n	<li>Đầy đủ c&aacute;c cổng với đầu nối HDMI, VGA v&agrave; LAN k&iacute;ch thước đầy đủ v&agrave; USB Type-C</li>\r\n	<li>Dựa tr&ecirc;n bộ xử l&yacute; QuadCore Intel mới nhất, cho ph&eacute;p dữ liệu được xử l&yacute; nhanh hơn</li>\r\n</ul>\r\n\r\n<h3><strong>Khả năng phục vụ thuận tiện v&agrave; khả năng n&acirc;ng cấp</strong></h3>\r\n\r\n<ul>\r\n	<li>Dễ d&agrave;ng truy cập v&agrave;o c&aacute;c th&agrave;nh phần ch&iacute;nh gi&uacute;p giảm thời gian v&agrave; chi ph&iacute; n&acirc;ng cấp</li>\r\n	<li>C&oacute; thể thay đổi pin, bộ nhớ, bộ nhớ trong v&agrave; c&aacute;c th&agrave;nh phần kết nối (LTE &amp; WLAN) một c&aacute;ch dễ d&agrave;ng</li>\r\n</ul>\r\n\r\n<h3><strong>Kh&aacute;i niệm cổng d&ugrave;ng chung</strong></h3>\r\n\r\n<ul>\r\n	<li>Bảo vệ khoản đầu tư của bạn v&agrave; sẵn s&agrave;ng cho kh&aacute;i niệm b&agrave;n l&agrave;m việc chung</li>\r\n	<li>Bộ sao ch&eacute;p cổng gia đ&igrave;nh d&ugrave;ng chung với d&ograve;ng LIFEBOOK U7 đảm bảo t&iacute;nh linh hoạt tối ưu v&agrave;&nbsp;chia sẻ nơi l&agrave;m việc</li>\r\n</ul>\r\n\r\n<p><strong>Xem th&ecirc;m:&nbsp;<a href=\"https://tinhocngoisao.com/collections/laptop\">laptop</a>,&nbsp;<a href=\"https://tinhocngoisao.com/collections/laptop-intel-core-i5-1\">laptop i5</a>,&nbsp;<a href=\"https://tinhocngoisao.com/collections/laptop-30-trieu-den-40-trieu\">laptop 40 triệu</a>,&nbsp;<a href=\"https://tinhocngoisao.com/products/laptop-avita-liber-v14-ns14a9vnv561-crab-r5-4500u-amd-graphics-8gb-512gb-fp-win-10-kbl-14-0-fhd-ips-charming-red\">Laptop Avita Liber</a>,&nbsp;<a href=\"https://tinhocngoisao.com/collections/laptop-gaming\">laptop game</a>,&nbsp;<a href=\"https://tinhocngoisao.com/collections/laptop-14-inch\">laptop 14 inch</a>,&nbsp;<a href=\"https://tinhocngoisao.com/collections/laptop-duoi-10-trieu\">laptop 10 triệu</a>,&nbsp;<a href=\"https://tinhocngoisao.com/blogs/kinh-nghiem-hay/top-4-laptop-duoi-10-trieu-ho-tro-tot-cho-viec-hoc-online-tai-nha\">laptop học online</a></strong></p>\r\n', NULL, '2023-08-28 11:10:04', '2023-08-29 04:39:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamchitiet`
--

CREATE TABLE `sanphamchitiet` (
  `id_ct` int(10) UNSIGNED NOT NULL,
  `id_sp` int(11) NOT NULL,
  `RAM` varchar(20) DEFAULT NULL,
  `CPU` varchar(50) DEFAULT NULL,
  `Dia` varchar(20) DEFAULT NULL,
  `Mausac` varchar(20) DEFAULT NULL,
  `Cannang` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `anh_mo_ta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '["http:\\/\\/127.0.0.1:8000\\/images\\\\1692941272.png","http:\\/\\/127.0.0.1:8000\\/images\\\\1692941273.png"]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamchitiet`
--

INSERT INTO `sanphamchitiet` (`id_ct`, `id_sp`, `RAM`, `CPU`, `Dia`, `Mausac`, `Cannang`, `created_at`, `updated_at`, `anh_mo_ta`) VALUES
(5045, 5078, NULL, NULL, NULL, NULL, NULL, '2023-08-28 11:10:04', '2023-08-29 04:46:41', '[\"http:\\/\\/127.0.0.1:8000\\/images\\\\1693246548.webp\",\"http:\\/\\/127.0.0.1:8000\\/images\\\\1693247676.webp\",\"http:\\/\\/127.0.0.1:8000\\/images\\\\1693295731.webp\"]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT '',
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `isAdmin`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'nguyễn hoàng phúc', 'nguyenhoangphuc201122@gmail.com', NULL, '$2y$10$snIArUIiBs5EfKb.DivxCup.roizybJ47xePs9h.aDJsr7RNlfr1S', 'https://yt3.ggpht.com/a/AATXAJyAjXWhg85XlBUBufDpYQ7zB7GIiIlg9js4_wCoFA=s900-c-k-c0xffffffff-no-rj-mo', 0, NULL, '2023-08-06 02:24:44', '2023-08-21 22:50:37', '2023-08-22 05:50:37'),
(3, 'nguyen hoang phuc', 'hoangphuc01975@gmail.com', NULL, '$2y$10$fCC0I5tT6hTz0r7StjiWcezO2AtCZ6/WYkYRYaq7wCyG004BCnkO2', 'https://yt3.ggpht.com/a/AATXAJyAjXWhg85XlBUBufDpYQ7zB7GIiIlg9js4_wCoFA=s900-c-k-c0xffffffff-no-rj-mo', 1, NULL, '2023-08-06 03:23:37', '2023-08-06 03:23:37', NULL),
(4, 'fasdfasdfa', 'nguyenhoangphuc111@gmail.com', NULL, '$2y$10$gAuyrGG9bPdbDVqO8LC0dOdUq8Qq.LD3Blq.YzunEcgBxfYjtc/VW', '', 0, NULL, '2023-08-18 02:27:32', '2023-08-18 02:34:02', '2023-08-18 09:34:02'),
(5, 'asdfasdf', 'nguyenhoangphuc212322@gmail.com', NULL, '$2y$10$If1K3CiI6mkZ0ApZDP8cueOp9rHH0.wATc85jAZ5MKIsXghKDp5Lq', '', 0, NULL, '2023-08-18 02:33:14', '2023-08-18 02:34:05', '2023-08-18 09:34:05'),
(6, 'admin_01', 'admin01@gmail.com', NULL, '$2y$10$j5eqXDW2oV1GhmiDySccV.q.MYgJy2GlqEMMB4r.zwYCweIG.W5JK', 'http://127.0.0.1:8000/images\\1693247676.webp', 1, NULL, '2023-08-19 08:32:01', '2023-08-29 04:58:30', NULL),
(7, 'as', 'nguyenhoangphuc12@gmail.com', NULL, '$2y$10$oLmRQZ9l2JX.svyN9gV5HujsrFjRelz2xeXLj53tW90eSk58JqRKK', '', 0, NULL, '2023-08-29 05:00:06', '2023-08-29 05:00:33', '2023-08-29 12:00:33'),
(8, 'nguyen hoang phuc', 'nguyenhoangphuc2011122@gmail.com', NULL, '$2y$10$yMgym8ft0FeEJRtAk4opr.yaPWkLCti9plLEfcT43DYL20HZQx4fy', 'http://127.0.0.1:8000/images\\1693295731.webp', 0, NULL, '2023-08-29 05:00:23', '2023-08-29 05:00:23', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cg`);

--
-- Chỉ mục cho bảng `detail_post`
--
ALTER TABLE `detail_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id_loai`);
ALTER TABLE `loai` ADD FULLTEXT KEY `ten_loai` (`ten_loai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);
ALTER TABLE `sanpham` ADD FULLTEXT KEY `ten_sp` (`ten_sp`);
ALTER TABLE `sanpham` ADD FULLTEXT KEY `ten_sp_2` (`ten_sp`);

--
-- Chỉ mục cho bảng `sanphamchitiet`
--
ALTER TABLE `sanphamchitiet`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detail_post`
--
ALTER TABLE `detail_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id_ct` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id_loai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5079;

--
-- AUTO_INCREMENT cho bảng `sanphamchitiet`
--
ALTER TABLE `sanphamchitiet`
  MODIFY `id_ct` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5046;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detail_post`
--
ALTER TABLE `detail_post`
  ADD CONSTRAINT `detail_post_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
