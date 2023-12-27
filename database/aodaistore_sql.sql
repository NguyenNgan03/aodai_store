--
-- Database: `aodaistore_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE 'user' (
  'UserID' int(11) NOT NULL,
  'UserName' varchar(150) DEFAULT NULL,
  'Email' varchar(255) DEFAULT NULL,
  'Password' varchar(150) DEFAULT NULL,
  'RoleID' int(11) DEFAULT NULL,
  'Yob' varchar(20) DEFAULT NULL,
  'Gender' boolean DEFAULT NULL,
  'Address' varchar(255) DEFAULT NULL,
  'Phone' varchar(20) DEFAULT NULL,
  'RegisterDay' date DEFAULT NULL,
  'Image' varchar(255) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE 'banner' (
  'BannerID' int(11) NOT NULL,
  'Name' varchar(150) DEFAULT NULL,
  'Image' varchar(255) DEFAULT NULL,
  'IsActive' tinyint(1) DEFAULT NULL,
  'Visible' int(11) DEFAULT NULL,
  'Description' varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(1, 'banner trái', 'banner-1-banner-trai.jpg', 1, 1, 'banner bên trái'),
(2, 'banner phải', 'banner-2-banner-phai.jpg', 1, 2, 'banner bên phải'),
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới'),
(5, '1 trung tam', 'banner-5-1-trung-tam1 trung tam.jpg', 0, 4, 'sdadadasd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE 'categories' (
  'CategoriesID' int(11) NOT NULL,
  'ProductGroupID' int(11) NOT NULL,
  'CategoriesName' varchar(150) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO 'categories' (`Id`, `Name`, `SupplyId`, `Position`, `alias`) VALUES
(1, 'QUẦN', 1, 1, 'quan'),
(2, 'ÁO', 1, 2, 'ao'),
(3, 'GIẦY DÉP', 2, 4, 'giay-dep');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE 'comment' (
  'CommentID' int(11) NOT NULL,
  'ProductID' int(11) DEFAULT NULL,
  'Content' text,
  'CommentDay' datetime DEFAULT NULL,
  'UserName' varchar(150) DEFAULT NULL,
  'Email' varchar(150) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id`, `ProductId`, `Content`, `CreateDate`, `Author`, `ParentId`, `Email`, `Phone`) VALUES
(1, 1, 'comment 1', '2016-02-26 00:00:00', '1 as', 0, '1', '0912123456'),
(2, 1, 'MIỄN PHÍ GIAO HÀNG TRONG PHẠM VI 10KM', '2016-02-26 00:00:00', '2', 0, '2', ''),
(3, 1, '2', '2016-02-26 00:00:00', '2', 0, '2', ''),
(4, 3, 'noioj dung comment 4dasdad', '2016-02-26 00:00:00', '4', 2, '4', '111111111111'),
(5, 1, 'noi dung comment 5s dasd', '2090-02-27 00:00:00', '41', 0, '41 1', '1'),
(6, 13, 's                        ', '2016-03-01 19:10:00', 's', 0, 's', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE 'contactinfo' (
  'ContactinfoID' int(11) NOT NULL,
  'UserName' varchar(150) NOT NULL,
  'Address' varchar(100) NOT NULL,
  'Country' varchar(100) NOT NULL,
  'Phone' varchar(20) NOT NULL,
  'Email' varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`Id`, `Address`, `Country`, `Phone`, `Email`) VALUES
(1, 'Thanh xuân', 'Hà Nội', '0945 802 194', '0945 802 194', 'dongvuhtvn@gmail.com', 'Facebook.com', 'dongvu2vn', 'dongvu2vn');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE 'reviews' (
  'ReviewsID' int(11) NOT NULL,
  'UserName' varchar(150) NOT NULL,
  'Subject' varchar(300) NOT NULL,
  'ReviewsDay' datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO 'reviews' (`Id`, `Name`, `Email`, `Mobile`, `Subject`, `Createtime`) VALUES
(1, 'aaaaaaaa', 'a', '1', ' a', '2016-03-04 00:00:00'),
(2, 'vu dinh dong', 'dongvu2vn@gmail.com', '0987 192 209', 'Nếu tham số $length được sử dụng và là một số dương, chuỗi trả về sẽ bao gồm $length ký tự, tính từ vị trí thứ $start (tùy thuộc vào độ dài của chuỗi).\\r\\nNếu tham số $length được sử dụng và là một số âm, chuỗi trả về được tính từ vị trí $start đến vị trí $length (trong đó vị trí $length được tính t', '2016-03-10 00:00:00'),
(4, 'dá', 'sadad', 'dsada', ' sadadad', '2016-03-03 13:20:59'),
(5, 'dá', 'sadad', 'dsada', ' sadadad', '2016-03-03 13:26:00'),
(6, 'h', 'j', 'k', 'm ', '2016-03-04 22:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `imageslide`
--

CREATE TABLE 'imageslide' (
  'ImageslideID' int(11) NOT NULL,
  'Image' varchar(255) DEFAULT NULL,
  'SlideID' int(1) DEFAULT NULL,
  'IsActive' tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imageslide`
--

INSERT INTO `imageslide` (`Id`, `Image`, `SlideId`, `IsActive`) VALUES
(1, '3-1.jpg', 3, 0);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `menu`
-- --

-- CREATE TABLE 'menu' (
--   'MenuID' int(11) NOT NULL,
--   'Name' varchar(150) DEFAULT NULL,
--   'ParentId' int(11) DEFAULT NULL,
--   'URL' varchar(250) DEFAULT NULL,
--   'Order' int(11) DEFAULT NULL,
--   'IsVisible' tinyint(1) DEFAULT NULL,
--   'Desciption' varchar(250) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --
-- -- Dumping data for table `menu`
-- --

-- INSERT INTO `menu` (`MenuId`, `Name`, `ParentId`, `URL`, `Order`, `IsVisible`, `Desciption`) VALUES
-- (1, 'Trang chủ', NULL, '#', 1, 1, NULL),
-- (2, 'Sản phẩm', NULL, 'san-pham', 2, 1, NULL),
-- (3, 'Thông tin', 2, 'about-us.php', 2, 1, NULL),
-- (4, 'Liên hệ', 2, '~/contact-us.php', 2, 1, NULL),
-- (5, 'Profile', 3, '~/profile.php', 3, 1, NULL),

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE 'orders' (
  'OrdersID' int(11) NOT NULL,
  'UserID' int(11) NOT NULL,
  'PaymentMethodID' int(11) NOT NULL,
  'OrdersDate' datetime NOT NULL,
  'ShippingAddress' varchar(200) NOT NULL,
  'ShippingDate' datetime NOT NULL,
  'Notes' varchar(20) NOT NULL,
  'PaymentStatus' varchar(20) NOT NULL,
  'ShippingStatus' varchar(20) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Customer`, `Address`, `Phone`, `Createtime`, `Status`, `Email`, `Cart_total`) VALUES
(1, '3', '3243423424324', '0918190234', '2016-03-02 15:45:50', 0, '', 0),
(2, 'a', 'a', '0912123456', '2016-03-02 15:49:55', 0, '', 0),
(3, 'aaa', 'd', '0918190234', '2016-03-02 15:54:52', 0, '', 0),
(4, '1', 'a', '0912123456', '2016-03-02 15:59:48', 0, '', 0),
(5, 'a', 'd', '0912123456', '2016-03-02 20:07:18', 1, '', 0),
(6, 'aaa', 'a', '0912123456', '2016-03-04 12:13:39', 0, '', 0),
(7, 'a', 'b', '0912123456', '2016-03-04 12:17:36', 0, '', 0),
(8, 'a', 'd', '0912123456', '2016-03-04 12:18:28', 0, '', 111091),
(9, 'a', 'a', '0912123456', '2016-03-05 22:09:36', 0, '', 12126),
(10, 'moi rewrite', 'd', '0912123456', '2016-03-10 00:56:00', 0, '', 1000000000),
(11, 'aaa', 'a', '0912123456', '2016-03-10 02:42:47', 0, '', 425000),
(12, 'aaa', 'a', '0912123456', '2016-03-10 10:26:45', 0, '', 1000000000),
(13, '1', 'a', '0912123456', '2016-03-10 10:29:36', 0, '', 1000000000),
(14, 'd', 'd', '0912123456', '2016-03-10 14:32:39', 0, '', 4000000000),
(15, 'a', 'a', '0912123456', '2016-03-10 14:51:48', 0, '', 20000),
(16, 'a', 'a', '0912123456', '2016-03-10 21:37:37', 0, '', 1000000000),
(17, 'a', 'a', '0912123456', '2016-03-10 21:54:39', 0, '', 10000),
(18, 's', 'x', '0918190234', '2016-03-10 21:55:34', 0, '', 60),
(19, '1', 'd', '0918190234', '2016-03-10 21:59:17', 0, '', 10000),
(20, '1', 'a', '0918190234', '2016-03-10 22:00:54', 0, '', 10000),
(21, '1', 'a', '0912123456', '2016-03-10 22:01:19', 0, '', 10000),
(22, '1', 'a', '0912123456', '2016-03-10 22:02:31', 0, '', 100000),
(23, '1', 'd', '0912123456', '2016-03-10 22:07:29', 0, '', 1000000000),
(24, 'a', 'd', '0918190234', '2016-03-10 23:13:06', 0, '', 135000),
(25, 'moi nhat', 'moi nhat', '0912123456', '2016-03-10 23:18:09', 1, '', 425000),
(26, 'a', 'a', '0912123456', '2016-03-10 23:26:21', 1, '', 560000),
(27, 'a', 'd', '0918190234', '2016-03-17 16:43:20', 0, '', 112800);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE 'order_detail' (
  'OrdersDetailID' int(11) NOT NULL,
  'OrderID' int(11) NOT NULL,
  'ProductID' int(11) NOT NULL,
  'Quantity' int(11) NOT NULL,
  'Price' float NOT NULL,
  'Float' float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Id`, `OrderId`, `ProductId`, `Quantity`, `Price`, `Description`) VALUES
(1, 1, 16, 1, 0, ''),
(2, 2, 1, 1, 0, ''),
(3, 3, 16, 1, 0, ''),
(4, 3, 2, 1, 0, ''),
(5, 3, 1, 1, 0, ''),
(6, 4, 1, 1, 1200000, ''),
(7, 5, 6, 1, 100000, ''),
(8, 6, 14, 3, 150000, ''),
(9, 6, 15, 1, 500000, ''),
(10, 7, 16, 1, 111000, ''),
(11, 7, 15, 1, 500000, ''),
(12, 8, 16, 1, 111000, ''),
(13, 8, 13, 1, 101, ''),
(14, 9, 34, 1, 12900, ''),
(15, 10, 20, 1, 1000000000, ''),
(16, 11, 15, 1, 500000, ''),
(17, 12, 20, 1, 1000000000, ''),
(18, 13, 20, 1, 1000000000, ''),
(19, 14, 20, 4, 1000000000, ''),
(20, 15, 21, 2, 10000, ''),
(21, 16, 20, 1, 1000000000, ''),
(22, 16, 6, 1, 100, ''),
(23, 17, 21, 1, 10000, ''),
(24, 18, 29, 2, 30, ''),
(25, 19, 21, 1, 10000, ''),
(26, 20, 21, 1, 10000, ''),
(27, 21, 21, 1, 10000, ''),
(28, 22, 22, 1, 100000, ''),
(29, 23, 20, 1, 1000000000, ''),
(30, 24, 14, 1, 150000, ''),
(31, 25, 15, 1, 500000, ''),
(32, 26, 15, 1, 500000, ''),
(33, 26, 14, 1, 150000, ''),
(34, 27, 34, 1, 120000, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE 'product' (
  'ProductID' int(11) NOT NULL,
  'CategoriesID' int(11) NOT NULL,
  'DiscountID' int(11) NOT NULL,
  'ProductName' varchar(550) DEFAULT NULL,
  'TypeID' int(11) NOT NULL,
  'CategoryID' int(11) DEFAULT NULL,
  'ProductGroupID' int(11) DEFAULT NULL,
  'Description' longtext,
  'Price' int(11) NOT NULL,
  'Color' varchar(250) DEFAULT NULL,
  'Material' varchar(250) DEFAULT NULL,
  'Size' varchar(20) NOT NULL,
  'Detail' longtext,
  'CreateBy' int(11) DEFAULT NULL,
  'Createdate' date DEFAULT NULL,
  'EditBy' int(11) DEFAULT NULL,
  'EditDate' date DEFAULT NULL,
  'TotalView' int(11) DEFAULT NULL,
  'Image1' varchar(250) DEFAULT NULL,
  'Image2' varchar(250) DEFAULT NULL,
  'Image3' varchar(260) NOT NULL,
  'Image4' varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `TypeId`, `CategoryId`, `SubCategoryId`, `SupplyId`, `Description`, `Price`, `Color`, `Material`, `Size`, `Detail`, `CreateBy`, `Createdate`, `EditBy`, `EditDate`, `TotalView`, `isSaleOff`, `Percent_off`, `Image1`, `Image2`, `Image3`, `Image4`, `alias`) VALUES
(1, 'Áo khoác mùa hè hà nội', 1, 2, 2, 1, '<img alt="á" src="/ShopOnline/admin/themes/upload/images/799_28_1.jpg" style="height:800px; width:600px" /><img alt="" src="/ShopOnline/admin/themes/upload/images/847_thay_th____2.jpg" style="height:800px; width:600px" /><img alt="" src="/ShopOnline/admin/themes/upload/images/407_0_4_1.jpg" style="height:267px; margin-left:100px; margin-right:100px; width:200px" />vu dinh dong<br />\r\n&nbsp;', 100, 'Vàng', 'catton', '', '1m6 55klg mac cỡ nào đc bạn ơi', 0, '2016-01-29', 0, '2016-01-23', 89, 0, 0, '1-ao-khoac.jpg', '1-ao-khoac2.jpg', '', '', 'ao-khoac-mua-he-ha-noi'),
(2, 'Áo khoác choàng lót lông AK-36212', 1, 1, 3, 1, '&Aacute;o kho&aacute;c cho&agrave;ng l&oacute;t l&ocirc;ng AK-36212 &Aacute;o kho&aacute;c cho&agrave;ng l&oacute;t l&ocirc;ng AK-36212', 1600000, 'Vàng', '620.000đGIÁ NY: 1.160.000 đ', '', '1m6 55klg mac cỡ nào đc bạn ơi', 0, '2016-01-31', 0, '2016-01-23', 149, 1, 0, '2-ao-khoac-choang-lot-long-ak36212.jpg', '2-ao-khoac-choang-lot-long-ak362122.jpg', 'product32-ao-khoac-choang-lot-long-ak36212.jpg', '', 'aokhoac2'),
(3, 'Áo khoác kaki lót lông AK-31112', 2, 1, 3, 1, '&Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112 &Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112<br />\r\n<img alt="" src="/ShopOnline/admin/themes/upload/images/807_2013606805_1641250346.jpg" style="border-style:solid; border-width:1px; height:371px; margin-left:111px; margin-right:111px; width:400px" /><br />\r\n<img alt="" src="/ShopOnline/admin/themes/upload/images/407_0_4_1.jpg" style="height:400px; margin-left:150px; margin-right:150px; width:300px" />', 110, 'vàng', 'vàng', '', '/public/images/product/aokhoac2.jpg\r\n/public/images/product/aokhoac2.jpg', NULL, '2016-01-22', NULL, '2016-01-23', 25, 0, 0, '3-ao-khoac-kaki-lot-long-ak31112.jpg', 'vàng', '', '', 'Ao khoac kaki lot long AK31112'),
(4, 'Áo khoác kaki lót lông AK-31112', 2, 1, 3, 1, '&Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112 &Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112', 110, 'vàng', 'vàng', '', '/public/images/product/aokhoac2.jpg\r\n/public/images/product/aokhoac2.jpg', NULL, '2016-01-22', NULL, '2016-01-23', 20, 0, 0, '4-ao-khoac-kaki-lot-long-ak31112.jpg', 'product24-ao-khoac-kaki-lot-long-ak31112.jpg', '', '', 'Ao khoac kaki lot long AK31112'),
(5, 'Áo khoác kaki lót bông MT-2026', 3, 1, 4, 1, '&Aacute;o kho&aacute;c kaki l&oacute;t b&ocirc;ng MT-2026 &Aacute;o kho&aacute;c kaki l&oacute;t b&ocirc;ng MT-2026', 123456, 'a', 'a', '', 'public/images/product/aokhoac2.jpg\r\npublic/images/product/aokhoac2.jpg', NULL, '2016-01-30', NULL, '2016-01-23', 23, 0, 0, '5-ao-khoac-kaki-lot-bong-mt2026.jpg', '5-ao-khoac-kaki-lot-bong-mt20262.jpg', '', '', ''),
(6, 'Áo khoác AK-723', 2, 3, 3, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-02-24', NULL, '2016-01-23', 77, 0, 0, '6-ao-khoac-ak723.jpg', 'product26-ao-khoac-ak723.jpg', 'product36-ao-khoac-ak723.jpg', '', 'ao-khoac-ak723'),
(7, 'Áo khoác AK-112', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-01-22', NULL, '2016-01-23', 12, 0, 0, '7-ao-khoac-ak112.jpg', 'Áo khoác AK-723', '', '', 'ao-khoac-ak112'),
(8, 'Áo khoác AK-7234', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-01-22', NULL, '2016-01-23', 12, 0, 0, '8-ao-khoac-ak7234.jpg', 'product28-ao-khoac-ak7234.jpg', '', '', 'ao-khoac-ak7234'),
(9, 'Áo khoác XK-71', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-02-09', NULL, '2016-01-23', 20, 0, 0, '9-ao-khoac-xk71.jpg', 'Áo khoác AK-723', '', 'product49-ao-khoac-xk71.jpg', 'ao-khoac-xk71'),
(10, 'Áo khoác AK-223', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-01-22', NULL, '2016-01-23', 17, 0, 0, '10-ao-khoac-ak223.jpg', '10-ao-khoac-ak2232.jpg', '', '', 'ao-khoac-ak223'),
(13, 'Áo phong 19', 3, 2, 2, NULL, 'tran hạo nam', 101000, 'trắng', 'cotton', '', NULL, NULL, '2016-02-29', NULL, NULL, 0, 1, 10, '13-dsd.jpg', NULL, '', '', ''),
(14, 'Áo phông mới 2015', 3, 2, 2, NULL, '&Aacute;o ph&ocirc;ng mới 2015', 150000, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'product114-ao-phong-moi-2015.jpg', NULL, '', '', ''),
(15, 'Áo phông polo', 3, 2, 2, 1, '&Aacute;o ph&ocirc;ng polo', 500000, 'sọc đỏ', 'catton', 'L, XL', NULL, NULL, '2016-02-29', NULL, NULL, 39, 1, 15, 'product115-ao-phong-polo.jpg', 'product215-ao-phong-polo.jpg', '', '', ''),
(16, 'Áo phông 14', 1, 2, 2, NULL, '&Aacute;o ph&ocirc;ng 14 15', 1110000, 'vàng, trắng', 'Cotton', '', NULL, NULL, '2016-02-29', NULL, NULL, 1, 0, 0, 'product116-ao-phong-14.jpg', 'product216-ao-phong-14.jpg', 'product316-ao-phong-14.jpg', '', ''),
(17, 'Áo phong 15', 1, 2, 2, 1, '&Aacute;o phong 15', 100000, 'tim', 'cottton', '', NULL, NULL, '0000-00-00', NULL, NULL, 0, 0, 0, 'product117-ao-phong-15.jpg', NULL, '', '', 'ao-phong-15'),
(18, 'Sơ mi dài tay', 2, 2, 1, NULL, 'sơ my dai tay', 100000, 'vàng, xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 17, 0, 0, 'product118-so-mi-dai-tay.jpg', 'product218-so-mi-dai-tay.jpg', '', '', 'so-mi-dai-tay'),
(19, ' margin: ', 3, 2, 1, NULL, 'hty tgr sbgdf bfg', 100, 'vàng, trắng', 'cotton', 'M, L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 4, 0, 5, 'product119-margin.jpg', 'product219-margin.jpg', '', '', ''),
(20, '1 3 5 7 9 12 15 18 21 24 2791', 1, 2, 1, NULL, '', 100, 'xanh, trắng', 'Cotton', 'XL,L', NULL, NULL, '2016-03-04', NULL, NULL, 139, 0, 0, 'product120-margin-09.jpg', 'product220-margin-09.jpg', '', '', '1-3-5-7-9-12-15-18-21-24-2791'),
(21, 'áo khoác mùa hè catton hà', 1, 2, 1, NULL, 'nguy&ecirc;nz', 1, 'xanh, trắng', 'Cotton', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 85, 0, 7, 'product121-margin-09-em.jpg', 'product221-margin-09-em.jpg', '', '', 'ao-khoac-mua-he-catton-ha'),
(22, ' margin 0 0', 1, 2, 1, NULL, 'aaaaaa', 100000, 'Vàng', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 14, 0, 5, 'product122-margin-0-0.jpg', 'product222-margin-0-0.jpg', 'product322-margin-0-0.jpg', '', ''),
(23, 'sơ mi bò', 1, 2, 1, NULL, '<pre>\r\n\\r\\n<strong>margin</strong>: 0.9<strong>em </strong>0<strong>em </strong>0 0;</pre>\r\n\\r\\n', 120000, 'Trắng , xanh', 'jean', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 2, 0, 7, 'product123-so-mi-bo.jpg', 'product223-so-mi-bo.jpg', 'product323-so-mi-bo.jpg', 'product423-so-mi-bo.jpg', 'so-mi-bo'),
(24, 'sơ mi 12', 1, 2, 1, NULL, 'sơ mi b&ograve;', 1220000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 2, 0, 5, 'product124-so-mi-12.jpg', 'product224-so-mi-12.jpg', '', '', 'so-mi-12'),
(25, 'x1', 1, 2, 1, NULL, '', 123000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 11, 0, 0, 'product125-x1.jpg', 'product225-x1.jpg', '', '', 'x1'),
(26, 'sơ mi bò aaa ', 1, 2, 1, NULL, 'aaa&nbsp;', 302000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 2, 0, 7, 'product126-so-mi-bo-aaa.jpg', 'product226-so-mi-bo-aaa.jpg', '', '', 'so-mi-bo-aaa'),
(27, 'aaa 1', 1, 2, 1, NULL, '', 100000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product127-aaa-1.jpg', 'product227-aaa-1.jpg', '', '', 'aaa-1'),
(28, 'Áo phông', 2, 2, 2, NULL, 'ao moi', 200000, 'xl', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 0, 0, 0, 'product128-ao-phong.jpg', 'product228-ao-phong.jpg', '', '', 'ao-phong'),
(29, 'Áo phông 03', 2, 2, 2, NULL, 'ao phong', 300000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product129-ao-phong-03.jpg', 'product229-ao-phong-03.jpg', '', '', 'ao-phong-03'),
(30, 'Áo phông 09', 2, 2, 2, NULL, 'ao phong', 2000000, 'Trắng , xanh', 'cotton', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product130-ao-phong-09.jpg', NULL, '', '', ''),
(31, 'Áo phông 1', 2, 2, 2, NULL, '<a href=\\"http://h2t-shop.com/ao-phong/c8.html\\">Áo ph&ocirc;ng</a>&nbsp;', 321110, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 3, 0, 0, 'product131-ao-phong-1.jpg', NULL, '', '', ''),
(32, 'Áo phông 03', 3, 2, 1, NULL, 'aa vgb', 199900, 'Trắng , xanh', 'Cotton', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 1, 1, 19, 'product132-ao-phong-03.jpg', NULL, '', '', ''),
(33, '12 Áo phông', 3, 2, 1, NULL, 'bg vf sd', 1456000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-05', NULL, NULL, 3, 1, 12, 'product133-12-ao-phong.jpg', NULL, '', '', ''),
(34, 'Áo phông 12', 3, 2, 2, NULL, '&aacute; a d<br />\r\n<img alt="" src="/ShopOnline/admin/themes/upload/images/407_0_4_1.jpg" style="height:533px; margin-left:100px; margin-right:100px; width:400px" />', 120000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-18', NULL, NULL, 10, 1, 6, 'product134-ao-phong-12.jpg', 'product234-ao-phong-12.jpg', '', '', 'ao-phong-12');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE 'role' (
  'RoleID' int(11) NOT NULL,
  'Name' varchar(250) DEFAULT NULL,
  'Description' varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `Name`, `Description`) VALUES
(1, 'admin', 'a'),
(2, 'user', 'sadad');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE 'slideshow' (
  'SlideshowID' int(11) NOT NULL,
  'Name' varchar(150) DEFAULT NULL,
  'img1' varchar(260) DEFAULT NULL,
  'text1' varchar(500) DEFAULT NULL,
  'img2' varchar(260) DEFAULT NULL,
  'text2' varchar(500) DEFAULT NULL,
  'img3' varchar(260) NOT NULL,
  'text3' varchar(500) NOT NULL,
  'img4' varchar(260) NOT NULL,
  'text4' varchar(500) NOT NULL,
  'img5' varchar(260) NOT NULL,
  'text5' varchar(500) NOT NULL,
  'status' tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`Id`, `Name`, `img1`, `text1`, `img2`, `text2`, `img3`, `text3`, `img4`, `text4`, `img5`, `text5`, `status`) VALUES
(1, 'banner trái', 'image1-1-1.jpg', '0', 'image2-1-1.jpg', '0', 'image3-1-banner-trai.jpg', '0', 'image4-1-banner-trai.jpg', '0', 'image5-1-banner-trai.jpg', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE 'product_group' (
  'ProductGroupID' int(11) NOT NULL,
  'ProductGroupName' varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_group`
--

INSERT INTO `product_group` (`Id`, `Name`, `SupplyId`, `Link`, `CategoryId`, `pId`, `alias`) VALUES
(1, 'Áo Sơ Mi', 1, 'so-mi.php', 2, 0, 'aosomi'),
(2, 'Áo Phông', 1, 'so-mi.php', 2, 0, 'ao-phong'),
(3, 'Quần Bò', 1, NULL, 1, 0, 'jean'),
(4, 'Quần Kaki', 1, NULL, 1, 0, 'quan-kaki'),
(5, 'Sơ Mi Dài Tay', 2, 'so-mi-dai-tay', 2, 1, ''),
(7, 'Vải Giả Bò', 1, NULL, 1, 0, 'quan-au'),
(8, 'Áo Thể Thao', 1, NULL, 2, 0, 'ao-the-thao'),
(9, 'Áo Gió', NULL, 'Áo Gió', 2, 0, 'ao-gio');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE 'type' (
  'TypeId' int(11) NOT NULL,
  'TypeName' varchar(30) NOT NULL,
  'Description' varchar(200) NOT NULL,
  'alias' varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`Id`, `Name`, `Description`, `alias`) VALUES
(1, 'SẢN PHẨM NỔI BẬT', '', 'san-pham-order'),
(2, 'SẢN PHẨM MỚI', '', 'san-pham-moi'),
(3, 'SẢN PHẨM KHUYẾN MẠI', '', 'san-pham-khuyen-mai');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE 'user_online' (
  'session' varchar(100) NOT NULL DEFAULT '''''',
  'time' int(11) NOT NULL DEFAULT '0',
  'ip' varchar(24) NOT NULL,
  'browser' varchar(50) NOT NULL,
  'dateonline' date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
('2g4u834q03mdbq4kfnpnga5ge1', 1458308377, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-18');


--
-- Indexes for dumped tables
--

--
-- Indexes for table 'user'
--
ALTER TABLE 'user'
  ADD PRIMARY KEY ('UserID');

--
-- Indexes for table `banner`
--
ALTER TABLE 'banner'
  ADD PRIMARY KEY ('BannerID');

--
-- Indexes for table `categories`
--
ALTER TABLE 'categories'
  ADD PRIMARY KEY ('CategoriesID'),
  ADD KEY 'FK_Categories_ProductGroup' ('ProductGroupID');

--
-- Indexes for table `comment`
--
ALTER TABLE 'comment'
  ADD PRIMARY KEY ('CommentID'),
  ADD KEY 'FK_Comment_Product' ('ProductID');

--
-- Indexes for table `contactinfo`
--
ALTER TABLE 'contactinfo'
  ADD PRIMARY KEY ('ContactinfoID');

--
-- Indexes for table 'reviews'
--
ALTER TABLE 'reviews'
  ADD PRIMARY KEY ('ReviewsID');

--
-- Indexes for table `imageslide`
--
ALTER TABLE 'imageslide'
  ADD PRIMARY KEY ('ImageslideID');

-- --
-- -- Indexes for table 'menu'
-- --
-- ALTER TABLE 'menu'
--   ADD PRIMARY KEY ('MenuId');

--
-- Indexes for table 'orders'
--
ALTER TABLE 'orders'
  ADD PRIMARY KEY ('OrdersID'),
  ADD KEY 'FK_Orders_User' ('UserID'),
  ADD KEY 'FK_Orders_PaymentMethod' ('PaymentMethodID');

--
-- Indexes for table 'order_detail'
--
ALTER TABLE 'order_detail'
  ADD PRIMARY KEY ('OrdersDetailID'),
  ADD KEY 'FK_OrdersDetail_Orders' ('OrderID'),
  ADD KEY 'FK_OrdersDetail_Product' ('ProductID'),;

--
-- Indexes for table 'product'
--
ALTER TABLE 'product'
  ADD PRIMARY KEY ('ProductID'),
  ADD KEY 'FK_Product_Categories' ('CategoriesID'),
  ADD KEY 'FK_Product_Discount' ('DiscountID');

--
-- Indexes for table 'role'
--
ALTER TABLE 'role'
  ADD PRIMARY KEY ('RoleID');

--
-- Indexes for table 'slideshow'
--
ALTER TABLE 'slideshow'
  ADD PRIMARY KEY ('SlideshowId');

--
-- Indexes for table 'product_group'
--
ALTER TABLE 'product_group'
  ADD PRIMARY KEY ('ProductGroupID');
  
--
-- Indexes for table 'type'
--
ALTER TABLE 'type'
  ADD PRIMARY KEY ('TypeId');

--
-- Indexes for table 'user_online'
--
ALTER TABLE 'user_online'
  ADD PRIMARY KEY ('session');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'user'
--
ALTER TABLE 'user'
  MODIFY 'UserID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table 'banner'
--
ALTER TABLE 'banner'
  MODIFY 'BannerID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table 'categories'
--
ALTER TABLE 'categories'
  MODIFY 'CategoriesID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table 'comment'
--
ALTER TABLE 'comment'
  MODIFY'CommentID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table 'contactinfo'
--
ALTER TABLE 'contactinfo'
  MODIFY 'ContactinfoId' int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table 'reviews'
--
ALTER TABLE 'reviews'
  MODIFY 'ReviewsID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `imageslide`
--
ALTER TABLE 'imageslide'
  MODIFY 'ImageslideID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --
-- -- AUTO_INCREMENT for table 'menu'
-- --
-- ALTER TABLE 'menu'
--   MODIFY 'MenuID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table 'orders'
--
ALTER TABLE 'orders'
  MODIFY 'OrdersID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table 'order_detail'
--
ALTER TABLE 'order_detail'
  MODIFY 'OrdersDetailID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table 'product'
--
ALTER TABLE 'product'
  MODIFY 'ProductID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table 'role'
--
ALTER TABLE 'role'
  MODIFY 'RoleID' int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table 'slideshow'
--
ALTER TABLE 'slideshow'
  MODIFY 'SlideshowID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table 'product_group'
--
ALTER TABLE 'product_group'
  MODIFY 'ProductGroupID' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table 'type'
--
ALTER TABLE 'type'
  MODIFY 'TypeId' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table 'categories'
--
ALTER TABLE 'categories'
  ADD CONSTRAINT 'FK_Categories_ProductGroup' FOREIGN KEY ('ProductGroupID') REFERENCES 'product_group' ('ProductGroupID') ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'comment'
--
ALTER TABLE 'comment'
  ADD CONSTRAINT 'FK_Comment_Product' FOREIGN KEY ('ProductID') REFERENCES 'product' ('ProductID') ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'orders'
--
ALTER TABLE 'orders'
  ADD CONSTRAINT 'FK_Orders_User' FOREIGN KEY ('UserID') REFERENCES 'user' ('UserID') ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT 'FK_Orders_PaymentMethod' FOREIGN KEY ('PaymentMethodID') REFERENCES 'payment_method' ('PaymentMethodID') ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'order_detail'
--
ALTER TABLE 'order_detail'
  ADD CONSTRAINT 'FK_OrdersDetail_Orders' FOREIGN KEY ('OrderID') REFERENCES 'orders' ('OrderID') ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT 'FK_OrdersDetail_Product' FOREIGN KEY ('ProductID') REFERENCES 'product' ('ProductID') ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE 'product'
  ADD CONSTRAINT 'FK_Product_Categories' FOREIGN KEY ('CategoriesID') REFERENCES 'categories' ('CategoriesID') ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT 'FK_Product_Discount' FOREIGN KEY ('DiscountID') REFERENCES 'discount' ('DiscountID') ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_Role` FOREIGN KEY (`RoleId`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
