<?php
 namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 use \Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 use Symfony\Component\HttpFoundation\Response as Response;
 use Symfony\Component\HttpFoundation\Request as Request;
 use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbstractController;
 use \Symfony\Component\HttpFoundation\JsonResponse as JsonResponse;
 
/**
 * Description of HomeController
 *
 * @author user
 */

 class HomeController extends AbstractController
 {
     
     /**
      * @Route("/", name="app_homepage")
      */
    public function homepage() 
    {
        return $this->render('views/home.html.twig');
    }
           
    
    /**
     * @Route("/delcatmaker", name="app_delcatmaker")
     */
    public function delCatMaker()
    {
        return $this->render('views/delcatmaker.html.twig', [
            'title' => 'DelCatMaker'
        ]);
    }
    
    /**
     * @Route("/delcatmaker/upload", name="app_delcatmaker_post", methods={"POST"})
     */
    public function delCatMakerUpload()
    {
        return $this->render('views/delcatmaker.html.twig', [
            'title' => 'upload'
        ]);
    }
    
    /**
     * @Route("/courseexport", name="app_course_export")
     */
    public function courseExport(){
        return $this->render('views/export.html.twig', [
            'title' => 'CourseExport'
        ]);
    }
}