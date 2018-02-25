<?php
 namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 use \Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 use Symfony\Component\HttpFoundation\Response;
 
/**
 * Description of HomeController
 *
 * @author user
 */

 class ArticleController {
     
     /**
      * @Route("/")
      */
    public function homepage() 
    {
        return new Response('OMG!');
    }
           
    
    /**
     * @Route("/test")
     */
    public function test(){
        return new Response('test');
    }
}