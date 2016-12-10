<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 06-11-2016
 * Time: 18:33
 */

namespace AppBundle\Application\SYS;


class Url
{
    private $Url;
    public function __construct(){
        $this->Url=explode('/', $_SERVER['REQUEST_URI']);

        return $this->Url;
    }
}