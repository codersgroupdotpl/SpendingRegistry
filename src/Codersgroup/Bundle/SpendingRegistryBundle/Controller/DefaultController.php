<?php

namespace Codersgroup\Bundle\SpendingRegistryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CodersgroupSpendingRegistryBundle:Default:index.html.twig', array('name' => $name));
    }
}
