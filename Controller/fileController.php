<?php

    include_once(__DIR__.'/../Library/readingView.php');

    class FileController{
        public function index(){
            return view("./FileViews/fileAdd.php");
        }
    }