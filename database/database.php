<?php
class Database
{
    // Các thông tin kết nối đến cơ sở dữ liệu
    private $host = 'localhost';      // Địa chỉ host của MySQL
    private $database = 'aodaistore_sql';  // Tên cơ sở dữ liệu
    private $user = 'root';           // Tên người dùng của MySQL
    private $password = 'mysql';      // Mật khẩu của MySQL

    // Biến lưu trữ đối tượng PDO cho kết nối
    private $connection;
    // Hàm khởi tạo, sẽ được gọi khi một đối tượng của class được tạo ra
    public function __construct()
    {
        // Gọi hàm kết nối và lưu trữ đối tượng PDO vào biến $connection
        $this->connection = $this->connect();
    }
    // Hàm kết nối đến cơ sở dữ liệu sử dụng PDO
    private function connect()
    {
        try {
            // Tạo một đối tượng PDO với thông tin kết nối
            $connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
            // Thiết lập chế độ báo lỗi và ngoại lệ cho PDO
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            // Trả về đối tượng PDO đã tạo
            return $connection;
        } catch (PDOException $e) {
            // Nếu có lỗi trong quá trình kết nối, ném ra một ngoại lệ Exception
            throw new Exception("kết nối db lỗi: " . $e->getMessage());
        }
        
    }
    
    
    
    // Hàm trả về đối tượng PDO cho việc sử dụng trong các câu truy vấn SQL
    public function getConnection()
    {
        return $this->connection;
    }
    public function getData($tableName, $params)
    {
        $conditions = '';
        foreach ($params as $key => $value) {
            $conditions .= "$key = :$key AND ";
        }
        $conditions = rtrim($conditions, ' AND ');

        $query = "SELECT * FROM $tableName WHERE $conditions";

        try {
            $stmt = $this->connection->prepare($query);
            foreach ($params as $key => $value) {
                $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
            }
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            throw new Exception("Query failed: " . $e->getMessage());
        }
}
}
