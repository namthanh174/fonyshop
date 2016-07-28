<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductsController extends Controller {

    public function indexAction() {
        $productRepo = $this->get('doctrine')->getRepository('AppBundle:Products');
        $listProducts = $productRepo->getAllproducts();
        return new JsonResponse($listProducts);
        // return $this->render('AppBundle:Products:index.html.twig', array(
        //     'listProducts' => $listProducts
        // ));
    }

    public function deleteAction() {
        return $this->render('AppBundle:Products:delete.html.twig', array(
                        // ...
        ));
    }

}
