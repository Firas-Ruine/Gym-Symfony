<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalleController extends AbstractController
{
    /**
     * @Route("/salle", name="salle")
     */
    public function index(): Response
    {
        return $this->render('salle/index.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
    /**
     * @Route("about", name="about")
     */
    public function about(): Response
    {
        return $this->render('salle/about.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

    /**
     * @Route("courses", name="courses")
     */
    public function courses(): Response
    {
        return $this->render('salle/courses.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

    /**
     * @Route("pricing", name="pricing")
     */
    public function pricing(): Response
    {
        return $this->render('salle/pricing.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
    /**
     * @Route("gallery", name="gallery")
     */
    public function gallery(): Response
    {
        return $this->render('salle/gallery.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

    /**
     * @Route("contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('salle/contact.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
     
    /**
     * @Route("coaches", name="coaches")
     */
    public function coaches(): Response
    {
        return $this->render('salle/coaches.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

    /**
     * @Route("crossfit", name="crossfit")
     */
    public function crossfit(): Response
    {
        return $this->render('salle/crossfit.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

    /**
     * @Route("kickboxing", name="kickboxing")
     */
    public function kickboxing(): Response
    {
        return $this->render('salle/kickboxing.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
 
    /**
     * @Route("Fitness_details", name="Fitness_details")
     */
    public function Fitness_details(): Response
    {
        return $this->render('salle/Fitness_details.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

    /**
     * @Route("crossfit_details", name="crossfit_details")
     */
    public function crossfit_details(): Response
    {
        return $this->render('salle/crossfit_details.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

     /**
     * @Route("kickboxing_details", name="kickboxing_details")
     */
    public function kickboxing_details(): Response
    {
        return $this->render('salle/kickboxing_details.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }

}

