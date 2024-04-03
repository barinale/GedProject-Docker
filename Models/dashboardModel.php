<?php
    namespace Ged\Models;
    use Ged\database\Database;
    use Ged\classes;

    class DashboardModel{
        public function index(){
            $con = Database::Connect();
            $Emails = classes\Email::GetAll($con);
            $factroy = classes\Factroy::GetAll($con);
            $estimate = classes\Estimate::GetAll($con);
            $command = classes\Command::GetAll($con);

            $data = array('email'=>$Emails,'factory'=>$factroy,"estimate"=>$estimate,'command'=>$command);
            $con->close();
            return $data;
        }
    }