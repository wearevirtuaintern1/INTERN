<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
    {
    /**
     * @Route("/welcome/", name="app_welcome")
     */
    public function dataAction()
      {
          $dataAction = date("l jS \of F Y h:i:s A");

          return $this -> render('welcome.html.twig',[ 'data' => $dataAction]);
      }

    }

