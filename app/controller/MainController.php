<?php
use Imy\Core\Config;
use Imy\Core\Definer;
use Imy\Core\Controller;
use Imy\Core\Tools;
use Imy\Core\Model;

class MainController extends Controller
{
    function init()
    {
        $this->v['title'] = 'Тестовое задание';

      
       $get_data = new Rundb('review','test');
       $data1 = $get_data-> getAll();
       
       $this->v['$data'] = $data1;

    }

    function ajax_test() {

      $data = ['success' => false, 'messages' => $_POST['messages'], 'name' => $_POST['name']];

      $nameus = $data['name'];
      $messageus = $data['messages'];

      Definer::init();
      $config_file = '../app/config_sample.php';
      Config::release(include $config_file);
  
      $get_data = new Insertdb('review','test');
    
      $query = "INSERT INTO `review`(`name`, `message`, `date`) VALUES ('$nameus','$messageus',now())";
      $get_data->query($query);
     /*
        $template = tpl('tmp.test');
        $this->v['message'] = Tools::get_include_contents($template,[
            'ajaxtestvar' => '33'
        ]);
        */
    }

}
