<?php
/**
 * Created by PhpStorm.
 * User: goekhan.bastan
 * Date: 27.10.2017
 * Time: 13:11
 */

require_once('../../config.inc.php');
require_once('FetchData.php');

 class GhostInspector
{


     public function start()
     {
         $fetchData = new FetchData();
         $dataObject =  file_put_contents('myfile.json',file_get_contents($fetchData->getUrl()));
         $file = json_decode($dataObject);
         var_dump($file);
      }

      public function generateView()
      {
          echo <<< EOT
<h1>Du hast die Json Datei :D</h1>
  
EOT;

      }

}

$ghost = new GhostInspector();
$ghost->start();
$ghost->generateView();

?>