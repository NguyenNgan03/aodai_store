<?php
include 'app\models\Comment.php';


class CommentController extends AdminController
{
    private $comment;

    public function __construct()
    {
        $this->comment = new comment;
    }

    public function index()
    {
        $data['comments'] = $this->comment->index();
        parent::template('app\views\admin\comments\index.php', $data);
    }

    public function getCreate()
    {
        parent::template("app/views/admin/comments/create.php");
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['product_id', 'user_id', 'content'];

            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            $content = $_POST['content'];

            $result = $this->comment->create($product_id, $user_id, $content);
            if ($result) {
                header('location:?controller=comment&action=index&page=admin');
            } else {
                echo "Thêm sản phẩm không thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $comment = new comment();
            $data['comments'] = $this->comment->getCommentById($_GET['id']);
            parent::template("app/views/admin/comments/edit.php", $data);
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['product_id', 'user_id', 'content'];

            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }
            $id = $_POST['id'];
            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            $content = $_POST['content'];

            $result = $this->comment->update($id, $product_id, $user_id, $content);
            if ($result) {
                header('location:?controller=comment&action=index&page=admin');
            } else {
                echo "cập nhật thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $this->comment->delete($id);
            if ($result) {
                header('location:?controller=comment&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=comment&action=index&page=admin');</script>";
            }
        }
    }
}
