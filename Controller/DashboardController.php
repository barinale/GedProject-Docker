<?php
    include_once(__DIR__.'/../Library/readingView.php');
    class DashboardController{
        public function Index(){
            return view('Home.php');
        }


    }