<?php
namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
class StudentController extends AbstractController {
    // /** 
    //  * @Route ("/index/",name="index")
    //  */
public function index(): Response{
    // echo "Bonjour mes étudiants";
    return new Response(
     '<html>
     <body>
    <div style="margin:auto;width:50%;background-color:black;border-radius 25px;">
      <h1 style="color:#ffff00;text-align:center">ITS WORKING</h1> 
    <div>
      </body>
      </html>'
    );
}


}




?>