<?php
include 'app\models\Comment.php';
include 'app\models\User.php';
class CommentController extends CustomerController
{
    private $comment;
    private $user;

    public function __construct()
    {
        $this->comment = new comment;
        $this->user = new user;
    }

    public function index()
    {
        $data['comments'] = $this->comment->index();
        parent::template('app\views\users\Products\detail.php', $data);
    }
    
    public function createComment()
    {
        var_dump($_POST);
        $username = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        if ($username !== null) {
            $user =  $this->user->getUserByUsername($username)[0];
            $content = $_POST["content"];
            $product_id = $_POST["product_id"];
            $this->comment->add($content, $product_id, $user["id"]);
            header('Location: ?controller=product&action=detail&page=customer&id=' . $product_id);
        } else {
            header('Location: ?controller=User&action=getLogin&page=Customer');
        }
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
