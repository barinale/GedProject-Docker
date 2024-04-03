<?php
namespace Ged\classes;

    class Email extends File{
        // private string $path;
        private string $emailSender;
        private string $emailReceiver;
        private \DateTime $dateSend;
        public function __construct(int $id_user,string $name,string $path){
            parent::__construct($id_user,$name,$path);

        }
        public function getEmailSender(): string {

            return $this->emailSender;
        }
    
        public function setEmailSender(string $sender): void {
            $this->emailSender = $sender;
        }
        public function getEmailReceiver(): string {
            return $this->emailReceiver;
        }
    
        public function setEmailReceiver(string $receiver): void {
            $this->emailReceiver = $receiver;
        }
    
        public function getDateSend(): \DateTime {
            return $this->dateSend;
        }

        public function setDateSend(\DateTime $date): void {
            $this->dateSend = $date;
        }

        public function save(){
            echo $this->name;
        }
        
        public static function transaction($mysql,int $id,string $emailR,string $emailS,$dataSend ){
            
            $stmt2 = $mysql->prepare("INSERT INTO email (file_id , email_description,email_sender,date_sent) VALUES (?,?,?,?)");
            $stmt2->bind_param("isss",$id, $emailR, $emailS,$dataSend);
            $stmt2->execute();
            $stmt2->close();
        }
          //function For Getting All Recorde related To email
          public static function GetAll($con){
            $query="SELECT f.name,f.path,u.email_description,u.email_sender,u.date_sent
            FROM email u
            LEFT JOIN file f ON f.id = u.file_id";
            $result = $con->query($query);
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            return $rows;
        }
        // //Validate Email Function 
        // function validateEmail($email) {
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         echo "{$email}: A valid email"."<br>";
        //     }
        //     else {
        //         echo "{$email}: Not a valid email"."<br>";
        //     }
        // }

    }