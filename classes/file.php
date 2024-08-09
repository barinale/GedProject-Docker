<?php
interface FileStructure{
     public function save();
}
    abstract class File implements FileStructure{
        //varaible For Holding PathDirectory to use it 
        //in insert database File path
        public static string $Path;
        public function __construct( int $id_user, string $name, string $path){
            
        }
        //Fucntion For Delete File From storage
        public static function DeleteFile($PathToFile){
            if(file_exists(__DIR__."/../".$PathToFile)){
                // Delete the file
                if (unlink($PathToFile)) {
                    echo "File $PathToFile deleted successfully.";
                }else{
                    echo "File Not Found ";
                }
            }
        }
        //function For Check Validate File
        public static function ValidateFile($file) : bool{ //here was return for mixed but it give me error so a change it
            if ($file["error"] == 0) {
                $targetDir = "uploads/";
                 // Directory where the file will be stored
                //   // Ensure the directory exists and is writable
                    if (!file_exists($targetDir)) {
                        mkdir($targetDir, 0777, true);
                    }
                    $targetFile = $targetDir . basename($file["name"]);  
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
                        // Attempt to move the uploaded file to the target directory
                if($uploadOk){
                     if (move_uploaded_file($_FILES["file"]["tmp_name"],$targetFile)) {
                        echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
                        File::$Path = $targetFile;
                    } else {
                   echo $targetFile ."</br>";
                   echo "Sorry, there was an error uploading your file.";
                 }
                }
               } else {
               echo "No file uploaded or an error occurred during upload.";
               }
               return $uploadOk;
            
        }
        //for transction tak $mysql @string name for NameFile
        //and @path For Path File
        public static function transction($mysql,string $name,string $path):int{
                 // Prepare INSERT statement for table 1
                 $stmt1 = $mysql->prepare("INSERT INTO file (name, path) VALUES (?, ?)");
                 $stmt1->bind_param("ss", $name, $path);
                 $stmt1->execute();
                 $stmt1->close();
                     return $mysql->insert_id;
        }
    }