-- Create the database
CREATE DATABASE IF NOT EXISTS aodaistore_sql;
USE aodaistore_sql;

-- Create the users table
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
    address VARCHAR(255) DEFAULT NULL,
    avatar VARCHAR(30) NOT NULL,
    role VARCHAR(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the users table
INSERT INTO users (`username`, `password`, `first_name`, `last_name`, `birthday`, `gender`, `email`, `phone`, `address`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
    ('Nguyễn Văn A', 'hashed_password_1', 'Nguyễn', 'A', '1990-05-15', 'Male', 'nguyen.van.a@example.com', '1234567890', '123 Đường A, Quận 1, Thành phố Hồ Chí Minh', 'user1.jpg', 'user', '2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    ('Trần Thị B', 'hashed_password_2', 'Trần', 'B', '1985-08-22', 'Female', 'tran.thi.b@example.com', '9876543210', '456 Đường B, Quận 2, Thành phố Hồ Chí Minh', 'user2.jpg', 'admin', '2023-01-11 10:45:00', '2023-01-11 10:45:00'),
    ('Lê Minh C', 'hashed_password_3', 'Lê', 'C', '1988-12-10', 'Male', 'le.minh.c@example.com', '5678901234', '789 Đường C, Quận 3, Thành phố Hồ Chí Minh', 'user3.jpg', 'user', '2023-01-12 12:15:00', '2023-01-12 12:15:00');

-- Create the categories table
CREATE TABLE categories (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the categories table
INSERT INTO categories (`name`,`created_at`,`updated_at`) VALUES
    ('Áo dài cách tân','2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    ('Áo dài lụa', '2023-01-11 10:45:00', '2023-01-11 10:45:00'),
    ('Áo dài cưới', '2023-01-12 12:15:00', '2023-01-12 12:15:00'),
    ('Áo dài truyền thống','2023-01-13 14:20:00', '2023-01-13 14:20:00'),
    ('Áo dài cho bé', '2023-01-14 16:00:00', '2023-01-14 16:00:00'),
    ('Áo dài nam', '2023-01-15 18:30:00', '2023-01-15 18:30:00' );

-- Create the comments table
CREATE TABLE comments (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_id INT(7) DEFAULT NULL,
    user_id INT(7) DEFAULT NULL,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the comments table
INSERT INTO comments (`product_id`,`user_id`, `content`,`created_at`,`updated_at`) VALUES
    (101,1, 'Sản phẩm tuyệt vời!','2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    (102,2, 'Thiết kế đẹp mắt.','2023-01-11 10:45:00', '2023-01-11 10:45:00');

-- Create the discounts table
CREATE TABLE discounts (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    discount_rate DECIMAL(5,2) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the discounts table
INSERT INTO discounts (name, discount_rate, start_date, end_date, created_at, updated_at) VALUES
    ('free ship', 15.50, '2023-03-01', '2023-03-31', '2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    ('Ưu đãi Hè Sôi Động', 12.75, '2023-06-01', '2023-08-31', '2023-01-11 10:45:00', '2023-01-11 10:45:00'),
    ('Giảm giá Lễ Tết', 20.00, '2023-12-20', '2024-01-10', '2023-01-12 12:15:00', '2023-01-12 12:15:00');

-- Create the contact_info table
CREATE TABLE contact_info (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(7) NOT NULL,
    address VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the contact_info table
INSERT INTO contact_info (`user_id`, `address`, `phone`, `email`,`created_at`,`updated_at`) VALUES
    (1, '123 Đường ABC',  '123-456-7890', 'nguyenvana@example.com', '2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    (2, '456 Đường XYZ',  '987-654-3210', 'tranthib@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00'),
    (3, '789 Đường MNO',  '555-123-4567', 'levanc@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00'),
    (4, '321 Đường QWE',  '333-999-8888', 'hoangthid@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00'),
    (5, '654 Đường HIJ', '777-444-5555', 'phamvane@example.com','2023-01-11 10:45:00', '2023-01-11 10:45:00');

-- Create the orders table
CREATE TABLE orders (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(7) NOT NULL,
    order_date DATE NOT NULL,
    shipping_address VARCHAR(200) NOT NULL,
    shipping_date DATE NOT NULL,
    notes VARCHAR(20) NOT NULL,
    payment_status VARCHAR(20) NOT NULL,
    shipping_status VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the orders table
INSERT INTO orders (`user_id`,`order_date`, `shipping_address`, `shipping_date`, `notes`, `payment_status`, `shipping_status`, `created_at`, `updated_at`) VALUES
    (1, '2023-01-15', '123 Đường A, Quận 1, Thành phố Hồ Chí Minh', '2023-01-20', 'Ghi chú đơn hàng 1', 'Đã thanh toán', 'Đang giao hàng','2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    (2, '2023-02-01', '456 Đường B, Quận 2, Thành phố Hồ Chí Minh', '2023-02-05', 'Ghi chú đơn hàng 2', 'Chưa thanh toán', 'Chưa giao hàng', '2023-01-12 10:45:00', '2023-01-12 10:45:00'),
    (1, '2023-02-10', '789 Đường C, Quận 3, Thành phố Hồ Chí Minh', '2023-02-15', 'Ghi chú đơn hàng 3', 'Đã thanh toán', 'Đã giao hàng', '2023-01-14 12:15:00', '2023-01-14 12:15:00'),
    (3, '2023-03-05', '101 Đường D, Quận 4, Thành phố Hồ Chí Minh', '2023-03-10', 'Ghi chú đơn hàng 4', 'Đã thanh toán', 'Đang giao hàng', '2023-01-16 14:20:00', '2023-01-16 14:20:00'),
    (2, '2023-03-20', '202 Đường E, Quận 5, Thành phố Hồ Chí Minh', '2023-03-25', 'Ghi chú đơn hàng 5', 'Chưa thanh toán', 'Chưa giao hàng', '2023-01-18 16:00:00', '2023-01-18 16:00:00');

-- Create the order_detail table
CREATE TABLE order_detail (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_id  INT(7) NOT NULL,
    product_id  INT(7) NOT NULL,
    quantity INT(11) NOT NULL,
    price FLOAT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the order_detail table
INSERT INTO order_detail (`order_id`, `product_id`, `quantity`, `price`,`created_at`,`updated_at`) VALUES
    ( 1, 2,101, 5000000,'2023-01-10 08:30:00', '2023-01-10 08:30:00'),
    ( 2, 1, 102, 3000000,'2023-01-12 10:45:00', '2023-01-12 10:45:00');

-- Create the products table
CREATE TABLE products (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    discount_id INT(7) NOT NULL,
    name VARCHAR(550) NOT NULL,
    category_id INT(7) NOT NULL,
    description LONGTEXT,
    price INT(11) NOT NULL,
    color VARCHAR(250) DEFAULT NULL,
    material VARCHAR(250) DEFAULT NULL,
    size VARCHAR(20) NOT NULL,
    image1 VARCHAR(250) DEFAULT NULL,
    image2 VARCHAR(250) DEFAULT NULL,
    image3 VARCHAR(260) NOT NULL,
    image4 VARCHAR(260) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the products table
INSERT INTO products (`discount_id`, `name`, `category_id`, `description`, `price`, `color`, `material`, `size`,`image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`) VALUES
    (2,'Áo dài truyền thống nam', 1, 'Áo dài truyền thống nam chất liệu lụa', 1500000, 'Hồng', 'Lụa', 'L, XL', 'ao_dai_nam_1.jpg', 'ao_dai_nam_2.jpg', 'ao_dai_nam_3.jpg', 'ao_dai_nam_4.jpg','2023-01-14 12:15:00', '2023-01-14 12:15:00'),
    (1,'Áo dài cách tân nữ', 2, 'Áo dài cách tân nữ thiết kế hiện đại', 1200000, 'Trắng', 'Cotton', 'S, M, L', 'ao_dai_nu_1.jpg', 'ao_dai_nu_2.jpg', 'ao_dai_nu_3.jpg', 'ao_dai_nu_4.jpg', '2023-01-18 16:00:00', '2023-01-18 16:00:00');

-- Create the user_online table
CREATE TABLE user_online (
    session VARCHAR(100) NOT NULL DEFAULT '''''',
    time INT(11) NOT NULL DEFAULT '0',
    ip VARCHAR(24) NOT NULL,
    browser VARCHAR(50) NOT NULL,
    dateonline DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the user_online table
INSERT INTO user_online (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
    ('abcdef123456', 600, '192.168.0.1', 'Chrome', '2023-01-10'),
    ('ghijkl789012', 300, '192.168.0.2', 'Firefox', '2023-01-11'),
    ('mnopqr345678', 900, '192.168.0.3', 'Safari', '2023-01-12'),
    ('stuvwx901234', 1200, '192.168.0.4', 'Edge', '2023-01-13'),
    ('yzabcd567890', 450, '192.168.0.5', 'Opera', '2023-01-14');

-- Create the user_online table
CREATE TABLE vourchers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    vourcher_code VARCHAR(255) NOT NULL,
    expiration_date DATE,
    discount_amount DECIMAL(10, 2),
    user_id INT(7) NOT NULL,
    status VARCHAR(50),
    applicable_products TEXT,
    usage_history TEXT,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert sample data into the vourchers table
INSERT INTO vourchers (vourcher_code, expiration_date, discount_amount, user_id, status, applicable_products, usage_history, description)
VALUES
('MaVoucher123', '2024-01-31', 20.00, 1, 'Hoạt động', 'Sản PhẩmA, Sản PhẩmB', 'Đã sử dụng vào ngày 2024-01-05', 'Ưu đãi cho Chương trình Giảm giá tháng 1'),
('MaVoucher456', '2024-02-28', 15.50, 2, 'Ngưng hoạt động', 'Sản PhẩmC', 'Chưa sử dụng', 'Ưu đãi đặc biệt cho Sản PhẩmC'),
('MaVoucher789', '2024-03-15', 30.00, 3, 'Hoạt động', 'Tất cả Sản Phẩm', 'Đã sử dụng vào ngày 2024-01-10', 'Ưu đãi tổng quát'),
('MaVoucherABC', '2024-04-30', 25.00, 4, 'Hoạt động', 'Sản PhẩmD, Sản PhẩmE', 'Chưa sử dụng', 'Ưu đãi cho sản phẩm mới'),
('MaVoucherXYZ', '2024-05-31', 10.00, 5, 'Hoạt động', 'Sản PhẩmF', 'Chưa sử dụng', 'Ưu đãi có hạn thời gian');


-- Add foreign key constraints
ALTER TABLE contact_info
    ADD FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE orders
    ADD FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE order_detail
    ADD FOREIGN KEY (order_id) REFERENCES orders(id),
    ADD FOREIGN KEY (product_id) REFERENCES products(id);

ALTER TABLE products
    ADD FOREIGN KEY (category_id) REFERENCES categories(id),
    ADD FOREIGN KEY (discount_id) REFERENCES discounts(id);

ALTER TABLE comments
    ADD FOREIGN KEY (product_id) REFERENCES products(id),
    ADD FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE vourchers
    ADD FOREIGN KEY (user_id) REFERENCES users(id);
