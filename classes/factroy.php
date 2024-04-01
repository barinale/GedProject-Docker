<?php  
include_once(__DIR__.'/../classes/file.php');
    class Factroy extends File{

        public function __construct(int $id_user, string $name, string $path){

        }
        public function  save(){

        }
        public static function transaction($mysql,int $id,string $socirty,
        float $amount ){
            try{
            $stmt2 = $mysql->prepare("INSERT INTO factory (file_id , company,amount) VALUES (?,?,?)");
            $stmt2->bind_param("iss",$id, $socirty, $amount);
            $stmt2->execute();
            $stmt2->close();
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }
        }

    }