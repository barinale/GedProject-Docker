<?php
    class Email extends File{
        // private string $path;
        private string $emailSender;
        private string $emailReceiver;
        private DateTime $dateSend;
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
    
        public function getDateSend(): DateTime {
            return $this->dateSend;
        }

        public function setDateSend(DateTime $date): void {
            $this->dateSend = $date;
        }

        public function save(){
            echo $this->name;
        }
        
        public static function transactionE($pdo, int $id, string $emailR, string $emailS, string $dataSend): void {
            $stmt2 = $pdo->prepare("INSERT INTO email (file_id, email_description, email_sender, date_sent) VALUES (:file_id, :email_description, :email_sender, :date_sent)");
            
            // Bind parameters
            $stmt2->bindParam(':file_id', $id, \PDO::PARAM_INT);
            $stmt2->bindParam(':email_description', $emailR);
            $stmt2->bindParam(':email_sender', $emailS);
            $stmt2->bindParam(':date_sent', $dataSend);
            
            // Execute the statement
            $stmt2->execute();
        }
        
          //function For Getting All Recorde related To email
          public static function GetAll($con) {
            $query = 'SELECT f.name, f.path, u.email_description, u.email_sender, u.date_sent 
                      FROM email u 
                      LEFT JOIN file f ON f.id = u.file_id';
        
            $stmt = $con->query($query);
            $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
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