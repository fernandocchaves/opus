<?php

namespace App\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 */
class IndexController extends Controller
{
    /**
     * @Route("/", name="home_dashboard")
     * @Method("GET")
     * @Template("HomeBundle:Index:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
