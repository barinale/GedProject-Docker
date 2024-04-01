<?php

    include_once(__DIR__.'/../Library/readingView.php');
    include_once(__DIR__.'/../Models/fileModel.php');
    class FileController{
        private $dirPath;
        public function index(){
            return view("./FileViews/fileAdd.php");
        }

        //function For Adding File 
        public function addFile(){
            //variable to check if procces of Adding File complete if Not   Remove File from storage
                $drop = true;
            if(isset($_POST['name']) && isset($_FILES['file']) && 
                                     isset($_POST['type_file'])){
                    if(!File::ValidateFile($_FILES['file'])){
                        return false;
                    }
                    $this->dirPath = File::$Path;
                    echo $_POST['amount'];
                switch($_POST['type_file']){
                        case 'Email':
                            try{
                                if(isset($_POST['emailSender']) && isset($_POST['emailReceiver']) &&
                                    isset($_POST['dateSend'])){
                          
                            $drop = fileModel::EmailInsert($_POST['name'],$this->dirPath,$_POST['emailSender'],$_POST['emailReceiver'],$_POST['dateSend']);
                            }
                        }
                         catch(Exception $e)
                            {
                                $drop = false;
                                echo "somethong Went Wront";
                            }

                        break;
                        case 'Factory':

                                if(isset($_POST['society']) && isset($_POST['Factoryamount'])){
                                    try{
                                    $drop = fileModel::facrtoyInsert($_POST['name'],$this->dirPath,$_POST['society'],$_POST['Factoryamount']);
                                    }catch(Exception $e){
                                        echo $e->getMessage();
                                        $drop=false;
                                    }
                                }else
                                $drop=false;

                                
                            break;
                            case 'Command':
                                if(isset($_POST['stuffCommand']) && isset($_POST['totalAmount'])){
                                    try{
                                    $drop = fileModel::commandInsertion($_POST['name'],$this->dirPath,$_POST['stuffCommand'],$_POST['totalAmount']);
                                    }catch(Exception $e){
                                        echo $e->getMessage();
                                        $drop=false;
                                    }
                                }else
                                $drop=false;
                            break;
                            case 'Quote':
                                if(isset($_POST['stuffToBuy']) && isset($_POST['amount'])){
                                    try{
                                    $drop = fileModel::estimateInsertion($_POST['name'],$this->dirPath,$_POST['stuffToBuy'],$_POST['amount']);
                                        }catch(Exception $e){
                                        echo $e->getMessage();
                                        $drop=false;
                                    }
                                }else
                                $drop=false;
                                break;
                };
                if(!$drop){
                    File::DeleteFile($this->dirPath);
                }



            }            


        }

        //function for validation file
        // public function fileValidation() : bool{
        //     // Check if file was uploaded without errors
        // if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        //     $targetDir = "uploads/"; // Directory where the file will be stored
        //     //   // Ensure the directory exists and is writable
        //         if (!file_exists($targetDir)) {
        //             mkdir($targetDir, 0777, true);
        //         }
        //     $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        //     $uploadOk = true; // Flag to check if file upload was successful
        //     // Check if file already exists
        //     if (file_exists($targetFile)) {
        //         echo "Sorry, file already exists.";
        //         $uploadOk = false;
        //     }

        //     // Check file size
        //     if ($_FILES["file"]["size"] > 500000) {
        //         echo "Sorry, your file is too large.";
        //         $uploadOk = false;
        //     }

        //     // Allow certain file formats
        //     $allowedExtensions = array("jpg", "jpeg", "png","pdf");
        //     $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        //     if (!in_array($fileExtension, $allowedExtensions)) {
        //         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //         $uploadOk = false;
        //     }
        //      // Attempt to move the uploaded file to the target directory
        //      if($uploadOk){
        //      if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        //         echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        //         $this->dirPath = $targetFile;
        //     } else {
        //         echo $targetFile ."</br>";
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // }
        //     } else {
        //     echo "No file uploaded or an error occurred during upload.";
        //     }
        //     return $uploadOk;
        //     }
          
        }


        
    