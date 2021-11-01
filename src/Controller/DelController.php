<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DelController extends AbstractController{

    public function index3() {
     
        $payload = file_get_contents("php://input");

        $servername ="localhost";
        $dbusername ="root";
        $dbPw="";
        $dbName ="prodb";
        $conn = mysqli_connect($servername, $dbusername, $dbPw, $dbName);

        $sql = "DELETE FROM `newtable` WHERE id = $payload ;";
        mysqli_query($conn, $sql);
        echo ("success!...");
    


        return $this->render("books/author2.html.twig",array( 'data' => "$payload"));
    }

}