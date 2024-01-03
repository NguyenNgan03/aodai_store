<?php

   include '';

    class DashboardController extends AdminController
    {
        public function index()
        {
            parent::template('views/admin/dashboards/index.php');
        }
    }
?>