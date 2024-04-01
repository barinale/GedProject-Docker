<?php
    include_once(__DIR__.'/../Library/readingView.php');
    include_once(__DIR__.'/../Models/fileModel.php');
    include_once(__DIR__.'/../Models/dashboardModel.php');
    class DashboardController{
        public function Index(){
            $dashboardModel = new DashboardModel();
            $data = $dashboardModel->index();
            return view('Home.php',$data);
        }


    }