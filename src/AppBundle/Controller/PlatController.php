<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Plat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Plat controller.
 *
 * @Route("plat")
 */
class PlatController extends Controller
{
    /**
     * Lists all plat entities.
     *
     * @Route("/", name="plat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $plats = $em->getRepository('AppBundle:Plat')->findAll();

        return $this->render('plat/index.html.twig', array(
            'plats' => $plats,
        ));
    }

    /**
     * Finds and displays a plat entity.
     *
     * @Route("/{id}", name="plat_show")
     * @Method("GET")
     */
    public function showAction(Plat $plat)
    {

        return $this->render('plat/show.html.twig', array(
            'plat' => $plat,
        ));
    }
}
