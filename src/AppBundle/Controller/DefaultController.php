<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
    
    /**
     * 
     * @Route("/admin",name="admin")
     */
    public function adminAction(){
        return new Response('<html><body>Admin page!</body></html>');
    }
    /**
     * 
     * @Route("/user",name="user")
     */
    public function userAction(){
        return new Response('<html><body>USER THANH page!</body></html>');
    }
    /**
     * 
     * @Route("/hello",name="hello")
     */
    public function helloAction(){
        $this->denyAccessUnlessGranted('ROLE_ADMIN',null,'Unable access this page.');
        return new Response('<html><body>Hello THANH page!</body></html>');
    }
}
