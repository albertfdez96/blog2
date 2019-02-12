<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 23/01/19
 * Time: 17:53
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(){


        return $this->render('home/home.html.twig');
    }


}