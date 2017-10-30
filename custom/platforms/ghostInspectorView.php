<?php
/**
 * Created by PhpStorm.
 * User: goekhan.bastan
 * Date: 27.10.2017
 * Time: 13:11
 */

require_once('../../config.inc.php');

 class GhostInspector {

    public $url='https://api.ghostinspector.com/v1/suites/59f7159de6fa2c7eb59535d0/tests/?apiKey=adfef11650cdc69490229f96d699764251a5a8c0';
    public $defaultURL = 'https://ghostinspector.com/';
    public $d = 'https://goekhan.bastan@udg:Mdtronic"10app.ghostinspector.com/account/login';

     public function start()
     {
         $dataObject =  file_put_contents('myfile.json',file_get_contents($this->url));
         $file = json_decode($dataObject);
         var_dump($file);
      }

 }

$ghost = new GhostInspector();
$ghost->start();


?>