<?php
/**
 * Created by PhpStorm.
 * User: ofanziva
 * Date: 29.7.2017 г.
 * Time: 15:21 ч.
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {

        return $this->render('AppBundle:Home:home.html.twig');
    }
}