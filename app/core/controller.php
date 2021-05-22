<?php

namespace APP\core;

class controller{
    public function view($path ,$parm)
    {
        extract($parm);
        require_once(VIEWS.$path.".php");
    }


    
}











