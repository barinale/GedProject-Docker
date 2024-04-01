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

             //function For Getting All Recorde related To estimate
            public static function GetAll($con){
                        $query="SELECT f.name,f.path,u.company,u.amount
                        FROM factory u
                        LEFT JOIN file f ON f.id = u.file_id";
                        $result = $con->query($query);
                        $rows = $result->fetch_all(MYSQLI_ASSOC);
                        return $rows;
            }

}