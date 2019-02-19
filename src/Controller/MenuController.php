<?php
/**
 * Created by PhpStorm.
 * User: virtua
 * Date: 2019-02-19
 * Time: 10:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductCategoryRepository;

class MenuController extends AbstractController
{
    public function menuAction (ProductCategoryRepository $productCategoryRepository)
    {

        return $this->render('menu.html.twig', ['product_categories' => $productCategoryRepository->findAll(),]);

    }

}
