<?php
include 'app\models\Comment.php';


class CommentController extends CustomerController
{
    private $comment;

    public function __construct()
    {
        $this->comment = new comment;
    }

    public function index()
    {
        $data['comments'] = $this->comment->index();
        parent::template('app\views\users\Products\detail.php', $data);
    }

    public function getCreate()
    {
        parent::template("app\views\users\Products\detail.php");
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['content'];

            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $content = $_POST['content'];

            $result = $this->comment->create($content);
            if ($result) {
                $this->displayComments();
            } else {
                echo "Thêm bình luận không thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function displayComments()
    {
        $data['comments'] = $this->comment->index();

        $commentList = '';
        foreach ($data['comments'] as $comment) {
            $commentList .= '<li><strong>' . $comment['content'] . ':</strong> ' . $comment['created_at'] . '</li>';
        }

        echo $commentList;
    }
}
