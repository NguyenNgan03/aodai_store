<?php

   include 'app\models\user.php';

    class DashboardController extends AdminController
    {
        private $user;

        public function __construct()
        {
            $this->user = new User;
        }

        public function index()
        {
            parent::template('app\views\admin\dashboards\index.php'); 
        }
    }
?>