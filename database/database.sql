CREATE DATABASE aodaistore_sql;
USE aodaistore_sql;


CREATE TABLE users (
id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(255) NOT NULL,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
birthday DATE NOT NULL,
gender ENUM('Male', 'Female') NOT NULL,
email VARCHAR(50) NOT NULL,
phone VARCHAR(15) NOT NULL,
address varchar(255) DEFAULT NULL,
avatar VARCHAR(30) NOT NULL,
role VARCHAR(30) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO users (`id`, `username`, `password`, `first_name`, `last_name`, `birthday`, `gender`, `email`, `phone`, `address`,  `avatar`, `role`, `created_at`, `updated_at`) VALUES
('Nguyễn Văn A', 'hashed_password_1', 'Nguyễn', 'A', '1990-05-15', 'Male', 'nguyen.van.a@example.com', '1234567890','123 Đường A, Quận 1, Thành phố Hồ Chí Minh', 'user1.jpg', 'user', '2023-01-10 08:30:00', '2023-01-10 08:30:00'),
('Trần Thị B', 'hashed_password_2', 'Trần', 'B', '1985-08-22', 'Female', 'tran.thi.b@example.com', '9876543210', '456 Đường B, Quận 2, Thành phố Hồ Chí Minh', 'user2.jpg', 'admin', '2023-01-11 10:45:00', '2023-01-11 10:45:00'),
('Lê Minh C', 'hashed_password_3', 'Lê', 'C', '1988-12-10', 'Male', 'le.minh.c@example.com', '5678901234', '789 Đường C, Quận 3, Thành phố Hồ Chí Minh', 'user3.jpg', 'user','2023-01-12 12:15:00', '2023-01-12 12:15:00');

CREATE TABLE banner (
  id int(11) NOT NULL,
  Name varchar(150) DEFAULT NULL,
  Image varchar(255) DEFAULT NULL,
  sActive tinyint(1) DEFAULT NULL,
  Visible int(11) DEFAULT NULL,
  Description varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO banner (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(1, 'banner trái', 'banner-1-banner-trai.jpg', 1, 1, 'banner bên trái'),
(2, 'banner phải', 'banner-2-banner-phai.jpg', 1, 2, 'banner bên phải'),
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới'),
(5, '1 trung tam', 'banner-5-1-trung-tam1 trung tam.jpg', 0, 4, 'sdadadasd');


CREATE TABLE categories (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name varchar(150) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO categories (`id`, `name`,`created_at`,`updated_at`) VALUES
('Áo dài cách tân','2023-01-10 08:30:00', '2023-01-10 08:30:00'),
('Áo dài lụa', '2023-01-11 10:45:00', '2023-01-11 10:45:00'),
('Áo dài cưới', '2023-01-12 12:15:00', '2023-01-12 12:15:00'),
('Áo dài truyền thống','2023-01-13 14:20:00', '2023-01-13 14:20:00'),
( 'Áo dài cho bé', '2023-01-14 16:00:00', '2023-01-14 16:00:00'),
('Áo dài nam', '2023-01-15 18:30:00', '2023-01-15 18:30:00' );


CREATE TABLE comments (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  product_id int(11) DEFAULT NULL,
  content text,
  user_name varchar(150) DEFAULT NULL,
  email varchar(150) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO comments (`id`, `product_id`, `content`, `user_name`, `email`, `created_at`,`updated_at`) VALUES
(101, 'Sản phẩm tuyệt vời!', 'John Doe', 'john.doe@example.com', '2023-01-10 08:30:00', '2023-01-10 08:30:00'),
(102, 'Thiết kế đẹp mắt.', 'Jane Smith', 'jane.smith@example.com', '2023-01-11 10:45:00', '2023-01-11 10:45:00');


CREATE TABLE contact_info (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_name varchar(150) NOT NULL,
  address varchar(100) NOT NULL,
  phone varchar(20) NOT NULL,
  email varchar(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO contact_info (`id`, `user_name`, `address`, `phone`, `email`,`created_at`,`updated_at`) VALUES
('Nguyễn Văn A', '123 Đường ABC',  '123-456-7890', 'nguyenvana@example.com', '2023-01-10 08:30:00', '2023-01-10 08:30:00'),
('Trần Thị B', '456 Đường XYZ',  '987-654-3210', 'tranthib@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00'),
('Lê Văn C', '789 Đường MNO',  '555-123-4567', 'levanc@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00'),
('Hoàng Thị D', '321 Đường QWE',  '333-999-8888', 'hoangthid@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00'),
('Phạm Văn E', '654 Đường HIJ', '777-444-5555', 'phamvane@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00');


CREATE TABLE imageslide (
  ImageslideID int(11) NOT NULL,
  Image varchar(255) DEFAULT NULL,
  SlideID int(1) DEFAULT NULL,
  IsActive tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO imageslide (`ImageslideID`, `Image`, `SlideID`, `IsActive`) VALUES
(1, 'slide1.jpg', 1, 1),
(2, 'slide2.jpg', 2, 1),
(3, 'slide3.jpg', 3, 0),
(4, 'slide4.jpg', 4, 1),
(5, 'slide5.jpg', 5, 1);


CREATE TABLE orders (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id int(11) NOT NULL,
  order_date date NOT NULL,
  shipping_address varchar(200) NOT NULL,
  shipping_date date NOT NULL,
  notes varchar(20) NOT NULL,
  payment_status varchar(20) NOT NULL,
  shipping_status varchar(20) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO orders (`id`, `user_id`, `order_date`, `shipping_address`, `shipping_date`, `notes`, `payment_status`, `shipping_status`, `created_at`, `updated_at`) VALUES
(1, '2023-01-15', '123 Đường A, Quận 1, Thành phố Hồ Chí Minh', '2023-01-20', 'Ghi chú đơn hàng 1', 'Đã thanh toán', 'Đang giao hàng','2023-01-10 08:30:00', '2023-01-10 08:30:00'),
(2, '2023-02-01', '456 Đường B, Quận 2, Thành phố Hồ Chí Minh', '2023-02-05', 'Ghi chú đơn hàng 2', 'Chưa thanh toán', 'Chưa giao hàng', '2023-01-12 10:45:00', '2023-01-12 10:45:00'),
(1, '2023-02-10', '789 Đường C, Quận 3, Thành phố Hồ Chí Minh', '2023-02-15', 'Ghi chú đơn hàng 3', 'Đã thanh toán', 'Đã giao hàng', '2023-01-14 12:15:00', '2023-01-14 12:15:00'),
(3, '2023-03-05', '101 Đường D, Quận 4, Thành phố Hồ Chí Minh', '2023-03-10', 'Ghi chú đơn hàng 4', 'Đã thanh toán', 'Đang giao hàng', '2023-01-16 14:20:00', '2023-01-16 14:20:00'),
(2, '2023-03-20', '202 Đường E, Quận 5, Thành phố Hồ Chí Minh', '2023-03-25', 'Ghi chú đơn hàng 5', 'Chưa thanh toán', 'Chưa giao hàng', '2023-01-18 16:00:00', '2023-01-18 16:00:00');


CREATE TABLE order_detail (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  order_id int(11) NOT NULL,
  product_id int(11) NOT NULL,
  quantity int(11) NOT NULL,
  price float NOT NULL
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO order_detail (`id`, `order_id`, `product_id`, `quantity`, `price`,`created_at`,`updated_at`) VALUES
(1, 1, 101, 2, 5000000),
(2, 1, 102, 1, 3000000),
(3, 2, 103, 3, 1500000),
(6, 3, 106, 2, 2500000);


CREATE TABLE products (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  discount_id int(11) NOT NULL,
  name varchar(550) DEFAULT NULL,
  category_id int(11) DEFAULT NULL,
  description longtext,
  price int(11) NOT NULL,
  Color varchar(250) DEFAULT NULL,
  vaterial varchar(250) DEFAULT NULL,
  size varchar(20) NOT NULL,
  image1 varchar(250) DEFAULT NULL,
  image2 varchar(250) DEFAULT NULL,
  image3 varchar(260) NOT NULL,
  image4 varchar(260) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO products (`id`, `discount_id`, `name`, `category_id`, `description`, `price`, `Color`, `Price`, `Color`, `vaterial`, `size`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`) VALUES
(2,'Áo dài truyền thống nam', NULL, 'Áo dài truyền thống nam chất liệu lụa', 1500000, 'Hồng', 'Lụa', 'L, XL', 'ao_dai_nam_1.jpg', 'ao_dai_nam_2.jpg', 'ao_dai_nam_3.jpg', 'ao_dai_nam_4.jpg','2023-01-14 12:15:00', '2023-01-14 12:15:00'),
(1,'Áo dài cách tân nữ', NULL, 'Áo dài cách tân nữ thiết kế hiện đại', 1200000, 'Trắng', 'Cotton', 'S, M, L', 'ao_dai_nu_1.jpg', 'ao_dai_nu_2.jpg', 'ao_dai_nu_3.jpg', 'ao_dai_nu_4.jpg', '2023-01-18 16:00:00', '2023-01-18 16:00:00');


CREATE TABLE type (
  id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name varchar(30) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO type (`TypeID`, `TypeName`, `Description`, `alias`) VALUES
(1, 'SẢN PHẨM NỔI BẬT','2023-01-14 12:15:00', '2023-01-14 12:15:00'),
(2, 'SẢN PHẨM MỚI','2023-01-14 12:15:00', '2023-01-14 12:15:00'),
(3, 'SẢN PHẨM KHUYẾN MẠI', '2023-01-14 12:15:00', '2023-01-14 12:15:00');


CREATE TABLE user_online (
  session varchar(100) NOT NULL DEFAULT '''''',
  time int(11) NOT NULL DEFAULT '0',
  ip varchar(24) NOT NULL,
  browser varchar(50) NOT NULL,
  dateonline date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO user_online (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
('abcdef123456', 600, '192.168.0.1', 'Chrome', '2023-01-10'),
('ghijkl789012', 300, '192.168.0.2', 'Firefox', '2023-01-11'),
('mnopqr345678', 900, '192.168.0.3', 'Safari', '2023-01-12'),
('stuvwx901234', 1200, '192.168.0.4', 'Edge', '2023-01-13'),
('yzabcd567890', 450, '192.168.0.5', 'Opera', '2023-01-14');

ALTER TABLE contact_info
ADD FOREIGN KEY (user_name) REFERENCES users(username);

ALTER TABLE orders
ADD FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE order_detail
ADD FOREIGN KEY (order_id) REFERENCES orders(id),
ADD FOREIGN KEY (product_id) REFERENCES product(id);

ALTER TABLE product
ADD FOREIGN KEY (category_id) REFERENCES categories(id);

ALTER TABLE product
ADD FOREIGN KEY (discount_id) REFERENCES type(id);

ALTER TABLE comments
ADD FOREIGN KEY (product_id) REFERENCES product(id);