<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyController extends AbstractController{

    public function index() {

        $servername ="localhost";
        $dbusername ="root";
        $dbPw="";
        $dbName ="prodb";
        $conn = mysqli_connect($servername, $dbusername, $dbPw, $dbName);

        $sql = "SELECT * FROM newtable;";
        $results = mysqli_query($conn, $sql);
        $rescheck = mysqli_num_rows($results);
        $result_array = array();

        if ($rescheck >0  ){
            while($row = mysqli_fetch_assoc($results)){
                
              $result_array[] = $row;

              
            };    
        }
        return $this->render("books/author.html.twig",array( 'data' => $result_array));

    }

}