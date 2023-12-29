CREATE DATABASE aodaistore_sql;
USE aodaistore_sql;
--
-- Database: `aodaistore_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE user (
  UserID int(11) NOT NULL,
  UserName varchar(150) DEFAULT NULL,
  Email varchar(255) DEFAULT NULL,
  Password varchar(150) DEFAULT NULL,
  RoleID int(11) DEFAULT NULL,
  Yob varchar(20) DEFAULT NULL,
  Gender boolean DEFAULT NULL,
  Address varchar(255) DEFAULT NULL,
  Phone varchar(20) DEFAULT NULL,
  RegisterDay date DEFAULT NULL,
  Image varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO user (`UserID`, `UserName`, `Email`, `Password`, `RoleID`, `Yob`, `Gender`, `Address`, `Phone`, `RegisterDay`, `Image`) VALUES
(1, 'Nguyễn Văn A', 'nguyen.van.a@example.com', 'hashed_password_1', 1, '1990-05-15', 1, '123 Đường A, Quận 1, Thành phố Hồ Chí Minh', '1234567890', '2023-01-01', 'user1.jpg'),
(2, 'Trần Thị B', 'tran.thi.b@example.com', 'hashed_password_2', 2, '1985-08-22', 0, '456 Đường B, Quận 2, Thành phố Hồ Chí Minh', '9876543210', '2023-01-02', 'user2.jpg'),
(3, 'Lê Minh C', 'le.minh.c@example.com', 'hashed_password_3', 1, '1988-12-10', 1, '789 Đường C, Quận 3, Thành phố Hồ Chí Minh', '5678901234', '2023-01-03', 'user3.jpg'),
(4, 'Hoàng Thị D', 'hoang.thi.d@example.com', 'hashed_password_4', 3, '1995-04-03', 0, '321 Đường D, Quận 4, Thành phố Hồ Chí Minh', '3456789012', '2023-01-04', 'user4.jpg'),
(5, 'Nguyễn Văn E', 'nguyen.van.e@example.com', 'hashed_password_5', 2, '1992-07-18', 1, '654 Đường E, Quận 5, Thành phố Hồ Chí Minh', '6789012345', '2023-01-05', 'user5.jpg'),
(6, 'Trần Thanh F', 'tran.thanh.f@example.com', 'hashed_password_6', 1, '1983-09-25', 1, '876 Đường F, Quận 6, Thành phố Hồ Chí Minh', '1231234567', '2023-01-06', 'user6.jpg'),
(7, 'Lê Bảo G', 'le.bao.g@example.com', 'hashed_password_7', 3, '1998-02-14', 1, '987 Đường G, Quận 7, Thành phố Hồ Chí Minh', '4567890123', '2023-01-07', 'user7.jpg'),
(8, 'Phạm Thị H', 'pham.thi.h@example.com', 'hashed_password_8', 2, '1991-11-30', 0, '234 Đường H, Quận 8, Thành phố Hồ Chí Minh', '7890123456', '2023-01-08', 'user8.jpg'),
(9, 'Đặng Văn I', 'dang.van.i@example.com', 'hashed_password_9', 1, '1986-06-20', 1, '567 Đường I, Quận 9, Thành phố Hồ Chí Minh', '2345678901', '2023-01-09', 'user9.jpg'),
(10, 'Phan Thị K', 'phan.thi.k@example.com', 'hashed_password_10', 2, '1993-03-07', 0, '876 Đường K, Quận 10, Thành phố Hồ Chí Minh', '9012345678', '2023-01-10', 'user10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE banner (
  BannerID int(11) NOT NULL,
  Name varchar(150) DEFAULT NULL,
  Image varchar(255) DEFAULT NULL,
  sActive tinyint(1) DEFAULT NULL,
  Visible int(11) DEFAULT NULL,
  Description varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO banner (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(1, 'banner trái', 'banner-1-banner-trai.jpg', 1, 1, 'banner bên trái'),
(2, 'banner phải', 'banner-2-banner-phai.jpg', 1, 2, 'banner bên phải'),
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới'),
(5, '1 trung tam', 'banner-5-1-trung-tam1 trung tam.jpg', 0, 4, 'sdadadasd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE categories (
  CategoriesID int(11) NOT NULL,
  ProductGroupID int(11) NOT NULL,
  CategoriesName varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO categories (`CategoriesID`, `ProductGroupID`, `CategoriesName`) VALUES
(1, 1, 'Áo dài cách tân'),
(2, 2, 'Áo dài lụa'),
(3, 3, 'Áo dài cưới'),
(4, 4, 'Áo dài truyền thống'),
(5, 5, 'Áo dài cho bé'),
(6, 6, 'Áo dài nam');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE comment (
  CommentID int(11) NOT NULL,
  ProductID int(11) DEFAULT NULL,
  Content text,
  CommentDay datetime DEFAULT NULL,
  UserName varchar(150) DEFAULT NULL,
  Email varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO comment (`CommentID`, `ProductID`, `Content`, `CommentDay`, `UserName`, `Email`) VALUES
(1, 101, 'Sản phẩm tuyệt vời!', '2023-01-10 08:30:00', 'John Doe', 'john.doe@example.com'),
(2, 102, 'Thiết kế đẹp mắt.', '2023-01-11 10:45:00', 'Jane Smith', 'jane.smith@example.com'),
(3, 103, 'Chất lượng sản phẩm xuất sắc.', '2023-01-12 12:15:00', 'Bob Johnson', 'bob.johnson@example.com'),
(4, 104, 'Giao hàng nhanh và dịch vụ tốt.', '2023-01-13 14:20:00', 'Alice Brown', 'alice.brown@example.com'),
(5, 105, 'Nên thử nghiệm!', '2023-01-14 16:00:00', 'Eva White', 'eva.white@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE contactinfo (
  ContactinfoID int(11) NOT NULL,
  UserName varchar(150) NOT NULL,
  Address varchar(100) NOT NULL,
  Country varchar(100) NOT NULL,
  Phone varchar(20) NOT NULL,
  Email varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO contactinfo (`ContactinfoID`, `UserName`, `Address`, `Country`, `Phone`, `Email`) VALUES
(1, 'Nguyễn Văn A', '123 Đường ABC', 'Việt Nam', '123-456-7890', 'nguyenvana@example.com'),
(2, 'Trần Thị B', '456 Đường XYZ', 'Việt Nam', '987-654-3210', 'tranthib@example.com'),
(3, 'Lê Văn C', '789 Đường MNO', 'Việt Nam', '555-123-4567', 'levanc@example.com'),
(4, 'Hoàng Thị D', '321 Đường QWE', 'Việt Nam', '333-999-8888', 'hoangthid@example.com'),
(5, 'Phạm Văn E', '654 Đường HIJ', 'Việt Nam', '777-444-5555', 'phamvane@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE reviews (
  ReviewsID int(11) NOT NULL,
  UserName varchar(150) NOT NULL,
  Subject varchar(300) NOT NULL,
  ReviewsDay datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO reviews (`ReviewsID`, `UserName`, `Subject`, `ReviewsDay`) VALUES
(1, 'Nguyễn Văn A', 'Sản phẩm rất tốt!', '2023-01-10 08:30:00'),
(2, 'Trần Thị B', 'Hài lòng với dịch vụ.', '2023-01-11 10:45:00'),
(3, 'Lê Văn C', 'Chất lượng sản phẩm ổn định.', '2023-01-12 12:15:00'),
(4, 'Hoàng Thị D', 'Đáng giá đồng tiền.', '2023-01-13 14:20:00'),
(5, 'Phạm Văn E', 'Nhân viên thân thiện.', '2023-01-14 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `imageslide`
--

CREATE TABLE imageslide (
  ImageslideID int(11) NOT NULL,
  Image varchar(255) DEFAULT NULL,
  SlideID int(1) DEFAULT NULL,
  IsActive tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imageslide`
--

INSERT INTO imageslide (`ImageslideID`, `Image`, `SlideID`, `IsActive`) VALUES
(1, 'slide1.jpg', 1, 1),
(2, 'slide2.jpg', 2, 1),
(3, 'slide3.jpg', 3, 0),
(4, 'slide4.jpg', 4, 1),
(5, 'slide5.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE orders (
  OrdersID int(11) NOT NULL,
  UserID int(11) NOT NULL,
  PaymentMethodID int(11) NOT NULL,
  OrdersDate datetime NOT NULL,
  ShippingAddress varchar(200) NOT NULL,
  ShippingDate datetime NOT NULL,
  Notes varchar(20) NOT NULL,
  PaymentStatus varchar(20) NOT NULL,
  ShippingStatus varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO orders (`OrdersID`, `UserID`, `PaymentMethodID`, `OrdersDate`, `ShippingAddress`, `ShippingDate`, `Notes`, `PaymentStatus`, `ShippingStatus`) VALUES
(1, 1, 101, '2023-01-15 08:30:00', '123 Đường A, Quận 1, Thành phố Hồ Chí Minh', '2023-01-20 10:00:00', 'Ghi chú đơn hàng 1', 'Đã thanh toán', 'Đang giao hàng'),
(2, 2, 102, '2023-01-16 09:45:00', '456 Đường B, Quận 2, Thành phố Hồ Chí Minh', '2023-01-21 11:30:00', 'Ghi chú đơn hàng 2', 'Chưa thanh toán', 'Đã giao hàng'),
(3, 3, 103, '2023-01-17 10:20:00', '789 Đường C, Quận 3, Thành phố Hồ Chí Minh', '2023-01-22 13:15:00', 'Ghi chú đơn hàng 3', 'Đã thanh toán', 'Đã giao hàng'),
(4, 4, 101, '2023-01-18 11:05:00', '321 Đường D, Quận 4, Thành phố Hồ Chí Minh', '2023-01-23 15:45:00', 'Ghi chú đơn hàng 4', 'Chưa thanh toán', 'Đang giao hàng'),
(5, 5, 102, '2023-01-19 12:15:00', '654 Đường E, Quận 5, Thành phố Hồ Chí Minh', '2023-01-24 17:00:00', 'Ghi chú đơn hàng 5', 'Đã thanh toán', 'Đã giao hàng'),
(6, 6, 103, '2023-01-20 13:30:00', '876 Đường F, Quận 6, Thành phố Hồ Chí Minh', '2023-01-25 18:20:00', 'Ghi chú đơn hàng 6', 'Chưa thanh toán', 'Đang giao hàng'),
(7, 7, 101, '2023-01-21 14:45:00', '987 Đường G, Quận 7, Thành phố Hồ Chí Minh', '2023-01-26 20:30:00', 'Ghi chú đơn hàng 7', 'Đã thanh toán', 'Đã giao hàng'),
(8, 8, 102, '2023-01-22 15:55:00', '234 Đường H, Quận 8, Thành phố Hồ Chí Minh', '2023-01-27 22:10:00', 'Ghi chú đơn hàng 8', 'Chưa thanh toán', 'Đang giao hàng'),
(9, 9, 103, '2023-01-23 16:10:00', '567 Đường I, Quận 9, Thành phố Hồ Chí Minh', '2023-01-28 23:45:00', 'Ghi chú đơn hàng 9', 'Đã thanh toán', 'Đã giao hàng'),
(10, 10, 101, '2023-01-24 17:25:00', '876 Đường K, Quận 10, Thành phố Hồ Chí Minh', '2023-01-29 01:30:00', 'Ghi chú đơn hàng 10', 'Chưa thanh toán', 'Đang giao hàng');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE order_detail (
  OrdersDetailID int(11) NOT NULL,
  OrderID int(11) NOT NULL,
  ProductID int(11) NOT NULL,
  Quantity int(11) NOT NULL,
  Price float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO order_detail (`OrdersDetailID`, `OrderID`, `ProductID`, `Quantity`, `Price`) VALUES
(1, 1, 101, 2, 5000000),
(2, 1, 102, 1, 3000000),
(3, 2, 103, 3, 1500000),
(4, 2, 104, 1, 2000000),
(5, 3, 105, 2, 1800000),
(6, 3, 106, 2, 2500000),
(7, 4, 107, 1, 3500000),
(8, 4, 108, 3, 1200000),
(9, 5, 109, 1, 4000000),
(10, 5, 110, 2, 2200000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE product (
  ProductID int(11) NOT NULL,
  CategoriesID int(11) NOT NULL,
  DiscountID int(11) NOT NULL,
  ProductName varchar(550) DEFAULT NULL,
  TypeID int(11) NOT NULL,
  CategoryID int(11) DEFAULT NULL,
  ProductGroupID int(11) DEFAULT NULL,
  Description longtext,
  Price int(11) NOT NULL,
  Color varchar(250) DEFAULT NULL,
  Material varchar(250) DEFAULT NULL,
  Size varchar(20) NOT NULL,
  Detail longtext,
  CreateBy int(11) DEFAULT NULL,
  Createdate date DEFAULT NULL,
  EditBy int(11) DEFAULT NULL,
  EditDate date DEFAULT NULL,
  TotalView int(11) DEFAULT NULL,
  Image1 varchar(250) DEFAULT NULL,
  Image2 varchar(250) DEFAULT NULL,
  Image3 varchar(260) NOT NULL,
  Image4 varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO product (`ProductID`, `CategoriesID`, `DiscountID`, `ProductName`, `TypeID`, `CategoryID`, `ProductGroupID`, `Description`, `Price`, `Color`, `Material`, `Size`, `Detail`, `CreateBy`, `Createdate`, `EditBy`, `EditDate`, `TotalView`, `Image1`, `Image2`, `Image3`, `Image4`) VALUES
(5, 2, 105, 'Áo dài truyền thống nam', 202, NULL, 302, 'Áo dài truyền thống nam chất liệu lụa', 1500000, 'Đa dạng', 'Lụa', 'L, XL', 'Áo dài truyền thống nam với chất liệu lụa mềm mại', 2, '2023-01-04', NULL, NULL, 750, 'ao_dai_nam_1.jpg', 'ao_dai_nam_2.jpg', 'ao_dai_nam_3.jpg', 'ao_dai_nam_4.jpg'),
(6, 2, 106, 'Áo dài cách tân nữ', 202, NULL, 302, 'Áo dài cách tân nữ với hoa văn truyền thống', 1800000, 'Đa dạng', 'Lụa', 'S, M, L', 'Áo dài nữ phối hoa văn truyền thống', 2, '2023-01-05', NULL, NULL, 600, 'ao_dai_nu_1.jpg', 'ao_dai_nu_2.jpg', 'ao_dai_nu_3.jpg', 'ao_dai_nu_4.jpg'),
(7, 3, 107, 'Áo dài cách tân nam', 202, NULL, 302, 'Áo dài cách tân nam với kiểu dáng hiện đại', 2000000, 'Đa dạng', 'Lụa', 'L, XL', 'Áo dài nam phong cách mới', 2, '2023-01-06', NULL, NULL, 500, 'ao_dai_nam_modern_1.jpg', 'ao_dai_nam_modern_2.jpg', 'ao_dai_nam_modern_3.jpg', 'ao_dai_nam_modern_4.jpg'),
(8, 2, 108, 'Áo dài cách tân nữ thêu hoa', 202, NULL, 302, 'Áo dài cách tân nữ thêu hoa đẹp mắt', 2200000, 'Đa dạng', 'Lụa', 'S, M, L', 'Áo dài nữ thêu hoa tinh tế', 2, '2023-01-07', NULL, NULL, 700, 'ao_dai_nu_thieu_hoa_1.jpg', 'ao_dai_nu_thieu_hoa_2.jpg', 'ao_dai_nu_thieu_hoa_3.jpg', 'ao_dai_nu_thieu_hoa_4.jpg'),
(9, 3, 109, 'Áo dài cách tân nam dáng dài', 202, NULL, 302, 'Áo dài cách tân nam dáng dài phối màu', 2400000, 'Đa dạng', 'Lụa', 'XL, XXL', 'Áo dài nam dáng dài thời trang', 2, '2023-01-08', NULL, NULL, 800, 'ao_dai_nam_dang_dai_1.jpg', 'ao_dai_nam_dang_dai_2.jpg', 'ao_dai_nam_dang_dai_3.jpg', 'ao_dai_nam_dang_dai_4.jpg'),
(10, 3, 110, 'Áo dài cách tân nữ dáng dài', 202, NULL, 302, 'Áo dài cách tân nữ dáng dài thêu hoa', 2600000, 'Đa dạng', 'Lụa', 'S, M, L', 'Áo dài nữ dáng dài thêu hoa đẹp', 2, '2023-01-09', NULL, NULL, 900, 'ao_dai_nu_dang_dai_thieu_hoa_1.jpg', 'ao_dai_nu_dang_dai_thieu_hoa_2.jpg', 'ao_dai_nu_dang_dai_thieu_hoa_3.jpg', 'ao_dai_nu_dang_dai_thieu_hoa_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE role (
  RoleID int(11) NOT NULL,
  Name varchar(250) DEFAULT NULL,
  Description varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO role (`Id`, `Name`, `Description`) VALUES
(1, 'admin', 'a'),
(2, 'user', 'sadad');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE slideshow (
  SlideshowID int(11) NOT NULL,
  Name varchar(150) DEFAULT NULL,
  img1 varchar(260) DEFAULT NULL,
  text1 varchar(500) DEFAULT NULL,
  img2 varchar(260) DEFAULT NULL,
  text2 varchar(500) DEFAULT NULL,
  img3 varchar(260) NOT NULL,
  text3 varchar(500) NOT NULL,
  img4 varchar(260) NOT NULL,
  text4 varchar(500) NOT NULL,
  img5 varchar(260) NOT NULL,
  text5 varchar(500) NOT NULL,
  status tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO slideshow (`SlideshowID`, `Name`, `img1`, `text1`, `img2`, `text2`, `img3`, `text3`, `img4`, `text4`, `img5`, `text5`, `status`) VALUES
(1, 'Slideshow 1', 'slide1.jpg', 'Text for Slide 1', 'slide2.jpg', 'Text for Slide 2', 'slide3.jpg', 'Text for Slide 3', 'slide4.jpg', 'Text for Slide 4', 'slide5.jpg', 'Text for Slide 5', 1),
(2, 'Slideshow 2', 'slide6.jpg', 'Text for Slide 6', 'slide7.jpg', 'Text for Slide 7', 'slide8.jpg', 'Text for Slide 8', 'slide9.jpg', 'Text for Slide 9', 'slide10.jpg', 'Text for Slide 10', 1),
(3, 'Slideshow 3', 'slide11.jpg', 'Text for Slide 11', 'slide12.jpg', 'Text for Slide 12', 'slide13.jpg', 'Text for Slide 13', 'slide14.jpg', 'Text for Slide 14', 'slide15.jpg', 'Text for Slide 15', 0),
(4, 'Slideshow 4', 'slide16.jpg', 'Text for Slide 16', 'slide17.jpg', 'Text for Slide 17', 'slide18.jpg', 'Text for Slide 18', 'slide19.jpg', 'Text for Slide 19', 'slide20.jpg', 'Text for Slide 20', 1),
(5, 'Slideshow 5', 'slide21.jpg', 'Text for Slide 21', 'slide22.jpg', 'Text for Slide 22', 'slide23.jpg', 'Text for Slide 23', 'slide24.jpg', 'Text for Slide 24', 'slide25.jpg', 'Text for Slide 25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE product_group (
  ProductGroupID int(11) NOT NULL,
  ProductGroupName varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_group`
--

INSERT INTO product_group (`ProductGroupID`, `ProductGroupName`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Trẻ em');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE type (
  TypeID int(11) NOT NULL,
  TypeName varchar(30) NOT NULL,
  Description varchar(200) NOT NULL,
  alias varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO type (`TypeID`, `TypeName`, `Description`, `alias`) VALUES
(1, 'SẢN PHẨM NỔI BẬT', '', 'san-pham-order'),
(2, 'SẢN PHẨM MỚI', '', 'san-pham-moi'),
(3, 'SẢN PHẨM KHUYẾN MẠI', '', 'san-pham-khuyen-mai');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE user_online (
  session varchar(100) NOT NULL DEFAULT '''''',
  time int(11) NOT NULL DEFAULT '0',
  ip varchar(24) NOT NULL,
  browser varchar(50) NOT NULL,
  dateonline date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_online`
--

INSERT INTO user_online (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
('abcdef123456', 600, '192.168.0.1', 'Chrome', '2023-01-10'),
('ghijkl789012', 300, '192.168.0.2', 'Firefox', '2023-01-11'),
('mnopqr345678', 900, '192.168.0.3', 'Safari', '2023-01-12'),
('stuvwx901234', 1200, '192.168.0.4', 'Edge', '2023-01-13'),
('yzabcd567890', 450, '192.168.0.5', 'Opera', '2023-01-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'user'
--
ALTER TABLE user
  ADD PRIMARY KEY (UserID);

--
-- Indexes for table `banner`
--
ALTER TABLE banner
  ADD PRIMARY KEY (BannerID);

--
-- Indexes for table `categories`
--
ALTER TABLE categories
  ADD PRIMARY KEY (CategoriesID),
  ADD KEY FK_Categories_ProductGroup (ProductGroupID);

--
-- Indexes for table `comment`
--
ALTER TABLE comment
  ADD PRIMARY KEY (CommentID),
  ADD KEY FK_Comment_Product (ProductID);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE contactinfo
  ADD PRIMARY KEY (ContactinfoID);

--
-- Indexes for table 'reviews'
--
ALTER TABLE reviews
  ADD PRIMARY KEY (ReviewsID);

--
-- Indexes for table `imageslide`
--
ALTER TABLE imageslide
  ADD PRIMARY KEY (ImageslideID);

--
-- Indexes for table 'orders'
--
ALTER TABLE orders
  ADD PRIMARY KEY (OrdersID),
  ADD KEY FK_Orders_User (UserID),
  ADD KEY FK_Orders_PaymentMethod (PaymentMethodID);

--
-- Indexes for table 'order_detail'
--
ALTER TABLE order_detail
  ADD PRIMARY KEY (OrdersDetailID),
  ADD KEY FK_OrdersDetail_Orders (OrderID),
  ADD KEY FK_OrdersDetail_Product (ProductID);

--
-- Indexes for table 'product'
--
ALTER TABLE product
  ADD PRIMARY KEY (ProductID),
  ADD KEY FK_Product_Categories (CategoriesID),
  ADD KEY FK_Product_Discount (DiscountID);

--
-- Indexes for table 'role'
--
ALTER TABLE role
  ADD PRIMARY KEY (RoleID);

--
-- Indexes for table 'slideshow'
--
ALTER TABLE slideshow
  ADD PRIMARY KEY (SlideshowId);

--
-- Indexes for table 'product_group'
--
ALTER TABLE product_group
  ADD PRIMARY KEY (ProductGroupID);
  
--
-- Indexes for table 'type'
--
ALTER TABLE type
  ADD PRIMARY KEY (TypeID);

--
-- Indexes for table 'user_online'
--
ALTER TABLE user_online
  ADD PRIMARY KEY (session);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'user'
--
ALTER TABLE user
  MODIFY UserID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table 'banner'
--
ALTER TABLE banner
  MODIFY BannerID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table 'categories'
--
ALTER TABLE categories
  MODIFY CategoriesID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table 'comment'
--
ALTER TABLE comment
  MODIFY CommentID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table 'contactinfo'
--
ALTER TABLE contactinfo
  MODIFY ContactinfoID int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table 'reviews'
--
ALTER TABLE reviews
  MODIFY ReviewsID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `imageslide`
--
ALTER TABLE imageslide
  MODIFY ImageslideID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table 'orders'
--
ALTER TABLE orders
  MODIFY OrdersID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table 'order_detail'
--
ALTER TABLE order_detail
  MODIFY OrdersDetailID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table 'product'
--
ALTER TABLE product
  MODIFY ProductID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table 'role'
--
ALTER TABLE role
  MODIFY RoleI int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table 'slideshow'
--
ALTER TABLE slideshow
  MODIFY SlideshowID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table 'product_group'
--
ALTER TABLE product_group
  MODIFY ProductGroupID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table 'type'
--
ALTER TABLE type
  MODIFY TypeID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table 'categories'
--
ALTER TABLE categories
  ADD CONSTRAINT FK_Categories_ProductGroup FOREIGN KEY (ProductGroupID) REFERENCES product_group (ProductGroupID) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'comment'
--
ALTER TABLE comment
  ADD CONSTRAINT FK_Comment_Product FOREIGN KEY (ProductID) REFERENCES product (ProductID) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'orders'
--
ALTER TABLE orders
  ADD CONSTRAINT FK_Orders_User FOREIGN KEY (UserID) REFERENCES user (UserID) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_Orders_PaymentMethod FOREIGN KEY (PaymentMethodID) REFERENCES payment_method (PaymentMethodID) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'order_detail'
--
ALTER TABLE order_detail
  ADD CONSTRAINT FK_OrdersDetail_Orders FOREIGN KEY (OrderID) REFERENCES orders (OrderID) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_OrdersDetail_Product FOREIGN KEY (ProductID) REFERENCES product (ProductID) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE product
  ADD CONSTRAINT FK_Product_Categories FOREIGN KEY (CategoriesID) REFERENCES categories (CategoriesID) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_Product_Discount FOREIGN KEY (DiscountID) REFERENCES discount (DiscountID) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE user
  ADD CONSTRAINT FK_User_Role FOREIGN KEY (RoleId) REFERENCES role (id) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
