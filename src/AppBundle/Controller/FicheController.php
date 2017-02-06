<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Entity\Fiche;

class FicheController extends Controller
{
    /**
     * @Route("/fiches", name="fiches")
     */
    public function indexAction(){
        return $this->render('Fiche/fiches.html.twig');

    }


    /**
     * @Route("/fiches/{id}", name="fiche")
     * @ParamConverter("fiche", class="AppBundle:Fiche")
     */
    public function ficheAction(Fiche $fiche){
        return $this->render('Fiche/fiche.html.twig', ['fiche' => $fiche]);

    }
}
