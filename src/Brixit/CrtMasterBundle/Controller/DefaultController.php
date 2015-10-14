<?php

namespace Brixit\CrtMasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BrixitCrtMasterBundle:Default:index.html.twig', array());
    }
}
