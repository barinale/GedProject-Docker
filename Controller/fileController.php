<?php

    include_once(__DIR__.'/../Library/readingView.php');

    class FileController{
        public function index(){
            return view("./FileViews/fileAdd.php");
        }

        //function For Adding File 
        public function addFile(){

            if(isset($_POST['name']) && isset($_FILES['file']) && 
            isset($_POST['type_file'])){
                    if(!$this->fileValidation($_FILES['file'])){
                        return false;
                    }



                switch($_POST['type_file']){
                        case 'Email':
                            if(isset($_POST['emailSender']) && isset($_POST['emailReceiver']) &&
                            isset($_POST['dateSend']))
                            


                        break;
                };



            }            


        }

        //function for validation file
        public function fileValidation(){
            var_dump($_FILES["file"]);
            // Check if file was uploaded without errors
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $targetDir = "./uploads/"; // Directory where the file will be stored
            $targetFile = $targetDir . basename($_FILES["file"]["name"]);
            $uploadOk = true; // Flag to check if file upload was successful
            // Check if file already exists
            if (file_exists($targetFile)) {
                echo "Sorry, file already exists.";
                $uploadOk = false;
            }

            // Check file size
            if ($_FILES["file"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = false;
            }

            // Allow certain file formats
            $allowedExtensions = array("jpg", "jpeg", "png","pdf");
            $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = false;
            }
            // Check if $uploadOk is set to false by an error
            if ($uploadOk) {
                // Attempt to move the uploaded file to the target directory
                if (move_uploaded_file($_FILES["file"]["tmp_name"], "./")) {
                    echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
                } else {
                    echo $targetFile ."</br>";
                    echo "ejfefefe";
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            } else {
            echo "No file uploaded or an error occurred during upload.";
            }
            }
        }
    