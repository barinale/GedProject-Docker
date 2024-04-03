<?php
namespace Ged\Library;
    function view($view,$data=null){
      
        include_once(__DIR__.'/../Views/'.$view);
    }