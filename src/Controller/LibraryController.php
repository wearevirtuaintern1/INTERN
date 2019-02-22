<?php
/**
 * Created by PhpStorm.
 * User: virtua
 * Date: 2019-02-20
 * Time: 11:57
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library/", name="app_library")
     */
    public function dataAction()
    {
        $dataAction = date("l jS \of F Y h:i:s A");

        return $this -> render('library.html.twig',[ 'data' => $dataAction]);
    }

}
