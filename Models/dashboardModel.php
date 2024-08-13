<?php
    use App\database\Database;
    include_once(__DIR__.'/../Database/Database.php');
    include_once(__DIR__.'/../classes/email.php');
    include_once(__DIR__.'/../classes/estimate.php');
    include_once(__DIR__.'/../classes/factory.php');
    include_once(__DIR__.'/../classes/command.php');

    class DashboardModel{
        public function index(){
            $con = Database::Connect();
            $Emails = Email::GetAll($con);
            $factroy = Factroy::GetAll($con);
            $estimate = Estimate::GetAll($con);
            $command = Command::GetAll($con);
            $data = array('email'=>$Emails,'factory'=>$factroy,"estimate"=>$estimate,'command'=>$command);
            
            return $data;
        }
    }