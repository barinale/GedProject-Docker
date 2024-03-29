<?php
    class Email extends File{
        private string $path;
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