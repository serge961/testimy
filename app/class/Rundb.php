<?php

use Imy\Core\Config;
use Imy\Core\Definer;
use Imy\Core\Model;


Class Rundb extends Model{
   
    private $config_file = '../app/config_sample.php';

public function getAllOld()
{
    return $this->get()->where('id', '0', '>')->fetch();
}

public function getAll()
{
    Definer::init();
    
    $config_file = $this->config_file;
    Config::release(include $config_file);

    $data = [];
    $n=1;
    while($this->getById($n) != ''){

       $data[] = (array) $this->getById($n);

        $n++;
    }
      
    krsort($data);
    return $data;
}


}

?>