<?php
    class Email extends File{
        public function __construct(string $name, string $path,private string $emailSender,private string $emailReceiver,private DateTime $dateSend){
            parent::__construct($name,$path);

        }
        public function save(){
            echo $this->name;
        }

    }