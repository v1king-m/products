<?php

namespace v1m\ProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProductController extends Controller
{
    /**
     * @Route("/")
     * @Template("v1mProdBundle:Product:prod_list.html.twig")
     */
    public function listAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/{id}")
     * @Template("v1mProdBundle:Product:prod_show.html.twig")
     */
    public function showAction($id)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/admin/new")
     * @Template("v1mProdBundle:Product:prod_new.html.twig")
     */
    public function newAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/admin/{id}/edit")
     * @Template("v1mProdBundle:Product:prod_edit.html.twig")
     */
    public function editAction($id)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/admin/{id}")
     * @Template("v1mProdBundle:Product:prod_delete.html.twig")
     */
    public function deleteAction($id)
    {
        return array(
                // ...
            );    }

}
