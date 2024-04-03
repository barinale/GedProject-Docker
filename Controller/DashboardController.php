<?php
namespace Ged\Controller;

use Ged\Models\DashboardModel;

use function Ged\Library\view;

    class DashboardController{
        public function Index(){
            $dashboardModel = new DashboardModel();
            $data = $dashboardModel->index();
            return view('Home.php',$data);
        }


    }