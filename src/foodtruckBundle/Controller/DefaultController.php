<?php

namespace foodtruckBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * @Template("foodtruckBundle:Default:index.html.twig")
     */
    public function indexAction()
    {}
    /**
     * @Route("/localisationfixe", name="localisationfixe")
     * @Template("foodtruckBundle:Default:localisationfixe.html.twig")
     */
    public function getLocalisationfixe()
    {}
    /**
     * @Route("/localisationevenement", name="localisationevenement")
     * @Template("foodtruckBundle:Default:localisationevenement.html.twig")
     */
    public function getLocalisationevenement()
    {}
    /**
     * @Route("/reserver", name="reserver")
     * @Template("foodtruckBundle:Default:reserver.html.twig")
     */
    public function getReserver()
    {}
    /**
     * @Route("/contact", name="contact")
     * @Template("foodtruckBundle:Default:contact.html.twig")
     */
    public function getContact()
    {}
    /**
     * @Route("/galerie", name="galerie")
     * @Template("foodtruckBundle:Default:galerie.html.twig")
     */
    public function getGalerie()
    {}
    /**
     * @Route("/administration", name="administration")
     * @Template("foodtruckBundle:Default:administration.html.twig")
     */
    public function getAdministration()
    {}
    /**
     * @Route("/contact", name="contact")
     * @Template("foodtruckBundle:Default:contact.html.twig")
     */
    public function getContact2()
    {}
    /**
     * @Route("/contact2", name="contact2")
     * @Template("foodtruckBundle:Default:contact2.php")
     */
}
